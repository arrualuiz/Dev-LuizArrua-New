// =====================
// CONFIG (pt-BR)
// =====================
const TIMEZONE = "America/Sao_Paulo";
const NEWS_API_KEY = "75438efede234902a8585ea236ca1889";

// Helpers (em inglês)
const $ = (id) => document.getElementById(id);
const exists = (id) => !!$(id);

// =====================
// MENU (funciona em todas as páginas)
// =====================
(() => {
  const btn = $("menuBtn");
  const panel = $("menuPanel");
  const overlay = $("menuOverlay");
  const closeBtn = $("menuClose");

  // Se a página não tem menu, só sai fora
  if (!btn || !panel || !overlay || !closeBtn) return;

  const openMenu = () => {
    panel.hidden = false;
    overlay.hidden = false;

    // Dá 1 frame pra transição pegar
    requestAnimationFrame(() => panel.classList.add("is-open"));

    btn.setAttribute("aria-expanded", "true");
  };

  const closeMenu = () => {
    panel.classList.remove("is-open");
    btn.setAttribute("aria-expanded", "false");

    // Espera a transição e esconde de verdade
    setTimeout(() => {
      panel.hidden = true;
      overlay.hidden = true;
    }, 180);
  };

  btn.addEventListener("click", () => {
    const isOpen = panel.classList.contains("is-open");
    isOpen ? closeMenu() : openMenu();
  });

  closeBtn.addEventListener("click", closeMenu);
  overlay.addEventListener("click", closeMenu);

  document.addEventListener("keydown", (e) => {
    if (e.key === "Escape" && panel.classList.contains("is-open")) closeMenu();
  });
})();

// =====================
// CLOCK + DATE (só se existir)
// =====================
function updateClock() {
  const clockEl = $("clock");
  const dateEl = $("date");
  if (!clockEl || !dateEl) return;

  const now = new Date();

  const timeOptions = {
    timeZone: TIMEZONE,
    hour: "2-digit",
    minute: "2-digit",
    second: "2-digit",
  };

  const dateOptions = {
    timeZone: TIMEZONE,
    weekday: "long",
    day: "numeric",
    month: "long",
  };

  clockEl.textContent = now.toLocaleTimeString("pt-BR", timeOptions);
  dateEl.textContent = now.toLocaleDateString("pt-BR", dateOptions).toLowerCase();
}

if (exists("clock") && exists("date")) {
  updateClock();
  setInterval(updateClock, 1000);
}

function updateHeaderClock() {
  const headerClocks = document.querySelectorAll("[data-header-clock]");
  const headerDates = document.querySelectorAll("[data-header-date]");
  if (!headerClocks.length && !headerDates.length) return;

  const now = new Date();
  const timeStamp = now.toLocaleTimeString("pt-BR", {
    timeZone: TIMEZONE,
    hour: "2-digit",
    minute: "2-digit",
    second: "2-digit",
  });
  const dateStamp = now.toLocaleDateString("pt-BR", {
    timeZone: TIMEZONE,
    weekday: "short",
    day: "2-digit",
    month: "2-digit",
    year: "numeric",
  });

  headerClocks.forEach((el) => {
    el.textContent = timeStamp;
  });
  headerDates.forEach((el) => {
    el.textContent = dateStamp.replace(".", "");
  });
}

updateHeaderClock();
setInterval(updateHeaderClock, 1000);

// =====================
// CALENDAR (só se existir)
// =====================
function generateCalendar() {
  const calendarEl = $("calendar");
  if (!calendarEl) return;

  const now = new Date();
  const year = now.getFullYear();
  const month = now.getMonth();

  const monthName = now.toLocaleString("pt-BR", { month: "long" });
  const monthYearHeader = `${monthName} ${year}`;

  const firstDay = new Date(year, month, 1).getDay(); // 0=Dom..6=Sáb
  const daysInMonth = new Date(year, month + 1, 0).getDate();

  let html = `<h3 style="text-transform:capitalize;">${monthYearHeader}</h3>`;
  html += `<div class="calendar-grid">`;

  const dayNames = ["Dom", "Seg", "Ter", "Qua", "Qui", "Sex", "Sáb"];
  dayNames.forEach((d) => (html += `<div class="day-name">${d}</div>`));

  // Espaços vazios antes do dia 1
  for (let i = 0; i < firstDay; i++) html += `<div class="day empty"></div>`;

  // Dias do mês
  for (let d = 1; d <= daysInMonth; d++) {
    const isToday = d === now.getDate();
    html += `<div class="day ${isToday ? "today" : ""}">${d}</div>`;
  }

  html += `</div>`;
  calendarEl.innerHTML = html;
}

// Atualiza calendário/relógio na virada do dia
function scheduleMidnightRefresh() {
  if (!exists("calendar") && !exists("clock")) return;

  const now = new Date();
  const msUntilMidnight =
    new Date(now.getFullYear(), now.getMonth(), now.getDate() + 1, 0, 0, 5) - now;

  setTimeout(() => {
    updateClock();
    generateCalendar();
    renderDateMeta(); // atualiza dia do ano/semana/mês-ano também
    scheduleMidnightRefresh();
  }, msUntilMidnight);
}

if (exists("calendar")) {
  generateCalendar();
  scheduleMidnightRefresh();
}

// =====================
// DATE META (dia do ano / semana / mês-ano) (só se existir)
// =====================
function getDayOfYear(date) {
  const start = new Date(date.getFullYear(), 0, 0);
  const diff = date - start;
  const oneDay = 1000 * 60 * 60 * 24;
  return Math.floor(diff / oneDay);
}

function getWeekNumber(date) {
  const firstDayOfYear = new Date(date.getFullYear(), 0, 1);
  const pastDaysOfYear = (date - firstDayOfYear) / 86400000;
  return Math.ceil((pastDaysOfYear + firstDayOfYear.getDay() + 1) / 7);
}

function renderDateMeta() {
  const now = new Date();

  // Dia do ano
  const dayOfYearEl = $("diaDoAno");
  if (dayOfYearEl) {
    const day = getDayOfYear(now);
    const total = new Date(now.getFullYear(), 1, 29).getMonth() === 1 ? 366 : 365;
    dayOfYearEl.textContent = `Dia ${day} de ${total} do ano`;
  }

  // Semana do ano
  const weekEl = $("semanaAtual");
  if (weekEl) {
    const week = getWeekNumber(now);
    weekEl.textContent = `Semana ${week} de 52 do ano`;
  }

  // Mês / Ano (extra)
  const monthYearEl = $("monthYear");
  if (monthYearEl) {
    const monthNameRaw = now.toLocaleString("pt-BR", { month: "long" });
    const monthName = monthNameRaw.charAt(0).toUpperCase() + monthNameRaw.slice(1); // <<< aqui
    const year = now.getFullYear();
    monthYearEl.textContent = `Mês ${monthName} de ${year}`;
  }
}

renderDateMeta();

// =====================
// COUNTDOWNS (só se existir cada id)
// =====================
function createCountdown(targetISO, elId, endMessage, templateFn) {
  const el = $(elId);
  if (!el) return;

  const tick = () => {
    const target = new Date(targetISO);
    const now = new Date();
    const diff = target - now;

    if (diff <= 0) {
      el.textContent = endMessage;
      return;
    }

    const days = Math.floor(diff / (1000 * 60 * 60 * 24));
    const hours = Math.floor((diff / (1000 * 60 * 60)) % 24);
    const minutes = Math.floor((diff / (1000 * 60)) % 60);
    const seconds = Math.floor((diff / 1000) % 60);

    el.textContent = templateFn(days, hours, minutes, seconds);
  };

  tick();
  setInterval(tick, 1000);
}

createCountdown(
  "2026-12-31T23:59:59",
  "contador",
  "🎉 Feliz 2027!",
  (d, h, m, s) => `2027: ${d}d ${h}h ${m}m ${s}s 🎆`
);

createCountdown(
  "2026-12-29T23:59:59",
  "contadorBia",
  "🎉 Parabéns meu amor!",
  (d, h, m, s) => `Bia: ${d}d ${h}h ${m}m ${s}s 🤍`
);

createCountdown(
  "2027-01-07T23:59:59",
  "contadorLuiz",
  "🎉 Parabéns Luiz!",
  (d, h, m, s) => `Meu niver: ${d}d ${h}h ${m}m ${s}s 🎉`
);

// =====================
// WEATHER (Open-Meteo) (só se existir)
// - sem inline style: usa classes do CSS
// =====================
function weatherCodeToText(code) {
  const map = {
    0: "céu limpo",
    1: "principalmente limpo",
    2: "parcialmente nublado",
    3: "nublado",
    45: "névoa",
    48: "névoa com cristais",
    51: "chuvisco leve",
    53: "chuvisco moderado",
    55: "chuvisco forte",
    61: "chuva fraca",
    63: "chuva moderada",
    65: "chuva forte",
    80: "chuvas ocasionais",
    81: "chuvas frequentes",
    82: "chuvas intensas",
    95: "trovoada",
    96: "trovoada com granizo leve",
    99: "trovoada com granizo forte",
  };
  return map[code] || "clima";
}

async function fetchWeather() {
  const info = $("weather-info");
  if (!info) return;

  try {
    const lat = -25.5093;
    const lon = -49.2710;

    const url =
      `https://api.open-meteo.com/v1/forecast?latitude=${lat}&longitude=${lon}` +
      `&current_weather=true&windspeed_unit=kmh&temperature_unit=celsius&timezone=${TIMEZONE}`;

    const res = await fetch(url);
    const data = await res.json();

    if (data?.current_weather) {
      const c = data.current_weather;
      const desc = weatherCodeToText(c.weathercode);

      info.innerHTML =
        `<div class="weather-temp">${Number(c.temperature).toFixed(1)}°C</div>` +
        `<div class="weather-desc">${desc} • vento ${Math.round(c.windspeed)} km/h</div>`;
    } else {
      info.textContent = "dados indisponíveis";
    }
  } catch (err) {
    info.textContent = "erro ao carregar clima";
    console.error("weather error", err);
  }
}

fetchWeather();

// =====================
// NEWS (NewsAPI) (só se existir)
// =====================
async function loadNews() {
  if (!exists("news-list-coritiba") && !exists("news-list-santos")) return;

  async function fetchTopic(query, listId) {
    const listEl = $(listId);
    if (!listEl) return;

    try {
      const url = `https://newsapi.org/v2/everything?q=${encodeURIComponent(query)}&language=pt&apiKey=${NEWS_API_KEY}`;
      const res = await fetch(url);
      const json = await res.json();

      listEl.innerHTML = "";

      if (json.articles?.length) {
        json.articles.slice(0, 6).forEach((a) => {
          const li = document.createElement("li");
          li.innerHTML = `<a href="${a.url}" target="_blank" rel="noopener">${a.title}</a>`;
          listEl.appendChild(li);
        });
      } else {
        listEl.innerHTML = `<li>Nenhuma notícia encontrada para ${query}.</li>`;
      }
    } catch (err) {
      listEl.innerHTML = `<li>Falha ao carregar notícias.</li>`;
      console.error("news error", err);
    }
  }

  fetchTopic("Coritiba", "news-list-coritiba");
  fetchTopic("Santos", "news-list-santos");
}

loadNews();

// =====================
// PRIVATE CV PIN (só se existir botões)
// =====================
function setPin() {
  const pin = prompt("Defina um PIN numérico para o seu currículo privado (ex: 1234):");
  if (!pin) return alert("PIN não definido.");
  localStorage.setItem("arrua_cv_pin", pin);
  alert("PIN salvo localmente.");
}

function openPrivateCV() {
  const stored = localStorage.getItem("arrua_cv_pin");

  if (!stored) {
    if (confirm("Nenhum PIN definido. Deseja definir agora?")) setPin();
    return;
  }

  const attempt = prompt("Insira o PIN para ver o currículo privado:");
  if (attempt === stored) {
    const box = $("private-cv");
    if (box) box.style.display = "block";
  } else {
    alert("PIN incorreto.");
  }
}

document.addEventListener("click", (e) => {
  const target = e.target;
  if (target?.id === "set-pin") setPin();
  if (target?.id === "open-private") openPrivateCV();
});

// Debug
console.log("script.js carregou!");

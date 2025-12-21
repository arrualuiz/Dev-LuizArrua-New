// ====== CONFIG ======
const TIMEZONE = 'America/Sao_Paulo';
const NEWS_API_KEY = '75438efede234902a8585ea236ca1889'; 

// ====== RELÓGIO E DATA ======
function updateClock(){
  const now = new Date();
  const optsTime = { timeZone: 'America/Sao_Paulo', hour:'2-digit', minute:'2-digit', second:'2-digit' };
  const optsDate = { timeZone: 'America/Sao_Paulo', weekday:'long', day:'numeric', month:'long' };
  const hora = now.toLocaleTimeString('pt-BR', optsTime);
  const data = now.toLocaleDateString('pt-BR', optsDate).toLowerCase();
  document.getElementById('clock').textContent = hora;
  document.getElementById('date').textContent = data;
}
setInterval(updateClock, 1000);
updateClock();

// ====== CALENDÁRIO ======
function generateCalendar(){
  const calendar = document.getElementById('calendar');
  const now = new Date();
  const year = now.getFullYear();
  const month = now.getMonth();

  const monthName = now.toLocaleString('pt-BR', {month:'long'});
  const monthYearHeader = `${monthName} ${year}`;

  // first day of month (0=Sun..6=Sat)
  const firstDay = new Date(year, month, 1).getDay();
  const daysInMonth = new Date(year, month+1, 0).getDate();

  let html = `<h3 style="text-transform:capitalize;">${monthYearHeader}</h3>`;
  html += '<div class="calendar-grid">';
  const dayNames = ['Dom','Seg','Ter','Qua','Qui','Sex','Sáb'];
  dayNames.forEach(d=> html += `<div class="day-name">${d}</div>`);

  // leading empty slots for days before the 1st (firstDay already 0=Sunday)
  for(let i=0;i<firstDay;i++) html += '<div class="day empty"></div>';

  for(let d=1; d<=daysInMonth; d++){
    const isToday = d === now.getDate();
    html += `<div class="day ${isToday ? 'today' : ''}">${d}</div>`;
  }

  html += '</div>';
  // footer info with month/year
  html += `<div style="margin-top:12px;color:var(--muted);text-align:center;">Mês: ${monthName} • Ano: ${year}</div>`;
  calendar.innerHTML = html;
}
generateCalendar();

// regenerate at midnight to update day/month
function scheduleMidnightRefresh(){
  const now = new Date();
  const msUntilMidnight = new Date(now.getFullYear(), now.getMonth(), now.getDate()+1, 0, 0, 5) - now;
  setTimeout(()=>{
    updateClock();
    generateCalendar();
    scheduleMidnightRefresh();
  }, msUntilMidnight);
}
scheduleMidnightRefresh();

// ====== helpers ======
function capitalize(s){ if(!s) return s; return s.charAt(0).toUpperCase()+s.slice(1); }
function escapeHtml(str){ return str.replace(/&/g,'&amp;').replace(/</g,'&lt;').replace(/>/g,'&gt;'); }

function getDayOfYear(date) {
  const start = new Date(date.getFullYear(), 0, 0);
  const diff = date - start;
  const oneDay = 1000 * 60 * 60 * 24;
  return Math.floor(diff / oneDay);
}

function mostrarDiaDoAno() {
  const hoje = new Date();
  const dia = getDayOfYear(hoje);

  // total de dias do ano (bissexto ou não)
  const total = new Date(hoje.getFullYear(), 1, 29).getMonth() === 1 ? 366 : 365;

  document.getElementById("diaDoAno").textContent =
    `Dia ${dia} de ${total} do ano`;
}

mostrarDiaDoAno();


function getWeekNumber(date) {
  const firstDayOfYear = new Date(date.getFullYear(), 0, 1);
  const pastDaysOfYear = (date - firstDayOfYear) / 86400000;
  return Math.ceil((pastDaysOfYear + firstDayOfYear.getDay() + 1) / 7);
}

function mostrarSemanaAtual() {
  const hoje = new Date();
  const semana = getWeekNumber(hoje);
  document.getElementById("semanaAtual").textContent = `Semana ${semana} de 52 do ano`;
}

mostrarSemanaAtual();

// ====== CONTAGEM REGRESSIVA PARA 2026 ======
function atualizarContagemRegressiva() {
  const destino = new Date("2025-12-31T23:59:59");
  const agora = new Date();
  const diff = destino - agora;

  if (diff <= 0) {
    document.getElementById("contador").textContent = "🎉 Feliz 2026!";
    return;
  }

  const dias = Math.floor(diff / (1000 * 60 * 60 * 24));
  const horas = Math.floor((diff / (1000 * 60 * 60)) % 24);
  const minutos = Math.floor((diff / (1000 * 60)) % 60);
  const segundos = Math.floor((diff / 1000) % 60);

  document.getElementById("contador").textContent = 
    `Faltam ${dias}d ${horas}h ${minutos}m ${segundos}s para 2026 🎆`;
}

setInterval(atualizarContagemRegressiva, 1000);
atualizarContagemRegressiva();

// ====== CONTAGEM REGRESSIVA ANIVERSÁRIO BIA ======
function atualizarAniversarioBia() {
  const destino = new Date("2025-12-29T23:59:59");
  const agora = new Date();
  const diff = destino - agora;

  if (diff <= 0) {
    document.getElementById("contadorBia").textContent = "🎉 Parabéns meu amor!";
    return;
  }

  const dias = Math.floor(diff / (1000 * 60 * 60 * 24));
  const horas = Math.floor((diff / (1000 * 60 * 60)) % 24);
  const minutos = Math.floor((diff / (1000 * 60)) % 60);
  const segundos = Math.floor((diff / 1000) % 60);

  document.getElementById("contadorBia").textContent = 
    `Faltam ${dias}d ${horas}h ${minutos}m ${segundos}s para aniversário da Bia 🤍`;
}

setInterval(atualizarAniversarioBia, 1000);
atualizarAniversarioBia();

// ====== CONTAGEM REGRESSIVA ANIVERSÁRIO LUIZ ======
function atualizarAniversarioLuiz() {
  const destino = new Date("2026-01-07T23:59:59");
  const agora = new Date();
  const diff = destino - agora;

  if (diff <= 0) {
    document.getElementById("contadorLuiz").textContent = "🎉 Parabéns Luiz!";
    return;
  }

  const dias = Math.floor(diff / (1000 * 60 * 60 * 24));
  const horas = Math.floor((diff / (1000 * 60 * 60)) % 24);
  const minutos = Math.floor((diff / (1000 * 60)) % 60);
  const segundos = Math.floor((diff / 1000) % 60);

  document.getElementById("contadorLuiz").textContent = 
    `Faltam ${dias}d ${horas}h ${minutos}m ${segundos}s para meu aniversário 🎉`;
}

setInterval(atualizarAniversarioLuiz, 1000);
atualizarAniversarioLuiz();

// ====== WEATHER (Open-Meteo) ======
async function fetchWeather() {
  try {
    // coords default (Curitiba)
    const lat = -25.5093, lon = -49.2710;
    const url = `https://api.open-meteo.com/v1/forecast?latitude=${lat}&longitude=${lon}&current_weather=true&windspeed_unit=kmh&temperature_unit=celsius&timezone=${TIMEZONE}`;
    const res = await fetch(url);
    const data = await res.json();
    const info = document.getElementById('weather-info');
    if(data && data.current_weather){
      const c = data.current_weather;
      const desc = weatherCodeToText(c.weathercode);
      info.innerHTML = `<div style="font-weight:700">${Number(c.temperature).toFixed(1)}°C</div><div style="color:var(--muted);font-size:0.95rem">${desc} • vento ${Math.round(c.windspeed)} km/h</div>`;
    } else {
      if(info) info.textContent = 'dados indisponíveis';
    }
  } catch(err){
    const info = document.getElementById('weather-info');
    if(info) info.textContent = 'erro ao carregar clima';
    console.error('weather err', err);
  }
}
function weatherCodeToText(code){
  const map = {
    0:'céu limpo',1:'principalmente limpo',2:'parcialmente nublado',3:'nublado',
    45:'névoa',48:'névoa com cristais',51:'chuvisco leve',53:'chuvisco moderado',
    55:'chuvisco forte',61:'chuva fraca',63:'chuva moderada',65:'chuva forte',
    80:'chuvas ocasionais',81:'chuvas frequentes',82:'chuvas intensas',
    95:'trovoada',96:'trovoada com granizo leve',99:'trovoada com granizo forte'
  };
  return map[code] || 'clima';
}
fetchWeather();

// ====== NOTÍCIAS (fallback local se API falhar) ======
async function carregarNoticias(){
  async function buscar(q, elId){
    try{
      const url = `https://newsapi.org/v2/everything?q=${encodeURIComponent(q)}&language=pt&apiKey=${NEWS_API_KEY}`;
      const r = await fetch(url);
      const j = await r.json();
      const el = document.getElementById(elId);
      if(!el) return;
      el.innerHTML = '';
      if(j.articles && j.articles.length){
        j.articles.slice(0,6).forEach(a=>{
          const li = document.createElement('li');
          li.innerHTML = `<a href="${a.url}" target="_blank">${a.title}</a>`;
          el.appendChild(li);
        });
      } else {
        el.innerHTML = `<li>Nenhuma notícia encontrada para ${q}.</li>`;
      }
    }catch(e){
      // fallback local
      const fallback = {
        Coritiba:[ "Coritiba enfrenta desafio", "Próximo jogo do Coritiba" ],
        Santos:[ "Santos prepara mudanças", "Peixe busca reforços" ]
      };
      const el = document.getElementById(elId);
      if(!el) return;
      el.innerHTML = '';
      const lista = fallback[q] || [];
      lista.forEach(t=>{
        const li = document.createElement('li');
        li.innerHTML = `<a href="#">${t}</a>`;
        el.appendChild(li);
      });
    }
  }
  buscar('Coritiba','news-list-coritiba');
  buscar('Santos','news-list-santos');
}
carregarNoticias();

// ====== CONTADORES (ex: contagem para fim de ano) ======
function atualizarContador(){
  const el = document.getElementById('contador');
  if(!el) return;
  const destino = new Date("2025-12-31T23:59:59");
  const agora = new Date();
  const diff = destino - agora;
  if(diff <= 0) { el.textContent = '🎉 Feliz 2026!'; return; }
  const dias = Math.floor(diff / (1000*60*60*24));
  const horas = Math.floor((diff/(1000*60*60))%24);
  const minutos = Math.floor((diff/(1000*60))%60);
  const segundos = Math.floor((diff/1000)%60);
  el.textContent = `Faltam ${dias}d ${horas}h ${minutos}m ${segundos}s para 2026`;
}
setInterval(atualizarContador,1000);
atualizarContador();

// ====== CURRÍCULO PRIVADO — PIN via localStorage (simples) ======
function setPin(){
  const pin = prompt('Defina um PIN numérico para o seu currículo privado (ex: 1234):');
  if(!pin) return alert('PIN não definido.');
  localStorage.setItem('arrua_cv_pin', pin);
  alert('PIN salvo localmente.');
}
function openPrivateCV(){
  const stored = localStorage.getItem('arrua_cv_pin');
  if(!stored){
    if(confirm('Nenhum PIN definido. Deseja definir agora?')) setPin();
    return;
  }
  const attempt = prompt('Insira o PIN para ver o currículo privado:');
  if(attempt === stored){
    const box = document.getElementById('private-cv');
    if(box) box.style.display = 'block';
  } else {
    alert('PIN incorreto.');
  }
}
document.addEventListener('click', e=>{
  const t = e.target;
  if(t && t.id === 'set-pin') setPin();
  if(t && t.id === 'open-private') openPrivateCV();
});

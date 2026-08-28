<?php
// index.php — tudo publico por enquanto
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Luiz Arrua - Dashboard</title>
  <link rel="icon" type="image/png" href="la.png">
  <link rel="stylesheet" href="style.css" />
</head>
<body>
  <!-- Navegação (pública) -->
  <nav class="top-nav" aria-label="Navegação">
    <div class="nav-left">
      <a class="nav-brand" href="index.php">Arrua</a>
      <a class="nav-link" href="curriculo.php">Currículo</a>
    </div>

    <!-- login removido (tudo publico por enquanto) -->
  </nav>

  <div id="dashboard">
    <header>
      <div id="clock">00:00:00</div>
      <div id="date">domingo, 1 de janeiro</div>
    </header>

    <!-- Cards principais -->
    <main class="cards">
      <section id="weather-card" class="card">
        <h2>Clima</h2>
        <p id="weather-info">Carregando clima...</p>
      </section>

      <section id="news-card-coritiba" class="card">
        <h2>Notícias do Coritiba</h2>
        <ul id="news-list-coritiba">
          <li>Carregando notícias...</li>
        </ul>
      </section>

      <section id="news-card-santos" class="card">
        <h2>Notícias do Santos</h2>
        <ul id="news-list-santos">
          <li>Carregando notícias...</li>
        </ul>
      </section>

      <!-- Área logada (fica escondida até logar) -->
      <section id="links-card" class="card">
        <h2>Contabilidade - Links</h2>
        <ul>
          <li><a href="https://docs.google.com/spreadsheets/d/1SqUu1fw5SgwHiwha3lLJC5XAKqX1NOKkxcpnhI1cIxw/edit?gid=577845637#gid=577845637" target="_blank" rel="noopener">Contabilidade</a></li>
          <li><a href="https://docs.google.com/forms/d/e/1FAIpQLScnhM3FXm_Ldw2VxMeZU0sBzpIp6tZ1FCJQqcM9OJ23kb57GQ/viewform" target="_blank" rel="noopener">Preencher Formulário</a></li>
          <li><a href="https://docs.google.com/spreadsheets/d/14xSnJfiMm5ktOOBYdeN8qWvnDXacAAY9UThER-K92fY/edit?gid=1299908561#gid=1299908561" target="_blank" rel="noopener">Respostas Formulário</a></li>
          <li><a href="https://docs.google.com/spreadsheets/d/184jn40iP1gwTZ081O0LuxaHslSxT2De7zglmwMdnjvc/edit?gid=1124843239#gid=1124843239" target="_blank" rel="noopener">Dívidas/Pêndencias</a></li>
          <li><a href="https://docs.google.com/spreadsheets/d/1CqojjkZJM2e8eSAlAYsmq5snYd9BlJlreHAlZ6e0BKw/edit?gid=708432143#gid=708432143" target="_blank" rel="noopener">Lista de Compras</a></li>
          <li><a href="https://docs.google.com/forms/d/1nqYJ5cDPsYzPOuxhciFTB2_BOsTkHl2w7WwrW-xespg/edit" target="_blank" rel="noopener">Edição Formulário</a></li>
          <li><a href="https://docs.google.com/spreadsheets/d/1o8k9-iy3wgrdsQxs16KQmYtytnZeOC4DeQKD63SWoEE/edit?gid=324427797#gid=324427797" target="_blank" rel="noopener">iFood</a></li>
        </ul>
      </section>

      <section id="links-card-2" class="card">
        <h2>Coisas - Links</h2>
        <ul>
          <li><a href="https://onedrive.live.com/personal/be7c329acde20099/_layouts/15/Doc.aspx?sourcedoc={d3fb22b0-4912-45eb-b2b4-6447f4291ba6}&action=edit&wd=target%28Capa.one%7C9fc22ce0-eb50-467d-adaf-79f94b65d101%2FLuiz%20Arrua%7C6217daab-aa67-413b-af9a-0a1b224355e6%2F%29&wdorigin=NavigationUrl" target="_blank" rel="noopener">Diário OneDrive</a></li>
          <li><a href="https://docs.google.com/forms/d/e/1FAIpQLScnhM3FXm_Ldw2VxMeZU0sBzpIp6tZ1FCJQqcM9OJ23kb57GQ/viewform" target="_blank" rel="noopener">Link 2</a></li>
          <li><a href="https://docs.google.com/spreadsheets/d/14xSnJfiMm5ktOOBYdeN8qWvnDXacAAY9UThER-K92fY/edit?gid=1299908561#gid=1299908561" target="_blank" rel="noopener">Link 3</a></li>
          <li><a href="https://docs.google.com/spreadsheets/d/184jn40iP1gwTZ081O0LuxaHslSxT2De7zglmwMdnjvc/edit?gid=1124843239#gid=1124843239" target="_blank" rel="noopener">Link 4</a></li>
          <li><a href="https://docs.google.com/spreadsheets/d/1CqojjkZJM2e8eSAlAYsmq5snYd9BlJlreHAlZ6e0BKw/edit?gid=708432143#gid=708432143" target="_blank" rel="noopener">Link 5</a></li>
        </ul>
      </section>

      <!-- Placeholder bonitinho quando não está logado -->
      
    </main>

    <!-- Rodapé -->
    <footer>
      <div id="calendar"></div>
      <p id="semanaAtual" style="margin-top:20px; color:#9dbff9;"></p>
      <p id="contador" style="margin-top:15px; font-weight:500; color:#6daaff;"></p>
      <p id="contadorBia" style="margin-top:10px; font-weight:500; color:#6daaff;"></p>

      <!-- Assinatura -->
      <p class="signature">
        Desenvolvido por <span class="signature-name">Arrua</span> 🚀
      </p>
    </footer>
  </div>

  <!-- Modal de login -->
  <div class="modal-card" role="dialog" aria-modal="true" aria-labelledby="login-title">
      <div class="modal-head">
        <h2 id="login-title">Área logada</h2>
        <button class="icon-btn" type="button" data-close="true" aria-label="Fechar">✕</button>
      </div>

      <form id="login-form" class="form">
        <label class="field">
          <span>Usuário</span>
          <input id="login-user" type="text" placeholder="seu usuário" autocomplete="username" />
        </label>

        <label class="field">
          <span>Senha</span>
          <input id="login-pass" type="password" placeholder="sua senha" autocomplete="current-password" />
        </label>

        <p id="login-error" class="error" hidden>Usuário ou senha inválidos.</p>

        <div class="form-actions">
          <button class="btn" type="submit">Entrar</button>
          <button class="btn btn-ghost" type="button" data-close="true">Cancelar</button>
        </div>

        <p class="hint">⚠️ Isso é um “login de site estático” (front-end). Serve pra esconder, não pra bancar o banco do Itaú.</p>
      </form>
    </div>
  </div>

  <script src="script.js"></script>
</body>
</html>

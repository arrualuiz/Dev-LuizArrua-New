<?php
// pagina em PHP (conteudo igual ao HTML)
?>
<!doctype html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Arrua — Painel / News</title>
  <link rel="icon" href="la.png" />
  <link rel="stylesheet" href="style.css" />
</head>
<body>
  <div class="page">
    <header class="topbar">
      <div class="brand">Arrua • Painel</div>
      <nav>
        <a href="index.php">Home</a>
        <a href="sobre.php">Sobre</a>
      </nav>
    </header>

    <main class="panel container">
      <section class="panel-col">
        <div class="card">
          <h2>Clima</h2>
          <div id="weather-info">carregando...</div>
        </div>

        <div class="card">
          <h2>Calendário</h2>
          <div id="calendar-panel"></div>
        </div>

        <div class="card">
          <h2>Contadores</h2>
          <div id="contador">Carregando...</div>
        </div>
      </section>

      <section class="panel-col">
        <div class="card">
          <h2>Notícias — Coritiba</h2>
          <ul id="news-list-coritiba"><li>carregando...</li></ul>
        </div>

        <div class="card">
          <h2>Notícias — Santos</h2>
          <ul id="news-list-santos"><li>carregando...</li></ul>
        </div>
      </section>

      <section class="panel-col">
        <div class="card">
          <h2>Moedas (em breve)</h2>
          <div id="currencies">Em breve — espaço reservado</div>
        </div>

        <div class="card">
          <h2>Links rápidos</h2>
          <ul class="links-list">
            <li><a href="#">Planilhas</a></li>
            <li><a href="#">Formulários</a></li>
          </ul>
        </div>
      </section>
    </main>

    <footer class="footer">
      <a href="index.php" class="btn-link">← Voltar</a>
    </footer>
  </div>

  <script src="script.js"></script>
</body>
</html>

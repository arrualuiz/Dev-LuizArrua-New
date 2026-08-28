<?php
// pagina em PHP (conteudo igual ao HTML)
?>
<!doctype html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Arrua — Sobre & Currículo</title>
  <link rel="icon" href="la.png" />
  <link rel="stylesheet" href="style.css" />
</head>
<body>
  <div class="page">
    <header class="topbar">
      <div class="brand">Arrua • Sobre</div>
      <nav>
        <a href="index.php">Home</a>
        <a href="news.php">Painel</a>
      </nav>
    </header>

    <main class="container about">
      <section class="card">
        <h2>Sobre Mim (público)</h2>
        <p>Oi, sou Arrua — futuro desenvolvedor, curioso, criativo e sempre em evolução. Aqui coloco projetos, habilidades e contato público.</p>

        <h3>Habilidades</h3>
        <ul>
          <li>HTML / CSS / JS</li>
          <li>Node / APIs</li>
          <li>Design minimalista / UX</li>
        </ul>

        <h3>Projetos</h3>
        <ul>
          <li>Dashboard pessoal (este site)</li>
          <li>Planilhas e automações</li>
        </ul>
      </section>

      <section class="card">
        <h2>Currículo Público</h2>
        <p>Resumo profissional para compartilhamento público. (link para PDF ou impressão)</p>
        <a class="btn" href="#">Download PDF</a>
      </section>

      <section class="card">
        <h2>Currículo Privado</h2>
        <p>Área protegida — insira seu PIN para desbloquear.</p>
        <div class="private-actions">
          <button id="set-pin" class="btn">Definir/Alterar PIN</button>
          <button id="open-private" class="btn accent">Abrir Currículo Privado</button>
        </div>

        <div id="private-cv" class="private-cv" style="display:none;">
          <h3>Currículo Privado</h3>
          <p><strong>Dados oficiais:</strong> (apenas local) — cadastre por segurança.</p>
          <pre id="private-data">[Dados sensíveis aqui]</pre>
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

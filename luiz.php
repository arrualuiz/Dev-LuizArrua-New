<?php
// pagina em PHP (conteudo igual ao HTML)
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Escolher Mudar</title>

  <style>
    body {
      font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
      background: #0e0e11;
      color: #eaeaf0;
      margin: 0;
      padding: 40px;
      line-height: 1.6;
    }

    h1, h2 {
      letter-spacing: 0.5px;
    }

    h1 {
      text-align: center;
      font-size: 2.6rem;
      margin-bottom: 16px;
    }

    .subtitle {
      text-align: center;
      opacity: 0.7;
      margin-bottom: 60px;
    }

    .grid {
      text-align: center;
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 60px;
      max-width: 1100px;
      margin: 0 auto;
    }

    section {
      background: #141420;
      padding: 32px;
      border-radius: 12px;
      flex-direction: column; 
      align-items: flex-start; /* 👈 impede centralização lateral */
    }

    h2 {
      font-size: 1.3rem;
      color: #9aa4ff;
      margin-top: 0;
    }

    ul {
      list-style: none;
      margin: 0;
      padding-left: 20px;
    }

    li {
      margin: 10px 0;
    }

    .tag {
      display: inline-block;
      background: #1f2240;
      color: #cdd2ff;
      padding: 4px 10px;
      border-radius: 999px;
      font-size: 0.8rem;
      margin-left: 6px;
    }

    .rules {
      max-width: 800px;
      margin: 80px auto 0;
      text-align: center;
    }

    .rules h2 {
      color: #ffffff;
    }

    .rules p {
      font-size: 1.2rem;
      opacity: 0.9;
    }

    footer {
      margin-top: 80px;
      text-align: center;
      opacity: 0.4;
      font-size: 0.8rem;
    }

    @media (max-width: 900px) {
      .grid {
        grid-template-columns: 1fr;
      }
    }
  </style>
</head>

<body>

  <h1>Escolher Mudar</h1>
  <p class="subtitle">
    Um ponto fixo para lembrar quem eu sou<br>
    e não voltar pro automático.
  </p>

  <div class="grid">

    <!-- COLUNA ESQUERDA -->
    <section>
      <h2>🔥 Pelo que eu luto</h2>
      <ul>
        <li>Autonomia (dinheiro, escolhas, tempo)</li>
        <li>Presença para quem importa</li>
        <li>Identidade clara</li>
        <li>Sair da sobrevivência</li>
        <li>Parar de fugir de mim</li>
      </ul>
    </section>

    <section>
      <h2>⚙️ O que sustenta minha vida</h2>
      <ul>
        <li>Arrumar dinheiro no meio do mês</li>
        <li>Renda extra (iFood, oportunidades)</li>
        <li>Gerenciar cartões e limites</li>
        <li>Evitar quebrar financeiramente</li>
      </ul>
    </section>

    <!-- COLUNA DIREITA -->
    <section>
      <h2>🧠 Quem eu sou</h2>
      <ul>
        <li>Aprender inglês <span class="tag">parte de mim</span></li>
        <li>Ir pra academia <span class="tag">parte de mim</span></li>
        <li>Comer bem <span class="tag">parte de mim</span></li>
        <li>Ser programador <span class="tag">parte de mim</span></li>
      </ul>
    </section>

    <section>
      <h2>🧩 O que preciso combater</h2>
      <ul>
        <li>Vícios (qualquer forma de fuga)</li>
        <li>Ausência</li>
        <li>Procrastinação</li>
        <li>Adiar decisões importantes</li>
      </ul>
    </section>

  </div>

  <div class="rules">
    <h2>🎯 Regra simples</h2>
    <p>
      Antes de agir, perguntar:<br><br>
      <strong>Isso me aproxima ou me afasta de quem eu escolhi ser?</strong>
    </p>
  </div>

  <footer>
    Página viva. Sempre em construção.
  </footer>

</body>
</html>

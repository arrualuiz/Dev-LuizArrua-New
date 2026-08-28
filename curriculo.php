<?php
// versao PHP - curriculo publico
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Luiz Arrua - Dev Hub & Currículo</title>
  <link rel="icon" type="image/png" href="la.png">
  <link rel="stylesheet" href="style.css" />
</head>
<body class="page">
  <nav class="top-nav" aria-label="Navegação">
    <div class="nav-left">
      <a class="nav-brand" href="index.php">Arrua</a>
      <a class="nav-link" href="index.php">Dashboard</a>
      <a class="nav-link" href="#dev-hub">GitHub Hub</a>
      <a class="nav-link" href="#curriculo-oficial">Oficial</a>
    </div>
    <div class="nav-right">
      <a class="btn btn-ghost" href="https://github.com/arrualuiz" target="_blank" rel="noreferrer">GitHub</a>
      <button id="copy-contact" class="btn btn-ghost" type="button">Copiar contato</button>
      <button id="copy-all" class="btn btn-ghost" type="button">Copiar tudo</button>
    </div>
  </nav>

  <main class="page-container">
    <header class="page-hero">
      <div>
        <p class="eyebrow">Dev Hub pessoal + currículo oficial</p>
        <h1 class="page-title">Luiz Felipe Arrua Castilho</h1>
        <p class="page-subtitle">Programador Pleno focado em integrações, APIs REST, webhooks, automação, dados e soluções conversacionais.</p>
        <div class="hero-meta" aria-label="Resumo profissional">
          <span>Curitiba/PR</span>
          <span>Remoto ou híbrido</span>
          <span>APIs • Chatbots • Dados</span>
        </div>
      </div>
      <div class="hero-actions">
        <a class="btn" href="mailto:luizarrua16@gmail.com">luizarrua16@gmail.com</a>
        <a class="btn btn-ghost" href="tel:+5541991415164">(41) 99141-5164</a>
        <a class="btn btn-ghost" href="https://www.linkedin.com/in/luizarrua/" target="_blank" rel="noreferrer">LinkedIn</a>
      </div>
    </header>

    <section class="intro-grid" id="curriculo-oficial">
      <article class="panel official-card">
        <p class="eyebrow">Sobre mim</p>
        <h2>Perfil oficial</h2>
        <p class="lead">Sou programador com trajetória em suporte técnico, liderança operacional e desenvolvimento de integrações. Gosto de pegar problemas confusos, entender regra de negócio, conectar sistemas e entregar algo que funcione no mundo real.</p>
        <p class="muted">Hoje atuo com soluções conversacionais, APIs REST, webhooks, JSON, Postman, investigação de logs e validação de integrações em ambientes de homologação e produção.</p>
      </article>

      <article class="panel official-card">
        <p class="eyebrow">Agora</p>
        <h2>O que estou construindo</h2>
        <ul class="clean-list compact-list">
          <li>Portfólio público com cara de GitHub, mostrando projetos, stack e evolução técnica.</li>
          <li>Currículo oficial para processos seletivos, com histórico profissional e formação.</li>
          <li>Base pessoal de automações, dashboards e experimentos com dados.</li>
        </ul>
      </article>
    </section>

    <section class="panel dev-hub" id="dev-hub">
      <div class="section-head">
        <div>
          <p class="eyebrow">GitHub mode</p>
          <h2>Hub virtual de projetos</h2>
        </div>
        <a class="btn btn-ghost" href="https://github.com/arrualuiz" target="_blank" rel="noreferrer">github.com/arrualuiz</a>
      </div>

      <div class="repo-grid">
        <article class="repo-card">
          <div class="repo-top">
            <h3>Integrações & APIs</h3>
            <span class="repo-lang">REST</span>
          </div>
          <p class="muted">Fluxos que conectam sistemas externos, tratam JSON, validam webhooks e reduzem trabalho manual.</p>
          <div class="repo-tags">
            <span>Postman</span><span>Webhooks</span><span>Logs</span>
          </div>
        </article>

        <article class="repo-card">
          <div class="repo-top">
            <h3>Automações de dados</h3>
            <span class="repo-lang">Python</span>
          </div>
          <p class="muted">Rotinas para organizar inventário, cruzar informações, apoiar auditorias e transformar dados em decisão.</p>
          <div class="repo-tags">
            <span>SQL</span><span>Power BI</span><span>CSV</span>
          </div>
        </article>

        <article class="repo-card">
          <div class="repo-top">
            <h3>Dashboard pessoal</h3>
            <span class="repo-lang">JS</span>
          </div>
          <p class="muted">Site pessoal com clima, notícias, calendário, links úteis e uma área pública para currículo.</p>
          <div class="repo-tags">
            <span>HTML</span><span>CSS</span><span>Node</span>
          </div>
        </article>
      </div>
    </section>

    <section class="panel help-panel">
      <h2>Como posso ajudar</h2>
      <p class="muted">Eu desenvolvo soluções que conectam sistemas, automatizam processos e transformam necessidades de negócio em soluções técnicas.</p>

      <div class="help-grid">
        <div class="help-item">
          <span class="help-icon">API</span>
          <h3>Integração de Sistemas</h3>
          <p class="muted">APIs REST • Webhooks • JSON • Postman</p>
        </div>
        <div class="help-item">
          <span class="help-icon">PY</span>
          <h3>Automação</h3>
          <p class="muted">Python • lógica de programação • automação de processos</p>
        </div>
        <div class="help-item">
          <span class="help-icon">BI</span>
          <h3>Dados</h3>
          <p class="muted">SQL • Power BI • tratamento e análise de dados</p>
        </div>
        <div class="help-item">
          <span class="help-icon">LOG</span>
          <h3>Troubleshooting</h3>
          <p class="muted">Análise de logs • diagnóstico de falhas • causa raiz</p>
        </div>
        <div class="help-item">
          <span class="help-icon">CX</span>
          <h3>Técnico + Cliente</h3>
          <p class="muted">Levantamento de requisitos • suporte • stakeholders</p>
        </div>
      </div>
    </section>

    <!-- COMPETÊNCIAS POR NÍVEL -->
    <section class="panel">
      <h2>Competências</h2>

      <h3 class="panel-sub">Uso profissional</h3>
      <div class="chips">
        <span class="chip">APIs REST</span>
        <span class="chip">Webhooks</span>
        <span class="chip">JSON</span>
        <span class="chip">Postman</span>
        <span class="chip">Lógica de programação</span>
        <span class="chip">Análise de logs</span>
      </div>

      <h3 class="panel-sub">Já utilizei</h3>
      <div class="chips">
        <span class="chip">Python</span>
        <span class="chip">SQL</span>
        <span class="chip">Power BI</span>
        <span class="chip">Windows</span>
        <span class="chip">Linux</span>
      </div>

      <h3 class="panel-sub">Estudando atualmente</h3>
      <div class="chips">
        <span class="chip">Estatística e Ciência de Dados</span>
        <span class="chip">Análise e Desenvolvimento de Sistemas</span>
      </div>
    </section>

    <section class="resume-grid">
      <article class="panel">
        <h2>Informações de contato</h2>
        <div class="kv">
          <div class="kv-row"><span>Nome completo</span><b>Luiz Felipe Arrua Castilho</b></div>
          <div class="kv-row"><span>Email</span><b>luizarrua16@gmail.com</b></div>
          <div class="kv-row"><span>Fone</span><b>41 99141-5164</b></div>
          <div class="kv-row"><span>Localização</span><b>Curitiba • Paraná • Brasil</b></div>
          <div class="kv-row"><span>GitHub</span><b>github.com/arrualuiz</b></div>
          <div class="kv-row"><span>LinkedIn</span><b>linkedin.com/in/luizarrua</b></div>
        </div>

        <h3 class="panel-sub">Idiomas</h3>
        <div class="chips">
          <span class="chip">Português (nativo)</span>
          <span class="chip">Inglês (básico)</span>
          <span class="chip">Espanhol (básico)</span>
        </div>
      </article>

      <article class="panel">
        <h2>Experiência</h2>

        <div class="job">
          <div class="job-head">
            <div>
              <h3>Zenvia</h3>
              <p class="muted">Programador Pleno • CLT</p>
            </div>
            <div class="job-dates">fev/2026 • atual</div>
          </div>

          <p class="muted">Desenvolvimento de soluções conversacionais e integrações via APIs REST e Webhooks, com foco em chatbots, automação de fluxos e consumo de sistemas externos.</p>

          <h4>Principais atividades</h4>
          <ul class="clean-list">
            <li>Configuração, estruturação e publicação de fluxos de chatbot em ambiente de produção.</li>
            <li>Integrações com sistemas externos via API REST, tratamento de dados em JSON e testes/validação com Postman.</li>
            <li>Investigação de falhas e análise de logs para identificar causas de inconsistências em integrações.</li>
            <li>Validação do comportamento das integrações em homologação junto a stakeholders.</li>
            <li>Apoio a clientes no onboarding técnico, ajustes e evolução contínua das soluções entregues.</li>
          </ul>
        </div>

        <div class="job">
          <div class="job-head">
            <div>
              <h3>VorpTech</h3>
              <p class="muted">Líder de suporte técnico • CLT</p>
            </div>
            <div class="job-dates">fev/2023 • fev/2026</div>
          </div>

          <p class="muted">Responsável técnico pela área de Suporte/Helpdesk, liderança de equipe, atendimento corporativo e estabilidade dos ambientes de TI.</p>

          <h4>Principais atividades</h4>
          <ul class="clean-list">
            <li><b>Liderança & Gestão:</b> supervisão de estagiários/equipe, distribuição e priorização de demandas, suporte VIP, visitas presenciais recorrentes em cliente (CBRE).</li>
            <li><b>Atendimento Técnico:</b> chamados N1/N2 (remoto e presencial), setup para novos clientes, incidentes críticos/urgentes, padronização de procedimentos.</li>
            <li><b>Inventário, Licenças e Automação:</b> inventário (Milvus, Trend Micro, RMM Ninja), auditoria de licenças, automações com Python + SQL + Power BI.</li>
            <li><b>Backup e Monitoramento:</b> Acronis, monitoramento diário, causa raiz, ações preventivas/corretivas.</li>
            <li><b>Documentação:</b> POPs, materiais de apoio, rotinas e boas práticas, documentação detalhada de soluções.</li>
          </ul>

          <h4>Resultados e entregas</h4>
          <ul class="clean-list">
            <li>Aumento da precisão do inventário com automações de dados.</li>
            <li>Redução significativa de falhas recorrentes em backup.</li>
            <li>Padronização e organização de procedimentos internos.</li>
            <li>Melhoria na velocidade de atendimento técnico.</li>
          </ul>
        </div>

        <div class="job">
          <div class="job-head">
            <div>
              <h3>Telefónica (Vivo)</h3>
              <p class="muted">Atendimento ao cliente • CLT</p>
            </div>
            <div class="job-dates">out/2018 • jul/2022</div>
          </div>

          <p class="muted">Atuação em Suporte N1 e evolução para posições de atendimento crítico e níveis mais avançados, incluindo Móvel Crítico, Cluster e Vivo V (N3).</p>
        </div>
      </article>

      <article class="panel">
        <h2>Formação acadêmica</h2>

        <div class="edu">
          <h3>Estatística e Ciência de Dados — Universidade Federal do Paraná (UFPR)</h3>
          <p class="muted">Ensino Superior • Cursando (2º ano) • Conclusão prevista: 07/2029 • Noturno</p>
        </div>

        <div class="edu">
          <h3>Análise e Desenvolvimento de Software — Pontifícia Universidade Católica do Paraná (PUCPR)</h3>
          <p class="muted">Ensino Superior • Cursando (2º ano) • Conclusão prevista: 07/2027 • Noturno</p>
        </div>

        <div class="edu">
          <h3>Gestão da Informação — Universidade Federal do Paraná (UFPR)</h3>
          <p class="muted">Ensino Superior • Interrompido • 03/2022 • Matutino</p>
        </div>
      </article>

      <article class="panel">
        <h2>Atalhos pra processo seletivo</h2>
        <p class="muted">Dica: usa o botão <b>Copiar tudo</b> lá em cima e cola no formulário. Se o site pedir campo por campo, usa <b>Copiar contato</b> e vai preenchendo mais rápido.</p>

        <div class="chips">
          <span class="chip">Curitiba/PR</span>
          <span class="chip">Remoto ou híbrido</span>
          <span class="chip">Integrações • APIs</span>
          <span class="chip">Automação • Dados</span>
        </div>
      </article>
    </section>

    <p class="signature page-signature">Desenvolvido por <span class="signature-name">Arrua</span> 🚀</p>
  </main>

  <script src="script.js"></script>
</body>
</html>

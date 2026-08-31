# Tasks do site Arrua

## Base e navegação
- [x] Padronizar menu de `index.html`, `news.html`, `sobre.html` e `curriculo.html`.
- [x] Corrigir estrutura do `index.html` para manter `header`, menu e conteúdo dentro do `body`.
- [x] Ajustar o dashboard inicial para manter colunas lado a lado com proporção mais consistente.
- [x] Ajustar dashboard inicial para caber melhor em monitor 1440x900 sem depender de zoom 80%.
- [x] Adicionar timestamp no cabeçalho das páginas principais.
- [ ] Revisar links fáceis do dashboard (`Links` e `Atalhos`) e separar o que será público do que vai para área logada.

## Páginas
- [x] `bia.html`: manter como está por enquanto.
- [x] `curriculo.html`: versão nova atualizada com dados consolidados, selo Zenvia e textos expansíveis.
- [ ] `sobre.html`: decidir se vira página 100% comercial/sobre mim ou se fica como currículo alternativo. Por enquanto saiu dos menus públicos.
- [x] `luiz.html`: manter no git, mas tirar do menu público e bloquear acesso direto no Netlify.
- [ ] `teste.html`: revisar o conteúdo gerado pelo Claude e decidir se vira página privada, rascunho ou descarte.

## APIs e dados
- [ ] Trocar NewsAPI direta no front por Netlify Functions para proteger chaves e reduzir problemas de CORS.
- [ ] Definir fonte de notícias/tokens para Coritiba e Santos.
- [ ] Criar card/calendário CSS com próximos jogos de Coritiba e Santos.
- [ ] Criar módulo de moedas/currencies: USD, EUR e cripto, preferencialmente via função serverless.

## Área logada
- [ ] Escolher modelo de autenticação: Netlify Identity, Supabase Auth ou login simples via Netlify Function.
- [ ] Criar uma página privada para links pessoais, chaves, rotinas e painéis que não devem aparecer para recrutador.
- [ ] Remover do público links sensíveis como senhas, planilhas pessoais e diário.

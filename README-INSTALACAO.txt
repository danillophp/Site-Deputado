INSTALAÇÃO DO TEMA ANDRÉ PREMIUM (CLÁSSICO)

1) Estrutura correta para compactar (sem pasta duplicada):
andre-premium-theme/
  style.css
  index.php
  functions.php
  header.php
  footer.php
  ...

2) No seu computador, compacte APENAS a pasta `andre-premium-theme`.
   - Exemplo correto de ZIP:
     andre-premium-theme.zip
       └── andre-premium-theme/
           ├── style.css
           ├── index.php
           ├── functions.php

3) No WordPress:
   - Aparência → Temas → Adicionar novo → Enviar tema
   - Selecione `andre-premium-theme.zip`
   - Clique em Instalar e depois Ativar

4) Configuração inicial recomendada:
   - Aparência → Menus:
     * atribuir "Menu Principal" à localização `primary`
     * atribuir "Menu Superior" à localização `topbar`
     * atribuir "Menu Rodapé" à localização `footer`

5) Logo do site:
   - Aparência → Personalizar → Identidade do site → Logo

6) Homepage:
   - Páginas → criar página "Início"
   - Configurações → Leitura → "Uma página estática"
   - Definir "Página inicial" como "Início"

7) Plugin institucional (opcional, recomendado):
   - Enviar/ativar o plugin `andre-premium-core`
   - Configurar em "André Premium" no painel

8) Compatibilidade:
   - Tema clássico (não depende de index.html/FSE)
   - WordPress 6+
   - PHP 8+
   - Compatível com Gutenberg e Elementor

# Projeto SecureLogin API - Gestão de Acesso Comercial

[![PHP Version](https://img.shields.io/badge/php-%3E%3D8.2-blue)](https://www.php.net/)
[![Bootstrap Version](https://img.shields.io/badge/bootstrap-5.3.0-blueviolet)](https://getbootstrap.com/)
[![JWT Version](https://img.shields.io/badge/firebase%2Fphp--jwt-7.0-success)](https://packagist.org/packages/firebase/php-jwt)

O **SecureLogin API** é um sistema PHP que oferece recursos robustos de autenticação e autorização para aplicações comerciais. Desenvolvido utilizando PHP 8.2, Bootstrap 5.3 para as interfaces, e PHP JWT para segurança na transmissão de dados.

### Estrutura do Projeto

```
.
├── api
│   ├── app
│   │   ├── database
│   │   │   ├── dbconnection.php
│   │   │   └── idbconnection.php
│   │   └── public
│   │       ├── index.php
│   │       ├── login.php
│   │       └── auth.php
├── app
│   ├── public
│   │   ├── index.html
│   │   └── styles.css
│   └── src
│       ├── js
│       ├── animations
│       └── assets
│           ├── images
│           └── audio
├── .gitignore
├── composer.json
├── README.md
└── phpunit.xml.dist
```

### Configuração

1. Clone o repositório: `git clone https://github.com/rubenslyra/SecureLoginAPI.git`
2. Instale as dependências: `composer install`
3. Configure o banco de dados em `api/app/database/dbconnection.php`
4. Configure as chaves JWT em `api/app/config/jwt.php`
5. Execute o servidor embutido do PHP: `php -S localhost:8000`
6. Acesse `http://localhost:8000` no seu navegador.

### Front-end

A aplicação front-end utiliza tecnologias como a **Fetch API** para realizar requisições assíncronas. Certifique-se de incluir e configurar essas bibliotecas antes de utilizar a aplicação.

#### Tecnologias Front-end

- **Fetch API:** [Documentação Fetch API](https://developer.mozilla.org/en-US/docs/Web/API/Fetch_API)
- **Outras Bibliotecas JS:** # Adicione outras bibliotecas e suas documentações

### Testes

Para executar os testes, utilize o PHPUnit:

```bash
composer test
```

### Contribuindo

Contribuições são bem-vindas! Abra uma issue ou envie um pull request.

### Licença

Este projeto é licenciado sob a Licença MIT - veja o arquivo [LICENSE.md](LICENSE.md) para mais detalhes.

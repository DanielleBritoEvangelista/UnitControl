# Documentação: Configuração do Ambiente de Desenvolvimento

Este documento fornece instruções para configurar o ambiente de desenvolvimento do projeto utilizando Laravel 7/8. Siga as etapas abaixo para garantir uma configuração correta e eficiente.

## Pré-requisitos
Antes de começar, certifique-se de que o ambiente de desenvolvimento atende aos seguintes requisitos:

- Composer: Instalador de dependências do PHP.
- PHP: Versão 7.3 ou superior.
- MySQL ou outro banco de dados de sua escolha.
- Git: Sistema de controle de versão distribuído.

Dica: Recomendamos a instalação do XAMPP, que proporciona tanto o PHP quanto um banco de dados integrado. Essa escolha simplifica significativamente o processo de configuração do ambiente de desenvolvimento.

## Configuração do Projeto
1. Clone o repositório do GitHub:
    ```bash
    git clone https://github.com/seu-usuario/seu-projeto.git
    ```
    Substitua `seu-usuario` e `seu-projeto` pelos dados reais do seu repositório.

2. Acesse o diretório do projeto:
    ```bash
    cd seu-projeto
    ```

3. Instale as dependências do Laravel usando o Composer:
    ```bash
    composer install
    ```

4. Crie um arquivo de ambiente .env baseado no .env.example:
    ```bash
    cp .env.example .env
    ```

5. Configure as variáveis de ambiente no arquivo .env, incluindo informações de banco de dados e outras configurações específicas do ambiente.
    ```bash
    DB_CONNECTION=mysql
    DB_HOST=seu-host
    DB_PORT=seu-port
    DB_DATABASE=seu-database
    DB_USERNAME=seu-username
    DB_PASSWORD=seu-password
    ```

6. Gere a chave de aplicativo do Laravel:
    ```bash
    php artisan key:generate
    ```

7. Execute as migrações para criar as tabelas do banco de dados:
    ```bash
    php artisan migrate
    ```

8. Execute os seeds para popular as tabelas:
    ```bash
    php artisan db:seed
    ```
    Este comando criará registros nas tabelas conforme especificado nos requisitos do projeto.

9. Inicie o servidor de desenvolvimento:
    ```bash
    php artisan serve
    ```
    O servidor estará acessível em http://localhost:8000.

## Conclusão
O ambiente de desenvolvimento foi configurado com sucesso. Agora você está pronto para iniciar o desenvolvimento do projeto Laravel 7/8. Consulte a documentação oficial do Laravel (https://laravel.com/docs/8.x) para informações detalhadas sobre recursos e boas práticas de desenvolvimento.

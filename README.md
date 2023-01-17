# Laravel Vehicle API
API REST em [Laravel SANCTUM](https://laravel.com/docs/9.x/sanctum) realizando [SPA Authentication](https://laravel.com/docs/9.x/sanctum#spa-authentication) entre projetos separados., que retorna marca modelo e ano de veículos cadastrados

## Esta API ainda está em ***desenvolvimento!***

 Ainda não foi atingindo todos os propositos de desenvolvimento desejados para este projeto, logo então, podem ocorrer falhas, bugs ou ausensia de  rotas e funcionalidades.

<br>

# Objetivos do projeto

O projeto tem como propósito:

1. Ser um projeto que contribui para o estudo de outros desenvolvedores

2. Ser vinculado a outros projetos front-end que consomem desta API

3. fazer parte do meu portifólio profissional 

<br>

# Projetos Vinculados
 Da lista de repositorios que consomem esta API:

1. [My Car Care](https://github.com/Angelob4/my-car-care) - Laravel / Blade

<br>

# Configurações inevitáveis
Ao clonar o projeto, será necessário sempre realizar estas configurações para funcionamento correto do projeto.
    
1. Credencias do banco de dados:

    No arquivo `.ENV` por padrão já vem registrado as credenciais para se conectar ao [postgresSql](https://www.postgresql.org/)

          ```
           DB_CONNECTION=pgsql
           DB_HOST=localhost
           DB_PORT=5432
           DB_DATABASE=laravel_api_vehicle
           DB_USERNAME=postgres
           DB_PASSWORD=postgres
          ```
    Para que funcione com estas credenciais será necessário criar um database com nome `larevel_api_vehicle`, ou caso queira, edite o `nome`, `senha` e `connection` conforme com o banco de dados desejado.

<br>

# Rodando projeto

para rodar o projeto, execute o comando no terminal

``` 
php artisan start api 
```
Após executar o comando, será apresentado uma tabela e uma pergunta, questionando se você passou as credenciais corretas referente ao banco de dados, dentro do arquivo `.ENV`.


após confirmar, ele irá tentar conecxão com banco, irá verificar se existe tabelas criadas, caso nao exista irá cria-las e povoa-las com seed; E ao mesmo tempo rodará o sevidor na porta 8010 por padão

<br>

## Credenciais e autenticação
Por padrão essa API vem com uma conta padrão:
* email = vehicle@mycarcare.com
* password = 123456789

nesse caso será necessário utilizar desta conta para fins de teste, pois ainda não foi implentado uma rota para criação de usuários.

<br>

## para se autenticar

será necessário antes, realizar duas requisição. *_Tendo em mente que, o sevidor já esteja rodando na endereço `localhost:8010`_*

<br>

1. requisição para `/sanctum/csrf-cookie` O Laravel automaticamente registrará o token do csrf no cookie no navegador

    ```
    axios.get('http://localhost:8010/sanctum/csrf-cookie')
    ```` 
2. Após ter o ***csrf-cookie*** no navegador, realizar requisição para `/api/login`, o Laravel irá autenticar e liberar acesso as rotas api
    ```
    axios.post('http://localhost:8010/api/login', [
        email: vehicle@,ycarcare.com,
        password: 123456789
    ])
    ```

<br>

após as duas requisições derem certas, o seu navegador estará autenticado para acessar as demais rotas da API e consumir os dados;

essas duas requisições serão necessárias uma vez para autenticar o navegador;

<br>

# Consumir esta API para o seu Projeto Pessoal

Para consumir esta API para um projeto seu, será necessário realizar algumas alterações e configurações
    
1. deve ser configurado subdominio entre dois projetos separados dentro do arquivo `.ENV`, a variável dominio foi definida como:
        
    ```
    DOMAIN='localhost'
    ```

    além de definir o dominio raiz, temos que definir os subdominios stateful;
    
    ```
    SANCTUM_STATEFUL_DOMAINS='localhost:8000, localhost:8010'
    ```` 
    para o desenvolvimento local, o `localhost:8010`, é o sevidor API, enquanto o `localhost:8000`, é o sevidor do projeto, que irá consumir esta API.

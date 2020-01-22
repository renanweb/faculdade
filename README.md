	

**Teste Crud**
==============================================

------------------------------------------

**Clonar o projeto**

    git clone https://github.com/renanweb/faculdade


----------

**Acessar o projeto**

    cd faculdade

----------

**Instalar as dependências e o framework**

    composer install

----------

**Copiar o arquivo .env.example**

    cp .env.example .env

----------

**Criar uma nova chave para a aplicação**

    php artisan key:generate

----------

>**Criar um banco de dados "faculdade" **
    
----------

**Configure o arquivo  .env**

    DB_DATABASE=faculdade
    DB_USERNAME=root
    DB_PASSWORD=

----------


**Rodar as migrations com:**

    php artisan migrate --seed    



 

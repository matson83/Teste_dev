# Eletro App

Tentei criar um projeto em laravel na qual pudesse salvar imagens de eletrodomésticos juntamente com suas respectivas descrições.

## 🚀 Começando

Primeiro comecei criando o projeto com o comando composer create-project laravel/laravel eletro-app.<br>
Após o projeto ja aberto no vscode comecei a criação de rotas no api.web, coloquei nomes nas rotas e ajustei para que as funções fossem para o controller.<br>
Criei o controller para poder colocar funçoes nas rotas respectivas.<br>
Criei o Model para conectar com o banco de dados.<br>
Fui na .env e modifiquei os campos para que pudesse ter conexão com a database(app) na sua porta(3305).<br>
Criei a migration e coloquei os dados que seriam inseridos na tabela.<br>
Nas views utilizei bastante bootstrap , pesquisei muitos modelos para usar no index e para usar nas outras views.<br>
Estruturei as views com os imputs, colocando os nomes das colunas das tabelas e etc.<br>
É mais importante criei as funções do crud para cada view e com cada rota .<br>


### 📋 Pré-requisitos

Database:app <br>
port:3305 <br>


-- rodar um projeto clonado

php artisan migrate 

composer update <br>
cp .env.example .env <br>
php artisan key:generate <br>
php artisan serve <br>


## ⚙️ Comandos de criação

php artisan make:controller EletroController <br>
php artisan make:model Eletro <br>
php artisan make:migration create_eletros_table



## 🛠️ Construído com

* [Laravel](https://laravel.com) - O framework web usado
* [Bootstrap](https://getbootstrap.com) 
* [Php](https://www.php.net) 


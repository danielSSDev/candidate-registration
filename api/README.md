Para subir a API primeiramente crie um arquivo .env apartir do arquivo .envexample dentro da pasta API mesmo
Depois configure o arquivo .env 
Exemplo altere esses campos com suas informações
DB_CONNECTION=TYPO DO SEU BANCO DE DADOS
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=NOME DO BANCO DE DADOS CRIADO 
DB_USERNAME=root
DB_PASSWORD=

Em seguida rode o comando "composer install".

Depois rodar o comando "php artisan migrate" 
em seguida subir o servidor para que API possa seer consumida, para isso rode o comando "php artisan serve"


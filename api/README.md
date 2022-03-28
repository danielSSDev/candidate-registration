Para subir a API primeiramente configure o arquivo .env 
Exemplo
DB_CONNECTION=TYPO DO SEU BANCO DE DADOS
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=NOME DO BANCO DE DADOS CRIADO 
DB_USERNAME=root
DB_PASSWORD=

Depois de configurar rodar o comando "php artisan migrate" 
em seguida subir o servidor para que API possa seer consumida, para isso rode o comando "php artisan serve"


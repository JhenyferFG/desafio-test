<h4>Processo de execução do projeto teste:</h4>

- Renomeie os arquivos .env.example para .env, um se encontra dentro do diretório src e o outro dentro do diretório raiz;
- Após isso, dentro do arquivo .env, terá os campos necessários a serem preenchidos para a inicialização do docker;

<!-- inicio tabela -->
 .   | ./src
--- | --- 
MYSQL_DATABASE | DB_DATABASE 
MYSQL_USER | DB_DATABASE 
MYSQL_PASSWORD | DB_DATABASE 
<!-- fim tabela -->

<h4>Execução do projeto no docker</h4>
- Montagem do container: 
docker-compose build

- Execução do container:
docker-compose up

<h4>API:</h4>
- Geração da chave e execução do migrate
<br><br>
<code>
docker exec php php artisan key:generate

docker exec php php artisan migrate
</code>


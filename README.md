# php-8.1-teste
Ambiente Docker para testes php 8.1

Para inciar basta ter o docker e docker-compose instalado

docker-compose up -d

# Configuração do DockerFile
CMD ["php", "-S", "0.0.0.0:80", "-t", "/var/www"]

Utilizando php buil-in vai suber o servidor interno na porta 80 e acesso externo 8000

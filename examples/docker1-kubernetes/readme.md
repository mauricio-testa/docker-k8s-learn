Comando pra rodar o app
`php -S localhost:8000 -t public`

Comando pra criar o container
`docker build -t docker1 .`

* -t => nome da imagem e tag
* . => contexto (raíz)

Comando pra rodar o container
`docker run -rm docker1`

* -rm deleta o container automaticamente pra não lotar hd

# dockerignore
Especifica arquivos que não devem ser copiados
Ex.: vendor não precisa copiar pq será criada com o `composer install`

# Falta
* namespaces
* ingress
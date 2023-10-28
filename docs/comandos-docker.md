# BÁSICO

- Verifica a versão do docker
`docker version`

# IMAGENS

- Ver imagens
`docker images`

- Criar uma imagem
`docker build -t [imagename:tag] .`

	- -t = tag
	- . = contexto (raíz)

- Rodar uma imagem (criar um container)
`docker run [imagename:tag]`

- Roda uma imagem remota de forma temporária (não armazena o container)
`docker run -it ubuntu`

- [IMPORTANTE] Adiciona uma tag a uma imagem
`docker image tag [imageid] mauriciotesta97/curso-udemy-tasklist:v1`

- Sobe para o dockerhub
`docker push mauriciotesta97/curso-udemy-tasklist:v1`

- Subir uma nova versão
`docker build [imagename:tag]`
`docker push [imagename:tag]`

Ou da pra colocar qualquer coisa no `docker build` e depois usar o `docker image tag`

- Enviar imagem para outra pessoa sem passar pelo dockerhub
Exportar: `docker image save -o export.tar [imagename:tag]`
Importar: `docker image load -i export.tar`

# CONTAINERS

- Ver containers rodando
`docker ps`

- Ver todos os containers
`docker ps -a`

- Cria um container (roda uma imagem)
`docker run [imagename:tag]`

- Roda uma imagem em background (libera o prompt)
`docker run -d [imagename:tag]`

- Roda uma imagem definindo um nome pra ela
`docker run -d --name meu_lindo_container [imagename:tag]`

- [IMPORTANTE] Roda uma imagem e deleta automaticamente o container assim que ela for parada
`docker run --rm [imagename:tag]`

- Para container
`docker stop [containerid]`

- Inicia container que já existe mas está parado
`docker start [containerid]`

- Remove container
`docker rm [containerid]`

- Verificar erros do container
`docker logs [containerid]`
`docker logs -f [containerid]` (como se fosse tail -f)
`docker logs -t [containerid]` (mostra com o timestamp)

- Publicar uma porta de acesso
`docker build -p [myport]:[imageport] [imagename:tag]`

- Executar comandos em containers
`docker exec [containerid] [command]`
Ex: `docker exec 2e2aeae573b0 ls`

- [IMPORTANTE] Abre o shell em um container
`docker exec -it [containerid] sh`

# VOLUMES

- Cria um volume
`docker volume create volume1`

- Vê o que tem dentro do volume
`docker volume inspect volume1`

- Associa a imagem a um volume (os arquivos guardados em /app/dados não serão perdidos)
`docker run -v [volumename]:[containerfolder]`
Ex: `docker run -v volume1:/app/dados`

- Copiar arquivos da imagem pro meu pc
`docker cp [imagename]:/app/dados/teste.txt .`

- Copiar arquivos do meu pc pra imagem
`docker cp teste.txt [imagename]:/app/dados`

- [IMPORTANTE] Roda o container apontando a pasta do projeto atual para a pasta que espelha ele no container. Dessa forma é possível fazer alterações no projeto e ver sendo aplicadas automaticamente na imagem
`docker run -v ${PWD}:/usr/share/nginx/html [imagename]`
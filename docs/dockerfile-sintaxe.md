# FROM
Imagem base
Sempre que eu defino um novo from, o sistema de arquivos é resetado!
`FROM node:12-alpine`

# WORKDIR
Define o path que os próximos comandos do dockerfile serão executados
Qualquer comando RUN, CMD, ADD, COPY ou ENTRYPOINT será executado no diretório de trabalho especificado pelo
comando WORKDIR.
`WORKDIR /app`

# COPY
Copiar/adicionar todos os arquivos da aplicação >> pra dentro da imagem

`COPY yarn.lock`				copia o yarn.lock pra dentro do container
`COPY yarn.lock package.json` 	copia dois arquivos pra dentro do container
`COPY yarn.lock /app/` 			copia o yarn.lock pra dentro da pasta app do container
`COPY *.json /app/`				copia todos os arquivos json pra dentro da pasta app
`COPY . /app/`					copia todos os arquivos pra dentro da pasta app
`WORKDIR /app`					essas 2 linhas...
`COPY . .`						faz a mesma coisa que o comando acima. define que todas as cópias, comandos, serão executados para a pasta /app do container (WORKDIR)

# ADD
Faz a mesma coisa que o copy, porém pra arquivos remotos
`ADD https://jsonplaceholder.typicode.com/todos/1 app/`
E descompacta arquivos também
`ADD arquivo.zip`

# RUN
Serve pra INSTALAR AS DEPENDÊNCIAS da aplicação (node, composer, apt-get...)
`RUN npm run install`
`RUN composer install`
`RUN apt-get install -y unzip zip`

> RUN X CMD
Run executa enquanto está construíndo a imagem. CMD é para executar a imagem quando ela já está construída

# CMD
Serve para EXECUTAR A APLICAÇÃO
`CMD ["npm", "run", "start"]`
`CMD ["node", "index.js"]`

# ENV
Definir configurações do ambiente
`ENV SERVER_URL=google.com`

# EXPOSE
Abre a porta do container
`EXPOSE 3000`

# USER
Não é uma boa prática executar aplicações com usuário root
Os comandos abaixo criam o grupo dockergroup / cria o usuário dockeruser e adiciona ele a esse grupo
`RUN addgroup dockergroup && adduser -S -G dockeruser dockergroup`
`USER dockeruser`

# ENTRYPOINT
Rodar algum comando ????????????


#### VERSÕES ######
`docker build -t app:1.0 .`

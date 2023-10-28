# pré requisitos: node e python

#image base
FROM node:18-alpine

#todos os próximos comandos serão executados dentro dessa pasta
WORKDIR /app

COPY package.json .
RUN yarn install --production

# instala python 
RUN apk add --no-cache python3 g++ make

# copia todos os arquivos do meu projeto pra dentro do container (/app que é meu workdir)
COPY . .

# executa a aplicação
CMD [ "node", "src/index.js" ]

# abre a porta 3000
EXPOSE 3000

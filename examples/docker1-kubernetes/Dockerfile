# imagem base. alpine são bem mais leves (pacote:versao-variante)
FROM php:7.3-alpine

# diretorio virtual onde a applicação vai fazer o build
WORKDIR /app

# cacheia os pacotes composer
COPY composer.lock composer.json ./
COPY --from=composer /usr/bin/composer /usr/bin/composer
RUN composer install

# copia todos os arquivos da aplicação pra dentro do container
COPY . .

RUN mkdir user_data && chmod -R 755 user_data

CMD ["php", "-S", "0.0.0.0:8080"]

EXPOSE 8080

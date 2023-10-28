# ->>>>>>>>> isso aqui funciona

# FROM alpine as zero
# WORKDIR /app
# RUN touch stage0.txt
# 
# FROM alpine as one
# WORKDIR /app
# RUN touch stage1.txt
# 
# FROM alpine
# WORKDIR /app
# COPY --from=zero /app/stage0.txt .
# COPY --from=one /app/stage1.txt .

# ->>>>>>>>> isso aqui também

FROM alpine as build_app
WORKDIR /build-app
RUN touch stage0.txt

# stage one é a continuação do zero
FROM build_app as build
WORKDIR /build-course
RUN touch stage1.txt

FROM alpine
WORKDIR /app 
COPY --from=build /build-app/stage0.txt .
COPY --from=build /build-course/stage1.txt .


# ->>>>>>>>> a diferença é que no passo abaixo, o stage 1 inicia a partir do stage 0, então eu buildo ambos os projetos de front no mesmo stage e reaproveitando a versão do node instalada
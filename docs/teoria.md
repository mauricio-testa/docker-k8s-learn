# Método de estudo
- assiste vídeo > anota > prática
- ((25 min de estudo (pausa 5min)) * 4) (pausa 15min)

# Introdução
Problemas que ele resolve:
- incompatibilidade de versões (pacotes, ambiente)
- roda local mas não roda no servidor
Roda o mesmo aplicativo em qualquer versão de host (linux, windows)

# Container vs VM
VM: hardware > hypervisor > SO > App - cada VM tem seu próprio sistema operacional
Container: harware > SO > Container > App - aplicações rodam isoladas com apenas 1 sistema operacional

# Como funciona o docker
App > Dockerfile > Imagem > Container > Execução

Criar um Dockerfile. O Dockerfile define os requisitos para criar a imagem
A imagem vai ter:
- pedaço do OS
- ambientes
- filas
- bibliotecas
- variáveis
Com a imagem pronta, podemos mover ela pra qualquer lugar.

> QUANDO RODA UMA IMAGEM, É CRIADO UM CONTAINER PRA ELA. A imagem é executada dentro do container. Container é como se fosse uma VM. Pode ser iniciado e parado. Um container é considerado um PROCESSO

# Dockerhub (Registry)
Github pra docker
Hospeda a imagem
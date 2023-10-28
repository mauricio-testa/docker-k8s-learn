# Rodar linux pelo Docker
- Baixa a imagem do ubuntu pra minha máquina
- Roda ela em forma de container

Apenas roda
`docker run -it ubuntu:alpine`

# BÁSICO

Exibe um texto na tela
`echo 'texto'`

Exibe uma lista do histórico de comandos que foram executados
`history`

Cria um arquivo de texto com o conteúdo "olá"
`echo ola > ola.txt`

Solução legal pro cat pra usar em arquivos grandes. Abre o arquivo pelo início e conforme vai pressionando barra de espaço vai indo pra baixo
`more arquivo.txt`

Less é o contrário pro more. Começa a exibir o arquivo de baixo pra cima

# APT

Lista pacotes
`apt list`

Atualiza o SO
`apt update`

Instala o nano
`apt install nano`

Remover nano
`apt remove nano`

# GREP

> Procura conteúdo dentro de arquivos

Procura pelo texto "hello" dentro do "arquivo.txt"
`grep hello arquivo.txt`

Procura pelo texto "hello" em arquivos que começam com "package"
`grep hello package*`

Procura pela palavra hello em um diretório
`grep -i -r hello .`

- i = ignora o casing
- r = recursivo

# FIND

> Procura arquivos pelo nome

Exibe todos os arquivos
`find -type f`

Exibe todos os diretórios
`find -type d`

Procura arquivos que iniciam com package
`find -type f -name "package*"`

# CHAINING

Encadeamento de comandos

Cria uma pasta e entra nela (;)
`mkdir pasta; cd pasta`

Cria uma pasta e entra nela (&&) mas para a execução em caso de erro (ex: pasta já existe)
`mkdir pasta && cd pasta`

# PROCESSOS
Lista os processos
`ps`

Mata um processo
`kill -9 PID`

Executa um processo em background (&) libera o terminal
`sleep 5 &`

# USERS
Cria um usuário no linux
`useradd -m mauriciot`

- m = pra criar a pasta home

`usermod` = edita usuário
`userdel` = deleta usuário

Lista usuários
`cat /etc/passwd`

# GRUPOS
Ve a qual grupo pertence o usuário mauriciot
`groups mauriciot`

Cria um grupo no linux
`groupadd docker`

`groupmod` = edita usuário
`groupdel` = deleta usuário

Adiciona o usuário mauriciot ao grupo docker (como grupo secundário)
`usermod -G docker mauriciot`
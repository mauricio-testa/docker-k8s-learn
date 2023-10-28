# Comandos

* kubectl apply -f kubernetes.yaml ->> aplica o arquivo (executar sempre que é modificado)
* kubectl delete -f kubernetes.yaml ->> destroi tudo relacionado ao arquivo
* kubectl get all
* kubectl logs <podname>
* kubectl delete pod <podname>

> pra expor a porta o correto é criar um service e um ingress em cima do service
> mas para fim de exemplo: kubectl port-forward pod/<podname> 8080:8080

# Camadas

##### ingress - gerencia o acesso http EXTERNO a um serviço. O ingress redireciona para o service
#### service - usado pra definir o acesso interno ao serviço (binding de portas). O IP do serviço nunca muda! então para APIs que não precisam ser acessadas externamentem, não precisa ingress
#### deployment (gerencia os pods) - vem junto com um replicaset pra gerenciar as replicas da aplicação (redundância)
### pod (unidade de execução do container)
## container (instancia de uma imagem)
# imagem (o aplicativo com todas suas dependências)
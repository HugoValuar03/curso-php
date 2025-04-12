## O que são funções?

- São blocos de códigos que possuem nomes;
- Realizam uma ação e podem ser reaproveitadas (chamadas novamente) ao longo do programa;
- Podemos passar parâmetros para funções, que moldam a sua execução;
- A criação de funções reduz a duplicidade de código;
- Melhora a manutenção do mesmo;
- O PHP pussi diversas funções prontas;

## Separar dados de array por vírgula

- Para separar os dados, usa-se o método `implode()`
```php
$frutas = ["maçã", "banana", "laranja"];
$lista = implode(", ", $frutas);

echo $lista; // Saída: maçã, banana, laranja
```

## Introdução ao HTTP
- A web roda em cima do protocolo HTTP (HyperText Transfer Protocol);
- Quando um navegador solicita uma página web é feito um request HTTP
- Esta requisição recebe uma resposta, ambos podem possuir um body;
- A resposta contém um header (cabeçalho), constituído pelo método (GET,POST), arquivo/path solicitado (index.
  php), e versão do protocolo HTTP (HTTP/1.x);
- Basicamente uma requisição é enviada e uma resposta é recebida;

### Métodos HTTP
- As requisições que enviamos também contém métodos, alguns deles são:
  - GET => Solicita a apresentação de um recurso (ex: visualização de uma página);
  - POST => Envio de dados ao servidor (Ex: Cadastro de usuário);
  - PUT => Atualização de dados;
  - DELETE => Remoção de dados;
  - PATCH => Atualização de dado específico;

### Variáveis Globais do PHP
- Para lidar com estas requisições o PHP nos dá algumas variáveis globais:
- $_ENV => Variáveis de ambiente;
- $_GET => Parâmetros que foram enviados por request GET;
- $_POST => Parâmetros que foram enviados por POST;
- $_COOKIE => Valores de cookies;
- $_SERVER => Informações sobre o servidor;
- $_FILES => Informações sobre os arquivos que vieram por upload;

### Explorando $_SERVER
- Como dito anteriormente $_SERVER tem diversas informações importantes;
- SERVER_SOFTWARE => Identificação do servidor;
- SERVER_NAME => Hostname, DNS, ou IP do servidor;
- SERVER_PROTOCOL => Protocolo do servidor;
- SERVER_PORT => Porta do servidor;
- QUERY_STRING => Argumentos após o ? na URL;

### Processamento de formulários teoria
- Vamos realizar processamentos de formulário de duas maneiras: via GET e via POST;
- Com o GET vamos processar os parâmetros que vem na query string, ou seja, na URL;
- Com o POST vamos processar as informações que vem na requisição, estas não aparecem na URL;
- Exemplos de uso: Buscas => GET, Registro de usuário => POST;
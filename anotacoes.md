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
## Estratégias Eficientes de testes para código Laravel

Este projeto foi criado para a apresentação na primeira PinguimConf, que ocorreu no dia
19 de abril de 2024.

Nesse projeto, foi feito um exemplo de um "*Service*" para busca de endereços no ViaCep,
utilizando TDD.

Além dos testes com o **Pest**, ainda utilizamos o **Cypress** para um exemplo de testes **_E2E_**

### Como rodar os testes
#### Pest
Para rodar os testes de **_unitários_** com o **Pest**, basta rodar o comando:
```bash
./vendor/bin/pest
```
Lembre-se de verificar se o arquivo `.env` ou `.env.testing` está configurado corretamente.

#### Cypress
Já para os testes **_E2E_** com o **Cypress**, basta rodar o comando:
```bash
npx cypress open
```
Ao abrir o Cypress, clique em **_E2E Testing_** e selecione o navegador de sua preferência.
Após a abertura do painel do cypress, no menu à esquerda, você verá o link para a página **Specs**
e você verá no nosso arquivo `register.cy.js`



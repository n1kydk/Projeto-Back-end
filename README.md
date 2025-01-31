# Projeto de Sistema de Cadastro de Usuários

Este é um sistema de cadastro de usuários desenvolvido com PHP, MySQL e XAMPP. O objetivo do projeto é permitir o cadastro de usuários e o armazenamento seguro de suas informações em um banco de dados MySQL.

## Pré-requisitos

Antes de executar o projeto, certifique-se de ter os seguintes programas instalados em seu computador:

- [XAMPP](https://www.apachefriends.org/index.html) (ou outro servidor local compatível com PHP e MySQL)
- [PHP](https://www.php.net/) (incluso no XAMPP)
- [MySQL](https://www.mysql.com/) (incluso no XAMPP)

## Como Usar

### 1. Configurar o XAMPP

1. **Instale o XAMPP** em seu computador.
2. Abra o **XAMPP Control Panel** e inicie os módulos **Apache** e **MySQL**.
   - Certifique-se de que ambos os serviços estão rodando corretamente antes de continuar.

### 2. Configurar o Banco de Dados

1. Abra o **phpMyAdmin** acessando `http://localhost/phpmyadmin/` no seu navegador.
2. Crie um banco de dados chamado `project`.
3. Importe o arquivo `usuarios.sql` para o banco de dados criado:
   - No phpMyAdmin, selecione o banco de dados `project`.
   - Vá para a aba **Importar** e selecione o arquivo `usuarios.sql` (localizado na pasta `projetodesoftware2backend`).
   - Clique em **Executar** para importar a estrutura e os dados para o banco de dados.

### 3. Adicionar os Arquivos ao XAMPP

1. Copie todos os arquivos do projeto para a pasta `htdocs` dentro do diretório de instalação do XAMPP. A pasta `htdocs` normalmente está localizada em `C:\xampp\htdocs\`.
   - Por exemplo: `C:\xampp\htdocs\project\projetodesoftware2backend`

### 4. Acessar o Sistema

1. No seu navegador, acesse `http://localhost/project/projetodesoftware2backend/` para visualizar o sistema.
2. O sistema de cadastro de usuários estará acessível, e você pode começar a registrar novos usuários.

### 5. Funcionalidades

- **Cadastro de Usuários**: O sistema permite registrar novos usuários informando dados como nome, e-mail, telefone, CPF, etc.
- **Armazenamento Seguro de Senhas**: As senhas dos usuários são armazenadas de forma segura utilizando técnicas de hash.
- **Banco de Dados MySQL**: Todos os dados de usuários são armazenados em um banco de dados MySQL.

## Contribuições

Se você quiser contribuir com o projeto, siga os passos abaixo:

1. Faça um fork deste repositório.
2. Crie uma branch para suas alterações: `git checkout -b minha-nova-funcionalidade`.
3. Faça suas modificações e adicione os arquivos alterados: `git add .`.
4. Comite as alterações: `git commit -m "Descrição das alterações"`.
5. Envie suas alterações para o repositório remoto: `git push origin minha-nova-funcionalidade`.
6. Abra um pull request explicando suas modificações.

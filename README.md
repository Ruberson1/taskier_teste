# README

Bem-vindo ao projeto Fullstack utilizando Laravel 10 e Vite!

## Pré-requisitos

Certifique-se de ter os seguintes softwares instalados em sua máquina:

- [Composer](https://getcomposer.org/download/)
- [Node.js](https://nodejs.org/)
- [Docker](https://docs.docker.com/get-docker/)

## Configuração do Ambiente

1. Clone o repositório:

    ```bash
    git clone https://github.com/Ruberson1/taskier_teste.git
    ```

2. Navegue até o diretório do projeto:

    ```bash
    cd seu-repositorio
    ```

## Configuração sem Docker

3. Instale as dependências do Laravel e do Vite:

    ```bash
    composer install
    npm install
    ```

4. Execute as migrações e seeders:

    ```bash
    php artisan migrate
    php artisan db:seed
    ```

5. Execute a aplicação:

    ```bash
    php artisan serve
    npm run dev
    ```

A aplicação estará disponível em [http://localhost:8000](http://localhost:8000).

## Configuração com Docker

3. Se você preferir utilizar Docker, certifique-se de tê-lo instalado. Caso contrário, siga as instruções de instalação nos seguintes links:

    - [Docker Desktop para Windows](https://docs.docker.com/desktop/install/windows-install/)
    - [Docker Desktop para macOS](https://docs.docker.com/desktop/install/mac-install/)
    - [Docker Desktop para Linux](https://docs.docker.com/desktop/install/linux-install/)

4. Execute o seguinte comando para iniciar a aplicação com Docker:

    ```bash
    docker-compose up -d
    ```

   Ou, se preferir utilizar scripts:

    ```bash
    ./script-start-docker-compose.sh
    ```

5. Para acessar o container:

    ```bash
    ./script-access-container.sh
    ```

6. Dentro do container, execute as seguintes operações:

    ```bash
    composer install
    npm install
    php artisan migrate
    php artisan db:seed
    ```
### Se for utilizar a aplicação usando a imagem docker já existe um banco MySql configurado no docker-compose
### portando basta copiar a string de conexão e colar no seu arquivo .env 
```bash
DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=local
DB_USERNAME=root
DB_PASSWORD=root

FCM_SERVER_KEY='SUA_SERVER_KEY'
```

## Das funcionalidades:

Apenas usuários com permissões de admin poderão acessar a lista de usuários,  assim como edita-los,
o usuário logado ainda que seja admin não pode editar seu próprio usuário ainda que seja admin,
as demais funcionalidades exigidas nas regras do teste você pode ver na aba "sobre" onde contem as 
instruções para o teste.

Agora, a aplicação está pronta para uso. Para acessar, use as credenciais:

- Email: bueno@network.com
- Senha: bueno@teste

# IMPORTANTE

## Você deve configurar ser projeto no FCM(firebase cloud messaging) e alterar as credenciais;
```bash
apiKey: "SUA API",
authDomain: "AUTH_DOMAIN",
projectId: "PROJECT",
storageBucket: "STORAGE",
messagingSenderId: "MESSAGING",
appId: "APP_ID"
            
```
Para mais informações sobre as funcionalidades e instruções do teste, consulte a aba "Sobre" na aplicação.

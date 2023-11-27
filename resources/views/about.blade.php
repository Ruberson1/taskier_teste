@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Processo de Seleção - Desenvolvedor Pleno</h1>

        <h2>1. Índice</h2>
        <h2>2. Objetivos da Vaga</h2>
        <p>Trabalhar com Orientação a Objetos;<br>
            Ter boa compreensão do Framework Laravel e dos padrões que o acompanham;<br>
            Criar aplicações cumprindo os requisitos do projeto apresentado;<br>
            Ter conhecimentos e ser capaz de trabalhar com:<br>
            • Javascript Vanilla;<br>
            • Notificações por Email;<br>
            • Notificações Push;<br>
            • Canais e Filas;<br>
            • Transpilação com Laravel Mix;<br>
            • Relacionamento usando Models e Pivots.</p>

        <h2>3. Escopo deste teste</h2>
        <h3>3.1. Base do projeto</h3>
        <ul>
            <li>A aplicação deve ser feita com o Framework Laravel, na sua última versão;</li>
            <li>A camada de frontend:</li>
            <ul>
                <li>Deve ser implementada usando o Framework Bootstrap;</li>
                <li>Todas as telas que necessitem devem usar Javascript puro, transpilado com Laravel Mix
                    (https://laravel-mix.com);</li>
                <li>As telas internas devem possuir um menu superior contendo os links de acesso para as telas
                    disponíveis para o usuário logado;</li>
            </ul>
            <li>A camada de backend:</li>
            <ul>
                <li>Deve-se usar os "Models" para consultar e alterar dados no banco de dados;</li>
                <li>Todas as Migrations (https://laravel.com/docs/10.x/migrations) deverão estar corretamente
                    implementadas para uma fácil instalação usando 'php artisan migrate';</li>
            </ul>
            <li>O projeto deve ser alocado em uma conta do github, para análise do código fonte.</li>
        </ul>

        <h3>3.2. Tela de Login</h3>
        <ol>
            <li>A aplicação deve possuir uma "Tela de Login" onde qualquer usuário já existente no sistema possa
                informar suas credenciais para ter acesso;</li>
            <li>A "Tela de Login" pode aproveitar a rotina que acompanha o Laravel
                (https://laravel.com/docs/10.x/starter-kits#introduction);</li>
            <li>Será um grande diferencial, se a implementação do frontend for feita com Javascript puro e
                bootstrap, mantendo o backend oferecido pelo Laravel.</li>
        </ol>

        <h3>3.3. Gerenciamento de Usuários</h3>
        <ul>
            <li>A aplicação deve possuir um CRUD completo chamado "Gerenciamento de Usuários";</li>
            <li>Quando um novo usuário for criado, uma Notificação por e-mail deverá ser enviada para ele;</li>
            <li>Quando os dados de um usuário for editado, uma Notificação Push
                (https://laravel-notification-channels.com/) deverá ser enviada para a "Tela Principal" daquele
                usuário, e se este estiver na tela, deverá receber a notificação em tempo real;</li>
            <li>As notificações deverão ser enviadas usando FCM
                (https://firebase.google.com/docs/cloudmessaging/js/client?hl=pt-br);</li>
            <li>Um usuário deve possuir dois níveis de acesso, "admin" e "common", onde o primeiro pode acessar o
                "Gerenciamento de Usuários";</li>
            <li>Os níveis de acesso devem ser implementados em uma tabela separada e um Model do tipo Pivot
                (https://laravel.com/docs/10.x/eloquent-relationships) deverá ser implementado para relacionar.</li>
        </ul>

        <h3>3.4. Tela Principal</h3>
        <ul>
            <li>A aplicação deve possuir uma "Tela Principal", que seja acessada por qualquer usuário após um login
                bem sucedido;</li>
            <li>Se os dados do usuário, que estiver acessando a tela, for editado na tela de "Gerenciamento do
                Usuários" (por outro usuário), uma Notificação Push deverá ser recebida e exibida em tempo real.</li>
        </ul>
    </div>
@endsection


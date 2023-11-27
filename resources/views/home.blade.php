use Illuminate\Support\Str;
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <button onclick="startFCM()"
                        class="btn btn-danger mb-4 btn-flat">Receber notificações
                </button>
                <div class="card">
                    <div data-bs-theme="dark" class="card-header">{{ __('Home') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <p>
                            Olá <strong>{{ Auth::user()->name }}</strong>
                        </p>
                            <div class="container text-center mt-4">
                                <h4>Conheça a Taskier</h4>
                                <div  class="embed-responsive embed-responsive-16by9">
                                    <iframe width="460" height="285" class="embed-responsive-item" src="https://www.youtube.com/embed/w3IaqdtfK6k?si=QTApJv37vvSwPQqS" title="YouTube video player" allowfullscreen></iframe>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://www.gstatic.com/firebasejs/8.3.2/firebase.js"></script>
    <script>
        var firebaseConfig = {
            apiKey: "SUA API",
            authDomain: "AUTH_DOMAIN",
            projectId: "PROJECT",
            storageBucket: "STORAGE",
            messagingSenderId: "MESSAGING",
            appId: "APP_ID"
        };
        firebase.initializeApp(firebaseConfig);
        const messaging = firebase.messaging();
        function startFCM() {
            messaging
                .requestPermission()
                .then(function () {
                    return messaging.getToken();
                })
                .then(function (response) {
                    // Use Axios instead of $.ajax
                    axios.post('{{ route("store.token") }}', {
                        token: response
                    })
                        .then(function (response) {
                            alert('Token stored.');
                        })
                        .catch(function (error) {
                            alert(error);
                        });
                })
                .catch(function (error) {
                    alert(error);
                });
        }
        messaging.onMessage(function (payload) {
            const title = payload.notification.title;
            const options = {
                body: payload.notification.body,
                icon: payload.notification.icon,
            };
            new Notification(title, options);
        });
    </script>
@endsection

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User Profile</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Профиль пользователя</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div class="row mb-3">
                            <label class="col-md-4 col-form-label text-md-end">ID:</label>
                            <div class="col-md-6">
                                <p class="form-control-plaintext">{{ $id }}</p>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-md-4 col-form-label text-md-end">Имя:</label>
                            <div class="col-md-6">
                                <p class="form-control-plaintext">{{ $name }}</p>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-md-4 col-form-label text-md-end">Email:</label>
                            <div class="col-md-6">
                                <p class="form-control-plaintext">{{ $email }}</p>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <a href="{{ route('home') }}" class="btn btn-primary">
                                    На главную
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
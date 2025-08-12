@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Профиль пользователя</div>

                <div class="card-body">
                    <p><strong>ID:</strong> {{ $id }}</p>
                    <p><strong>Имя:</strong> {{ $name }}</p>
                    <p><strong>Email:</strong> {{ $email }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
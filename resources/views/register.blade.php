@extends('layouts.auth')

@section('content')
    <div class="login-container">
        <form method="POST" action="{{ route('register.submit') }}">
            @csrf
            <h2>Crie sua conta</h2>

            <div class="input-group">
                <label for="name">Nome completo*</label>
                <input type="text" id="name" name="name" required>
            </div>

            <div class="input-group">
                <label for="email">Seu e-mail*</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="input-group">
                <label for="password">Crie uma senha*</label>
                <input type="password" id="password" name="password" required>
            </div>

            <div class="input-group">
                <label for="password_confirmation">Confirme sua senha*</label>
                <input type="password" id="password_confirmation" name="password_confirmation" required>
            </div>

            <button type="submit">Cadastrar</button>

            <div class="links">
                <p>Já tem uma conta? <a href="{{ route('login') }}">Faça login</a></p>
            </div>
        </form>
    </div>
@endsection

@extends('layouts.site')

@section('title')
    Регистрация
@endsection

@section('content')
    <div class="wrapper">
        <div class="content">
            <div class="container-form">
                <form action="">
                    <div class="form-title">
                        <h2>Регистрация</h2>
                    </div>
                    <div class="form-data">
                        <input type="text" name="name" placeholder="Имя">
                    </div>
                    <div class="form-data">
                        <input type="text" name="email" placeholder="Email">
                    </div>
                    <div class="form-data">
                        <input type="text" name="password" placeholder="Пароль">
                    </div>
                    <div class="form-data">
                        <input type="text" name="password_confirmation" placeholder="Повторите пароль">
                    </div>
                    <a href="" class="link-btn">Отправить</a>
                </form>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.site')

@section('title')
    Вход
@endsection

@section('content')
    <div class="wrapper">
        <div class="content">
            <div class="container-form">
                <form action="">
                    <div class="form-title">
                        <h2>Задать вопрос</h2>
                    </div>
                    <div class="form-data">
                        <input type="text" name="email" placeholder="Email">
                    </div>
                    <div class="form-data">
                        <input type="text" name="password" placeholder="Пароль">
                    </div>
                    <a href="" class="link-btn">Отправить</a>
                    <a href="{{route('register.index')}}" class="link-register">Зарегистрироваться</a>
                </form>
            </div>
        </div>
    </div>
@endsection

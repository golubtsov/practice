@extends('layouts.site')

@section('title')
    Вход
@endsection

@section('content')
    <div class="wrapper">
        <div class="content">
            <div class="container-form">
                <form action="{{route('login')}}" method="post">
                    @csrf
                    <div class="form-title">
                        <h2>Задать вопрос</h2>
                    </div>
                    <div class="form-data">
                        <input type="text" name="email" placeholder="Email">
                    </div>
                    <div class="form-data">
                        <input type="text" name="password" placeholder="Пароль">
                    </div>
                    <input type="submit" class="link-btn" value="Отправить" style="cursor: pointer"/>
                    <a href="{{route('register.index')}}" class="link-register">Зарегистрироваться</a>
                </form>
            </div>
        </div>
    </div>
@endsection

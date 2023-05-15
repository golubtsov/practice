@extends('layouts.site')

@section('title')
    {{$tur->name}}
@endsection

@section('content')
    <div class="wrapper">
        <div class="container-message">
            <p>Тур оформлен! В ближайшее время с вами свяжется менеджер.</p>
        </div>
        <div class="content">
            <div class="container-info">
                <div class="container-info__image">
                    <img src="{{asset("storage/$tur->image_url")}}" alt="{{$tur->name}}">
                </div>
                <div class="container-info__info">
                    <div class="info__title">
                        <h2>{{$tur->name}}</h2>
                    </div>
                    <div class="info__city">
                        <p>{{$tur->adress->city}}</p>
                    </div>
                    <div class="info__price">
                        <p><b>Цена: </b>{{$tur->price}} руб.</p>
                    </div>
                    <div class="info__link">
                        <p><a href="" class="link-btn">Оформить</a></p>
                    </div>
                    <div class="info__about">
                        <h3>Описание</h3>
                        <p>{{$tur->description}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

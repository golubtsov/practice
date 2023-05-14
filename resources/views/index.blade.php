@extends('layouts.site')

@section('title')
    Алтай-Тур
@endsection

@section('content')

    <div class="wrapper">
        <div class="content">
            @include('layouts.main-image')
            <div class="container-offer">
                <div class="container-offer__title">
                    <h2>Горячие предложения</h2>
                </div>
                <div class="container-offer__items">
                    @foreach($turs as $tur)
                        <div class="container-offer__items-item">
                            <div class="offer-image">
                                <img src="{{asset("storage/$tur->image_url")}}" alt="">
                            </div>
                            <div class="offer-name">
                                <p><a href="">{{$tur->name}}</a></p>
                            </div>
                            <div class="offer-place">
                                <p>{{$tur->adress->city}}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="container-city">
                <div class="container-city__title">
                    <h2>Наши места</h2>
                </div>
                <div class="city-list">
                    @foreach($adresses as $adress)
                        <div class="city-item">
                            <div class="city-item-image">
                                <img src="{{asset("storage/$adress->id.jpg")}}" alt="">
                            </div>
                            <div class="city-about">
                                <div class="city-item-name">
                                    <h3>{{$adress->city}}</h3>
                                </div>
                                <div class="city-item-description">
                                    <p>{{$adress->description}}</p>
                                </div>
                                <div class="block-link">
                                    <a href="" class="link-btn">Поехали</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

@endsection

@extends('layouts.site')

@section('title')
    Предложения
@endsection

@section('content')
    <div class="wrapper">
        <div class="content">
            <div class="container-offer">
                <div class="container-offer__title">
                    <h2>Горячие предложения</h2>
                </div>
                <div class="container-select">
                    <div class="item-select">
                        <form>
                            <select>
                                @foreach($adresses as $adress)
                                    <option value="{{$adress}}">{{$adress->city}}</option>
                                @endforeach
                            </select>
                        </form>
                    </div>
                    <div class="item-select">
                        <select>
                            <option value="pop">По популярности</option>
                            <option value="price">По популярности</option>
                            <option value="new">По дате</option>
                        </select>
                    </div>
                </div>
                <div class="container-offer__items">
                    @foreach($turs as $tur)
                        <div class="container-offer__items-item">
                            <div class="offer-image">
                                <img src="{{asset("storage/$tur->image_url")}}" alt="">
                            </div>
                            <div class="offer-name">
                                <p><a href="{{route('tur', [$tur->id])}}">{{$tur->name}}</a></p>
                            </div>
                            <div class="offer-place">
                                <p>{{$tur->adress->city}}</p>
                            </div>
                            <div class="offer-place">
                                <p><span>{{$tur->price}}</span> руб.</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection

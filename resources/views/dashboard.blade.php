@extends('layouts.site')

@section('title')
    Личный кабинет
@endsection

@section('content')
    <div class="wrapper">
        <div class="container">
            <div class="container-table">
                <table>
                    <tr>
                        <th>ID</th>
                        <th>Название тура</th>
                        <th>Цена</th>
                        <th>Статус</th>
                    </tr>
                    @if(count($oders) !== 0)
                        @foreach($oders as $oder)
                            <tr>
                                <td>{{$oder->tur->id}}</td>
                                <td>{{$oder->tur->name}}</td>
                                <td>{{$oder->tur->price}} руб</td>
                                <td>Оформлен</td>
                        @endforeach
                    @endif
                </table>
            </div>
        </div>
    </div>
@endsection

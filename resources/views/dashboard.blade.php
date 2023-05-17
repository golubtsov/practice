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
                    <tr>
                        <td>123</td>
                        <td>Шерегеш</td>
                        <td>12 000 руб</td>
                        <td>Оформлен</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
@endsection

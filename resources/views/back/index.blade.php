@extends('back.app')

@section('title', 'приветствие')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Главная (статистика данных)</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        Здравствуй пользователь
                        <br>
                      <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
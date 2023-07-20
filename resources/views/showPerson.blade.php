@extends('Auth.layouts')
@section('content')
<br><br>
    <div class="row text-center">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h3>Маьлумоти пурра</h3>
            </div>
        </div>
    </div><br>
    <div class="row text-center">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="username">Ном:</label>
                {{ $result->Name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="username">Насаб:</label>
                {{ $result->LastName }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="username">Аддресс:</label>
                {{ $result->Address}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="username">Email:</label>
                {{ $result->Email}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="username">Номер телефон:</label>
                {{ $result->PhoneNumber}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <a class="btn btn-primary" href="{{ URL('/') }}">Сахифаи асоси</a>
        </div>
    </div>
@endsection
@extends('Auth.layouts')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left text-center">
            <h3>Хамаи кормандон</h3>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('creatViewRoute') }}">Илова намудан</a>
        </div><br>
    </div>
</div>
@if ($message = Session::get('success'))
<div class="alert alert-success">
    <span>{{ $message }}</span>
</div>
@endif
<table class="table table-bordered">
    <tr>
            <td>Id</td>
            <td>Ном</td>
            <td>Насаб</td>
            <td>Аддресс</td>
            <td>Email</td>
            <td>Номер телефон</td>
            <td>Амалётхо</td>
    </tr>
    @foreach ($result as $user)
    <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->Name }}</td>
                <td>{{ $user->LastName }}</td>
                <td>{{ $user->Address }}</td>
                <td>{{ $user->Email }}</td>
                <td>{{ $user->PhoneNumber }}</td>
        <td>
        <a class="btn btn-info" href="{{route('show',['id'=>$user->id])}}">Дидан</a>
        <a class="btn btn-primary" href="{{ route('edite', ['id' =>$user->id]) }}">Ислох кардан</a>
        <a  class="btn btn-danger" href="{{route('delete',['id'=>$user->id])}}">Нест кардан</a>
        @csrf
        </td>
    </tr>
    @endforeach
</table>

@endsection
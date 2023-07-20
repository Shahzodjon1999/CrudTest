@extends('Auth.layouts')
@section('content')
<main>
        <form action="{{ route('chek') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <h1>Даромадан</h1>
            <div>
                <label for="username">Логин:</label>
                <input type="text" name="username" id="username" class="block mt-1 w-full"  required autofocus autocomplete="username">
            </div>
            <div>
                <label for="password">Парол:</label>
                <input type="password" name="password" id="password"
                class="block mt-1 w-full" required autocomplete="current-password" >
            </div>
            <button type="submit">Даромадан</button>
                <a href="{{route('regview')}}">Аз руйхат гушатан</a>
        </form>
    </main>
@endsection

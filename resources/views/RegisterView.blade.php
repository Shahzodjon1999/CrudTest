@extends('Auth.layouts')
@section('content')
    <main>
        <form action="{{ route('reg') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <h1>Аз руйхат гушатан</h1>
            <div>
                <label for="username">Ном:</label>
                <input type="text" name="username" id="username" class="block mt-1 w-full" required autocomplete="additional-name">
            </div>
            <div>
                <label for="email">Email:</label>
                <input type="email" name="email" id="email"  class="block mt-1 w-full"  :value="old('email')" required autofocus autocomplete="email">
            </div>
            <div>
                <label for="login">Логин:</label>
                <input type="text" name="login" id="login" class="block mt-1 w-full"  required autocomplete="username">
            </div>
            <div>
                <label for="password">Парол:</label>
                <input type="password" name="password" id="password" class="block mt-1 w-full" required autocomplete="current-password">
            </div>
            <button type="submit">Сабт кардан</button>
        </form>
    </main>
@endsection

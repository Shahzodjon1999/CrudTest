@extends('Auth.layouts')
@section('content')
<main>
        <form action="{{ route('add') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <h1>Илова намудан</h1>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label for="username">Ном:</label>
                        <input type="text" name="Name" id="username"class="form-control" class="block mt-1 w-full" required autocomplete="additional-name">
                        @error('Name')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label for="username">Насаб:</label>
                        <input type="text" name="LastName" id="username" class="form-control"  class="block mt-1 w-full" required autocomplete="additional-name">
                        @error('LastName')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label for="username">Аддресс:</label>
                        <input type="text" name="Address" id="username" class="form-control"  class="block mt-1 w-full" required autocomplete="additional-name">
                        @error('Address')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label for="username">Email:</label>
                        <input type="email" name="email" id="username" class="form-control" class="block mt-1 w-full" required autocomplete="additional-name">
                        @error('email')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label for="username">Номер телефон:</label>
                        <input type="text" name="PhoneNumber" id="username" class="form-control"  class="block mt-1 w-full" required autocomplete="additional-name">
                        @error('PhoneNumber')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>
            <button type="submit">Сабт кардан</button>
        </form>
    <main>
@endsection

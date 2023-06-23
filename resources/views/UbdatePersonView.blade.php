<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Update Person</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left mb-2">
                    <h2>Update Persons</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('index') }}"> Index Page</a>
                </div>
            </div>
        </div>
        @if (session('status'))
            <div class="alert alert-success mb-1 mt-1">
                {{ session('status') }}
            </div>
        @endif

        <form action="{{ route('Update', ['id' => $result->id]) }}" method="POST" enctype="multipart/form-data">

            @csrf
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Person Name:</strong>
                        <input type="text" name="Name" class="form-control" value="{{ $result->Name }}">
                        @error('Name')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Person LastName:</strong>
                        <input type="text" name="LastName" class="form-control" value="{{ $result->LastName }}">
                        @error('LastName')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Person Address:</strong>
                        <input type="text" name="Address" class="form-control" value="{{ $result->Address }}">
                        @error('Address')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Person Email:</strong>
                        <input type="email" name="email" class="form-control" value="{{ $result->Email }}">
                        @error('email')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Person PhoneNumber</strong>
                        <input type="text" name="PhoneNumber" class="form-control"
                            value="{{ $result->PhoneNumber }}">
                        @error('PhoneNumber')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <button type="submit" class="btn btn-primary ml-3">Submit</button>
            </div>

        </form>
    </div>
</body>

</html>

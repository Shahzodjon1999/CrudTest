<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Home Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>

    <table border="1" align="center">
        <tr>
            <td>Id</td>
            <td>First Name</td>
            <td>Last Name</td>
            <td>Address</td>
            <td>Email</td>
            <td>Phone Namber</td>
            <td>Operation</td>
            <td>Edite Person</td>
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
                    <a href="{{ route('delete', ['id' => $user->id]) }}">Delete</a>
                </td>
                <td>
                    <a href="{{ route('edite', ['id' => $user->id]) }}">Ubdate</a>
                </td>
            </tr>
        @endforeach
    </table>
    <div>
        <a href="{{ route('creatViewRoute') }}" class="btn btn-primary ml-3">Create Person</a>
    </div>

</body>

</html>

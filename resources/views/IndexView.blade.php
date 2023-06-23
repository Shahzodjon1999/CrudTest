<html>
    <head>
        <body>

            <table border="1">
                <tr>
                    <td>Id</td>
                    <td>First Name</td>
                    <td>Last Name</td>
                    <td>Address</td>
                    <td>Email</td>
                    <td>Phone Namber</td>
                    <td>Operation</td>
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
                            <a href="{{route('delete', ['id' => $user->id])}}">Delete</a>
                         </td>
                    </tr>
                @endforeach
            </table>
        </body>
    </head>
</html>

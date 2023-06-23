<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.phptutorial.net/app/css/style.css">
    <title>Register</title>
</head>

<body>
    <main>
        <form action="{{ route('reg') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <h1>Sign Up</h1>
            <div>
                <label for="username">Username:</label>
                <input type="text" name="username" id="username">
            </div>
            <div>
                <label for="email">Email:</label>
                <input type="email" name="email" id="email">
            </div>
            <div>
                <label for="login">Login:</label>
                <input type="text" name="login" id="password2">
            </div>
            <div>
                <label for="password">Password:</label>
                <input type="password" name="password" id="password">
            </div>
            <button type="submit">Register</button>
            <footer>Already a member? <a href="login.php">Login here</a></footer>
        </form>
    </main>
</body>

</html>

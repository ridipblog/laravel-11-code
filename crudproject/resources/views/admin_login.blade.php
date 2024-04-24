<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Login </title>
</head>
<body>
    <form action="" id="admin-login-form">
        @csrf
        <p>Enter your email-id</p>
        <input type="email" name="email">
        <p>Enter your password</p>
        <input type="password" name="password">
        <button type="submit">Login</button>
    </form>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('js/admin_login.js') }}"></script>
</body>
</html>

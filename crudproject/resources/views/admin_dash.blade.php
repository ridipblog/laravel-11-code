<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Name {{ Auth::guard('admin')->user() ? Auth::guard('admin')->user()->email : 'unauthrozied' }}</h1>
    <a href="/admin-logout">Logout</a>
    <div>
        <input type="text" id="bank_name">
        <button id="bank_btn">Update</button>
        <input type="text" id="account_name">
        <button id="account_btn">Update</button>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('js/admin_login.js') }}"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Feed back </title>
</head>
<body>
    {{ Auth::guard('admin')->user()->email }}
</body>
</html>

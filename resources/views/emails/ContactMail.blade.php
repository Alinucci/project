<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <h1>Contact Form Message</h1>
        <p>Name: {{ $detalis['name'] }}</p>
        <p>Email: {{ $detalis['email'] }}</p>
        <p>Phone: {{ $detalis['phone'] }}</p>
        <p>Message: {{ $detalis['msg'] }}</p>
        {{-- <p>Image: {{ $detalis['image'] }}</p> --}}
</body>
</html>
<!-- resources/views/Home.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
</head>
<body>
    <nav>
        <a href="/">Home</a>
        <a href="/About">About</a>
        <a href="/Contact">Contact</a>
    </nav>
    <h1>Personal Information</h1>
    <img src="{{ $image }}" alt="Personal Image">

    <p>Name: {{ $details['name'] }}</p>
    <p>Address: {{ $details['address'] }}</p>
</body>
</html>

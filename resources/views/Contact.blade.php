<!-- resources/views/Contact.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Contact</title>
</head>
<body>
<nav>
        <a href="/">Home</a>
        <a href="/About">About</a>
        <a href="/Contact">Contact</a>
    </nav>
    <h1>Contact Information</h1>
    <p>Address: {{ $contact['address'] }}</p>
    <p>Phone Number: {{ $contact['phone_number'] }}</p>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>help</title>
    <link rel="stylesheet" href="{{ asset('css/help.css') }}">
</head>
<body>
    @include('components.navbar')

    <div class="contact-area" id="contact-area">
        <h1>Contact us</h1>
        <p>If you have any questions or need help with anything, please contact us.</p>
        <form action="{{ route('contact.submit') }}" method="post">
            @csrf
            <input type="text" name="name" id="name" placeholder="Name" required>
            <input type="email" name="email" id="email" placeholder="Email" required>
            <textarea name="message" id="message" cols="30" rows="10" placeholder="Message" required></textarea>
            <button type="submit">Send</button>
        </form>
    </div>

    @include('components.footer')
</body>
</html>

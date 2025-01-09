<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
    <title>Register</title>
</head>
<body>
    <div class="register-box">
        <h2>Register</h2>
        <form>
            <div class="input-field">
                <label for="firstname">Firstame:</label>
                <input type="text" id="firstname" name="firstname" class="form-control" required>
            </div>
            <diV class="input-field">
                <label for="lastname">Lastname:</label>
                <input type="text" id="lastname" name="lastname" class="form-control" required>
            </div>
            <div class="input-field">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" class="form-control" required>
            </div>
            <div class="input-field">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" class="form-control" required>
            </div>
            <div class="input-field">
                <label for="password_confirmation">Confirm Password:</label>
                <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" required>
            </div>
            <button type="submit" class="register-btn">Register</button>
        </form>
    </div>
</body>
</html>

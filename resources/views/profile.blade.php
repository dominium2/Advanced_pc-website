<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile</title>
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
</head>
<body>
    <div class="profile-container">
        <h2>Profile Information</h2>
        <form action="{{ route('profile.update') }}" method="POST">
            @csrf
            @method('PUT')

            <div class="input-field">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" value="{{ old('name', auth()->user()->name) }}" required>
            </div>

            <div class="input-field">
                <label for="address">Address:</label>
                <input type="text" id="address" name="address" value="{{ old('address', auth()->user()->address) }}" required>
            </div>

            <div class="input-field">
                <label for="billing_info">Billing Information:</label>
                <input type="text" id="billing_info" name="billing_info" value="{{ old('billing_info', auth()->user()->billing_info) }}" required>
            </div>

            <div class="input-field">
                <label for="payment_method">Payment Method:</label>
                <input type="text" id="payment_method" name="payment_method" value="{{ old('payment_method', auth()->user()->payment_method) }}" required>
            </div>

            <button type="submit" class="update-btn">Update Profile</button>
        </form>
    </div>
</body>
</html>

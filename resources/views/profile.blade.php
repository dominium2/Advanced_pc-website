
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
        <h1>Profile Information</h1>
        <form action="{{ route('profile.update') }}" method="POST">
            @csrf
            @method('PUT')

            <div class="account-info">
                <h2>Account Information</h2>
                <div class="input-field">
                    <label for="firstname">FirstName:</label>
                    <input type="text" id="firstname" name="firstname" value="{{ old('firstname', $user->firstname) }}" placeholder="{{ $user->firstname }}" required>
                </div>

                <div class="input-field">
                    <label for="lastname">Lastname:</label>
                    <input type="text" id="lastname" name="lastname" value="{{ old('lastname', $user->lastname) }}" placeholder="{{ $user->lastname }}" required>
                </div>

                <div class="input-field">
                    <label for="phone">Phone:</label>
                    <input type="text" id="phone" name="phone" value="{{ old('phone', $user->phone) }}" placeholder="{{ $user->phone }}">
                </div>

                <div class="input-field">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" value="{{ old('email', $user->email) }}" placeholder="{{ $user->email }}" required>
                </div>
            </div>
            <div class="address-info">
                <h2>Address Information</h2>
                <div class="delivery-address">
                    <h3>Delivery Address</h3>
                    <div class="input-field">
                        <label for="delivery_address">Address:</label>
                        <input type="text" id="delivery_address" name="delivery_address" value="{{ old('delivery_address', $user->delivery_address) }}" placeholder="{{ $user->delivery_address }}">
                    </div>
                </div>

                <div class="billing-address">
                    <h3>Billing Address</h3>
                    <div class="input-field">
                        <label for="billing_address">Address:</label>
                        <input type="text" id="billing_address" name="billing_address" value="{{ old('billing_address', $user->billing_address) }}" placeholder="{{ $user->billing_address }}">
                    </div>
                </div>
            </div>
            <button type="submit" class="update-btn">Update Profile</button>
        </form>
    </div>
</body>
</html>

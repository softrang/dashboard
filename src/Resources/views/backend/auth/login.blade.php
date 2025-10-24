<!DOCTYPE html>
<html>
<head>
    <title>Softrang Admin Login</title>
    <link rel="stylesheet" href="{{ asset('vendor/ecommerce-dashboard/css/login.css') }}">
</head>
<body>
   <div class="login-container">
        <h2>🔐 Softrang Dashboard Login</h2>

        <form method="POST" action="{{ route('login.submit') }}">
            @csrf
            <input type="email" name="email" placeholder="Email Address" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <style>
        body {
            background-color: #F0F8FF;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background: #FFFFFF;
            padding: 30px 40px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(255, 0, 0, 0.3);
            width: 350px;
        }

        h2 {
            text-align: center;
            color: #000000;
        }

        label {
            font-weight: bold;
            color: #000000;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-top: 6px;
            margin-bottom: 20px;
            border: 1px solid #000000;
            border-radius: 5px;
        }

        button {
            width: 100%;
            background-color: #000000;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            font-weight: bold;
            cursor: pointer;
        }

        button:hover {
            background-color: #a00000;
        }

        .error {
            color: red;
            margin-bottom: 15px;
        }

        .login-link {
            text-align: center;
            margin-top: 15px;
        }

        .login-link a {
            color: #0000FF;
            text-decoration: none;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Form Register</h2>

        @if ($errors->any())
            <div class="error">
                <ul style="margin: 0; padding-left: 18px;">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('register.store') }}">
            @csrf
            <label>Nama:</label><br>
            <input type="text" name="name" required><br>

            <label>Email:</label><br>
            <input type="email" name="email" required><br>

            <label>Password:</label><br>
            <input type="password" name="password" required><br>

            <label>Konfirmasi Password:</label><br>
            <input type="password" name="password_confirmation" required><br>

            <button type="submit">Daftar</button>
        </form>

        <p class="login-link">
            Sudah punya akun? <a href="{{ route('login') }}">Login di sini</a>
        </p>
    </div>
</body>
</html>

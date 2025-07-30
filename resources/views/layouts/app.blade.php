<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'Dashboard Produk')</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f7fa;
            margin: 0;
            padding: 0;
        }

        .navbar {
            background-color: #007bff;
            padding: 15px 20px;
            color: white;
            font-size: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logout-button form {
            display: inline;
        }

        .logout-button button {
            background-color: #dc3545;
            color: white;
            border: none;
            padding: 6px 12px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 14px;
        }

        .container {
            max-width: 900px;
            margin: 30px auto;
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }

        th, td {
            padding: 12px;
            border: 1px solid #ddd;
            text-align: center;
        }

        th {
            background-color: #007bff;
            color: white;
        }

        a {
            color: #007bff;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        button {
            padding: 6px 10px;
            border: none;
            background-color: red;
            color: white;
            border-radius: 4px;
            cursor: pointer;
        }

        .success-message {
            padding: 10px;
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
            margin-bottom: 20px;
            border-radius: 5px;
        }
    </style>
</head>
<body>

    <div class="navbar">
        <div>Dashboard Produk</div>
        <div class="logout-button">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit">Logout</button>
            </form>
        </div>
    </div>

    <div class="container">
        @yield('content')
    </div>

</body>
</html>

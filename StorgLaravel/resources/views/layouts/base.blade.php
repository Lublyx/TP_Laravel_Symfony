<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <style>
        body {
            font-family: Arial;
            background: #0f172a;
            color: white;
            display: flex;
            justify-content: center;
            padding-top: 50px;
        }

        .card {
            background: #1e293b;
            padding: 30px;
            border-radius: 10px;
            width: 350px;
        }

        input, button {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            border-radius: 5px;
            border: none;
        }

        input {
            background: #334155;
            color: white;
        }

        button {
            background: #38bdf8;
            cursor: pointer;
        }

        a {
            color: #38bdf8;
            display: block;
            margin-top: 15px;
            text-align: center;
        }

        ul {
            list-style: none;
            padding: 0;
        }

        li {
            background: #334155;
            margin-top: 5px;
            padding: 10px;
            border-radius: 5px;
        }

        li:hover {
            background: #475569;
        }
    </style>
</head>
<body>
    <div class="card">
        @yield('content')
    </div>
</body>
</html>
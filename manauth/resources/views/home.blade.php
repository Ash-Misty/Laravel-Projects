<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ArtSpace - Welcome</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: url('/bg.avif') no-repeat center center fixed;
            background-size: cover;
            font-family: 'Poppins', sans-serif;
            color: #fff;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .container {
            background: rgba(66, 221, 214, 0.727);
            padding: 50px;
            border-radius: 16px;
            text-align: center;
            box-shadow: 0 8px 32px 0 rgba(52, 166, 223, 0.37);
            backdrop-filter: blur(6px);
            max-width: 750px;
            width: 90%;
        }

        h2 {
            font-size: 2.5rem;
            margin-bottom: 15px;
            font-weight: bold;
        }

        p.tagline {
            font-size: 1.2rem;
            font-style: italic;
            margin-bottom: 30px;
        }

        a.logout-btn {
            padding: 12px 25px;
            background-color: #ff6b6b;
            color: white;
            border: none;
            border-radius: 10px;
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        a.logout-btn:hover {
            background-color: #ff4757;
        }
    </style>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h2>Welcome, {{ auth()->user()->name }}!</h2>
        <p class="tagline">“Where colors speak louder than words.”</p>
        <a href="{{ route('logout') }}" class="logout-btn"
           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            Logout
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </div>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <title>Landing</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(to right, #00c6ff, #0072ff);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: white;
            text-align: center;
        }

        .container {
            background-color: rgba(0, 0, 0, 0.3);
            padding: 50px;
            border-radius: 20px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
        }

        h1 {
            font-size: 36px;
            margin-bottom: 30px;
        }

        a {
            text-decoration: none;
            background-color: white;
            color: #0072ff;
            padding: 12px 24px;
            border-radius: 8px;
            font-weight: bold;
            margin: 0 10px;
            transition: background-color 0.3s, color 0.3s;
        }

        a:hover {
            background-color: #005bb5;
            color: white;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome to the App</h1>
        <a href="/signup">Sign Up</a>
        <a href="/login">Login</a>
    </div>
</body>
</html>

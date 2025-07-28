<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <style>
        body {
            background: linear-gradient(to right, #fbc2eb, #a6c1ee);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 50px;
            margin: 0;
        }

        h1 {
            color: #333;
            margin-bottom: 20px;
        }

        h3 {
            color: #555;
            margin-top: 40px;
        }

        .token-box {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            width: 90%;
            max-width: 700px;
            word-break: break-all;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
            font-size: 14px;
            color: #222;
        }

        .nav-links {
            margin-top: 30px;
        }

        .nav-links a {
            display: inline-block;
            text-decoration: none;
            background-color: #3498db;
            color: white;
            padding: 10px 20px;
            border-radius: 8px;
            margin: 0 10px;
            transition: background-color 0.3s ease;
        }

        .nav-links a:hover {
            background-color: #2c80b4;
        }
    </style>
</head>
<body>
    <h1>Welcome Home</h1>

    <h3>Your Encoded JWT Token:</h3>
    <div class="token-box">
      {{ $token }} 


    <div class="nav-links">
        <a href="/profile">View Profile</a>
        <a href="/logout">Logout</a>
    </div>
</body>
</html>

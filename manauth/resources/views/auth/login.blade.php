<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <style>
        body {
            background: linear-gradient(135deg, #667eea, #764ba2);
            font-family: sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .login-form {
            background-color: #ffffff;
            padding: 30px 40px;
            border-radius: 12px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }

        .login-form h2 {
            margin-bottom: 20px;
            color: #333;
        }

        .login-form label {
            display: block;
            margin-bottom: 15px;
            color: #444;
            text-align: left;
            font-weight: 500;
        }

        .login-form input[type="text"],
        .login-form input[type="password"],
        .login-form input[type="email"] {
            width: 100%;
            padding: 10px 12px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 6px;
        }

        .login-form input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #667eea;
            color: white;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            cursor: pointer;
        }

        .login-form a {
            margin-top: 15px;
            display: block;
            color: #667eea;
            text-decoration: none;
            font-size: 14px;
        }
    </style>
</head>
<body>

    <form method="POST" action="/authenticate" class="login-form">
        @csrf
        <h2>Login</h2>

        @if($errors->any())
            <ul style="color: red; text-align: left;">
                {!! implode('', $errors->all('<li>:message</li>')) !!}
            </ul>
        @endif

        <label>Email
            <input type="email" name="email" required>
        </label>
        <label>Password
            <input type="password" name="password" required>
        </label>
        <input type="submit" value="Login">
        <a href="/register">Don't have an account? Register</a>
    </form>

</body>
</html>

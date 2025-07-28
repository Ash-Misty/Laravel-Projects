<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <style>
        body {
            background-image: url('../registerbg.jpg'); /* Example background image */
            background-size: cover;
            background-position: center;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            position: relative;
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.5);
        }

        .register-form {
            background-color: rgba(255, 255, 255, 0.2);
            padding: 40px 50px;
            border-radius: 12px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 420px;
            text-align: center;
            position: relative;
        }

        .register-form h2 {
            margin-bottom: 25px;
            color: #ffffff;
            font-size: 24px;
            font-weight: bold;
        }

        .register-form label {
            display: block;
            margin-bottom: 15px;
            color: #ffffff;
            text-align: left;
            font-weight: 500;
        }

        .register-form input[type="text"],
        .register-form input[type="password"],
        .register-form input[type="email"] {
            width: 100%;
            padding: 12px;
            margin-top: 6px;
            border: 1px solid #ccc;
            border-radius: 6px;
            transition: border-color 0.3s ease;
            background-color: rgba(255, 255, 255, 0.7);
            color: #333;
        }

        .register-form input[type="text"]:focus,
        .register-form input[type="password"]:focus,
        .register-form input[type="email"]:focus {
            border-color: #5c6bc0;
            outline: none;
        }

        .register-form input[type="submit"] {
            width: 100%;
            padding: 12px;
            background-color: #5c6bc0;
            color: white;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .register-form input[type="submit"]:hover {
            background-color: #3f51b5;
        }

        .error-messages {
            background: #ffe6e6;
            color: #cc0000;
            border: 1px solid #ffb3b3;
            padding: 12px;
            border-radius: 8px;
            list-style-type: none;
            margin-bottom: 20px;
            text-align: left;
        }

        .login-link {
            margin-top: 15px;
            display: block;
            color: #ffffff;
            text-decoration: none;
            font-size: 14px;
        }

        .login-link:hover {
            text-decoration: underline;
            color: #b0bec5;
        }
    </style>
</head>
<body>

    <div class="overlay"></div>

    <form method="POST" action="/store" class="register-form">
        @csrf
        <h2>Create Account</h2>

        @if($errors->any())
            <ul class="error-messages">
                {!! implode('', $errors->all('<li>:message</li>')) !!}
            </ul>
        @endif

        <label>Name
            <input type="text" name="name" required>
        </label>
        <label>Email
            <input type="email" name="email" required>
        </label>
        <label>Password
            <input type="password" name="password" required>
        </label>
        <label>Confirm Password
            <input type="password" name="password_confirmation" required>
        </label>
        <input type="submit" value="Register">

        <a href="/login" class="login-link">Already have an account? Login</a>
    </form>

</body>
</html>

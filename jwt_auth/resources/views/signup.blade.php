<!DOCTYPE html>
<html>
<head>
    <title>Signup</title>
    <style>
        body {
            background: linear-gradient(to right, #6dd5ed, #2193b0);
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: white;
            padding: 30px 40px;
            border-radius: 15px;
            box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.25);
            text-align: center;
            width: 300px;
        }
        h2 {
            color: #2193b0;
            margin-bottom: 20px;
        }
        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 8px;
        }
        button {
            width: 100%;
            background-color: #2193b0;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
        }
        button:hover {
            background-color: #17698f;
        }
        a {
            display: inline-block;
            margin-top: 15px;
            color: #17698f;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Register</h2>
        <form method="POST" action="/signup">
            @csrf
            <input type="text" name="name" placeholder="Name" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="text" name="mobile_no" placeholder="Mobile Number" required>
            <input type="text" name="education" placeholder="Education" required>
            <button type="submit">Sign Up</button>
        </form>
        <a href="/">Back to Home</a>
    </div>
</body>
</html>

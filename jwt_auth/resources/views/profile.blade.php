<!DOCTYPE html>
<html>
<head>
    <title>Profile</title>
    <style>
        body {
            background: linear-gradient(to right, #a1c4fd, #c2e9fb);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .profile-box {
            background-color: white;
            padding: 30px 40px;
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
            text-align: left;
            width: 350px;
        }
        h2 {
            color: #3498db;
            margin-bottom: 20px;
            text-align: center;
        }
        p {
            font-size: 16px;
            margin: 10px 0;
            color: #333;
        }
        a {
            display: block;
            text-align: center;
            margin-top: 20px;
            text-decoration: none;
            color: #3498db;
            font-weight: bold;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="profile-box">
        <h2>Profile Info</h2>
        <p><strong>Name:</strong> {{ $user->name }}</p>
        <p><strong>Email:</strong> {{ $user->email }}</p>
        <p><strong>Mobile No:</strong> {{ $user->mobile_no }}</p>
        <p><strong>Education:</strong> {{ $user->education }}</p>
        <a href="{{route('marks.show')}}">View Marks</a>
        <a href="/home"> Back to Home</a>
    </div>
</body>
</html>

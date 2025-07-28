<!DOCTYPE html>
<html>
<head>
    <title>Your Marks</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f2f2f2;
            padding: 20px;
            text-align: center;
        }
        h2 {
            color: #333;
            margin-bottom: 20px;
        }
        table {
            margin: 0 auto;
            width: 60%;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        th, td {
            padding: 12px 20px;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #3498db;
            color: white;
        }
        tr:hover {
            background-color: #f1f1f1;
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

<h2>Hi {{$user->name}}! <br> Your Marks</h2>

<table>
    <tr>
        <th>Subject</th>
        <th>Mark</th>
    </tr>


    @foreach ($marks as $mark)
    <tr>
        <td>{{ $mark->subject }}</td>
        <td>{{ $mark->mark }}</td>
    </tr>
    @endforeach
</table>
<a href="/home"> Back to Home</a>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 Not Found</title>
    <style>
        body {
            background-color: #f7fafc;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            text-align: center;
        }

        h1 {
            font-size: 48px;
            color: #718096;
            margin-bottom: 20px;
        }

        p {
            font-size: 20px;
            color: #4a5568;
            margin-bottom: 10px;
        }

        a {
            color: #4299e1;
            text-decoration: none;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="content">
        <h1>404 Not Found</h1>
        <p>The page you are looking for could not be found.</p>
        <p>Are you sure the URL is correct?</p>
        <p>Get in touch with the site owner with this e-mail: example@gmail.com</p>
        <p><a href="{{ route('bars.index') }}">Go back to the main page</a></p>
    </div>
</div>
</body>
</html>

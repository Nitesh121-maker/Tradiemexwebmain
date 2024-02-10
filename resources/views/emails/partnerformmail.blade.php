<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submission Confirmation</title>
    <style>
        /* Your inline CSS styles here */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            animation: fadeIn 0.5s ease;
        }
        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Mail from {{ $fname}}!</h2>
        <ul>
            <li><strong>First Name:</strong> {{ $fname }}</li>
            <li><strong>Last Name:</strong> {{ $lname }}</li>
            <li><strong>Email:</strong> {{ $email }}</li>
            <li><strong>Phone:</strong> {{ $phone }}</li>
            <li><strong>Message:</strong> {{ $msg }}</li>
            <li><strong>Apply:</strong> {{ $apply }}</li>
        </ul>
       
    </div>
</body>
</html>

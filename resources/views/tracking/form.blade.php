<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Track Your Package</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f3f4f6;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .tracking-form {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        .tracking-form h2 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 24px;
            color: #333333;
        }

        .tracking-form label {
            display: block;
            margin-bottom: 8px;
            color: #555555;
            font-weight: bold;
        }

        .tracking-form input[type="text"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #cccccc;
            border-radius: 6px;
            margin-bottom: 15px;
            font-size: 16px;
        }

        .tracking-form button {
            width: 100%;
            background-color: #007bff;
            color: white;
            padding: 12px;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .tracking-form button:hover {
            background-color: #0056b3;
        }

        .error-message {
            color: red;
            font-size: 14px;
            margin-top: -10px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <form action="{{ route('tracking.search') }}" method="POST" class="tracking-form">
        @csrf
        <h2>Track Your Package</h2>

        <label for="tracking_code">Enter Tracking Code:</label>
        <input type="text" name="tracking_code" id="tracking_code" required>

        @error('tracking_code')
            <div class="error-message">{{ $message }}</div>
        @enderror

        <button type="submit">Track</button>
    </form>
</body>
</html>


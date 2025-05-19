<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tracking Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f3f4f6;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: start;
            min-height: 100vh;
        }

        .tracking-details {
            background-color: #ffffff;
            padding: 30px;
            margin-top: 50px;
            border-radius: 12px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 500px;
        }

        .tracking-details h2 {
            text-align: center;
            color: #333;
            font-size: 26px;
            margin-bottom: 25px;
        }

        .tracking-details p {
            font-size: 16px;
            color: #555;
            margin-bottom: 10px;
            line-height: 1.6;
        }

        .tracking-details p strong {
            color: #222;
        }
    </style>
</head>
<body>
    <div class="tracking-details">
        <h2>Tracking Details</h2>

        <p><strong>Origin:</strong> {{ $quote->origin }}</p>
        <p><strong>Destination:</strong> {{ $quote->destination }}</p>
        <p><strong>Weight:</strong> {{ $quote->weight }} kg</p>
        <p><strong>Description:</strong> {{ $quote->item_description }}</p>
        <p><strong>Dimensions:</strong> {{ $quote->dimensions }}</p>
        <p><strong>Quote Amount:</strong> ₦{{ $quote->quote_amount }}</p>
        <p><strong>Status:</strong> {{ $quote->status }}</p>
        <p><strong>Loading Status:</strong> {{ $quote->loading_status }}</p>
    </div>
</body>
</html>

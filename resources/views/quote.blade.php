<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Generate Quote</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f3f4f6;
      display: flex;
      justify-content: center;
      align-items: start;
      padding-top: 50px;
      min-height: 100vh;
      margin: 0;
    }

    .quote-form {
      background-color: #fff;
      padding: 30px;
      border-radius: 12px;
      box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
      max-width: 500px;
      width: 100%;
    }

    .quote-form h2 {
      text-align: center;
      margin-bottom: 25px;
      color: #333;
    }

    .quote-form input,
    .quote-form textarea,
    .quote-form button {
      width: 100%;
      padding: 12px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 6px;
      font-size: 16px;
      box-sizing: border-box;
    }

    .quote-form textarea {
      resize: vertical;
      height: 100px;
    }

    .quote-form button {
      background-color: #4CAF50;
      color: white;
      font-weight: bold;
      cursor: pointer;
      transition: background-color 0.3s ease;
      border: none;
    }

    .quote-form button:hover {
      background-color: #45a049;
    }

    .quote-form input:focus,
    .quote-form textarea:focus {
      outline: none;
      border-color: #4CAF50;
      box-shadow: 0 0 4px #4CAF50;
    }
  </style>
</head>
<body>

  <form action="{{ route('quote.store') }}" method="POST" class="quote-form">
    <h2>Request a Quote</h2>
    @csrf
    <input type="text" name="origin" placeholder="Pickup Location" required>
    <input type="text" name="destination" placeholder="Destination" required>
    <input type="number" name="weight" placeholder="Weight (kg)" required>
    <textarea name="item_description" placeholder="Describe the item"></textarea>
    <input type="text" name="dimensions" placeholder="Dimensions (L x W x H)">
    <button type="submit">Generate Quote</button>
  </form>

</body>
</html>

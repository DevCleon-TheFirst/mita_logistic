<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Logistics Company</title>
  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      font-family: Arial, sans-serif;
      line-height: 1.6;
      background: #f4f4f4;
      color: #333;
    }

    header {
      background: #0f62fe;
      color: white;
      padding: 20px 40px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    header h1 {
      font-size: 24px;
    }

    nav a {
      color: white;
      margin-left: 20px;
      text-decoration: none;
      font-weight: bold;
    }

    .hero {
      background: url('https://images.unsplash.com/photo-1566577138408-4816b8c63b6f') no-repeat center center/cover;
      height: 400px;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
      color: white;
      padding: 20px;
    }

    .hero h2 {
      font-size: 48px;
      text-shadow: 2px 2px 4px #000;
    }

    .section {
      padding: 40px 20px;
      max-width: 1100px;
      margin: auto;
    }

    .features {
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
      margin-top: 20px;
    }

    .feature-box {
      background: white;
      padding: 20px;
      flex: 1;
      min-width: 250px;
      border-radius: 8px;
      box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    }

    form {
      background: white;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 2px 5px rgba(0,0,0,0.1);
      max-width: 600px;
      margin: 40px auto;
    }

    form input, form button {
      display: block;
      width: 100%;
      padding: 12px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 6px;
    }

    form button {
      background: #0f62fe;
      color: white;
      border: none;
      cursor: pointer;
    }

    .track {
      text-align: center;
      margin-top: 60px;
    }

    .track input {
      width: 300px;
      padding: 12px;
      margin-top: 10px;
    }

    footer {
      background: #222;
      color: white;
      text-align: center;
      padding: 20px;
      margin-top: 40px;
    }

    @media (max-width: 768px) {
      .hero h2 {
        font-size: 32px;
      }

      .track input {
        width: 90%;
      }
    }
  </style>
</head>
<body>

<header>
  <h1>FastTrack Logistics</h1>
  <nav>
    <a href="#">Home</a>
    <a href="#">Track</a>
    <a href="#">Quote</a>
    @if(Auth::check())
    <a href="{{ route('logout') }}">Logout</a>
  @else
    <a href="{{ route('login.form') }}">Login</a>
  @endif
</nav>  
</header>

<section class="hero">
  <h2>Delivering Speed & Reliability</h2>
</section>

<section class="section">
  <h3>Why Choose Us</h3>
  <div class="features">
    <div class="feature-box">
      <h4>Fast Delivery</h4>
      <p>We ensure quick and safe delivery to all destinations.</p>
    </div>
    <div class="feature-box">
      <h4>Real-Time Tracking</h4>
      <p>Know where your package is at every step of the journey.</p>
    </div>
    <div class="feature-box">
      <h4>Affordable Rates</h4>
      <p>Top-notch services with prices that won't break the bank.</p>
    </div>
  </div>
</section>

<section class="section">
  <h3>Get a Quote</h3>
  <form>
    <input type="text" placeholder="Pickup Location" required>
    <input type="text" placeholder="Destination" required>
    <input type="number" placeholder="Weight (kg)" required>
    <button type="submit">Generate Quote</button>
  </form>
</section>

<section class="section track">
  <h3>Track Your Shipment</h3>
  <input type="text" placeholder="Enter Tracking Number">
  <button>Track</button>
</section>

<footer>
  &copy; 2025 FastTrack Logistics. All rights reserved.
</footer>

</body>
</html>

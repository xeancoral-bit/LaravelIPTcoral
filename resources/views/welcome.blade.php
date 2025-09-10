<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Nunito', sans-serif;
            background-color: #f8f9fa;
        }
        .hero {
            background: url('https://picsum.photos/1600/600?blur=3') center/cover no-repeat;
            height: 80vh;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-shadow: 1px 1px 4px rgba(0,0,0,0.7);
        }
        .hero h1 {
            font-size: 3rem;
            font-weight: bold;
        }
        .hero p {
            font-size: 1.25rem;
        }
    </style>
</head>
<body class="antialiased">

   <!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
  <a class="navbar-brand font-weight-bold" href="/">Xean's Life!</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" 
          data-target="#navbarNav" aria-controls="navbarNav" 
          aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
          <li class="nav-item active"><a class="nav-link" href="/">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="/about">About Us</a></li>
          <li class="nav-item"><a class="nav-link" href="/contact">Contact</a></li>
          <li class="nav-item"><a class="nav-link" href="/moreinfo">More Info</a></li>
      </ul>
  </div>
</nav>

    </nav>

    <!-- Hero Section -->
    <div class="hero">
        <div class="text-center">
            <h1>Welcome to the Xean Life!</h1>
            <p></p>
            <a href="/about" class="btn btn-primary btn-lg mt-3">About Us</a>
        </div>
    </div>

    <!-- Custom Section -->
    <div id="routers" class="text-center p-4">
        <div style="color: #c04949ff; font-size: 20px;"> 
            Welcome to Xean!
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

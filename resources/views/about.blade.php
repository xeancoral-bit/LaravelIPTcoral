<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Xean's Life! </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Background Gradient */
        body {
            background: linear-gradient(to right, #74ebd5, #ACB6E5);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        /* Content Box */
        .about-section {
            background: #ffffff;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0px 8px 20px rgba(0, 0, 0, 0.1);
            margin-top: 50px;
            margin-bottom: 50px;
        }

        /* Heading Style */
        .about-section h1 {
            font-weight: bold;
            color: #333;
        }

        /* Paragraph Style */
        .about-section p {
            color: #555;
            line-height: 1.7;
        }

        /* Footer */
        footer {
            background: rgba(255, 255, 255, 0.9);
            border-top: 1px solid #ddd;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
        <a class="navbar-brand font-weight-bold" href="/">Xean</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                <li class="nav-item active"><a class="nav-link" href="/about">About Us</a></li>
                <li class="nav-item"><a class="nav-link" href="/contact">Contact</a></li>
                <li class="nav-item"><a class="nav-link" href="/info">More Info</a></li>
            </ul>
        </div>
    </nav>

    <!-- About Section -->
    <div class="container">
        <div class="about-section">
            <h1 class="text-center mb-4">About My Life as an IT Student</h1>
            <p class="lead text-center">
                Being an IT student is not easy. It is a mix of late nights, endless problems, and small victories that keep me going.  
            </p>
            <p>
                There are days when I feel tired because of long hours in front of the computer. 
                I spend time fixing errors that never seem to end. Sometimes, I question myself if I am good enough for this course. 
                The pressure of deadlines, projects, and exams can be heavy, and it makes me feel overwhelmed.  
            </p>
            <p>
                But in those struggles, I also learn important lessons. I learn patience when I debug codes again and again. 
                I learn determination when I try to finish a project even if I fail many times. 
                I learn that asking for help is not weakness, but a way to grow with others.  
            </p>
            <p>
                Life as an IT student is not perfect, but it is meaningful. Every error fixed and every project finished 
                reminds me why I chose this path. It is not only about computers, but also about discipline, hard work, and hope for the future.  
            </p>
            <p>
                My journey in IT is filled with struggles, but these struggles shape me into becoming stronger, wiser, and ready for the challenges ahead.  
            </p>
        </div>
    </div>

    <footer class="text-center py-3">
        <small>&copy; {{ date('Y') }} Xean. All Rights Reserved.</small>
    </footer>
</body>
</html>

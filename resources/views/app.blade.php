<?php
$currentUrl = $_SERVER['REQUEST_URI'];
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
    <a class="navbar-brand font-weight-bold" href="/">Xean</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" 
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item <?php echo $currentUrl == '/' ? 'active' : ''; ?>">
                <a class="nav-link" href="/">Home</a>
            </li>
            <li class="nav-item <?php echo $currentUrl == '/about' ? 'active' : ''; ?>">
                <a class="nav-link" href="/about">About Us</a>
            </li>
            <li class="nav-item <?php echo $currentUrl == '/contact' ? 'active' : ''; ?>">
                <a class="nav-link" href="/contact">Contact</a>
            </li>
            <li class="nav-item <?php echo $currentUrl == '/info' ? 'active' : ''; ?>">
                <a class="nav-link" href="/info">More Info</a>
            </li>
        </ul>
    </div>
</nav>

<!-- navbar.php -->
<nav class="navbar navbar-expand-lg custom-navbar" id="navbar">
    <a class="navbar-brand" href="#">BAIHAQI OYO</a>
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link" href="home.php">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="CheckPrice.php">Price Check</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="logout.php">Logout</a>
        </li>
    </ul>
</nav>

<!-- Add this CSS for consistent styling -->
<style>
    #navbar {
        background-color: #ffafcc;
    }

    .custom-navbar {
        background: rgba(255, 255, 255, 0.2); 
        backdrop-filter: blur(10px);
        border-bottom: 1px solid rgba(255, 255, 255, 0.3);
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    .navbar-brand {
        font-weight: bold;
        font-size: 1.8rem;
        background: -webkit-linear-gradient(45deg, #ff6f61, #d84315);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .navbar-nav .nav-link {
        font-size: 1.1rem;
        font-weight: 500;
        text-transform: uppercase;
        color: white;
    }

    .navbar-nav .nav-link:hover {
        color: #ff6f61;
        background-color: rgba(255, 255, 255, 0.1);
        border-radius: 5px;
        padding: 5px 15px;
    }
</style>

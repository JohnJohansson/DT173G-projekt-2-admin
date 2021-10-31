<!-- Hamburger menu -->
<nav class="hamburger-wrapper">
    <div class="toggle" onclick="toggle()">
        <i class="fa fa-bars"></i>
        <div id="hamburgerMenuID" class="hamburgerMenu">
            <li><a href="index.php">Hem</a></li>
            <li><a href="login.php">Login</a></li>
            <li><a href="logout.php">logout</a></li>
            <li><a href="#">Kontakt</a></li>
        </div>
</nav>
<!-- hamburger wrapper end -->
<!-- wrapper for main menu and logo -->
<div class="header-wrapper">
    <div class="logo">
        <a href="index.html">Logga</a>
    </div>
    <!-- the main menu -->
    <nav>
        <div class="main-menu">
            <ul>
                <li><a href="index.php">Hem</a></li>
                <li><a href="#">Om mig</a></li>
                <?php if (!isset($_SESSION['loggedin'])) : ?>
                    <li><a href="login.php">Login</a></li>
                <?php endif; ?>
                <?php if (isset($_SESSION['loggedin'])) : ?>
                    <li><a href="logout.php">logout</a></li>

                <?php endif; ?>
            </ul>
        </div>

    </nav>
</div>
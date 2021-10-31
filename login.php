<?php
$page_title = "login";
include("includes/header.php");
?>
<div class="main">
    <div class="content">
        <h2>Mina kurser</h2>
        <!-- form action sends us to the authenticate.php -->
        <?php if (!isset($_SESSION['loggedin'])) : ?>
            <form action="autchenticate.php" method="post">
                <h3 class="text-center">login</h3>

                <label for="usernames">Username</label>
                <input type="text" name="username" id="usernames" value="" class="">

                <label for="passwords">Password</label>
                <input type="password" name="password" id="passwords" value="" class="">

                <button type="submit" name="login-btn" class="btn btn-big"> Login</button>
            </form>
        <?php endif; ?>
    </div>
</div>
<!-- main end -->
<?php include("includes/sidebar.php"); ?>
<?php
include("includes/footer.php");
?>
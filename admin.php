<?php


//checks if the session is a admin or not
$session = new session();
$session->checkLoged();
$page_title = "Admin";

include("includes/header.php");
?>
<!------------------------- ADMIN-------------------------------------------------- -->
<h1 style="font-weight: bolder;">ADMIN</h1>
<!------------------------DASHBORD-------------------------->
<h2>Admin</h2>

<div class="wrapper">

    <div class="admin">

        <?php include("includes/messages.php") ?>



    </div>

</div>

<?php
include("includes/footer.php");
?>
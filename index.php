<?php include("includes/header.php");
$session = new session();
$session->checkLoged();
?>

<div class="line">

</div>
<div class="main">
        <div class="content">
            <h2>My apis</h2>
            <!-- a table for api -->
            <table>
                <thead>
                    <tr>
                        <th>value 1</th>
                        <th>Value 2</th>
                        <th>Value 3</th>
                        <th>Value 4</th>
                        <th>update</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <!-- print my api -->
                <tbody id="print">

                </tbody>
            </table>

            <!-- a table for api -->
            <table>
                <thead>
                    <tr>
                        <th>value 1</th>
                        <th>Value 2</th>
                        <th>Value 3</th>
                        <th>Value 4</th>
                        <th>update</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <!-- print my api -->
                <tbody id="print2">

                </tbody>
            </table>
            <!-- a table for api -->
            <table>
                <thead>
                    <tr>
                        <th>value 1</th>
                        <th>Value 2</th>
                        <th>Value 3</th>
                        <th>Value 4</th>
                        <th>update</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <!-- print my api -->
                <tbody id="print3">

                </tbody>
            </table>
        </div>
    </div>
    <!-- main end -->

<?php include("includes/sidebar.php"); ?>

<!-- clears the flot of the sidbar -->
<div class="clear"></div>

<?php include("includes/footer.php"); ?>
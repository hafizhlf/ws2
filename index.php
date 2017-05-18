<!DOCTYPE html>
<html>
    <?php
        include_once ("view/head.php");
    ?>

    <body class="fixed-left">

        <?php
            include_once ("control/function.php");
            if(logged()){
                $user = getUser($_SESSION['username'], $conn);
            } else {
                header("Location: login.php");
            }
            include_once ("control/helper.php");
        ?>

        <!-- Begin page -->
        <div id="wrapper">

            <?php
                include_once ("view/header.php");
            ?>

            <?php
                if (!isset($_GET['page'])){
                    $page ="";
                } else {
                    $page = $_GET['page'];
                }
                include_once ("view/Lsidebar.php");
            ?>

            <?php
                include_once (getPage($page));
            ?>

            <?php
                include_once ("view/Rsidebar.php");
            ?>

        </div>
        <!-- END wrapper -->

        <?php
            include_once ("view/script.php");
        ?>

    </body>
</html>
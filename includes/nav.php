<?php require_once "includes/db.php" ?>;

<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="./index.php">Simple CMS</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <?php
                $query = "select * from categories";
                $result = mysqli_query($conn, $query);
                while ($row = mysqli_fetch_assoc($result)) {
                    $cat_id =  $row['cat_id'];
                    $cat_title = $row['cat_title'];
                    echo " <li>
                        <a href='category.php?category={$cat_id};'>{$cat_title}</a>
                        </li>";
                }
                ?>
                <li> <a href="admin/login.php">Admin </li>
            </ul>
        </div>
    </div>
</nav>
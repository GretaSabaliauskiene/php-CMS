 <?php require_once "includes/header.php" ?>;
 <?php require_once "includes/nav.php" ?>;

 <div class="container">
     <div class="row">
         <div class="col-md-8">
             <?php
                $query = "select * from posts";
                $data = mysqli_query($conn, $query);
                while ($row = mysqli_fetch_assoc($data)) {
                    $post_title = $row['post_title'];
                    $post_author = $row['post_author'];
                    $post_date = $row['post_date'];
                    $post_image = $row['post_image'];
                    $post_content = $row['post_content'];
                ?>
                 <h2>
                     <?php echo $post_title ?>
                 </h2>
                 <p class="lead">
                     by <a><?php echo $post_author ?></a>
                 </p>
                 <p><span class="glyphicon glyphicon-time"></span> Posted on <?php echo $post_date ?></p>
                 <hr>
                 <img class="img-responsive" src="images/<?php echo $post_image ?>" alt="">
                 <hr>
                 <p><?php echo $post_content ?></p>
                 <hr>
             <?php
                }
                ?>
         </div>
         <hr>
         <?php require_once "includes/footer.php" ?>;
     </div>
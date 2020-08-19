<?php require_once ('./admin_includes/header.php');?>
<?php require_once ('./admin_includes/nav.php')?>;

<?php 
    if(isset($_POST['btn_add_post'])){
        $Post_Title = $_POST['post_title'];
        $Post_Cat_id = $_POST['post_cat_id'];
        $Post_Author = $_POST['post_author'];
        $Post_Status = $_POST['post_status'];
        $Post_Image = $_FILES['image']['name'];
        $Post_Temp = $_FILES['image']['tmp_name'];
        $Post_Tags = $_POST['post_tags'];
        $Post_Content = $_POST['post_content'];
       
        $Post_Comment = 4;


        $sql = "insert into posts (post_cat_id,post_title,post_author,post_date,post_image,post_content,post_tags,post_comment_count,post_status)
        values('$Post_Cat_id','$Post_Title','$Post_Author',now(),'$Post_Image','$Post_Content','$Post_Tags','$Post_Comment','$Post_Status')";
        $result = mysqli_query($conn,$sql);
        if($result){
            echo "Post Is Published!";
            move_uploaded_file($Post_Temp, "../images/$Post_Image"); 
        }

    }

?>

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg">
                    <form action="" method="POST" enctype="multipart/form-data">
                           <div class="form-group">
                           <label>Post Title</label>
                            <input type="text" name="post_title" placeholder="Post Title" class="form-control mb-2">
                           </div>
                           <div class="form-group">
                           <label>Post Category ID</label>
                            <input type="text" name="post_cat_id" placeholder="Post Category ID" class="form-control mb-2">
                           </div>
                           <div class="form-group">
                           <label>Post Author</label>
                            <input type="text" name="post_author" placeholder="Post Author" class="form-control mb-2">
                           </div>
                           <div class="form-group">
                           <label>Post Image</label>
                            <input type="file" name="image" placeholder="Image" class="form-control mb-2">
                           </div>
                           <div class="form-group">
                           <label>Post Status</label>
                            <input type="text" name="post_status" placeholder="Post Status" class="form-control mb-2">
                           </div>
                           <div class="form-group">
                           <label>Post Tags</label>
                            <input type="text" name="post_tags" placeholder="Post Tags" class="form-control mb-2">
                           </div>
                           <label>Post Content</label>
                           <textarea name="post_content" class="form-control" id="" cols="30" rows="10"></textarea>
                           </div>
                           <div class="form-group">
                           <button class="btn btn-success" type="submit" name="btn_add_post">Add Category</button>
                           </div>
                        </form>

               
                    </div>
  
       </div>
            </div>
        <!-- /#page-wrapper -->

                <?php require_once ('./admin_includes/footer.php')?>;

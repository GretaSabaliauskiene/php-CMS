<?php require_once ('./admin_includes/header.php');?>
<?php require_once ('./admin_includes/nav.php')?>;

    <?php
    
    if(isset($_GET['p_id'])){
        $Post_ID = $_GET['p_id'];
        $sql = "select * from posts where post_id='$Post_ID'";
        $result = mysqli_query($conn,$sql);

        while($row = mysqli_fetch_assoc($result)){
            $post_id = $row['post_id'];
            $post_author = $row['post_author'];
            $post_title = $row['post_title']; 
            $post_cat_id = $row['post_cat_id'];
            $image = $row['post_image'];
            $post_author = $row['post_author'];
            $post_content = $row['post_content'];
        }
    }
    if(isset($_POST['btn_edit_post'])){
        $Post_Title = $_POST['post_title'];
        $Post_Cat_id = $_POST['cat_name'];
        $Post_Author = $_POST['post_author'];
        $Post_Image = $_FILES['image']['name'];
        $Post_Temp = $_FILES['image']['tmp_name'];
        $Post_Content = $_POST['post_content'];

        if(empty($Post_Image)){
            $query = "select * from posts where post_id='$Post_ID'";
            $result = mysqli_query($conn,$query);

            while($row = mysqli_fetch_assoc($result)){
                $Post_Image = $row['post_img'];
            }
        }

        $sql = " update posts set post_cat_id='$Post_Cat_id', post_title='$Post_Title', post_author='$Post_Author', 
        post_date=now(), post_image='$Post_Image', post_content='$Post_Content' where post_id='$Post_ID'";

        $result = mysqli_query($conn,$sql);
        if($result){
            header("location: ./posts.php");
            move_uploaded_file($Post_Temp,"../images/$Post_Image");

        }
    }
    
    ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg">
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                   <label>Post Title</label>
                       <input type="text" name="post_title" placeholder="Post Title" class="form-control pb-4" value="<?php echo $post_title?>">
                </div>
                <div class="form-group">
                    <select name="cat_name" id="" class="form-control" >
                        <?php 
                        $query = "select * from categories";
                        $data = mysqli_query($conn,$query);

                        while($row = mysqli_fetch_assoc($data)){
                            $cat_id = $row['post_cat_id'];
                            ?>
                               <option value="<?php echo $row['cat_id']; ?>"> <?php echo $row['cat_title'] ?></option> 
                            <?php
                            
                        }
                            ?>
                        }
                        
                       
                    </select>
                </div>
                <div class="form-group">
                    <label>Post Author</label>
                    <input type="text" name="post_author" placeholder="Post Author" class="form-control pb-4" value="<?php echo $post_author?>">
                </div>
                <div class="form-group">
                    <label>Post Image</label>
                    <input type="file" name="image" placeholder="Image" class="form-control pb-4" value="<?php echo $image; ?>">
                    <<img width="180" height="150" class="img-responsive" src="../images/<?php echo $image; ?>">
                </div>
                    <label>Post Content</label>
                    <textarea name="post_content" class="form-control" id="" cols="30" rows="10"><?php echo $post_content?>"</textarea>
                </div>
                <div class="form-group">
                    <button class="btn btn-success" type="submit" name="btn_edit_post">Edit Post</button>
                </div>
                </form>
             </div>
       </div>
            </div>


                <?php require_once ('./admin_includes/footer.php')?>;

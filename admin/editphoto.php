<?php include 'inc/header.php'; ?>


        <div class="grid_10">
        
            <div class="box round first grid">
                
 <?php 
    $photo = $_GET['editid'];
     if($_SERVER['REQUEST_METHOD'] == 'POST'){

            $permited  = array('jpg', 'jpeg', 'png', 'gif');
            $file_name = $_FILES['photo']['name'];
            $file_size = $_FILES['photo']['size'];
            $file_temp = $_FILES['photo']['tmp_name'];

            $div = explode('.', $file_name);
            $file_ext = strtolower(end($div));
            $unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
            $uploaded_image = "img/Images/".$unique_image;

            if($file_name == "" ){
                echo "<span class='error'>Field Must Not be empty !</span>";
            }elseif ($file_size >1048567) {
                 echo "<span class='error'>Image Size should be less then 1MB!
                 </span>";
                } elseif (in_array($file_ext, $permited) === false) {
                 echo "<span class='error'>You can upload only:-".implode(', ', $permited)."</span>";
                } else{
                move_uploaded_file($file_temp, $uploaded_image);
                $query = "replace INTO photo_gallary(id, photo) VALUES('$photo', '$uploaded_image')";
                $inserted_rows = $db->insert($query);
                if ($inserted_rows) {
                 echo "<span class='success'>Photo Inserted Successfully.
                 </span>";
                }else {
                 echo "<span class='error'>Photo Not Inserted !</span>";
                }

            }

        }
 ?>               
        <div class="block">               
         <form action="" method="post" enctype="multipart/form-data">
            <table class="form">
                    <?php 
                        $query = "select * from photo_gallary where id='$photo'";
                        $photo = $db->select($query);
                        if ($photo) {
                            $result = $photo->fetch_assoc();
                        
                    ?>
                    <tr>
                        <td></td>
                        <td><img style="width: 200px; height: 200px;" src="<?php echo $result['photo']; ?>" alt=""></td>
                    </tr>
                    

                    <?php } ?>

                <tr>
                    <td>
                        <label>Upload Image</label>
                    </td>
                    <td>
                        <input type="file" name = "photo" />
                    </td>
                </tr>
                
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" name="submit" Value="Save" />
                    </td>
                </tr>
            </table>
            </form>
        </div>
    </div>
</div>
    <!-- Load TinyMCE -->
<script src="js/tiny-mce/jquery.tinymce.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function () {
        setupTinyMCE();
        setDatePicker('date-picker');
        $('input[type="checkbox"]').fancybutton();
        $('input[type="radio"]').fancybutton();
    });
</script>
<!-- Load TinyMCE -->

 <?php include 'inc/footer.php'; ?>

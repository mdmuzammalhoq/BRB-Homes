<?php include 'inc/header.php'; ?>


        <div class="grid_10">
        
            <div class="box round first grid">
                <h2>Edit Downloads</h2>
 <?php 
        $id = $_GET['did'];
     if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $name = mysqli_real_escape_string($db->link, $_POST['name']);

            $permited  = array('jpg', 'jpeg', 'png', 'gif');
            $file_name = $_FILES['image']['name'];
            $file_size = $_FILES['image']['size'];
            $file_temp = $_FILES['image']['tmp_name'];

            $div = explode('.', $file_name);
            $file_ext = strtolower(end($div));
            $unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
            $uploaded_image = "img/images/".$unique_image;

            if($name == "" || $file_name == "" ){
                echo "<span class='error'>Field Must Not be empty !</span>";
            }elseif ($file_size >1048567) {
                 echo "<span class='error'>Image Size should be less then 1MB!
                 </span>";
                } elseif (in_array($file_ext, $permited) === false) {
                 echo "<span class='error'>You can upload only:-".implode(', ', $permited)."</span>";
                } else{
                move_uploaded_file($file_temp, $uploaded_image);
                $query = "INSERT INTO downloads(name, image) VALUES('$name', '$uploaded_image')";
                $inserted_rows = $db->insert($query);
                if ($inserted_rows) {
                 echo "<span class='success'>Slider Inserted Successfully.
                 </span>";
                }else {
                 echo "<span class='error'>Slider Not Inserted !</span>";
                }

            }

        }
 ?>               
        <div class="block">               
         <form action="editdownloads.php" method="post" enctype="multipart/form-data">
            <table class="form">
             <?php 
                $query = "select * from downloads where id='$id'";
                $dld = $db->select($query);
                if ($dld) {
                    while ($result = $dld->fetch_assoc()) {
                       
             ?>  
                <tr>
                    <td>
                        <label>Downloads Title</label>
                    </td>
                    <td>
                        <input type="text" name ="name" value="<?php echo $result['name']; ?>" class="medium" />
                    </td>
                </tr>
             
                
                    <tr>
                    <td></td>
                    <td><img style="width: 200px; height: 200px;" src="<?php echo $result['image']; ?>" alt=""></td>
                    </tr>
                <tr>

                    <td>
                        <label>Upload Image</label>
                    </td>
                    <td>
                        <input type="file" name = "image" />
                    </td>
                </tr>
                
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" name="submit" Value="Save" />
                    </td>
                </tr>
                <?php } } ?>
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

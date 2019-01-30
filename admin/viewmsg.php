<?php include 'inc/header.php'; ?>

<?php 
    if(!isset($_GET['msgid']) || $_GET['msgid'] == NULL){
        echo "<script>window.location = 'booking.php'; </script>";
    }else{
        $id = $_GET['msgid'];
    }
?>
        <div class="grid_10">
        
            <div class="box round first grid">
                <h2>View Messages</h2>
 <?php 
     if($_SERVER['REQUEST_METHOD'] == 'POST'){
        echo "<script>window.location = 'booking.php'; </script>";
     }
 ?>               
                <div class="block">               
                 <form action=" " method="post" >
                 <?php 
                            $query = "select * from online_booking where id='$id' ";
                            $msg = $db->select($query);
                            if($msg){
             
                                while($result= $msg-> fetch_assoc()){

                            
                ?>
                    <table class="form">
                       
                        <tr>
                            <td>
                                <label>Project Name</label>
                            </td>
                            <td>
                                <input type="text" readonly value="<?php echo $result['pro_name'];?>" class="medium" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Project Address</label>
                            </td>
                            <td>
                                <input type="text" readonly value="<?php echo $result['pro_addr'];?>" class="medium" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Applicant Name</label>
                            </td>
                            <td>
                                <input type="text" readonly value="<?php echo $result['applicant_name'];?>" class="medium" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Father's Name</label>
                            </td>
                            <td>
                                <input type="text" readonly value="<?php echo $result['father_name'];?>" class="medium" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Occupation</label>
                            </td>
                            <td>
                                <input type="text" readonly value="<?php echo $result['occupation'];?>" class="medium" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Email</label>
                            </td>
                            <td>
                                <input type="text" readonly value="<?php echo $result['email'];?>" class="medium" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Choice Appartment</label>
                            </td>
                            <td>
                                <textarea name="" id="" cols="30" rows="10"><?php echo $result['choice_appartment'];?></textarea>
                            </td>
                        </tr>

                        <tr>
                            <td></td>
                            <td>
                                <input type="submit" name="submit" Value="Ok" />
                            </td>
                        </tr>
                    </table>
                    <?php } } ?>
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

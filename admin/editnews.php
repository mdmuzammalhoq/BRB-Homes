<?php include 'inc/header.php'; ?>
<?php 
    if(!isset($_GET['editid']) || $_GET['editid'] == NULL){
        
    }else{
        $id = $_GET['editid'];
    }
?>
        
        <div class="grid_10">
            <div class="box round first grid">
                <h2>Update Upcomming</h2>
 <?php 
     if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $category_id= $_POST['category_id'];
        $news_title= $_POST['news_title'];
        $news_details= $_POST['news_details'];
        $add_date= $_POST['add_date'];

        $category_id = mysqli_real_escape_string($db->link, $category_id);
        $news_title = mysqli_real_escape_string($db->link, $news_title);
        $news_details = mysqli_real_escape_string($db->link, $news_details);
        $add_date = mysqli_real_escape_string($db->link, $add_date);


            if($category_id == "" || $news_title == "" || $news_details == "" || $add_date == "" ){
                echo "<span class='error'>Field Must Not be empty !</span>";
            }elseif(empty($category_id)){
                echo "<span class='error'>Field Must not be empty !</span>";
            }elseif(empty($news_title)){
                echo "<span class='error'>Field Must not be empty !</span>";
            }elseif(empty($news_details)){
                echo "<span class='error'>Field Must not be empty !</span>";
            }elseif(empty($add_date)){
                echo "<span class='error'>Field Must not be empty !</span>";
            }else{
            
                $query = "UPDATE brb_news_events 
                    SET
                    category_id         = '$category_id',
                    news_title   = '$news_title',
                    news_details       = '$news_details',
                    add_date     = '$add_date'
                WHERE 
                news_id='$id'";

                $updated_rows = $db->update($query);
                if ($updated_rows) {
                 echo "<span class='success'>Data Updated Successfully.
                 </span>";
                }else {
                 echo "<span class='error'>Data Not Updated !</span>";
                }

            }

        }

    

    
 ?>               
        <div class="block">
        <?php 
            $query = "select * from brb_news_events where news_id='$id'";
            $getproduct = $db->select($query);
            if($getproduct){
                $result = $getproduct->fetch_assoc();

        ?>               
         <form action=" " method="post" enctype="multipart/form-data">
            <table class="form">                    
    <tr><td>Category ID:</td>
        <td>
           <input type="text" name="category_id"  class="medium"  value="<?php echo $result['category_id'];?>"/>
        </td>
    </tr>
    <tr><td>News Title:</td>
        <td>
            <input type="text" name="news_title"  class="medium" value="<?php echo $result['news_title'];?>"/>
        </td>
    </tr>
    <tr><td>Date:</td>
        <td>
            <input type="text" name="add_date"  class="medium" value="<?php echo $result['add_date'];?>"/>
        </td>
    </tr>
    <tr><td>News Detail:</td>
        <td>
            <textarea class="medium" class="tinymce" name="news_details">value="<?php echo $result['news_details'];?>"</textarea>
        </td>
    </tr>
    
    <tr> 
        <td>
            <input type="submit" name="submit" Value="Save" />
        </td>
    </tr>
</table>
            </form>
         <?php } ?>   
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

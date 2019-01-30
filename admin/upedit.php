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
        $name = mysqli_real_escape_string($db->link, $_POST['name']);
        $p_location = mysqli_real_escape_string($db->link, $_POST['p_location']);
        $l_area = mysqli_real_escape_string($db->link, $_POST['l_area']);
        $b_soried = mysqli_real_escape_string($db->link, $_POST['b_soried']);
        $units = mysqli_real_escape_string($db->link, $_POST['units']);
        $total_flat = mysqli_real_escape_string($db->link, $_POST['total_flat']);
        $total_car_parking = mysqli_real_escape_string($db->link, $_POST['total_car_parking']);
        $a_size = mysqli_real_escape_string($db->link, $_POST['a_size']);
        $h_date = mysqli_real_escape_string($db->link, $_POST['h_date']);

            if($name == "" || $p_location == "" || $l_area == "" || $b_soried == "" || $units == "" || $total_flat == "" || $total_car_parking == "" || $a_size == "" || $h_date == "" ){
                echo "<span class='error'>Field Must Not be empty !</span>";
            }elseif(empty($name)){
        $msg = "<span style='color:red;'>Name field Must not be empty !!</span>";
    }elseif(empty($p_location)){
        $msg = "<span style='color:red;'>Name field Must not be empty !!</span>";
    }elseif(empty($l_area)){
        $msg = "<span style='color:red;'>Name field Must not be empty !!</span>";
    }elseif(empty($b_soried)){
        $msg = "<span style='color:red;'>Name field Must not be empty !!</span>";
    }elseif(empty($units)){
        $msg = "<span style='color:red;'>Name field Must not be empty !!</span>";
    }elseif(empty($total_flat)){
        $msg = "<span style='color:red;'>Name field Must not be empty !!</span>";
    }elseif(empty($total_car_parking)){
        $msg = "<span style='color:red;'>Name field Must not be empty !!</span>";
    }elseif(empty($a_size)){
        $msg = "<span style='color:red;'>Name field Must not be empty !!</span>";
    } else{
            
                $query = "UPDATE brb_upcomming 
                    SET
                    name         = '$name',
                    p_location   = '$p_location',
                    l_area       = '$l_area',
                    b_soried     = '$b_soried',
                    units        = '$units',
                    total_flat   = '$total_flat',
                    total_car_parking   = '$total_car_parking',
                    a_size   = '$a_size',
                    h_date   = '$h_date'
                WHERE 
                id='$id'";

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
            $query = "select * from brb_upcomming where id='$id'";
            $getproduct = $db->select($query);
            if($getproduct){
                $result = $getproduct->fetch_assoc();

        ?>               
         <form action=" " method="post" enctype="multipart/form-data">
            <table class="form">
               
            <tr>
                    <td>
                        <label>Project Name:</label>
                    </td>
                    <td>
                        <input type="text" name ="name" placeholder="Enter Project Name here..." class="medium" value="<?php echo $result['name']; ?>" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Project Location:</label>
                    </td>
                    <td>
                        <input type="text" name ="p_location" placeholder="Enter Project Location..." class="medium" value="<?php echo $result['p_location']; ?>"/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Land Area:</label>
                    </td>
                    <td>
                        <input type="text" name ="l_area" placeholder="Enter Land Area..." class="medium" value="<?php echo $result['l_area']; ?>"/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Building Storied:</label>
                    </td>
                    <td>
                        <input type="text" name ="b_soried" placeholder="Enter Storied..." class="medium" value="<?php echo $result['b_soried']; ?>"/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Units:</label>
                    </td>
                    <td>
                        <input type="text" name ="units" placeholder="Enter Units..." class="medium" value="<?php echo $result['units']; ?>"/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Total no. of Flats:</label>
                    </td>
                    <td>
                        <input type="text" name ="total_flat" placeholder="Enter number of flats..." class="medium" value="<?php echo $result['total_flat']; ?>"/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Total no. of Car parking:</label>
                    </td>
                    <td>
                        <input type="text" name ="total_car_parking" placeholder="Enter number... " class="medium" value="<?php echo $result['total_car_parking']; ?>"/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Apartments size:</label>
                    </td>
                    <td>
                        <input type="text" name ="a_size" placeholder="Enter size Title..." class="medium" value="<?php echo $result['a_size']; ?>"/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Handover Date:</label>
                    </td>
                    <td>
                        <input type="text" name ="h_date" placeholder="Enter date here..." class="medium" value="<?php echo $result['h_date']; ?>"/>
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

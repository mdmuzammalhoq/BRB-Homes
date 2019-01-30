<?php include 'inc/header.php'; ?>

        <div class="grid_10">
		
            <div class="box round first grid">
                <h2> HandOvered Projects</h2>
<?php 
	$success = "";
if ($_SERVER['REQUEST_METHOD'] == "POST") {
	$name = mysqli_real_escape_string($db->link, $_POST['name']);
	$p_location = mysqli_real_escape_string($db->link, $_POST['p_location']);
	$l_area = mysqli_real_escape_string($db->link, $_POST['l_area']);
	$b_soried = mysqli_real_escape_string($db->link, $_POST['b_soried']);
	$units = mysqli_real_escape_string($db->link, $_POST['units']);
	$total_flat = mysqli_real_escape_string($db->link, $_POST['total_flat']);
	$total_car_parking = mysqli_real_escape_string($db->link, $_POST['total_car_parking']);
	$a_size = mysqli_real_escape_string($db->link, $_POST['a_size']);
	$h_date = mysqli_real_escape_string($db->link, $_POST['h_date']);


	if($name == "" || $p_location == "" || $l_area == "" || $b_soried == "" || $units == "" || $total_flat == "" || $total_car_parking == "" || $a_size == "" || $h_date == ""  ){
                echo "<span class='error'>Field Must Not be empty !</span>";
            }elseif(empty($name)){
        $msg = "<span style='color:red;'>field Must not be empty !!</span>";
    }elseif(empty($p_location)){
        $msg = "<span style='color:red;'>field Must not be empty !!</span>";
    }elseif(empty($l_area)){
        $msg = "<span style='color:red;'>field Must not be empty !!</span>";
    }elseif(empty($b_soried)){
        $msg = "<span style='color:red;'>field Must not be empty !!</span>";
    }elseif(empty($units)){
        $msg = "<span style='color:red;'> field Must not be empty !!</span>";
    }elseif(empty($total_flat)){
        $msg = "<span style='color:red;'> field Must not be empty !!</span>";
    }elseif(empty($total_car_parking)){
        $msg = "<span style='color:red;'> field Must not be empty !!</span>";
    }elseif(empty($a_size)){
        $msg = "<span style='color:red;'> field Must not be empty !!</span>";
    } else{
             
                $query = "INSERT INTO handovered(name, p_location, l_area, b_soried, units, total_flat, total_car_parking, a_size, h_date) VALUES('$name', '$p_location', '$l_area', '$b_soried', '$units', '$total_flat', '$total_car_parking', '$a_size', '$h_date')";
                $inserted_rows = $db->insert($query);
                if ($inserted_rows) {
                 $success = "Data Inserted Successfully.";
                }else {
                 echo "<span class='error'>Data Not Inserted !</span>";
                }

            }
}

?>




 <div class="block">               
         <form action="" method="post" enctype="multipart/form-data">
         <?php echo $success; ?>
            <table class="form">
               
                <tr>
                    <td>
                        <label>Project Name:</label>
                    </td>
                    <td>
                        <input type="text" name ="name" placeholder="Enter Project Name here..." class="medium" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Project Location:</label>
                    </td>
                    <td>
                        <input type="text" name ="p_location" placeholder="Enter Project Location..." class="medium" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Land Area:</label>
                    </td>
                    <td>
                        <input type="text" name ="l_area" placeholder="Enter Land Area..." class="medium" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Building Storied:</label>
                    </td>
                    <td>
                        <input type="text" name ="b_soried" placeholder="Enter Storied..." class="medium" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Units:</label>
                    </td>
                    <td>
                        <input type="text" name ="units" placeholder="Enter Units..." class="medium" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Total no. of Flats:</label>
                    </td>
                    <td>
                        <input type="text" name ="total_flat" placeholder="Enter number of flats..." class="medium" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Total no. of Car parking:</label>
                    </td>
                    <td>
                        <input type="text" name ="total_car_parking" placeholder="Enter number... " class="medium" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Apartments size:</label>
                    </td>
                    <td>
                        <input type="text" name ="a_size" placeholder="Enter size Title..." class="medium" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Handover Date:</label>
                    </td>
                    <td>
                        <input type="text" name ="h_date" placeholder="Enter date here..." class="medium" />
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
        </div>
        
<?php include 'inc/footer.php'; ?>
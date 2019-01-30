<?php 
  include 'inc/header.php'; 
  include 'inc/sidebar.php';
  include 'Format/Format.php'; 

  $fm = new Format();
?>
<?php 
      $error = "";
      $msg = "";
      if ($_SERVER['REQUEST_METHOD'] == 'POST') {
          $pro_name = $fm->validation($_POST['pro_name']);
          $pro_addr = $fm->validation($_POST['pro_addr']);
          $applicant_name = $fm->validation($_POST['applicant_name']);
          $father_name = $fm->validation($_POST['father_name']);
          $occupation = $fm->validation($_POST['occupation']);
          $email = $fm->validation($_POST['email']);
          $choice_appartment = $fm->validation($_POST['choice_appartment']);

        $pro_name = mysqli_real_escape_string($db->link, $pro_name);
        $pro_addr = mysqli_real_escape_string($db->link, $pro_addr);
        $applicant_name = mysqli_real_escape_string($db->link, $applicant_name);
        $father_name = mysqli_real_escape_string($db->link, $father_name);
        $occupation = mysqli_real_escape_string($db->link, $occupation);
        $email = mysqli_real_escape_string($db->link, $email);
        $choice_appartment = mysqli_real_escape_string($db->link, $choice_appartment);

      if(empty($pro_name)){
        $error = "Project Name Must not be empty !!";
      }elseif(empty($applicant_name)){
        $error = "Applicant Name Must not be empty !!";
      }elseif(empty($email)){
        $error = "Email field Must not be empty !!";
      }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL) ){
            $error = "Invalid Email Address !!";
      }elseif(empty($occupation)){
        $error = "Occupation Must not be empty !!";
      }else{

        $query = "INSERT INTO online_booking(pro_name, pro_addr, applicant_name, father_name, occupation, email, choice_appartment)VALUES('$pro_name', '$pro_addr', '$applicant_name', '$father_name', '$occupation', '$email',  '$choice_appartment')";
            $inserted_rows = $db->insert($query);
            if ($inserted_rows) {
              $msg = "<script>alert('Message Sent Successfully.');</script>";
            }else {
               $msg = "Message Not Sent";
            }

    }
  }

?>
</td>

<td width="708" valign="top"><table width="697" border="0" align="center" cellpadding="0" cellspacing="0">

<tr>
  <td class="body_text"><table width="690" border="0" align="left" cellpadding="0" cellspacing="0">
    <tr>
      <td><img src="images/body_head.jpg" width="697" height="14" /></td>
    </tr>
    <tr>
      <td background="images/body_bg.jpg"><table align="left" border="0" cellpadding="0" cellspacing="0" width="100%">
            
            <tbody><tr>
              <td>

              <form id="form1" name="form1" method="post" action="" onsubmit="return validation();">
                  <table class="text1" align="center" border="0" cellpadding="0" cellspacing="3" width="93%">
          <tbody>
            
            <tr height="5">
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td colspan="3" style="font-family:Arial, Helvetica, sans-serif; font-size:20px; color:#0099FF; font-weight:bold">Online Booking Form:</td>
              </tr>
            <tr>
              <td class="text">&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
              <?php echo $error; ?><?php echo $msg; ?>
            <tr>
              <td class="text" width="293">Project Name</td>
              <td width="28">:</td>
              <td width="315"><input name="pro_name" class="form" id="pname" size="35" type="text">
                  <font color="#ff0000">*</font></td>
            </tr>
            <tr>
              <td class="text">Project Address</td>
              <td>:</td>
              <td><input name="pro_addr" class="form" id="paddress" size="35" type="text"></td>
            </tr>
            <tr>
              <td class="text">Full name of the Applicant</td>
              <td>:</td>
              <td><input name="applicant_name" class="form" id="fullname" size="35" type="text">
                  <font color="#ff0000">*</font></td>
            </tr>
            <tr>
              <td class="text">Father`s Name</td>
              <td>:</td>
              <td><input name="father_name" class="form" id="fname" size="35" type="text"></td>
            </tr>
            
            <tr>
              <td class="text">Profession Occupation</td>
              <td>:</td>
              <td><input name="occupation" class="form" id="occupation" size="35" type="text">
                  <font color="#ff0000">*</font></td>
            </tr>
            
            
              <td class="text">Email Address</td>
              <td>:</td>
              <td><input name="email" class="form" id="email" size="35" type="text"><font color="#ff0000">*</font></td>
            </tr>
            
            
            <tr>
              <td class="text">Choice of Apartment<br />	 
Mode of Payment: Cash/Cheque/P.O/D.D/Foreign Remittance.								  </td>
              <td>:</td>
              <td><textarea name="choice_appartment" cols="33" rows="5" class="form" id="apartment"></textarea>
                  <font color="#ff0000">*</font></td>
            </tr>
            <tr>
              <td class="text5">&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td class="text5">&nbsp;</td>
              <td>&nbsp;</td>
              <td><input name="Submit" value="Submit" style="border: 1px solid rgb(0, 51, 153); font-size: 8pt; font-weight: bold; font-family: Verdana,Arial,Helvetica,sans-serif; color: rgb(255, 255, 255); background-color: rgb(0, 153, 204);" type="submit">
                &nbsp;&nbsp;
                </td>
            </tr>
            <tr>
              <td class="text5">&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
          </tbody>
        </table>
    </form></td>
  </tr>
</tbody></table></td>
    </tr>
    <tr>
      <td><img src="images/body_footer.jpg" width="697" height="12" /></td>
    </tr>
  </table></td>
</tr>
<tr>
  <td>&nbsp;</td>
</tr>

<tr>
  <td>
<?php include 'inc/ongoing.php'; ?>
<?php include 'inc/footer.php'; ?>
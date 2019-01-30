<?php include 'inc/header.php'; ?>
<?php include 'inc/sidebar.php'; ?>
<?php include 'Format/Format.php'; ?>
<?php 
  $fm = new Format();
?>
<?php 
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
      $name = $fm->validation($_POST['name']);
      $app_date = $fm->validation($_POST['app_date']);
      $email = $fm->validation($_POST['email']);
      $jb_pos = $fm->validation($_POST['jb_pos']);
      
      

      $name = mysqli_real_escape_string($db->link, $name);
      $app_date = mysqli_real_escape_string($db->link, $app_date);
      $email = mysqli_real_escape_string($db->link, $email);
      $jb_pos = mysqli_real_escape_string($db->link, $jb_pos);
      


      $permited  = array('docx');
      $file_name = $_FILES['image']['name'];
      $file_size = $_FILES['image']['size'];
      $file_temp = $_FILES['image']['tmp_name'];

      $div = explode('.', $file_name);
      $file_ext = strtolower(end($div));
      $unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
      $uploaded_image = "images/Photo/".$unique_image;

      if($name == "" || $app_date == "" || $email == "" || $jb_pos == "" || $file_name == "" ){
                $msg = "<span style='color:red;'>Field Must Not be empty !</span>";
            }elseif(empty($email)){
        $msg = "<span style='color:red;'>Email field Must not be empty !!</span>";
    }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL) ){
            $msg = "<span style='color:red;'>Invalid Email Address !!</span>";

          }elseif ($file_size >1048567) {
                 $msg = "Image Size should be less then 1MB!
                 ";
                } elseif (in_array($file_ext, $permited) === false) {
                 $msg = "<span style='color:red;'>You can upload only: 'docx' file </span>";
                } else{
                move_uploaded_file($file_temp, $uploaded_image);
    
      
      $query = "INSERT INTO brb_carrier(name, app_date, email, jb_pos, image) VALUES('$name', '$app_date', '$email', '$jb_pos', '$uploaded_image')";
                $inserted_rows = $db->insert($query);
                if ($inserted_rows) {
                  $msg = "<span style='color:green;'>Message Sent Successfully.</span>";
                }else {
                   $msg = "<span style='color:red;'>Message Not Sent</span>";
                }

    }
  }

  ?>

</td>
        <td width="708" valign="top"><table width="697" border="0" align="center" cellpadding="0" cellspacing="0">
          
          <tr>
            <td class="body_text"><table width="697" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td><img src="images/body_head.jpg" width="697" height="14" /></td>
                </tr>
              <tr>
                <td background="images/body_bg.jpg">
                <table width="97%" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td><img src="images/career.jpg" width="201" height="23" /></td>
          </tr>
           <tr>
             <td>&nbsp;</td>
           </tr>
           <tr>
            <td>&nbsp;</td>
          </tr>
          
          <tr id="mail">
            <td class="text_1">

              <form method="post" enctype="multipart/form-data" action="">
                <table width="100%" border="0" cellspacing="0" cellpadding="4">
                  <tr>
                    <td colspan="3">(Fields marked with asterisk <span class="color">*</span> are mandatory)</td> <?php if (isset($msg)) {
                      echo $msg;
                    } ?>
                    </tr>
                  <tr> 
                    <td colspan="3" height="8px"></td>
                    </tr>
                  <tr>
                    <td width="37%">Full Name </td>
                    <td width="2%">:</td>
                    <td width="61%"><input name="name" type="text" class="feedback_form" id="name_1" size="35" />
                      <span class="color">*</span></td>
                    </tr>
                  <tr>
                    <td>Date of Application</td>
                    <td>:</td>
                    <td><input name="app_date" type="text" class="feedback_form" placeholder="year/month/date" id="application" size="35" />
                      <span class="color">*</span></td>
                    </tr>
                  <tr>
                    <td>E-mail</td>
                    <td>:</td>
                    <td><input name="email" type="text" class="feedback_form" id="email_1" size="35"/>
                      <span class="color">*</span></td>
                    </tr>
                  <tr>
                    <td>Job Position</td>
                    <td>:</td>
                    <td><input name="jb_pos" type="text" id="position" class="feedback_form" size="20" />
                      <span class="color">*</span></td>
                    </tr>
                  <tr>
                    <td>Upload your resume</td>
                    <td>:</td>
                    <td><input type="file" name="image" /></td>
                    </tr>
                
                  
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td><input type="submit" name="submit" value="Submit" />
                      </td>
                    </tr>
                  
                  <tr>
                    <td colspan="3" height="105px"></td>
                    </tr>
                  </table>
                </form>              </td>
          </tr>
          </table>                </td>
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
            <td style="padding-left:2px;">

<?php include 'inc/ongoing.php'; ?>	
<?php include 'inc/footer.php'; ?>
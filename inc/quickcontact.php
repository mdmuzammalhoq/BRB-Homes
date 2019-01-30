<?php 
  include 'Format/Format.php'; 

  $fm = new Format();

?>
<?php
    $n = "";
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $name  = $fm->validation($_POST['name']);
      $email = $fm->validation($_POST['email']);
      $phone = $fm->validation($_POST['phone']);
      $msg   = $fm->validation($_POST['msg']);

      $name  = mysqli_real_escape_string($db->link, $name);
      $email = mysqli_real_escape_string($db->link, $email);
      $phone = mysqli_real_escape_string($db->link, $phone);
      $msg   = mysqli_real_escape_string($db->link, $msg);

      
      if(empty($name)){
        $n =  "Name Must not be empty !!";
      }elseif(empty($email)){
        $n = "Email field Must not be empty !!";
    }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $n = "Invalid Email Address !!";
    }elseif(empty($phone)){
        $n = "Phone no. Must not be empty !!";
    }elseif(empty($msg)){
        $n = "Field Must not be empty !!";
    }else{
      $query = "INSERT INTO quickcontact(name, email, phone, msg) VALUES('$name', '$email', '$phone', '$msg')";
                $inserted_rows = $db->insert($query);
                if ($inserted_rows) {
                  $n = "Message Sent Successfully.";
                }else {
                   $n = "Message Not Sent";
                }

    }

    }
?>


<tr>
            <td><table width="220" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td><img src="images/contact_head.jpg" width="220" height="35" /></td>
              </tr>
              <tr class="contact">
                <td background="images/contact_bg.jpg">
                
                <form id="user" name="user" method="post" enctype="multipart/form-data" action="" >

                  <table width="210" border="0" align="center" cellpadding="2" cellspacing="3">
                  <?php echo $n; ?>
                    <tr>
                      <td colspan="3" height="5px"></td>
                      </tr>
                    <tr>
                      <td width="63">Name</td>
                      <td width="8">:</td>
                      <td width="119"><input name="name" class="feedback_form" id="name" size="17" type="text" /></td>
                    </tr>
                    <tr>
                      <td>Email</td>
                      <td>:</td>
                      <td><input name="email" type="text" class="feedback_form" id="email" size="17" /></td>
                    </tr>
                    <tr>
                      <td>Phone</td>
                      <td>:</td>
                      <td><input name="phone" type="text" class="feedback_form" id="phone" size="17" /></td>
                    </tr>
                    <tr>
                      <td>Message</td>
                      <td>:</td>
                      <td><textarea name="msg" cols="14" class="feedback_form" id="message"></textarea></td>
                    </tr>
                    <tr>
                      <td height="55">&nbsp;</td>
                      <td>&nbsp;</td>
                      <td><input name="SubmitQuick" value="" style="border: 0px solid rgb(0, 51, 102); font-family: Arial,Helvetica,sans-serif; color: rgb(152, 186, 210); font-size: 12px; font-weight: bold; width: 93px; height: 32px; padding: 0px; background: url(&quot;images/submit-png.png&quot;) repeat scroll 0% 0% transparent;" type="submit"></td>
                    </tr>
                  </table>
                 </form>
                </td>
              </tr>
              <tr>
                <td><img src="images/contact_footer.jpg" width="220" height="13" /></td>
              </tr>
            </table></td>
          </tr>
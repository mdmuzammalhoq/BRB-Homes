<?php include 'inc/header.php'; ?>
<?php include 'inc/slider.php'; ?>	
<?php include 'inc/sidebar.php'; ?>
<?php
  $id=$_GET['news_detail'];
  $query="SELECT * from brb_news_events Where news_id='$id'";
       $news = $db->select($query);
       if ($news) {
         $result=$news->fetch_assoc();
 
?>
	</td>
        <td width="708" valign="top"><table width="697" border="0" align="center" cellpadding="0" cellspacing="0">
          
          <tr>
            <td><table width="697" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td><img src="images/body_head.jpg" width="697" height="14" /></td>
                </tr>
              <tr>
                <td background="images/body_bg.jpg"><table width="680" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td><img src="images/welcome-2.jpg" width="430" height="27" /></td>
                    </tr>
                  <tr>
                    <td>&nbsp;</td>
                    </tr>
                  <tr >
                    <td class="body_text"><p><strong>

                    <?php echo $result['news_title']; ?>
                      
                    </strong></p>
                      <p><br /><?php echo $result['news_details']; ?></p>
                      <?php } ?>
                      
                      </td>
                    </tr>
                  <tr>
                    <td height="14"></td>
                    </tr>
                  </table></td>
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
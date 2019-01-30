<?php include 'inc/header.php'; ?>  
<?php include 'inc/sidebar.php'; ?>

	</td>
        <td width="708" valign="top"><table width="697" border="0" align="center" cellpadding="0" cellspacing="0">
          
          <tr>
            <td class="body_text"><table width="697" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td><img src="images/body_head.jpg" width="697" height="14" /></td>
              </tr>
              <tr>
                <td background="images/body_bg.jpg">

                  <div style="margin: 5px 16px;">
                  <?php 
  $query = "select * from photo_gallary ";
  $photo = $db->select($query);
  if ($photo) {
     while ($result = $photo->fetch_assoc()) {
       
?>
                    <img style="width: 160px; height: 200px; border: 1px solid #000;" src="admin/<?php echo $result['photo']; ?>" alt=""></a>
                  <?php }} ?>  
                    
                  </div>
                                  
                  </td>
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

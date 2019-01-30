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
                  <h2>News And Events</h2>
                  <?php 
  $query = "select * from brb_news_events order by news_id DESC";
  $photo = $db->select($query);
  if ($photo) {
     while ($result = $photo->fetch_assoc()) {      
?>
                    <li><a href="index3.php?news_detail=<?php echo $result['news_id']; ?>"><?php echo $result['news_title']; ?></a></li>
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
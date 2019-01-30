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
                  <h2>Downloads </h2>

<?php 
	$query = "select * from downloads";
	$dnld = $db->select($query);
	if ($dnld) {
		while ($result = $dnld->fetch_assoc()) {
			
?>

	<li style="width: 300px; list-style: none;" class="box">
				<div class="boxtitle">
			<h2 style="text-align: center;"><a  href="" rel="bookmark" title="Permanent Link to Citizen"><?php echo $result['name']; ?></a></h2>
		</div>
		<a href=""><img style="width: 294px; height: 250px;" src="admin/<?php echo $result['image']; ?>" alt=""/></a>
		
		<div class="pricetab clearfix">
		
		
		
		<a href="admin/<?php echo $result['image']; ?>" download="">Download</a>
		</div>
	</li>
<?php } } ?>
	
                  
                    
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
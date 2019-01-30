<?php include 'inc/header.php'; ?>  
<?php include 'inc/sidebar.php'; ?>
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
                    <td><h2 style="color: #006BCD;">upComming Projects</h2></td>
                  </tr>
                  <tr >
                   
                    <td width="400" align="left" valign="top">

                    
     </td>
                  </tr>
                  <tr>
                    <td>
          <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                      <tr>
                        <td height="15"></td>
                      </tr>
                      <tr>
                        <td>
            <table width="95%" border="1" align="center" cellpadding="0" cellspacing="0" style="border-collapse:collapse"  bordercolor="#CCCCCC" id="link">

        <?php 
          if (isset($_GET['imageid'])) {
            $id = $_GET['imageid'];
         
          if ($id != '') { 

            $query = "select * from brb_upcomming order by id DESC";
          $project = $db->select($query);
          if ($project) {
            $result = $project->fetch_assoc(); 
            ?>
            <tr>
                        <td colspan="2" align="center" style="font-size:16px; height:20px"><b><?php echo $result['name']; ?></b></td>
                        </tr>
                      <tr>
                        <td width="46%" style="padding-left:10px">Project Location:</td>
                        <td width="54%" style="padding-left:10px"><?php echo $result['p_location']; ?></td>
                      </tr>
                      <tr>
                        <td style="padding-left:10px">Land Area:</td>
                        <td style="padding-left:10px"><?php echo $result['l_area']; ?></td>
                      </tr>
                      <tr>
                        <td style="padding-left:10px">Building Storied:</td>
                        <td style="padding-left:10px"><?php echo $result['b_soried']; ?></td>
                      </tr>
                      <tr>
                        <td style="padding-left:10px">Units:</td>
                        <td style="padding-left:10px"><?php echo $result['units']; ?></td>
                      </tr>
                      <tr>
                        <td style="padding-left:10px">Total no. of Flats:</td>
                        <td style="padding-left:10px"><?php echo $result['total_flat']; ?></td>
                      </tr>
                      <tr>
                        <td style="padding-left:10px">Total no. of Car parking:</td>
                        <td style="padding-left:10px"><?php echo $result['total_car_parking']; ?></td>
                      </tr>
                      <tr>
                        <td style="padding-left:10px">Apartments size:</td>
                        <td style="padding-left:10px"><?php echo $result['a_size']; ?></td>
                      </tr>
                      <tr>
                        <td style="padding-left:10px">Handover Date:</td>
                        <td><?php echo $result['h_date']; ?></td>
                      </tr>
                      
                      <tr>
                        <td colspan="2" align="center">FLOOR PLAN  | <a href="#">A</a> | <a href="#">B</a> | <a href="#">C</a> | <a href="#">D</a> |</td>
                        </tr>
                      <tr>
                        <td colspan="2" align="center">| <a href="#">GROUND FLOOR</a>  |  <a href="#">LOCATION MAP</a> |</td>
                        </tr>
                      <tr>
                        <td colspan="2" align="center">| <a href="images/brochure.pdf" target="_blank">BROCHURE DOWNLOAD</a> |</td>
                        </tr>
    <?php   }  } }else{
          $query = "select * from brb_upcomming order by id DESC";
          $project = $db->select($query);
          if ($project) {
            while ($result = $project->fetch_assoc()) {
             
        ?>
                      <tr>
                        <td colspan="2" align="center" style="font-size:16px; height:20px"><b><?php echo $result['name']; ?></b></td>
                        </tr>
                      <tr>
                        <td width="46%" style="padding-left:10px">Project Location:</td>
                        <td width="54%" style="padding-left:10px"><?php echo $result['p_location']; ?></td>
                      </tr>
                      <tr>
                        <td style="padding-left:10px">Land Area:</td>
                        <td style="padding-left:10px"><?php echo $result['l_area']; ?></td>
                      </tr>
                      <tr>
                        <td style="padding-left:10px">Building Storied:</td>
                        <td style="padding-left:10px"><?php echo $result['b_soried']; ?></td>
                      </tr>
                      <tr>
                        <td style="padding-left:10px">Units:</td>
                        <td style="padding-left:10px"><?php echo $result['units']; ?></td>
                      </tr>
                      <tr>
                        <td style="padding-left:10px">Total no. of Flats:</td>
                        <td style="padding-left:10px"><?php echo $result['total_flat']; ?></td>
                      </tr>
                      <tr>
                        <td style="padding-left:10px">Total no. of Car parking:</td>
                        <td style="padding-left:10px"><?php echo $result['total_car_parking']; ?></td>
                      </tr>
                      <tr>
                        <td style="padding-left:10px">Apartments size:</td>
                        <td style="padding-left:10px"><?php echo $result['a_size']; ?></td>
                      </tr>
                      <tr>
                        <td style="padding-left:10px">Handover Date:</td>
                        <td><?php echo $result['h_date']; ?></td>
                      </tr>
                      
                      <tr>
                        <td colspan="2" align="center">FLOOR PLAN  | <a href="#">A</a> | <a href="#">B</a> | <a href="#">C</a> | <a href="#">D</a> |</td>
                        </tr>
                      <tr>
                        <td colspan="2" align="center">| <a href="#">GROUND FLOOR</a>  |  <a href="#">LOCATION MAP</a> |</td>
                        </tr>
                      <tr>
                        <td colspan="2" align="center">| <a href="images/brochure.pdf" target="_blank">BROCHURE DOWNLOAD</a> |</td>
                        </tr>
             <?php } } }  ?>
                    </table>            </td>
                        </tr>
                    </table>
          </td>
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
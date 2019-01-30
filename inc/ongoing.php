<table width="695" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td>

      <table width="334" border="0" align="left" cellpadding="0" cellspacing="0">
              <?php 
                $query = "select * from brb_ongoing order by id desc";
                $ongo = $db->select($query);
                if ($ongo) {
                  $result = $ongo->fetch_assoc();
                
              ?>
                  <tr>
                    <td><img src="images/o_top.jpg" width="334" height="34" /></td>
                  </tr>
                  <tr>
                    <td background="images/u_bg.jpg"><table width="94%" border="0" align="center" cellpadding="0" cellspacing="0">
					  <tr>
                        <td height="6"></td>
                      </tr>
                      <tr>
                        <td><a href="ongoing.php?imageid=<?php echo $result['id'];?>"><img src="admin/<?php echo $result['image']; ?>" width="324" height="202" alt="" border="0" /></a></td> <!-- http://www.brbhomesbd.com/ -->
                      </tr>
                    </table></td>
                  </tr>
                  <tr>
                    <td><img src="images/u_footer.jpg" width="334" height="14" /></td>
                  </tr>
                </table>
          <?php } ?>
                </td>
                <td>
				
				
				
				<table width="334" border="0" align="right" cellpadding="0" cellspacing="0">
              <?php 
                $query = "select * from brb_upcomming order by id desc";
                $ongo = $db->select($query);
                if ($ongo) {
                  $result = $ongo->fetch_assoc();
                
              ?>
                  <tr>
                    <td><img src="images/u_top.jpg" width="334" height="34" /></td>
                  </tr>
                  <tr>
                    <td background="images/u_bg.jpg">
					<table width="94%" border="0" align="center" cellpadding="0" cellspacing="0">
					  <tr>
                        <td height="6"></td>
                      </tr>
                      <tr>				
						<td><a href="upcomming.php?imageid=<?php echo $result['id'];?>"><img src="admin/<?php echo $result['image']; ?>" width="324" alt="" height="202" border="0" /></a></td>
                      </tr>
                    </table>					</td>
                  </tr>
                  <tr>
                    <td><img src="images/u_footer.jpg" width="334" height="14" /></td>
                  </tr>
                </table>
                <?php } ?>				
				</td>
              </tr>
            </table>
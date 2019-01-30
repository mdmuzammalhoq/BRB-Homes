</td>
  </tr>
  <tr>
    <td height="5px"></td>
  </tr>
  <tr>
    <td>

    <table width="940" border="0" cellspacing="0" cellpadding="0">
      <tr>

        <td width="232" valign="top"><table width="221" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td align="center"><img src="images/navigation.jpg" width="220" height="37" /></td>
              </tr>
          

              <tr>
                <td><li class="man"><a href="index.php">Home</a></li></td>
              </tr>
              <tr>
                <td><li class="man"><a href="about.php">About us</a></li></td>
              </tr>
              <tr>
                <td><li class="man" style="color: #fff;">Projects</li>
                  <tr>
                    <td><li class="man" style="" >
                    <a style="height: 10px; width: 10px background: #fff; " href="">--</a>

                    <a style="font-size: 14px;" href="ongoing.php">Ongoing Projects</a></li></td>
                  </tr>
                  <tr>
                    <td><li class="man" style="" >
                    <a  style="height: 10px; width: 10px background: #fff; " href="">--</a>

                    <a style="font-size: 14px;" href="handover.php">Handovered Projects</a></li></td>
                  </tr>
                  <tr>
                    <td><li class="man" style="" >
                    <a style="height: 10px; width: 10px background: #fff; " href="">--</a>

                    <a style="font-size: 14px;" href="upcomming.php">UpComming Projects</a></li></td>
                  </tr>
                </td>
              </tr>
              <tr>
                <td><li class="man"><a href="newsEvent.php">News & Events</a></li></td>
              </tr>
              <tr>
                <td><li class="man"><a href="photogallary.php">Photo Gallary</a></li></td>
              </tr>
              <tr>
                <td><li class="man"><a href="download.php">Download</a></li></td>
              </tr>
              <tr>
                <td><li class="man"><a href="booking.php">Online Booking</a></li></td>
              </tr>
              <tr>
                <td><li class="man"><a href="contact.php">Contact us</a></li></td>
              </tr>
              
              
              
              
              <tr>
                <td><img style="width:222px; height:4px;" src="images/v-6.jpg" /></td>
              </tr>
            </table></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td><table width="220" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td><img src="images/news_head.jpg" width="220" height="35" /></td>
              </tr>
              <tr class="news">
                <td background="images/news_bg.jpg"><table width="90%" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td height="15px"></td>
                </tr>
              <tr>
                 <td id="marquee"><marquee direction="up" align="top" behavior="scroll" onmouseout="this.start();" onmouseover="this.stop();" scrollamount="1" scrolldelay="30" truespeed="truespeed">

                 <?php
						  
					$query="SELECT * from brb_news_events order by news_id desc limit 0,5";
           $news = $db->select($query);
           if ($news) {
             while($result=$news->fetch_assoc()){
 
				   ?>
			
			<a href="index3.php?news_detail=<?php echo $result['news_id']; ?>"><img src="images/icon.jpg" border="0" alt="" />&nbsp;<?php echo $result['news_title']; ?></a><br /><hr color="#DADADA" />
			
				
		
		
		   <?php } } ?>	
       </marquee></td>
              </tr>
            </table></td>
              </tr>
              <tr>
                <td><img src="images/news_footer.jpg" width="220" height="10" /></td>
              </tr>
            </table></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
          </tr>
          <?php //include 'quickcontact.php'; ?>
          <tr>
            <td>&nbsp;</td>
          </tr>
        </table>
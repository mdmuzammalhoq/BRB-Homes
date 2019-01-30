
<div id="slider" >
<?php 
	$query = "select * from brb_slider order by id limit 5";
	$slider = $db->select($query);
	if ($slider) {
		while ($result = $slider->fetch_assoc()) {
			

?>
 <a href="#" target="_parent"><img style="width:100%; height: 100% " src="admin/<?php echo $result['image']; ?>"  title="<?php echo $result['name']; ?>" />
 </a>

 <?php } } ?>
  

    </div> 
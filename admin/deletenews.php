
<?php include '../config/config.php'; ?>
<?php include '../lib/Database.php'; ?>
<?php include '../Format/Format.php'; ?>
<?php 
	$db = new Database();
?>

<?php 
	if (!isset($_GET['delid']) || $_GET['delid'] == NULL) {
		echo "<script>window.location = 'newslist.php'; </script>";
	}else{
		$id = $_GET['delid'];

		$query = "select * from brb_news_events where news_id='$id'";
		$getProduct = $db->select($query);
		if ($getProduct) {
			while ($delimg = $getProduct->fetch_assoc()) {
				$dellink = $delimg['image'];
				unlink($dellink);
			}
		}

		$delquery = "delete from brb_news_events where news_id='$id'";
		$delProduct = $db->delete($delquery);
		if ($delProduct) {
			echo "<script> alert('Data Deleted Successfully !'); </script>";
        	echo "<script>window.location = 'newslist.php'; </script>";
		}else{
        	echo "<script> alert('Data Not Deleted !'); </script>";
        	 echo "<script>window.location = 'newslist.php'; </script>";
        }
	}
?>
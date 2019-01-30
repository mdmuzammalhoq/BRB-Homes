<?php include '../Config/config.php'; ?>
<?php include '../lib/Database.php'; ?>
<?php include '../Format/Format.php'; ?>
<?php 
	$db = new Database();
?>

<?php 
	if (!isset($_GET['delid']) || $_GET['delid'] == NULL) {
		echo "<script>window.location = 'handoverlist.php'; </script>";
	}else{
		$id = $_GET['delid'];

		$query = "select * from handovered where id='$id'";
		$getProduct = $db->select($query);
		if ($getProduct) {
			while ($delimg = $getProduct->fetch_assoc()) {
				$dellink = $delimg['image'];
				unlink($dellink);
			}
		}

		$delquery = "delete from handovered where id='$id'";
		$delProduct = $db->delete($delquery);
		if ($delProduct) {
			echo "<script> alert('Data Deleted Successfully !'); </script>";
        	echo "<script>window.location = 'handoverlist.php'; </script>";
		}else{
        	echo "<script> alert('Data Not Deleted !'); </script>";
        	 echo "<script>window.location = 'handoverlist.php'; </script>";
        }
	}
?>
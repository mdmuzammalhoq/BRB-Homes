<?php include 'inc/header.php'; ?>
<?php 
	$fm = new Format();
?>
        <div class="grid_10">
            <div class="box round first grid">
                <h2>Booking Message</h2>
<?php 
if(isset($_GET['seenid'])){
	$seenid = $_GET['seenid'];
	 $query ="UPDATE online_booking 
            SET 
            status = '1'
            WHERE id='$seenid' ";
            $catinsert = $db->update($query);
            if($catinsert){
                echo "<span class='sucess'>Message Sent in the seen Box !</span>";
            }else{
                echo "<span class='error'>Message Not Sent in the seen Box !</span>";
            }
	}
?>
    <div class="block">        
        <table class="data display datatable" id="example">
		<thead>
			<tr>

				<td width:"10%">Serial No.</td>
				<td width:"10%">Project Name</td>
				<td width:"10%">Project Address</td>
				<td width:"10%">Applicant Name</td>
				<td width:"10%">Father's Name</td>
				<td width:"10%">Occupation</td>
				<td width:"10%">Email</td>
				<td width:"10%">Choice Appartment</td>
				<td width:"10%">Action</td>
			</tr>
		</thead>
	<tbody>
		<?php 
			$query = "select * from online_booking where status='0' order by id desc";
			$msg = $db->select($query);
			if($msg){
				$i = 0; 
				while($result= $msg-> fetch_assoc()){
					$i++;
			
		?>
		<tr class="odd gradeX">
			<td><?php echo $i ; ?></td>
			<td><?php echo $result['pro_name'];?></td>
			<td><?php echo $result['pro_addr'];?></td>
			<td><?php echo $result['applicant_name'];?></td>
			<td><?php echo $result['father_name'];?></td>
			<td><?php echo $result['occupation'];?></td>
			<td><?php echo $result['email'];?></td>
			<td><?php echo $fm->textShorten($result['choice_appartment'], 30);?></td>
			<td>
			<a href="viewmsg.php?msgid=<?php echo $result['id']; ?>">View</a> ||
			<a href="replymsg.php?msgid=<?php echo $result['id']; ?>">Reply</a> ||
			<a onclick ="
		return confirm('Are You Sure To Move !!!'); " href="?seenid=<?php echo $result['id']; ?>">Seen</a>  
				</td>
			</tr>
		    <?php } } ?>
		</tbody>
	</table>
   </div>
</div>




    <div class="box round first grid">
        <h2>Seen Message</h2>

	<?php 
if(isset($_GET['delid'])){
	$delid = $_GET['delid'];
	$delquery = "delete from online_booking where id='$delid'";
	$deldata = $db->delete($delquery);
	 if($deldata){
            echo "<span class='sucess'>Message Deleted Successfully !</span>";
        }else{
            echo "<span class='error'>Message NOT Deleted !</span>";
        }

	}
    ?>    

        <div class="block">        
            <table class="data display datatable" id="example">
			<thead>
				<tr>

				<td width:"10%">Serial No.</td>
				<td width:"10%">Project Name</td>
				<td width:"10%">Project Address</td>
				<td width:"10%">Applicant Name</td>
				<td width:"10%">Father's Name</td>
				<td width:"10%">Occupation</td>
				<td width:"10%">Email</td>
				<td width:"10%">Choice Appartment</td>
				<td width:"10%">Action</td>
			</tr>
			</thead>
	<tbody>
		<?php 
			$query = "select * from online_booking where status='1' order by id desc";
			$msg = $db->select($query);
			if($msg){
				$i = 0; 
				while($result= $msg-> fetch_assoc()){
					$i++;
			
		?>
		<tr class="odd gradeX">
			<td><?php echo $i ; ?></td>
			<td><?php echo $result['pro_name'];?></td>
			<td><?php echo $result['pro_addr'];?></td>
			<td><?php echo $result['applicant_name'];?></td>
			<td><?php echo $result['father_name'];?></td>
			<td><?php echo $result['occupation'];?></td>
			<td><?php echo $result['email'];?></td>
			<td><?php echo $fm->textShorten($result['choice_appartment'], 30);?></td>
			<td>
			<a href="viewmsg.php?msgid=<?php echo $result['id']; ?>">View</a> ||
			
			<a onclick ="
	return confirm('Are You Sure To Move !!!'); " href="?delid=<?php echo $result['id']; ?>">Delete</a>  
				</td>
			</tr>
	    <?php } } ?>
			</tbody>
		</table>
       </div>
    </div>
</div>

<script type="text/javascript">

        $(document).ready(function () {
            setupLeftMenu();

            $('.datatable').dataTable();
            setSidebarHeight();


        });
</script>
<?php include 'inc/footer.php'; ?>
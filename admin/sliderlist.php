<?php include 'inc/header.php'; ?>
        <div class="grid_10">
            <div class="box round first grid">
                <h2>Slider List</h2>
                <div class="block">        
                    <table class="data display datatable" id="example">
					<thead>
						<tr>
							<th width="20%">Serial No.</th>
							<th width="40%">Images</th>
							<th width="40%">Action</th>
						</tr>
					</thead>
					<tbody>
                    <?php 
                        $query = "select * from brb_slider order by id DESC";
                        $photo = $db->select($query);
                            if($photo){
                                $i=0;
                                while($result=$photo->fetch_assoc()){
                                    $i++; 
                    ?>
						<tr class="odd gradeX">
							<td style="width:20%; text-align: center; "><?php echo $result['id']; ?></td>
							<td style="width:40%; text-align: center;"><img src="<?php echo $result['image']; ?>" height="40px;" width="60px"></td>
							<td style="width:40%; text-align: center; "><a href="editslider.php?editid=<?php echo $result['id']; ?>">Edit</a> || <a href="delete.php?delid=<?php echo $result['id']; ?>">Delete</a></td>
						</tr>
                    <?php  } } ?>
						
						</tr>
					</tbody>
				</table>
               </div>
            </div>
        </div>
<?php echo include 'inc/footer.php'; ?>
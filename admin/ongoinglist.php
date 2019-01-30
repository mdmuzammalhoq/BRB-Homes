<?php 
	include 'inc/header.php';
	$fm = new Format();
 ?>

        <div class="grid_10">
            <div class="box round first grid">
                <h2>Ongoing List</h2>
                <div class="block">        
                    <table class="data display datatable" id="example">
					<thead>
						<tr>
							<th>Serial No.</th>
							<th width="10%">Name</th>
							<th width="20%">Project Location</th>
							<th width="5%">Land Area</th>
							<th width="5%">Building Storied</th>
							<th width="5%">Units</th>
							<th width="5%">Total Flats</th>
							<th width="5%">Total Car Parking</th>
							<th width="5%">Apartments size:</th>
							<th width="10%">Handover Date:</th>
							<th width="20%">Action</th>
						</tr>
					</thead>
					<tbody>
                    <?php 
                        $query = "select * from brb_ongoing order by id DESC";
                        $project = $db->select($query);
                            if($project){
                                $i=0;
                                while($result=$project->fetch_assoc()){
                                    $i++; 
                    ?>
						<tr class="odd gradeX">
						<td ><?php echo $result['id']; ?></td>
							<td ><?php echo $result['name']; ?></td>
							<td style="text-align: center; "><?php echo $result['p_location']; ?></td>
							<td style="text-align: center; "><?php echo $result['l_area'];?></td>
							<td style="text-align: center; "><?php echo $result['b_soried'];?></td>
							<td style="text-align: center; "><?php echo $result['units']; ?></td>
							<td style="text-align: center; "><?php echo $result['total_flat']; ?></td>
							<td style="text-align: center; "><?php echo $result['total_car_parking']; ?></td>
							<td style="text-align: center; "><?php echo $result['a_size']; ?></td>
							<td style="text-align: center; "><?php echo $result['h_date']; ?></td>
							<td style="text-align: center; "><a href="ongedit.php?editid=<?php echo $result['id']; ?>">Edit</a> || <a href="delongo.php?delid=<?php echo $result['id']; ?>">Delete</a></td>
						</tr>
                    <?php  } } ?>
						
						</tr>
					</tbody>
				</table>
               </div>
            </div>
        </div>
<?php echo include 'inc/footer.php'; ?>
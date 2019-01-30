<?php 
	include 'inc/header.php';
	$fm = new Format();
 ?>

        <div class="grid_10">
            <div class="box round first grid">
                <h2>News List</h2>
                <div class="block">        
                    <table class="data display datatable" id="example">
					<thead>
						<tr>
							<th width="5%">Serial No.</th>
							<th width="5%">Category</th>
							<th width="20%">News Title</th>
							<th width="20%">News Detail</th>
							<th width="10%">Date</th>
							<th width="10%">Hits</th>
							<th width="30%">Action</th>
						</tr>
					</thead>
					<tbody>
                    <?php 
                        $query = "select * from brb_news_events order by news_id DESC";
                        $photo = $db->select($query);
                            if($photo){
                                $i=0;
                                while($result=$photo->fetch_assoc()){
                                    $i++; 
                    ?>
						<tr class="odd gradeX">
							<td ><?php echo $result['news_id']; ?></td>
							<td style="width:20%; text-align: center; "><?php echo $result['category_id']; ?></td>
							<td style="width:20%; text-align: center; "><?php echo $fm->textShorten($result['news_title'], 20);?></td>
							<td style="width:20%; text-align: center; "><?php echo $fm->textShorten($result['news_details'], 30);?></td>
							<td style="width:20%; text-align: center; "><?php echo $result['add_date']; ?></td>
							<td style="width:20%; text-align: center; "><?php echo $result['hits']; ?></td>
							<td style="width:40%; text-align: center; "><a href="editnews.php?editid=<?php echo $result['news_id']; ?>">Edit</a> || <a href="deletenews.php?delid=<?php echo $result['news_id']; ?>">Delete</a></td>
						</tr>
                    <?php  } } ?>
						
						</tr>
					</tbody>
				</table>
               </div>
            </div>
        </div>
<?php echo include 'inc/footer.php'; ?>
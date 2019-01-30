<?php include 'inc/header.php'; ?>

        <div class="grid_10">
		
            <div class="box round first grid">
                <h2>Add News OR Events</h2>
               <div class="block copyblock"> 
<?php 
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $category_id= $_POST['category_id'];
            $news_title= $_POST['news_title'];
            $news_details= $_POST['news_details'];
            $add_date= $_POST['add_date'];

            $category_id = mysqli_real_escape_string($db->link, $category_id);
            $news_title = mysqli_real_escape_string($db->link, $news_title);
            $news_details = mysqli_real_escape_string($db->link, $news_details);
            $add_date = mysqli_real_escape_string($db->link, $add_date);

            if(empty($category_id)){
                echo "<span class='error'>Field Must not be empty !</span>";
            }elseif(empty($news_title)){
            	echo "<span class='error'>Field Must not be empty !</span>";
            }elseif(empty($news_details)){
            	echo "<span class='error'>Field Must not be empty !</span>";
            }elseif(empty($add_date)){
            	echo "<span class='error'>Field Must not be empty !</span>";
            }else{
                $query ="INSERT INTO brb_news_events(category_id, news_title, news_details, add_date) VALUES('$category_id', '$news_title', '$news_details', '$add_date') ";
                $catinsert = $db->insert($query);
                if($catinsert){
                    echo "<span class='sucess'>News Inserted Successfully !</span>";
                }else{
                    echo "<span class='error'>Category NOT Inserted !</span>";
                }
            }
        }
?>
                 <form action="newsevents.php" method="post">
                    <table class="form">					
                        <tr><td>Category ID:</td>
                            <td>
                                <input type="text" name="category_id"  class="medium" />
                            </td>
                        </tr>
                        <tr><td>News Title:</td>
                            <td>
                                <input type="text" name="news_title"  class="medium" />
                            </td>
                        </tr>
                        <tr><td>Date:</td>
                            <td>
                                <input type="text" name="add_date"  class="medium" />
                            </td>
                        </tr>
                        <tr><td>News Detail:</td>
                            <td>
                                <textarea class="medium" class="tinymce" name="news_details"></textarea>
                            </td>
                        </tr>
                        
						<tr> 
                            <td>
                                <input type="submit" name="submit" Value="Save" />
                            </td>
                        </tr>
                    </table>
                    </form>
                </div>
            </div>
        </div>

<!-- Load TinyMCE -->
    <script src="js/tiny-mce/jquery.tinymce.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            setupTinyMCE();
            setDatePicker('date-picker');
            $('input[type="checkbox"]').fancybutton();
            $('input[type="radio"]').fancybutton();
        });
    </script>
		<script type="text/javascript">
        $(document).ready(function () {
            setupLeftMenu();
		    setSidebarHeight();
        });
    </script>
    <!-- /TinyMCE -->

<?php include 'inc/footer.php'; ?>
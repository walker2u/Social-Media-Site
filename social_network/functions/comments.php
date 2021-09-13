<?php 

	$get_id = $_GET['post_id'];
	$get_comm = "select * from comments where post_id = '$get_id' ORDER by 1 DESC";
	$run_comm = mysqli_query($con,$get_comm);
	
	while($row = mysqli_fetch_array($run_comm)){
		$comm = $row['comment'];
		$comm_name = $row['comment_author'];
		$date = $row['date'];
		
		echo "
		
				<div class='row'>
					<div class='col-md-6 col-md-offset-3'>
						<div class='panel panel-info'>
							<div class='panel-body'>
								<div>
									<h4><strong>$comm_name</strong><i>Commented</i> on $date</h4>
									<p class='text-primary' style='margin-left:5px;font-size:20px'>$comm</p>
								</div>
							</div>
						</div>
					</div>
				</div>
		";
	}

 ?>
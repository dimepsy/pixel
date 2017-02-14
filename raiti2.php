<?php
$count=0;
	include("configure.php");
	$postid=$_GET['id'];
	//$date=$_GET['Date'];
	//echo $postid;
	
	$sql="SELECT  * FROM upload2 WHERE id='$postid'";
	
	
	
	$retval= mysqli_query($connect,$sql);
	if(! $retval)
	{
		die('Could not get data : ' .mysqli_error());	
	}
	
	$row = mysqli_fetch_array($retval);
	
	/*for($i=0;$row = mysql_fetch_array($retval, MYSQL_ASSOC); $i++)
	{
		
		$b[$i]= $row['name'];
		$c[$i] = $row['description'];
		
		$count++;	
	}*/
	
?>


<div id="other">
    
			<!-- Articles -->
			<div class="row">
				<article class="col-xs-12">
					<h2><?php echo $row['title'];?> </h2>
					
                    
					<p><?php echo $row['description'];?><br>
						
                    </p>
					<b>Published Date:</b> <?php echo $row['Date'];?><br>
			<b>Last Edited By:</b> <?php echo $row['Last_Edited_By'];?><br>
				</article>
			</div>
		</div>

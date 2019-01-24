<?php
require_once '../connect/connect.php';
if($_POST['leaving_from'])
{
	$leaving_from=$_POST['leaving_from'];
		
	$stmt =mysqli_query($conn,"SELECT go_to FROM route WHERE leaving_from='".$leaving_from."' GROUP BY go_to");
	
	?><option selected="selected">--Select One--</option><?php
	while($row=mysqli_fetch_array($stmt))
	{
		?>
        <option value="<?php echo $row['go_to']; ?>"><?php echo $row['go_to']; ?></option>
        <?php
	}
}
?>
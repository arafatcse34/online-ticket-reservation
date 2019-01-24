<?php
require_once 'connect/connect.php';
if($_POST['go_to'])
{
	$go_to=$_POST['go_to'];
		
	$stmt =mysqli_query($conn,"SELECT bus_type FROM route_manage WHERE go_to='".$go_to."' GROUP BY bus_type");
	
	?><option selected="selected">--Select One--</option><?php
	while($row=mysqli_fetch_array($stmt))
	{
		?>
        <option value="<?php echo $row['bus_type']; ?>"><?php echo $row['bus_type']; ?></option>
        <?php
	}
}
?>
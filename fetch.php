<?php
$con = mysqli_connect("localhost","root","","Live_stock");
$output = '';
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($con, $_POST["query"]);
	$query = "
	SELECT * FROM birth
	WHERE b_id LIKE '%".$search."%'
	OR b_aniamal LIKE '%".$search."%' 
	OR b_tag '%".$search."%' 
	OR b_dob LIKE '%".$search."%' 
	OR b_gender LIKE '%".$search."%'
    OR b_qty LIKE '%".$search."%'
	";
}
else
{
	$query = "
	SELECT * FROM tbl_customer ORDER BY CustomerID";
}
$result = mysqli_query($con, $query);
if(mysqli_num_rows($result) > 0)
{
	$output .= '<div class="table-responsive">
					<table class="table table bordered">
						<tr>
							<th>Id</th>
							<th>Animal</th>
							<th>Tag#</th>
							<th>Date Of Birth</th>
							<th>Gender</th>
							<th>Quality</th>
						</tr>';
	while($row = mysqli_fetch_array($result))
	{
		$output .= '
			<tr>
				<td>'.$row["b_id"].'</td>
				<td>'.$row["b_aniamal"].'</td>
				<td>'.$row["b_tag"].'</td>
				<td>'.$row["b_dob"].'</td>
				<td>'.$row["b_gender"].'</td>
				<td>'.$row["b_qty"].'</td>
			</tr>
		';
	}
	echo $output;
}
else
{
	echo 'Data Not Found';
}
?>
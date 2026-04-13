<!DOCTYPE html>
<html>
<head>
<title> CUSTOMER DETAILS </title>
</head>
<body>
	<table border="2px">
		<tr>
			<th> ID </th>
			<th> FULL NAME </th>
			<th> NIC </th>
			<th> DATE OF BIRTH </th>
			<th> ADDRESS </th>
			<th> PHONE NUMBER </th>
			<th> EMAIL </th>
			<th> ACCOUNT TYPE </th>
			<th> BALANCE  </th>
			<th> CREATED AT </th>
			
			
			<th colspan="2"> ACTION </th>
		</tr>
<?PHP while($row=$result->fetch_assoc()){ ?>
			<tr>
				<td> <?php echo $row['ID']; ?> </td>
				<td> <?php echo $row['FULL_NAME']; ?> </td>
				<td> <?php echo $row['NIC']; ?> </td>
				<td> <?php echo $row['DOB']; ?> </td>
				<td> <?php echo $row['ADDRESS']; ?> </td>
				<td> <?php echo $row['PHONE_NO']; ?> </td>
				<td> <?php echo $row['EMAIL']; ?> </td>
				<td> <?php echo $row['ACCOUNT_TYPE']; ?> </td>
				<td> <?php echo $row['BALANCE']; ?> </td>
				<td> <?php echo $row['CREATED_AT']; ?> </td>
				
				<td> <a href="index.php?action=delete&ID=<?php echo $row['ID']; ?>" > DELETE </a></td>
				<td> <a href="index.php?action=getDetails&ID=<?php echo $row['ID']; ?>" > UPDATE </a></td>
			</tr>
<?php  } ?>
			<tr>
				<td colspan="12" align="center"> <a href="index.php?action=''"> ADD </a> </td>
			</tr>
	</table>
</body>
</html>
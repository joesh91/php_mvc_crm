<html>
	<head>
		<title> UPDATE CUSTOMER DETAILS </title>
	</head>
<body>
	<div>
	<form method="POST" action="index.php?action=updateByAll">
	
		<?PHP while($row=$result->fetch_assoc()){ ?>
		<div>
			<label> ID </label>
		</div>
		<div>
			<input  type="text" name="id" id="IDID" value="<?php echo $row['ID']; ?>" readonly required />
			
		</div>
	
		<div>
			<label> FULL NAME </label>
		</div>
		<div>
			<input  type="text" name="full_name" id="full_nameID" value="<?php echo $row['FULL_NAME']; ?>" required />
			<span><?= $errors['full_name']??''; ?> </span>
		</div>
		
		<div>
			<label> NIC/DL/PP </label>
		</div>
		<div>
			<input  type="text" name="nic" id="nicID" value="<?php echo $row['NIC'];  ?>"  required />
			<span><?= $errors['nic']??''; ?> </span>
			
		</div>
		
		<div>
			<label> DATE OF BIRTH </label>
		</div>
		<div>
			<input  type="date" name="dob" id="dobID" value="<?php echo $row['DOB']; ?>" required />	
			<span><?= $errors['dob']??''; ?> </span>			
		</div>
		
		<div>
			<label> ADDRESS </label>
		</div>
		<div>
			<input  type="text" name="address" id="addressID" value="<?php echo $row['ADDRESS']; ?>" required />
			<span><?= $errors['address']??''; ?> </span>			
		</div>
		
		<div>
			<label> PHONE NUMBER </label>
		</div>
		<div>
			<input  type="text" name="phone_no" id="phone_noID" value="<?php echo $row['PHONE_NO']; ?>" required />
			<span><?= $errors['phone_no']??''; ?> </span>			
		</div>
		
		<div>
			<label> EMAIL </label>
		</div>
		<div>
			<input  type="email" name="email" id="emailID" value="<?php echo $row['EMAIL']; ?>" required />		
			<span><?= $errors['email']??''; ?> </span>			
		</div>
		
		<div>
			<label> ACCOUNT TYPE </label>
		</div>
		<div>
			<select name="account_type" id="account_typeID" />
				<option value="select" disabled <?= ($row['ACCOUNT_TYPE'] ?? '') == '' ? 'selected' : '' ?> > SELECT </option>
				<option value="SAVINGS" <?= $row['ACCOUNT_TYPE'] == 'SAVINGS' ? 'selected' : '' ?> > SAVINGS ACCOUNT </option>
				<option value="TERM_DEPOSIT" <?= $row['ACCOUNT_TYPE'] == 'TERM_DEPOSIT' ? 'selected' : '' ?> > TERM DEPOSIT </option>
				<option value="CURRENT" <?= $row['ACCOUNT_TYPE']  == 'CURRENT' ? 'selected' : '' ?> > CURRENT ACCOUNT </option>
			</select>	
		</div>
		
		<div>
			<label> BALANCE </label>
		</div>
		<div>
			<input  type="number" name="balance" id="balanceID" min="0" steps="0.01" placeholder="0.00" value="<?php echo $row['BALANCE']; ?>" required />			
		</div>
		
		
		
<!-- START SHOWING VALIDATION ERROR -->
		
		<div hidden>
			<input  type="text" name="name" id="nameID" />
				<?PHP if(!empty($erros)){	?>
				<p><?php echo $errors['name']; ?> </p>
				
				<?php }
				
				?>
		</div>
		
<!-- END SHOWING VALIDATION ERROR -->
		
		
		<div>
			<div>
				<button type="submit" id="submitButtonID" > SUBMIT </button>
			</div>
			<div>
				<button type="reset" id="resetButtonID" > RESET </button>
			</div>
		</div>
		<?php } ?>
	</form>
	</div>
	
	<div>
		<button> <a href="index.php?action=view"> SHOW LIST <a/> </button>
	</div>
	
	
	
</body>
</html>
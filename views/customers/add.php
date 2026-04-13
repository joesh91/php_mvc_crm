ADD.PHP
<html>
	<head>
		<title> CUSTOMER DETAILS </title>
	</head>
<body>
	<div>
	<form method="POST" action="index.php?action=add">
	
		<div>
			<label> FULL NAME </label>
		</div>
		<div>
			<input  type="text" name="full_name" id="full_nameID"  required />
			<span><?= $errors['full_name']??''; ?> </span>
		</div>
		
		<div>
			<label> NIC/DL/PP </label>
		</div>
		<div>
			<input  type="text" name="nic" id="nicID"  required />
			<span><?= $errors['nic']??''; ?> </span>
			
		</div>
		
		<div>
			<label> DATE OF BIRTH </label>
		</div>
		<div>
			<input  type="date" name="dob" id="dobID"  required />	
			<span><?= $errors['dob']??''; ?> </span>			
		</div>
		
		<div>
			<label> ADDRESS </label>
		</div>
		<div>
			<input  type="text" name="address" id="addressID"  required />
			<span><?= $errors['address']??''; ?> </span>			
		</div>
		
		<div>
			<label> PHONE NUMBER </label>
		</div>
		<div>
			<input  type="text" name="phone_no" id="phone_noID"  required />
			<span><?= $errors['phone_no']??''; ?> </span>			
		</div>
		
		<div>
			<label> EMAIL </label>
		</div>
		<div>
			<input  type="email" name="email" id="emailID"  required />		
			<span><?= $errors['email']??''; ?> </span>			
		</div>
		
		<div>
			<label> ACCOUNT TYPE </label>
		</div>
		<div>
			<select name="account_type" id="account_typeID" />
				<option value = "select" selected disabled selected > SELECT </option>
				<option value="SAVINGS" > SAVINGS ACCOUNT </option>
				<option value="TERM_DEPOSIT" > TERM DEPOSIT </option>
				<option value="CURRENT" > CURRENT ACCOUNT </option>
			</select>	
		</div>
		
		<div>
			<label> BALANCE </label>
		</div>
		<div>
			<input  type="number" name="balance" id="balanceID" min="0" steps="0.01" placeholder="0.00" required />			
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
		
	</form>
	</div>
	
	<div>
		<button> <a href="index.php?action=view"> SHOW LIST <a/> </button>
	</div>
	
	
	
</body>
</html>

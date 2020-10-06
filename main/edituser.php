<?php
	include('../connect.php');
	$id=$_GET['id'];
	$result = $dbh->prepare("SELECT * FROM userdata WHERE id= :userid");
	$result->bindParam(':userid', $id);
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++){
?>







<!DOCTYPE html>
<html lang="en">
<head>
	
<link href="css/bootstrap.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="css/DT_bootstrap.css">
  
  <link rel="stylesheet" href="css/font-awesome.min.css">
    <style type="text/css">
    
      .sidebar-nav {
        padding: 9px 0;
      }
    </style>
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
<link href="../style.css" media="screen" rel="stylesheet" type="text/css" />
<link href="style.css" media="screen" rel="stylesheet" type="text/css" />
<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
<script src="lib/jquery.js" type="text/javascript"></script>
<script src="src/facebox.js" type="text/javascript"></script>

</head>
<script>
  
function checkPassword(form) { 
                password1 = form.password.value; 
                password2 = form.password_confirm.value; 
  
                
                
                      
                // If Not same return False.     
                if (password1 != password2) { 
                    alert ("\nPassword did not match: Please try again...") 
                    return false; 
                } 
  
            } 
  
</script>
<body>
<form class="form-horizontal" action='saveuser.php' method="post" onSubmit = "return checkPassword(this)">
  <fieldset>
    <div id="legend" style="padding-left:4%">
      <legend class="">Edit User | <a href="manageusers.php">Manage Users</a></legend>

 <div class="control-group">
      <!-- Full name -->
      <label class="control-label"  for="fullname" >Full Name</label>
      <div class="controls">
        <input type="text" value = "<?php echo $row['FullName']?>" id="fname" name="fname"  pattern="[a-zA-Z\s]+" title="Full name must contain letters only" class="input-xlarge" required>
        <p class="help-block">Full can contain any letters only</p>
      </div>
    </div>


    <div class="control-group">
      <!-- Username -->
      <label class="control-label"  for="username">Username</label>
      <div class="controls">
        <input type="text"  value = "<?php echo $row['UserName']?>" id="username" name="username" onBlur="checkUsernameAvailability()"  pattern="^[a-zA-Z][a-zA-Z0-9-_.]{5,12}$" title="User must be alphanumeric without spaces 6 to 12 chars" class="input-xlarge" required>
            <span id="username-availability-status" style="font-size:12px;"></span> 
        <p class="help-block">Username can contain any letters or numbers, without spaces 6 to 12 chars </p>
      </div>
    </div>
 
    <div class="control-group">
      <!-- E-mail -->
      <label class="control-label" for="email">E-mail</label>
      <div class="controls">
        <input type="email" id="email" name="email"  value = "<?php echo $row['UserEmail']?>" placeholder="" onBlur="checkEmailAvailability()" class="input-xlarge" required>
             <span id="email-availability-status" style="font-size:12px;"></span> 
        <p class="help-block">Please provide your E-mail</p>
      </div>
    </div>
 
    <div class="control-group">
      <!-- Mobile Number -->
      <label class="control-label" for="mobilenumber">Mobile Number </label>
      <div class="controls">
        <input type="text" id="mobilenumber"  value = "<?php echo $row['UserMobileNumber']?>" name="mobilenumber" pattern="[0-9]{10}" maxlength="10"  title="10 numeric digits only"   class="input-xlarge" required>
        <p class="help-block">Mobile Number Contain only 10 digit numeric values</p>
      </div>
    </div>



   <div class="control-group">
      <!-- Mobile Number -->
      <label class="control-label" for="position">Position </label>
      <div class="controls">
        <select name="position" class="form-control">
        <option value="admin">admin</option>
        <option value="cashier">cashier</option>
        </select>
        <p class="help-block">Position</p>
      </div>
    </div>



    <div class="control-group">
      <!-- Password-->
      <label class="control-label" for="password">Password</label>
      <div class="controls">
        <input type="password" id="password" name="password"  value = "<?php echo $row['LoginPassword']?>" pattern="^\S{4,}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Must have at least 4 characters' : ''); if(this.checkValidity()) form.password_two.pattern = this.value;"  required class="input-xlarge">
        <p class="help-block">Password should be at least 4 characters</p>
      </div>
    </div>


 
    <div class="control-group">
      <!-- Confirm Password -->
      <label class="control-label"  for="password_confirm">Password (Confirm)</label>
      <div class="controls">
        <input type="password" id="password_confirm" name="password_confirm" pattern="^\S{4,}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Please enter the same Password as above' : '')""  class="input-xlarge">
        <p class="help-block">Please confirm password</p>
      </div>
    </div>



 
    <div class="control-group">
      <!-- Button -->
      <div class="controls">
        <button class="  btn btn-success" type="submit" name="signup">Edit User </button>

      </div>
    </div>
  </fieldset>
</form>
<script type="text/javascript">

</script>
</body>
</html>










<!--<link href="../style.css" media="screen" rel="stylesheet" type="text/css" />
<form action="saveeditproduct.php" method="post">
<center><h4><i class="icon-edit icon-large"></i> Edit User</h4></center>
<hr>
<div id="ac">
<input type="hidden" name="memi" value="<?php echo $id; ?>" />
<span>Brand Name : </span><input type="text" style="width:265px; height:30px;"  name="code" value="<?php echo $row['product_code']; ?>" Required/><br>
<span>Generic Name : </span><input type="text" style="width:265px; height:30px;"  name="gen" value="<?php echo $row['gen_name']; ?>" /><br>
<span>Category / Description : </span><textarea style="width:265px; height:50px;" name="name" ><?php echo $row['product_name']; ?> </textarea><br>
<span>Date Arrival: </span><input type	="date" style="width:265px; height:30px;" name="date_arrival" value="<?php echo $row['date_arrival']; ?>" /><br>
<span>Expiry Date : </span><input type	="date" style="width:265px; height:30px;" name="exdate" value="<?php echo $row['expiry_date']; ?>" /><br>
<span>Selling Price : </span><input type="text" style="width:265px; height:30px;" id="txt1" name="price" value="<?php echo $row['price']; ?>" onkeyup="sum();" Required/><br>
<span>Original Price : </span><input type="text" style="width:265px; height:30px;" id="txt2" name="o_price" value="<?php echo $row['o_price']; ?>" onkeyup="sum();" Required/><br>
<span>Profit : </span><input type="text" style="width:265px; height:30px;" id="txt3" name="profit" value="<?php echo $row['profit']; ?>" readonly><br>
<span>Supplier : </span>
<select name="supplier" style="width:265px; height:30px; margin-left:-5px;" >
	<option><?php echo $row['supplier']; ?></option>
	<?php
	$results = $dbh->prepare("SELECT * FROM supliers");
		$results->bindParam(':userid', $res);
		$results->execute();
		for($i=0; $rows = $results->fetch(); $i++){
	?>
		<option><?php echo $rows['suplier_name']; ?></option>
	<?php
	}
	?>
</select><br>
<span>QTY Left: </span><input type="number" style="width:265px; height:30px;" min="0" name="qty" value="<?php echo $row['qty']; ?>" /><br>
<span>Quantity: </span><input type="number" style="width:265px; height:30px;" min="0" name="sold" value="<?php echo $row['qty_sold']; ?>" /><br>

<div style="float:right; margin-right:10px;">

<button class="btn btn-success btn-block btn-large" style="width:267px;"><i class="icon icon-save icon-large"></i> Save Changes</button>
</div>
</div>
</form>-->
<?php
}
?>
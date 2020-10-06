<?php
require('saveuser.php');
?>
<!DOCTYPE html>
<html lang="en">
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
      <legend class="">Add New User | <a href="manageusers.php">Manage Users</a></legend>
    </div>
<!--Error Message-->
  <?php if($error){ ?><div class="errorWrap">
                <strong>Error </strong> : <?php echo htmlentities($error);?></div>
                <?php } ?>
<!--Success Message-->
<?php if($msg){ ?><div class="succWrap">
                <strong>Well Done </strong> : <?php echo htmlentities($msg);?></div>
                <?php } ?> 




 <div class="control-group">
      <!-- Full name -->
      <label class="control-label"  for="fullname">Full Name</label>
      <div class="controls">
        <input type="text" id="fname" name="fname"  pattern="[a-zA-Z\s]+" title="Full name must contain letters only" class="input-xlarge" required>
        <p class="help-block">Full can contain any letters only</p>
      </div>
    </div>


    <div class="control-group">
      <!-- Username -->
      <label class="control-label"  for="username">Username</label>
      <div class="controls">
        <input type="text" id="username" name="username" onBlur="checkUsernameAvailability()"  pattern="^[a-zA-Z][a-zA-Z0-9-_.]{5,12}$" title="User must be alphanumeric without spaces 6 to 12 chars" class="input-xlarge" required>
            <span id="username-availability-status" style="font-size:12px;"></span> 
        <p class="help-block">Username can contain any letters or numbers, without spaces 6 to 12 chars </p>
      </div>
    </div>
 
    <div class="control-group">
      <!-- E-mail -->
      <label class="control-label" for="email">E-mail</label>
      <div class="controls">
        <input type="email" id="email" name="email" placeholder="" onBlur="checkEmailAvailability()" class="input-xlarge" required>
             <span id="email-availability-status" style="font-size:12px;"></span> 
        <p class="help-block">Please provide your E-mail</p>
      </div>
    </div>
 
    <div class="control-group">
      <!-- Mobile Number -->
      <label class="control-label" for="mobilenumber">Mobile Number </label>
      <div class="controls">
        <input type="text" id="mobilenumber" name="mobilenumber" pattern="[0-9]{10}" maxlength="10"  title="10 numeric digits only"   class="input-xlarge" required>
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
        <input type="password" id="password" name="password" pattern="^\S{4,}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Must have at least 4 characters' : ''); if(this.checkValidity()) form.password_two.pattern = this.value;"  required class="input-xlarge">
        <p class="help-block">Password should be at least 4 characters</p>
      </div>
    </div>


    <?php
   if (in_array("Your passwords do not match<br>", $error_array)) {
            echo "Your passwords do not match<br>" ;
          }

    ?>
 
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
        <button class="  btn btn-success" type="submit" name="signup">Add User </button>

      </div>
    </div>
  </fieldset>
</form>
<script type="text/javascript">

</script>
</body>
</html>

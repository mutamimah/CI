<html>
<body>
<?php echo validation_errors(); ?>
<?php echo form_open('verifylogin'); ?>
<form>
<label for="username">username</label>
<input type="text" size="20" id="username" name="username">
<br>
<label for="password">password</label>
<input type="text" size="8" id="password" name="password">
<br>
<input type="submit" value="login">
</form>
</body>
</html>
<h1>Login</h1>
 
<p>Please enter your details below to login.</p>
 
<?php if (isset($message_type)): ?>
<div class="<?php echo $message_type ?>">
<?php echo $message ?>
</div>
<?php endif; ?>

 
<form method="post" action="<?php url('/login') ?>" name="registerform" id="registerform">
<fieldset>
    <label for="username">Username:</label><input type="text" name="username" id="username" /><br />
    <label for="password">Password:</label><input type="password" name="password" id="password" /><br />
    <input type="submit" name="register" id="register" value="Login" />
</fieldset>
</form>
<div id="login_form">
	<h1>Login, Fool!</h1>
	<?php
		echo form_open('login/validate_credentials');
		echo form_input('username', set_value('username', 'Username'));
		echo form_password('password', set_value('password', 'Password'));
		echo form_submit('submit', 'Login');
		echo anchor('login/signup', 'Create Account');
		echo validation_errors('<p class="error">');
	?>
</div>
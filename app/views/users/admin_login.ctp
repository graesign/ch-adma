<div class="users form">
	<?php echo $this->Form->create('User', array('url' => array('controller' => 'users', 'action' => 'login')));?>
		<fieldset>
		<?php
			echo $this->Form->input('username');
			echo $this->Form->input('password');
		?>
		</fieldset>
	<?php
		echo $this->Html->link(__('Wachtwoord vergeten?', true), array(
			'admin' => false,
			'controller' => 'users',
			'action' => 'forgot',
		), array(
			'class' => 'forgot',
		));
		echo $this->Form->end(__('Login', true));
	?>
</div>
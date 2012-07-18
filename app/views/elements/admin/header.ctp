<div id="header">
	<div class="container_16">
        <div id="headsection"> 
            <h1><?php echo $this->Html->link(Configure::read('Site.title'), '/'); ?> Digi Archief</h1>
        </div>
		<div class="grid_8 header-left">
		<?php
			echo $this->Html->link(__('Dashboard', true), '/admin');
			echo ' <span>|</span> '; 
			echo $this->Html->link(__('Terug naar de website', true), '/');
		?>
		</div>

		<div class="grid_8 header-right">
		<?php
			echo sprintf(__("Welkom: %s", true), $this->Session->read('Auth.User.username'));
			echo ' <span>|</span> ';
			echo $this->Html->link(__("Afmelden", true), array('plugin' => 0, 'controller' => 'users', 'action' => 'logout'));
		?>
		</div>

		<div class="clear">&nbsp;</div>
	</div>
</div>

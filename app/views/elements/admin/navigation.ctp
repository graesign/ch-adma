<div id="nav">
	<ul class="sf-menu">
    <li>
    <?php echo $this->Html->link(__('Dashboard', true), '/admin'); ?>
    </li>
        <li>
            <?php echo $this->Html->link(__('Upload', true), array('plugin' => null, 'controller' => 'nodes', 'action' => 'index')); ?>
            <ul>
                <li><?php echo $this->Html->link(__('Bankgegevens', true), array('plugin' => null, 'controller' => 'nodes', 'action' => 'index')); ?> </li>
                <li><?php echo $this->Html->link(__('Overige', true), array('plugin' => null, 'controller' => 'nodes', 'action' => 'index')); ?> </li>
            </ul>
        </li><!-- end upload -->
        
        <li>
            <?php echo $this->Html->link(__('Archief', true), array('plugin' => null, 'controller' => 'archief', 'action' => 'index')); ?>
            <ul>
                <li><?php echo $this->Html->link(__('Openstaande aangiftes', true), array('plugin' => null, 'controller' => 'nodes', 'action' => 'index')); ?> </li>
                <li><?php echo $this->Html->link(__('Historie', true), array('plugin' => null, 'controller' => 'nodes', 'action' => 'index')); ?> </li>
            </ul>
        </li><!-- end archief -->



        <li>
			<?php echo $this->Html->link(__('Menus', true), array('plugin' => null, 'controller' => 'menus', 'action' => 'index')); ?>
			<ul>
				<li><?php echo $this->Html->link(__('Menus', true), array('plugin' => null, 'controller' => 'menus', 'action' => 'index')); ?></li>
				<li><?php echo $this->Html->link(__('Add new', true), array('plugin' => null, 'controller' => 'menus', 'action' => 'add'), array('class' => 'separator')); ?></li>
				<?php foreach ($menus_for_admin_layout AS $m) { ?>
				<li><?php echo $this->Html->link($m['Menu']['title'], array('plugin' => null, 'controller' => 'links', 'action' => 'index', $m['Menu']['id'])); ?></li>
				<?php } ?>
			</ul>
		</li>

		

        
        <li>
			<?php echo $this->Html->link(__('Content', true), array('plugin' => null, 'controller' => 'nodes', 'action' => 'index')); ?>
			<ul>
				<li><?php echo $this->Html->link(__('List', true), array('plugin' => null, 'controller' => 'nodes', 'action' => 'index')); ?></li>
				<li>
					<?php echo $this->Html->link(__('Create', true), array('plugin' => null, 'controller' => 'nodes', 'action' => 'create')); ?>
					<ul>
						<?php foreach ($types_for_admin_layout AS $t) { ?>
						<li><?php echo $this->Html->link($t['Type']['title'], array('plugin' => null, 'controller' => 'nodes', 'action' => 'add', $t['Type']['alias'])); ?></li>
						<?php } ?>
					</ul>
				</li>
				<li><?php echo $this->Html->link(__('Content types', true), array('plugin' => null, 'controller' => 'types', 'action' => 'index')); ?></li>
				<li>
					<?php echo $this->Html->link(__('Taxonomy', true), array('plugin' => null, 'controller' => 'vocabularies', 'action' => 'index')); ?>
					<ul>
						<li><?php echo $this->Html->link(__('List', true), array('plugin' => null, 'controller' => 'vocabularies', 'action' => 'index')); ?></li>
						<li><?php echo $this->Html->link(__('Add new', true), array('plugin' => null, 'controller' => 'vocabularies', 'action' => 'add'), array('class' => 'separator')); ?></li>
						<?php foreach ($vocabularies_for_admin_layout AS $v) { ?>
						<li><?php echo $this->Html->link($v['Vocabulary']['title'], array('plugin' => null, 'controller' => 'terms', 'action' => 'index', $v['Vocabulary']['id'])); ?></li>
						<?php } ?>
					</ul>
				</li>
				<li>
					<?php echo $this->Html->link(__('Comments', true), array('plugin' => null, 'controller' => 'comments', 'action' => 'index')); ?>
					<ul>
						<li><?php echo $this->Html->link(__('Published', true), array('plugin' => null, 'controller' => 'comments', 'action' => 'index', 'filter' => 'status:1;')); ?></li>
						<li><?php echo $this->Html->link(__('Approval', true), array('plugin' => null, 'controller' => 'comments', 'action' => 'index', 'filter' => 'status:0;')); ?></li>
					</ul>
				</li>
			</ul>
		</li><!-- end content-->

		<li>
			<?php echo $this->Html->link(__('Blocks', true), array('plugin' => null, 'controller' => 'blocks', 'action' => 'index')); ?>
			<ul>
				<li><?php echo $this->Html->link(__('Blocks', true), array('plugin' => null, 'controller' => 'blocks', 'action' => 'index')); ?></li>
				<li><?php echo $this    ->Html->link(__('Regions', true), array('plugin' => null, 'controller' => 'regions', 'action' => 'index')); ?></li>
			</ul>
		</li>

		<li>
			<?php echo $this->Html->link(__('Media', true), array('plugin' => null, 'controller' => 'attachments', 'action' => 'index')); ?>
			<ul>
				<li><?php echo $this->Html->link(__('Attachments', true), array('plugin' => null, 'controller' => 'attachments', 'action' => 'index')); ?></li>
				<li><?php echo $this->Html->link(__('File Manager', true), array('plugin' => null, 'controller' => 'filemanager', 'action' => 'index')); ?></li>
			</ul>
		</li>

		<li>
			<?php echo $this->Html->link(__('Contact', true), array('plugin' => null, 'controller' => 'contacts', 'action' => 'index')); ?>
			<ul>
				<li><?php echo $this->Html->link(__('Contact', true), array('plugin' => null, 'controller' => 'contacts', 'action' => 'index')); ?></li>
				<li><?php echo $this->Html->link(__('Berichten', true), array('plugin' => null, 'controller' => 'messages', 'action' => 'index')); ?></li>
			</ul>
		</li>

		<li>
			<?php echo $this->Html->link(__('Gebruikers', true), array('plugin' => null, 'controller' => 'users', 'action' => 'index')); ?>
			<ul>
				<li><?php echo $this->Html->link(__('Gebruikers', true), array('plugin' => null, 'controller' => 'users', 'action' => 'index')); ?></li>
				<li><?php echo $this->Html->link(__('Rechten', true), array('plugin' => null, 'controller' => 'roles', 'action' => 'index')); ?></li>
				<li><?php echo $this->Html->link(__('Permissions', true), array('plugin' => 'acl', 'controller' => 'acl_permissions', 'action' => 'index')); ?></li>
			</ul>
		</li>

		<li>
			<?php echo $this->Html->link(__('Instellingen', true), array('plugin' => null, 'controller' => 'settings', 'action' => 'prefix', 'Site')); ?>
			<ul>
				<li><?php echo $this->Html->link(__('Site', true), array('plugin' => null, 'controller' => 'settings', 'action' => 'prefix', 'Site')); ?></li>
				<li><?php echo $this->Html->link(__('Meta', true), array('plugin' => null, 'controller' => 'settings', 'action' => 'prefix', 'Meta')); ?></li>
				<li><?php echo $this->Html->link(__('Reading', true), array('plugin' => null, 'controller' => 'settings', 'action' => 'prefix', 'Reading')); ?></li>
				<li><?php echo $this->Html->link(__('Writing', true), array('plugin' => null, 'controller' => 'settings', 'action' => 'prefix', 'Writing')); ?></li>
				<li><?php echo $this->Html->link(__('Comment', true), array('plugin' => null, 'controller' => 'settings', 'action' => 'prefix', 'Comment')); ?></li>
				<li><?php echo $this->Html->link(__('Service', true), array('plugin' => null, 'controller' => 'settings', 'action' => 'prefix', 'Service')); ?></li>
				<li><?php echo $this->Html->link(__('Languages', true), array('plugin' => null, 'controller' => 'languages', 'action' => 'index')); ?></li>
			</ul>
		</li>
	</ul>
</div>
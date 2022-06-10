<div class="box">
	<h2><a href="#" id="toggle-forms"><?php echo __('Email Email'); ?></a></h2>
	<div class="block" id="forms">
		<fieldset class="view">
			<legend>Adatlap</legend>
			<dl>
				<dt><?php echo __('Id'); ?></dt>
				<dd>
					<?php echo h($emailEmail['EmailEmail']['id']); ?>
					&nbsp;
				</dd>
		<dt><?php echo __('Email Template'); ?></dt>
				<dd>
			<?php echo $this->Html->link($emailEmail['EmailTemplate']['title'], array('controller' => 'email_templates', 'action' => 'view', $emailEmail['EmailTemplate']['id'])); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Name'); ?></dt>
				<dd>
					<?php echo h($emailEmail['EmailEmail']['name']); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Address'); ?></dt>
				<dd>
					<?php echo h($emailEmail['EmailEmail']['address']); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Email'); ?></dt>
				<dd>
					<?php echo h($emailEmail['EmailEmail']['email']); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Phone'); ?></dt>
				<dd>
					<?php echo h($emailEmail['EmailEmail']['phone']); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Sent'); ?></dt>
				<dd>
					<?php echo h($emailEmail['EmailEmail']['sent']); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Created'); ?></dt>
				<dd>
					<?php echo h($emailEmail['EmailEmail']['created']); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Modified'); ?></dt>
				<dd>
					<?php echo h($emailEmail['EmailEmail']['modified']); ?>
					&nbsp;
				</dd>
			</dl>
			<ul class="viewactionlist">
				<li class="viewactionlistelement"><?php echo $this->Html->link(__('Listáz'), array('action' => 'index'), array('class'=>'viewactionlink')); ?> </li>
				<li class="viewactionlistelement"><?php echo $this->Html->link(__('Módosít'), array('action' => 'edit', $emailEmail['EmailEmail']['id']), array('class'=>'viewactionlink')); ?> </li>
				<li class="viewactionlistelement"><?php echo $this->Html->link(__('Új'), array('action' => 'add'), array('class'=>'viewactionlink')); ?> </li>
				<li class="viewactionlistelement"><?php echo $this->Form->postLink(__('Töröl'), array('action' => 'delete', $emailEmail['EmailEmail']['id']), array('class'=>'viewactionlink'), __('Valóban törölni szeretné a rekordot? ID: %s', $emailEmail['EmailEmail']['id'])); ?> </li>
			</ul>
		</fieldset>
	</div>
</div>

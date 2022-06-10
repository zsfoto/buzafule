<div class="box">
	<h2><a href="#" id="toggle-forms"><?php echo __('Email Template'); ?></a></h2>
	<div class="block" id="forms">
		<fieldset class="view">
			<legend>Adatlap</legend>
			<dl>
				<dt><?php echo __('Id'); ?></dt>
				<dd>
					<?php echo h($emailTemplate['EmailTemplate']['id']); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Title'); ?></dt>
				<dd>
					<?php echo h($emailTemplate['EmailTemplate']['title']); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Body'); ?></dt>
				<dd>
					<?php echo h($emailTemplate['EmailTemplate']['body']); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Sent'); ?></dt>
				<dd>
					<?php echo h($emailTemplate['EmailTemplate']['sent']); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Email Email Count'); ?></dt>
				<dd>
					<?php echo h($emailTemplate['EmailTemplate']['email_email_count']); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Created'); ?></dt>
				<dd>
					<?php echo h($emailTemplate['EmailTemplate']['created']); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Modified'); ?></dt>
				<dd>
					<?php echo h($emailTemplate['EmailTemplate']['modified']); ?>
					&nbsp;
				</dd>
			</dl>
			<ul class="viewactionlist">
				<li class="viewactionlistelement"><?php echo $this->Html->link(__('Listáz'), array('action' => 'index'), array('class'=>'viewactionlink')); ?> </li>
				<li class="viewactionlistelement"><?php echo $this->Html->link(__('Módosít'), array('action' => 'edit', $emailTemplate['EmailTemplate']['id']), array('class'=>'viewactionlink')); ?> </li>
				<li class="viewactionlistelement"><?php echo $this->Html->link(__('Új'), array('action' => 'add'), array('class'=>'viewactionlink')); ?> </li>
				<li class="viewactionlistelement"><?php echo $this->Form->postLink(__('Töröl'), array('action' => 'delete', $emailTemplate['EmailTemplate']['id']), array('class'=>'viewactionlink'), __('Valóban törölni szeretné a rekordot? ID: %s', $emailTemplate['EmailTemplate']['id'])); ?> </li>
			</ul>
		</fieldset>
	</div>
</div>

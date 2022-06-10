<div class="box">
	<h2><a href="#" id="toggle-forms"><?php echo __('Visitor'); ?></a></h2>
	<div class="block" id="forms">
		<fieldset class="view">
			<legend>Adatlap</legend>
			<dl>
				<dt><?php echo __('Id'); ?></dt>
				<dd>
					<?php echo h($visitor['Visitor']['id']); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Ip'); ?></dt>
				<dd>
					<?php echo h($visitor['Visitor']['ip']); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Remote Host'); ?></dt>
				<dd>
					<?php echo h($visitor['Visitor']['remote_host']); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Referer'); ?></dt>
				<dd style="width: 600px;">
					<?php echo h($visitor['Visitor']['referer']); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Created'); ?></dt>
				<dd>
					<?php echo h($visitor['Visitor']['created']); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Modified'); ?></dt>
				<dd>
					<?php echo h($visitor['Visitor']['modified']); ?>
					&nbsp;
				</dd>
			</dl>
			<ul class="viewactionlist">
				<li class="viewactionlistelement"><?php echo $this->Html->link(__('Listáz'), array('action' => 'index'), array('class'=>'viewactionlink')); ?> </li>
				<li class="viewactionlistelement"><?php echo $this->Form->postLink(__('Töröl'), array('action' => 'delete', $visitor['Visitor']['id']), array('class'=>'viewactionlink'), __('Valóban törölni szeretné a rekordot? ID: %s', $visitor['Visitor']['id'])); ?> </li>
			</ul>
		</fieldset>
	</div>
</div>

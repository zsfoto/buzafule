<div class="box">
	<h2><a href="#" id="toggle-forms"><?php echo __('Text'); ?></a></h2>
	<div class="block" id="forms">
		<fieldset class="view">
			<legend>Adatlap</legend>
			<dl>
				<dt><?php echo __('Id'); ?></dt>
				<dd>
					<?php echo h($text['Text']['id']); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Name'); ?></dt>
				<dd>
					<?php echo h($text['Text']['name']); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Text'); ?></dt>
				<dd>
					<?php echo h($text['Text']['text']); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Created'); ?></dt>
				<dd>
					<?php echo h($text['Text']['created']); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Mod'); ?></dt>
				<dd>
					<?php echo h($text['Text']['mod']); ?>
					&nbsp;
				</dd>
			</dl>
			<ul class="viewactionlist">
				<li class="viewactionlistelement"><?php echo $this->Html->link(__('Listáz'), array('action' => 'index'), array('class'=>'viewactionlink')); ?> </li>
				<li class="viewactionlistelement"><?php echo $this->Html->link(__('Módosít'), array('action' => 'edit', $text['Text']['id']), array('class'=>'viewactionlink')); ?> </li>
				<li class="viewactionlistelement"><?php echo $this->Html->link(__('Új'), array('action' => 'add'), array('class'=>'viewactionlink')); ?> </li>
				<li class="viewactionlistelement"><?php echo $this->Form->postLink(__('Töröl'), array('action' => 'delete', $text['Text']['id']), array('class'=>'viewactionlink'), __('Valóban törölni szeretné a rekordot? ID: %s', $text['Text']['id'])); ?> </li>
			</ul>
		</fieldset>
	</div>
</div>

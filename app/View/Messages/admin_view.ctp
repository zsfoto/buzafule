<div class="box">
	<h2><a href="#" id="toggle-forms"><?php echo __('Üzenet'); ?></a></h2>
	<div class="block" id="forms">
		<fieldset class="view">
			<legend>Üzenet</legend>
			<dl>
				<dt><?php echo __('Id'); ?></dt>
				<dd>
					<?php echo h($message['Message']['id']); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Név:'); ?></dt>
				<dd>
					<b><?php echo h($message['Message']['name']); ?></b>
					&nbsp;
				</dd>
				<dt><?php echo __('Email'); ?></dt>
				<dd>
					<?php echo h($message['Message']['email']); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Telefon:'); ?></dt>
				<dd>
					<?php echo h($message['Message']['phone']); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Küldve:'); ?></dt>
				<dd>
					<?php echo h($message['Message']['created']); ?>
					&nbsp;
				</dd>
				
				<dt style="border: 0px solid red;"><?php echo __('Üzenet'); ?></dt>
				<dd style="margin-top: 0px; border: 1px solid lightgray; width: 90%; padding: 10px; background: #fefefe; font-size: 14px; font-weight: bold;">
					<?php echo ereg_replace("\n","<br />",h($message['Message']['message'])); ?>
					&nbsp;
				</dd>
			</dl>
			<ul class="viewactionlist">
				<li class="viewactionlistelement"><?php echo $this->Html->link(__('Listáz'), array('action' => 'index'), array('class'=>'viewactionlink')); ?> </li>
<?php if($message['Message']['readed'] == 0) {?>
				<li class="viewactionlistelement"><?php echo $this->Html->link(__('Olvasva'), array('action' => 'readed', $message['Message']['id']), array('class'=>'viewactionlink')); ?> </li>
<?php } ?>
				<!--li class="viewactionlistelement"><?php //echo $this->Html->link(__('Módosít'), array('action' => 'edit', $message['Message']['id']), array('class'=>'viewactionlink')); ?> </li-->
				<!--li class="viewactionlistelement"><?php //echo $this->Html->link(__('Új'), array('action' => 'add'), array('class'=>'viewactionlink')); ?> </li-->
				<li class="viewactionlistelement"><?php echo $this->Form->postLink(__('Töröl'), array('action' => 'delete', $message['Message']['id']), array('class'=>'viewactionlink'), __('Valóban törölni szeretné az üzenetet?', $message['Message']['id'])); ?> </li>
			</ul>
		</fieldset>
	</div>
</div>

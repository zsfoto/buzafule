<div class="box">
	<h2><a href="#" id="toggle-forms"><?php echo __('Cash On Delivery'); ?></a></h2>
	<div class="block" id="forms">
		<fieldset class="view">
			<legend>Adatlap</legend>
			<dl>
				<dt><?php echo __('Id'); ?></dt>
				<dd>
					<?php echo h($cashOnDelivery['CashOnDelivery']['id']); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Price From'); ?></dt>
				<dd>
					<?php echo h($cashOnDelivery['CashOnDelivery']['price_from']); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Price To'); ?></dt>
				<dd>
					<?php echo h($cashOnDelivery['CashOnDelivery']['price_to']); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('CashOnDelivery'); ?></dt>
				<dd>
					<?php echo h($cashOnDelivery['CashOnDelivery']['cashOnDelivery']); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Created'); ?></dt>
				<dd>
					<?php echo h($cashOnDelivery['CashOnDelivery']['created']); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Modified'); ?></dt>
				<dd>
					<?php echo h($cashOnDelivery['CashOnDelivery']['modified']); ?>
					&nbsp;
				</dd>
			</dl>
			<ul class="viewactionlist">
				<li class="viewactionlistelement"><?php echo $this->Html->link(__('Listáz'), array('action' => 'index'), array('class'=>'viewactionlink')); ?> </li>
				<li class="viewactionlistelement"><?php echo $this->Html->link(__('Módosít'), array('action' => 'edit', $cashOnDelivery['CashOnDelivery']['id']), array('class'=>'viewactionlink')); ?> </li>
				<li class="viewactionlistelement"><?php echo $this->Html->link(__('Új'), array('action' => 'add'), array('class'=>'viewactionlink')); ?> </li>
				<li class="viewactionlistelement"><?php echo $this->Form->postLink(__('Töröl'), array('action' => 'delete', $cashOnDelivery['CashOnDelivery']['id']), array('class'=>'viewactionlink'), __('Valóban törölni szeretné a rekordot? ID: %s', $cashOnDelivery['CashOnDelivery']['id'])); ?> </li>
			</ul>
		</fieldset>
	</div>
</div>

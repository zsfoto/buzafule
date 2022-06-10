<div class="box">
	<h2><a href="#" id="toggle-forms"><?php echo __('Fotó'); ?></a></h2>
	<div class="block" id="forms">
		<fieldset class="login">
			<legend><?php echo __('Módosítás'); ?></legend>
			<?php echo $this->Form->create('Photo'); ?>
				<p><?php echo $this->Form->input('id', array('label'=>': ','div'=>false, 'disabled'=>false )); ?></p>
				<p><?php echo $this->Form->input('name', array('label'=>'Fotó címe: ','div'=>false, 'disabled'=>false )); ?></p>
				<p><?php echo $this->Form->input('position', array('label'=>'Pozíció: ','div'=>false, 'disabled'=>false )); ?></p>
				<p><?php echo $this->Form->end(__('Mentés'),array('class'=>'confirm button')); ?></p>
		</fieldset>
		<p><?php echo $this->Html->link(__('Mégsem'), array('action' => 'index'),array('class'=>'confirm button cancel')); ?></p>
	</div>
</div>



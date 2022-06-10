<div class="box">
	<h2><a href="#" id="toggle-forms"><?php echo __('Text'); ?></a></h2>
	<div class="block" id="forms">
		<fieldset class="login">
			<legend><?php echo __('Új rekord'); ?></legend>
			<?php echo $this->Form->create('Text'); ?>
				<p><?php echo $this->Form->input('name', array('label'=>'Címe: ','div'=>false, 'disabled'=>false )); ?></p>
				<p><?php echo $this->Form->input('text', array('label'=>'Szöveg: ','div'=>false, 'disabled'=>false )); ?></p>
				<p><?php echo $this->Form->end(__('Mentés'),array('class'=>'confirm button')); ?></p>
		</fieldset>
		<p><?php echo $this->Html->link(__('Mégsem'), array('action' => 'index'),array('class'=>'confirm button cancel')); ?></p>
	</div>
</div>



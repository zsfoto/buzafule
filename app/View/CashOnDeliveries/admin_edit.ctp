<div class="box">
	<h2><a href="#" id="toggle-forms"><?php echo __('Utánvét módosítása'); ?></a></h2>
	<div class="block" id="forms">
		<fieldset class="login">
			<legend><?php echo __('Utánvét módosítása'); ?></legend>
			<?php echo $this->Form->create('CashOnDelivery'); ?>
				<p><?php echo $this->Form->input('id', array('label'=>': ','div'=>false, 'disabled'=>false )); ?></p>
				<p><?php echo $this->Form->input('price_from', array('label'=>'Ár tól: ','div'=>false, 'disabled'=>false )); ?></p>
				<p><?php echo $this->Form->input('price_to', array('label'=>'Ár ig: ','div'=>false, 'disabled'=>false )); ?></p>
				<p><?php echo $this->Form->input('cashOnDelivery', array('label'=>'Utánvét összege: ','div'=>false, 'disabled'=>false )); ?></p>
				<p><?php echo $this->Form->end(__('Mentés'),array('class'=>'confirm button')); ?></p>
		</fieldset>
		<p><?php echo $this->Html->link(__('Mégsem'), array('action' => 'index'),array('class'=>'confirm button cancel')); ?></p>
	</div>
</div>



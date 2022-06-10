<div class="box">
	<h2><a href="#" id="toggle-forms"><?php echo __('Email Email'); ?></a></h2>
	<div class="block" id="forms">
		<fieldset class="login">
			<legend><?php echo __('Módosítás'); ?></legend>
			<?php echo $this->Form->create('EmailEmail'); ?>
				<p><?php echo $this->Form->input('email_template_id', array('label'=>': ','div'=>false, 'disabled'=>false )); ?></p>
				<p><?php echo $this->Form->input('name', array('label'=>': ','div'=>false, 'disabled'=>false )); ?></p>
				<p><?php echo $this->Form->input('address', array('label'=>': ','div'=>false, 'disabled'=>false )); ?></p>
				<p><?php echo $this->Form->input('email', array('label'=>': ','div'=>false, 'disabled'=>false )); ?></p>
				<p><?php echo $this->Form->input('phone', array('label'=>': ','div'=>false, 'disabled'=>false )); ?></p>
				<p><?php echo $this->Form->input('sent', array('label'=>': ','div'=>false, 'disabled'=>false )); ?></p>



				<p><?php echo $this->Form->end(__('Mentés'),array('class'=>'confirm button')); ?></p>
		</fieldset>
		<p><?php echo $this->Html->link(__('Mégsem'), array('action' => 'index'),array('class'=>'confirm button cancel')); ?></p>
	</div>
</div>



<div class="box">
	<h2><a href="#" id="toggle-forms"><?php echo __('Message'); ?></a></h2>
	<div class="block" id="forms">
		<fieldset class="login">
			<legend><?php echo __('Módosítás'); ?></legend>
			<?php echo $this->Form->create('Message'); ?>
				<p><?php echo $this->Form->input('id', array('label'=>': ','div'=>false, 'disabled'=>false )); ?></p>
				<p><?php echo $this->Form->input('name', array('label'=>'Neve: ','div'=>false, 'disabled'=>false )); ?></p>
				<p><?php echo $this->Form->input('email', array('label'=>'Email: ','div'=>false, 'disabled'=>false )); ?></p>
				<p><?php echo $this->Form->input('phone', array('label'=>'Telefon: ','div'=>false, 'disabled'=>false )); ?></p>
				<p><?php echo $this->Form->input('message', array('label'=>'Message: ','div'=>false, 'disabled'=>false )); ?></p>
				<p><?php echo $this->Form->end(__('Mentés'),array('class'=>'confirm button')); ?></p>
		</fieldset>
		<p><?php echo $this->Html->link(__('Mégsem'), array('action' => 'index'),array('class'=>'confirm button cancel')); ?></p>
	</div>
</div>



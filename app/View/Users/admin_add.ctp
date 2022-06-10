<div class="box">
	<h2><a href="#" id="toggle-forms"><?php echo __('User'); ?></a></h2>
	<div class="block" id="forms">
		<fieldset class="login">
			<legend><?php echo __('Új adminisztrátor'); ?></legend>
			<?php echo $this->Form->create('User'); ?>
				<p><?php echo $this->Form->input('username', array('label'=>'Azonosító: ','div'=>false, 'disabled'=>false )); ?></p>
				<p><?php echo $this->Form->input('password', array('label'=>'Jelszó: ','div'=>false, 'disabled'=>false )); ?></p>
				<p><?php echo $this->Form->input('fullname', array('label'=>'Teljes neve: ','div'=>false, 'disabled'=>false )); ?></p>
				<p><?php echo $this->Form->input('email', array('label'=>'Email: ','div'=>false, 'disabled'=>false )); ?></p>
				<p><?php echo $this->Form->end(__('Mentés'),array('class'=>'confirm button')); ?></p>
		</fieldset>
		<p><?php echo $this->Html->link(__('Mégsem'), array('action' => 'index'),array('class'=>'confirm button cancel')); ?></p>
	</div>
</div>



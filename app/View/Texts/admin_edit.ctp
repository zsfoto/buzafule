<div class="box">
	<h2><a href="#" id="toggle-forms"><?php echo __('Text'); ?></a></h2>
	<div class="block" id="forms">
		<fieldset class="login">
			<legend><?php echo __('Módosítás'); ?></legend>
			<?php echo $this->Form->create('Text'); ?>
				<p><?php echo $this->Form->input('id', array('label'=>': ','div'=>false, 'disabled'=>false )); ?></p>
				<p><?php echo $this->Form->input('name', array('label'=>'Cím: ','div'=>false, 'disabled'=>false )); ?></p>
				<?php if($email){ ?>
					<p><?php echo $this->Form->input('subject', array('label'=>'Email tárgy: ','div'=>false, 'disabled'=>false )); ?></p>
				<?php } ?>
				<p><?php echo $this->Form->input('text', array('label'=>'Szöveg: ','div'=>false, 'disabled'=>false, 'style'=>'width: 600px; height: 500px;' )); ?></p>
				<p><?php echo $this->Form->end(__('Mentés'),array('class'=>'confirm button')); ?></p>
		</fieldset>
		<p><?php echo $this->Html->link(__('Mégsem'), array('action' => 'index'),array('class'=>'confirm button cancel')); ?></p>
	</div>
</div>

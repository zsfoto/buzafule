<div class="box">
	<h2><a href="#" id="toggle-forms"><?php echo __('Adatkezelési nyilatkozat'); ?></a></h2>
	<div class="block" id="forms">
		<fieldset class="login">
			<legend><?php echo __('Szerkesztés'); ?></legend>
			<?php echo $this->Form->create('About'); ?>
				<h3>Adatkezelési nyilatkozat</h3>
				<p><?php echo $this->Form->input('id', array('label'=>': ','div'=>false, 'disabled'=>false )); ?></p>
				<p><?php echo $this->Form->input('link2_text', array('label'=>'Link szöveg: ','div'=>false, 'disabled'=>false )); ?></p>				
				<p><?php echo $this->Form->input('privacy', array('label'=>'Szöveg: ','div'=>false, 'disabled'=>false, 'style'=>'width: 600px; height: 600px;', 'type'=>'textarea'  )); ?></p>
				<p><?php echo $this->Form->end(__('Mentés'),array('class'=>'confirm button')); ?></p>
		</fieldset>

	</div>
</div>



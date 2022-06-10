<div class="box">
	<h2><a href="#" id="toggle-forms"><?php echo __('Kiszállítás'); ?></a></h2>
	<div class="block" id="forms">
		<fieldset class="login">
			<legend><?php echo __('Módosítás'); ?></legend>
			<?php echo $this->Form->create('About'); ?>
				<p><?php echo $this->Form->input('id', array('label'=>': ','div'=>false, 'disabled'=>false )); ?></p>
				<h3>Kiszállítás</h3>
				<p><?php echo $this->Form->input('delivery_title', array('label'=>'Kiszállítás alcím: ','div'=>false, 'disabled'=>false )); ?></p>
				<p><?php echo $this->Form->input('delivery_text', array('label'=>'Kiszállítás szöveg: ','div'=>false, 'disabled'=>false, 'style'=>'height: 300px;', 'type'=>'textarea'   )); ?></p>
				<hr style="border: 1px solid gray;" />
				
				<p><?php echo $this->Form->end(__('Mentés'),array('class'=>'confirm button')); ?></p>
		</fieldset>

	</div>
</div>



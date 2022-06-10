<div class="box">
	<h2><a href="#" id="toggle-forms"><?php echo __('Búzafűlé'); ?></a></h2>
	<div class="block" id="forms">
		<fieldset class="login">
			<legend><?php echo __('Módosítás'); ?></legend>
			<?php echo $this->Form->create('About'); ?>
				<p><?php echo $this->Form->input('id', array('label'=>': ','div'=>false, 'disabled'=>false )); ?></p>
				<h3>Búzafűlé</h3>
				<p><?php echo $this->Form->input('wgj_subtitle', array('label'=>'Búzafűlé alcím: ','div'=>false, 'disabled'=>false )); ?></p>
				<p><?php echo $this->Form->input('wgj_subtext', array('label'=>'Búzafűlé szöveg: ','div'=>false, 'disabled'=>false, 'style'=>'height: 500px;', 'type'=>'textarea'  )); ?></p>
				<hr style="border: 1px solid gray;" />
				
				<p><?php echo $this->Form->end(__('Mentés'),array('class'=>'confirm button')); ?></p>
		</fieldset>

	</div>
</div>



<style>
	fieldset.login p label {
		width: 10%;
	}
	fieldset.login input[type="submit"] {
		margin-left: 13%;
	}	
</style>
<div class="box">
	<h2><a href="#" id="toggle-forms"><?php echo __('Email Email'); ?></a></h2>
	<div class="block" id="forms">
		<fieldset class="login">
			<legend><?php echo __('Módosítás'); ?></legend>
			<?php echo $this->Form->create('EmailEmail'); ?>
				<p><?php echo $this->Form->input('id', array('label'=>false,'div'=>false, 'disabled'=>false )); ?></p>
				<p><?php echo $this->Form->input('name', array('label'=>'Név: ','div'=>false, 'disabled'=>false )); ?></p>
				<p><?php echo $this->Form->input('address', array('label'=>'Cím: ','div'=>false, 'disabled'=>false )); ?></p>
				<p><?php echo $this->Form->input('email', array('label'=>'Email: ','div'=>false, 'disabled'=>false )); ?></p>
				<p><?php echo $this->Form->input('phone', array('label'=>'Telefon: ','div'=>false, 'disabled'=>false )); ?></p>
				<p><?php echo $this->Form->end(__('Mentés'),array('class'=>'confirm button')); ?></p>
			</form>
		</fieldset>
	</div>
</div>

<div class="box">
	<h2><a href="#" id="toggle-forms"><?php echo __('Order'); ?></a></h2>
	<div class="block" id="forms">
		<fieldset class="login">
			<legend><?php echo __('Új rekord'); ?></legend>
			<?php echo $this->Form->create('Order'); ?>
				<p><?php echo $this->Form->input('name', array('label'=>'Neve: ','div'=>false, 'disabled'=>false )); ?></p>
				<p><?php echo $this->Form->input('email', array('label'=>'Email: ','div'=>false, 'disabled'=>false )); ?></p>
				<p><?php echo $this->Form->input('phone', array('label'=>'Telefon: ','div'=>false, 'disabled'=>false )); ?></p>
				<p><?php echo $this->Form->input('postcode', array('label'=>'Ir.szám: ','div'=>false, 'disabled'=>false )); ?></p>
				<p><?php echo $this->Form->input('city', array('label'=>'Település: ','div'=>false, 'disabled'=>false )); ?></p>
				<p><?php echo $this->Form->input('address', array('label'=>'Cím: ','div'=>false, 'disabled'=>false )); ?></p>
				<p><?php echo $this->Form->input('message', array('label'=>'Üzenet: ','div'=>false, 'disabled'=>false )); ?></p>
				<p><?php echo $this->Form->input('quantity', array('label'=>'Mennyiség: ','div'=>false, 'disabled'=>false )); ?></p>
				<p><?php echo $this->Form->end(__('Mentés'),array('class'=>'confirm button')); ?></p>
		</fieldset>
		<p><?php echo $this->Html->link(__('Mégsem'), array('action' => 'index'),array('class'=>'confirm button cancel')); ?></p>
	</div>
</div>



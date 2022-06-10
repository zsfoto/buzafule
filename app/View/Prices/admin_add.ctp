<div class="box">
	<h2><a href="#" id="toggle-forms"><?php echo __('Ár'); ?></a></h2>
	<div class="block" id="forms">
		<fieldset class="login">
			<legend><?php echo __('Új rekord'); ?></legend>
			<?php echo $this->Form->create('Price'); ?>
			<p><?php echo $this->Form->input('quantity', array('label'=>'Menyiség: ','div'=>false, 'disabled'=>false, 'style'=>'width: 150px;' )); ?></p>
			<p><?php echo $this->Form->input('price', array('label'=>'Ár: ','div'=>false, 'disabled'=>false, 'style'=>'width: 200px;'  )); ?></p>
			<p><?php echo $this->Form->input('discount', array('label'=>'Megtakarítás: ','div'=>false, 'disabled'=>false, 'style'=>'width: 200px;'  )); ?></p>
			<p><?php echo $this->Form->input('delivery_price', array('label'=>'Posta ktg.: ','div'=>false, 'disabled'=>false, 'style'=>'width: 200px;'  )); ?></p>
			<p><?php echo $this->Form->end(__('Mentés'),array('class'=>'confirm button')); ?></p>
		</fieldset>
		<p><?php echo $this->Html->link(__('Mégsem'), array('action' => 'index'),array('class'=>'confirm button cancel')); ?></p>
	</div>
</div>



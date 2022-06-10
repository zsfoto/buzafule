<div class="box">
	<h2><a href="#" id="toggle-forms"><?php echo __('Fotó'); ?></a></h2>
	<div class="block" id="forms">
		<fieldset class="login">
			<legend><?php echo __('Új fotó feltöltése (<font color="red">Kiskép: 188x132px</font>)'); ?></legend>
			<?php echo $this->Form->create('Photo', array('action' => 'add', "enctype" => "multipart/form-data")); ?>
			<p><?php echo $this->Form->input('name', array('label'=>'Fotó címe: ','div'=>false, 'disabled'=>false )); ?></p>
			<p><?php echo $this->Form->input('position', array('label'=>'Pozíció: ','div'=>false, 'disabled'=>false, 'value'=>'500' )); ?></p>
			<p><?php echo $this->Form->input('fileSmall',array('label'=>'KIS kép: ','type'=>'file', 'style'=>'width: 400px;', 'div'=>false, 'disabled'=>false )); ?></p>
			<p><?php echo $this->Form->input('fileBig',array('label'=>'NAGY kép: ','type'=>'file', 'style'=>'width: 400px;', 'div'=>false, 'disabled'=>false )); ?></p>
			<p><?php echo $this->Form->end(__('Mentés'),array('class'=>'confirm button')); ?></p>
		</fieldset>
		<p><?php echo $this->Html->link(__('Mégsem'), array('action' => 'index'),array('class'=>'confirm button cancel')); ?></p>
	</div>
</div>



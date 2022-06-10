<style>
fieldset.login p label {
    float: left;
    line-height: 2em;
    margin-right: 3%;
    text-align: right;
    width: 10%;
}
fieldset.login input[type="submit"] {
    margin-left: 0%;
}
</style>
<div class="box">
	<h2><a href="#" id="toggle-forms"><?php echo __('Email Template'); ?></a></h2>
	
	<div class="block" id="forms">
		<fieldset class="login">
			<legend><?php echo __('Módosítás'); ?></legend>
			<?php echo $this->Form->create('EmailTemplate'); ?>
				<p><?php echo $this->Form->input('title', array('label'=>'Tárgy mező: ','div'=>false, 'disabled'=>false )); ?></p>
				<p><?php echo $this->Form->input('body', array('label'=>'Tartalom: ','div'=>false, 'disabled'=>false )); ?></p>
				<p style="font-size: 18px;">Használható mező(k): <b>{{nev}}</b>: címzett neve, <b>{{cim}}</b>: teljes cím</p>
				<p><?php echo $this->Form->end(__('Sablon mentése'),array('class'=>'confirm button')); ?></p>
			</form>
		</fieldset>
		<p><?php echo $this->Html->link(__('Mégsem'), array('action' => 'index'),array('class'=>'confirm button cancel')); ?></p>
	</div>
</div>



<div class="box">
	<h2><a href="#" id="toggle-forms"><?php echo __('User'); ?></a></h2>
	<div class="block" id="forms">
		<fieldset class="login">
			<legend><?php echo __('Adminisztrátor módosítása'); ?></legend>
			<?php echo $this->Form->create('User'); ?>
				<?php echo $this->Form->input('id'); ?>
				<h1 style="color:red; text-align: center;">Ha nem változtatsz jelszót, akkor ne mentsd el!!!</h1>
				<h5 style="color:red; text-align: center;">Akkor a <b><u>Mégsem</u></b> gombbal lépj vissza, vagy a menüben navigálj máshova!</h5>
				<br>
				<?php /*
				<p><?php echo $this->Form->input('username', array('label'=>'Azonosító: ','div'=>false, 'disabled'=>false )); ?></p>
				*/ ?>
				<p><?php echo $this->Form->input('password', array('label'=>'Jelszó: ','div'=>false, 'disabled'=>false )); ?></p>
				<?php /*
				<p><?php echo $this->Form->input('fullname', array('label'=>'Teljes neve: ','div'=>false, 'disabled'=>false )); ?></p>
				<p><?php echo $this->Form->input('email', array('label'=>'Email: ','div'=>false, 'disabled'=>false )); ?></p>
				*/ ?>
				<p><?php echo $this->Form->end(__('Mentés'),array('class'=>'confirm button')); ?></p>
		</fieldset>
		<p><?php echo $this->Html->link(__('Mégsem'), '/admin',array('class'=>'confirm button cancel')); ?></p>
	</div>
</div>

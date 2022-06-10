<div class="box">
	<h2><a href="#" id="toggle-forms"><?php echo __('Kiszállítás'); ?></a></h2>
	<div class="block" id="forms">
		<fieldset class="login">
			<legend><?php echo __('Módosítás'); ?></legend>
			<?php echo $this->Form->create('About'); ?>
				<p><?php echo $this->Form->input('id', array('label'=>': ','div'=>false, 'disabled'=>false )); ?></p>
				<h3>Postára adás email</h3>
				<p><?php echo $this->Form->input('email_shiping_subject', array('label'=>'Email tárgysora: ','div'=>false, 'disabled'=>false )); ?></p>
				<p style="font-size: 16px;">Használható mezők: <b>{neve}, {email}, {telefon}, {irszam}, {telepules}, {utca}, {megjegyzes}, {mennyiseg}, {ertek}, {megtakaritas}, {postakoltseg}, {fizetendo}
</b></p>
				<p><?php echo $this->Form->input('email_shiping_title', array('label'=>'Megszólítás: ','div'=>false, 'disabled'=>false )); ?></p>
				<p><?php echo $this->Form->input('email_shiping', array('label'=>'Email szövege: ','div'=>false, 'disabled'=>false, 'style'=>'height: 300px;', 'type'=>'textarea'  )); ?></p>

				<p><?php echo $this->Form->end(__('Mentés'),array('class'=>'confirm button')); ?></p>
		</fieldset>

	</div>
</div>



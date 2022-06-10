<div class="box">
	<h2><a href="#" id="toggle-forms"><?php echo __('Kapcsolat'); ?></a></h2>
	<div class="block" id="forms">
		<fieldset class="login">
			<legend><?php echo __('Módosítás'); ?></legend>
			<?php echo $this->Form->create('About'); ?>
				<p><?php echo $this->Form->input('id', array('label'=>': ','div'=>false, 'disabled'=>false )); ?></p>
				<h3>Kapcsolat panel üzenet visszaigazoló email</h3>
				<p><?php echo $this->Form->input('email_message_subject', array('label'=>'Kapcsolat email tárgy: ','div'=>false, 'disabled'=>false )); ?><br />
				<b><font color="green">(Kapcsoalt panelon küldött üzenet email-ben is visszaigazolódik a feladónak, amennyiben megadta email címét. Ha nem, akkor is megy (másolat) email a cég gazdájának, azaz neked. Ez a mező ennek az emailnak a Tárgy mezője.)</font></b></p>				
				
				<p style="font-size: 16px;">Használható mezők: <b>{neve}, {email}, {telefon}, {uzenet}</b></p>
				<p><?php echo $this->Form->input('email_message_title', array('label'=>'Megszólítás: ','div'=>false, 'disabled'=>false )); ?></p>
				<p><?php echo $this->Form->input('email_message', array('label'=>'Email szövege: ','div'=>false, 'disabled'=>false, 'style'=>'height: 300px;', 'type'=>'textarea' )); ?></p>
				
				<p><?php echo $this->Form->end(__('Mentés'),array('class'=>'confirm button')); ?></p>
		</fieldset>

	</div>
</div>



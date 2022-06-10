<div class="box">
	<h2><a href="#" id="toggle-forms"><?php echo __('Emlékeztető email küldés'); ?></a></h2>
	<div class="block" id="forms">
		<fieldset class="login">
			<legend><?php echo __('Módosítás'); ?></legend>
			<?php echo $this->Form->create('Order'); ?>
				<p><?php echo $this->Form->input('id', array('label'=>': ','div'=>false, 'disabled'=>false )); ?></p>
				<p><label>Megrendelve:</label><span style="font-size: 14px; font-weight: bold;"><?php echo $created; ?></span></p>
				<p><label>Nap:</label><span style="font-size: 14px; font-weight: bold;"><?php echo $days; ?></span></p>
				<p><label>Esedékes:</label><span style="font-size: 14px; font-weight: bold;"><?php echo $duedate; ?></span></p>
				<p><?php echo $this->Form->input('due_date',array('label'=>'Dátum-tól: ','dateFormat'=>'YMD','minYear'=>date('Y')-1,'maxYear'=>date('Y')+2,'div'=>false, 'disabled'=>false )); ?></p>
				<p><?php echo $this->Form->input('sent_email', array('label'=>'Email elküldve: ','div'=>false, 'disabled'=>false )); ?></p>
				<p><?php echo $this->Form->end(__('Mentés'),array('class'=>'confirm button')); ?></p>
		</fieldset>
		<p><?php echo $this->Html->link(__('Mégsem'), array('action' => 'index'),array('class'=>'confirm button cancel')); ?></p>
	</div>
	<font color="red"><b>FIGYELEM!!</b></font><br />A módosítás minden adatot módosít, nem számol automatikusan, lehetőséget adva a telefonon egyeztetett adatok totális módosítására.<br />
	A módosító adatlap az adatok mentésekor nem számol semmit automatikusan! Csakis a beírt adatokat menti.<br />
	
</div>



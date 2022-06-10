<div class="box">
	<h2><a href="#" id="toggle-forms"><?php echo __('Alapadatok'); ?></a></h2>
	<div class="block" id="forms">
		<fieldset class="login">
			<legend><?php echo __('Módosítás'); ?></legend>
			<?php echo $this->Form->create('About'); ?>
				<p><?php echo $this->Form->input('id', array('label'=>': ','div'=>false, 'disabled'=>false )); ?></p>
				<h3>Termékadatok</h3>
				<p><?php echo $this->Form->input('order_qty', array('label'=>'Mennyiség fölötti szöveg: ','div'=>false, 'disabled'=>false )); ?></p>
				<p><?php echo $this->Form->input('price', array('label'=>'Egységár (Ft): ','div'=>false, 'disabled'=>false )); ?></p>
				<!--p><?php echo $this->Form->input('deliveryprice', array('label'=>'Szállítási ktg. (Ft): ','div'=>false, 'disabled'=>false )); ?></p-->
				<p><?php echo $this->Form->input('cash_on_delivery', array('label'=>'Utánvét díja. a max listaérték felett [%]: ','div'=>false, 'disabled'=>false )); ?></p>
				<p><?php echo $this->Form->input('order_confirm_message', array('label'=>'Megreősítő üzenet: ','div'=>false, 'disabled'=>false )); ?></p>
				<p style="font-size: 14px; text-align: center;">Megerősítő üzenet cimkéi: <b>{mennyiseg}, {ertek}, {postakoltseg}, {fizetendo}</b></p>
				<h3>Cégadatok</h3>
				<p><?php echo $this->Form->input('company_name', array('label'=>'Cég neve: ','div'=>false, 'disabled'=>false )); ?></p>
				<b><font color="green">(A Cégneve az Email-néál a feladó neve)</font></b></p>
				<p><?php echo $this->Form->input('company_email', array('label'=>'Cég Email: ','div'=>false, 'disabled'=>false )); ?></p>

				<p><?php echo $this->Form->input('companydetails', array('label'=>'Cégadatok: ','div'=>false, 'disabled'=>false, 'style'=>'height: 100px;', 'txpe'=>'teytarea' )); ?><br />
				<b><font color="red">(A Cégadatok a "Megrendelés visszaigazoláa", a "Postára adás" valamint a "Kapcsolat" email végére is automatikusan odaíródik. Így a teljes nevet itt ismét meg kell adni.)</font></b></p>
				<hr style="border: 1px solid gray;" />

				<h3>Rendelés cimkék</h3>
				<p><?php echo $this->Form->input('order_name', array('label'=>'Név: ','div'=>false, 'disabled'=>false )); ?></p>
				<p><?php echo $this->Form->input('order_email', array('label'=>'E-mail: ','div'=>false, 'disabled'=>false )); ?></p>
				<p><?php echo $this->Form->input('order_phone', array('label'=>'Telefon: ','div'=>false, 'disabled'=>false )); ?></p>
				<p><?php echo $this->Form->input('order_postcode', array('label'=>'Ir.szám: ','div'=>false, 'disabled'=>false )); ?></p>
				<p><?php echo $this->Form->input('order_city', array('label'=>'Település: ','div'=>false, 'disabled'=>false )); ?></p>
				<p><?php echo $this->Form->input('order_address', array('label'=>'Cím: ','div'=>false, 'disabled'=>false )); ?></p>
				<p><?php echo $this->Form->input('order_message', array('label'=>'Megjegyzés: ','div'=>false, 'disabled'=>false )); ?></p>
				<hr style="border: 1px solid gray;" />
				<h3>Kapcsolat cimkék</h3>
				<p><?php echo $this->Form->input('contact_title', array('label'=>'Kapcsolat alcím: ','div'=>false, 'disabled'=>false )); ?></p>
				<p><?php echo $this->Form->input('contact_text', array('label'=>'Kapcsolat szöveg: ','div'=>false, 'disabled'=>false )); ?></p>
				<p><?php echo $this->Form->input('contact_name', array('label'=>'Cimke, Név: ','div'=>false, 'disabled'=>false )); ?></p>
				<p><?php echo $this->Form->input('contact_email', array('label'=>'Cimke, Email: ','div'=>false, 'disabled'=>false )); ?></p>
				<p><?php echo $this->Form->input('contact_phone', array('label'=>'Cimke, Telefon: ','div'=>false, 'disabled'=>false )); ?></p>
				<p><?php echo $this->Form->input('contact_message', array('label'=>'Cimke, Üzenet: ','div'=>false, 'disabled'=>false )); ?></p>
				<hr style="border: 1px solid gray;" />

				<p><?php echo $this->Form->end(__('Mentés'),array('class'=>'confirm button')); ?></p>
		</fieldset>

	</div>
</div>



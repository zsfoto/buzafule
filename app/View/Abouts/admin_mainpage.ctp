<div class="box">
	<h2><a href="#" id="toggle-forms"><?php echo __('Alapadatok'); ?></a></h2>
	<div class="block" id="forms">
		<fieldset class="login">
			<legend><?php echo __('Módosítás'); ?></legend>
			<?php echo $this->Form->create('About'); ?>
				<p><?php echo $this->Form->input('id', array('label'=>': ','div'=>false, 'disabled'=>false )); ?></p>
				<h3>Alapadatok, alapszövegek</h3>
				<p><?php echo $this->Form->input('pagetitle', array('label'=>'Oldal főcím: ','div'=>false, 'disabled'=>false )); ?></p>
				<p><?php echo $this->Form->input('motto', array('label'=>'Mottó: ','div'=>false, 'disabled'=>false )); ?></p>
				<p><?php echo $this->Form->input('menu1', array('label'=>'1. menü: ','div'=>false, 'disabled'=>false )); ?></p>
				<p><?php echo $this->Form->input('menu2', array('label'=>'2. menü: ','div'=>false, 'disabled'=>false )); ?></p>
				<p><?php echo $this->Form->input('menu3', array('label'=>'3. menü: ','div'=>false, 'disabled'=>false )); ?></p>
				<p><?php echo $this->Form->input('menu4', array('label'=>'4. menü: ','div'=>false, 'disabled'=>false )); ?></p>
				<p><?php echo $this->Form->input('menu5', array('label'=>'5. menü: ','div'=>false, 'disabled'=>false )); ?></p>
				<p><?php echo $this->Form->input('menu6', array('label'=>'6. menü: ','div'=>false, 'disabled'=>false )); ?></p>
				<!--p><?php //echo $this->Form->input('menu7', array('label'=>'7. menü: ','div'=>false, 'disabled'=>false )); ?></p-->
				<hr />
				<!--p><?php //echo $this->Form->input('link1_text', array('label'=>'Szerz.felt.: ','div'=>false, 'disabled'=>false )); ?></p>
				<p><?php //echo $this->Form->input('link2_text', array('label'=>'Adatkez.ny.: ','div'=>false, 'disabled'=>false )); ?></p-->
				<p><?php echo $this->Form->input('copyright_text', array('label'=>'Copyright szöveg: ','div'=>false, 'disabled'=>false )); ?></p>
				<hr style="border: 1px solid gray;" />
				<h3>Főoldal szövegek</h3>
				<!--p><?php //echo $this->Form->input('mainpage_title', array('label'=>'Cím: ','div'=>false, 'disabled'=>false )); ?></p-->
				<p><?php echo $this->Form->input('mainpage_text', array('label'=>'Főoldal szöveg: ','div'=>false, 'disabled'=>false, 'type'=>'textarea' )); ?></p>
				<!--p><?php //echo $this->Form->input('mainpage_title1', array('label'=>'Főoldal cím: ','div'=>false, 'disabled'=>false )); ?></p-->
				<p><?php echo $this->Form->input('mainpage_text1', array('label'=>'Búzafűlé szöveg: ','div'=>false, 'disabled'=>false, 'type'=>'textarea' )); ?></p>
				<!--p><?php //echo $this->Form->input('mainpage_title2', array('label'=>'Búzafűlé cím: ','div'=>false, 'disabled'=>false )); ?></p-->
				<p><?php echo $this->Form->input('mainpage_text2', array('label'=>'Rendelés szöveg: ','div'=>false, 'disabled'=>false, 'type'=>'textarea' )); ?></p>
				<!--p><?php //echo $this->Form->input('mainpage_title3', array('label'=>'Rendelés cím: ','div'=>false, 'disabled'=>false )); ?></p-->
				<p><?php echo $this->Form->input('mainpage_text3', array('label'=>'Kiszállítás szöveg: ','div'=>false, 'disabled'=>false, 'type'=>'textarea' )); ?></p>
				<!--p><?php //echo $this->Form->input('mainpage_title4', array('label'=>'Kiszállítás cím: ','div'=>false, 'disabled'=>false )); ?></p-->
				<!--p><?php //echo $this->Form->input('mainpage_text4', array('label'=>'Galéria szöveg: ','div'=>false, 'disabled'=>false )); ?></p-->
				<!--p><?php //echo $this->Form->input('mainpage_title5', array('label'=>'Galéria cím: ','div'=>false, 'disabled'=>false )); ?></p-->
				<p><?php echo $this->Form->input('mainpage_text5', array('label'=>'Kapcsolat szöveg: ','div'=>false, 'disabled'=>false, 'type'=>'textarea' )); ?></p>
				<!--p><?php //echo $this->Form->input('mainpage_title6', array('label'=>'Kapcsolat cím: ','div'=>false, 'disabled'=>false )); ?></p-->
				<!--p><?php //echo $this->Form->input('mainpage_text6', array('label'=>'Kapcsolat szöveg: ','div'=>false, 'disabled'=>false )); ?></p-->
				<hr style="border: 1px solid gray;" />
				
				<p><?php echo $this->Form->end(__('Mentés'),array('class'=>'confirm button')); ?></p>
		</fieldset>
		
	</div>
</div>



<div class="box">
	<h2><a href="#" id="toggle-forms"><?php echo __('Alapadatok'); ?></a></h2>
	<div class="block" id="forms">
		<fieldset class="login">
			<legend><?php echo __('Módosítás'); ?></legend>
			<?php echo $this->Form->create('About'); ?>
				<h3>Közösségi média, Facebook:</h3>
				<p align="center"><img src="/images/ogimage1.jpg" style="margin: 0 auto; text-align: center; width: 250px;"/></p>
				<p><?php echo $this->Form->input('id'); ?></p>
				<p><?php echo $this->Form->input('og_title', array('label'=>'Megosztás cím: ','div'=>false, 'disabled'=>false )); ?></p>
				<p><?php echo $this->Form->input('og_description', array('label'=>'Megosztás szöveg: ','div'=>false, 'disabled'=>false )); ?></p>
				
				<h3>Google meta tagok:</h3>
				<p><?php echo $this->Form->input('page_title', array('label'=>'Oldal cím: ','div'=>false, 'disabled'=>false )); ?></p>
				<p><?php echo $this->Form->input('meta_description', array('label'=>'Rövid oldal leírás: ','div'=>false, 'disabled'=>false )); ?></p>
				<p><?php echo $this->Form->input('meta_keywords', array('label'=>'Kulcs szavak: ','div'=>false, 'disabled'=>false )); ?></p>
				
				<h3>Közösségi média URL-ek:</h3>
				<p><?php echo $this->Form->input('facebook_url', array('label'=>'Facebook url: ','div'=>false, 'disabled'=>false )); ?></p>
				<p><?php echo $this->Form->input('youtube_url', array('label'=>'Youtube url: ','div'=>false, 'disabled'=>false )); ?></p>
				
				<p><?php echo $this->Form->end(__('Mentés'),array('class'=>'confirm button')); ?></p>
		</fieldset>
		
	</div>
</div>



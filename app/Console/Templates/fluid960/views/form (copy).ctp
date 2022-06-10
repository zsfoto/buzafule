<div class="box">
	<h2><a href="#" id="toggle-forms"><?php printf("<?php echo __('%s'); ?>", $singularHumanName); ?></a></h2>
	<div class="block" id="forms">
		<fieldset class="akarmi">
<?php
				$actionText = "Módosítás";
				if($action == 'add') {
					$actionText = "Új rekord";
				}
?>
			<legend><?php printf("<?php echo __('%s'); ?>", $actionText); ?></legend>
			<?php echo "<?php echo \$this->Form->create('{$modelClass}'); ?>\n	"; ?>
<?php

		foreach ($fields as $field) {
			//###############################xx ITT valahol jó lenne megtudni a $field típusát, pl intger, date, varchar, ...  ########################//
			if($field != 'created' && $field != 'modified' && $field != 'password' && $field != 'salt'){
				if (strpos($action, 'add') !== false && $field == $primaryKey) {
					continue;
				} elseif (!in_array($field, array('created', 'modified', 'updated'))) {
					echo "\t\t\t\t<p><?php echo \$this->Form->input('{$field}', array('label'=>': ','div'=>false, 'disabled'=>false )); ?></p>\n";
				}
			}
		}
		if (!empty($associations['hasAndBelongsToMany'])) {
			foreach ($associations['hasAndBelongsToMany'] as $assocName => $assocData) {
				echo "\t\t\t\t<p>echo \$this->Form->input('{$assocName}', array('label'=>': ','div'=>false, 'disabled'=>false )); ?></p>\n";
			}
		}
?>

<?php

?>


				<?php echo "<p><?php echo \$this->Form->end(__('Mentés'),array('class'=>'confirm button')); ?></p>\n"; ?>
		</fieldset>
		<?php echo "<p><?php echo \$this->Html->link(__('Mégsem'), array('action' => 'index'),array('class'=>'confirm button cancel')); ?></p>\n"; ?>
	</div>
</div>



<div class="box">
	<h2><a href="#" id="toggle-forms"><?php echo "<?php echo __('{$singularHumanName}'); ?>"; ?></a></h2>
	<div class="block" id="forms">
		<fieldset class="view">
			<legend><?php echo __('Adatlap'); ?></legend>
			<dl>
<?php
foreach ($fields as $field) {
	$isKey = false;
	if (!empty($associations['belongsTo'])) {
		foreach ($associations['belongsTo'] as $alias => $details) {
			if ($field === $details['foreignKey']) {
				$isKey = true;
				echo "\t\t<dt><?php echo __('" . Inflector::humanize(Inflector::underscore($alias)) . "'); ?></dt>\n";
				echo "\t\t\t\t<dd>\n\t\t\t<?php echo \$this->Html->link(\${$singularVar}['{$alias}']['{$details['displayField']}'], array('controller' => '{$details['controller']}', 'action' => 'view', \${$singularVar}['{$alias}']['{$details['primaryKey']}'])); ?>\n\t\t\t\t\t&nbsp;\n\t\t\t\t</dd>\n";
				break;
			}
		}
	}
	if ($isKey !== true) {
		echo "\t\t\t\t<dt><?php echo __('" . Inflector::humanize($field) . "'); ?></dt>\n";
		echo "\t\t\t\t<dd>\n\t\t\t\t\t<?php echo h(\${$singularVar}['{$modelClass}']['{$field}']); ?>\n\t\t\t\t\t&nbsp;\n\t\t\t\t</dd>\n";
	}
}
?>
			</dl>
			<ul class="viewactionlist">
<?php
	echo "\t\t\t\t<li class=\"viewactionlistelement\"><?php echo \$this->Html->link(__('Listáz'), array('action' => 'index'), array('class'=>'viewactionlink')); ?> </li>\n";
	echo "\t\t\t\t<li class=\"viewactionlistelement\"><?php echo \$this->Html->link(__('Módosít'), array('action' => 'edit', \${$singularVar}['{$modelClass}']['{$primaryKey}']), array('class'=>'viewactionlink')); ?> </li>\n";
	echo "\t\t\t\t<li class=\"viewactionlistelement\"><?php echo \$this->Html->link(__('Új'), array('action' => 'add'), array('class'=>'viewactionlink')); ?> </li>\n";
	echo "\t\t\t\t<li class=\"viewactionlistelement\"><?php echo \$this->Form->postLink(__('Töröl'), array('action' => 'delete', \${$singularVar}['{$modelClass}']['{$primaryKey}']), array('class'=>'viewactionlink'), __('Valóban törölni szeretné a rekordot? ID: %s', \${$singularVar}['{$modelClass}']['{$primaryKey}'])); ?> </li>\n";
?>
			</ul>
		</fieldset>
	</div>
</div>

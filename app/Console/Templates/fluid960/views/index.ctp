<?php 
//Megszámoltatom, hány mező van (created, modified, Actions) már 3 mező. Innen indulunk a számolással
$fieldCount = 3;
foreach ($fields as $field):
	$fieldCount++;
endforeach; 
?>
<div class="box" style="margin-bottom: 5px;">
	<h2><a href="#" id="toggle-tables"><?php echo $pluralVar; ?></a></h2>
	<div class="block" id="tables">

		<table>
			<thead>
				<tr>
					<th colspan="<?php echo $fieldCount; ?>" class="table-head">
<?php 
						echo "<?php echo \$this->Html->link( \$this->Html->image('plus.png',array('style'=>'width: 12px; margin: 0px 5px -2px -5px;', 'title'=>'Új rekord hozzáadása')), array('action' => 'add'), array('escape'=>false)); ?>";
						echo "<?php echo __('{$pluralHumanName}'); ?>"; 
?>
					</th>
				</tr>
				<tr>
				<?php foreach ($fields as $field): ?>
					<?php if($field != 'created' && $field != 'modified' && $field != 'id' && $field != 'password' && $field != 'salt'){ ?>
					<th><?php echo "<?php echo \$this->Paginator->sort('{$field}',''); ?>"; ?></th>
					<?php } ?>
					<?php endforeach; ?>
					<?php echo "<th style=\"width: 110px; text-align: center;\"><?php echo \$this->Paginator->sort('created','Létrehozva'); ?></th>\n"; ?>
					<?php echo "<th style=\"width: 110px; text-align: center;\"><?php echo \$this->Paginator->sort('modified','Módosítva'); ?></th>\n"; ?>
					<?php echo "<th style=\"text-align: center;\">Műveletek</th>\n"; ?>
				</tr>
			</thead>

			<tbody>
			
				<?php
				echo "<?php \$i = 0; ?>\n";
				echo "<?php foreach (\${$pluralVar} as \${$singularVar}): ?>\n";
				echo "<?php if(\$i++ % 2 == 0){ \$class = ' class=\"odd\"'; }else{\$class=\"\";} ?>\n";
				
				echo "\t<tr<?php echo \$class; ?>>\n";
					foreach ($fields as $field) {
						$isKey = false;
						if($field != 'id' && $field != 'password' && $field != 'salt'){
							if (!empty($associations['belongsTo'])) {
								foreach ($associations['belongsTo'] as $alias => $details) {
									if ($field === $details['foreignKey']) {
										$isKey = true;
										echo "\t\t<th>\n\t\t\t<?php echo \$this->Html->link(\${$singularVar}['{$alias}']['{$details['displayField']}'], array('controller' => '{$details['controller']}', 'action' => 'view', \${$singularVar}['{$alias}']['{$details['primaryKey']}'])); ?>\n\t\t</th>\n";
										break;
									}
								}
							}
							if ($isKey !== true && $field != 'id') {
								echo "\t\t<td><?php echo h(\${$singularVar}['{$modelClass}']['{$field}']); ?>&nbsp;</td>\n";
							}
						}
					}

					echo "\t\t<td class=\"actions\">\n";
					echo "\t\t\t<?php echo \$this->Html->link( \$this->Html->image('b_view.png',array('width'=>'16', 'title'=>'Adatlap megtekintése')), array('action' => 'view', \${$singularVar}['{$modelClass}']['{$primaryKey}']), array('escape'=>false)); ?>\n";
					echo "\t\t\t<?php echo \$this->Html->link( \$this->Html->image('b_edit.png',array('width'=>'16', 'title'=>'Adatok módosítása')), array('action' => 'edit', \${$singularVar}['{$modelClass}']['{$primaryKey}']), array('escape'=>false)); ?>\n";
					echo "\t\t\t<?php echo \$this->Form->postLink( \$this->Html->image('b_drop.png',array('width'=>'16', 'title'=>'Rekord törlése')), array('action' => 'delete', \${$singularVar}['{$modelClass}']['{$primaryKey}']), array('escape'=>false), __('Valóban törölni szeretné a rekordot? ID: %s', \${$singularVar}['{$modelClass}']['{$primaryKey}'])); ?>\n";
					echo "\t\t</td>\n";
				echo "\t</tr>\n";

				echo "<?php endforeach; ?>\n";
				?>

			</tbody>
			
			<tfoot>
				<tr class="total">
					<th colspan="<?php echo $fieldCount; ?>">
						<?php 
							echo "<?php
								echo \$this->Paginator->counter(array(
									'format' => __('<b>{:page}</b> / <b>{:pages}</b>. oldal')
								));
							?>\n"; 
						?>
					</th>
				</tr>
			</tfoot>
		</table>
	</div>
</div>
<?php echo "<?php echo \$this->element('paginator_bottom'); ?>\n"; ?>

<?php /* ?>
<div class="actions">
	<h3><?php echo "<?php echo __('Actions'); ?>"; ?></h3>
	<ul>
		<li><?php echo "<?php echo \$this->Html->link(__('New " . $singularHumanName . "'), array('action' => 'add')); ?>"; ?></li>
<?php
	$done = array();
	foreach ($associations as $type => $data) {
		// echo "\n";
		// echo "Type: ".$type." belongsTo\n";
		// echo "Data: ";
		// print_r($data);
		// echo "\n";
		
		foreach ($data as $alias => $details) {
		
			// echo "\nAlias: Exam ".$alias;
			// echo "\nDetails: ";
			// print_r($details);
			// echo "\n";
		
			if ($details['controller'] != $this->name && !in_array($details['controller'], $done)) {
				echo "\t\t<li><?php echo \$this->Html->link(__('List " . Inflector::humanize($details['controller']) . "'), array('controller' => '{$details['controller']}', 'action' => 'index')); ?> </li>\n";
				echo "\t\t<li><?php echo \$this->Html->link(__('New " . Inflector::humanize(Inflector::underscore($alias)) . "'), array('controller' => '{$details['controller']}', 'action' => 'add')); ?> </li>\n";
				$done[] = $details['controller'];
			}
		}
	}
?>
	</ul>
</div>
<?php */ ?>
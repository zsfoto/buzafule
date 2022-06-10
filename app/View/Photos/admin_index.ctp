<div class="box" style="margin-bottom: 5px;">
	<h2><a href="#" id="toggle-tables">Galéria</a></h2>
	<div class="block" id="tables">

		<table>
			<thead>
				<tr>
					<th colspan="7" class="table-head">
					<?php echo $this->Html->link( $this->Html->image('plus.png',array('style'=>'width: 12px; margin: 0px 5px -2px -5px;', 'title'=>'Új rekord hozzáadása')), array('action' => 'add'), array('escape'=>false)); ?><?php echo __('Fotók'); ?></th>
				</tr>
				<tr>
					<th style="width: 110px; text-align: center;"><?php echo $this->Paginator->sort('position','Poz.'); ?></th>
					<th style="width: 110px; text-align: center;"><?php echo $this->Paginator->sort('id','Kép'); ?></th>
					<th><?php echo $this->Paginator->sort('name','Fotó címe'); ?></th>
					<th style="width: 110px; text-align: center;"><?php echo $this->Paginator->sort('created','Létrehozva'); ?></th>
					<th style="width: 110px; text-align: center;"><?php echo $this->Paginator->sort('modified','Módosítva'); ?></th>
					<th style="text-align: center;">Műveletek</th>
				</tr>
			</thead>

			<tbody>
			
				<?php $i = 0; ?>
<?php foreach ($photos as $photo): ?>
<?php if($i++ % 2 == 0){ $class = ' class="odd"'; }else{$class="";} ?>
	<tr<?php echo $class; ?>>
		<td style="text-align: center; vertical-align: middle;width: 10px; border-right: 1px solid gray; font-size: 18px; font-weight: bold;"><?php echo h($photo['Photo']['position']); ?></td>
		<td style="text-align: center; vertical-align: middle; border-right: 1px solid gray; font-size: 18px; font-weight: bold; width: 120px;"><img src="/img/photos/<?php echo h($photo['Photo']['id']); ?>_small.jpg" style="width: 110px;" />&nbsp;</td>
		<td style="text-align: left; vertical-align: middle; border-right: 1px solid gray; font-size: 18px; font-weight: bold;"><?php echo h($photo['Photo']['name']); ?>&nbsp;</td>
		<td><?php echo h($photo['Photo']['created']); ?>&nbsp;</td>
		<td><?php echo h($photo['Photo']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php //echo $this->Html->link( $this->Html->image('b_view.png',array('width'=>'16', 'title'=>'Adatlap megtekintése')), array('action' => 'view', $photo['Photo']['id']), array('escape'=>false)); ?>
			<?php echo $this->Html->link( $this->Html->image('b_edit.png',array('width'=>'16', 'title'=>'Adatok módosítása')), array('action' => 'edit', $photo['Photo']['id']), array('escape'=>false)); ?>
			<?php echo $this->Form->postLink( $this->Html->image('b_drop.png',array('width'=>'16', 'title'=>'Rekord törlése')), array('action' => 'delete', $photo['Photo']['id']), array('escape'=>false), __('Valóban törölni szeretné a rekordot? ID: %s', $photo['Photo']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>

			</tbody>
			
			<tfoot>
				<tr class="total">
					<th colspan="7">
						<?php
								echo $this->Paginator->counter(array(
									'format' => __('<b>{:page}</b> / <b>{:pages}</b>. oldal')
								));
							?>
					</th>
				</tr>
			</tfoot>
		</table>
	</div>
</div>
<?php echo $this->element('paginator_bottom'); ?>


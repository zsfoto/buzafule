<div class="box" style="margin-bottom: 5px;">
	<h2><a href="#" id="toggle-tables">Szövegek</a></h2>
	<div class="block" id="tables">

		<table>
			<thead>
				<tr>
					<th colspan="8" class="table-head">
						<?php echo $this->Html->link( $this->Html->image('plus.png',array('style'=>'width: 12px; margin: 0px 5px -2px -5px;', 'title'=>'Új rekord hozzáadása')), array('action' => 'add'), array('escape'=>false)); ?><?php echo __('Texts'); ?>					
					</th>
				</tr>
				<tr>
					<th><?php echo $this->Paginator->sort('id','ID'); ?></th>
					<th><?php echo $this->Paginator->sort('name','Cím'); ?></th>
					<th style="text-align: center;">Műveletek</th>
				</tr>
			</thead>

			<tbody>
			
				<?php $i = 0; ?>
<?php foreach ($texts as $text): ?>
<?php if($i++ % 2 == 0){ $class = ' class="odd"'; }else{$class="";} ?>
	<tr<?php echo $class; ?>>
		<td style="width: 40px; text-align: center;"><?php echo h($text['Text']['id']); ?>&nbsp;</td>
		<td><?php echo h($text['Text']['name']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link( $this->Html->image('b_view.png',array('width'=>'16', 'title'=>'Adatlap megtekintése')), array('action' => 'view', $text['Text']['id']), array('escape'=>false)); ?>
			<?php echo $this->Html->link( $this->Html->image('b_edit.png',array('width'=>'16', 'title'=>'Adatok módosítása')), array('action' => 'edit', $text['Text']['id']), array('escape'=>false)); ?>
			<?php echo $this->Form->postLink( $this->Html->image('b_drop.png',array('width'=>'16', 'title'=>'Rekord törlése')), array('action' => 'delete', $text['Text']['id']), array('escape'=>false), __('Valóban törölni szeretné a rekordot? ID: %s', $text['Text']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>

			</tbody>
			
			<tfoot>
				<tr class="total">
					<th colspan="8">
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


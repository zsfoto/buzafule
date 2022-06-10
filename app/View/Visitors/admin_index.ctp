<style>
	td{
		font-weight: bold;
		font-size: 12px;
	}
</style>
<div class="box" style="margin-bottom: 5px;">
	<h2><a href="#" id="toggle-tables">Látogatók</a></h2>
	<div class="block" id="tables">

		<table>
			<thead>
				<tr>
					<th colspan="9" class="table-head">
					<?php echo __('Látogatók'); ?>
				</th>
				</tr>
				<tr>
					<th style="width: 100px; text-align: left;"><?php echo $this->Paginator->sort('ip','IP'); ?></th>
					<th style="width: 300px; text-align: left;"><?php echo $this->Paginator->sort('remote_host','Host (ha megállapítható)'); ?></th>
					<th style="text-align: left;"><?php echo $this->Paginator->sort('referer','Honnan (ha megállapítható)'); ?></th>
					<th style="width: 120px; text-align: center;"><?php echo $this->Paginator->sort('created','Létrehozva'); ?></th>
					<th style="width: 80px; text-align: center;">Műveletek</th>
				</tr>
			</thead>

			<tbody>
			
				<?php $i = 0; ?>
<?php foreach ($visitors as $visitor): ?>
<?php if($i++ % 2 == 0){ $class = ' class="odd"'; }else{$class="";} ?>
	<tr<?php echo $class; ?>>
		<td><?php echo h($visitor['Visitor']['ip']); ?>&nbsp;</td>
		<td><?php echo h($visitor['Visitor']['remote_host']); ?>&nbsp;</td>
		<td><?php echo h(substr($visitor['Visitor']['referer'],0,50)); ?>&nbsp;</td>
		<td><?php echo h($visitor['Visitor']['created']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link( $this->Html->image('b_view.png',array('width'=>'16', 'title'=>'Adatlap megtekintése')), array('action' => 'view', $visitor['Visitor']['id']), array('escape'=>false)); ?>
			<?php //echo $this->Html->link( $this->Html->image('b_edit.png',array('width'=>'16', 'title'=>'Adatok módosítása')), array('action' => 'edit', $visitor['Visitor']['id']), array('escape'=>false)); ?>
			<?php echo $this->Form->postLink( $this->Html->image('b_drop.png',array('width'=>'16', 'title'=>'Rekord törlése')), array('action' => 'delete', $visitor['Visitor']['id']), array('escape'=>false), __('Valóban törölni szeretné a rekordot? ID: %s', $visitor['Visitor']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>

			</tbody>
			
			<tfoot>
				<tr class="total">
					<th colspan="9">
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


<div class="box" style="margin-bottom: 5px;">
	<h2><a href="#" id="toggle-tables">Utánvétek</a></h2>
	<div class="block" id="tables">

		<table>
			<thead>
				<tr>
					<th colspan="9" class="table-head">
						<?php echo $this->Html->link( $this->Html->image('plus.png',array('style'=>'width: 12px; margin: 0px 5px -2px -5px;', 'title'=>'Új rekord hozzáadása')), array('action' => 'add'), array('escape'=>false)); ?><?php echo __('Új utánvét hozzűáadása'); ?>
					</th>
				</tr>
				<tr>
					<th><?php echo $this->Paginator->sort('price_from','Ár-tól'); ?></th>
					<th><?php echo $this->Paginator->sort('price_to','Ár-ig'); ?></th>
					<th><?php echo $this->Paginator->sort('cashOnDelivery','Összeg'); ?></th>
					<th style="width: 110px; text-align: center;"><?php echo $this->Paginator->sort('modified','Módosítva'); ?></th>
					<th style="text-align: center;">Műveletek</th>
				</tr>
			</thead>

			<tbody>
			
				<?php $i = 0; ?>
<?php foreach ($cashOnDeliveries as $cashOnDelivery): ?>
<?php if($i++ % 2 == 0){ $class = ' class="odd"'; }else{$class="";} ?>
				<tr<?php echo $class; ?>>
					<td><?php echo h($cashOnDelivery['CashOnDelivery']['price_from']); ?>&nbsp;</td>
					<td><?php echo h($cashOnDelivery['CashOnDelivery']['price_to']); ?>&nbsp;</td>
					<td><?php echo h($cashOnDelivery['CashOnDelivery']['cashOnDelivery']); ?>&nbsp;</td>
					<td><?php echo h($cashOnDelivery['CashOnDelivery']['modified']); ?>&nbsp;</td>
					<td class="actions">
						<?php echo $this->Html->link( $this->Html->image('b_view.png',array('width'=>'16', 'title'=>'Adatlap megtekintése')), array('action' => 'view', $cashOnDelivery['CashOnDelivery']['id']), array('escape'=>false)); ?>
						<?php echo $this->Html->link( $this->Html->image('b_edit.png',array('width'=>'16', 'title'=>'Adatok módosítása')), array('action' => 'edit', $cashOnDelivery['CashOnDelivery']['id']), array('escape'=>false)); ?>
						<?php echo $this->Form->postLink( $this->Html->image('b_drop.png',array('width'=>'16', 'title'=>'Rekord törlése')), array('action' => 'delete', $cashOnDelivery['CashOnDelivery']['id']), array('escape'=>false), __('Valóban törölni szeretné a rekordot? ID: %s', $cashOnDelivery['CashOnDelivery']['id'])); ?>
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


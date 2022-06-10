<div class="box" style="margin-bottom: 5px;">
	<h2><a href="#" id="toggle-tables">Mennyiség és ártábla</a></h2>
	<div class="block" id="tables">

		<table>
			<thead>
				<tr>
					<th colspan="8" class="table-head">
						<?php echo $this->Html->link( $this->Html->image('plus.png',array('style'=>'width: 12px; margin: 0px 5px -2px -5px;', 'title'=>'Új rekord hozzáadása')), array('action' => 'add'), array('escape'=>false)); ?><?php echo __('Mennyiség és ártábla'); ?>
					</th>
				</tr>
				<tr>
					<th style="width: 100px;"><?php echo $this->Paginator->sort('quantity','Mennyiség'); ?></th>
					<th style="width: 100px;"><?php echo $this->Paginator->sort('price','Ár'); ?></th>
					<th style="width: 100px;"><?php echo $this->Paginator->sort('discount','Megtakarítás'); ?></th>
					<th style="width: 100px;"><?php echo $this->Paginator->sort('delivery_price','Posta ktg.'); ?></th>
					<th>Módosít</th>
					<th>&nbsp;</th>
					<th style="width: 110px; text-align: center;"><?php echo $this->Paginator->sort('created','Létrehozva'); ?></th>
					<th style="width: 110px; text-align: center;"><?php echo $this->Paginator->sort('modified','Módosítva'); ?></th>
					<th style="text-align: center;">Műveletek</th>
				</tr>
			</thead>

			<tbody>

				<?php $i = 0; ?>
<?php foreach ($prices as $price): ?>
<?php if($i++ % 2 == 0){ $class = ' class="odd"'; }else{$class="";} ?>
	<tr<?php echo $class; ?>>
		<td style="text-align: center;"><?php echo h($price['Price']['quantity']); ?>&nbsp;</td>
		<td style="width: 100px; font-weight: bold; text-align: right;"><?php echo h($price['Price']['price']); ?>&nbsp;Ft</td>
		<td style="width: 100px; color: red; font-weight: bold; text-align: right;"><?php echo h($price['Price']['discount']); ?>&nbsp;Ft</td>
		<td style="width: 100px; color: red; font-weight: bold; text-align: right;"><?php echo h($price['Price']['delivery_price']); ?>&nbsp;Ft</td>
		<td style="width: 50px; color: red; font-weight: bold; text-align: center;">
			<?php echo $this->Html->link( $this->Html->image('b_edit.png',array('width'=>'16', 'title'=>'Adatok módosítása')), array('action' => 'edit', $price['Price']['id']), array('escape'=>false)); ?>
		</td>
		<td>&nbsp;</td>
		<td><?php echo h($price['Price']['created']); ?>&nbsp;</td>
		<td><?php echo h($price['Price']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php //echo $this->Html->link( $this->Html->image('b_view.png',array('width'=>'16', 'title'=>'Adatlap megtekintése')), array('action' => 'view', $price['Price']['id']), array('escape'=>false)); ?>
			<?php echo $this->Html->link( $this->Html->image('b_edit.png',array('width'=>'16', 'title'=>'Adatok módosítása')), array('action' => 'edit', $price['Price']['id']), array('escape'=>false)); ?>
			<?php echo $this->Form->postLink( $this->Html->image('b_drop.png',array('width'=>'16', 'title'=>'Rekord törlése')), array('action' => 'delete', $price['Price']['id']), array('escape'=>false), __('Valóban törölni szeretné a rekordot? ID: %s', $price['Price']['id'])); ?>
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


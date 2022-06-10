<div class="box" style="margin-bottom: 5px;">
	<h2><a href="#" id="toggle-tables">Adminisztrátorok</a></h2>
	<div class="block" id="tables">

		<table>
			<thead>
				<tr>
					<th colspan="15" class="table-head"><?php echo $this->Html->link( $this->Html->image('plus.png',array('style'=>'width: 12px; margin: 0px 5px -2px -5px;', 'title'=>'Új rekord hozzáadása')), array('action' => 'add'), array('escape'=>false)); ?><?php echo __('Users'); ?></th>
				</tr>
				<tr>
					<th><?php echo $this->Paginator->sort('username','Azonosító'); ?></th>
					<th><?php echo $this->Paginator->sort('fullname','Teljes neve'); ?></th>
					<th><?php echo $this->Paginator->sort('email','Email'); ?></th>
					<th style="width: 110px; text-align: center;"><?php echo $this->Paginator->sort('created','Létrehozva'); ?></th>
					<th style="width: 110px; text-align: center;"><?php echo $this->Paginator->sort('modified','Módosítva'); ?></th>
					<th style="text-align: center;">Műveletek</th>
				</tr>
			</thead>

			<tbody>

				<?php $i = 0; ?>
<?php foreach ($users as $user): ?>
<?php if($i++ % 2 == 0){ $class = ' class="odd"'; }else{$class="";} ?>
	<tr<?php echo $class; ?>>
		<td><?php echo h($user['User']['username']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['fullname']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['email']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['created']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php //echo $this->Html->link( $this->Html->image('b_view.png',array('width'=>'16', 'title'=>'Adatlap megtekintése')), array('action' => 'view', $user['User']['id']), array('escape'=>false)); ?>
			<?php echo $this->Html->link( $this->Html->image('b_edit.png',array('width'=>'16', 'title'=>'Adatok módosítása')), array('action' => 'edit', $user['User']['id']), array('escape'=>false)); ?>
			<?php //echo $this->Form->postLink( $this->Html->image('b_drop.png',array('width'=>'16', 'title'=>'Rekord törlése')), array('action' => 'delete', $user['User']['id']), array('escape'=>false), __('Valóban törölni szeretné a(z) %s rekordot?', $user['User']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>

			</tbody>

			<tfoot>
				<tr class="total">
					<th colspan="15">
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


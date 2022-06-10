<div class="box" style="margin-bottom: 5px;">
	<h2><a href="#" id="toggle-tables">Üzenetek</a></h2>
	<div class="block" id="tables">

		<table>
			<thead>
				<tr>
					<th colspan="10" class="table-head">
<?php //echo $this->Html->link( $this->Html->image('plus.png',array('style'=>'width: 12px; margin: 0px 5px -2px -5px;', 'title'=>'Új rekord hozzáadása')), array('action' => 'add'), array('escape'=>false)); ?><?php echo __('Üzenetek'); ?>					</th>
				</tr>
				<tr>
					<th style="width: 30px; padding-left: 20px; padding-right: -10px;"><?php echo $this->Paginator->sort('readed','Olvasva'); ?></th>
					<th><?php echo $this->Paginator->sort('name','Feladó'); ?></th>
					<th><?php echo $this->Paginator->sort('email','Email'); ?></th>
					<th><?php echo $this->Paginator->sort('phone','Telefon'); ?></th>
					<th><?php echo $this->Paginator->sort('message','Üzenet (részlet)'); ?></th>
					<th style="width: 110px; text-align: center;"><?php echo $this->Paginator->sort('created','Küldve'); ?></th>
					<th style="text-align: center;">Műveletek</th>
				</tr>
			</thead>

			<tbody>
			
<?php $i = 0; ?>
<?php foreach ($messages as $message): ?>
<?php if($i++ % 2 == 0){ $class = ' class="odd"'; }else{$class="";} ?>
	<tr<?php echo $class; ?>>
		<td align="center" style="text-align: center;">
			<?php if( $message['Message']['readed'] == 1){ ?>
				<img src="/img/success.png" height="18" style="height: 20px; margin-top: 2px; margin-bottom: -4px;" />			
			<?php }else{ ?>
				<img src="/img/warning.png" height="18" style="height: 20px; margin-top: 2px; margin-bottom: -4px;" />			
			<?php } ?>&nbsp;
		</td>
	
		<td><b><?php echo h($message['Message']['name']); ?></b>&nbsp;</td>
		<td><?php echo h($message['Message']['email']); ?>&nbsp;</td>
		<td><?php echo h($message['Message']['phone']); ?>&nbsp;</td>
		<td><b><?php echo substr(ereg_replace("\n","<br />",$message['Message']['message']),0,50); ?></b><b>...</b>&nbsp;</td>
		<td><?php echo h($message['Message']['created']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link( $this->Html->image('b_view.png',array('width'=>'16', 'title'=>'Adatlap megtekintése')), array('action' => 'view', $message['Message']['id']), array('escape'=>false)); ?>
			<?php //echo $this->Html->link( $this->Html->image('b_edit.png',array('width'=>'16', 'title'=>'Adatok módosítása')), array('action' => 'edit', $message['Message']['id']), array('escape'=>false)); ?>
			<?php //echo $this->Form->postLink( $this->Html->image('b_drop.png',array('width'=>'16', 'title'=>'Rekord törlése')), array('action' => 'delete', $message['Message']['id']), array('escape'=>false), __('Valóban törölni szeretné a rekordot? ID: %s', $message['Message']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>

			</tbody>
			
			<tfoot>
				<tr class="total">
					<th colspan="10">
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


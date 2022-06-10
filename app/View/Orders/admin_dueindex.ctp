<style>
	td{
		vertical-align: middle;
	}
</style>
<?php if($orders){ ?>
<p style="margin-bottom: 15px;"><?php 
	echo
		$this->Html->link(__('Emlékeztető Email küldése az alábbi címzetteknek'), 
		array('action' => 'dueemail'),
		array(
			'style'=>'background-color: green; color: yellow; border: 3px solid black; font-weight: bold; font-size: 14px;',
			'class'=>'confirm button cancel',
			'escape'=>false),
			'Emlékeztető Email küldése a listán látható címzetteknek'
		); 
?></p>
<?php } ?>
<div class="box" style="margin-bottom: 5px;">

	<h2><a href="#" id="toggle-tables">Esedékes megrendelések</a></h2>
	<div class="block" id="tables">
		
		<table>
			<thead>
				<tr>
					<th colspan="14" class="table-head">
						<?php echo __('Esedékes megrendelések'); ?>
					</th>
				</tr>
				<tr>
					<th><?php echo $this->Paginator->sort('name','Név'); ?></th>
					<th style="text-align: center;"><?php echo $this->Paginator->sort('quantity','Adag'); ?></th>
					<th style="text-align: center; width: 100px; text-align: center;"><?php echo $this->Paginator->sort('created','Megrendelve'); ?></th>
					<th style="text-align: center; width: 100px;"><?php echo $this->Paginator->sort('due_date','Esedékes email'); ?></th>
					
					<!--th style="text-align: center;">Műveletek</th-->
				</tr>
			</thead>

			<tbody>
			
				<?php $i = 0; ?>
<?php foreach ($orders as $order): ?>
<?php if($i++ % 2 == 0){ $class = ' class="odd"'; }else{$class="";} ?>
	<tr<?php echo $class; ?>>
		<td>
			<span style="text-align: left; font-size: 14px; font-weight: bold;">
				<?php echo h($order['Order']['name']); ?>
			</span>&nbsp; <i>(<?php echo h($order['Order']['email']); ?>)</i><br />
			<?php echo h($order['Order']['postcode']); ?> <?php echo h($order['Order']['city']); ?>,&nbsp;<?php echo h($order['Order']['address']); ?>&nbsp;- &nbsp;Tel.: <b><?php echo h($order['Order']['phone']); ?></b>
		</td>
	
		<td style="text-align: center; padding-right: 20px; font-size: 16px; font-weight: bold;">
			<?php echo h($order['Order']['quantity']." / ".($order['Order']['quantity']*28)." napi"); ?>
		</td>
	
		<td style="text-align: center; padding-right: 20px; font-size: 16px; font-weight: bold;">
			<?php echo h(ereg_replace("-",".",substr($order['Order']['created'],0,10))); ?>
		</td>
	
		<td style="text-align: center; padding-right: 20px; font-size: 16px; font-weight: bold;">
			<span style="color:red;"><?php echo h($order['Order']['due_date']); ?></span>
			<?php 
				// $ordered_date = strtotime( substr($order['Order']['created'],0,10) );
				// $due_date = strtotime($order['Order']['due_date']);
				// $days = ($due_date - $ordered_date) ;
				// $days =  (integer) ($days / 86400);
				
				// echo $days;
				
				// echo strtotime($order['Order']['due_date']);
			
			?>
		</td>
			
		<!--td class="actions">
			<?php //echo $this->Html->link( $this->Html->image('b_view.png',array('width'=>'16', 'title'=>'Adatlap megtekintése')), array('action' => 'view', $order['Order']['id']), array('escape'=>false)); ?>
			<?php //echo $this->Html->link( $this->Html->image('b_edit.png',array('width'=>'16', 'title'=>'Adatok módosítása')), array('action' => 'edit', $order['Order']['id']), array('escape'=>false)); ?>
			<?php //echo $this->Html->link( $this->Html->image('email.png',array('width'=>'16', 'title'=>'Esedékes email')) , array('action' => 'editduedate', $order['Order']['id']), array('escape'=>false)); ?>
			
			<?php 
			if($order['Order']['delivered'] == 1){
				//echo $this->Form->postLink( $this->Html->image('b_drop.png',array('width'=>'16', 'title'=>'Rekord törlése')), array('action' => 'delete', $order['Order']['id']), array('escape'=>false), __('Valóban törölni szeretné a rekordot? ID: %s', $order['Order']['id']));
			}
			?>
			
		</td-->
	</tr>
<?php endforeach; ?>

			</tbody>
			
			<tfoot>
				<tr class="total">
					<th colspan="14">
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


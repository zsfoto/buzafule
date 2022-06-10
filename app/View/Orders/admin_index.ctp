<style>
td{
	vertical-align: middle;
}
</style>
<div class="box" style="margin-bottom: 5px;">
	<h2><a href="#" id="toggle-tables">Megrendelések</a></h2>
	<div class="block" id="tables">

		<table>
			<thead>
				<tr>
					<th colspan="16" class="table-head">
<?php //echo $this->Html->link( $this->Html->image('plus.png',array('style'=>'width: 12px; margin: 0px 5px -2px -5px;', 'title'=>'Új rekord hozzáadása')), array('action' => 'add'), array('escape'=>false)); ?><?php echo __('Megrendelések'); ?>					</th>
				</tr>
				<tr>
					<th style="width: 30px; padding-left: 20px; padding-right: -10px;"><?php echo $this->Paginator->sort('delivered','Ok'); ?></th>
					<th><?php echo $this->Paginator->sort('name','Név'); ?></th>
					<th><?php echo $this->Paginator->sort('quantity','Mennyiség'); ?></th>
					<th><?php echo $this->Paginator->sort('value','Érték'); ?></th>
					<th><?php echo $this->Paginator->sort('deiveryprice','Posta'); ?></th>
					<th style="text-align: center;"><?php echo $this->Paginator->sort('payment_amount','Utánvét'); ?></th>
					<th><?php echo $this->Paginator->sort('totalvalue','Fizetendő'); ?></th>
					<th><?php echo $this->Paginator->sort('discount','Megtak.'); ?></th>
					<th><?php echo $this->Paginator->sort('phone','Telefon'); ?></th>
					<th><?php echo $this->Paginator->sort('postcode','Ir.sz.'); ?></th>
					<th><?php echo $this->Paginator->sort('city','Város'); ?></th>
					<th><?php echo $this->Paginator->sort('address','Cím'); ?></th>
					<th style="text-align: center;"><?php echo $this->Paginator->sort('id','Megr.szám'); ?></th>
					<th style="width: 110px; text-align: left;">
						<?php echo $this->Paginator->sort('created','Megrendelve'); ?>
						<?php echo $this->Paginator->sort('due_date','Esedékes'); ?>,&nbsp;<?php echo $this->Paginator->sort('sent_email','Email'); ?>
					</th>
					<th style="text-align: center;">Műveletek</th>
				</tr>
			</thead>

			<tbody>

				<?php $i = 0; ?>
<?php foreach ($orders as $order): ?>
<?php if($i++ % 2 == 0){ $class = ' class="odd"'; }else{$class="";} ?>
	<tr<?php echo $class; ?>>
		<td align="center" style="text-align: center;">
			<?php if( $order['Order']['delivered'] == 1){ ?>
				<img src="/img/success.png" height="18" style="height: 20px; margin-top: 2px; margin-bottom: -4px;" />
			<?php }else{ ?>
				<img src="/img/warning.png" height="18" style="height: 20px; margin-top: 2px; margin-bottom: -4px;" />
			<?php } ?>&nbsp;
		</td>

		<td style="text-align: left; font-size: 14px; font-weight: bold;"><?php echo h($order['Order']['name']); ?>&nbsp;</td>
		<td style="text-align: center; padding-right: 20px; font-size: 20px; font-weight: bold;"><?php echo h($order['Order']['quantity']); ?>&nbsp;<span style="font-size: 14px; font-weight: normal;">cs.</span></td>

		<td style="text-align: center; padding-right: 20px; font-size: 16px; font-weight: normal;"><?php echo h($order['Order']['value']); ?> Ft</td>
		<td style="text-align: center; padding-right: 20px; font-size: 16px; font-weight: normal;"><?php echo h($order['Order']['deliveryprice']); ?> Ft</td>
		<td style="text-align: center;">		
			<?php if($order['Order']['payment_type'] == 1){ ?>
				<span style="font-weight: bold; font-size: 18px;"><?php echo h($order['Order']['payment_amount']); ?></span>&nbsp;Ft.
			<?php } ?>			
		</td>
		<td style="text-align: right; padding-right: 20px; font-size: 20px; font-weight: bold;"><?php echo h($order['Order']['totalvalue']); ?>&nbsp;<span style="font-size: 14px; font-weight: normal;">Ft</span></td>
		<td style="text-align: center; padding-right: 20px; font-size: 16px; font-weight: normal; color: red;"><?php
			if($order['Order']['discount']){
				echo h($order['Order']['discount']);
			} else {
				echo "&nbsp;";
			}?></td>
		<td><?php echo h($order['Order']['phone']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['postcode']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['city']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['address']); ?>&nbsp;</td>
		<td style="text-align: center;">
			<?php if($order['Order']['payment_type'] == 1){ ?>
				<span style="font-weight: normal; font-size: 14px;"><?php echo h($order['Order']['id']); ?></span>&nbsp;
			<?php } ?>			
			<?php if($order['Order']['payment_type'] == 2){ ?>
				<span style="font-weight: bold; font-size: 18px;"><?php echo h($order['Order']['id']); ?></span>&nbsp;
			<?php } ?>			
		</td>
		<td>
			<?php echo h(ereg_replace("-",".",$order['Order']['created'])); ?>&nbsp;<br />
			<?php if( $order['Order']['sent_email'] == 1){ ?>
				<span style="font-weight: bold; font-size: 12px; color: #000;"><?php echo h(ereg_replace("-",".",$order['Order']['due_date'])); ?></span>&nbsp;
				<img src="/img/success.png" style="height: 14px; margin-top: -4px; margin-bottom: -4px;" />
			<?php }else{ ?>
				<span style="font-weight: bold; font-size: 12px; color: red;"><?php
					if($order['Order']['due_date'] != '0000-00-00'){
						echo h(ereg_replace("-",".",$order['Order']['due_date']));
					}
				?></span>&nbsp;
				<?php if($order['Order']['due_date'] != '0000-00-00'){ ?>
					<img src="/img/warning.png" style="height: 14px; margin-top: -4px; margin-bottom: -4px;" />
				<?php } ?>
			<?php } ?>

			<?php
				if($order['Order']['click_to_link'] > 0){
					echo "(<b>".$order['Order']['click_to_link']."</b>)";
				} else {
					echo "&nbsp;";
				}
			?>



		</td>
		<td class="actions">
			<?php echo $this->Html->link( $this->Html->image('b_view.png',array('width'=>'16', 'title'=>'Adatlap megtekintése')), array('action' => 'view', $order['Order']['id']), array('escape'=>false)); ?>
			<?php //echo $this->Html->link( $this->Html->image('b_edit.png',array('width'=>'16', 'title'=>'Adatok módosítása')), array('action' => 'edit', $order['Order']['id']), array('escape'=>false)); ?>
			<?php echo $this->Html->link( $this->Html->image('email.png',array('width'=>'16', 'title'=>'Esedékes email')) , array('action' => 'editduedate', $order['Order']['id']), array('escape'=>false)); ?>

			<?php
			if($order['Order']['delivered'] == 1){
				echo $this->Form->postLink( $this->Html->image('b_drop.png',array('width'=>'16', 'title'=>'Rekord törlése')), array('action' => 'delete', $order['Order']['id']), array('escape'=>false), __('Valóban törölni szeretné a rekordot? ID: %s', $order['Order']['id']));
			}
			?>
		</td>
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


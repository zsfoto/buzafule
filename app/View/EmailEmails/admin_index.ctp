<style>	thead th.table-head {
		font-size: 16px;
		font-weight: normal;
		color: #fff;
	}	
	td{
		border: 0px solid red;
		vertical-align: middle;
		font-size: 14px;
	}
</style>
<div class="box" style="margin-bottom: 5px;">
	<h2><a href="#" id="toggle-tables">Címzettek listája</a></h2>
	<div class="block" id="tables">
		<table>
			<thead>
				<tr>
					<th colspan="12" class="table-head">
<?php if($email_count==0){ ?>
					<?php echo $this->Html->link( $this->Html->image('plus.png',array('width'=>'16', 'title'=>'Címlista importálása')) , array('action' => 'import', $template_id), array('escape'=>false, 'confirm'=>'Indulhat a címlista importálása?') ); ?>
					Címzettek importálása
<?php }else{ 
	echo $this->Html->link( $this->Html->image('plus.png',array('width'=>'16', 'title'=>'Csak az újabbak importálása')) , array('action' => 'import', $template_id, 'onlyNews'), array('escape'=>false, 'confirm'=>'Indulhat a címlista bővítése az újakkal?') );
	echo "&nbsp;Újak importálása, lista frissítése";
} ?>
				</th>
				</tr>
				<tr>
					<th style="text-align: center;">Sor</th>

	<?php //if(isset($emailEmails[0]) && $emailEmails[0]['EmailTemplate']['sent']==Null){ ?>
					<th style="text-align: center; width: 140px;"><?php echo $this->Paginator->sort('sent','Művelet (v. küldve)'); ?></th>
	<?php //}?>
					<th style="text-align: center; width: 160px;"><?php echo $this->Paginator->sort('last_order','Utolsó rendelés'); ?></th>
					<th style="text-align: center; width: 200px;"><?php echo $this->Paginator->sort('name','Név'); ?></th>
					<th style="text-align: center; width: 50px;"><?php echo $this->Paginator->sort('order_count','Rend.'); ?></th>
					<th style="text-align: center; width: 50px;"><?php echo $this->Paginator->sort('order_qty','Menny.'); ?></th>
					<th style="text-align: left; width: 400px;"><?php echo $this->Paginator->sort('address','Cím'); ?></th>
					<th><?php echo $this->Paginator->sort('email','Email'); ?></th>
					<th><?php echo $this->Paginator->sort('phone','Telefon'); ?></th>
					<th style="text-align: center; width: 50px;">Törlés</th>
				</tr>
			</thead>

			<tbody>
			
<?php $i = 0; ?>
<?php foreach ($emailEmails as $emailEmail): ?>
<?php if($i++ % 2 == 0){ $class = ' class="odd"'; }else{$class="";} ?>
	<tr<?php echo $class; ?>>
		<td style="text-align: center;"><a name="<?php echo $i ?>"><?php echo $i ?></a>.&nbsp;</td>
		<td class="actions">
			<?php
			if($emailEmail['EmailEmail']['sent']==Null){
				echo $this->Html->link( $this->Html->image('b_edit.png',array('width'=>'16', 'title'=>'Adatok módosítása')), array('action' => 'edit', $emailEmail['EmailEmail']['id'], $template_id, $i), array('escape'=>false));
			}else{
				echo $emailEmail['EmailEmail']['sent'];
			} ?>
		</td>
	
		<td><?php echo h($emailEmail['EmailEmail']['last_order']); ?>&nbsp;</td>
		<td><?php echo h($emailEmail['EmailEmail']['name']); ?>&nbsp;</td>
		<td style="text-align: center; width: 50px;"><?php echo h($emailEmail['EmailEmail']['order_count']); ?>&nbsp;</td>
		<td style="text-align: center; width: 70px;"><?php echo h($emailEmail['EmailEmail']['order_qty']); ?>&nbsp;</td>
		<td><?php echo h($emailEmail['EmailEmail']['address']); ?>&nbsp;</td>
		<td><?php echo h($emailEmail['EmailEmail']['email']); ?>&nbsp;</td>
		<td><?php echo h($emailEmail['EmailEmail']['phone']); ?>&nbsp;</td>
					
		<td style="text-align: center;"><?php echo $this->Html->link( $this->Html->image('b_drop.png',array('width'=>'16', 'title'=>'Rekord törlése')), array('action' => 'delete', $emailEmail['EmailEmail']['id'], $template_id, $i), array('escape'=>false), __('Valóban törölni szeretné a(z) %s-t? ', $emailEmail['EmailEmail']['name'])); ?>&nbsp;</td>
		
	</tr>
<?php endforeach; ?>

			</tbody>
			
			<tfoot>
				<tr class="total">
					<th colspan="12">
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


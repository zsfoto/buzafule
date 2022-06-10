<style>
	td{
		font-size: 14px;
	}
</style>
<div class="box" style="margin-bottom: 5px;">
	<h2><a href="#" id="toggle-tables">Kör-Emailek</a></h2>
	<div class="block" id="tables">
		<table>
			<thead>
				<tr>
					<th colspan="10" class="table-head">
						<?php echo $this->Html->link( $this->Html->image('plus.png',array('style'=>'width: 12px; margin: 0px 5px -2px -5px;', 'title'=>'Új rekord hozzáadása')), array('action' => 'add'), array('escape'=>false)); ?><?php echo __('Új kör-Email'); ?>
					</th>
				</tr>
				<tr>
					<th style="width: 40px; text-align: center;">Módosít</th>
					<th><?php echo $this->Paginator->sort('title','Tárgy mező'); ?></th>
					<th style="text-align: center;"><?php echo $this->Paginator->sort('email_email_count','Címzettek'); ?></th>
					<th style="width: 180px; text-align: center;"><?php echo $this->Paginator->sort('sent','Elküldve'); ?></th>
					<th style="width: 150px; text-align: center;"><?php echo $this->Paginator->sort('created','Létrehozva'); ?></th>
					<th style="width: 150px; text-align: center;"><?php echo $this->Paginator->sort('modified','Módosítva'); ?></th>
					<th style="width: 150px; text-align: center;">Teszt küldés</th>
					<th style="width: 50px; text-align: center;">Törlés</th>
				</tr>
			</thead>

			<tbody>
			
				<?php $i = 0; ?>
<?php foreach ($emailTemplates as $emailTemplate): ?>
<?php if($i++ % 2 == 0){ $class = ' class="odd"'; }else{$class="";} ?>
					<tr<?php echo $class; ?>>
						<td class="actions">
							<?php echo $this->Html->link( $this->Html->image('b_edit.png',array('width'=>'16', 'title'=>'Adatok módosítása')), array('action' => 'edit', $emailTemplate['EmailTemplate']['id']), array('escape'=>false)); ?>
						</td>
					
						<td><b><?php echo h($emailTemplate['EmailTemplate']['title']); ?></b>&nbsp;</td>
						<td style="text-align: center;"><?php 
							//if($emailTemplate['EmailTemplate']['email_email_count'] > 0){
								//if($emailTemplate['EmailTemplate']['sent'] == Null){
									echo $this->Html->link( 'Címzettek szerkesztése', array('action'=>'index', $emailTemplate['EmailTemplate']['id'], 'controller'=>'emailEmails') );
								//}else{
								//	echo $this->Html->link( 'Címzettek listája', array('action'=>'index', $emailTemplate['EmailTemplate']['id'], 'controller'=>'emailEmails') );
								//}
							//}else{
							//	echo $this->Html->link( 'Címzettek szerkesztése', array('action'=>'index', $emailTemplate['EmailTemplate']['id'], 'controller'=>'emailEmails') );
							//}
						?>&nbsp;</td>
						
						<td style="text-align: center;"><?php 
							//if($emailTemplate['EmailTemplate']['sent'] != Null){
							//	echo $emailTemplate['EmailTemplate']['sent'];								
							//}else{
								if($emailTemplate['EmailTemplate']['email_email_count']>0){
									echo $this->Html->link( 'Körlevél elküldése', array('action' => 'send', $emailTemplate['EmailTemplate']['id']), array('escape'=>false), __('El szeretné küldeni a(z) "%s" körlevelet a címzetteknek? (Csak azoknak, akiknek még nem lett kiküldve!)', $emailTemplate['EmailTemplate']['title']));
									if($emailTemplate['EmailTemplate']['sent'] != Null){
										echo "<br>[".$emailTemplate['EmailTemplate']['sent']."]";
									}									
								}else{
									//echo "Üres a címlista!";
								}
							//}
						?>&nbsp;</td>
						
						<td style="text-align: center;"><?php echo h($emailTemplate['EmailTemplate']['created']); ?>&nbsp;</td>
						<td style="text-align: center;"><?php echo h($emailTemplate['EmailTemplate']['modified']); ?>&nbsp;</td>

						<td style="text-align: center;"><?php 
							echo $this->Html->link( 'Saját magamnak', array('action' => 'send', $emailTemplate['EmailTemplate']['id'], 'teszt'), array('escape'=>false), __('El szeretné küldeni a(z) "%s" körlevelet SAJÁT MAGÁNAK?', $emailTemplate['EmailTemplate']['title']));
						?>&nbsp;</td>
						
						<td class="actions">
							<?php echo $this->Form->postLink( $this->Html->image('b_drop.png',array('width'=>'16', 'title'=>'Rekord törlése')), array('action' => 'delete', $emailTemplate['EmailTemplate']['id']), array('escape'=>false), __('Valóban törölni szeretné a(z) "%s"-t? A törléssel CSAK EHHEZ a körlevélhez tartozó címzetteket is törli!', $emailTemplate['EmailTemplate']['title'])); ?>
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
<p style="height: 20px; text-align: left; font-size: 12px;">
	Figyelem! Spammelés megelőzése végett levél küldési limit van a szerveren. Ha a címzettek száma eléri a 2000-et, akkor szólni kell a rendszergazdának, hogy emelje meg a limitet.<br>
	Spam figyelő tesztelése, a saját részre kiküldött email-lel lehetséges. Ha nem jönne meg az email, akkor szólni kell a rendszergazdának, hogy nem vagyunk-e spam listán.
</p>

<?php echo $this->element('paginator_bottom'); ?>


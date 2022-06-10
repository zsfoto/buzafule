<div class="box">
	<h2><a href="#" id="toggle-forms"><?php echo __('Order'); ?></a></h2>
	<div class="block" id="forms">
		<fieldset class="view">
			<legend>Adatlap</legend>
			<dl>
				<dt><?php echo __('Id'); ?></dt>
				<dd>
					<?php echo h($order['Order']['id']); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Neve:'); ?></dt>
				<dd>
					<span style="font-size: 16px; font-weight: bold;"><?php echo h($order['Order']['name']); ?></span>
				</dd>
				<dt><?php echo __('Email'); ?></dt>
				<dd>
					<span style="font-size: 14px; font-weight: bold;"><?php echo h($order['Order']['email']); ?></span>
					&nbsp;
				</dd>
				<dt><?php echo __('Telefon:'); ?></dt>
				<dd>
					<span style="font-size: 14px; font-weight: bold;"><?php echo h($order['Order']['phone']); ?></span>
					&nbsp;
				</dd>
				<dt><?php echo __('Ir.sz.:'); ?></dt>
				<dd>
					<span style="font-size: 14px; font-weight: bold;"><?php echo h($order['Order']['postcode']); ?></span>
					&nbsp;
				</dd>
				<dt><?php echo __('Város:'); ?></dt>
				<dd>
					<span style="font-size: 14px; font-weight: bold;"><?php echo h($order['Order']['city']); ?></span>
					&nbsp;
				</dd>
				<dt><?php echo __('Cím:'); ?></dt>
				<dd>
					<span style="font-size: 14px; font-weight: bold;"><?php echo h($order['Order']['address']); ?></span>					
					&nbsp;
				</dd>
				
				
				<dt><?php echo __('Emlékeztető email:'); ?></dt>
				<dd>
					<span style="font-size: 14px; font-weight: bold;"><?php echo h(ereg_replace("-",".",$order['Order']['due_date'])); ?></span>					
					&nbsp;
				</dd>
				<dt><?php echo __('Emlékeztető elküldve:'); ?></dt>
				<dd>
					<span style="font-size: 14px; font-weight: bold;"><?php echo h($order['Order']['sent_email']); ?></span>					
					&nbsp;
				</dd>
				<dt><?php echo __('Linkre kattintott:'); ?></dt>
				<dd>
					<span style="font-size: 14px; font-weight: bold;"><?php echo h($order['Order']['click_to_link']); ?></span>					
					&nbsp;
				</dd>
				
				
				<dt><?php echo __('Megjegyzés:'); ?></dt>
				<dd style="width: 80%; border: 1px solid lightgray; background: #FEFEFE; padding: 5px;">
					<span style="font-size: 14px; font-weight: bold;"><?php echo ereg_replace("\n","<br />",h($order['Order']['message'])); ?></span>
					
					
					&nbsp;
				</dd>
				<dt><?php echo __('Mennyiség:'); ?></dt>
				<dd>
					<span style="font-size: 20px; font-weight: bold;"><?php echo h($order['Order']['quantity']); ?></span> db
					&nbsp;
				</dd>
				<dt><?php echo __('Érték:'); ?></dt>
				<dd>
					<span style="font-size: 20px; font-weight: bold;"><?php echo h($order['Order']['value']); ?></span> Ft
					&nbsp;
				</dd>
				<dt><?php echo __('Megrendelve:'); ?></dt>
				<dd>
					<?php echo h($order['Order']['created']); ?>
					&nbsp;
				</dd>
			</dl>
			<ul class="viewactionlist">
				<li class="viewactionlistelement"><?php echo $this->Html->link(__('Listáz'), array('action' => 'index'), array('class'=>'viewactionlink')); ?> </li>
<?php if($order['Order']['delivered'] == 0) {?>
				<li class="viewactionlistelement"><?php echo $this->Html->link(__('Postázva'), array('action' => 'delivered', $order['Order']['id']), array('class'=>'viewactionlink'), __('Elküldi? (Az Ok gombbal, email-t küld a megrendelőnek, valamint beállítja az elküldve jelzőt)', $order['Order']['id'])); ?></li>
<?php } ?>
				<li class="viewactionlistelement"><?php echo $this->Html->link(__('Esedékes'), array('action' => 'editduedate', $order['Order']['id']), array('class'=>'viewactionlink')); ?> </li>
				<li class="viewactionlistelement"><?php echo $this->Html->link(__('Módosít'), array('action' => 'edit', $order['Order']['id']), array('class'=>'viewactionlink')); ?> </li>
				<li class="viewactionlistelement"><?php echo $this->Form->postLink(__('Töröl'), array('action' => 'delete', $order['Order']['id']), array('class'=>'viewactionlink'), __('Valóban törölni szeretné a rekordot? ID: %s', $order['Order']['id'])); ?> </li>
			</ul>
		</fieldset>
		<font color="red"><b>FIGYELEM!!</b></font><br />A módosítás minden adatot módosít, nem számol automatikusan, lehetőséget adva a telefonon egyeztetett adatok totális módosítására.<br />
		A módosító adatlap az adatok mentésekor nem számol semmit automatikusan! Csakis a beírt adatokat menti.<br />
		<br />
		<font color="green"><b>Az "Postázva" gombbal, email-t küld a megrendelőnek, valamint beállítja az elküldve jelzőt</b></font><br />&nbsp;
	</div>
</div>

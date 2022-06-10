	<?php if($this->Paginator->numbers()){?>
	<div class="paging" style="float: left; margin-top: 0px;">
		<?php echo $this->Paginator->prev('<< '.__('előző', true), array(), null, array('class'=>'disabled'));?>
		| <?php echo $this->Paginator->numbers();?> | 
		<?php echo $this->Paginator->next(__('következő', true).' >>', array(), null, array('class' => 'disabled'));?>
	</div>
	<?php } ?>	
	
	<div style="float: right"><i>
		<?php
		echo $this->Paginator->counter(array(
			'format' => __('<b>{:page}</b>. oldal az összesen <b>{:pages}</b> oldalból. Megjelenítve: <b>{:current}</b> rekord az összesen <b>{:count}</b> rekordból. Tartomány: [<b>{:start}..{:end}]</b>')
		));
		?></i>					
	</div>

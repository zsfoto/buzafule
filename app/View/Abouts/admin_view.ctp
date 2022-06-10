<div class="box">
	<h2><a href="#" id="toggle-forms"><?php echo __('About'); ?></a></h2>
	<div class="block" id="forms">
		<fieldset class="view">
			<legend>Adatlap</legend>
			<dl>
				<dt><?php echo __('Id'); ?></dt>
				<dd>
					<?php echo h($about['About']['id']); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Pagetitle'); ?></dt>
				<dd>
					<?php echo h($about['About']['pagetitle']); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Motto'); ?></dt>
				<dd>
					<?php echo h($about['About']['motto']); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Menu1'); ?></dt>
				<dd>
					<?php echo h($about['About']['menu1']); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Menu2'); ?></dt>
				<dd>
					<?php echo h($about['About']['menu2']); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Menu3'); ?></dt>
				<dd>
					<?php echo h($about['About']['menu3']); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Menu4'); ?></dt>
				<dd>
					<?php echo h($about['About']['menu4']); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Menu5'); ?></dt>
				<dd>
					<?php echo h($about['About']['menu5']); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Menu6'); ?></dt>
				<dd>
					<?php echo h($about['About']['menu6']); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Menu7'); ?></dt>
				<dd>
					<?php echo h($about['About']['menu7']); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Mainpage Title'); ?></dt>
				<dd>
					<?php echo h($about['About']['mainpage_title']); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Mainpage Text'); ?></dt>
				<dd>
					<?php echo h($about['About']['mainpage_text']); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Mainpage Title1'); ?></dt>
				<dd>
					<?php echo h($about['About']['mainpage_title1']); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Mainpage Text1'); ?></dt>
				<dd>
					<?php echo h($about['About']['mainpage_text1']); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Mainpage Title2'); ?></dt>
				<dd>
					<?php echo h($about['About']['mainpage_title2']); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Mainpage Text2'); ?></dt>
				<dd>
					<?php echo h($about['About']['mainpage_text2']); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Mainpage Title3'); ?></dt>
				<dd>
					<?php echo h($about['About']['mainpage_title3']); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Mainpage Text3'); ?></dt>
				<dd>
					<?php echo h($about['About']['mainpage_text3']); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Mainpage Title4'); ?></dt>
				<dd>
					<?php echo h($about['About']['mainpage_title4']); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Mainpage Text4'); ?></dt>
				<dd>
					<?php echo h($about['About']['mainpage_text4']); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Mainpage Title5'); ?></dt>
				<dd>
					<?php echo h($about['About']['mainpage_title5']); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Mainpage Text5'); ?></dt>
				<dd>
					<?php echo h($about['About']['mainpage_text5']); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Wgj Subtitle'); ?></dt>
				<dd>
					<?php echo h($about['About']['wgj_subtitle']); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Wgj Subtext'); ?></dt>
				<dd>
					<?php echo h($about['About']['wgj_subtext']); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Delivery Title'); ?></dt>
				<dd>
					<?php echo h($about['About']['delivery_title']); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Delivery Text'); ?></dt>
				<dd>
					<?php echo h($about['About']['delivery_text']); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Contact Title'); ?></dt>
				<dd>
					<?php echo h($about['About']['contact_title']); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Contact Text'); ?></dt>
				<dd>
					<?php echo h($about['About']['contact_text']); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Contact Name'); ?></dt>
				<dd>
					<?php echo h($about['About']['contact_name']); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Contact Email'); ?></dt>
				<dd>
					<?php echo h($about['About']['contact_email']); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Contact Phone'); ?></dt>
				<dd>
					<?php echo h($about['About']['contact_phone']); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Contact Message'); ?></dt>
				<dd>
					<?php echo h($about['About']['contact_message']); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Created'); ?></dt>
				<dd>
					<?php echo h($about['About']['created']); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Modified'); ?></dt>
				<dd>
					<?php echo h($about['About']['modified']); ?>
					&nbsp;
				</dd>
			</dl>
			<ul class="viewactionlist">
				<li class="viewactionlistelement"><?php echo $this->Html->link(__('Listáz'), array('action' => 'index'), array('class'=>'viewactionlink')); ?> </li>
				<li class="viewactionlistelement"><?php echo $this->Html->link(__('Módosít'), array('action' => 'edit', $about['About']['id']), array('class'=>'viewactionlink')); ?> </li>
				<li class="viewactionlistelement"><?php echo $this->Html->link(__('Új'), array('action' => 'add'), array('class'=>'viewactionlink')); ?> </li>
				<li class="viewactionlistelement"><?php echo $this->Form->postLink(__('Töröl'), array('action' => 'delete', $about['About']['id']), array('class'=>'viewactionlink'), __('Valóban törölni szeretné a rekordot? ID: %s', $about['About']['id'])); ?> </li>
			</ul>
		</fieldset>
	</div>
</div>

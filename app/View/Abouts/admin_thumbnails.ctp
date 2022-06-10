<div class="box">
	<h2><a href="#" id="toggle-forms"><?php echo __('Kisképek az oldalon'); ?></a></h2>
	<div class="block" id="forms">
		<fieldset class="login">
			<legend><?php echo __('Képecskék feltöltése (<font color="red">Kiskép: 188x132px</font>!!!)'); ?></legend>
			<?php echo $this->Form->create('About', array('action' => 'thumbnails/upload', "enctype" => "multipart/form-data")); ?>
			
			<p><?php if(file_exists(WWW_ROOT."images".DS."thumbnail1.jpg")){ ?>
				<div style="position: relative; margin: 10px auto; width: 190px; height: 122px; border: 1px solid gray; text-align: center; overflow: hidden;">
					<img src="/images/thumbnail1.jpg" style="width: 188px; text-align: center;">
					<div style="position: absolute; top: 10px; left: 155px; border: 0px solid gray; width: 30px; height: 30px; z-index: 9999;">
						<a href="/admin/abouts/deletethumbnail/1" onclick="if (confirm(&quot;Val\u00f3ban t\u00f6r\u00f6lni szeretn\u00e9 a kisképet?&quot;)){return true;}else{return false;}"><img src="/img/b_drop.png" height="30px" border="0"></a> 
					</div>
					<div style="position: absolute; top: 90px; left: 0px; border: 1px solid gray; width: 188px; height: 25px; z-index: 9999; opacity: .8; font-size: 16px; font-weight: bold; background: #aaa;">
						Búzafű képecske
					</div>
				</div>
				<?php 
				}else{
					echo $this->Form->input('photo1',array('label'=>'Búzafűlé képecske: ','type'=>'file', 'style'=>'width: 400px;', 'div'=>false, 'disabled'=>false )); 				
				}
			?></p>
			
			<p><?php if(file_exists(WWW_ROOT."images".DS."thumbnail2.jpg")){ ?>
				<div style="position: relative; margin: 10px auto; width: 190px; height: 122px; border: 1px solid gray; text-align: center; overflow: hidden;">
					<img src="/images/thumbnail2.jpg" style="width: 188px; text-align: center;">
					<div style="position: absolute; top: 10px; left: 155px; border: 0px solid gray; width: 30px; height: 30px; z-index: 9999;">
						<a href="/admin/abouts/deletethumbnail/2" onclick="if (confirm(&quot;Val\u00f3ban t\u00f6r\u00f6lni szeretn\u00e9 a kisképet?&quot;)){return true;}else{return false;}"><img src="/img/b_drop.png" height="30px" border="0"></a> 
					</div>
					<div style="position: absolute; top: 90px; left: 0px; border: 1px solid gray; width: 188px; height: 25px; z-index: 9999; opacity: .8; font-size: 16px; font-weight: bold; background: #aaa;">
						Rendelés képecske
					</div>
				</div>
				<?php 
				}else{
					echo $this->Form->input('photo2',array('label'=>'Rendelés képecske: ','type'=>'file', 'style'=>'width: 400px;', 'div'=>false, 'disabled'=>false )); 				
				}
			?></p>
			
			<p><?php if(file_exists(WWW_ROOT."images".DS."thumbnail3.jpg")){ ?>
				<div style="position: relative; margin: 10px auto; width: 190px; height: 122px; border: 1px solid gray; text-align: center; overflow: hidden;">
					<img src="/images/thumbnail3.jpg" style="width: 188px; text-align: center;">
					<div style="position: absolute; top: 10px; left: 155px; border: 0px solid gray; width: 30px; height: 30px; z-index: 9999;">
						<a href="/admin/abouts/deletethumbnail/3" onclick="if (confirm(&quot;Val\u00f3ban t\u00f6r\u00f6lni szeretn\u00e9 a kisképet?&quot;)){return true;}else{return false;}"><img src="/img/b_drop.png" height="30px" border="0"></a> 
					</div>
					<div style="position: absolute; top: 90px; left: 0px; border: 1px solid gray; width: 188px; height: 25px; z-index: 9999; opacity: .8; font-size: 16px; font-weight: bold; background: #aaa;">
						Kiszállítás képecske
					</div>
				</div>
				<?php 
				}else{
					echo $this->Form->input('photo3',array('label'=>'Kiszállítás képecske: ','type'=>'file', 'style'=>'width: 400px;', 'div'=>false, 'disabled'=>false )); 				
				}
			?></p>
			
			<p><?php if(file_exists(WWW_ROOT."images".DS."thumbnail4.jpg")){ ?>
				<div style="position: relative; margin: 10px auto; width: 190px; height: 122px; border: 1px solid gray; text-align: center; overflow: hidden;">
					<img src="/images/thumbnail4.jpg" style="width: 188px; text-align: center;">
					<div style="position: absolute; top: 10px; left: 155px; border: 0px solid gray; width: 30px; height: 30px; z-index: 9999;">
						<a href="/admin/abouts/deletethumbnail/4" onclick="if (confirm(&quot;Val\u00f3ban t\u00f6r\u00f6lni szeretn\u00e9 a kisképet?&quot;)){return true;}else{return false;}"><img src="/img/b_drop.png" height="30px" border="0"></a> 
					</div>
					<div style="position: absolute; top: 90px; left: 0px; border: 1px solid gray; width: 188px; height: 25px; z-index: 9999; opacity: .8; font-size: 16px; font-weight: bold; background: #aaa;">
						Galéria képecske
					</div>
				</div>
				<?php 
				}else{
					echo $this->Form->input('photo4',array('label'=>'Galéria képecske: ','type'=>'file', 'style'=>'width: 400px;', 'div'=>false, 'disabled'=>false )); 				
				}
			?></p>
			
			<p><?php if(file_exists(WWW_ROOT."images".DS."thumbnail5.jpg")){ ?>
				<div style="position: relative; margin: 10px auto; width: 190px; height: 122px; border: 1px solid gray; text-align: center; overflow: hidden;">
					<img src="/images/thumbnail5.jpg" style="width: 188px; text-align: center;">
					<div style="position: absolute; top: 10px; left: 155px; border: 0px solid gray; width: 30px; height: 30px; z-index: 9999;">
						<a href="/admin/abouts/deletethumbnail/5" onclick="if (confirm(&quot;Val\u00f3ban t\u00f6r\u00f6lni szeretn\u00e9 a kisképet?&quot;)){return true;}else{return false;}"><img src="/img/b_drop.png" height="30px" border="0"></a> 
					</div>
					<div style="position: absolute; top: 90px; left: 0px; border: 1px solid gray; width: 188px; height: 25px; z-index: 9999; opacity: .8; font-size: 16px; font-weight: bold; background: #aaa;">
						Kapcsolat képecske
					</div>
				</div>
				<?php 
				}else{
					echo $this->Form->input('photo5',array('label'=>'Kapcsolat képecske: ','type'=>'file', 'style'=>'width: 400px;', 'div'=>false, 'disabled'=>false )); 				
				}
			?></p>
			
			
			<?php if(!file_exists(WWW_ROOT."images".DS."thumbnail1.jpg") || !file_exists(WWW_ROOT."images".DS."thumbnail2.jpg") || !file_exists(WWW_ROOT."images".DS."thumbnail3.jpg") || !file_exists(WWW_ROOT."images".DS."thumbnail4.jpg") || !file_exists(WWW_ROOT."images".DS."thumbnail5.jpg")){ ?>
			<p><?php echo $this->Form->end(__('Mentés'),array('class'=>'confirm button')); ?></p>
			<?php } ?>
			
		</fieldset>

	</div>
</div>


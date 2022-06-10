<div class="box">
	<h2><a href="#" id="toggle-forms"><?php echo __('<b>Facebook megosztás</b> képek az oldalon'); ?></a></h2>
	<div class="block" id="forms">
		<fieldset class="login">
			<legend><?php echo __('<b>Facebook megosztás</b> képek feltöltése (<font color="red">Kép: 504x283px</font>!!!)'); ?></legend>
			<?php echo $this->Form->create('About', array('action' => 'ogimages/upload', "enctype" => "multipart/form-data")); ?>
			
			<p><?php if(file_exists(WWW_ROOT."images".DS."ogimage1.jpg")){ ?>
				<div style="position: relative; margin: 10px auto; width: 190px; height: 122px; border: 1px solid gray; text-align: center; overflow: hidden;">
					<img src="/images/ogimage1.jpg" style="width: 188px; text-align: center;">
					<div style="position: absolute; top: 10px; left: 155px; border: 0px solid gray; width: 30px; height: 30px; z-index: 9999;">
						<a href="/admin/abouts/deleteogimage/1" onclick="if (confirm(&quot;Val\u00f3ban t\u00f6r\u00f6lni szeretn\u00e9 a kisképet?&quot;)){return true;}else{return false;}"><img src="/img/b_drop.png" height="30px" border="0"></a> 
					</div>
					<div style="position: absolute; top: 90px; left: 0px; border: 1px solid gray; width: 188px; height: 25px; z-index: 9999; opacity: .8; font-size: 16px; font-weight: bold; background: #aaa;">
						Első kép
					</div>
				</div>
				<?php 
				}else{
					echo $this->Form->input('photo1',array('label'=>'Első kép: ','type'=>'file', 'style'=>'width: 400px;', 'div'=>false, 'disabled'=>false )); 				
				}
			?></p>
			
			<p><?php if(file_exists(WWW_ROOT."images".DS."ogimage2.jpg")){ ?>
				<div style="position: relative; margin: 10px auto; width: 190px; height: 122px; border: 1px solid gray; text-align: center; overflow: hidden;">
					<img src="/images/ogimage2.jpg" style="width: 188px; text-align: center;">
					<div style="position: absolute; top: 10px; left: 155px; border: 0px solid gray; width: 30px; height: 30px; z-index: 9999;">
						<a href="/admin/abouts/deleteogimage/2" onclick="if (confirm(&quot;Val\u00f3ban t\u00f6r\u00f6lni szeretn\u00e9 a kisképet?&quot;)){return true;}else{return false;}"><img src="/img/b_drop.png" height="30px" border="0"></a> 
					</div>
					<div style="position: absolute; top: 90px; left: 0px; border: 1px solid gray; width: 188px; height: 25px; z-index: 9999; opacity: .8; font-size: 16px; font-weight: bold; background: #aaa;">
						Második kép
					</div>
				</div>
				<?php 
				}else{
					echo $this->Form->input('photo2',array('label'=>'Második kép: ','type'=>'file', 'style'=>'width: 400px;', 'div'=>false, 'disabled'=>false )); 				
				}
			?></p>
			
			<p><?php if(file_exists(WWW_ROOT."images".DS."ogimage3.jpg")){ ?>
				<div style="position: relative; margin: 10px auto; width: 190px; height: 122px; border: 1px solid gray; text-align: center; overflow: hidden;">
					<img src="/images/ogimage3.jpg" style="width: 188px; text-align: center;">
					<div style="position: absolute; top: 10px; left: 155px; border: 0px solid gray; width: 30px; height: 30px; z-index: 9999;">
						<a href="/admin/abouts/deleteogimage/3" onclick="if (confirm(&quot;Val\u00f3ban t\u00f6r\u00f6lni szeretn\u00e9 a kisképet?&quot;)){return true;}else{return false;}"><img src="/img/b_drop.png" height="30px" border="0"></a> 
					</div>
					<div style="position: absolute; top: 90px; left: 0px; border: 1px solid gray; width: 188px; height: 25px; z-index: 9999; opacity: .8; font-size: 16px; font-weight: bold; background: #aaa;">
						Harmadik kép
					</div>
				</div>
				<?php 
				}else{
					echo $this->Form->input('photo3',array('label'=>'Harmadik kép: ','type'=>'file', 'style'=>'width: 400px;', 'div'=>false, 'disabled'=>false )); 				
				}
			?></p>
			
			<p><?php if(file_exists(WWW_ROOT."images".DS."ogimage4.jpg")){ ?>
				<div style="position: relative; margin: 10px auto; width: 190px; height: 122px; border: 1px solid gray; text-align: center; overflow: hidden;">
					<img src="/images/ogimage4.jpg" style="width: 188px; text-align: center;">
					<div style="position: absolute; top: 10px; left: 155px; border: 0px solid gray; width: 30px; height: 30px; z-index: 9999;">
						<a href="/admin/abouts/deleteogimage/4" onclick="if (confirm(&quot;Val\u00f3ban t\u00f6r\u00f6lni szeretn\u00e9 a kisképet?&quot;)){return true;}else{return false;}"><img src="/img/b_drop.png" height="30px" border="0"></a> 
					</div>
					<div style="position: absolute; top: 90px; left: 0px; border: 1px solid gray; width: 188px; height: 25px; z-index: 9999; opacity: .8; font-size: 16px; font-weight: bold; background: #aaa;">
						Negyedik kép
					</div>
				</div>
				<?php 
				}else{
					echo $this->Form->input('photo4',array('label'=>'Negyedik kép: ','type'=>'file', 'style'=>'width: 400px;', 'div'=>false, 'disabled'=>false )); 				
				}
			?></p>
			
			<p><?php if(file_exists(WWW_ROOT."images".DS."ogimage5.jpg")){ ?>
				<div style="position: relative; margin: 10px auto; width: 190px; height: 122px; border: 1px solid gray; text-align: center; overflow: hidden;">
					<img src="/images/ogimage5.jpg" style="width: 188px; text-align: center;">
					<div style="position: absolute; top: 10px; left: 155px; border: 0px solid gray; width: 30px; height: 30px; z-index: 9999;">
						<a href="/admin/abouts/deleteogimage/5" onclick="if (confirm(&quot;Val\u00f3ban t\u00f6r\u00f6lni szeretn\u00e9 a kisképet?&quot;)){return true;}else{return false;}"><img src="/img/b_drop.png" height="30px" border="0"></a> 
					</div>
					<div style="position: absolute; top: 90px; left: 0px; border: 1px solid gray; width: 188px; height: 25px; z-index: 9999; opacity: .8; font-size: 16px; font-weight: bold; background: #aaa;">
						Ötödik kép
					</div>
				</div>
				<?php 
				}else{
					echo $this->Form->input('photo5',array('label'=>'Ötödik kép: ','type'=>'file', 'style'=>'width: 400px;', 'div'=>false, 'disabled'=>false )); 				
				}
			?></p>
			
			
			<?php if(!file_exists(WWW_ROOT."images".DS."ogimage1.jpg") || !file_exists(WWW_ROOT."images".DS."ogimage2.jpg") || !file_exists(WWW_ROOT."images".DS."ogimage3.jpg") || !file_exists(WWW_ROOT."images".DS."ogimage4.jpg") || !file_exists(WWW_ROOT."images".DS."ogimage5.jpg")){ ?>
			<p><?php echo $this->Form->end(__('Mentés'),array('class'=>'confirm button')); ?></p>
			<?php } ?>
			
		</fieldset>

	</div>
</div>


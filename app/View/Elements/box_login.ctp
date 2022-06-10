<?php if( AuthComponent::user('username') ) { ?>
				<div class="box">
					<h2><a href="#" id="toggle-forms">Felhasználói adatok</a></h2>
					<div class="block" id="forms">
							<fieldset class="login">
								<legend>Adatlap</legend>
								<?php echo $this->Form->create('User',array('action'=>'logout')); ?>
								<p><?php echo $this->Form->input('fullname',array('label'=>'Név: ','div'=>false, 'disabled'=>true, 'value'=>AuthComponent::user('fullname') )); ?></p>
								<p><?php echo $this->Form->input('username',array('label'=>'Azonosító: ','div'=>false, 'disabled'=>true, 'value'=>AuthComponent::user('username'))); ?></p>
								<p><?php echo $this->Form->input('email',array('label'=>'Email: ','div'=>false, 'disabled'=>true, 'value'=>AuthComponent::user('email'))); ?></p>
								<?php echo $this->Html->link(__('Kijelentkezés'), array('controller'=>'users', 'action' => 'logout', 'admin'=>TRUE),array('class'=>'confirm button')); ?>
							</fieldset>
					</div>
				</div>
<?php } else { ?>
				<div class="box">
					<h2><a href="#" id="toggle-forms">Bejelentkezés</a></h2>
					<div class="block" id="forms">
							<?php echo $this->Form->create('User',array('action'=>'login')); ?>
							<fieldset class="login">
								<legend>Felhasználó azonosítása</legend>
								<p>
									<?php echo $this->Form->input('username',array('label'=>'Azonosító: ','div'=>false, 'class'=>'input')); ?>
								</p>
								<p>
									<?php echo $this->Form->input('password',array('label'=>'Jelszó: ','div'=>false)); ?>
								</p>
								<?php echo $this->Form->end(__('Bejelentkezés'),array('class'=>'confirm button')); ?>
							</fieldset>
						</form>
					</div>
				</div>
<?php } ?>

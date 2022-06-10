				<div class="box" style="border: 0px solid #000;">
					<h2><a style="background-color:#a00; color: #fff;" href="#" id="toggle-blockquote">Rendszerüzenet</a></h2>
					<div class="block" id="blockquote" style="">
						<blockquote>
							<?php if( AuthComponent::user('username') ) { ?>
								<p><h1 style="font-family: Arial;">Bejelentkezve: <?php echo AuthComponent::user('fullname'); ?></h1></p>
							<?php }else{ ?>
								<p><h1 style="font-family: Arial;">Bejelentkezés szükséges!!</h1></p>
							<?php } ?>
						</blockquote>
					</div>
				</div>

				<div class="box">
					<h2><a href="#" id="toggle-tables">Statisztika</a></h2>
					
					<div class="block" id="tables">
						<table>
							<tr>
								<th>Utoljára itt jártam:</th>
								<td class="currency"><?php echo AuthComponent::user('modified'); ?></td>
							</tr>
							<tr>
								<th>Bejelentkezéseim száma:</th>
								<td class="currency">
									<?php echo $this->Html->link( AuthComponent::user('loginlog_count'), array('controller' => 'loginlogs', 'action' => 'index')); ?>
								</td>
								
							</tr>
						</table>
						<table summary="This table includes examples of as many table elements as possible">
							<thead>
								<tr>
									<th colspan="3" class="table-head">Vizsgáim</th>
								</tr>
								<tr>
									<th>Cím</th>
									<th>Dátum</th>
									<th class="currency">%&nbsp;&nbsp;&nbsp;</th>
								</tr>
							</thead>
							<tbody>
								<tr class="odd">
									<th><a href="#" style="color: red;">Számrendszerek</a></th>
									<td>-</td>
									<th class="currency">-</th>
								</tr>
								<tr>
									<th><a href="#" style="color: green;">Input perifériák</a></th>
									<td>2013.10.22</td>
									<td class="currency" style="color: green;">82%</td>
								</tr>
								<tr class="odd">
									<th><a href="#" style="color: green;">Számrendszerek</a></th>
									<td>2013.10.21</td>
									<th class="currency" style="color: green;">88%</th>
								</tr>
								<tr>
									<th><a href="#" style="color: green;">Input perifériák</a></th>
									<td>2013.10.22</td>
									<td class="currency" style="color: red;">38%</td>
								</tr>
								<tr class="odd">
									<th><a href="#" style="color: green;">Számrendszerek</a></th>
									<td>2013.10.21</td>
									<th class="currency" style="color: green;">78%</th>
								</tr>
								<tr>
									<th><a href="#" style="color: green;">Input perifériák</a></th>
									<td>2013.10.22</td>
									<td class="currency" style="color: red;">22%</td>
								</tr>
							</tbody>
							<tfoot>
								<tr class="total">
									<th>Átlag:</th>
									<td></td>
									<th class="currency">75%</th>
								</tr>
							</tfoot>
						</table>
					</div>
				</div>
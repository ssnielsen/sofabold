<div class="clusters">
	<div class="inline"><h1>Fodbold</h1></div>
	<br class="clearBoth" />

	<div class="matches">
		<table class="table table-striped table-bordered standard">
			<tbody>
				<?php 
					foreach($matches as $match): ?>
						<tr>
							<td>
								<div class="time-style">
									<div class="prematch-time">Optakt starter kl. 14:00</div> 
									<div class="match-time">Kampen starter kl. 15:00</div> 
								</div>
								<br>
								<?php print($match['home'] . ' - ' . $match['away']); ?>
							</td>
						</tr>
					<?php endforeach ?>
			</tbody>	
		</table>
	</div>
</div>
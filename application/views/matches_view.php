<div class="matches">
	<div class="inline"><h1>Fodbold</h1></div>
	<br class="clearBoth" />

	<div class="matches_table">
		<table class="table table-striped table-bordered standard">
			<tbody>
				<?php 
					foreach($matches as $match): ?>
						<tr>
							<td>
								<div class="time-style">
									<div class="prematch-time">Optakt starter: 14:00</div> 
									<div class="match-time">Kampen starter: 15:00</div> 
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
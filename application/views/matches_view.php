<div class="matches">
	<div class="inline"><h1>Fodbold</h1></div>
	<br class="clearBoth" />

	<?php foreach ($matchdays as $matchday): ?>
		<table class="table table-striped table-bordered standard">
			<thead>
				<tr>
					<td>
						<div class="top-date">
							<?php print($matchday['date']) ?>
						</div>
					</td>
				</tr>
			</thead>
			<div class="matches_table">
				<?php foreach($matchday['matches'] as $match): ?>
						<tr>
							<td>
								<div class="time-style">
									<div class="prematch-time">Optakt starter: 14:00</div> 
									<div class="match-time">Kampen starter: <?php print($match['time']) ?></div> 
								</div>
								<br>
								<div class="match-info">
									<div class="prematch-time">
										<img class="logo" src="<?= base_url(); print('static/img/tournament/'.$match['tournamentId']); ?>.png" >
									</div>
									<div class="team-info">
										<img class="logo" src="<?= base_url(); print('static/img/clubs/'.$match['homeId']); ?>.png">
										<div class="<?php if ($match['homeId']=='0') { print("highlight-team"); } ?>"> <?php print($match['homeName']) ?></div> 
										<div class="<?php if ($match['awayId']=='0') { print("highlight-team"); } ?>"> <?php print($match['awayName']) ?></div>
										<img class="logo" src="<?= base_url(); print('static/img/clubs/'.$match['awayId']); ?>.png">
									</div>
								</div>
							</td>
						</tr>	
				<?php endforeach ?>	
			</div>	
		</table>
	<?php endforeach ?>
</div>
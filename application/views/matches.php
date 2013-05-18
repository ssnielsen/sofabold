<div class="matches">
	<div class="inline"><h1>Fodbold</h1></div>
	<br class="clearBoth" />

	<?php foreach ($matchdays as $matchday): ?>
		<div class="matches_table">
			<table class="table table-striped table-bordered standard">
				<thead>
					<tr><td><div class="top-date"><?php print($matchday['date']) ?></div></td></tr>
				</thead>
				<?php foreach($matchday['matches'] as $match): ?>
					<tr>
						<td>
							<div class="time-style">
								<div class="prematch-time">Optakt starter: 14:00</div> 
								<div class="match-time">Kampen starter: <?php print($match['time']) ?></div> 
							</div>
							<br>
							<div class="match-info">
								<div class="prematch-time"> <!-- left floating -->
									<img class="logo" src="<?= base_url(); print('static/img/tournaments/'.$match['tournamentId']); ?>.png" title="<?php print($match['tournamentName']); ?>">
								</div>
								<div class="match-time"> <!-- right floating -->
									<?php foreach ($match['channels'] as $channel): ?>
										<img class="logo" src="<?= base_url(); print('static/img/channels/'.$channel['id']); ?>.png" title="<?php print($channel['name']); ?>">
									<?php endforeach ?>
								</div>
								<div class="team-info">
									<img class="logo" src="<?= base_url(); print('static/img/clubs/'.$match['homeId']); ?>.png">
									<span class="<?php if ($match['homeId']=='0') { print("highlight-team"); } ?>"> <?php print($match['homeName']) ?></span>
									-
									<span class="<?php if ($match['awayId']=='0') { print("highlight-team"); } ?>"> <?php print($match['awayName']) ?></span>
									<img class="logo" src="<?= base_url(); print('static/img/clubs/'.$match['awayId']); ?>.png">
								</div>
							</div>
						</td>
					</tr>	
				<?php endforeach ?>	
			</table>
		</div>	
	<?php endforeach ?>
</div>
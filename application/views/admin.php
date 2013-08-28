<div class="adminpanel">
	<h1>Adminpanel</h1>
	<div class="row">
		<div class="span6">
			<div class="addteam_form">
				<fieldset>
					<legend>Opret hold</legend>
					<form class="form-horizontal" method="post" action="<?= base_url(); ?>index.php/admin/createTeam" enctype="multipart/form-data">
						<div class="control-group">
							<label class="control-label" for="name_team">Holdnavn</label>
							<div class="controls">
								<input type="text" name="name_team" id="name_team" placeholder="Holdnavn" required>
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="userfile_team">Logo</label>
							<div class="controls">
								<input type="file" class="filestyle" data-icon="false" name="userfile_team" id="userfile_team" required>
							</div>
						</div>
						<div class"control-group">
							<div class="controls">
								<button type="submit" name="createTeam" class="btn">Opret hold</button>
							</div>
						</div>
					</form>
				</fieldset>
			</div>
		</div>

		<div class="span6">
			<div class="addtournament_form">
				<fieldset>
					<legend>Opret turnering</legend>
					<form class="form-horizontal" method="post" action="<?= base_url(); ?>index.php/admin/createTournament" enctype="multipart/form-data">
						<div class="control-group">
							<label class="control-label" for="name_tournament">Turneringsnavn</label>
							<div class="controls">
								<input type="text" name="name_tournament" id="name_tournament" placeholder="Turneringsnavn" required>
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="userfile_tournament">Logo</label>
							<div class="controls">
								<input type="file" class="filestyle" data-icon="false" name="userfile_tournament" id="userfile_tournament" required>
							</div>
						</div>
						<div class"control-group">
							<div class="controls">
								<button type="submit" name="createTournament" class="btn">Opret turnering</button>
							</div>
						</div>
					</form>
				</fieldset>
			</div>
		</div>
	</div>

	<div class="row">
</div>

<script type="text/javascript">
	// Upload box bootstrap style
	$(":file").filestyle({classInput: "input-small"});

	// Input validation
  	$(function () { $("input,select,textarea").not("[type=submit]").jqBootstrapValidation(); } );
</script>
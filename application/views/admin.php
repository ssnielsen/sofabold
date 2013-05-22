<div class="adminpanel">
	<h1>Adminpanel</h1>
	<div class="addteam_form">
		<fieldset>
			<legend>Opret hold</legend>
			<?php 
				$this->load->helper('form'); 
				echo form_open_multipart('admin/createTeam');
				echo form_input('name_team', 'Navn') . '<br>';
				echo form_upload('userfile_team', 'Logo') . '<br>';
				echo form_submit('createTeam', 'Opret hold');
			?>
		</fieldset>
	</div>

	<div class="addtournament_form">
		<fieldset>
			<legend>Opret turnering</legend>
			<?php 
				$this->load->helper('form'); 
				echo form_open_multipart('admin/createTournament');
				echo form_input('name_tournament', 'Navn') . '<br>';
				echo form_upload('userfile_tournament', 'Logo') . '<br>';
				echo form_submit('createTournament', 'Opret turnering');
			?>
		</fieldset>
	</div>
</div>
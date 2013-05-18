<div class="adminpanel">
	<h1>Adminpanel</h1>
	<div class="addteam_form">
		<fieldset>
			<legend>Opret hold</legend>
			<?php 
				$this->load->helper('form'); 
				echo form_open_multipart('admin/createTeam');
				echo form_input('name', 'Navn') . '<br>';
				echo form_upload('logo', 'Logo') . '<br>';
				echo form_submit('createTeam', 'Opret hold');
			?>
		</fieldset>
	</div>
</div>
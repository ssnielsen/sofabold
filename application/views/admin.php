<h1>Adminpanel</h1>

<ul class="nav nav-tabs" id="adminTabs">
  <li class="active"><a href="#team" data-toggle="tab">Hold</a></li>
  <li><a href="#tournament" data-toggle="tab">Turnering</a></li>
  <li><a href="#channel" data-toggle="tab">Kanal</a></li>
  <li><a href="#match" data-toggle="tab">Kamp</a></li>
</ul>
<script type="text/javascript">
  $('#home a').click(function (e) {
    e.preventDefault();
    $(this).tab('show');
  })
  $('#tournament a').click(function (e) {
    e.preventDefault();
    $(this).tab('show');
  })
  $('#channel a').click(function (e) {
    e.preventDefault();
    $(this).tab('show');
  })
  $('#match a').click(function (e) {
    e.preventDefault();
    $(this).tab('show');
  })
  $('#adminTabs a[href="#team"]').tab('show')
</script>

<div class="tab-content">
  <div class="tab-pane active" id="team">
    <div class="row">
      <div class="span6">
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
      <div class="span6">
        <fieldset>
          <legend>Rediger hold</legend>
          <form method="post" action="<?= base_url(); ?>index.php/admin/deleteTeam">
            ofjasædlkfjsædkfjaskdfjhasdklfj<br>
          </form>
        </fieldset>
      </div>
    </div>
  </div>
  <div class="tab-pane" id="tournament">
    <div class="row">
      <div class="span6">
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
  <div class="tab-pane" id="channel">
    <div class="row">  
      <div class="span6">
        <fieldset>
          <legend>Opret kanal</legend>
          <form class="form-horizontal" method="post" action="<?= base_url(); ?>index.php/admin/createChannel" enctype="multipart/form-data">
              <div class="control-group">
                <label class="control-label" for="name_channel">Kanalnavn</label>
                <div class="controls">
                  <input type="text" name="name_channel" id="name_channel" placeholder="Kanalnavn" required>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label" for="userfile_channel">Logo</label>
                <div class="controls">
                  <input type="file" class="filestyle" data-icon="false" name="userfile_channel" id="userfile_channel" required>
                </div>
              </div>
              <div class"control-group">
                <div class="controls">
                  <button type="submit" name="createChannel" class="btn">Opret kanal</button>
                </div>
              </div>
            </form>
        </fieldset>
      </div>
    </div>
  </div>
  <div class="tab-pane" id="match"></div>
</div>

<script type="text/javascript">
// Upload box bootstrap style
$(":file").filestyle({classInput: "input-small"});

// Input validation
  $(function () { $("input,select,textarea").not("[type=submit]").jqBootstrapValidation(); } );
</script>
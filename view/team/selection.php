<div tool>Team selection</div>

<link rel="import" href="/public/elements/stretch-team-selection/stretch-team-selection.html">

<stretch-team-selection
    home_team_name="<?php echo $this->teamSelectionData['home_team_name']; ?>"
    away_team_name="<?php echo $this->teamSelectionData['away_team_name']; ?>"
    fixture_date="<?php echo $this->teamSelectionData['fixture_date']; ?>"
    fixture_time="<?php echo $this->teamSelectionData['fixture_time']; ?>"
    team_id="<?php echo $this->teamSelectionData['team_id']; ?>"
    fixture_id="<?php echo $this->teamSelectionData['fixture_id']; ?>"
    available_players="<?php echo rawurlencode(json_encode($this->teamSelectionData['available_players'])); ?>"
    selected_players="<?php echo rawurlencode(json_encode($this->teamSelectionData['selected_players'])); ?>">
</stretch-team-selection>

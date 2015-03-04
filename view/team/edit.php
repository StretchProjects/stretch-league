<div tool>Profile</div>

<link rel="import" href="/public/elements/stretch-team-profile-edit/stretch-team-profile-edit.html">
<stretch-team-profile-edit
    team_name="<?php echo $this->teamData[0]['team_name']; ?>"
    team_manager="<?php echo $this->teamData[0]['team_name']; ?>"
    team_contact_number="<?php echo $this->teamData[0]['team_contact_number']; ?>"
    team_crest="<?php echo $this->teamData[0]['team_crest']; ?>"
    ground_name="<?php echo $this->teamData[0]['ground_name']; ?>"
    ground_address="<?php echo $this->teamData[0]['ground_address']; ?>"
    ground_capacity="<?php echo $this->teamData[0]['ground_capacity']; ?>">
</stretch-team-profile-edit>

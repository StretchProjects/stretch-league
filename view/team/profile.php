<div tool>Profile</div>

<link rel="import" href="/public/elements/stretch-team-profile/stretch-team-profile.html">
<stretch-team-profile
    team_name="<?php echo $this->teamData[0]['team_name']; ?>"
    team_manager="<?php echo $this->teamData[0]['team_name']; ?>"
    team_contact_number="<?php echo $this->teamData[0]['team_contact_number']; ?>"
    team_crest="<?php echo $this->teamData[0]['team_crest']; ?>"
    ground_name="<?php echo $this->teamData[0]['ground_name']; ?>"
    ground_address="<?php echo $this->teamData[0]['ground_address']; ?>"
    ground_capacity="<?php echo $this->teamData[0]['ground_capacity']; ?>">
</stretch-team-profile>


<link rel="import" href="/public/elements/stretch-fixture-profile/stretch-fixture-profile.html">
<stretch-fixture-profile fixtures="<?php echo rawurlencode(json_encode($this->fixturesData)); ?>">
</stretch-fixture-profile>


<link rel="import" href="/public/elements/stretch-result-profile/stretch-result-profile.html">
<stretch-result-profile results="<?php echo rawurlencode(json_encode($this->resultsData)); ?>">
</stretch-result-profile>



<link rel="import" href="/public/elements/stretch-goalscorers/stretch-goalscorers.html">
<stretch-goalscorers goalscorers="<?php echo rawurlencode(json_encode($this->playerData)); ?>">
</stretch-goalscorers>
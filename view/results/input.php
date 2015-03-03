<div tool>Referee input</div>

<link rel="import" href="/public/elements/stretch-result-input/stretch-result-input.html">

<?php
for ($i = 0; $i < count($this->resultsInputData); $i++){
    ?>
<stretch-result-input home_team_name="<?php echo $this->resultsInputData[$i]['home_team_name']; ?>"
                      away_team_name="<?php echo $this->resultsInputData[$i]['away_team_name']; ?>"
                      fixture_date="<?php echo $this->resultsInputData[$i]['fixture_date']; ?>"
                      fixture_time="<?php echo $this->resultsInputData[$i]['fixture_time']; ?>"
                      players="<?php echo rawurlencode(json_encode($this->resultsInputData[$i]['players'])); ?>">
</stretch-result-input>

<?php
}

?>

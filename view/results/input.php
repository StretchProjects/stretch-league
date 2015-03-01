<div tool>Referee input</div>

<link rel="import" href="/public/elements/stretch-result-input/stretch-result-input.html">
<link rel="import" href="/bower_components/paper-button/paper-button.html">

<?php
for ($i = 0; $i < count($this->resultsInputData); $i++) {
    ?>
    <stretch-result-input home_team_name="<?php echo $this->resultsInputData[$i]['home_team_name']; ?>"
                          away_team_name="<?php echo $this->resultsInputData[$i]['away_team_name']; ?>"
                          fixture_date="<?php echo $this->resultsInputData[$i]['fixture_date']; ?>"
                          fixture_time="<?php echo $this->resultsInputData[$i]['fixture_time']; ?>"
                          fixture_id="<?php echo $this->resultsInputData[$i]['fixture_id']; ?>">

        <table class="fullwidth">
            <tr>
                <td>
                    <select>
                        <option> -- No selection -- </option>
                        <?php
                        foreach ($this->resultsInputData[$i]['players'] as $player) {
                            echo '<option id="' . $player['player_id'] . '">' . $player['player_name'] . '</option>';
                        }
                        ?>
                    </select>
            <paper-button type="button" raised>-</paper-button>
            <paper-button type="button" class="primary-button" raised>+</paper-button>
            </td>
            <td><paper-button class="centeraligned primary-button" type="submit" raised>Submit</paper-button></td>
            <td>
                <select>
                    <option> -- No selection -- </option>
                    <?php
                    foreach ($this->resultsInputData[$i]['players'] as $player) {
                        echo '<option id="' . $player['player_id'] . '">' . $player['player_name'] . '</option>';
                    }
                    ?>
                </select>
            <paper-button type="button" raised>-</paper-button>
            <paper-button type="button" class="primary-button" raised>+</paper-button>
            </td>
            </tr>
            <tr>
                <td><span id="home_team_goals"></span></td>
                <td></td>
                <td><span id="away_team_goals"></span></td>
            </tr>
        </table>
    </stretch-result-input>

    <?php
}
?>

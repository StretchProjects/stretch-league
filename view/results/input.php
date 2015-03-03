<div tool>Referee input</div>

<link rel="import" href="/public/elements/stretch-result-input/stretch-result-input.html">
<link rel="import" href="/bower_components/paper-button/paper-button.html">

<?php
$count = 1;

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
                    <?php
                    foreach ($this->resultsInputData[$i]['goalscorers']['home'] as $key => $value) {
                        ?>
                        <div>
                            <form action="#" id="home_delete_form_<?php echo $count; ?>" method="POST">
                                <input type="hidden" name="run" value="delete"/>
                                <input type="hidden" name="fixture_id" value="<?php echo $this->resultsInputData[$i]['fixture_id'] ?>"/>
                                <input type="hidden" name="team_name" value="<?php echo $this->resultsInputData[$i]['home_team_name'] ?>"/>
                                <select name="player_id" readonly>
                                    <option> -- No selection -- </option>
                                    <?php
                                    foreach ($this->resultsInputData[$i]['players'] as $player) {
                                        echo '<option value="' . $player['player_id'] . '"';
                                        if ($value['player_id'] == $player['player_id']) {
                                            echo ' selected';
                                        }
                                        echo '>' . $player['player_name'] . "</option>\n";
                                    }
                                    ?>
                                </select>
                                <paper-button type="button" onclick="document.getElementById('home_delete_form_<?php echo $count; ?>').submit();" raised>-</paper-button>
                            </form>
                        </div>
                        <?php
                        $count++;
                    }
                    ?>
                </td>
                <td>
                    <?php
                    foreach ($this->resultsInputData[$i]['goalscorers']['away'] as $key => $value) {
                        ?>
                        <div>
                            <form action="#" id="away_delete_form_<?php echo $count; ?>" method="POST">
                                <input type="hidden" name="run" value="delete"/>
                                <input type="hidden" name="fixture_id" value="<?php echo $this->resultsInputData[$i]['fixture_id'] ?>"/>
                                <input type="hidden" name="team_name" value="<?php echo $this->resultsInputData[$i]['away_team_name'] ?>"/>
                                <select name="player_id" readonly>
                                    <option> -- No selection -- </option>
                                    <?php
                                    foreach ($this->resultsInputData[$i]['players'] as $player) {
                                        echo '<option value="' . $player['player_id'] . '"';
                                        if ($value['player_id'] == $player['player_id']) {
                                            echo ' selected';
                                        }
                                        echo '>' . $player['player_name'] . "</option>\n";
                                    }
                                    ?>
                                </select>
                                <paper-button type="button" onclick="document.getElementById('away_delete_form_<?php echo $count; ?>').submit();" raised>-</paper-button>
                            </form>
                        </div>
                        <?php
                        $count++;
                    }
                    ?>
                </td>
            </tr>
            <tr>
                <td>
                    <form action="#" id="home_add_form" method="POST">
                        <input type="hidden" name="run" value="insert"/>
                        <input type="hidden" name="fixture_id" value="<?php echo $this->resultsInputData[$i]['fixture_id'] ?>"/>
                        <input type="hidden" name="team_name" value="<?php echo $this->resultsInputData[$i]['home_team_name'] ?>"/>
                        <select name="player_id">
                            <option> -- No selection -- </option>
                            <?php
                            foreach ($this->resultsInputData[$i]['players'] as $player) {
                                echo '<option value="' . $player['player_id'] . '">' . $player['player_name'] . "</option>\n";
                            }
                            ?>
                        </select>
                        <paper-button type="submit" class="primary-button" onclick="document.getElementById('home_add_form').submit();" raised>+</paper-button>
                    </form>
                </td>
                <td>
                    <form action="#" id="away_add_form" method="POST">
                        <input type="hidden" name="run" value="insert"/>
                        <input type="hidden" name="fixture_id" value="<?php echo $this->resultsInputData[$i]['fixture_id'] ?>"/>
                        <input type="hidden" name="team_name" value="<?php echo $this->resultsInputData[$i]['away_team_name'] ?>"/>
                        <select name="player_id">
                            <option> -- No selection -- </option>
                            <?php
                            foreach ($this->resultsInputData[$i]['players'] as $player) {
                                echo '<option value="' . $player['player_id'] . '">' . $player['player_name'] . "</option>\n";
                            }
                            ?>
                        </select>
                        <paper-button type="submit" class="primary-button" onclick="document.getElementById('away_add_form').submit();" raised>+</paper-button>
                    </form>
                </td>
            </tr>
            <tr>
                <td><span id="home_team_goals">
                        <?php
                        echo count($this->resultsInputData[$i]['goalscorers']['home']);
                        ?>
                    </span></td>
                <td><span id="away_team_goals">
                        <?php
                        echo count($this->resultsInputData[$i]['goalscorers']['away']);
                        ?>
                    </span></td>
            </tr>
        </table>
    </stretch-result-input>

    <?php
}

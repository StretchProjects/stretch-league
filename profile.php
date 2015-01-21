<!DOCTYPE html>
<html>
    <head>
        <title>Stretch League - Stretch Projects</title>
        <meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1, user-scalable=yes">
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-capable" content="yes">

        <script src="bower_components/webcomponentsjs/webcomponents.js" type="text/javascript"></script>
        <link rel="import" href="bower_components/core-scaffold/core-scaffold.html">
        <link rel="import" href="bower_components/core-header-panel/core-header-panel.html">
        <link rel="import" href="bower_components/core-menu/core-menu.html">
        <link rel="import" href="bower_components/core-item/core-item.html">
        <link rel="import" href="bower_components/paper-shadow/paper-shadow.html">
        <link href="public/styles/main.css" rel="stylesheet" type="text/css"/>
    </head>

    <body unresolved>

    <core-scaffold label="Stretch League" fit>
        <core-header-panel navigation flex mode="seamed" style="background-color: #edf1f6;">
            <core-toolbar style="background-color: #41587c; color: #fff">Stretch League</core-toolbar>
            <core-menu selected="0">
                <core-item icon="list" label="League table" tag="table" url="views/table/index.php"><a href="views/table/index.php"></a></core-item>
                <core-item icon="assessment" label="Results" tag="table" url="views/table/index.php"><a href="views/table/index.php"></a></core-item>
                <core-item icon="event" label="Fixtures" tag="table" url="views/table/index.php"><a href="views/table/index.php"></a></core-item>
                <core-item icon="input" label="Team selection" tag="table" url="views/table/index.php"><a href="views/table/index.php"></a></core-item>
                <core-item icon="create" label="Result input" tag="table" url="views/table/index.php"><a href="views/table/index.php"></a></core-item>
            </core-menu>
        </core-header-panel>

        <div tool>Profile</div>

        <paper-shadow class="card" z="1">
            <h1>team name</h1>
            <img class="teamlogo" src="" alt="team name logo">
            <table class="leftalign">
                <tr>
                    <td>Manager:</td>
                    <td>Joe Bloggs</td>
                </tr>
                <tr>
                    <td>Ground name:</td>
                    <td>Ground 1</td>
                </tr>
                <tr>
                    <td>Capacity:</td>
                    <td>15,000</td>
                </tr>
                <tr>
                    <td>Address</td>
                    <td>123 Some Street, London, SW1 1AA</td>
                </tr>
                <tr>
                    <td>Contact:</td>
                    <td>012345678902</td>
                </tr>
            </table>
        </paper-shadow>
        <paper-shadow class="card" z="1">
            <h2>Upcoming fixtures</h2>
            <table class="data">
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Home</th>
                        <th>vs</th>
                        <th>Away</th>
                        <th>Kickoff</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>07/01/2015</td>
                        <td><strong>Team name</strong></td>
                        <td>vs</td>
                        <td><a href="profile.php?id=2">Away team name</a></td>
                        <td>15:00</td>
                    </tr>
                    <tr>
                        <td>14/01/2015</td>
                        <td><strong>Team name</strong></td>
                        <td>vs</td>
                        <td><a href="profile.php?id=2">Away team name</a></td>
                        <td>15:00</td>
                    </tr>
                    <tr>
                        <td>21/01/2015</td>
                        <td><strong>Team name</strong></td>
                        <td>vs</td>
                        <td><a href="profile.php?id=2">Away team name</a></td>
                        <td>15:00</td>
                    </tr>
                </tbody>
            </table>
        </paper-shadow>
        <paper-shadow class="card" z="1">
            <h2>Results</h2>
            <table class="data">
                <thead>
                    <tr>
                        <th>Home</th>
                        <th></th>
                        <th>vs</th>
                        <th></th>
                        <th>Away</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>Team name</strong></td>
                        <td>1</td>
                        <td>vs</td>
                        <td>0</td>
                        <td><a href="profile.php?id=2">Away team name</a></td>
                    </tr>
                    <tr>
                        <td><strong>Team name</strong></td>
                        <td>1</td>
                        <td>vs</td>
                        <td>0</td>
                        <td><a href="profile.php?id=2">Away team name</a></td>
                    </tr>
                    <tr>
                        <td><strong>Team name</strong></td>
                        <td>1</td>
                        <td>vs</td>
                        <td>0</td>
                        <td><a href="profile.php?id=2">Away team name</a></td>
                    </tr>
                    <tr>
                        <td><strong>Team name</strong></td>
                        <td>1</td>
                        <td>vs</td>
                        <td>0</td>
                        <td><a href="profile.php?id=2">Away team name</a></td>
                    </tr>
                </tbody>
            </table>
        </paper-shadow>
        <paper-shadow class="card" z="1">
            <h2>Top goalscorer</h2>
            <table class="data">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Goals</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>A Example</td>
                        <td>10</td>
                    </tr>
                    <tr>
                        <td>AN Example</td>
                        <td>9</td>
                    </tr>
                    <tr>
                        <td>A Other</td>
                        <td>7</td>
                    </tr>
                    <tr>
                        <td>J Bloggs</td>
                        <td>6</td>
                    </tr>
                    <tr>
                        <td>J Doe</td>
                        <td>5</td>
                    </tr>
                </tbody>
            </table>
        </paper-shadow>
    </core-scaffold>

    </body>
</html>

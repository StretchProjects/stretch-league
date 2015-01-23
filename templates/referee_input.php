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

        <div tool>Referee input</div>

        <paper-shadow class="card" z="1">
            <h1>team name vs team name (07/01/2015 @ 15:00)</h1>
            <form>
                <table class="fullwidth">
                    <tr>
                        <td>
                            <h2>Home team name</h2>
                            <select>
                                <option>-- none --</option>
                                <option>Joe Bloggs</option>
                                <option>Joe Bloggs</option>
                                <option selected="selected">Joe Bloggs</option>
                                <option>Joe Bloggs</option>
                                <option>Joe Bloggs</option>
                                <option>Joe Bloggs</option>
                                <option>Joe Bloggs</option>
                                <option>Joe Bloggs</option>
                                <option>Joe Bloggs</option>
                            </select>
                            <button>-</button>
                            <button>+</button><br>
                            <select>
                                <option>-- none --</option>
                                <option>Joe Bloggs</option>
                                <option>Joe Bloggs</option>
                                <option>Joe Bloggs</option>
                                <option>Joe Bloggs</option>
                                <option>Joe Bloggs</option>
                                <option>Joe Bloggs</option>
                                <option>Joe Bloggs</option>
                                <option>Joe Bloggs</option>
                                <option>Joe Bloggs</option>
                            </select>
                            <button>-</button>
                            <button>+</button>
                        </td>
                        <td>
                            <button class="centeraligned" type="submit">Submit</button>
                        </td>
                        <td>
                            <h2>Away team name</h2>
                            <select>
                                <option>-- none --</option>
                                <option>Joe Bloggs</option>
                                <option>Joe Bloggs</option>
                                <option>Joe Bloggs</option>
                                <option>Joe Bloggs</option>
                                <option>Joe Bloggs</option>
                                <option>Joe Bloggs</option>
                                <option>Joe Bloggs</option>
                                <option>Joe Bloggs</option>
                                <option>Joe Bloggs</option>
                            </select>
                            <button>-</button>
                            <button>+</button>
                        </td>
                    </tr>
                    <tr>
                        <td><p class="score">1</p></td>
                        <td></td>
                        <td><p class="score">0</p></td>
                    </tr>
                </table>

            </form>
        </paper-shadow>
    </core-scaffold>

    </body>
</html>

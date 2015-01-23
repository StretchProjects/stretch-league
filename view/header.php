<!DOCTYPE html>
<html>
    <head>
        <title>Stretch League - Stretch Projects</title>
        <meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1, user-scalable=yes">
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-capable" content="yes">

        <script src="/bower_components/webcomponentsjs/webcomponents.js" type="text/javascript"></script>
        <link rel="import" href="/bower_components/core-scaffold/core-scaffold.html">
        <link rel="import" href="/bower_components/core-header-panel/core-header-panel.html">
        <link rel="import" href="/bower_components/core-menu/core-menu.html">
        <link rel="import" href="/bower_components/core-item/core-item.html">
        <link rel="import" href="/bower_components/paper-shadow/paper-shadow.html">
        <link href="/public/styles/main.css" rel="stylesheet" type="text/css"/>
    </head>

    <body unresolved>

    <core-scaffold label="Stretch League" fit>
        <core-header-panel navigation flex mode="seamed" style="background-color: #edf1f6;">
            <core-toolbar style="background-color: #41587c; color: #fff">Stretch League</core-toolbar>
            <core-menu>
                <core-item icon="list" label="League table" tag="table" url="/index/index"><a href="/index/index"></a></core-item>
                <core-item icon="assessment" label="Results" tag="table" url="/results/index"><a href="/results/index"></a></core-item>
                <core-item icon="event" label="Fixtures" tag="table" url="/fixtures/index"><a href="/fixtures/index"></a></core-item>
                <core-item icon="input" label="Team selection" tag="table" url="/team/selection"><a href="/team/selection"></a></core-item>
                <core-item icon="create" label="Result input" tag="table" url="/results/input"><a href="/results/input"></a></core-item>
                <core-item icon="create" label="Team profile" tag="table" url="/team/index"><a href="/team/index"></a></core-item>
            </core-menu>
        </core-header-panel>
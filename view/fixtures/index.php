<div tool>Fixtures</div>

<link rel="import" href="/public/elements/stretch-fixture/stretch-fixture.html">

<?php
for ($i = 0; $i < count($this->fixturesData); $i++){
    ?>
<stretch-fixture heading="<?php echo $this->fixturesData[$i][0]['fixture_date']; ?>"
                 fixtures="<?php echo rawurlencode(json_encode($this->fixturesData[$i])); ?>">
</stretch-fixture>
<?php
}
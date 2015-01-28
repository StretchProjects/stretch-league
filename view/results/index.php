<div tool>Results</div>

<link rel="import" href="/public/elements/stretch-result/stretch-result.html">

<?php
for ($i = 0; $i < count($this->resultsData); $i++){
    ?>
<stretch-result heading="<?php echo $this->resultsData[$i][0]['fixture_date']; ?>"
                 results="<?php echo rawurlencode(json_encode($this->resultsData[$i])); ?>">
</stretch-result>
<?php
}
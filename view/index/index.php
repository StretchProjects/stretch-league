<div tool>Current positions</div>

<link rel="import" href="/public/elements/stretch-fulltable/stretch-fulltable.html">

<stretch-fulltable validat="<?php echo date('d-m-Y'); ?>" table="<?php echo rawurlencode(json_encode($this->tableData)); ?>">
</stretch-fulltable>

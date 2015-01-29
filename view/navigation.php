
<core-header-panel navigation flex mode="seamed" style="background-color: #edf1f6;">
    <core-toolbar style="background-color: #41587c; color: #fff">Stretch League</core-toolbar>
    <core-menu>

        <?php
        $files = scandir(CONTROLLER_FOLDER);

        foreach ($files as $file) {
            if ($file == '.' || $file == '..') {
                continue;
            }
            require_once CONTROLLER_FOLDER . $file;
            $file = strstr($file, '.php', true);
            $f = new $file();

            if (property_exists($f, 'links')) {
                if (method_exists($f, 'index')) {
                    echo '<core-item icon="list" label="' . ucwords(strtolower($file)) . '" tag="table" url="/' . $file . '/index"><a href="/' . $file . '/index"></a></core-item>';
                }

                foreach ($f->links as $key => $value) {
                    echo '<core-item icon="' . $value . '" label="' . ucwords(strtolower($key)) . '" tag="table" url="/' . $file . '/"' . $key . '><a href="/' . $file . '/' . $key . '"></a></core-item>';
                }
            }
        }
        ?>
        
    </core-menu>
</core-header-panel>

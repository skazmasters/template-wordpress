<?php

require_once __DIR__ . '/src/fix-core.php';
require_once __DIR__ . '/src/rewrites.php';
require_once __DIR__ . '/src/post-types.php';
require_once __DIR__ . '/src/init.php';
require_once __DIR__ . '/src/helpers.php';
require_once __DIR__ . '/src/ajax.php';

if (WP_ENV != 'local' || DB_HOST != 'db') {
    require_once __DIR__ . '/src/acf.php';
}

<?php
define('G5_LANG_DIR',      'eng');
define('G5_LANG_URL',      G5_URL.'/'.G5_LANG_DIR);
define('G5_LANG_CSS_URL',  G5_LANG_URL.'/'.G5_CSS_DIR);
define('G5_LANG_IMG_URL',  G5_LANG_URL.'/'.G5_IMG_DIR);
define('G5_LANG_JS_URL',   G5_LANG_URL.'/'.G5_JS_DIR);
define('G5_LANG_PATH',     G5_PATH.'/'.G5_LANG_DIR);

if (preg_match("/_eng/i", $bo_table)) define('_LANG_', true);
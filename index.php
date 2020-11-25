<?php
    define("BASE_URI", "/php-member-admin");

    define("_ROOT", __dir__);
    define("_VIEW", _ROOT . '/view');
    define("_TEMPLATE", _VIEW . '/template');

    $contentPage = $_GET['page'] ?? 'main';

    include_once(_TEMPLATE . "/header.php");
    include_once(_TEMPLATE . "/{$contentPage}.php");
    include_once(_TEMPLATE . "/footer.php");
    include_once(_ROOT . "/core/lib.php");
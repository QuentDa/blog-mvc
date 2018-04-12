<?php

require_once ('common.php');

$db = dbConnect();

session_start();

if (isset($_GET['c']) ) {


    if ($_GET['c'] && $_GET['c'] == 'index') {
        require_once('./controllers/index.php');
    }
    if ($_GET['c'] && $_GET['c'] == 'article') {
        require_once('./controllers/article.php');
    }
    if ($_GET['c'] && $_GET['c'] == 'article_list') {
        require_once('./controllers/article_list.php');
    }

}
else{
    require_once('./controllers/index.php');
}
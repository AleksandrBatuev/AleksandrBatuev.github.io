<?php  return 'if ($_SERVER[\'HTTP_X_REQUESTED_WITH\'] != \'XMLHttpRequest\') {return;}
$action = $_POST[\'action\'];

if (empty($action)) {return;}

$res = \'\';
switch ($action) {
    case \'get_resources\': 
       $res = $modx->getChunk(\'page_two\');
}
if (!empty($res)) {
    die($res);
}
return;
';
<?php
$helper = new \Bootstrap\View\Helper\BootstrapHtmlHelper ($this) ;
$class = 'alert';
if (!empty($params['class'])) {
    switch ($params['class']) {
        case 'error':
            echo $helper->alert (h($message), 'danger', $params) ;
            break;

        default:
            echo $helper->alert (h($message), $params['class'], $params) ;
            break;
    }
}
?>

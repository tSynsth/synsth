<?php
global $sidebar;

if (is_array($sidebar['left'])) {
    foreach ($sidebar['left'] as $sb) {
        dynamic_sidebar($sb);
    }
}else{
    dynamic_sidebar($sidebar['left']);
}
?>
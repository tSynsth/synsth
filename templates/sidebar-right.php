<?php
global $sidebar;

if (is_array($sidebar['right'])) {
    foreach ($sidebar['right'] as $sb) {
        dynamic_sidebar($sb);
    }
}else{
    dynamic_sidebar($sidebar['right']);
}
?>

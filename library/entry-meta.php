<?php
if(!function_exists('FoundationPress_entry_meta')) :
    function FoundationPress_entry_meta() {
        echo '<time class="post-date" datetime="'. get_the_time('c') .'">'. sprintf(__('%s', 'FoundationPress'), get_the_time('D d m')) .'</time>';
        
    }
endif;
?>
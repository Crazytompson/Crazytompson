<?php

//后台引入幻灯片代码
require get_template_directory() . '/inc/post_type.php';




// 后台外观处没有菜单和小工具显示

if ( function_exists('register_sidebar') )
 
register_sidebar(array(
 
'before_widget' => '<div class="sidebox">    ',
 
'after_widget' => '</div>',
 
'before_title' => '<h2>',
 
'after_title' => '</h2>',
 
));





?>
<?php
    function sidebarmenu($title ,$name, $page, $icon) {
        $page = activePage($name,$page);
        $sidebarmenu = '<li><a href="index.php?page='.$name.'" class="waves-effect '.$page.'"><i class="zmdi '.$icon.'"></i><span>'.$title.'</span></a></li>';
        return $sidebarmenu;
    }
?>
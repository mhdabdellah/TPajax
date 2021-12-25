<?php


/*if (isset($_GET['name']))
    if (isset ($_GET['lastlogin']))
        echo 'Welcome <h1>'.$_GET['name'].'</h1> In Our Web Site For Test Ajax <br> your last Login is <h1>'.$_GET['lastlogin'].'</h1>';
**/
if (isset($_POST['name']))
    if (isset ($_POST['lastlogin']))
        echo 'Welcome <h1>'.$_POST['name'].'</h1> In Our Web Site For Test Ajax <br> your last Login is <h1>'.$_POST['lastlogin'].'</h1>';

?>
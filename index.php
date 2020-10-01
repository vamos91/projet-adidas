<?php
    $page = $_GET['page'];

    require 'header.php';
    require 'navbar.php';

    if($page === 'home')
    {
        require 'home.php';
    }

    if($page === 'contact')
    {
        require 'contact.php';
    }

    if($page !== 'home' && $page !== 'contact')
    {   
        require 'error-404.php';
    }


    require 'footer.php';
?>

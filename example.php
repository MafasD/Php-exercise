<?php include "Third.php" ?>
    <h1>PHP Basics</h1>
    <?php $myname="Mafas";
    echo "Hello $myname";
    echo '<br>';
    echo 'Hello '.$myname;
    echo '<br>';
    echo 'Here is the link: <a href="https:www.oamk.fi">'.$myname.' </a>;'
    ?>
    <h2>An array </h2>
    <?php 
    $students=array('Jim', 'Lisa', 'Bob');
    echo 'Second student is'.$students[l];
    ?>
    <h1>Print_r functions</h1>
    <?php print_r($students); ?>
    <h1>foreach - loop</h1>
    <ul>
    <?php
    foreach ($students as $row) {
        echo '<li>'.$row. '</li>';
    }
    ?>
    <h1>Two-dimensional array</h1>
    <?php
    $names=array(
    array('Jim','Smith'),
    array('Lisa', 'Jones'),
    array('Bob','Daniels')
    );
    echo '<h3>with print_r</h3>';
    print_r($names);
    echo '<h3>with foreach-loop</h3>';
    echo '<ul>';
    foreach ($names as $row) {
        echo '<li>'.$row[0].''.$row[1].'</li>';
    }
echo '</ul>';
    ?>

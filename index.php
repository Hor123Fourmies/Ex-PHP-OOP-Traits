<?php
/**
 * Created by PhpStorm.
 * User: sstienface
 * Date: 11/12/2018
 * Time: 14:35
 */

include "traits/test1.php";
include "traits/test2.php";

require "classes/lutin.php";

$lutin = new lutin();
$lutin->bonjour();
echo "<br>";
$lutin->aurevoir();
echo "<br>";
$lutin->setNom("petit lutin");
echo $lutin->getNom();
echo "<br>";







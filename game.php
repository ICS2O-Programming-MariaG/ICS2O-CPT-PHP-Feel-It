<?php
  //global Phaser


  //NOTE TO SELF: websites to reference:
  //https://www.w3schools.com/php/php_datatypes.asp
  //https://www.w3schools.com/php/php_oop_classes_objects.asp

  //Creating a class to hold the object variable "config"
  class Setup {
    //Class properties
    public $type = Phaser.AUTO;
    public $width = 1920;
    public $height = 1080;
  }

  $config = new Setup();
  $game = new Phaser.Game($config);
  echo "$game";
?>


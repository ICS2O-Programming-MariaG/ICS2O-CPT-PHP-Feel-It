<?php
  //global Phaser

  //using an array constant to set up the basic Phaser game
  //array constant PHP syntax learned from https://www.w3schools.com/php/php_constants.asp
  define("CONFIG", array(
    //NOT WORKING - doesn't like colon :(
    type: Phaser.AUTO,
    width: 1920,
    height: 1080
  ));

  define("GAME", new Phaser.Game(CONFIG));
  echo GAME;
?>


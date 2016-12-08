<?php
class Ball
{
    private $color;

    public function __construct($color) {
      $this->color = $color;
    }
      function getBallColor(){
      return $this->color;
      }

}
?>

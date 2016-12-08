<?php
class Player
{
  private $playerArray = [];
  // private string $name;
  // private integer $amount;

    public function __construct($name, $amount) {
      $this->playerArray = [$name, $amount];
    }

      function setPlayer($playerName, $playerAmount){
        $this->playerArray[0] = $playerName;
        $this->playerArray[1] = $playerAmount;
      }
      function getPlayer(){
      return $this->playerArray;
      }

}
?>

<?php

class Bicycle
{
  private string $color;
  private int $currentSpeed;
  private int $nbSeats = 1;
  private int $nbWheels = 2;

  public function __construct($color)
  {
    $this->color = $color;
  }


  public function getColor(): string
  {
    return $this->color;
  }

  public function setColor($color): void
  {
    $this->color = $color;
  }

  public function getCurrentSpeed(): int
  {
    return $this->currentSpeed;
  }

  public function setCurrentSpeed($currentSpeed): void
  {
    if($currentSpeed >= 0)
    {
      $this->currentSpeed = $currentSpeed;
    }
  }

  public function forward(): string
  {
    $this->currentSpeed = 15;
    return 'Go !';
  }

  public function brake(): string
  {
    $sentence = "";
    while ($this->currentSpeed > 0)
    {
      $this->currentSpeed--;
      $sentence .= "Brake !!";
    }
    $sentence .= "I'm stopped !";
    return $sentence;
  }

}
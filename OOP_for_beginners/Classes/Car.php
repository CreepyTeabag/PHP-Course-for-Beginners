<?php
/*
   // Procedural PHP:

   $brand = "Volvo";
   $color = "Green";

   function getCarInfo($brand, $color) {
      return "Brand: " . $brand . ", Color: " . $color;
   }

   echo getCarInfo($brand, $color);
*/

class Car {
   // Properties / (Fields in other programming languages)
   private $brand;
   private $color;
   // public $vehicleType = "car";

   // Constructor
   public function __construct($brand, $color = "none") {
      $this->brand = $brand;
      $this->color = $color;
   }

   // Getter & setter methods / (Properties in other programming languages)
   public function getBrand() {
      return $this->brand;
   }

   public function setBrand($brand) {
      $this->brand = $brand;
   }

   public function getColor() {
      return $this->color;
   }

   public function setColor($color) {
      $allowedColor = [
         "red",
         "blue",
         "green",
         "yellow"
      ];
      if (in_array($color, $allowedColor)) {
         $this->color = $color;
      }
   }

   // Method
   public function getCarInfo() {
      return "Brand: " . $this->brand . ", Color: " . $this->color;
   }
}

// $car01 = new Car("Volvo", "Green");
// echo $car01->vehicleType; // car
// // echo $car01->brand; // fatal error (private property)
// echo "<br>";

// echo $car01->getCarInfo();

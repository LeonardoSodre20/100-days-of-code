

<?php 

  class Animal {
    public function Run() {
      echo "O animal correu !!";
    }

  }

  class Horse extends Animal {
    public function Run()
    {
      echo "O Cavalo correu !!";
    }
  }

  $horse = new Horse();
  $horse->Run();
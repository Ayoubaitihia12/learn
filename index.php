<?php

    class Fruit{
        public $name;
        
        function set_name($name){
            $this->name = $name;
        }

        function get_name(){
            return $this->name;
        }
    }

    $apple = new Fruit();
    $apple ->set_name("yellow apple");

    echo $apple->get_name();


    

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href=""
      rel="stylesheet"
    />
    <title>Form</title>
  </head>
  <body>

    <!-- <form action="result.php" method="POST">

        <label for="name">Name:</label>
        <input type="text" placeholder="Name:" name="name" id="name" required>
        <br>
        <label for="email">Email:</label>
        <input type="email" placeholder="Email:" name="email" id="email" required>
        <br>
        <label for="age">Age:</label>
        <input type="text" placeholder="Age:" name="age" id="age" required>
        <br>
        <button name="send" type="submit">Send</button>
    </form> -->

  </body>
</html>
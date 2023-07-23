<?php

    session_start();
 
    if(isset($_POST['send'])){

        $name = $_POST['name'];
        $email = $_POST['email'];
        $age = $_POST['age'];

        $_SESSION['name'] = $name;
        $_SESSION['email'] = $email;
        $_SESSION['age'] = $age;

        echo "
        <table style='border:1px solid black;'>
            <tr style='border:1px solid black;'>
                <th style='border:1px solid black;'>Name</th>
                <th>Email</th>
                <th>Age</th>
            </tr>
            <tr>
                <td>$name</th>
                <td>$email</th>
                <td>$age</th>
            </tr>

        </table>
        <a href='home.php'>Go To Home</a>
        ";
    }




    
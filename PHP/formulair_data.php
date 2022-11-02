<?php 

    // This part is for fetching data from formulair.php using thier name

    $Name = $_POST['Name'];
    $Email = $_POST['Email'];
    $Number = $_POST['Number'];
    $Message = $_POST['Message'];

    // This part is for shwing data in the user-side

    echo $Name, '<br>', $Email , '<br>' , $Number , '<br>' , $Message;
    ?>
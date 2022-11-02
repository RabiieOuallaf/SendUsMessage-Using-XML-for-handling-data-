<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulair</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"><script src="https://kit.fontawesome.com/28113ccba1.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../CSS/style.css">
</head>
<body>

    <div class="container">

        <header>Send Us a Message</header>
        <!-- == Starting the form == -->

        <form action="formulair_data.php" method="$_POST" id="form">

            <!-- This is a container for all groups of inputs and icons -->

            <div class="group-of-fields">

                <!-- This is the first group --> 

                <div class="field">

                    <input type="text" placeholder="Enter your full name : " id="input" name="Name" required>
                    <i class="fa-solid fa-user"></i>

                </div>

                <!-- This is the second group --> 

                <div class="field">

                    <input type="text" placeholder="Enter Your Email : " id="input" name="Email" required>
                    <i class="fa-solid fa-envelope"></i>

                </div>

                <!-- This is the third gorup --> 
                
                <div class="field">

                    <input type="number" placeholder="Enter Your Phone number : " id="input" name="Number" required>
                    <i class="fa-solid fa-phone"></i>

                </div>

                <!-- This is the fourth group --> 

                <div class="message">
                    <textarea placeholder="write your message here" rows="5" cols="40" id="textarea" name="Message" required></textarea>
                    <i class="fa-solid fa-message"></i>
                </div>

                <!-- This is the fifth group -->

                <div class="button-area">

                    <button type="submit" id="button">Send</button>

                </div>


            </div>
        </form>

    </div>


    <script src="../JS/script.js"></script>

</body>
</html>

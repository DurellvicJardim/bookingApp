<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Lato|Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" 
    integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" 
    crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="styles/stylesheet2.css">
    <title>Booking App</title>
</head>
<body>

    <?php
        //Variables:
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $email = $_POST['email'];
        $checkInDate = new DateTime($_POST['checkInDate']);
        $checkOutDate = new DateTime($_POST['checkOutDate']);

        //Arrays
        $raxford = ['Hotel Name'=>'Raxford', 'Daily Rate'=>300, 'Pool Area'=>'Yes', 'Bar'=>'Yes', 'Child Friendly'=>'No'];
        $blueShell = ['Hotel Name'=> 'Blue Shell', 'Daily Rate'=>400, 'Pool Area'=>'Yes', 'Bar'=>'No', 'Child Friendly'=>'Yes'];
        

        //Number of days calculation
        $numberOfDays = $checkInDate->diff($checkOutDate);
    
    ?>

    <section class="price-comparison">

        <div class="price-column">

            <div class="price-header">

                <div class="price">
                    <div class="rand-sign">R</div>
                        <?php echo $raxford['Daily Rate']?>
                    <div class="per-day">/day</div>
                </div>

                <div class="hotel-name"><?php echo $raxford['Hotel Name']?></div>

            </div>

            <div class="divider"></div>

            <div class="small-heading">
                <h4>Pricing:</h4>
            </div>

            <div class="feature">
                <i class="far fa-circle"></i>
                <?php echo 'Duration of stay: ' . $numberOfDays->days . " Days";?>
            </div>

            <div class="feature">
                <i class="far fa-circle"></i>
                <?php echo 'Total Price: ' . 'R' . $numberOfDays->days * $raxford['Daily Rate'];?> 
            </div>

            <div class="divider"></div>

            <div class="small-heading">
                <h4>Additional Info:</h4>
            </div>

            <div class="feature">
                <i class="far fa-circle"></i>
                <?php echo 'Pool Area: ' . $raxford['Pool Area'];?>
            </div>

            <div class="feature">
                <i class="far fa-circle"></i>
                <?php echo 'Bar: ' . $raxford['Bar'];?>
            </div>

            <div class="feature">
                <i class="far fa-circle"></i>
                <?php echo 'Child Friendly: ' . $raxford['Child Friendly'];?>
            </div>

            <form action="end.php" method="post">
            <input type="submit" class="book-button" name="raxfordSubmit" value="Book Now"></input>
            </form>

        </div>

        <div class="price-column other">

            <div class="price-header">

                <div class="price">
                    <div class="rand-sign">R</div>
                        <?php echo $blueShell['Daily Rate']?>
                    <div class="per-day">/day</div>
                </div>

                <div class="hotel-name"><?php echo $blueShell['Hotel Name']?></div>

            </div>

            <div class="divider"></div>

            <div class="small-heading">
                <h4>Pricing:</h4>
            </div>
            <div class="feature">
                <i class="far fa-circle"></i>
                <?php echo 'Duration of Stay: ' . $numberOfDays->days . " Days";?>
            </div>
            <div class="feature">
                <i class="far fa-circle"></i>
                <?php echo 'Total Price: ' . 'R' . $numberOfDays->days * $blueShell['Daily Rate'];?>
            </div>

            <div class="divider"></div>

            <div class="small-heading">
                <h4>Additional Info:</h4>
            </div>
            <div class="feature">
                <i class="far fa-circle"></i>
                <?php echo 'Pool Area: ' . $blueShell['Pool Area'];?>
            </div>
            <div class="feature">
                <i class="far fa-circle"></i>
                <?php echo 'Bar: ' . $blueShell['Bar'];?>
            </div>
            <div class="feature">
                <i class="far fa-circle"></i>
                <?php echo 'Child Friendly: ' . $blueShell['Child Friendly'];?>
            </div>
            
            <form action="end.php" method="post">
            <input type="submit" class="book-button" name="blueShellSubmit" value="Book Now"></input>
            </form>

        </div>
    </section>
</body>
</html>

<?php

//Logs User Info
$user = ['First Name'=>$firstName, 'Last Name'=>$lastName, 'Email'=>$email, 'Check-in Date'=>$checkInDate, 'Check-out Date'=>$checkOutDate, 'Duration'=>$numberOfDays];

//Stores user info and their hotel choice in a .txt file
if(isset($_POST['raxfordSubmit'])) {
    $file = fopen("userbooking.txt", "a");
    $encodedString = json_encode($user);
    file_put_contents("userbooking.txt", $encodedString);
    fwrite($file, " Hotel Choice: Raxford Hotel ");
    fclose($file);
}

if(isset($_POST['blueShellSubmit'])) {
    $file = fopen("userbooking.txt", "a");
    $encodedString = json_encode($user);
    file_put_contents("userbooking.txt", $encodedString);
    fwrite($file, " Hotel Choice: Blue Shell Hotel ");
    fclose($file);
}

?>
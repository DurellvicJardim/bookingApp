<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Lato|Poppins&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="styles/stylesheet1.css">
    <title>Booking App</title>
</head>
<body>
    

    <div class="container">
        <header class="title">
            <h1>Booking App:</h1>
        </header>
        <form action="display.php" method="POST">
            <div class="user-details">

                <div class="input-box">
                    <label for="firstName" class="details">First Name</label>
                    <input type="text" name="firstName" placeholder="Enter your first name" required>
                </div>

                <div class="input-box">
                    <label for="lastName" class="details">Last Name</label>
                    <input type="text" name="lastName" placeholder="Enter your last name" required>
                </div>

                <div class="input-box">
                    <label for="email" class="details">Email</label>
                    <input type="email" name="email" placeholder="Enter your email" required>
                </div>

                <div class="input-box">
                    <label for="checkInDate" class="details">Check-In Date</label>
                    <input type="date" name="checkInDate" required>
                </div>

                <div class="input-box">
                    <label for="checkOutDate" class="details">Check-Out Date</label>
                    <input type="date" name="checkOutDate" required>
                </div>

                <input type="submit" name="submit" value="Submit" class="submit">

            </div>
        </form>
    </div>
</body>
</html>
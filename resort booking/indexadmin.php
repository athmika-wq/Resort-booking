<!DOCTYPE html>
<html lang="en">
<head>
    <title> resort booking</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
    <div class="main">
  <nav>
    <div class="wrapper">
      <div class="logo"> <img src="palms.png"></div>
      <input type="radio" name="slider" id="menu-btn">
      <input type="radio" name="slider" id="close-btn">
      <ul class="nav-links">
        <label for="close-btn" class="btn close-btn"><i class="fas fa-times"></i></label>
        <li><a href="indexadmin.php">Home</a></li>
        <li><a href="account.php">Accounts</a></li>
        <li>
          <a href="#" class="desktop-item">Booking</a>
          <input type="checkbox" id="showDrop">
          <label for="showDrop" class="mobile-item">booking details</label>
          <ul class="drop-menu">
            <li><a href="table_reserve.php">Table booking</a></li>
            <li><a href="reservation.php">Room booking</a></li>
          </ul>
        </li>

        <li><a href="contactdetails.php">Contact us page</a></li>
        <li><a href="index.php">Logout</a></li>
      </ul>
      <label for="menu-btn" class="btn menu-btn"><i class="fas fa-bars"></i></label>
    </div>
  </nav>
    </div>

    <div class="title">
        <h1>the palms.</h1>
    </div>
    </body>
    </html>
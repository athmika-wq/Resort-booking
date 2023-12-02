<!DOCTYPE HTML>
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
        <li><a href="index.php">Home</a></li>
        <li><a href="gallery.html">Gallery</a></li>
        <li>
          <a href="#" class="desktop-item">booking</a>
          <input type="checkbox" id="showDrop">
          <label for="showDrop" class="mobile-item">booking</label>
          <ul class="drop-menu">
            <li><a href="table.php">table</a></li>
            <li><a href="room.php">room</a></li>
              </ul>
        </li>

        <li><a href="about.html">About us</a></li>
        <li><a href="contact.php">contact us</a></li>
        <li><a href="loginadmin.php">admin</a></li>
        <li><a href="register.php">Sign in</a></li>
      </ul>
      <label for="menu-btn" class="btn menu-btn"><i class="fas fa-bars"></i></label>
    </div>
  </nav>
    </div>

    <div class="title">
        <h1>The Palms.</h1>
    </div>
    <div class="content">
        <?php if (isset($_SESSION['success'])): ?>
            <div class="error success">
                <h3>
                    <?php
                        echo $_SESSION['success'];
                        unset($_SESSION['success']);
                    ?>
                </h3>
            </div>  
        <?php endif ?>
        <?php if (isset($_SESSION["username"])): ?>
            <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
            <p><a href="index.php?logout='1'" style="color: red;">Logout</a></p>
        <?php endif ?>

    </div> 


</body>
</html>


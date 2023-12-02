<!DOCTYPE html>
<html>
    <head>
        <title>CONTACT US PAGE</title>
        <link rel="stylesheet" type="text/css" href="contact.css">
    </head>
    <body>
        <section class="contact">
            <div class="content">
                <h2>Contact Us</h2>
                <p>The Palm resort </p>
                <p>Turning moments into memories </p>
            </div>
            <div class="container">
                <div class="contactinfo">
                    <div class="box">
                        <div class="icon"></div>
                            <div class="text">
                                <h3>Address</h3>
                                <p><br>121 Rock Street 21 Avenue,<br>Garden Glow- 583934</p>
                            </div>
                        </div>
                        <div class="box">
                            <div class="icon"></div>
                                <div class="text">
                                    <h3>Phone</h3>
                                    <p>9373464645</p>
                                </div>
                        </div>
                        <div class="box">
                            <div class="icon"></div>
                                <div class="text">
                                    <h3>Email</h3>
                                    <p>dhanya123@gmail.com</p>
                                </div>
                        </div>
                    </div>
                    <div class="contactform">
                        <form action="connectcontact.php" method="post">
                            <h2>Send Message</h2>
                            <div class="inputBox">
                                <input type="text" name="fullname" required="required">
                                <span>Full Name</span>
                            </div>
                            <div class="inputBox">
                                <input type="text" name="email" required="required">
                                <span>Email</span>
                            </div>
                            <div class="inputBox">
                                <textarea name="message" required="required"></textarea>
                                <span>message</span>
                            </div>
                            <div class="inputBox">
                                <input type="submit" name="submit" value="Send">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>
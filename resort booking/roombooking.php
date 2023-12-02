<!DOCTYPE html>
<html>
    <head>
        <title>ROOM BOOK PAGE</title>
        <link rel="stylesheet" type="text/css" href="roombook.css">
    </head>
<body>
   <div id="bookbox">

      <form id="bookingpage" action="connectroom.php" method="post">
         <center><h1>Booking & Contact</h1></center>
            <input type="text" class="binput" name="name" placeholder="Name" required/>
            <br>
            <input type="text" class="binput" name="email" placeholder="Email" required/>
            <br>
            <input type="text" class="binput" name="phone" placeholder="Phone Number" required/>
            <br>
            <center><h2>Details</h2></center>
            <p> Arrive :
               <br><input type="date" class="binput" name="a_date" placeholder="Arrive" required/></p>

            <p> Depart :
               <br><input type="date" class="binput" name="d_date" placeholder="Depart" required/></p>
            <br>

            <label>People : </label><select class="binputbox" name="people" required/>
               <option value = "blank"></option>
               <option value = "1">1</option>
               <option value = "2">2</option>
               <option value = "3">3</option>
               <option value = "4">4</option>
               <option value = "5">5</option>
               <option value = "6">6</option>
               <option value = "7">7</option>
               <option value = "8">8</option>
             </select>

            <br>
            <label>Rooms : </label><select class="binputbox" name="room" required/>
               <option value = "blank"></option>
               <option value = "Single">Single</option>
               <option value = "Double">Double</option>
               <option value = "Deluxe">Deluxe</option>
               <option value = "Presidential">Presidential Suite</option>
               <option value = "Bungalow">Bungalow</option>
             </select>
            <br>
            <br>
            <input name="book" type="submit" class="bsubmitbutton" value="SUBMIT">


      </form>

   </div>

</body>

</html>
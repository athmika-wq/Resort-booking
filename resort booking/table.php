<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" 
		content="IE=edge">
		<title>Reservation Form</title>
		<meta name="viewport"
		content="width=device-width,
		initial-scale=1">
		<link rel="stylesheet" href="table.css">
		</head>
		<body>
		
			<section class = "banner">
			
				<h2>BOOK YOUR TABLE NOW</h2></br></br>
				<div class = "card-container">
						<div class = "card-content">
						<h3>Reservation</h3>
						<form action="connection1.php" method="post" >
							<div class = "form-row">
								<select class = "days" name="SelectDay" >
									<option value = "day-select">SelectDay</option>
									<option value = "sunday">Sunday</option>
									<option value = "monday">Monday</option>
									<option value = "tuesday">Tuesday</option>
									<option value = "wednesday">Wednesday</option>
									<option value = "thursday">Thursday</option>
									<option value = "friday">Friday</option>
									<option value = "saturday">Saturday</option>
								</select>
								
								<select class = "hours" name="SelectHour">
									<option value = "hour-select">SelectHour</option>
									<option value = "10:00">10: 00</option>
									<option value = "12:00">12: 00</option>
									<option value = "14:00">14: 00</option>
									<option value = "16:00">16: 00</option>
									<option value = "18:00">18: 00</option>
									<option value = "20:00">20: 00</option>
									<option value = "22:00">22: 00</option>
								</select>
							</div>
							
							<div class = "form-row">
								<input type = "text" placeholder="Full Name" name="FullName">
								<input type = "text" placeholder="Phone Number" name="PhoneNumber">
								</div>
								
								<div class = "form-row">
									<input type = "number" placeholder="How Many Persons" name="HowManyPersons" min = "1">
									<input type = "submit" value = "BOOK TABLE" name="BOOKTABLE">
								</div>
							</form>
						</div>
					</div>
				</section>
				
			</body>
		</html>

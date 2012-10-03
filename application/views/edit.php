<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Blogg uppgift</title>
<style type="text/css" media="screen">

label {display:block;}

</style>
</head>
<body>
	<div id="container">
	
					
					<h3> Det här är test <h3>
						<?php echo form_open('site/update'); ?>

							<p>
								<label for="name">Förnamn:</label>
								<input type="text" name="name" id="name" />
							   </p>
								<p>
									<label for="lastname">Efternamn:</label>
									<input type="text" name="lastname" id="lastname" />
							</p>
								<p>
									<label for="title">Title:</label>
									<input type="text" name="title" id="title" />
								</p>
									<p>
										<label for="message">Meddelande:</label>
										<input type="text" name="message" id="message" maxlength="50" size="80" />
									</p>
										<p>

									
						<p><input type="submit" value="Save" /></p>

						<?php echo form_close(); ?>
					
					
					<hr />
					
					
				
					
					
					
	
	
	
	
	
	
	
	
	
	</div>
</body>
</html>
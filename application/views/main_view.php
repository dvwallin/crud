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
		<h2> Skapa blogg inlägg </h2>
		
		<?php echo form_open('site/create'); ?> 
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
					
						<input type="submit" value="submit" />
					</p>
	
		<?php echo form_close(); ?>
		
		
		<hr />
		
		<h1>Här kan du se dina blogg inlägg.</h1>
		<p> Klicka på inlägget för att kunna radera inläggen.</p>
		<hr />
		
		<?php if(isset($records)) : foreach($records as $row) :?>
			

				<div>		<h2><?php echo anchor("site/delete/$row->id", $row->title); ?></h2></div>
				<div>	<h5><?php echo $row->message; ?></h5></div>
				<div>	<h6>Av: <?php echo $row->name; ?>  <?php echo $row->lastname; ?><h6></div>
					
						<div>	<h5><a href="site/update/?id=<?php echo $row->id; ?> " target="_self">Editera Inlägg</a> <h5></div>
						
							
							
							
					
					
							
						<?php endforeach; ?>
						
						<?php else : ?>
							
				<h1>Finns inga sparade inlägg</h1>
					<?php endif; ?>
					
							<hr />
					
			
					
					
					<hr />
					
					
				
					
					
					
	
	
	
	
	
	
	
	
	
	</div>
</body>
</html>
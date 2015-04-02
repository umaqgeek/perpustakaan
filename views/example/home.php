<html>
	<head>
	<title>Tuto 1.4</title>
	</head>
	<body>
		<div id = "container">
			<p>My view has been loaded</p>
			<p><?php //echo $myValue ?></p>
			<p><?php //echo $anotherValue ?></p>
			
			<pre>
				<?php print_r($records);?>
			</pre>
			<?php foreach($records as $row):?>
				<h1><?php echo $row->title;?></h1>
			<?php endforeach; ?>
			
		</div>
	</body>
</html>
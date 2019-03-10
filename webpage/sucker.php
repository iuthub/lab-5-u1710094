<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Buy Your Way to a Better Education!</title>
		<link href="buyagrade.css" type="text/css" rel="stylesheet" />
	</head>
	
	<body>
	<?php
	if($_REQUEST["name"] != "" && $_REQUEST["creditnum"] != ""){
		$record = $_REQUEST["name"] . ";" . $_REQUEST["section"] . ";" . $_REQUEST["creditnum"] . ";" . $_REQUEST["credittype"] . "\n";
		file_put_contents("suckers.txt", $record, FILE_APPEND);
	?>

		<h1>Thanks, Sucker!</h1>

		<p>
			Your Informatio has been recorded.
		</p>
		
	
		<dl>
            
			<dt>Name</dt>
			<dd>
				<?= $_REQUEST['name']?>
			</dd>
			
			<dt>
                Section
            </dt>
			<dd>
                    <?= $_REQUEST['section']?>
            </dd>
			
			<dt>Credit Card</dt>
			<dd>
				<?= $_REQUEST['creditnum']?> 
				(<?= $_REQUEST['credittype']?>)
			</dd>
		</dl>

		<pre><?php
				echo file_get_contents("suckers.txt");
			?>
		</pre>
		<?php die;} ?>

		<h1>Sorry</h1>

		<p>
			You didn't fill the form completely. <a href="buyagrade.html">Try again?</a>
		</p>
	</body>
</html>
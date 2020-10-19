<?php 
header("Access-Control-Allow-Origin: *");
include('inc/header.php');
?>
<title>webdamn.com : Demo To Create Simple REST API with PHP and MySQL</title>
<?php include('inc/container.php');?>
<div class="container">
	<h2>Simple REST API with PHP and MySQL</h2>	
	<br>
	<br>
	<form action="" method="get">
		<div class="form-group">
			<label for="name">http://webdamn.com/demo/api/emp/read/(empid)</label>
			<input type="text" name="url" value="http://webdamn.com/demo/api/emp/read/" class="form-control" required/>
			
		</div>
		<button type="submit" name="submit" class="btn btn-default">Make API Request</button>
	</form>
	<p>&nbsp;</p>
	<?php
	if(isset($_POST['submit']))	{
		$url = $_POST['url'];				
		$client = curl_init($url);
		curl_setopt($client,CURLOPT_RETURNTRANSFER,true);
		$response = curl_exec($client);		
		$result = json_decode($response);	
		print_r($result);		
	}
	?>	
</div>
<?php include('inc/footer.php');?>

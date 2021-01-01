<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>PHP Veri Tabanına Anlık Veri Kaydetme</title>
</head>
<body>

	<form id="anlıkVeri">
		<textarea name="metin"></textarea>
	</form>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
	<script type="text/javascript">
		
		

		setInterval(function veriGonder() {
			
			$.ajax({

				type: "POST",
				data: $("#anlıkVeri").serialize(),
				url: "verikaydet.php",

			});

		}, 5000);
		

	</script>
</body>
</html>

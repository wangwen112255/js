<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>上传插件</title>
	 <script type="text/javascript" src='jquery.min.js'></script>
	
	<!-- <link rel="stylesheet" type="text/css" href="uploadify.css"> -->
	<script src="jquery.uploadify.min.js" type="text/javascript"></script>
	<link rel="stylesheet" type="text/css" href="uploadify.css"
</head>
<body>
	<!-- <script type="text/javascript" src='jquery.min.js'></script>-->
	<!--<script type="text/javascript" src=='jquery.uploadify.js'></script> -->
	<form action=''></form>
	<p>上传文件</p>
	<p>
			<input id='img' type="file" name="img" >

	</p>
	<script type="text/javascript">
	<?php  $timestamp=time();  ?>
		$(function(){
			// $('#img').uploadify({
			// 	'fromData':{
			// 		'timestamp':<?php  echo $timestamp;  ?>
			// 		'token':'<?php  echo md5('unique_salt'.$timestamp);  ?>'
			// 	},
			// 	'swf':'uploadify.swf',
			// 	'uploader':'uploadify.php'

			// })

			$('#img').uploadify({
						'formData'     : {
							'timestamp' : '<?php echo $timestamp;?>',
							'token'     : '<?php echo md5('unique_salt' . $timestamp);?>'
						},
						'swf'      : 'uploadify.swf',
						'uploader' : 'uploadify.php'
					})


		})

	</script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>jquery中的城市选择器</title>
</head>
<body>
<form action="" method="post">
<div id='elementid'>
<input type="text" name="username">
<select  name='province' class="province" data-value='河南省'></select>
<select class="city" data-value='郑州市'></select>
<select class="area" data-value='金水区'></select>
</div>
<input type="submit" value="提交">
</form>
<!-- <?php  echo $_POST['province']; echo $_POST['username']; ?> -->
<!-- div class="dis">
	<select class="province" data-value='河南省'></select>

</div> -->
<!-- <div id="element_id" data-url="cityData.min.json" data-selects="province,city,area" data-required="true"></div> -->
<script type="text/javascript" src='jquery.min.js'></script>	
<script type="text/javascript" src='js/jquery.cxselect.min.js'></script>

<script type="text/javascript">
$('#elementid').cxSelect({
	url:'js/cityData.min.json',
	selects:['province','city','area']
})
// $('#element_id').cxSelect({
// 	url:'js/cityData.json',
// 	selects:['province']
// })
</script>
</body>

</html>
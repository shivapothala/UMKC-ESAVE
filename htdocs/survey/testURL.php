<html>
<head>
<title>Get url for address bar</title>

<script type="text/javascript">
function select_all()
{
var text_val=eval("document.form_name.type");
text_val.focus();
text_val.select();
}
</script>

</head>
<body>

<form name=form_name method=post action=''''>
<input name="type" type="text" id="type" value="<?php $url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; echo $url; ?>" size="50" onClick="select_all();">
</form>

</body>
</html>
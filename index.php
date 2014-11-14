<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>Send me a text message</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="a_files/bootstrap.css" rel="stylesheet" id="bootstrap-css">
    <style type="text/css">
    .contact-form {
    margin-top:70px;
}
    </style>
    <script src="a_files/jquery-1.js"></script>
    <script src="a_files/bootstrap.js"></script>

</head>
<body>
	<div class="container">
<div class="row">

<div class="col-sm-8 contact-form">
<h1>Send me a text message!</h1>
<?php
if ( isset($_POST['code']) && isset($_POST['name']) && isset($_POST['message']) && $_POST['code'] == "21758406")
{
$url = "https://smsapi.free-mobile.fr/sendmsg?user=21777608&pass=wGEQRmf6PMp0MB&msg=".$_POST['message']. ", from ". $_POST['name'];
$response  = file_get_contents($url);
echo '      <div class="alert alert-success">          <a href="#" class="close" data-dismiss="alert">&times;</a>          <strong>Success!</strong> Your message has been sent successfully.      </div>';
}
//echo '      <div class="alert alert-error">          <a href="#" class="close" data-dismiss="alert">&times;</a>          <strong>Error!</strong> A problem has been occurred! Check the code!     </div>'
?>
<form id="contact" method="post" class="form" role="form" action="<?php echo $PHP_SELF;?>">
<div class="row">
<div class="col-xs-6 col-md-6 form-group">
<input value="" class="form-control" id="name" name="name" placeholder="Name" required="" autofocus="" type="text">
</div>

<div class="col-xs-6 col-md-6 form-group">
<input value="" class="form-control" id="code" name="code" placeholder="Code! Ask Ali for the code" required="" type="text" autocomplete="off">
</div>


</div>
<textarea class="form-control" id="message" name="message" placeholder="Message" required="" rows="5" maxlength="300" style="resize: none;" onkeyup="new do_resize(this);" onKeyPress="return ( this.value.length < 300); onpaste="return ( this.value.length < 300);></textarea>
<br>
<div class="row">
<div class="col-xs-12 col-md-12 form-group">
<button class="btn btn-primary pull-right" type="submit">Submit</button>

</div>
</div></form>
	<script type="text/javascript">
	
	</script>


</div></div></div></body></html>

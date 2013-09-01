<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>

<?php include"facebookscript.php"; ?>

    </head>

    <body>
       

       <div align="center">

		<form action="" method="post" name="postForm">

		<div class="UIComposer_Box">

		<span class="w">
		<textarea class="input" id="watermark" name="watermark" style="height:20px" cols="60"></textarea>
		</span>

			<br clear="all" />

			<div align="left" style="height:30px; padding:10px 5px;">


				<a id="shareButton" style="float:left" class="small button Detail"> Share</a>

			</div>

		</div>

		</form>

		<br clear="all" />

		<div id="posting" align="center">

		<?php
		include('dbcon.php');

		include_once('posts.php');?>

		</div>
	</div>


    </body>
</html>

<!DOCTYPE html>
<html lang="en">
  <head>
        <script src = "cilent/getMsgs.js"></script>
        <script src = "cilent/sendMsgs.js"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script>
		function get(){
			$.ajax({
				url: 'server/test.php',
				type: 'POST',
				enctype: 'multipart/form-data',
				data: "hello",
				cache: false,
				processData: false, // Don't process the files
				contentType: false, // Set content type to false as jQuery will tell the server its a query string request
				success: function (result)
				{
					console.log(result);
				},
				error: function (jqXHR, textStatus, errorThrown)
				{
					console.log('ERRORS: ' + textStatus);
				}
			});
		}
	</script>
  </head>
  <body>
 
        <div id="msgs">
            <!---
                This where all the msgs will be displayed
            -->
        </div>
        <div class = "container" id="input">
		<div id = "title">
                Neighborhood Chat
        </div>
            <input class = "form-control" type='text' name='msg' id ='input'/>
            <button class = "btn btn-lg btn-primary pull-right" id ='submitBtn' onclick='sendMsgs()'>Send</button>
        </div>
		<div>
			
		</div>
        <script>
			get();
            //getLocation();
            //getMsgs();
        </script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
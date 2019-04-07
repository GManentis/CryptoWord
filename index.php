<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<script type="text/javascript" src="jquery-3.3.1.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="jquery-ui-1.12.1/jquery-ui.min.css">
<script type="text/javascript" src="jquery-ui-1.12.1/external/jquery/jquery.js"></script>
<script type="text/javascript" src="jquery-ui-1.12.1/jquery-ui.min.js"></script>
<script type="text/javascript" src="ajax/crypto.js"></script>
</head>
<body>
<center>
<div class="container">
<h3 style="color:red;">Welcome to Crypto</h3>
<br>
Here you can store your very private message which no one will be able to fetch except you!
<br>
<span style='color:blue;'>How to encrypt:</span>The way is simple,just insert your very private message and the password to encrypt it!
<br>
<span style='color:blue;'>How to decrypt:</span>Need to see your message?Just enter your password and everything will be all set!
<br>
Let's Get Started!
<br>
<br>
<button type="button" class="btn btn-info" data-toggle="modal" data-target="#Encrypt">+ Insert Encrypted Word</button>
<button type="button" class="btn btn-info" data-toggle="modal" data-target="#Decrypt">+ Get Decrypted Word</button>
</div>
<centeR>
<!--Modal for encryption -->
<div id="Encrypt" class="modal fade" role="dialog">
  <div class="modal-dialog">
  <div class="modal-content">
        <div class="modal-header">
          <button id="end1" type="button" class="close" data-dismiss="modal">&times;</button>
          <h3 style="color:red;">Insert your text here</h3>
        </div>
        <div class="modal-body">
			<center>
            <table>
			<tr><td>Your Text:</td><td><textarea class="form-control" id="myText" rows="3" cols="50"></textarea></td></tr>
			<tr><td>Your Key:</td><td><input type="password" id="password" class="form-control" style="width:390px;"></td></tr>
			</table>
			<br>
			<br>
			<button class="btn btn-primary" id="submit">Submit Encryption!</button>
			<br>
			</center>
			<br>
			</div>
		<div class="modal-footer"><centeR><span id='response1'></span></center></div>
		</div>	
      </div>
      </div>	  
</div>
<!--Modal for Decryption-->
<div id="Decrypt" class="modal fade" role="dialog">
  <div class="modal-dialog">
  <div class="modal-content">
        <div class="modal-header">
          <button id="end2" type="button" class="close" data-dismiss="modal">&times;</button>
          <h3 style="color:red;">Insert password and get your text</h3>
        </div>
        <div class="modal-body">
			<center>
			<br>
            <table>
			<tr><td>Your Key:</td><td><input type="password" id="pass" class="form-control" style="width:250px;"></td></tr>
			</table>
			<br>
			<button class="btn btn-primary" id="fetch">Get Decrypted Message!</button>
			<br>
			</center>
			<br>
		</div>
		<div class="modal-footer"><centeR><span id='response2'></span></center></div>	
      </div>
      </div>	  
</div>

</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title></title>
  <link type="text/css" rel="stylesheet" href =" {{ asset('css/style.css') }}"


</head>
<body >
	<form>
		<label for="name">Name:</label>
		<input type="text" name="name"><br/>

		<label for="roll.no.">Roll.No.:</label>
		<input type="number" name="Roll.no."><br/>

		<label for="faculty">Faculty:</label>
		<input type="text" name="faculty"><br/>

		<button type="submit">Save</button>
		 

		
		<button type="reset">Cancel</button>			
	</form>

<script type="text/javascript" src=" {{ asset('js/script.js') }}"></script>
</body>
</html>
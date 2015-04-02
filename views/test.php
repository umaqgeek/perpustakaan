<html>
	<head>
		<script type="text/javascript">
			function changeA()
			{
				//document.writeln(document.getElementById("userId").value);
				document.getElementById("myform").action = "/hahahapulak";
				document.getElementById("demo").innerHTML = document.getElementById("myform").action;
				document.getElementById("myform").submit();
			}
		</script>
	</head>
    <body>
    	<h1>huhu back</h1>
    	<form action="/huhu" method="post" name="myform" id="myform">
        	<input name="userId" id="userId" type="hidden" value="huhuhu">
            <input name="submit" type="button" value="submit">
            <input name="change" type="submit" value="Change" onClick="changeA()">
        </form>
        <p id="demo"></p>
    </body>
</html>
+function ($) {
		function ddimension()
		{
			
			var d=document.getElementById("ddimension");
			var displaytext=d.options[d.selectedIndex].text;
			document.getElementById("txtvalue").value=displaytext;
		}

		function dstraight()
		{
			var d=document.getElementById("dstraight");
			var displaytext=d.options[d.selectedIndex].text;
			document.getElementById("txtstraight").value=displaytext;
		}

		function dcompute()
		{
			var d=document.getElementById("dcompute");
			var displaytext=d.options[d.selectedIndex].text;
			document.getElementById("txtcompute").value=displaytext;
		}

		function doperacion()
		{
			var d=document.getElementById("doperacion");
			var displaytext=d.options[d.selectedIndex].text;
			document.getElementById("txtoperacion").value=displaytext;
		}

		function dcomputo()
		{
			var d=document.getElementById("dcomputo");
			var displaytext=d.options[d.selectedIndex].text;
			document.getElementById("txtcomputo).value=displaytext;
		}
}
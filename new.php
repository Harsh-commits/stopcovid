<!DOCTYPE html>
<html>
<head>
	<title>Search</title>
	<?php include 'links.php' ?>

<style>
* {
  box-sizing: border-box;
}

#myInput {
  background-image: url('/css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

#myTable {
  border-collapse: collapse;
  width: 100%;
  border: 1px solid #ddd;
  font-size: 18px;
}

#myTable th, #myTable td {
  text-align: left;
  padding: 12px;
}

#myTable tr {
  border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
  background-color: #f1f1f1;
}

.image {
    position: absolute;
    top: 50%;
    left: 50%;
    width: 120px;
    height: 120px;
    margin:-60px 0 0 -60px;
    -webkit-animation:spin 4s linear infinite;
    -moz-animation:spin 4s linear infinite;
    animation:spin 4s linear infinite;
}
@-moz-keyframes spin { 100% { -moz-transform: rotate(360deg); } }
@-webkit-keyframes spin { 100% { -webkit-transform: rotate(360deg); } }
@keyframes spin { 100% { -webkit-transform: rotate(360deg); transform:rotate(360deg); } }


</style>

</head>
<body>
	<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">

	<table id="myTable">
		<tr id="">
			<td>India</td>
			<td>1000</td>
		</tr>
		<tr>
			<td>Pakistan</td>
			<td>200</td>
		</tr>
		<tr>
			<td>China</td>
			<td>1500</td>
		</tr>
		<tr>
			<td>USA</td>
			<td>400</td>
		</tr>
		<tr>
			<td>England</td>
			<td>100</td>
		</tr>
		<tr>
			<td>France</td>
			<td>250</td>
		</tr>

	</table>

	<a href="mygov_help.pdf"><button type="text" class="bg-primary btn-lg shadow-lg">Contact</button></a>
	<img src="images/coronavirus.png">
	<img class="image" src="images/co1.png" alt="" width="120" height="120">





	<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>

</body>
</html>
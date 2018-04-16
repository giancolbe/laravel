<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">

	<link rel="stylesheet" href="css/bootstrap.css">
	<!--<link rel="stylesheet" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">-->
	<title>Blog</title>
</head>
<body>
	<div class="container">
		<h1>Ejemplo API (DIRECCIONES) Data Table</h1>
		<table id="direccion" class="table">
			<thead>
				<tr>
					<th>NAME</th>
					<th>CALLE</th>		
					<th>SUITE</th>
					<th>CIUDAD</th>
					<th>POSTAL</th>
					<th>LATITUD</th>
					<th>LONGITUD</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>
						{{ $user->name}}
					</td>
					<td>
						{{ $user->address->street}}
					</td>
					<td>
						{{ $user->address->suite}}
					</td>
					<td>
						{{ $user->address->city}}
					</td>
					<td>
						{{ $user->address->zipcode}}
					</td>
					<td>
						{{ $user->address->geo->lat}}
					</td>
					<td>
						{{ $user->address->geo->lng}}
					</td>
				</tr>
			</tbody>
		</table>
	</div>
	<script src="js/jquery.min.js"></script>
	<!--<script src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
	<script>
		$(document).ready( function () 
			{
    		$('#direccion').DataTable();
			} );
	</script>-->
</body>
</html>
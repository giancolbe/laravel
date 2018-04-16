<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
	<title>Blog</title>
</head>
<body>
	<div class="container" align="center"><a href="api">Regresar</a></div>
	<div class="container">
		<h1>Ejemplo API (USERS) Data Table</h1>
		<table id="users" class="table">
			<thead>
				<tr>
					<th>ID</th>
					<th>NAME</th>
					<th>USUARIO</th>		
					<th>EMAIL</th>
					<th>DIRECCION</th>
				</tr>

			</thead>
			<tbody>
				@foreach ($users as $user)
					<tr>
						<td>
							{{ $user->id }}
						</td>
						<td>
							{{ $user->name}}
						</td>
						<td>
							{{ $user->username}}
						</td>
						<td>
							{{ $user->email}}
						</td>
						<td>
							<a href="/users/{{$user->id}}">Detalle</a>
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
	<script src="js/jquery.min.js"></script>
	<script src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
	<script>
		$(document).ready( function () 
			{
    		$('#users').DataTable();
			} );
	</script>
</body>
</html>
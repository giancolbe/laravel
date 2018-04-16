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
		<h1>Ejemplo API (PUBLICACIONES) Data Table</h1>
		<table id="posts" class="table">
			<thead>
				<tr>
					<th>TITULOS</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($posts as $post)
					<tr>
						<td>
							<a href="/posts/{{$post->id}}">{{ $post->title }}</a>
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
    		$('#posts').DataTable();
			} );
	</script>
</body>
</html>
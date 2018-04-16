<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tasks index page</title>
</head>
<body>
	<ul>
		@foreach( $tasks as $task )
			<li>
				<a href="tasks/{{ $task->id }} ">
					<h1> {{ $task->body }} </h1>
				</a>
			</li>
		@endforeach
	</ul>
</body>
</html>
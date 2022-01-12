<?php
    session_start();
?>

<!doctype html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Bootstrap CSS -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<title>Hello, world!</title>
	</head>

	<body class="bg-white">
		<!-- Header -->
			<nav class="navbar navbar-expand-sm navbar-dark bg-secondary">
				<div class="container">
					<a href="" class="navbar-brand">Админ панель</a>
						<div class="d-flex ">

								<a href="../" class="btn btn-outline-light">Вернуться</a>
						</div>
				</div>
			</nav>
		<!-- Header -->

		<main>
			<div class="container mt-5">
				<h2 class="text-center">Управление товарами</h2>
				<table class="table mt-5">
					<thead>
						<tr>
							<th scope="col">#</th>
							<th scope="col">Название</th>
							<th scope="col">Изображение</th>
							<th scope="col">Цена</th>
							<th scope="col">Действие</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th scope="row">1</th>
							<td>Mark</td>
							<td>Otto</td>
							<td>@mdo</td>
							<td><a href="" class="btn btn-outline-danger">Удалить</a></td>
						</tr>
					</tbody>
				</table>

				<h4 class="text-center">Добавление товара</h4>
				<form class="row g-3 col-md-12">
					<div class="col-md-3">
						<label class="form-label">Название</label>
						<input type="text" class="form-control"  >
					</div>
					<div class="col-md-3">
						<label class="form-label">Изображение</label>
						<input type="" class="form-control" id="exampleInputPassword1">
					</div>
					<div class="col-md-3">
						<label class="form-label">Цена</label>
						<input type="text" class="form-control" id="exampleInputPassword1">
					</div>
					<button class="btn btn-primary col-auto">Добавить</button>
				</form>
			</div>
		</main>

		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	</body>
</html>
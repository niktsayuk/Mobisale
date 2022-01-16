<?php
    session_start();
	$_SESSION['message'] = '';
	$_SESSION['product'] = '';
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
					<?php
							if ($_SESSION['product']) 
							{
								echo '<tr>
										<td scope="row">'.$_SESSION['product']['id'].'</td>
										<td>'.$_SESSION['product']['name'].'</td>
										<td><img src="'.$_SESSION['product']['image'].'"></td>
										<td>$'.$_SESSION['product']['price'].'</td>
										<td><a href="deleteproduct.php" class="btn btn-outline-danger">Удалить</a></td>
									</tr>';
							}
							else
							{
								echo 'Нет такой записи';
							}
						?>
					</tbody>
				</table>
				<a href="getproduct.php" class="btn btn-outline-primary me-5">Выгрузить данные</a>

				<h4 class="text-center">Добавление товара</h4>
				<form action="setproduct.php" method="POST" class="row g-3 col-md-12">
					<div class="col-md-3">
						<label class="form-label">Название</label>
						<input type="text" name="name" class="form-control"  >
					</div>
					<div class="col-md-3">
						<label class="form-label">Изображение</label>
						<input type="file" name="image" class="form-control" id="exampleInputPassword1">
					</div>
					<div class="col-md-3">
						<label class="form-label">Цена</label>
						<input type="text" name="price" class="form-control" id="exampleInputPassword1">
					</div>
					<button class="btn btn-primary col-auto">Добавить</button>

					<?php
						if($_SESSION['message'])
							echo '<p>'.$_SESSION['message'].'</p>';
						
						unset($_SESSION['message']);
					?>
				</form>
			</div>
		</main>

		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	</body>
</html>
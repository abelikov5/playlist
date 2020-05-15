<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400;900&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="./css/reset.css" >

	<link rel="stylesheet" type="text/css" href="./css/style.css" >
	<link rel="stylesheet" type="text/css" href="./css/media.css" >
	<link rel="icon" href="favicon.ico">
	<title>Alay Oli music tracks</title>
</head>
<body>

	<div class="modul_win d_flex d_center d_none">
		<div class="wrap_head_music d_flex d_center">
				<!-- <div class="head_photo">
					<img src="img/cover.jpg" alt="alay oli cover">

				</div> -->
				<div class="head_offer">
					<!-- <h1>Сделай свой PlayList!</h1> -->
					<div class="head_offer_descr">
						для загрузки доступны audio файлы, размером не более 10 МегаБайт.
					</div>

					<form action="" enctype="multipart/form-data" class="d_flex d_center">
						<input type="text" name="name" id="ph" placeholder="Имя трека">
						<!-- <input type="hidden" name="actionFunc" value="PlusTime" /> -->
						<div class="wrap_input_file">
							<input type="file" name="mymusic" accept="audio/*">

								<!-- </div> -->
								<div class="upload d_flex d_center">
									<span class="icon-cloud-upload"></span>
									Загрузить файл
								</div>
							</div>
							<input type="submit" value="Добавить трек" class='add_track'>
					</form>

				</div>
			</div>


	</div>
<!-- <div class="head_music d_none">

	<div class="container">
		<div class="wrap_head_music d_flex d_center">
			<div class="head_photo">
				<img src="img/cover.jpg" alt="alay oli cover">

			</div>
			<div class="head_offer">
				<h1>Сделай свой PlayList!</h1>
				<div class="head_offer_descr">
					для загрузки доступны audio файлы, размером не более 10 МегаБайт.
				</div>

				<form action="" enctype="multipart/form-data" class="d_flex d_center" method="POST">
					<input type="text" name="name" id="ph" placeholder="Имя трека">
					<input type="hidden" name="actionFunc" value="PlusTime" />
					<div class="wrap_input_file">
						<input type="file" name="mymusic" accept="audio/*">
							<div class="upload d_flex d_center">
								<span class="icon-cloud-upload"></span>
								Загрузить файл
							</div>
						</div>
						<input type="submit" value="Добавить трек" class='add_track'>
				</form>

			</div>
		</div>

	</div>

</div> -->

<section class='playlist'>
	<div class="container">
			<div class="wrap_playlist">
				<?php include ('display_mp3.php');?>
			</div>
	</div>

</section>


	<section class='control'>
		<div class="container">
			<div class="wrap_control_mp3 d_flex d_center">
				<div class="arrow_left">
					<span class="icon-backward2"></span>
				</div>

				<div class="mp3_play d_flex d_center">
					<div class="icon-play3"></div>
				</div>
				<div class="arrow_right">
					<span class="icon-forward3"></span>
				</div>
				<div class="control_cover">
					<img src="img/alai_oli.jpg" alt="cover for alai oli">
				</div>
				<div class="song_name">
					<span> Alai Oli - Oshhh</span>
				</div>
				<div class="control_upload">
					<span class="icon-eject"></span>
				</div>
			</div>
			<div class="container">
				<div class="prog_full">
						<div class="prog_cur">
					</div>
			</div>



			</div>

		</div>
	</section>


	<script src='./js/mp3_control.js'></script>
	<script src="./js/upl_file.js"></script>
</body>
</html>


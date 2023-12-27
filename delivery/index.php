<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Главная</title>
	<link rel="stylesheet" href="static/style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
  	integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
  	integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
	<header>
		<?php include 'header.html'; ?>
	</header>

	<main>
		<div style="text-align:center;">
  			<div class="slideshow-container">
    			<?php
     				$imagesDir = 'static/images/';
     				$images = glob($imagesDir . '*.{jpg,jpeg}', GLOB_BRACE);
				     foreach ($images as $image) {
      					echo "<div class='mySlides'><img src='$image' width='400' height='300'></div>";
        			}      
    			?>
		    	<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    			<a class="next" onclick="plusSlides(1)">&#10095;</a>
  			</div>
		</div>

		<script src="static/script.js"></script>

		<div class="container">
			<h1>Служба доставки еды</h1>
			<div class="row">
				<div class="col-md-4">
					<div class="advantage-item">
						<h3>Быстрая доставка</h3>
						<p>Мы гарантируем быструю доставку вашего товара в удобное для вас время.</p>
					</div>
				</div>
				
				<div class="col-md-4">
					<div class="advantage-item">
						<h3>Надежность</h3>
						<p>Мы заботимся о сохранности и целостности вашего груза на всем пути доставки.</p>
					</div>
				</div>

				<div class="col-md-4">
					<div class="advantage-item">
						<h3>Отслеживание</h3>
						<p>Вы можете легко отследить местоположение вашей посылки в режиме реального времени.</p>
					</div>
				</div>
			</div>
		</div>

		
		<div class="container">
			<h1>Меню</h1>
			<div class="row">
				<div class="col-md-4">
					<div class="menu-block">
						<img class="donut img-frame" src="static/images/donut.jpg" width="200" height="200">
						<p><b>Донаты</b></p>
						<p>Набор донатов</p>
						<p class="price">600р</p> <!-- Добавляем класс "price" для обновления стоимости -->

						<div class="quantity">
							<input type="number" step="1" min="1" max="" name="quantity" value="1" title="Количество" class="qty"
								size="4" pattern="[0-9]*" inputmode="numeric" onchange="donutPrice(this)">
						</div>
					</div>
				</div>
				
				<div class="col-md-4">
					<div class="menu-block">
						<img class="cupcake img-frame" src="static/images/cupcake.jpg" width="200" height="200">
						<p><b>Капкейки</b></p>
						<p>Набор капкейков</p>
						<p class="price">700р</p> <!-- Добавляем класс "price" для обновления стоимости -->

						<div class="quantity">
							<input type="number" step="1" min="1" max="" name="quantity" value="1" title="Количество" class="qty"
								size="4" pattern="[0-9]*" inputmode="numeric" onchange="cupcakePrice(this)">
						</div>
					</div>
				</div>

				<div class="col-md-4">
    				<div class="menu-block">
     					<img class="cake img-frame" src="static/images/cake.jpeg" width="200" height="200">
     					<p><b>Торт</b></p>
     					<p>Праздничный торт</p>
     					<p class="price">1500р</p> <!-- Добавляем класс "price" для обновления стоимости -->
     					
						<div class="quantity">
      						<input type="number" step="1" min="1" max="" name="quantity" value="1" title="Количество" class="qty"
       							size="4" pattern="[0-9]*" inputmode="numeric" onchange="cakePrice(this)">
     					</div>
    				</div>
  				</div>
			</div>
		</div>

		<div class="options">
			<h1>Дополнительные опции</h1>
			<form>
    			<label for="html">Являюсь студентом ВУЗа</label>
    			<input id="html" type="checkbox">
			</form>

			<form>
    			<label for="html">Быстрая доставка</label>
    			<input id="html" type="checkbox">
			</form>
		</div>
	</main>
	
	<footer>
        <?php include 'footer.html'; ?>
    </footer>
</body>
</html>
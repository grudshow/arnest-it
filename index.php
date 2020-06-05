<?php 
$pageTitle = "Главная";
include "function.php"; 
$services = get_services_all(); 
include "include/_html-head.php";
?>

<div class="header">
	<div class="container">
		<?php include "include/_navigation.php"; ?>
		<div class="header-content">
			<div class="header-content__title">поможем вам</div>
			<div class="header-content__subtitle">Оказание услуг в области информационных технологий</div>
		</div>
		<div class="header-footer">
			<div class="header-footer__img">
				<img src="img/header/header01.png" alt="image">
			</div>
			<div class="header-footer__text">
				<div class="header-footer__text-title">история компании</div>
				<div class="header-footer__text-content">В 2002 года была введена в эксплуатацию корпоративная информационная система на базе "Microsoft Business Solutions Axapta", данная система отличается высокой масштабируемостью, хорошей локализации и в то же время использованию схем автоматизации бизнеса, отвечающих лучшим западным стандартам. Поставщиком решения стала международная компания Columbus IT Partner. </div>
			</div>
		</div>
	</div>
</div>
<div class="content">
	<div class="container">
		<div class="why-us">
			<div class="why-us__title">почему мы</div>
			<div class="why-us__subtitle">Компания ООО «Арнест-ИТ» была создана для решения задач автоматизации управления бизнес-процессами предприятий всех отраслей народного хозяйства. За относительно небольшой промежуток времени мы стали поставщиками программных информационных средств для более чем 20 клиетов в Российской Федерации</div>
		</div>
		<div class="options">
			<div class="options__choice">
				<div class="options__item">
					<div class="options__item-icon">
						<img src="img/content/icons/icons01.png" alt="icons">
					</div>
					<div class="options__item-title">неограниченные возможности</div>
					<div class="options__item-tabs">
						<ul class="options__item-nav">
							<li class="options__item-tab">Брендинг</li>
							<li class="options__item-tab">консультации </li>
							<li class="options__item-tab">Развитие концепции</li>
							<li class="options__item-tab">Пользовательский опыт</li>
						</ul>
					</div>
				</div>
				<div class="options__item">
					<div class="options__item-icon">
						<img src="img/content/icons/icons02.png" alt="icons">
					</div>
					<div class="options__item-title">разработка</div>
					<div class="options__item-tabs">
						<ul class="options__item-nav">
							<li class="options__item-tab">Информационная архитектура</li>
							<li class="options__item-tab">Аналитика</li>
							<li class="options__item-tab">Проектирование</li>
							<li class="options__item-tab">Тестирование</li>
						</ul>
					</div>
				</div>
				<div class="options__item">
					<div class="options__item-icon">
						<img src="img/content/icons/icons03.png" alt="icons">
					</div>
					<div class="options__item-title">коммерция</div>
					<div class="options__item-tabs">
						<ul class="options__item-nav">
							<li class="options__item-tab">макетирования</li>
							<li class="options__item-tab">Технический консалтинг</li>
							<li class="options__item-tab">Веб-приложения</li>
							<li class="options__item-tab">Тестирование качества</li>
						</ul>
					</div>
				</div>
				<div class="options__item">
					<div class="options__item-icon">
						<img src="img/content/icons/icons04.png" alt="icons">
					</div>
					<div class="options__item-title">индивидуальный <br> подход</div>
					<div class="options__item-tabs">
						<ul class="options__item-nav">
							<li class="options__item-tab">Качество работы</li>
							<li class="options__item-tab">Время отклика</li>
							<li class="options__item-tab">обратная связь</li>
							<li class="options__item-tab">Интреграция ПО</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="options__img">
				<img src="img/content/content01.png" alt="img">
			</div>
		</div>
		<div class="services">
			<div class="services__center-text">
				<div class="services__title">Наши услуги</div>
			</div>
			<div class="services__items">
				<?php foreach ($services as $service): ?>
					<div class="services__item">
						<div class="services__item-img">
							<img src="img/services/<?php echo $service['img']?>" alt="img">
						</div>
						<div class="services__text">
							<div class="services__item-title"><?php echo $service['title']?></div>
							<div class="services__item-subtitle"><?php echo $service['subtitle']?></div>
						</div>
						<div class="services__button">
							<a href="services-page.php?id=<?php echo $service['services_id']?>">Подробнее</a>
						</div>
					</div>
				<?php endforeach; ?>
<!-- 				<div class="services__item">
					<div class="services__item-img">
						<img src="img/services/services02.jpg" alt="img">
					</div>
					<div class="services__text">
						<div class="services__item-title">Консалтинговые услуги в сфере информационных технологий</div>
						<div class="services__item-subtitle">Проводим аудит, выполняем обследование и подготовку к реализации комплексных проектов. Поможем вашей компании эффективнее решать бизнес-задачи с помощью информационных систем.</div>
					</div>
					<div class="services__button">
						<a href="#">Подробнее</a>
					</div>
				</div>
				<div class="services__item">
					<div class="services__item-img">
						<img src="img/services/services01.jpg" alt="img">
					</div>
					<div class="services__text">
						<div class="services__item-title">Разработка и внедрение программного обеспечения</div>
						<div class="services__item-subtitle">Разрабатываем и внедряем программное обеспечение различного уровня сложности, создаем интернет-сервисы и интернет-системы. Автоматизируем бизнес-процессы. </div>
					</div>
					<div class="services__button">
						<a href="#">Подробнее</a>
					</div>
				</div> -->
			</div>
		</div>
	</div>
</div>
<?php include "include/_feedback-footer.php"; ?>


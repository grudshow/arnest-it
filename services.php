<?php 
$pageOtherTitle="Наши услуги";
$pageOtherLink = "Услуги";
include "function.php"; 
$services = get_services_all(); 
include "include/_html-head.php";
include "include/other-links/_header-otherlinks.php";
?>
<div class="services-main">
	<div class="container">
		<div class="wrapper-sidebar">
			<?php include "include/other-links/_sidebar.php"; ?>
			<div class="services-main__column">
				<div class="services-main__whats-do">
					<div class="services-main__title">что мы делаем</div>
					<div class="services-main__subtitle">Компания ООО «Арнест-ИТ» была создана для решения задач автоматизации управления бизнес-процессами предприятий всех отраслей народного хозяйства. За относительно небольшой промежуток времени мы стали поставщиками программных информационных средств для более чем 20 клиетов в Российской Федерации</div>
				</div>
				<div class="services-main__body">
					<div class="services-main__body-text">
						<p>
							Основным клиентом Общества является ОАО «Арнест». ОАО «Арнест» расположено в промышленной зоне г. Невинномысска. Предприятие специализируется на производстве парфюмерно-косметической продукции и товаров бытовой химии в аэрозольной упаковке. Ассортимент выпускаемой представлен следующими группами: лаки для волос, муссы, дезодоранты, освежители воздуха, кремы, автокосметика, чистящие средства и др.
						</p> 
						<p>
							ОАО "Арнест" постоянно обновляет ассортимент выпускаемой продукции. На предприятии используются передовые методы управления. Так, в апреле 2002 года была введена в эксплуатацию корпоративная информационная система на базе "Microsoft Business Solutions Axapta", данная система отличается высокой масштабируемостью, хорошей локализации и в то же время использованию схем автоматизации бизнеса, отвечающих лучшим западным стандартам. Поставщиком решения стала международная компания Columbus IT Partner. Данная система позволила создать на "Арнесте" прозрачное информационное поле и своевременно получать достоверные данные для системы управления.
						</p>
					</div>
				</div>
				<div class="services-main__options">
					<div class="services-main__options-item">
						<div class="services-main__options-img">
							<img src="img/services/icons01.png" alt="" />
						</div>
						<div class="services-main__options-title">KEEP PULSE GOING</div>
						<div class="services-main__options-subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt .</div>
					</div>
					<div class="services-main__options-item">
						<div class="services-main__options-img">
							<img src="img/services/icons02.png" alt="" />
						</div>
						<div class="services-main__options-title">KEEP PULSE GOING</div>
						<div class="services-main__options-subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</div>
					</div>
					<div class="services-main__options-item">
						<div class="services-main__options-img">
							<img src="img/services/icons03.png" alt="" />
						</div>
						<div class="services-main__options-title">KEEP PULSE GOING</div>
						<div class="services-main__options-subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt..</div>
					</div>
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
				</div>
			</div>
		</div>
	</div>
</div>
</div>
</div>
<?php include "include/_feedback-footer.php"; ?>
<?php
	include "function.php";
	$linkName = 'Услуги';
	$linkPages = 'services.php';
	$service = get_services_by_id($_GET['id']);
	$titleName = $service["title"];
	include "include/_html-head.php";
	include "include/other-links/_header-otherlinks-page.php";
?>
<div class="body-services">
	<div class="container">
		<div class="wrapper-sidebar">
			<?php include "include/other-links/_sidebar.php"; ?>
			<div class="services-page__wrapper">
				<div class="call-to-action">
					<div class="call-to-action__img">
						<img src="img/icons/01.png" alt="">
					</div>
					<div class="call-to-action__text">Начнем знакомство с обсуждения ваших вопросов и задач? <strong>Это бесплатно!</strong></div>
					<a class="call-to-action__btn">Заказать консультацию</a>
				</div>
				<div class="key-industries">
					<div class="key-industries__title">Ключевые отрасли на которых мы <br>специализируемся:</div>
					<div class="key-industries__list">
						<ul class="key-industries__list-nav">
							<li>Жилищно-коммунальное хозяйство</li>
							<li>Энергетика</li>
						</ul>
					</div>
				</div>
				<div class="body-services__content">
					<div class="body-services__content-title">Что делаем?</div>
					<div class="body-services__content-list">
						<ol class="body-services__content-nav">
							<?php echo $service['why_us']; ?>
						</ol>
					</div>
				</div>
				<div class="body-services__content">
					<div class="body-services__content-title">Ключевые этапы</div>
					<div class="body-services__content-list">
						<ol class="body-services__content-nav">
							<?php echo $service['key_stages']; ?>
						</ol>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php include "include/_feedback-footer.php" ?>

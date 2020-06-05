<?php 
$pageOtherTitle="Наши новости";
$pageOtherLink = "Новости";
include "function.php"; 
$news = get_news_all(); 
include "include/other-links/_header-otherlinks.php";
?>
<div class="news">
	<div class="container">
		<div class="wrapper-sidebar">
			<?php include "include/other-links/_sidebar.php" ?>
			<div class="news__wrapper">
				<?php foreach ($news as $new): ?>
					<div class="news__column">
						<a class="news__item" href="news-single.php?id=<?php echo $new['id']?>">
							<div class="news__img">
								<img src="img/news/<?php echo $new["img"]; ?>">
							</div>
							<div class="news__text">
								<div class="news__title"><?php echo $new["title"]; ?></div>
								<div class="news__date"><?php echo $new["date"]; ?></div>
							</div>
						</a>
					</div>
				<?php endforeach; ?>
				<div class="news__column">
					<a class="news__item" href="news-single.php?id=<?php echo $new['id']?>">
						<div class="news__img">
							<img src="img/news/new01.jpg">
						</div>
						<div class="news__text">
							<div class="news__title">Lorem ipsum dolor sit amet, consectetur adipisicing.</div>
							<div class="news__date"><?php echo $new["date"]; ?></div>
						</div>
					</a>
				</div>
				<div class="news__column">
					<a class="news__item" href="news-single.php?id=<?php echo $new['id']?>">
						<div class="news__img">
							<img src="img/news/new01.jpg">
						</div>
						<div class="news__text">
							<div class="news__title">Lorem ipsum dolor sit amet, consectetur adipisicing Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit qui, voluptas voluptatum!</div>
							<div class="news__date"><?php echo $new["date"]; ?></div>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>
</div>
<?php include "include/_feedback-footer.php"; ?>

<?php 
include "function.php";
views_update($_GET["id"]);
$new = get_news_by_id($_GET['id']);
$titleName = $new["title"];
include "include/_html-head.php";
?>
<div class="header-otherlinks">
	<div class="container">
		<?php include "include/_navigation.php"; ?>
		<div class="header-otherlinks__text">
			<div class="header-otherlinks__title"><?php echo $new["title"]; ?></div>
			<ul class="header-otherlinks__links">
				<li class="header-otherlinks__link"><a href="index.php">Главная</a></li>
				<li class="header-otherlinks__link">/</li>
				<li class="header-otherlinks__link"><a href="news.php">Новости</a></li>
				<li class="header-otherlinks__link">/</li>
				<li class="header-otherlinks__link"><a href=""><?php echo $titleName; ?></a></li>
			</ul>
		</div>
	</div>
</div>
<div class="news-single">
	<div class="container">
		<div class="wrapper-sidebar">
			<?php include "include/other-links/_sidebar.php" ?>
			<div class="news-single__content">
				<div class="news-single__content-img">
					<img src="img/news/<?php echo $new["img"]; ?>" alt="">
				</div>
				<div class="news-single__content-data">
					<div class="news-single__content-date"><?php echo date("F j, Y", strtotime($new["date"])); ?></div>
					<div class="news-single__content-eye"><?php echo $new["views"]; ?></div>
				</div>
				<div class="news-single__content-text">
					<div class="news-single__content-title"><?php echo $new["title_text"]; ?></div>
					<p class="news-single__content-paragraph"><?php echo $new["text"]; ?></p>
				</div>
				<div class="news-single__content-toback">
					<a href="news.php">назад к списку</a>
				</div>
				<div class="news-single__posts"></div>
			</div>
		</div>
	</div>
</div>
<?php include "include/_feedback-footer.php" ?>

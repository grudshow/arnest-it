<?php
require "config.php";

// ВЫВОД ВСЕХ НОВОСТЕЙ
function get_news_all(){
	global $db;
	$news = $db->query("SELECT * FROM news");
	return $news;
}

// ПОЛУЧЕНИЕ НОВОСТИ ПО ЕЕ ID
function get_news_by_id($id){
	global $db;
	$news = $db->query("SELECT * FROM news WHERE id=$id");
	foreach ($news as $new) {
		return $new;
	}
}

// ОБНОВЛЕНИЯ КОЛ-ВО ПРОСМОТРОВ НОВОСТИ ПО ЕЕ ID
function views_update($id){
	global $db;
	$db->query("UPDATE news SET views = views +1 WHERE id=$id");
}

// ВЫВОД ВСЕХ УСЛУГ
function get_services_all(){
	global $db;
	$services = $db->query("SELECT * FROM services");
	return $services;
}

// ПОЛУЧЕНИЕ УСЛУГ ПО ЕЕ ID
function get_services_by_id($id){
	global $db;
	$services = $db->query("SELECT * FROM services WHERE services_id=$id");
	foreach ($services as $service) {
		return $service;
	}
}
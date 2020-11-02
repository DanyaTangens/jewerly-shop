<?php

namespace application\models;

use application\core\Model;
use Imagick;

class Admin extends Model {

	public $error;

	public function loginValidate($post) {
		$config = require 'application/config/admin.php';
		if ($config['login'] != $post['login'] or $config['password'] != $post['password']) {
			$this->error = 'Логин или пароль указан неверно';
			return false;
		}
		return true;
	}

	public function postValidate($post, $type) {
		$nameLen = iconv_strlen($post['name']);
		$descriptionLen = iconv_strlen($post['description']);
		$priceLen = iconv_strlen($post['price']);
		if ($nameLen < 1 or $nameLen > 60) {
			$this->error = 'Название должно содержать от 1 до 60 символов';
			return false;
		} elseif ($descriptionLen < 1 or $descriptionLen > 200) {
			$this->error = 'Описание должно содержать от 1 до 200 символов';
			return false;
		} elseif ($priceLen < 1 or $priceLen > 11) {
			$this->error = 'Стоимость должна быть от 1 до 11 знаков';
			return false;
		}
		//if (empty($_FILES['img']['tmp_name']) and $type == 'add') {
		//	$this->error = 'Изображение не выбрано';
		//	return false;
		//}
		return true;
	}

	public function postAdd($post) {
		$params = [
			'id' => '',
			'name' => $post['name'],
			'description' => $post['description'],
			'price' => $post['price'],
			'category' => $post['category'],
		];
		$this->db->query('INSERT INTO products VALUES (:id, :name, :description, :price, :category)', $params);
		return $this->db->lastInsertId();
	}

	public function postEdit($post, $id) {
		$params = [
			'id' => $id,
			'name' => $post['name'],
			'description' => $post['description'],
			'price' => $post['price'],
		];
		$this->db->query('UPDATE products SET name = :name, description = :description, price = :price WHERE id = :id', $params);
	}

	public function postUploadImage($path, $id) {
		$img = new Imagick($path);
		$img->cropThumbnailImage(600, 500);
		$img->setImageCompressionQuality(80);
		$img->writeImage($_SERVER['DOCUMENT_ROOT'] . '/public/materials/'.$id.'.jpg');
	}

	public function isPostExists($id) {
		$params = [
			'id' => $id,
		];
		return $this->db->column('SELECT id FROM products WHERE id = :id', $params);
	}

	public function postDelete($id) {
		$params = [
			'id' => $id,
		];
		$this->db->query('DELETE FROM products WHERE id = :id', $params);
		if(file_exists('public/materials/'.$id.'.jpg')){
			unlink($_SERVER['DOCUMENT_ROOT'] . '/public/materials/'.$id.'.jpg');
		}
	}

	public function postData($id) {
		$params = [
			'id' => $id,
		];
		return $this->db->row('SELECT * FROM products WHERE id = :id', $params);
	}

	public function clientsData(){
		return $this->db->row('SELECT * FROM clients');
	}
}
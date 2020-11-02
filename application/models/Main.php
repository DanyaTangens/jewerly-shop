<?php

namespace application\models;

use application\core\Model;

class Main extends Model {

	public $error;

	public function contactValidate($post) {
		$nameLen = iconv_strlen($post['name']);
		$lenphone = iconv_strlen($post['phone']);
		$textLen = iconv_strlen($post['text']);
		if ($nameLen < 3 or $nameLen > 20) {
			$this->error = 'Имя должно содержать от 3 до 20 символов';
			return false;
		} elseif (!filter_var($post['email'], FILTER_VALIDATE_EMAIL)) {
			$this->error = 'E-mail указан неверно';
			return false;
		
		} elseif ($textLen < 10 or $textLen > 500) {
			$this->error = 'Сообщение должно содержать от 10 до 500 символов';
			return false;
		}
		return true;
	}

	public function postsCount() {
		return $this->db->column('SELECT COUNT(id) FROM products');
	}

	public function clientAdd($post){
		$params = [
			'id' => '',
			'name' => $post['name'],
			'email' => $post['email'],
			'phone' => $post['phone'],
			'text' => $post['text'],
		];
		$this->db->query('INSERT INTO clients VALUES (:id, :name, :email, :phone, :text)', $params);
	}
	
	public function categoryCount($category){
		$params = [
			'category' => $category,
		];
		return $this->db->column('SELECT COUNT(id) FROM products WHERE category = :category', $params);
	}


	public function productsList($route) {
		$max = 5;
		$params = [
			'max' => $max,
			'start' => ((($route['page'] ?? 1) - 1) * $max),
		];
		return $this->db->row('SELECT * FROM products ORDER BY id DESC LIMIT :start, :max', $params);
	}
	
	public function fullProductsList($route) {
		$max = 10;
		$params = [
			'max' => $max,
			'start' => ((($route['page'] ?? 1) - 1) * $max),
		];
		return $this->db->row('SELECT * FROM products ORDER BY id DESC LIMIT :start, :max', $params);
		
	}

	public function braceletsList($route) {
		$max = 5;
		$params = [
			'max' => $max,
			'start' => ((($route['page'] ?? 1) - 1) * $max),
		];
		return $this->db->row('SELECT * FROM products WHERE category = 1 ORDER BY id DESC LIMIT :start, :max', $params);
	}

	public function earringsList($route) {
		$max = 5;
		$params = [
			'max' => $max,
			'start' => ((($route['page'] ?? 1) - 1) * $max),
		];
		return $this->db->row('SELECT * FROM products WHERE category = 2 ORDER BY id DESC LIMIT :start, :max', $params);
	}

	public function ringsList($route) {
		$max = 5;
		$params = [
			'max' => $max,
			'start' => ((($route['page'] ?? 1) - 1) * $max),
		];
		return $this->db->row('SELECT * FROM products WHERE category = 3 ORDER BY id DESC LIMIT :start, :max', $params);
	}

	public function necklacesList($route) {
		$max = 5;
		$params = [
			'max' => $max,
			'start' => ((($route['page'] ?? 1) - 1) * $max),
		];
		return $this->db->row('SELECT * FROM products WHERE category = 4 ORDER BY id DESC LIMIT :start, :max', $params);
	}

	public function categoryList($route, $category) {
		$max = 5;
		$params = [
			'max' => $max,
			'start' => ((($route['page'] ?? 1) - 1) * $max),
			'category' => $category,
		];
		return $this->db->row('SELECT * FROM products WHERE category = :category ORDER BY id DESC LIMIT :start, :max', $params);
	}

	public function recommendList($route){
		$params = [
			'id' => $route['id'],
		];
		return $this->db->row('(SELECT * FROM products WHERE category = 1 AND NOT id = :id LIMIT 2)  UNION 
		(SELECT * FROM products WHERE category = 2 AND NOT id = :id LIMIT 2)  UNION
		(SELECT * FROM products WHERE category = 3 AND NOT id = :id LIMIT 2)  UNION
		(SELECT * FROM products WHERE category = 4 AND NOT id = :id LIMIT 2)
        ORDER By RAND()', $params);
	}

}

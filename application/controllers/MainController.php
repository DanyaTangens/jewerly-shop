<?php

namespace application\controllers;

use application\core\Controller;
use application\lib\Pagination;
use application\models\Admin;

class MainController extends Controller {

	public function indexAction() {
		$vars = [
			'list' => $this->model->productsList($this->route),
			'bracelets' => $this->model->categoryList($this->route, 1),
			'earrings' => $this->model->categoryList($this->route, 2),
			'rings' => $this->model->categoryList($this->route, 3),
			'necklaces' => $this->model->categoryList($this->route, 4),
		];
		$this->view->render('Главная страница', $vars);
	}

	public function aboutAction() {
		$this->view->render('Обо мне');
	}

	public function ringsAction() {
		$pagination = new Pagination($this->route, $this->model->categoryCount(3));
		$vars = [
			'list' => $this->model->ringsList($this->route),
			'pagination' => $pagination->get(),
		];
		$this->view->render('Кольца', $vars);
	}

	public function earringsAction() {
		$pagination = new Pagination($this->route, $this->model->categoryCount(2));
		$vars = [
			'list' => $this->model->earringsList($this->route),
			'pagination' => $pagination->get(),
		];
		$this->view->render('Серьги', $vars);
	}

	public function necklacesAction() {
		$pagination = new Pagination($this->route, $this->model->categoryCount(4));
		$vars = [
			'list' => $this->model->necklacesList($this->route),
			'pagination' => $pagination->get(),
		];
		$this->view->render('Цепочки', $vars);
	}

	public function braceletsAction() {
		$pagination = new Pagination($this->route, $this->model->categoryCount(1));
		$vars = [
			'list' => $this->model->braceletsList($this->route),
			'pagination' => $pagination->get(),
		];
		$this->view->render('Браслеты', $vars);
	}

	public function contactAction() {
		if (!empty($_POST)) {
			if (!$this->model->contactValidate($_POST)) {
				$this->view->message('error', $this->model->error);
			}
			$this->model->clientAdd($_POST);
			//mail('danytangens@yandex.ru', 'Сообщение из блога', $_POST['name'].'|'.$_POST['email'].'|'.$_POST['text']);
			$this->view->message('success', 'Сообщение отправлено Администратору');
		}
		$this->view->render('Контакты');
	}

	public function catalogAction(){
		$pagination = new Pagination($this->route, $this->model->postsCount());
		$vars = [
			'pagination' => $pagination->get(),
			'list' => $this->model->fullProductsList($this->route),
		];
		$this->view->render('Каталог', $vars);
	}

	public function postAction() {
		$adminModel = new Admin;
		if (!$adminModel->isPostExists($this->route['id'])) {
			$this->view->errorCode(404);
		}
		$vars = [
			'data' => $adminModel->postData($this->route['id'])[0],
			'recommend' => $this->model->recommendList($this->route),
		];
		$this->view->render('Пост', $vars);
	}

}
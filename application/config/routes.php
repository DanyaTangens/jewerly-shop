<?php

return [
	// MainController
	'' => [
		'controller' => 'main',
		'action' => 'index',
	],
	'main/index/{page:\d+}' => [
		'controller' => 'main',
		'action' => 'index',
	],
	'about' => [
		'controller' => 'main',
		'action' => 'about',
	],
	'contact' => [
		'controller' => 'main',
		'action' => 'contact',
	],
	'post/{id:\d+}' => [
		'controller' => 'main',
		'action' => 'post',
	],
	'catalog' => [
		'controller' => 'main',
		'action' => 'catalog',
	],
	'main/catalog/{page:\d+}' => [
		'controller' => 'main',
		'action' => 'catalog',
	],
	'catalog/bracelets' => [
		'controller' => 'main',
		'action' => 'bracelets',
	],
	'main/bracelets/{page:\d+}' => [
		'controller' => 'main',
		'action' => 'bracelets',
	],
	'catalog/earrings' => [
		'controller' => 'main',
		'action' => 'earrings',
	],
	'main/earrings/{page:\d+}' => [
		'controller' => 'main',
		'action' => 'earrings',
	],
	'catalog/rings' => [
		'controller' => 'main',
		'action' => 'rings',
	],
	'main/rings/{page:\d+}' => [
		'controller' => 'main',
		'action' => 'rings',
	],
	'catalog/necklaces' => [
		'controller' => 'main',
		'action' => 'necklaces',
	],
	'main/necklaces/{page:\d+}' => [
		'controller' => 'main',
		'action' => 'necklaces',
	],
	// AdminController
	'admin/login' => [
		'controller' => 'admin',
		'action' => 'login',
	],
	'admin/logout' => [
		'controller' => 'admin',
		'action' => 'logout',
	],
	'admin/add' => [
		'controller' => 'admin',
		'action' => 'add',
	],
	'admin/edit/{id:\d+}' => [ //\w+
		'controller' => 'admin',
		'action' => 'edit',
	],
	'admin/delete/{id:\d+}' => [
		'controller' => 'admin',
		'action' => 'delete',
	],
	'admin/posts/{page:\d+}' => [
		'controller' => 'admin',
		'action' => 'posts',
	],
	'admin/posts' => [
		'controller' => 'admin',
		'action' => 'posts',
	],
	'admin/clients/{page:\d+}' => [
		'controller' => 'admin',
		'action' => 'clients',
	],
	'admin/clients' => [
		'controller' => 'admin',
		'action' => 'clients',
	],
];
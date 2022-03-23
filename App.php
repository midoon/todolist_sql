<?php

require_once __DIR__."/entity/TodoList.php";
require_once __DIR__."/repository/TodoListRepository.php";
require_once __DIR__."/service/TodoListService.php";
require_once __DIR__."/helper/InputHelper.php";
require_once __DIR__."/view/TodoListView.php";
require_once __DIR__."/config/Database.php";

use View\TodoListView;
use Service\TodoListServiceImpl;
use Repository\TodoListRepositoryImpl;
use Entity\TodoList;

$connection  = \Config\Database::getConnection();
$todoListRepository = new TodoListRepositoryImpl($connection);
$todoListService = new TodoListServiceImpl($todoListRepository);
$app = new TodoListView($todoListService);
$app->showTodoList();
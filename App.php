<?php

require_once __DIR__."/entity/TodoList.php";
require_once __DIR__."/repository/TodoListRepository.php";
require_once __DIR__."/service/TodoListService.php";
require_once __DIR__."/helper/InputHelper.php";
require_once __DIR__."/view/TodoListView.php";

use View\TodoListView;
use Service\TodoListServiceImpl;
use Repository\TodoListRepositoryImpl;
use Entity\TodoList;

$app = new TodoListView(new TodoListServiceImpl(new TodoListRepositoryImpl()));
$app->showTodoList();
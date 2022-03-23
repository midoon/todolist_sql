<?php

require_once __DIR__."/../entity/TodoList.php";
require_once __DIR__."/../repository/TodoListRepository.php";
require_once __DIR__."/../service/TodoListService.php";
require_once __DIR__."/../config/Database.php";

use Service\TodoListServiceImpl;
use Repository\TodoListRepositoryImpl;
use Entity\TodoList;

function testShowTodoList(): void{
    $connection = \Config\Database::getConnection();
    $todoListRepository = new TodoListRepositoryImpl($connection);
    $todoListService = new TodoListServiceImpl($todoListRepository);

    

    $todoListService->showTodoList();
}


function testAddTodoList(): void{
    $connection = \Config\Database::getConnection();
    $todoListRepository = new TodoListRepositoryImpl($connection);
    $todoListService = new TodoListServiceImpl($todoListRepository);

    $todoListService->addTodoList("PHP");
    $todoListService->addTodoList("JAVA");

    $todoListService->showTodoList();
}


function testRemoveTodoList(): void{

    $connection = \Config\Database::getConnection();
    $todoListRepository = new TodoListRepositoryImpl($connection);
    $todoListService = new TodoListServiceImpl($todoListRepository);

    echo $todoListService->removeTodoList(5) . PHP_EOL;
    echo $todoListService->removeTodoList(4) . PHP_EOL;
    echo $todoListService->removeTodoList(1) . PHP_EOL;


}

testShowTodoList();

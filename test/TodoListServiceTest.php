<?php

require_once __DIR__."/../entity/TodoList.php";
require_once __DIR__."/../repository/TodoListRepository.php";
require_once __DIR__."/../service/TodoListService.php";

use Service\TodoListServiceImpl;
use Repository\TodoListRepositoryImpl;
use Entity\TodoList;

function testShowTodoList(): void{
    $todoListRepository = new TodoListRepositoryImpl();

    $todoListRepository->todoList[1] = new TodoList("PHP");
    $todoListRepository->todoList[2] = new TodoList("JAVA");
    $todoListRepository->todoList[3] = new TodoList("GO");
    $todoListService = new TodoListServiceImpl($todoListRepository);

    $todoListService->showTodoList();
}


function testAddTodoList(): void{
    $todoListRepository = new TodoListRepositoryImpl();
    $todoListService = new TodoListServiceImpl($todoListRepository);

    $todoListService->addTodoList("PHP");
    $todoListService->addTodoList("JAVA");

    $todoListService->showTodoList();
}


function testRemoveTodoList(): void{
    $todoListRepository = new TodoListRepositoryImpl();
    $todoListService = new TodoListServiceImpl($todoListRepository);

    $todoListService->addTodoList("PHP");
    $todoListService->addTodoList("JAVA");
    $todoListService->addTodoList("GO");
    $todoListService->addTodoList("JS");

    $todoListService->showTodoList();

    $todoListService->removeTodoList(2);
    $todoListService->showTodoList();

}

testRemoveTodoList();

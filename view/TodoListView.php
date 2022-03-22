<?php



namespace View{

    require_once __DIR__."/../entity/TodoList.php";
    require_once __DIR__."/../repository/TodoListRepository.php";
    require_once __DIR__."/../service/TodoListService.php";

    use Service\TodoListService;
    use Repository\TodoListRepository;
    use Entity\TodoList;
    use Helper\InputHelper;

    class TodoListView{

        private TodoListService $todoListService;

        public function __construct(TodoListService $todoListService){
            $this->todoListService = $todoListService;
        }

        function showTodoList(): void{
            while(true){
                echo "=================================".PHP_EOL;
                echo "TODO LIST".PHP_EOL;
                
                $this->todoListService->showTodoList();
                echo "---------------------------------".PHP_EOL;


                echo "1. Tambah Todo".PHP_EOL;
                echo "2. Hapus Todo".PHP_EOL;
                echo "x. Keluar".PHP_EOL;
                echo "---------------------------------".PHP_EOL;

                $pilihan = InputHelper::input("Masukkan pilihan: ");

                if ($pilihan == "1"){
                    $this->addTodoList();
                } else if($pilihan == "2"){
                    $this->removeTodoList();
                } else if($pilihan == "x"){
                    break;
                } else{
                    echo "Pilihan tidak ditemukan".PHP_EOL;
                }
            }
        }

        function addTodoList(): void{
            echo "==TAMBAH TODO==". PHP_EOL;
            $info = InputHelper::input("Masukkan info (x untuk batal): ");
            if ($info == "x"){
                echo "BERHASIL BATAL TAMBAH" . PHP_EOL;
                return;
            } else{
                $this->todoListService->addTodoList($info);
            }
        }

        function removeTodoList(): void{
            echo "==HAPPUS TODO==". PHP_EOL;
            $number = InputHelper::input("Masukkan nomor (x untuk batal): ");
            if ($number == "x"){
                echo "BERHASIL BATAL HAPUS" . PHP_EOL;
                return;
            } else{
                $this->todoListService->removeTodoList($number);
            }
        }
    }
}
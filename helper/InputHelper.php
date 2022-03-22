<?php

namespace Helper{
    class InputHelper{
        public static function input(string $message): string{
            echo $message;
            $input = trim(fgets(STDIN));
            return $input;
        }
    }
}
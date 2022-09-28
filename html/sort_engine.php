<?php

    class SortEngine {
        const PARAMETER_NAME = 'array';
        const DELIMITER = ',';
        private array $arr = [];
    
        public function __construct(string $array_string) {
            $tok = strtok($array_string, self::DELIMITER);
            while ($tok !== false) {
                $this->arr[] = $tok;
                $tok = strtok(self::DELIMITER);
            }
    
            // if (!$this->check($this->arr)) {
            //     throw new Exception("Wrong input");
            // }
    
            // foreach ($this->arr as &$value) {
            //     $value = intval($value);
            // }
    
            $this->arr = $this->shellSort($this->arr);
    
            foreach ($this->arr as &$value) {
                // $value = intval($value);
                echo $value, ', ';
            }
    
            unset($value);
        }

        function shellSort($list) {
            $length = count($list);
            $d = (int) ($length / 2);
            while ($d > 0) {
                for ($i = 0; $i < $length - $d; $i++) {
                    $j = $i;
                    while (($j >= 0) && ($list[$j] > $list[$j + $d])) {
                        $t = $list[$j];
                        $list[$j] = $list[$j + $d];
                        $list[$j + $d] = $t;
                        $j -= $d;
                    }
                }
                $d = (int) ($d / 2);
            }
            return $list;
        }
    
        function check(array $arr): bool {
            foreach ($arr as &$value) {
                if (!is_numeric($value))
                    return false;
            }
            return true;
        }
    
        // function simple_quick_sort($arr)
        // {
        //     if(count($arr) <= 1){
        //         return $arr;
        // }
        // else{
        //     $pivot = $arr[0];
        //     $left = array();
        //     $right = array();
        //     for($i = 1; $i < count($arr); $i++)
        //     {
        //         if($arr[$i] < $pivot){
        //             $left[] = $arr[$i];
        //         }
        //         else{
        //             $right[] = $arr[$i];
        //         }
        //     }
        //     return array_merge($this->simple_quick_sort($left), array($pivot), $this->simple_quick_sort($right));
        // }
        // }
    
    }
?>
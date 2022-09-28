<?php
const PARAMETER_NAME = 'cmd';

function lol($abc){
    
    switch ($abc) {
        case 0:
            $output=null;
            $retval=null;
            echo "ps -a\n";
            exec('ps -a', $output, $retval);
            echo "Вернёт статус $retval и значение:\n";
            print_r($output);
            break;

        case 1:
            $output=null;
            $retval=null;
            echo "pwd\n";
            exec('pwd', $output, $retval);
            echo "Вернёт статус $retval и значение:\n";
            print_r($output);
            break;
        case 2:
            $output=null;
            $retval=null;
            echo "whoami\n";
            exec('whoami', $output, $retval);
            echo "Вернёт статус $retval и значение:\n";
            print_r($output);
            break;
        case 3:
            $output=null;
            $retval=null;
            echo "ls\n";
            exec('ls', $output, $retval);
            echo "Вернёт статус $retval и значение:\n";
            print_r($output);
            break;
        case 4:
            $output=null;
            $retval=null;
            echo "id\n";
            exec('id', $output, $retval);
            echo "Вернёт статус $retval и значение:\n";
            print_r($output);
            break;
    
    }
}
?>
<?php
require_once('/APP/app_config/define.php');
require_once(ADMIN);

echo $argc."\n";
var_dump($argc);
var_dump($argv);

switch ($argv[1]) {
    case 'list_user':
        printf("\nUser List:\n %s \n",(new Admin)->$argv[1]());
        break;
    case 'gen_passh':
        if ($argv[2] != NULL && $argv[3] != NULL && argc <= 4){
                printf("\nHere is your key:\n %s \n", (new Admin)->$argv[1]($argv[2], $argv[3]));
        }else{
                echo "\nUsage: $argv[1] [pass][cost]\n";
        }
        break;
    case 'enable_user':
        if ($argv[2] != NULL)
                printf("\nEnable user %s, affected rows: %s \n", $argv[2],(new Admin)->$argv[1]($argv[2]));
        break;
    case 'disable_user':
        if ($argv[2] != NULL)
                printf("\nDisable user %s, affected rows: %s \n", $argv[2],(new Admin)->$argv[1]($argv[2]));
        break;
    case 'update_user_stats':
        if ($argv[2] != NULL && $argv[3] != NULL)
                printf("\nUpdate user %s stats: %s, affected rows: %s\n", $argv[2],$argv[3], (new ADmin)->$argv[1]($argv[2],$a$
        break;
    default:
        // Do something by default
}

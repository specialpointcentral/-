<?php
/**
 * use to query the database
 *
 * @author huqi
 * @version 1.0
 *
 * @param $db_query \String query the database
 * @param $db_name \String query database name
 * @return bool|mysqli_result
 */
function DB_query($db_query, $db_name)
{
    require_once "config.php";
    $config = $GLOBALS["db_config"];
    $mysql = new mysqli($config["db_host"], $config["db_user"], $config["db_psw"], $db_name, $config["db_port"]);
    if (mysqli_connect_errno()) {
        //TODO database connect error ,we need send error to the client
        echo 'Database Connect is error - ' . mysqli_connect_error();
        exit();
    }
    $mysql->set_charset("utf8");
    $result=$mysql->query($db_query);
    $mysql->close();
    return $result;
}

?>
<?php
/**
 * Created by PhpStorm.
 * User: chenism
 * Date: 2018/3/6
 * Time: 21:15
 */

require "fw_s_recv.php";
define("HEADER_LEN", 11);
define("APP_PROPO_FLAG", 0xD4);
define("HEADER_VERION", 0x01);
define("HEADER_TYPE", 1);
define("SERVER_PORT", 20005);

$hostfd = array();
function addHost($host, $fd) { // add host on receiving opfc "Connect"
    Global $hostfd;
    if(array_key_exists($host,$hostfd)){
        unset($hostfd[$host]);
    }
    $hostfd[$host] = $fd;
}
function delHost($host) { // del host on sending opfs "Disconnect/Connect_Err"
    Global $hostfd;
    unset($hostfd[$host]);
}

//服务端设置>===================================
$serv = new swoole_server('0.0.0.0', SERVER_PORT, SWOOLE_PROCESS, SWOOLE_SOCK_TCP); // SWOOLE_PROCESS多进程

$serv->on('start', function ($serv) {
    echo "Service:Start...";
});

$serv->on('connect', function ($serv, $fd) {
    echo "Service: user $fd connected";
});

$serv->on('receive', 'recv'); // call func 'recv' when receive package from client
// $serv->on('receive', function ($serv, $fd, $from_id, $data) {
//     $proc = new swoole_process('recv_th');
//     $info = $fd.'#'.$data;
//     $proc->write($info);
//     $proc->start();
// });
$serv->on('close', function ($serv, $fd) {
    echo "Client: Close.";
});
//>===============================================

function recv_th(swoole_process $proc)
{
    $info = explode('#', $proc->read());
    $fd = $info[0];
    $data = $info[1];

    $res = unpack("C1flag/C1version/C1type/a8host", $data);
    //切割包体
    $content = substr($data, 11);

    //解析opcode
    $pk = unpack("vopcode", $content);
    $opcode = $pk['opcode'];
    Global $FFC_array;
    if($opcode == 0){
        addHost($res['host'], $fd);
    }
    
    call_user_func($FFC_array[$opcode], $res['host'], $content);
    $proc->exit(0);
}
function recv($serv, $fd, $from_id, $data)
{
    $res = unpack("C1flag/C1version/C1type/a8host", $data);
    //切割包体
    $content = substr($data, 11);
    //TODO 包头判断等

    //解析opcode
    $pk = unpack("vopcode", $content);
    $opcode = $pk['opcode'];
    Global $FFC_array;
    if($opcode == 0){
        addHost($res['host'], $fd);
    }
    call_user_func($FFC_array[$opcode], $res['host'],$content);
}


function send_fnc($host, $content) { // all opfc callback functions evoke this function to send message

    $pk = pack("C1C1C1a8", APP_PROPO_FLAG, HEADER_VERION, HEADER_TYPE, $host);

    $pk=$pk.$content;
    Global $serv;
    Global $hostfd;
    $serv->send($hostfd[$host], $pk);
    if(unpack("v", $content)==1){ // sendfunc need fd
        delHost($host);
    }
}
//服务器启动>========================

$serv->start();


<?php
/**
 * Created by PhpStorm.
 * User: chenism
 * Date: 2018/3/12
 * Time: 19:11
 */
require "Enum.php";

use MyCLabs\Enum;

class OPFS extends Enum\Enum
{
    const OPFS_Connect_Ok = 0;
    const OPFS_Connect_Err = 1;
    const OPFS_Monitor_Ok = 2;
    const OPFS_Manage_Info = 3;
    const OPFS_Manage_Query = 4;
    const OPFS_Manage_ModeSet = 5;
    const OPFS_Manage_Edit = 6;
    const OPFS_Manage_Del = 7;
    const OPFS_Group_List = 8;
    const OPFS_Group_Add = 9;
    const OPFS_Group_Edit = 10;
    const OPFS_Group_Del = 11;
    const OPFS_RuleArp_List = 12;
    const OPFS_RuleArp_Add = 13;
    const OPFS_RuleArp_Enable = 14;
    const OPFS_RuleArp_Disable = 15;
    const OPFS_RuleArp_Cls = 16;
    const OPFS_RuleArp_Edit = 17;
    const OPFS_RuleArp_Del = 18;
    const OPFS_RuleMac_List = 19;
    const OPFS_RuleMac_Add = 20;
    const OPFS_RuleMac_Cls = 21;
    const OPFS_RuleMac_Enable = 22;
    const OPFS_RuleMac_Disable = 23;
    const OPFS_RuleMac_Edit = 24;
    const OPFS_RuleMac_Del = 25;
    const OPFS_RuleIpBl_List = 26;
    const OPFS_RuleIpBl_Add = 27;
    const OPFS_RuleIpBl_Cls = 28;
    const OPFS_RuleIpBl_Enable = 29;
    const OPFS_RuleIpBl_Disable = 30;
    const OPFS_RuleIpBl_Edit = 31;
    const OPFS_RuleIpBl_Del = 32;
    const OPFS_RuleIpAu_List = 33;
    const OPFS_RuleIpAu_Add = 34;
    const OPFS_RuleIpAu_Cls = 35;
    const OPFS_RuleIpAu_Edit = 36;
    const OPFS_RuleIpAu_Del = 37;
    const OPFS_RuleSzPri_List = 38;
    const OPFS_RuleSzPri_Add = 39;
    const OPFS_RuleSzPri_Cls = 40;
    const OPFS_RuleSzPri_Edit = 41;
    const OPFS_RuleSzPri_Del = 42;
    const OPFS_RuleSzMac_List = 43;
    const OPFS_RuleSzMac_Add = 44;
    const OPFS_RuleSzMac_Cls = 45;
    const OPFS_RuleSzMac_Enable = 46;
    const OPFS_RuleSzMac_Disable = 47;
    const OPFS_RuleSzMac_Edit = 48;
    const OPFS_RuleSzMac_Del = 49;
    const OPFS_RuleSzIp_List = 50;
    const OPFS_RuleSzIp_Add = 51;
    const OPFS_RuleSzIp_Cls = 52;
    const OPFS_RuleSzIp_Enable = 53;
    const OPFS_RuleSzIp_Disable = 54;
    const OPFS_RuleSzIp_Edit = 55;
    const OPFS_RuleSzIp_Del = 56;
    const OPFS_RuleSzTrans_List = 57;
    const OPFS_RuleSzTrans_Add = 58;
    const OPFS_RuleSzTrans_Cls = 59;
    const OPFS_RuleSzTrans_Enable = 60;
    const OPFS_RuleSzTrans_Disable = 61;
    const OPFS_RuleSzTrans_Edit = 62;
    const OPFS_RuleSzTrans_Del = 63;
    const OPFS_RuleTcpBl_List = 64;
    const OPFS_RuleTcpBl_Add = 65;
    const OPFS_RuleTcpBl_Cls = 66;
    const OPFS_RuleTcpBl_Enable = 67;
    const OPFS_RuleTcpBl_Disable = 68;
    const OPFS_RuleTcpBl_Edit = 69;
    const OPFS_RuleTcpBl_Del = 70;
    const OPFS_RuleTcpBl_Import = 71;
    const OPFS_RuleTcpBl_Export = 72;
    const OPFS_RuleTcpWl_List = 73;
    const OPFS_RuleTcpWl_Add = 74;
    const OPFS_RuleTcpWl_Cls = 75;
    const OPFS_RuleTcpWl_Enable = 76;
    const OPFS_RuleTcpWl_Disable = 77;
    const OPFS_RuleTcpWl_Edit = 78;
    const OPFS_RuleTcpWl_Del = 79;
    const OPFS_RuleTcpWl_Import = 80;
    const OPFS_RuleTcpWl_Export = 81;
    const OPFS_RuleTcpTrust_List = 82;
    const OPFS_RuleTcpTrust_Add = 83;
    const OPFS_RuleTcpTrust_Cls = 84;
    const OPFS_RuleTcpTrust_Edit = 85;
    const OPFS_RuleTcpTrust_Del = 86;
    const OPFS_RuleTcpTrust_Import = 87;
    const OPFS_RuleTcpTrust_Export = 88;
    const OPFS_RuleTcpAu_List = 89;
    const OPFS_RuleTcpAu_Add = 90;
    const OPFS_RuleTcpAu_Cls = 91;
    const OPFS_RuleTcpAu_Edit = 92;
    const OPFS_RuleTcpAu_Del = 93;
    const OPFS_RuleTcpAu_Import = 94;
    const OPFS_RuleTcpAu_Export = 95;
    const OPFS_RuleUdpBl_List = 96;
    const OPFS_RuleUdpBl_Add = 97;
    const OPFS_RuleUdpBl_Cls = 98;
    const OPFS_RuleUdpBl_Enable = 99;
    const OPFS_RuleUdpBl_Disable = 100;
    const OPFS_RuleUdpBl_Edit = 101;
    const OPFS_RuleUdpBl_Del = 102;
    const OPFS_RuleUdpBl_Import = 103;
    const OPFS_RuleUdpBl_Export = 104;
    const OPFS_RuleUdpWl_List = 105;
    const OPFS_RuleUdpWl_Add = 106;
    const OPFS_RuleUdpWl_Cls = 107;
    const OPFS_RuleUdpWl_Enable = 108;
    const OPFS_RuleUdpWl_Disable = 109;
    const OPFS_RuleUdpWl_Edit = 110;
    const OPFS_RuleUdpWl_Del = 111;
    const OPFS_RuleUdpWl_Import = 112;
    const OPFS_RuleUdpWl_Export = 113;
    const OPFS_RuleUdpTrust_List = 114;
    const OPFS_RuleUdpTrust_Add = 115;
    const OPFS_RuleUdpTrust_Cls = 116;
    const OPFS_RuleUdpTrust_Edit = 117;
    const OPFS_RuleUdpTrust_Del = 118;
    const OPFS_RuleUdpTrust_Import = 119;
    const OPFS_RuleUdpTrust_Export = 120;
    const OPFS_RuleUdpAu_List = 121;
    const OPFS_RuleUdpAu_Add = 122;
    const OPFS_RuleUdpAu_Cls = 123;
    const OPFS_RuleUdpAu_Edit = 124;
    const OPFS_RuleUdpAu_Del = 125;
    const OPFS_RuleUdpAu_Import = 126;
    const OPFS_RuleUdpAu_Export = 127;
    const OPFS_RuleModbusBl_List = 128;
    const OPFS_RuleModbusBl_Add = 129;
    const OPFS_RuleModbusBl_Cls = 130;
    const OPFS_RuleModbusBl_Enable = 131;
    const OPFS_RuleModbusBl_Disable = 132;
    const OPFS_RuleModbusBl_Edit = 133;
    const OPFS_RuleModbusBl_Del = 134;
    const OPFS_RuleModbusBl_Import = 135;
    const OPFS_RuleModbusBl_Export = 136;
    const OPFS_RuleModbusWl_List = 137;
    const OPFS_RuleModbusWl_Add = 138;
    const OPFS_RuleModbusWl_Cls = 139;
    const OPFS_RuleModbusWl_Enable = 140;
    const OPFS_RuleModbusWl_Disable = 141;
    const OPFS_RuleModbusWl_Edit = 142;
    const OPFS_RuleModbusWl_Del = 143;
    const OPFS_RuleModbusWl_Import = 144;
    const OPFS_RuleModbusWl_Export = 145;
    const OPFS_RuleModbusAu_List = 146;
    const OPFS_RuleModbusAu_Add = 147;
    const OPFS_RuleModbusAu_Cls = 148;
    const OPFS_RuleModbusAu_Enable = 149;
    const OPFS_RuleModbusAu_Disable = 150;
    const OPFS_RuleModbusAu_Edit = 151;
    const OPFS_RuleModbusAu_Del = 152;
    const OPFS_RuleModbusAu_Import = 153;
    const OPFS_RuleModbusAu_Export = 154;
    const OPFS_RuleIec104Bl_List = 155;
    const OPFS_RuleIec104Bl_Add = 156;
    const OPFS_RuleIec104Bl_Cls = 157;
    const OPFS_RuleIec104Bl_Enable = 158;
    const OPFS_RuleIec104Bl_Disable = 159;
    const OPFS_RuleIec104Bl_Edit = 160;
    const OPFS_RuleIec104Bl_Del = 161;
    const OPFS_RuleIec104Bl_Import = 162;
    const OPFS_RuleIec104Bl_Export = 163;
    const OPFS_RuleIec104Wl_List = 164;
    const OPFS_RuleIec104Wl_Add = 165;
    const OPFS_RuleIec104Wl_Cls = 166;
    const OPFS_RuleIec104Wl_Enable = 167;
    const OPFS_RuleIec104Wl_Disable = 168;
    const OPFS_RuleIec104Wl_Edit = 169;
    const OPFS_RuleIec104Wl_Del = 170;
    const OPFS_RuleIec104Wl_Import = 171;
    const OPFS_RuleIec104Wl_Export = 172;
    const OPFS_RuleIec104Au_List = 173;
    const OPFS_RuleIec104Au_Add = 174;
    const OPFS_RuleIec104Au_Cls = 175;
    const OPFS_RuleIec104Au_Enable = 176;
    const OPFS_RuleIec104Au_Disable = 177;
    const OPFS_RuleIec104Au_Edit = 178;
    const OPFS_RuleIec104Au_Del = 179;
    const OPFS_RuleIec104Au_Import = 180;
    const OPFS_RuleIec104Au_Export = 181;
    const OPFS_RuleDnp3Bl_List = 182;
    const OPFS_RuleDnp3Bl_Add = 183;
    const OPFS_RuleDnp3Bl_Cls = 184;
    const OPFS_RuleDnp3Bl_Enable = 185;
    const OPFS_RuleDnp3Bl_Disable = 186;
    const OPFS_RuleDnp3Bl_Edit = 187;
    const OPFS_RuleDnp3Bl_Del = 188;
    const OPFS_RuleDnp3Bl_Import = 189;
    const OPFS_RuleDnp3Bl_Export = 190;
    const OPFS_RuleDnp3Wl_List = 191;
    const OPFS_RuleDnp3Wl_Add = 192;
    const OPFS_RuleDnp3Wl_Cls = 193;
    const OPFS_RuleDnp3Wl_Enable = 194;
    const OPFS_RuleDnp3Wl_Disable = 195;
    const OPFS_RuleDnp3Wl_Edit = 196;
    const OPFS_RuleDnp3Wl_Del = 197;
    const OPFS_RuleDnp3Wl_Import = 198;
    const OPFS_RuleDnp3Wl_Export = 199;
    const OPFS_RuleDnp3Au_List = 200;
    const OPFS_RuleDnp3Au_Add = 201;
    const OPFS_RuleDnp3Au_Cls = 202;
    const OPFS_RuleDnp3Au_Enable = 203;
    const OPFS_RuleDnp3Au_Disable = 204;
    const OPFS_RuleDnp3Au_Edit = 205;
    const OPFS_RuleDnp3Au_Del = 206;
    const OPFS_RuleDnp3Au_Import = 207;
    const OPFS_RuleDnp3Au_Export = 208;
    const OPFS_RuleS7Bl_List = 209;
    const OPFS_RuleS7Bl_Add = 210;
    const OPFS_RuleS7Bl_Cls = 211;
    const OPFS_RuleS7Bl_Enable = 212;
    const OPFS_RuleS7Bl_Disable = 213;
    const OPFS_RuleS7Bl_Edit = 214;
    const OPFS_RuleS7Bl_Del = 215;
    const OPFS_RuleS7Bl_Import = 216;
    const OPFS_RuleS7Bl_Export = 217;
    const OPFS_RuleS7Wl_List = 218;
    const OPFS_RuleS7Wl_Add = 219;
    const OPFS_RuleS7Wl_Cls = 220;
    const OPFS_RuleS7Wl_Enable = 221;
    const OPFS_RuleS7Wl_Disable = 222;
    const OPFS_RuleS7Wl_Edit = 223;
    const OPFS_RuleS7Wl_Del = 224;
    const OPFS_RuleS7Wl_Import = 225;
    const OPFS_RuleS7Wl_Export = 226;
    const OPFS_RuleS7Au_List = 227;
    const OPFS_RuleS7Au_Add = 228;
    const OPFS_RuleS7Au_Cls = 229;
    const OPFS_RuleS7Au_Enable = 230;
    const OPFS_RuleS7Au_Disable = 231;
    const OPFS_RuleS7Au_Edit = 232;
    const OPFS_RuleS7Au_Del = 233;
    const OPFS_RuleS7Au_Import = 234;
    const OPFS_RuleS7Au_Export = 235;
    const OPFS_RuleOpcBl_List = 236;
    const OPFS_RuleOpcBl_Add = 237;
    const OPFS_RuleOpcBl_Cls = 238;
    const OPFS_RuleOpcBl_Enable = 239;
    const OPFS_RuleOpcBl_Disable = 240;
    const OPFS_RuleOpcBl_Edit = 241;
    const OPFS_RuleOpcBl_Del = 242;
    const OPFS_RuleOpcBl_Import = 243;
    const OPFS_RuleOpcBl_Export = 244;
    const OPFS_RuleOpcWl_List = 245;
    const OPFS_RuleOpcWl_Add = 246;
    const OPFS_RuleOpcWl_Cls = 247;
    const OPFS_RuleOpcWl_Enable = 248;
    const OPFS_RuleOpcWl_Disable = 249;
    const OPFS_RuleOpcWl_Edit = 250;
    const OPFS_RuleOpcWl_Del = 251;
    const OPFS_RuleOpcWl_Import = 252;
    const OPFS_RuleOpcWl_Export = 253;
    const OPFS_RuleOpcAu_List = 254;
    const OPFS_RuleOpcAu_Add = 255;
    const OPFS_RuleOpcAu_Cls = 256;
    const OPFS_RuleOpcAu_Enable = 257;
    const OPFS_RuleOpcAu_Disable = 258;
    const OPFS_RuleOpcAu_Edit = 259;
    const OPFS_RuleOpcAu_Del = 260;
    const OPFS_RuleOpcAu_Import = 261;
    const OPFS_RuleOpcAu_Export = 262;
    const OPFS_LrnModbus_Start = 263;
    const OPFS_LrnModbus_End = 264;
    const OPFS_LrnModbus_Edit = 265;
    const OPFS_LrnModbus_Del = 266;
    const OPFS_LrnModbus_Cls = 267;
    const OPFS_LrnIec104_Start = 268;
    const OPFS_LrnIec104_End = 269;
    const OPFS_LrnIec104_Edit = 270;
    const OPFS_LrnIec104_Del = 271;
    const OPFS_LrnIec104_Cls = 272;
    const OPFS_LrnDnp3_Start = 273;
    const OPFS_LrnDnp3_End = 274;
    const OPFS_LrnDnp3_Edit = 275;
    const OPFS_LrnDnp3_Del = 276;
    const OPFS_LrnDnp3_Cls = 277;
    const OPFS_LrnS7_Start = 278;
    const OPFS_LrnS7_End = 279;
    const OPFS_LrnS7_Edit = 280;
    const OPFS_LrnS7_Del = 281;
    const OPFS_LrnS7_Cls = 282;
    const OPFS_LrnOpc_Start = 283;
    const OPFS_LrnOpc_End = 284;
    const OPFS_LrnOpc_Edit = 285;
    const OPFS_LrnOpc_Del = 286;
    const OPFS_LrnOpc_Cls = 287;
    const OPFS_LogAll_List = 288;
    const OPFS_LogAll_Query = 289;
    const OPFS_LogAll_Cls = 290;
    const OPFS_LogAll_Del = 291;
    const OPFS_LogAll_Export = 292;
    const OPFS_LogRuleMac_List = 293;
    const OPFS_LogRuleMac_Query = 294;
    const OPFS_LogRuleMac_Cls = 295;
    const OPFS_LogRuleMac_Del = 296;
    const OPFS_LogRuleMac_Export = 297;
    const OPFS_LogRuleIp_List = 298;
    const OPFS_LogRuleIp_Query = 299;
    const OPFS_LogRuleIp_Cls = 300;
    const OPFS_LogRuleIp_Del = 301;
    const OPFS_LogRuleIp_Export = 302;
    const OPFS_LogRuleSz_List = 303;
    const OPFS_LogRuleSz_Query = 304;
    const OPFS_LogRuleSz_Cls = 305;
    const OPFS_LogRuleSz_Del = 306;
    const OPFS_LogRuleSz_Export = 307;
    const OPFS_LogRuleTcp_List = 308;
    const OPFS_LogRuleTcp_Query = 309;
    const OPFS_LogRuleTcp_Cls = 310;
    const OPFS_LogRuleTcp_Del = 311;
    const OPFS_LogRuleTcp_Export = 312;
    const OPFS_LogRuleUdp_List = 313;
    const OPFS_LogRuleUdp_Query = 314;
    const OPFS_LogRuleUdp_Cls = 315;
    const OPFS_LogRuleUdp_Del = 316;
    const OPFS_LogRuleUdp_Export = 317;
    const OPFS_LogRuleIndWl_List = 318;
    const OPFS_LogRuleIndWl_Query = 319;
    const OPFS_LogRuleIndWl_Cls = 320;
    const OPFS_LogRuleIndWl_Del = 321;
    const OPFS_LogRuleIndWl_Export = 322;
    const OPFS_LogRuleIndBl_List = 323;
    const OPFS_LogRuleIndBl_Query = 324;
    const OPFS_LogRuleIndBl_Cls = 325;
    const OPFS_LogRuleIndBl_Del = 326;
    const OPFS_LogRuleIndBl_Export = 327;
    const OPFS_LogRuleIndEx_List = 328;
    const OPFS_LogRuleIndEx_Query = 329;
    const OPFS_LogRuleIndEx_Cls = 330;
    const OPFS_LogRuleIndEx_Del = 331;
    const OPFS_LogRuleIndEx_Export = 332;
    const OPFS_LogArp_List = 333;
    const OPFS_LogArp_Query = 334;
    const OPFS_LogArp_Cls = 335;
    const OPFS_LogArp_Del = 336;
    const OPFS_LogArp_Export = 337;
    const OPFS_LogAttack_List = 338;
    const OPFS_LogAttack_Query = 339;
    const OPFS_LogAttack_Cls = 340;
    const OPFS_LogAttack_Del = 341;
    const OPFS_LogAttack_Export = 342;
    const OPFS_LogRun_List = 343;
    const OPFS_LogRun_Query = 344;
    const OPFS_LogRun_Cls = 345;
    const OPFS_LogRun_Del = 346;
    const OPFS_LogRun_Export = 347;
    const OPFS_LogSys_List = 348;
    const OPFS_LogSys_Query = 349;
    const OPFS_LogSys_Cls = 350;
    const OPFS_LogSys_Del = 351;
    const OPFS_LogSys_Export = 352;
    const OPFS_Conf_Func = 353;
    const OPFS_Conf_Warnlevel = 354;
    const OPFS_Conf_AlarmEmail = 355;
}

function FFS_Connect_Ok($host, $content)
{
    $opfs = OPFS::OPFS_Connect_Ok;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_Connect_Err($host, $content)
{
    $opfs = OPFS::OPFS_Connect_Err;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_Monitor_Ok($host, $content)
{
    $opfs = OPFS::OPFS_Monitor_Ok;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_Manage_Info($host, $content)
{
    $opfs = OPFS::OPFS_Manage_Info;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_Manage_Query($host, $content)
{
    $opfs = OPFS::OPFS_Manage_Query;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_Manage_ModeSet($host, $content)
{
    $opfs = OPFS::OPFS_Manage_ModeSet;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_Manage_Edit($host, $content)
{
    $opfs = OPFS::OPFS_Manage_Edit;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_Manage_Del($host, $content)
{
    $opfs = OPFS::OPFS_Manage_Del;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_Group_List($host, $content)
{
    $opfs = OPFS::OPFS_Group_List;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_Group_Add($host, $content)
{
    $opfs = OPFS::OPFS_Group_Add;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_Group_Edit($host, $content)
{
    $opfs = OPFS::OPFS_Group_Edit;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_Group_Del($host, $content)
{
    $opfs = OPFS::OPFS_Group_Del;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

/**
 *  基本规则管理--ARP规则--事件：刷新 / 点指定页数
 *
 * @param $host
 * @param $content array {["beginIndex"]起始索引(从0开始),["number"]数量}
 */
function FFS_RuleArp_List($host, $content)
{
    $opfs = OPFS::OPFS_RuleArp_List;
    //TODO host定义
    $beginIndex = $content["beginIndex"];//起始索引(从0开始)
    $number = $content["number"];//数量
    $contents = pack('S1L2', $opfs, $beginIndex, $number);
    send_fnc($host, $contents);
}

/**
 * 基本规则管理--ARP规则--事件：点“添加”
 *
 * @param $host
 * @param $content array {["IP"]IP,{array([0],[1],[2],[3])},["MAC"]MAC,array([0],[1],[2],[3],[4],[5])十六进制标注}
 */
function FFS_RuleArp_Add($host, $content)
{
    $opfs = OPFS::OPFS_RuleArp_Add;
    //TODO ip地址格式 short,short,short,short
    $IP = $content["IP"];//IP
    $MAC = $content["MAC"];//MAC
    $contents = pack('S1C4C4', $opfs, $IP[0], $IP[1], $IP[2], $IP[3],
        hexdec($MAC[0]),hexdec($MAC[1]),hexdec($MAC[2]),hexdec($MAC[3]),hexdec($MAC[4]),hexdec($MAC[5]));
    send_fnc($host, $contents);
}

/**
 * 基本规则管理--ARP规则--事件：点“激活全部”
 *
 * @param $host
 * @param $content null
 */
function FFS_RuleArp_Enable($host, $content)
{
    $opfs = OPFS::OPFS_RuleArp_Enable;
    $contents = pack('S1', $opfs);
    send_fnc($host, $contents);
}

/**
 * 基本规则管理--ARP规则--事件：点“禁用全部”
 *
 * @param $host
 * @param $content null
 *
 */
function FFS_RuleArp_Disable($host, $content)
{
    $opfs = OPFS::OPFS_RuleArp_Disable;
    $contents = pack('S1', $opfs);
    send_fnc($host, $contents);
}

/**
 * 本规则管理--ARP规则--事件：点“全部删除”
 *
 * @param $host
 * @param $content null
 */
function FFS_RuleArp_Cls($host, $content)
{
    $opfs = OPFS::OPFS_RuleArp_Cls;
    $contents = pack('S1', $opfs);
    send_fnc($host, $contents);
}

/**
 * 本规则管理--ARP规则--事件：点“编辑”
 *
 * @param $host
 * @param $content array
 * <pre>
 * fromIP => 源IP地址 array([0],[1],[2],[3])
 * newIP => 新IP地址 array([0],[1],[2],[3])
 * MAC => MAC地址
 * </pre>
 */
function FFS_RuleArp_Edit($host, $content)
{
    $opfs = OPFS::OPFS_RuleArp_Edit;
    $fromIP = $content["fromIP"];
    $newIP = $content["newIP"];
    $MAC = $content["MAC"];//todo mac解析错误
    $contents = pack('S1C4C4a6', $opfs,
        $fromIP[0], $fromIP[1], $fromIP[2], $fromIP[3],
        $newIP[0], $newIP[1], $newIP[2], $newIP[3],
        $MAC);
    send_fnc($host, $contents);
}

/**
 *本规则管理--ARP规则--事件：点“删除”
 *
 * @param $host
 * @param $content array
 * <pre>
 * IP => array([0],[1],[2],[3])
 * </pre>
 *
 */
function FFS_RuleArp_Del($host, $content)
{
    $opfs = OPFS::OPFS_RuleArp_Del;
    $ip = $content["IP"];
    $contents = pack('S1C4', $opfs, $ip[0], $ip[1], $ip[2], $ip[3]);
    send_fnc($host, $contents);
}

/**
 * 基本规则管理--MAC黑名单--事件：刷新 / 点指定页数
 *
 * @param $host
 * @param $content array
 * <pre>
 * beginIndex => 起始索引(从0开始)
 * number => 数量
 * </pre>
 */
function FFS_RuleMac_List($host, $content)
{
    $opfs = OPFS::OPFS_RuleMac_List;
    $beginIndex = $content["beginIndex"];//起始索引(从0开始)
    $number = $content["number"];//数量
    $contents = pack('S1L1L1', $opfs, $beginIndex, $number);
    send_fnc($host, $contents);
}

/**
 * 基本规则管理--MAC黑名单--事件：点“添加”
 *
 * @param $host
 * @param $content array
 * <pre>
 * MAC => MAC地址
 * </pre>
 */
function FFS_RuleMac_Add($host, $content)
{
    $opfs = OPFS::OPFS_RuleMac_Add;
    $MAC = $content["MAC"];
    $contents = pack('S1a6', $opfs, $MAC);
    send_fnc($host, $contents);
}

/**
 * 基本规则管理--MAC黑名单--事件：点“全部删除”
 *
 * @param $host
 * @param $content null
 */
function FFS_RuleMac_Cls($host, $content)
{
    $opfs = OPFS::OPFS_RuleMac_Cls;
    $contents = pack('S1', $opfs);
    send_fnc($host, $contents);
}

/**
 * 基本规则管理--MAC黑名单--事件：点“激活全部”
 *
 * @param $host
 * @param $content null
 */
function FFS_RuleMac_Enable($host, $content)
{
    $opfs = OPFS::OPFS_RuleMac_Enable;
    $contents = pack('S1', $opfs);
    send_fnc($host, $contents);
}

/**
 * 基本规则管理--MAC黑名单--事件：点“禁用全部”
 *
 * @param $host
 * @param $content
 */
function FFS_RuleMac_Disable($host, $content)
{
    $opfs = OPFS::OPFS_RuleMac_Disable;
    $contents = pack('S1', $opfs);
    send_fnc($host, $contents);
}

/**
 * 基本规则管理--MAC黑名单--事件：点“编辑”
 *
 * @param $host
 * @param $content array
 * <pre>
 * oldMAC => 旧MAC
 * newMAC => 新MAC
 * </pre>
 */
function FFS_RuleMac_Edit($host, $content)
{
    $opfs = OPFS::OPFS_RuleMac_Edit;
    $oldMAC = $content["oldMAC"];//旧MAC
    $newMAC = $content["newMAC"];//新MAC
    $contents = pack('S1a6a6', $opfs, $oldMAC, $newMAC);
    send_fnc($host, $contents);
}

/**
 * 基本规则管理--MAC黑名单--事件：点“删除”
 *
 * @param $host
 * @param $content array
 * <pre>
 * MAC => MAC地址
 * </pre>
 */
function FFS_RuleMac_Del($host, $content)
{
    $opfs = OPFS::OPFS_RuleMac_Del;
    $MAC = $content["MAC"];//MAC地址
    $content = pack('S1a6', $opfs, $MAC);
    send_fnc($host, $content);
}

/**
 * 基本规则管理--IP黑名单--事件：刷新 / 点指定页数
 *
 * @param $host
 * @param $content array
 * <pre>
 * beginIndex => 起始索引(从0开始)
 * number => 数量
 * </pre>
 */
function FFS_RuleIpBl_List($host, $content)
{
    $opfs = OPFS::OPFS_RuleIpBl_List;
    $beginIndex = $content["beginIndex"];//起始索引(从0开始)
    $number = $content["number"];//数量
    $contents = pack('S1L1L1', $opfs, $beginIndex, $number);
    send_fnc($host, $contents);
}

/**
 * 基本规则管理--IP黑名单--事件：点“添加”
 *
 * @param $host
 * @param $content array
 * <pre>
 * IP => IP地址 array([0],[1],[2],[3])
 * </pre>
 */
function FFS_RuleIpBl_Add($host, $content)
{
    $opfs = OPFS::OPFS_RuleIpBl_Add;
    $ip = $content["IP"];
    $contents = pack('S1C4', $opfs, $ip[0], $ip[1], $ip[2], $ip[3]);
    send_fnc($host, $contents);
}

/**
 * 基本规则管理--IP黑名单--事件：点“全部删除”
 *
 * @param $host
 * @param $content null
 */
function FFS_RuleIpBl_Cls($host, $content)
{
    $opfs = OPFS::OPFS_RuleIpBl_Cls;
    $contents = pack('S1', $opfs);
    send_fnc($host, $contents);
}

/**
 * 基本规则管理--IP黑名单--事件：点“激活全部”
 *
 * @param $host
 * @param $content
 */
function FFS_RuleIpBl_Enable($host, $content)
{
    $opfs = OPFS::OPFS_RuleIpBl_Enable;
    $contents = pack('S1', $opfs);
    send_fnc($host, $contents);
}

/**
 * 基本规则管理--IP黑名单--事件：点“禁用全部”
 *
 * @param $host
 * @param $content
 */
function FFS_RuleIpBl_Disable($host, $content)
{
    $opfs = OPFS::OPFS_RuleIpBl_Disable;
    $contents = pack('S1', $opfs);
    send_fnc($host, $contents);
}

/**
 * 基本规则管理--IP黑名单--事件：点“编辑”
 *
 * @param $host
 * @param $content
 */
function FFS_RuleIpBl_Edit($host, $content)
{
    $opfs = OPFS::OPFS_RuleIpBl_Edit;
    $contents = pack('S1', $opfs);
    send_fnc($host, $contents);
}

/**
 * 基本规则管理--IP黑名单--事件：点“删除”
 *
 * @param $host
 * @param $content array
 * <pre>
 * IP => IP地址 array([0][1][2][3])
 * </pre>
 */
function FFS_RuleIpBl_Del($host, $content)
{
    $opfs = OPFS::OPFS_RuleIpBl_Del;
    $ip = $content["IP"];
    $contents = pack('S1C4', $opfs, $ip[0], $ip[1], $ip[2], $ip[3]);
    send_fnc($host, $contents);
}

/**
 * 基本规则管理--IP用户自定义--事件：刷新 / 点指定页数
 *
 * @param $host
 * @param $content array
 * <pre>
 * beginIndex => 起始索引(从0开始)
 * number => 数量
 * </pre>
 */
function FFS_RuleIpAu_List($host, $content)
{
    $opfs = OPFS::OPFS_RuleIpAu_List;
    $beginIndex = $content["beginIndex"];//起始索引(从0开始)
    $number = $content["number"];//数量
    $contents = pack('S1L1L1', $opfs, $beginIndex, $number);
    send_fnc($host, $contents);
}

/**
 * 基本规则管理--IP用户自定义--事件：点“添加”
 *
 * @param $host
 * @param $content array
 * <pre>
 * IP => IP地址 array([0],[1],[2],[3])
 * alertLevel => 告警级别
 * </pre>
 */
function FFS_RuleIpAu_Add($host, $content)
{
    $opfs = OPFS::OPFS_RuleIpAu_Add;
    $ip = $content["IP"];//IP地址
    $alertLevel = $content["alertLevel"];//告警级别
    $contents = pack('S1C4C1', $opfs, $ip[0], $ip[1], $ip[2], $ip[3], $alertLevel);
    send_fnc($host, $contents);
}

/**
 * 基本规则管理--IP用户自定义--事件：点“全部删除”
 *
 * @param $host
 * @param $content null
 */
function FFS_RuleIpAu_Cls($host, $content)
{
    $opfs = OPFS::OPFS_RuleIpAu_Cls;
    $contents = pack('S1', $opfs);
    send_fnc($host, $contents);
}

/**
 * 基本规则管理--IP用户自定义--事件：点“编辑”
 *
 * @param $host
 * @param $content array
 * <pre>
 * oldIP => array([0],[1],[2],[3]) 旧IP
 * newIP => array([0],[1],[2],[3]) 新IP
 * alertLevel => 告警级别
 * </pre>
 */
function FFS_RuleIpAu_Edit($host, $content)
{
    $opfs = OPFS::OPFS_RuleIpAu_Edit;
    $oldip = $content["oldIP"];//旧IP
    $newip = $content["newIP"];//新IP
    $alertLevel = $content["alertLevel"];//告警级别
    $contents = pack('S1C4C4C1', $opfs,
        $oldip[0], $oldip[1], $oldip[2], $oldip[3],
        $newip[0], $newip[1], $newip[2], $newip[3],
        $alertLevel);
    send_fnc($host, $contents);
}

/**
 * 基本规则管理--IP用户自定义--事件：点“删除”
 *
 * @param $host
 * @param $content array
 * <pre>
 * IP => array([0],[1],[2],[3]) IP
 * </pre>
 */
function FFS_RuleIpAu_Del($host, $content)
{
    $opfs = OPFS::OPFS_RuleIpAu_Del;
    $ip = $content["IP"];
    $contents = pack('S1C4', $opfs, $ip[0], $ip[1], $ip[2], $ip[3]);
    send_fnc($host, $contents);
}

/**
 * 基本规则管理--优先级配置--事件：刷新 / 点指定页数
 *
 * @param $host
 * @param $content array
 * <pre>
 * beginIndex => 起始索引(从0开始)
 * number => 数量
 * </pre>
 */
function FFS_RuleSzPri_List($host, $content)
{
    $opfs = OPFS::OPFS_RuleSzPri_List;
    $beginIndex = $content["beginIndex"];//起始索引(从0开始)
    $number = $content["number"];//数量
    $contents = pack('S1L1L1', $opfs, $beginIndex, $number);
    send_fnc($host, $contents);
}

/**
 * 基本规则管理--优先级配置--事件：点“添加”
 *
 * @param $host
 * @param $content array
 * <pre>
 * name => 名称
 * priority => 优先级ID
 * </pre>
 */
function FFS_RuleSzPri_Add($host, $content)
{
    $opfs = OPFS::OPFS_RuleSzPri_Add;
    $name = $content["name"];//名称
    $priority = $content["priority"];//优先级ID
    $nameLength = strlen($name);//名称长度
    $contents = pack('S1S1a' . $nameLength . 'C1', $opfs, $nameLength, $name, $priority);
    send_fnc($host, $contents);
}

/**
 * 基本规则管理--优先级配置--事件：点“全部删除”
 *
 * @param $host
 * @param $content null
 */
function FFS_RuleSzPri_Cls($host, $content)
{
    $opfs = OPFS::OPFS_RuleSzPri_Cls;
    $contents = pack('S1', $opfs);
    send_fnc($host, $contents);
}

/**
 * 基本规则管理--优先级配置--事件：点“编辑”
 *
 * @param $host
 * @param $content array
 * <pre>
 * dataBaseID => 数据库ID
 * name => 名称
 * priority => 优先级ID
 * </pre>
 */
function FFS_RuleSzPri_Edit($host, $content)
{
    $opfs = OPFS::OPFS_RuleSzPri_Edit;
    $dataBaseID = $content["dataBaseID"];//数据库ID
    $name = $content["name"];//名称
    $priority = $content["priority"];//优先级ID
    $nameLength = strlen($name);//名称长度
    $contents = pack('S1L1S1a' . $nameLength . 'C1', $opfs, $dataBaseID, $nameLength, $name, $priority);
    send_fnc($host, $contents);
}

/**
 * 基本规则管理--优先级配置--事件：点“删除”
 *
 * @param $host
 * @param $content array
 * <pre>
 * dataBaseID => 数据库ID
 * </pre>
 */
function FFS_RuleSzPri_Del($host, $content)
{
    $opfs = OPFS::OPFS_RuleSzPri_Del;
    $dataBaseID = $content["dataBaseID"];//数据库ID
    $contents = pack('S1L1', $opfs, $dataBaseID);
    send_fnc($host, $contents);
}

/**
 * 基本规则管理--MAC安全域--事件：刷新 / 点指定页数
 *
 * @param $host
 * @param $content array
 * <pre>
 * beginIndex => 起始索引(从0开始)
 * number => 数量
 * </pre>
 */
function FFS_RuleSzMac_List($host, $content)
{
    $opfs = OPFS::OPFS_RuleSzMac_List;
    $beginIndex = $content["beginIndex"];//起始索引(从0开始)
    $number = $content["number"];//数量
    $contents = pack('S1L1L1', $opfs, $beginIndex, $number);
    send_fnc($host, $contents);
}

/**
 * 基本规则管理--MAC安全域--事件：点“添加”
 *
 * @param $host
 * @param $content array
 * <pre>
 * MAC => MAC
 * priority => 优先级ID
 * </pre>
 */
function FFS_RuleSzMac_Add($host, $content)
{
    $opfs = OPFS::OPFS_RuleSzMac_Add;
    $MAC = $content["MAC"];//名称
    $priority = $content["priority"];//优先级ID
    $contents = pack('S1a6C1', $opfs, $MAC, $priority);
    send_fnc($host, $contents);
}

/**
 * 基本规则管理--MAC安全域--事件：点“全部删除”
 *
 * @param $host
 * @param $content null
 */
function FFS_RuleSzMac_Cls($host, $content)
{
    $opfs = OPFS::OPFS_RuleSzMac_Cls;
    $contents = pack('S1', $opfs);
    send_fnc($host, $contents);
}

/**
 * 基本规则管理--MAC安全域--事件：点“激活全部”
 *
 * @param $host
 * @param $content null
 */
function FFS_RuleSzMac_Enable($host, $content)
{
    $opfs = OPFS::OPFS_RuleSzMac_Enable;
    $contents = pack('S1', $opfs);
    send_fnc($host, $contents);
}

/**
 * 基本规则管理--MAC安全域--事件：点“禁用全部”
 *
 * @param $host
 * @param $content
 */
function FFS_RuleSzMac_Disable($host, $content)
{
    $opfs = OPFS::OPFS_RuleSzMac_Disable;
    $contents = pack('S1', $opfs);
    send_fnc($host, $contents);
}

/**
 * 基本规则管理--MAC安全域--事件：点“编辑”
 *
 * @param $host
 * @param $content array
 * <pre>
 * dataBaseID => 旧数据库ID
 * MAC => MAC
 * priority => 优先级ID
 * </pre>
 */
function FFS_RuleSzMac_Edit($host, $content)
{
    $opfs = OPFS::OPFS_RuleSzMac_Edit;
    $dataBaseID = $content["dataBaseID"];//旧数据库ID
    $MAC = $content["MAC"];//MAC
    $priority = $content["priority"];//优先级ID
    $contents = pack('S1L1a6C1', $opfs, $dataBaseID, $MAC, $priority);
    send_fnc($host, $contents);
}

/**
 * 基本规则管理--MAC安全域--事件：点“删除”
 *
 * @param $host
 * @param $content array
 * <pre>
 * dataBaseID => 数据库ID
 * </pre>
 */
function FFS_RuleSzMac_Del($host, $content)
{
    $opfs = OPFS::OPFS_RuleSzMac_Del;
    $dataBaseID = $content["dataBaseID"];//数据库ID
    $contents = pack('S1L1', $opfs, $dataBaseID);
    send_fnc($host, $contents);
}

/**
 * 基本规则管理--IP安全域--事件：刷新 / 点指定页数
 *
 * @param $host
 * @param $content array
 * <pre>
 * beginIndex => 起始索引(从0开始)
 * number => 数量
 * </pre>
 */
function FFS_RuleSzIp_List($host, $content)
{
    $opfs = OPFS::OPFS_RuleSzIp_List;
    $beginIndex = $content["beginIndex"];//起始索引(从0开始)
    $number = $content["number"];//数量
    $contents = pack('S1L1L1', $opfs, $beginIndex, $number);
    send_fnc($host, $contents);
}

/**
 * 基本规则管理--IP安全域--事件：点“添加”
 *
 * @param $host
 * @param $content array
 * <pre>
 * IP => IP array([0][1][2][3])
 * mask => 掩码 array([0][1][2][3])
 * priority => 优先级ID
 * </pre>
 */
function FFS_RuleSzIp_Add($host, $content)
{
    $opfs = OPFS::OPFS_RuleSzIp_Add;
    $ip = $content["IP"];//IP
    $mask = $content["mask"];//掩码
    $priority = $content["priority"];//优先级ID
    $contents = pack('S1C4C4C1', $opfs,
        $ip[0], $ip[1], $ip[2], $ip[3],
        $mask[0], $mask[1], $mask[2], $mask[3],
        $priority);
    send_fnc($host, $contents);
}

/**
 * 基本规则管理--IP安全域--事件：点“全部删除”
 *
 * @param $host
 * @param $content null
 */
function FFS_RuleSzIp_CLs($host, $content)
{
    $opfs = OPFS::OPFS_RuleSzIp_Cls;
    $contents = pack('S1', $opfs);
    send_fnc($host, $contents);
}

/**
 * 基本规则管理--IP安全域--事件：点“激活全部”
 *
 * @param $host
 * @param $content null
 */
function FFS_RuleSzIp_Enable($host, $content)
{
    $opfs = OPFS::OPFS_RuleSzIp_Enable;
    $contents = pack('S1', $opfs);
    send_fnc($host, $contents);
}

/**
 * 基本规则管理--IP安全域--事件：点“禁用全部”
 *
 * @param $host
 * @param $content null
 */
function FFS_RuleSzIp_Disable($host, $content)
{
    $opfs = OPFS::OPFS_RuleSzIp_Disable;
    $contents = pack('S1', $opfs);
    send_fnc($host, $contents);
}

/**
 * 基本规则管理--IP安全域--事件：点“编辑”
 *
 * @param $host
 * @param $content array
 * <pre>
 * dataBaseID => 旧数据库ID
 * IP => IP array([0][1][2][3])
 * mask => 掩码 array([0][1][2][3])
 * priority => 优先级ID
 * </pre>
 */
function FFS_RuleSzIp_Edit($host, $content)
{
    $opfs = OPFS::OPFS_RuleSzIp_Edit;
    $dataBaseID = $content["dataBaseID"];//旧数据库ID
    $ip = $content["IP"];//IP
    $mask = $content["mask"];//掩码
    $priority = $content["priority"];//优先级ID
    $contents = pack('S1L1C4C4C1', $opfs,
        $dataBaseID,
        $ip[0], $ip[1], $ip[2], $ip[3],
        $mask[0], $mask[1], $mask[2], $mask[3],
        $priority);
    send_fnc($host, $contents);
}

/**
 * 基本规则管理--IP安全域--事件：点“删除”
 *
 * @param $host
 * @param $content arrar
 * <pre>
 * dataBaseID => 数据库ID
 * </pre>
 */
function FFS_RuleSzIp_Del($host, $content)
{
    $opfs = OPFS::OPFS_RuleSzIp_Del;
    $dataBaseID = $content["dataBaseID"];
    $contents = pack('S1L1', $opfs, $dataBaseID);
    send_fnc($host, $contents);
}

/**
 * 基本规则管理--传输层安全域--事件：刷新 / 点指定页数
 *
 * @param $host
 * @param $content array
 * <pre>
 * beginIndex => 起始索引(从0开始)
 * number => 数量
 * </pre>
 */
function FFS_RuleSzTrans_List($host, $content)
{
    $opfs = OPFS::OPFS_RuleSzTrans_List;
    $beginIndex = $content["beginIndex"];//起始索引(从0开始)
    $number = $content["number"];//数量
    $contents = pack('S1L1L1', $opfs, $beginIndex, $number);
    send_fnc($host, $contents);
}

/**
 * 基本规则管理--传输层安全域--事件：点“添加”
 *
 * @param $host
 * @param $content array
 * <pre>
 * IP => IP地址 array([0][1][2][3])
 * mask => 掩码 array([0][1][2][3])
 * beginPort => 起始端口
 * targetPort => 目标端口
 * priority => 优先级
 * </pre>
 */
function FFS_RuleSzTrans_Add($host, $content)
{
    $ip = $content["IP"];//IP
    $mask = $content["mask"];//掩码
    $beginPort = $content["beginPort"];//起始端口
    $targetPort = $content["targetPort"];//目标端口
    $priority = $content["priority"];//优先级
    $opfs = OPFS::OPFS_RuleSzTrans_Add;
    $contents = pack('S1C4C4S1S1C1', $opfs,
        $ip[0], $ip[1], $ip[2], $ip[3],
        $mask[0], $mask[1], $mask[2], $mask[3],
        $beginPort, $targetPort, $priority
    );
    send_fnc($host, $contents);
}

/**
 * 基本规则管理--传输层安全域--事件：点“全部删除”
 *
 * @param $host
 * @param $content null
 */
function FFS_RuleSzTrans_Cls($host, $content)
{
    $opfs = OPFS::OPFS_RuleSzTrans_Cls;
    $content = pack('S1', $opfs);
    send_fnc($host, $content);
}

/**
 * 基本规则管理--传输层安全域--事件：点“激活全部”
 *
 * @param $host
 * @param $content null
 */
function FFS_RuleSzTrans_Enable($host, $content)
{
    $opfs = OPFS::OPFS_RuleSzTrans_Enable;
    $content = pack('S1', $opfs);
    send_fnc($host, $content);
}

/**
 * 基本规则管理--传输层安全域--事件：点“禁用全部”
 *
 * @param $host
 * @param $content null
 */
function FFS_RuleSzTrans_Disable($host, $content)
{
    $opfs = OPFS::OPFS_RuleSzTrans_Disable;
    $content = pack('S1', $opfs);
    send_fnc($host, $content);
}

/**
 * 基本规则管理--传输层安全域--事件：点“编辑”
 *
 * @param $host
 * @param $content array
 * <pre>
 * dataBaseID => 旧数据库ID
 * IP => IP地址 array([0][1][2][3])
 * mask => 掩码 array([0][1][2][3])
 * beginPort => 起始端口
 * targetPort => 目标端口
 * priority => 优先级
 * </pre>
 */
function FFS_RuleSzTrans_Edit($host, $content)
{
    $opfs = OPFS::OPFS_RuleSzTrans_Edit;
    $dataBaseID = $content["dataBaseID"];//旧数据库ID
    $ip = $content["IP"];//IP
    $mask = $content["mask"];//掩码
    $beginPort = $content["beginPort"];//起始端口
    $targetPort = $content["targetPort"];//目标端口
    $priority = $content["priority"];//优先级
    $contents = pack('S1C4C4S1S1C1', $opfs, $dataBaseID,
        $ip[0], $ip[1], $ip[2], $ip[3],
        $mask[0], $mask[1], $mask[2], $mask[3],
        $beginPort, $targetPort, $priority
    );
    send_fnc($host, $contents);
}

/**
 * 基本规则管理--传输层安全域--事件：点“删除”
 *
 * @param $host
 * @param $content array
 * <pre>
 * dataBaseID => 数据库ID
 * </pre>
 */
function FFS_RuleSzTrans_Del($host, $content)
{
    $opfs = OPFS::OPFS_RuleSzTrans_Del;
    $dataBaseID = $content["dataBaseID"];//数据库ID
    $contents = pack('S1L1', $opfs, $dataBaseID);
    send_fnc($host, $contents);
}

/**
 * 基本规则管理--TCP黑名单--事件：刷新 / 点指定页数
 *
 * @param $host
 * @param $content array
 * <pre>
 * beginIndex => 起始索引(从0开始)
 * number => 数量
 * </pre>
 */
function FFS_RuleTcpBl_List($host, $content)
{
    $opfs = OPFS::OPFS_RuleTcpBl_List;
    $beginIndex = $content["beginIndex"];//起始索引(从0开始)
    $number = $content["number"];//数量
    $contents = pack('S1L1L1', $opfs, $beginIndex, $number);
    send_fnc($host, $contents);
}

/**
 * 基本规则管理--TCP黑名单--事件：点“添加”
 *
 * @param $host
 * @param $content array
 * <pre>
 * beginTime => 起始时间 array(["h"]时["m"]分)
 * endTime => 结束时间 array(["h"]时["m"]分)
 * sourceIP => IP源 array([0][1][2][3])
 * sourceMask => 源IP掩码 array([0][1][2][3])
 * targetIP => 目的IP array([0][1][2][3])
 * targetMask => 目的IP掩码 array([0][1][2][3])
 * sourcePortBegin => 源端口起始
 * sourcePortEnd => 源端口结束
 * targetPortBegin => 目的端口起始
 * targetPortEnd => 目的端口结束
 * </pre>
 */
function FFS_RuleTcpBl_Add($host, $content)
{
    $opfs = OPFS::OPFS_RuleTcpBl_Add;
    $beginTime=$content["beginTime"];//起始时间
    $endTime=$content["endTime"];//结束时间
    $sourceIP=$content["sourceIP"];//IP源
    $sourceMask=$content["sourceMask"];//源IP掩码
    $targetIP=$content["targetIP"];//目的IP
    $targetMask=$content["targetMask"];//目的IP掩码
    $sourcePortBegin=$content["sourcePortBegin"];//源端口起始
    $sourcePortEnd=$content["sourcePortEnd"];//源端口结束
    $targetPortBegin=$content["targetPortBegin"];//目的端口起始
    $targetPortEnd=$content["targetPortEnd"];//目的端口结束

    $contents = pack('S1C2C2C4C4C4C4S4', $opfs,
        $beginTime["h"],$beginTime["m"],
        $endTime["h"],$endTime["m"],
        $sourceIP[0],$sourceIP[1],$sourceIP[2],$sourceIP[3],
        $sourceMask[0],$sourceMask[1],$sourceMask[2],$sourceMask[3],
        $targetIP[0],$targetIP[1],$targetIP[2],$targetIP[3],
        $targetMask[0],$targetMask[1],$targetMask[2],$targetMask[3],
        $sourcePortBegin,$sourcePortEnd,$targetPortBegin,$targetPortEnd);
    send_fnc($host, $contents);
}
/**
 * 基本规则管理--TCP黑名单--事件：点“全部删除”
 *
 * @param $host
 * @param $content null
 *
 */
function FFS_RuleTcpBl_Cls($host, $content)
{
    $opfs = OPFS::OPFS_RuleTcpBl_Cls;
    $contents = pack('S1', $opfs);
    send_fnc($host, $contents);
}
/**
 * 基本规则管理--TCP黑名单--事件：点“激活全部”
 *
 * @param $host
 * @param $content null
 *
 */
function FFS_RuleTcpBl_Enable($host, $content)
{
    $opfs = OPFS::OPFS_RuleTcpBl_Enable;
    $contents = pack('S1', $opfs);
    send_fnc($host, $contents);
}
/**
 * 基本规则管理--TCP黑名单--点“禁用全部”
 *
 * @param $host
 * @param $content null
 *
 */
function FFS_RuleTcpBl_Disable($host, $content)
{
    $opfs = OPFS::OPFS_RuleTcpBl_Disable;
    $contents = pack('S1', $opfs);
    send_fnc($host, $contents);
}

/**
 * 基本规则管理--TCP黑名单--事件：点“编辑”
 *
 * @param $host
 * @param $content array
 * <pre>
 * dataBaseID => 旧数据库ID
 * beginTime => 起始时间 array(["h"]时["m"]分)
 * endTime => 结束时间 array(["h"]时["m"]分)
 * sourceIP => IP源 array([0][1][2][3])
 * sourceMask => 源IP掩码 array([0][1][2][3])
 * targetIP => 目的IP array([0][1][2][3])
 * targetMask => 目的IP掩码 array([0][1][2][3])
 * sourcePortBegin => 源端口起始
 * sourcePortEnd => 源端口结束
 * targetPortBegin => 目的端口起始
 * targetPortEnd => 目的端口结束
 * </pre>
 */
function FFS_RuleTcpBl_Edit($host, $content)
{
    $opfs = OPFS::OPFS_RuleTcpBl_Edit;
    $dataBaseID=$content["dataBaseID"];//旧数据库ID
    $beginTime=$content["beginTime"];//起始时间
    $endTime=$content["endTime"];//结束时间
    $sourceIP=$content["sourceIP"];//IP源
    $sourceMask=$content["sourceMask"];//源IP掩码
    $targetIP=$content["targetIP"];//目的IP
    $targetMask=$content["targetMask"];//目的IP掩码
    $sourcePortBegin=$content["sourcePortBegin"];//源端口起始
    $sourcePortEnd=$content["sourcePortEnd"];//源端口结束
    $targetPortBegin=$content["targetPortBegin"];//目的端口起始
    $targetPortEnd=$content["targetPortEnd"];//目的端口结束

    $contents = pack('S1L1C2C2C4C4C4C4S4', $opfs,$dataBaseID,
        $beginTime["h"],$beginTime["m"],
        $endTime["h"],$endTime["m"],
        $sourceIP[0],$sourceIP[1],$sourceIP[2],$sourceIP[3],
        $sourceMask[0],$sourceMask[1],$sourceMask[2],$sourceMask[3],
        $targetIP[0],$targetIP[1],$targetIP[2],$targetIP[3],
        $targetMask[0],$targetMask[1],$targetMask[2],$targetMask[3],
        $sourcePortBegin,$sourcePortEnd,$targetPortBegin,$targetPortEnd);
    send_fnc($host, $contents);
}
/**
 * 基本规则管理--TCP黑名单--事件：点“删除”
 *
 * @param $host
 * @param $content array
 * <pre>
 * dataBaseID => 数据库ID
 * </pre>
 */
function FFS_RuleTcpBl_Del($host, $content)
{
    $opfs = OPFS::OPFS_RuleTcpBl_Del;
    $dataBaseID=$content["dataBaseID"];//数据库ID
    $contents = pack('S1L1', $opfs,$dataBaseID);
    send_fnc($host, $contents);
}
/**
 * 基本规则管理--TCP黑名单--事件：点“导入”
 *
 * @param $host
 * @param $content null
 * TODO 导入
 */
function FFS_RuleTcpBl_Import($host, $content)
{
    $opfs = OPFS::OPFS_RuleTcpBl_Import;
    $content = pack('S1', $opfs);
    send_fnc($host, $content);
}
/**
 * 基本规则管理--TCP黑名单--事件：点“导出”
 *
 * @param $host
 * @param $content null
 * TODO 导出
 */
function FFS_RuleTcpBl_Export($host, $content)
{
    $opfs = OPFS::OPFS_RuleTcpBl_Export;
    $content = pack('S1', $opfs);
    send_fnc($host, $content);
}

/**
 * 基本规则管理--TCP白名单--事件：刷新 / 点指定页数
 *
 * @param $host
 * @param $content array
 * <pre>
 * beginIndex => 起始索引(从0开始)
 * number => 数量
 * </pre>
 */
function FFS_RuleTcpWl_List($host, $content)
{
    $opfs = OPFS::OPFS_RuleTcpWl_List;
    $beginIndex = $content["beginIndex"];//起始索引(从0开始)
    $number = $content["number"];//数量
    $contents = pack('S1L1L1', $opfs, $beginIndex, $number);
    send_fnc($host, $contents);
}

/**
 * 基本规则管理--TCP白名单--事件：点“添加”
 *
 * @param $host
 * @param $content array
 * <pre>
 * beginTime => 起始时间 array(["h"]时["m"]分)
 * endTime => 结束时间 array(["h"]时["m"]分)
 * sourceIP => IP源 array([0][1][2][3])
 * sourceMask => 源IP掩码 array([0][1][2][3])
 * targetIP => 目的IP array([0][1][2][3])
 * targetMask => 目的IP掩码 array([0][1][2][3])
 * sourcePortBegin => 源端口起始
 * sourcePortEnd => 源端口结束
 * targetPortBegin => 目的端口起始
 * targetPortEnd => 目的端口结束
 * </pre>
 */
function FFS_RuleTcpWl_Add($host, $content)
{
    $opfs = OPFS::OPFS_RuleTcpWl_Add;
    $beginTime=$content["beginTime"];//起始时间
    $endTime=$content["endTime"];//结束时间
    $sourceIP=$content["sourceIP"];//IP源
    $sourceMask=$content["sourceMask"];//源IP掩码
    $targetIP=$content["targetIP"];//目的IP
    $targetMask=$content["targetMask"];//目的IP掩码
    $sourcePortBegin=$content["sourcePortBegin"];//源端口起始
    $sourcePortEnd=$content["sourcePortEnd"];//源端口结束
    $targetPortBegin=$content["targetPortBegin"];//目的端口起始
    $targetPortEnd=$content["targetPortEnd"];//目的端口结束

    $contents = pack('S1C2C2C4C4C4C4S4', $opfs,
        $beginTime["h"],$beginTime["m"],
        $endTime["h"],$endTime["m"],
        $sourceIP[0],$sourceIP[1],$sourceIP[2],$sourceIP[3],
        $sourceMask[0],$sourceMask[1],$sourceMask[2],$sourceMask[3],
        $targetIP[0],$targetIP[1],$targetIP[2],$targetIP[3],
        $targetMask[0],$targetMask[1],$targetMask[2],$targetMask[3],
        $sourcePortBegin,$sourcePortEnd,$targetPortBegin,$targetPortEnd);
    send_fnc($host, $contents);
}
/**
 * 基本规则管理--TCP白名单--事件：点“全部删除”
 *
 * @param $host
 * @param $content null
 *
 */
function FFS_RuleTcpWl_Cls($host, $content)
{
    $opfs = OPFS::OPFS_RuleTcpWl_Cls;
    $contents = pack('S1', $opfs);
    send_fnc($host, $contents);
}
/**
 * 基本规则管理--TCP白名单--事件：点“激活全部”
 *
 * @param $host
 * @param $content null
 *
 */
function FFS_RuleTcpWl_Enable($host, $content)
{
    $opfs = OPFS::OPFS_RuleTcpWl_Enable;
    $contents = pack('S1', $opfs);
    send_fnc($host, $contents);
}
/**
 * 基本规则管理--TCP白名单--点“禁用全部”
 *
 * @param $host
 * @param $content null
 *
 */
function FFS_RuleTcpWl_Disable($host, $content)
{
    $opfs = OPFS::OPFS_RuleTcpWl_Disable;
    $contents = pack('S1', $opfs);
    send_fnc($host, $contents);
}

/**
 * 基本规则管理--TCP白名单--事件：点“编辑”
 *
 * @param $host
 * @param $content array
 * <pre>
 * dataBaseID => 旧数据库ID
 * beginTime => 起始时间 array(["h"]时["m"]分)
 * endTime => 结束时间 array(["h"]时["m"]分)
 * sourceIP => IP源 array([0][1][2][3])
 * sourceMask => 源IP掩码 array([0][1][2][3])
 * targetIP => 目的IP array([0][1][2][3])
 * targetMask => 目的IP掩码 array([0][1][2][3])
 * sourcePortBegin => 源端口起始
 * sourcePortEnd => 源端口结束
 * targetPortBegin => 目的端口起始
 * targetPortEnd => 目的端口结束
 * </pre>
 */
function FFS_RuleTcpWl_Edit($host, $content)
{
    $opfs = OPFS::OPFS_RuleTcpWl_Edit;
    $dataBaseID=$content["dataBaseID"];//旧数据库ID
    $beginTime=$content["beginTime"];//起始时间
    $endTime=$content["endTime"];//结束时间
    $sourceIP=$content["sourceIP"];//IP源
    $sourceMask=$content["sourceMask"];//源IP掩码
    $targetIP=$content["targetIP"];//目的IP
    $targetMask=$content["targetMask"];//目的IP掩码
    $sourcePortBegin=$content["sourcePortBegin"];//源端口起始
    $sourcePortEnd=$content["sourcePortEnd"];//源端口结束
    $targetPortBegin=$content["targetPortBegin"];//目的端口起始
    $targetPortEnd=$content["targetPortEnd"];//目的端口结束

    $contents = pack('S1L1C2C2C4C4C4C4S4', $opfs,$dataBaseID,
        $beginTime["h"],$beginTime["m"],
        $endTime["h"],$endTime["m"],
        $sourceIP[0],$sourceIP[1],$sourceIP[2],$sourceIP[3],
        $sourceMask[0],$sourceMask[1],$sourceMask[2],$sourceMask[3],
        $targetIP[0],$targetIP[1],$targetIP[2],$targetIP[3],
        $targetMask[0],$targetMask[1],$targetMask[2],$targetMask[3],
        $sourcePortBegin,$sourcePortEnd,$targetPortBegin,$targetPortEnd);
    send_fnc($host, $contents);
}
/**
 * 基本规则管理--TCP白名单--事件：点“删除”
 *
 * @param $host
 * @param $content array
 * <pre>
 * dataBaseID => 数据库ID
 * </pre>
 */
function FFS_RuleTcpWl_Del($host, $content)
{
    $opfs = OPFS::OPFS_RuleTcpWl_Del;
    $dataBaseID=$content["dataBaseID"];//数据库ID
    $contents = pack('S1L1', $opfs,$dataBaseID);
    send_fnc($host, $contents);
}


function FFS_RuleTcpWl_Import($host, $content)
{
    $opfs = OPFS::OPFS_RuleTcpWl_Import;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_RuleTcpWl_Export($host, $content)
{
    $opfs = OPFS::OPFS_RuleTcpWl_Export;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

/**
 * 基本规则管理--TCP无条件信任--事件：刷新 / 点指定页数
 *
 * @param $host
 * @param $content array
 * <pre>
 * beginIndex => 起始索引(从0开始)
 * number => 数量
 * </pre>
 */
function FFS_RuleTcpTrust_List($host, $content)
{
    $opfs = OPFS::OPFS_RuleTcpTrust_List;
    $beginIndex = $content["beginIndex"];//起始索引(从0开始)
    $number = $content["number"];//数量
    $contents = pack('S1L1L1', $opfs, $beginIndex, $number);
    send_fnc($host, $contents);
}

/**
 * 基本规则管理--TCP无条件信任--事件：点“添加”
 *
 * @param $host
 * @param $content array
 * <pre>
 * beginTime => 起始时间 array(["h"]时["m"]分)
 * endTime => 结束时间 array(["h"]时["m"]分)
 * sourceIP => IP源 array([0][1][2][3])
 * sourceMask => 源IP掩码 array([0][1][2][3])
 * targetIP => 目的IP array([0][1][2][3])
 * targetMask => 目的IP掩码 array([0][1][2][3])
 * sourcePortBegin => 源端口起始
 * sourcePortEnd => 源端口结束
 * targetPortBegin => 目的端口起始
 * targetPortEnd => 目的端口结束
 * </pre>
 */
function FFS_RuleTcpTrust_Add($host, $content)
{
    $opfs = OPFS::OPFS_RuleTcpTrust_Add;
    $beginTime=$content["beginTime"];//起始时间
    $endTime=$content["endTime"];//结束时间
    $sourceIP=$content["sourceIP"];//IP源
    $sourceMask=$content["sourceMask"];//源IP掩码
    $targetIP=$content["targetIP"];//目的IP
    $targetMask=$content["targetMask"];//目的IP掩码
    $sourcePortBegin=$content["sourcePortBegin"];//源端口起始
    $sourcePortEnd=$content["sourcePortEnd"];//源端口结束
    $targetPortBegin=$content["targetPortBegin"];//目的端口起始
    $targetPortEnd=$content["targetPortEnd"];//目的端口结束

    $contents = pack('S1C2C2C4C4C4C4S4', $opfs,
        $beginTime["h"],$beginTime["m"],
        $endTime["h"],$endTime["m"],
        $sourceIP[0],$sourceIP[1],$sourceIP[2],$sourceIP[3],
        $sourceMask[0],$sourceMask[1],$sourceMask[2],$sourceMask[3],
        $targetIP[0],$targetIP[1],$targetIP[2],$targetIP[3],
        $targetMask[0],$targetMask[1],$targetMask[2],$targetMask[3],
        $sourcePortBegin,$sourcePortEnd,$targetPortBegin,$targetPortEnd);
    send_fnc($host, $contents);
}
/**
 * 基本规则管理--TCP无条件信任--事件：点“全部删除”
 *
 * @param $host
 * @param $content null
 *
 */
function FFS_RuleTcpTrust_Cls($host, $content)
{
    $opfs = OPFS::OPFS_RuleTcpTrust_Cls;
    $contents = pack('S1', $opfs);
    send_fnc($host, $contents);
}

/**
 * 基本规则管理--TCP无条件信任--事件：点“编辑”
 *
 * @param $host
 * @param $content array
 * <pre>
 * dataBaseID => 旧数据库ID
 * beginTime => 起始时间 array(["h"]时["m"]分)
 * endTime => 结束时间 array(["h"]时["m"]分)
 * sourceIP => IP源 array([0][1][2][3])
 * sourceMask => 源IP掩码 array([0][1][2][3])
 * targetIP => 目的IP array([0][1][2][3])
 * targetMask => 目的IP掩码 array([0][1][2][3])
 * sourcePortBegin => 源端口起始
 * sourcePortEnd => 源端口结束
 * targetPortBegin => 目的端口起始
 * targetPortEnd => 目的端口结束
 * </pre>
 */
function FFS_RuleTcpTrust_Edit($host, $content)
{
    $opfs = OPFS::OPFS_RuleTcpTrust_Edit;
    $dataBaseID=$content["dataBaseID"];//旧数据库ID
    $beginTime=$content["beginTime"];//起始时间
    $endTime=$content["endTime"];//结束时间
    $sourceIP=$content["sourceIP"];//IP源
    $sourceMask=$content["sourceMask"];//源IP掩码
    $targetIP=$content["targetIP"];//目的IP
    $targetMask=$content["targetMask"];//目的IP掩码
    $sourcePortBegin=$content["sourcePortBegin"];//源端口起始
    $sourcePortEnd=$content["sourcePortEnd"];//源端口结束
    $targetPortBegin=$content["targetPortBegin"];//目的端口起始
    $targetPortEnd=$content["targetPortEnd"];//目的端口结束

    $contents = pack('S1L1C2C2C4C4C4C4S4', $opfs,$dataBaseID,
        $beginTime["h"],$beginTime["m"],
        $endTime["h"],$endTime["m"],
        $sourceIP[0],$sourceIP[1],$sourceIP[2],$sourceIP[3],
        $sourceMask[0],$sourceMask[1],$sourceMask[2],$sourceMask[3],
        $targetIP[0],$targetIP[1],$targetIP[2],$targetIP[3],
        $targetMask[0],$targetMask[1],$targetMask[2],$targetMask[3],
        $sourcePortBegin,$sourcePortEnd,$targetPortBegin,$targetPortEnd);
    send_fnc($host, $contents);
}
/**
 * 基本规则管理--TCP无条件信任--事件：点“删除”
 *
 * @param $host
 * @param $content array
 * <pre>
 * dataBaseID => 数据库ID
 * </pre>
 */
function FFS_RuleTcpTrust_Del($host, $content)
{
    $opfs = OPFS::OPFS_RuleTcpTrust_Del;
    $dataBaseID=$content["dataBaseID"];//数据库ID
    $contents = pack('S1L1', $opfs,$dataBaseID);
    send_fnc($host, $contents);
}

function FFS_RuleTcpTrust_Import($host, $content)
{
    $opfs = OPFS::OPFS_RuleTcpTrust_Import;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_RuleTcpTrust_Export($host, $content)
{
    $opfs = OPFS::OPFS_RuleTcpTrust_Export;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

/**
 * 基本规则管理--TCP用户自定义--事件：刷新 / 点指定页数
 *
 * @param $host
 * @param $content array
 * <pre>
 * beginIndex => 起始索引(从0开始)
 * number => 数量
 * </pre>
 */
function FFS_RuleTcpAu_List($host, $content)
{
    $opfs = OPFS::OPFS_RuleTcpAu_List;
    $beginIndex = $content["beginIndex"];//起始索引(从0开始)
    $number = $content["number"];//数量
    $contents = pack('S1L1L1', $opfs, $beginIndex, $number);
    send_fnc($host, $contents);
}

/**
 * 基本规则管理--TCP用户自定义--事件：点“添加”
 *
 * @param $host
 * @param $content array
 * <pre>
 * beginTime => 起始时间 array(["h"]时["m"]分)
 * endTime => 结束时间 array(["h"]时["m"]分)
 * sourceIP => IP源 array([0][1][2][3])
 * sourceMask => 源IP掩码 array([0][1][2][3])
 * targetIP => 目的IP array([0][1][2][3])
 * targetMask => 目的IP掩码 array([0][1][2][3])
 * sourcePortBegin => 源端口起始
 * sourcePortEnd => 源端口结束
 * targetPortBegin => 目的端口起始
 * targetPortEnd => 目的端口结束
 * alertLevel => 告警级别
 * </pre>
 */
function FFS_RuleTcpAu_Add($host, $content)
{
    $opfs = OPFS::OPFS_RuleTcpAu_Add;
    $beginTime=$content["beginTime"];//起始时间
    $endTime=$content["endTime"];//结束时间
    $sourceIP=$content["sourceIP"];//IP源
    $sourceMask=$content["sourceMask"];//源IP掩码
    $targetIP=$content["targetIP"];//目的IP
    $targetMask=$content["targetMask"];//目的IP掩码
    $sourcePortBegin=$content["sourcePortBegin"];//源端口起始
    $sourcePortEnd=$content["sourcePortEnd"];//源端口结束
    $targetPortBegin=$content["targetPortBegin"];//目的端口起始
    $targetPortEnd=$content["targetPortEnd"];//目的端口结束
    $alertLevel=$content["alertLevel"];//告警级别

    $contents = pack('S1C2C2C4C4C4C4S4C1', $opfs,
        $beginTime["h"],$beginTime["m"],
        $endTime["h"],$endTime["m"],
        $sourceIP[0],$sourceIP[1],$sourceIP[2],$sourceIP[3],
        $sourceMask[0],$sourceMask[1],$sourceMask[2],$sourceMask[3],
        $targetIP[0],$targetIP[1],$targetIP[2],$targetIP[3],
        $targetMask[0],$targetMask[1],$targetMask[2],$targetMask[3],
        $sourcePortBegin,$sourcePortEnd,$targetPortBegin,$targetPortEnd,$alertLevel);
    send_fnc($host, $contents);
}
/**
 * 基本规则管理--TCP用户自定义--事件：点“全部删除”
 *
 * @param $host
 * @param $content null
 *
 */
function FFS_RuleTcpAu_Cls($host, $content)
{
    $opfs = OPFS::OPFS_RuleTcpAu_Cls;
    $contents = pack('S1', $opfs);
    send_fnc($host, $contents);
}

/**
 * 基本规则管理--TCP用户自定义--事件：点“编辑”
 *
 * @param $host
 * @param $content array
 * <pre>
 * dataBaseID => 旧数据库ID
 * beginTime => 起始时间 array(["h"]时["m"]分)
 * endTime => 结束时间 array(["h"]时["m"]分)
 * sourceIP => IP源 array([0][1][2][3])
 * sourceMask => 源IP掩码 array([0][1][2][3])
 * targetIP => 目的IP array([0][1][2][3])
 * targetMask => 目的IP掩码 array([0][1][2][3])
 * sourcePortBegin => 源端口起始
 * sourcePortEnd => 源端口结束
 * targetPortBegin => 目的端口起始
 * targetPortEnd => 目的端口结束
 * alertLevel => 告警级别
 * </pre>
 */
function FFS_RuleTcpAu_Edit($host, $content)
{
    $opfs = OPFS::OPFS_RuleTcpAu_Edit;
    $dataBaseID=$content["dataBaseID"];//旧数据库ID
    $beginTime=$content["beginTime"];//起始时间
    $endTime=$content["endTime"];//结束时间
    $sourceIP=$content["sourceIP"];//IP源
    $sourceMask=$content["sourceMask"];//源IP掩码
    $targetIP=$content["targetIP"];//目的IP
    $targetMask=$content["targetMask"];//目的IP掩码
    $sourcePortBegin=$content["sourcePortBegin"];//源端口起始
    $sourcePortEnd=$content["sourcePortEnd"];//源端口结束
    $targetPortBegin=$content["targetPortBegin"];//目的端口起始
    $targetPortEnd=$content["targetPortEnd"];//目的端口结束
    $alertLevel=$content["alertLevel"];//告警级别

    $contents = pack('S1L1C2C2C4C4C4C4S4C1', $opfs,$dataBaseID,
        $beginTime["h"],$beginTime["m"],
        $endTime["h"],$endTime["m"],
        $sourceIP[0],$sourceIP[1],$sourceIP[2],$sourceIP[3],
        $sourceMask[0],$sourceMask[1],$sourceMask[2],$sourceMask[3],
        $targetIP[0],$targetIP[1],$targetIP[2],$targetIP[3],
        $targetMask[0],$targetMask[1],$targetMask[2],$targetMask[3],
        $sourcePortBegin,$sourcePortEnd,$targetPortBegin,$targetPortEnd,$alertLevel);
    send_fnc($host, $contents);
}
/**
 * 基本规则管理--TCP用户自定义--事件：点“删除”
 *
 * @param $host
 * @param $content array
 * <pre>
 * dataBaseID => 数据库ID
 * </pre>
 */
function FFS_RuleTcpAu_Del($host, $content)
{
    $opfs = OPFS::OPFS_RuleTcpAu_Del;
    $dataBaseID=$content["dataBaseID"];//数据库ID
    $contents = pack('S1L1', $opfs,$dataBaseID);
    send_fnc($host, $contents);
}

function FFS_RuleTcpAu_Import($host, $content)
{
    $opfs = OPFS::OPFS_RuleTcpAu_Import;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_RuleTcpAu_Export($host, $content)
{
    $opfs = OPFS::OPFS_RuleTcpAu_Export;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

/**
 * 基本规则管理--Udp黑名单--事件：刷新 / 点指定页数
 *
 * @param $host
 * @param $content array
 * <pre>
 * beginIndex => 起始索引(从0开始)
 * number => 数量
 * </pre>
 */
function FFS_RuleUdpBl_List($host, $content)
{
    $opfs = OPFS::OPFS_RuleUdpBl_List;
    $beginIndex = $content["beginIndex"];//起始索引(从0开始)
    $number = $content["number"];//数量
    $contents = pack('S1L1L1', $opfs, $beginIndex, $number);
    send_fnc($host, $contents);
}

/**
 * 基本规则管理--Udp黑名单--事件：点“添加”
 *
 * @param $host
 * @param $content array
 * <pre>
 * beginTime => 起始时间 array(["h"]时["m"]分)
 * endTime => 结束时间 array(["h"]时["m"]分)
 * sourceIP => IP源 array([0][1][2][3])
 * sourceMask => 源IP掩码 array([0][1][2][3])
 * targetIP => 目的IP array([0][1][2][3])
 * targetMask => 目的IP掩码 array([0][1][2][3])
 * sourcePortBegin => 源端口起始
 * sourcePortEnd => 源端口结束
 * targetPortBegin => 目的端口起始
 * targetPortEnd => 目的端口结束
 * </pre>
 */
function FFS_RuleUdpBl_Add($host, $content)
{
    $opfs = OPFS::OPFS_RuleUdpBl_Add;
    $beginTime=$content["beginTime"];//起始时间
    $endTime=$content["endTime"];//结束时间
    $sourceIP=$content["sourceIP"];//IP源
    $sourceMask=$content["sourceMask"];//源IP掩码
    $targetIP=$content["targetIP"];//目的IP
    $targetMask=$content["targetMask"];//目的IP掩码
    $sourcePortBegin=$content["sourcePortBegin"];//源端口起始
    $sourcePortEnd=$content["sourcePortEnd"];//源端口结束
    $targetPortBegin=$content["targetPortBegin"];//目的端口起始
    $targetPortEnd=$content["targetPortEnd"];//目的端口结束

    $contents = pack('S1C2C2C4C4C4C4S4', $opfs,
        $beginTime["h"],$beginTime["m"],
        $endTime["h"],$endTime["m"],
        $sourceIP[0],$sourceIP[1],$sourceIP[2],$sourceIP[3],
        $sourceMask[0],$sourceMask[1],$sourceMask[2],$sourceMask[3],
        $targetIP[0],$targetIP[1],$targetIP[2],$targetIP[3],
        $targetMask[0],$targetMask[1],$targetMask[2],$targetMask[3],
        $sourcePortBegin,$sourcePortEnd,$targetPortBegin,$targetPortEnd);
    send_fnc($host, $contents);
}
/**
 * 基本规则管理--Udp黑名单--事件：点“全部删除”
 *
 * @param $host
 * @param $content null
 *
 */
function FFS_RuleUdpBl_Cls($host, $content)
{
    $opfs = OPFS::OPFS_RuleUdpBl_Cls;
    $contents = pack('S1', $opfs);
    send_fnc($host, $contents);
}
/**
 * 基本规则管理--Udp黑名单--事件：点“激活全部”
 *
 * @param $host
 * @param $content null
 *
 */
function FFS_RuleUdpBl_Enable($host, $content)
{
    $opfs = OPFS::OPFS_RuleUdpBl_Enable;
    $contents = pack('S1', $opfs);
    send_fnc($host, $contents);
}
/**
 * 基本规则管理--Udp黑名单--点“禁用全部”
 *
 * @param $host
 * @param $content null
 *
 */
function FFS_RuleUdpBl_Disable($host, $content)
{
    $opfs = OPFS::OPFS_RuleUdpBl_Disable;
    $contents = pack('S1', $opfs);
    send_fnc($host, $contents);
}

/**
 * 基本规则管理--Udp黑名单--事件：点“编辑”
 *
 * @param $host
 * @param $content array
 * <pre>
 * dataBaseID => 旧数据库ID
 * beginTime => 起始时间 array(["h"]时["m"]分)
 * endTime => 结束时间 array(["h"]时["m"]分)
 * sourceIP => IP源 array([0][1][2][3])
 * sourceMask => 源IP掩码 array([0][1][2][3])
 * targetIP => 目的IP array([0][1][2][3])
 * targetMask => 目的IP掩码 array([0][1][2][3])
 * sourcePortBegin => 源端口起始
 * sourcePortEnd => 源端口结束
 * targetPortBegin => 目的端口起始
 * targetPortEnd => 目的端口结束
 * </pre>
 */
function FFS_RuleUdpBl_Edit($host, $content)
{
    $opfs = OPFS::OPFS_RuleUdpBl_Edit;
    $dataBaseID=$content["dataBaseID"];//旧数据库ID
    $beginTime=$content["beginTime"];//起始时间
    $endTime=$content["endTime"];//结束时间
    $sourceIP=$content["sourceIP"];//IP源
    $sourceMask=$content["sourceMask"];//源IP掩码
    $targetIP=$content["targetIP"];//目的IP
    $targetMask=$content["targetMask"];//目的IP掩码
    $sourcePortBegin=$content["sourcePortBegin"];//源端口起始
    $sourcePortEnd=$content["sourcePortEnd"];//源端口结束
    $targetPortBegin=$content["targetPortBegin"];//目的端口起始
    $targetPortEnd=$content["targetPortEnd"];//目的端口结束

    $contents = pack('S1L1C2C2C4C4C4C4S4', $opfs,$dataBaseID,
        $beginTime["h"],$beginTime["m"],
        $endTime["h"],$endTime["m"],
        $sourceIP[0],$sourceIP[1],$sourceIP[2],$sourceIP[3],
        $sourceMask[0],$sourceMask[1],$sourceMask[2],$sourceMask[3],
        $targetIP[0],$targetIP[1],$targetIP[2],$targetIP[3],
        $targetMask[0],$targetMask[1],$targetMask[2],$targetMask[3],
        $sourcePortBegin,$sourcePortEnd,$targetPortBegin,$targetPortEnd);
    send_fnc($host, $contents);
}
/**
 * 基本规则管理--Udp黑名单--事件：点“删除”
 *
 * @param $host
 * @param $content array
 * <pre>
 * dataBaseID => 数据库ID
 * </pre>
 */
function FFS_RuleUdpBl_Del($host, $content)
{
    $opfs = OPFS::OPFS_RuleUdpBl_Del;
    $dataBaseID=$content["dataBaseID"];//数据库ID
    $contents = pack('S1L1', $opfs,$dataBaseID);
    send_fnc($host, $contents);
}
/**
 * 基本规则管理--Udp黑名单--事件：点“导入”
 *
 * @param $host
 * @param $content null
 * TODO 导入
 */
function FFS_RuleUdpBl_Import($host, $content)
{
    $opfs = OPFS::OPFS_RuleUdpBl_Import;
    $content = pack('S1', $opfs);
    send_fnc($host, $content);
}
/**
 * 基本规则管理--Udp黑名单--事件：点“导出”
 *
 * @param $host
 * @param $content null
 * TODO 导出
 */
function FFS_RuleUdpBl_Export($host, $content)
{
    $opfs = OPFS::OPFS_RuleUdpBl_Export;
    $content = pack('S1', $opfs);
    send_fnc($host, $content);
}

/**
 * 基本规则管理--Udp白名单--事件：刷新 / 点指定页数
 *
 * @param $host
 * @param $content array
 * <pre>
 * beginIndex => 起始索引(从0开始)
 * number => 数量
 * </pre>
 */
function FFS_RuleUdpWl_List($host, $content)
{
    $opfs = OPFS::OPFS_RuleUdpWl_List;
    $beginIndex = $content["beginIndex"];//起始索引(从0开始)
    $number = $content["number"];//数量
    $contents = pack('S1L1L1', $opfs, $beginIndex, $number);
    send_fnc($host, $contents);
}

/**
 * 基本规则管理--Udp白名单--事件：点“添加”
 *
 * @param $host
 * @param $content array
 * <pre>
 * beginTime => 起始时间 array(["h"]时["m"]分)
 * endTime => 结束时间 array(["h"]时["m"]分)
 * sourceIP => IP源 array([0][1][2][3])
 * sourceMask => 源IP掩码 array([0][1][2][3])
 * targetIP => 目的IP array([0][1][2][3])
 * targetMask => 目的IP掩码 array([0][1][2][3])
 * sourcePortBegin => 源端口起始
 * sourcePortEnd => 源端口结束
 * targetPortBegin => 目的端口起始
 * targetPortEnd => 目的端口结束
 * </pre>
 */
function FFS_RuleUdpWl_Add($host, $content)
{
    $opfs = OPFS::OPFS_RuleUdpWl_Add;
    $beginTime=$content["beginTime"];//起始时间
    $endTime=$content["endTime"];//结束时间
    $sourceIP=$content["sourceIP"];//IP源
    $sourceMask=$content["sourceMask"];//源IP掩码
    $targetIP=$content["targetIP"];//目的IP
    $targetMask=$content["targetMask"];//目的IP掩码
    $sourcePortBegin=$content["sourcePortBegin"];//源端口起始
    $sourcePortEnd=$content["sourcePortEnd"];//源端口结束
    $targetPortBegin=$content["targetPortBegin"];//目的端口起始
    $targetPortEnd=$content["targetPortEnd"];//目的端口结束

    $contents = pack('S1C2C2C4C4C4C4S4', $opfs,
        $beginTime["h"],$beginTime["m"],
        $endTime["h"],$endTime["m"],
        $sourceIP[0],$sourceIP[1],$sourceIP[2],$sourceIP[3],
        $sourceMask[0],$sourceMask[1],$sourceMask[2],$sourceMask[3],
        $targetIP[0],$targetIP[1],$targetIP[2],$targetIP[3],
        $targetMask[0],$targetMask[1],$targetMask[2],$targetMask[3],
        $sourcePortBegin,$sourcePortEnd,$targetPortBegin,$targetPortEnd);
    send_fnc($host, $contents);
}
/**
 * 基本规则管理--Udp白名单--事件：点“全部删除”
 *
 * @param $host
 * @param $content null
 *
 */
function FFS_RuleUdpWl_Cls($host, $content)
{
    $opfs = OPFS::OPFS_RuleUdpWl_Cls;
    $contents = pack('S1', $opfs);
    send_fnc($host, $contents);
}
/**
 * 基本规则管理--Udp白名单--事件：点“激活全部”
 *
 * @param $host
 * @param $content null
 *
 */
function FFS_RuleUdpWl_Enable($host, $content)
{
    $opfs = OPFS::OPFS_RuleUdpWl_Enable;
    $contents = pack('S1', $opfs);
    send_fnc($host, $contents);
}
/**
 * 基本规则管理--Udp白名单--点“禁用全部”
 *
 * @param $host
 * @param $content null
 *
 */
function FFS_RuleUdpWl_Disable($host, $content)
{
    $opfs = OPFS::OPFS_RuleUdpWl_Disable;
    $contents = pack('S1', $opfs);
    send_fnc($host, $contents);
}

/**
 * 基本规则管理--Udp白名单--事件：点“编辑”
 *
 * @param $host
 * @param $content array
 * <pre>
 * dataBaseID => 旧数据库ID
 * beginTime => 起始时间 array(["h"]时["m"]分)
 * endTime => 结束时间 array(["h"]时["m"]分)
 * sourceIP => IP源 array([0][1][2][3])
 * sourceMask => 源IP掩码 array([0][1][2][3])
 * targetIP => 目的IP array([0][1][2][3])
 * targetMask => 目的IP掩码 array([0][1][2][3])
 * sourcePortBegin => 源端口起始
 * sourcePortEnd => 源端口结束
 * targetPortBegin => 目的端口起始
 * targetPortEnd => 目的端口结束
 * </pre>
 */
function FFS_RuleUdpWl_Edit($host, $content)
{
    $opfs = OPFS::OPFS_RuleUdpWl_Edit;
    $dataBaseID=$content["dataBaseID"];//旧数据库ID
    $beginTime=$content["beginTime"];//起始时间
    $endTime=$content["endTime"];//结束时间
    $sourceIP=$content["sourceIP"];//IP源
    $sourceMask=$content["sourceMask"];//源IP掩码
    $targetIP=$content["targetIP"];//目的IP
    $targetMask=$content["targetMask"];//目的IP掩码
    $sourcePortBegin=$content["sourcePortBegin"];//源端口起始
    $sourcePortEnd=$content["sourcePortEnd"];//源端口结束
    $targetPortBegin=$content["targetPortBegin"];//目的端口起始
    $targetPortEnd=$content["targetPortEnd"];//目的端口结束

    $contents = pack('S1L1C2C2C4C4C4C4S4', $opfs,$dataBaseID,
        $beginTime["h"],$beginTime["m"],
        $endTime["h"],$endTime["m"],
        $sourceIP[0],$sourceIP[1],$sourceIP[2],$sourceIP[3],
        $sourceMask[0],$sourceMask[1],$sourceMask[2],$sourceMask[3],
        $targetIP[0],$targetIP[1],$targetIP[2],$targetIP[3],
        $targetMask[0],$targetMask[1],$targetMask[2],$targetMask[3],
        $sourcePortBegin,$sourcePortEnd,$targetPortBegin,$targetPortEnd);
    send_fnc($host, $contents);
}
/**
 * 基本规则管理--Udp白名单--事件：点“删除”
 *
 * @param $host
 * @param $content array
 * <pre>
 * dataBaseID => 数据库ID
 * </pre>
 */
function FFS_RuleUdpWl_Del($host, $content)
{
    $opfs = OPFS::OPFS_RuleUdpWl_Del;
    $dataBaseID=$content["dataBaseID"];//数据库ID
    $contents = pack('S1L1', $opfs,$dataBaseID);
    send_fnc($host, $contents);
}


function FFS_RuleUdpWl_Import($host, $content)
{
    $opfs = OPFS::OPFS_RuleUdpWl_Import;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_RuleUdpWl_Export($host, $content)
{
    $opfs = OPFS::OPFS_RuleUdpWl_Export;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

/**
 * 基本规则管理--Udp无条件信任--事件：刷新 / 点指定页数
 *
 * @param $host
 * @param $content array
 * <pre>
 * beginIndex => 起始索引(从0开始)
 * number => 数量
 * </pre>
 */
function FFS_RuleUdpTrust_List($host, $content)
{
    $opfs = OPFS::OPFS_RuleUdpTrust_List;
    $beginIndex = $content["beginIndex"];//起始索引(从0开始)
    $number = $content["number"];//数量
    $contents = pack('S1L1L1', $opfs, $beginIndex, $number);
    send_fnc($host, $contents);
}

/**
 * 基本规则管理--Udp无条件信任--事件：点“添加”
 *
 * @param $host
 * @param $content array
 * <pre>
 * beginTime => 起始时间 array(["h"]时["m"]分)
 * endTime => 结束时间 array(["h"]时["m"]分)
 * sourceIP => IP源 array([0][1][2][3])
 * sourceMask => 源IP掩码 array([0][1][2][3])
 * targetIP => 目的IP array([0][1][2][3])
 * targetMask => 目的IP掩码 array([0][1][2][3])
 * sourcePortBegin => 源端口起始
 * sourcePortEnd => 源端口结束
 * targetPortBegin => 目的端口起始
 * targetPortEnd => 目的端口结束
 * </pre>
 */
function FFS_RuleUdpTrust_Add($host, $content)
{
    $opfs = OPFS::OPFS_RuleUdpTrust_Add;
    $beginTime=$content["beginTime"];//起始时间
    $endTime=$content["endTime"];//结束时间
    $sourceIP=$content["sourceIP"];//IP源
    $sourceMask=$content["sourceMask"];//源IP掩码
    $targetIP=$content["targetIP"];//目的IP
    $targetMask=$content["targetMask"];//目的IP掩码
    $sourcePortBegin=$content["sourcePortBegin"];//源端口起始
    $sourcePortEnd=$content["sourcePortEnd"];//源端口结束
    $targetPortBegin=$content["targetPortBegin"];//目的端口起始
    $targetPortEnd=$content["targetPortEnd"];//目的端口结束

    $contents = pack('S1C2C2C4C4C4C4S4', $opfs,
        $beginTime["h"],$beginTime["m"],
        $endTime["h"],$endTime["m"],
        $sourceIP[0],$sourceIP[1],$sourceIP[2],$sourceIP[3],
        $sourceMask[0],$sourceMask[1],$sourceMask[2],$sourceMask[3],
        $targetIP[0],$targetIP[1],$targetIP[2],$targetIP[3],
        $targetMask[0],$targetMask[1],$targetMask[2],$targetMask[3],
        $sourcePortBegin,$sourcePortEnd,$targetPortBegin,$targetPortEnd);
    send_fnc($host, $contents);
}
/**
 * 基本规则管理--Udp无条件信任--事件：点“全部删除”
 *
 * @param $host
 * @param $content null
 *
 */
function FFS_RuleUdpTrust_Cls($host, $content)
{
    $opfs = OPFS::OPFS_RuleUdpTrust_Cls;
    $contents = pack('S1', $opfs);
    send_fnc($host, $contents);
}

/**
 * 基本规则管理--Udp无条件信任--事件：点“编辑”
 *
 * @param $host
 * @param $content array
 * <pre>
 * dataBaseID => 旧数据库ID
 * beginTime => 起始时间 array(["h"]时["m"]分)
 * endTime => 结束时间 array(["h"]时["m"]分)
 * sourceIP => IP源 array([0][1][2][3])
 * sourceMask => 源IP掩码 array([0][1][2][3])
 * targetIP => 目的IP array([0][1][2][3])
 * targetMask => 目的IP掩码 array([0][1][2][3])
 * sourcePortBegin => 源端口起始
 * sourcePortEnd => 源端口结束
 * targetPortBegin => 目的端口起始
 * targetPortEnd => 目的端口结束
 * </pre>
 */
function FFS_RuleUdpTrust_Edit($host, $content)
{
    $opfs = OPFS::OPFS_RuleUdpTrust_Edit;
    $dataBaseID=$content["dataBaseID"];//旧数据库ID
    $beginTime=$content["beginTime"];//起始时间
    $endTime=$content["endTime"];//结束时间
    $sourceIP=$content["sourceIP"];//IP源
    $sourceMask=$content["sourceMask"];//源IP掩码
    $targetIP=$content["targetIP"];//目的IP
    $targetMask=$content["targetMask"];//目的IP掩码
    $sourcePortBegin=$content["sourcePortBegin"];//源端口起始
    $sourcePortEnd=$content["sourcePortEnd"];//源端口结束
    $targetPortBegin=$content["targetPortBegin"];//目的端口起始
    $targetPortEnd=$content["targetPortEnd"];//目的端口结束

    $contents = pack('S1L1C2C2C4C4C4C4S4', $opfs,$dataBaseID,
        $beginTime["h"],$beginTime["m"],
        $endTime["h"],$endTime["m"],
        $sourceIP[0],$sourceIP[1],$sourceIP[2],$sourceIP[3],
        $sourceMask[0],$sourceMask[1],$sourceMask[2],$sourceMask[3],
        $targetIP[0],$targetIP[1],$targetIP[2],$targetIP[3],
        $targetMask[0],$targetMask[1],$targetMask[2],$targetMask[3],
        $sourcePortBegin,$sourcePortEnd,$targetPortBegin,$targetPortEnd);
    send_fnc($host, $contents);
}
/**
 * 基本规则管理--Udp无条件信任--事件：点“删除”
 *
 * @param $host
 * @param $content array
 * <pre>
 * dataBaseID => 数据库ID
 * </pre>
 */
function FFS_RuleUdpTrust_Del($host, $content)
{
    $opfs = OPFS::OPFS_RuleUdpTrust_Del;
    $dataBaseID=$content["dataBaseID"];//数据库ID
    $contents = pack('S1L1', $opfs,$dataBaseID);
    send_fnc($host, $contents);
}

function FFS_RuleUdpTrust_Import($host, $content)
{
    $opfs = OPFS::OPFS_RuleUdpTrust_Import;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_RuleUdpTrust_Export($host, $content)
{
    $opfs = OPFS::OPFS_RuleUdpTrust_Export;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

/**
 * 基本规则管理--Udp用户自定义--事件：刷新 / 点指定页数
 *
 * @param $host
 * @param $content array
 * <pre>
 * beginIndex => 起始索引(从0开始)
 * number => 数量
 * </pre>
 */
function FFS_RuleUdpAu_List($host, $content)
{
    $opfs = OPFS::OPFS_RuleUdpAu_List;
    $beginIndex = $content["beginIndex"];//起始索引(从0开始)
    $number = $content["number"];//数量
    $contents = pack('S1L1L1', $opfs, $beginIndex, $number);
    send_fnc($host, $contents);
}

/**
 * 基本规则管理--Udp用户自定义--事件：点“添加”
 *
 * @param $host
 * @param $content array
 * <pre>
 * beginTime => 起始时间 array(["h"]时["m"]分)
 * endTime => 结束时间 array(["h"]时["m"]分)
 * sourceIP => IP源 array([0][1][2][3])
 * sourceMask => 源IP掩码 array([0][1][2][3])
 * targetIP => 目的IP array([0][1][2][3])
 * targetMask => 目的IP掩码 array([0][1][2][3])
 * sourcePortBegin => 源端口起始
 * sourcePortEnd => 源端口结束
 * targetPortBegin => 目的端口起始
 * targetPortEnd => 目的端口结束
 * alertLevel => 告警级别
 * </pre>
 */
function FFS_RuleUdpAu_Add($host, $content)
{
    $opfs = OPFS::OPFS_RuleUdpAu_Add;
    $beginTime=$content["beginTime"];//起始时间
    $endTime=$content["endTime"];//结束时间
    $sourceIP=$content["sourceIP"];//IP源
    $sourceMask=$content["sourceMask"];//源IP掩码
    $targetIP=$content["targetIP"];//目的IP
    $targetMask=$content["targetMask"];//目的IP掩码
    $sourcePortBegin=$content["sourcePortBegin"];//源端口起始
    $sourcePortEnd=$content["sourcePortEnd"];//源端口结束
    $targetPortBegin=$content["targetPortBegin"];//目的端口起始
    $targetPortEnd=$content["targetPortEnd"];//目的端口结束
    $alertLevel=$content["alertLevel"];//告警级别

    $contents = pack('S1C2C2C4C4C4C4S4C1', $opfs,
        $beginTime["h"],$beginTime["m"],
        $endTime["h"],$endTime["m"],
        $sourceIP[0],$sourceIP[1],$sourceIP[2],$sourceIP[3],
        $sourceMask[0],$sourceMask[1],$sourceMask[2],$sourceMask[3],
        $targetIP[0],$targetIP[1],$targetIP[2],$targetIP[3],
        $targetMask[0],$targetMask[1],$targetMask[2],$targetMask[3],
        $sourcePortBegin,$sourcePortEnd,$targetPortBegin,$targetPortEnd,$alertLevel);
    send_fnc($host, $contents);
}
/**
 * 基本规则管理--TCP用户自定义--事件：点“全部删除”
 *
 * @param $host
 * @param $content null
 *
 */
function FFS_RuleUdpAu_Cls($host, $content)
{
    $opfs = OPFS::OPFS_RuleUdpAu_Cls;
    $contents = pack('S1', $opfs);
    send_fnc($host, $contents);
}

/**
 * 基本规则管理--Udp用户自定义--事件：点“编辑”
 *
 * @param $host
 * @param $content array
 * <pre>
 * dataBaseID => 旧数据库ID
 * beginTime => 起始时间 array(["h"]时["m"]分)
 * endTime => 结束时间 array(["h"]时["m"]分)
 * sourceIP => IP源 array([0][1][2][3])
 * sourceMask => 源IP掩码 array([0][1][2][3])
 * targetIP => 目的IP array([0][1][2][3])
 * targetMask => 目的IP掩码 array([0][1][2][3])
 * sourcePortBegin => 源端口起始
 * sourcePortEnd => 源端口结束
 * targetPortBegin => 目的端口起始
 * targetPortEnd => 目的端口结束
 * alertLevel => 告警级别
 * </pre>
 */
function FFS_RuleUdpAu_Edit($host, $content)
{
    $opfs = OPFS::OPFS_RuleUdpAu_Edit;
    $dataBaseID=$content["dataBaseID"];//旧数据库ID
    $beginTime=$content["beginTime"];//起始时间
    $endTime=$content["endTime"];//结束时间
    $sourceIP=$content["sourceIP"];//IP源
    $sourceMask=$content["sourceMask"];//源IP掩码
    $targetIP=$content["targetIP"];//目的IP
    $targetMask=$content["targetMask"];//目的IP掩码
    $sourcePortBegin=$content["sourcePortBegin"];//源端口起始
    $sourcePortEnd=$content["sourcePortEnd"];//源端口结束
    $targetPortBegin=$content["targetPortBegin"];//目的端口起始
    $targetPortEnd=$content["targetPortEnd"];//目的端口结束
    $alertLevel=$content["alertLevel"];//告警级别

    $contents = pack('S1L1C2C2C4C4C4C4S4C1', $opfs,$dataBaseID,
        $beginTime["h"],$beginTime["m"],
        $endTime["h"],$endTime["m"],
        $sourceIP[0],$sourceIP[1],$sourceIP[2],$sourceIP[3],
        $sourceMask[0],$sourceMask[1],$sourceMask[2],$sourceMask[3],
        $targetIP[0],$targetIP[1],$targetIP[2],$targetIP[3],
        $targetMask[0],$targetMask[1],$targetMask[2],$targetMask[3],
        $sourcePortBegin,$sourcePortEnd,$targetPortBegin,$targetPortEnd,$alertLevel);
    send_fnc($host, $contents);
}
/**
 * 基本规则管理--Udp用户自定义--事件：点“删除”
 *
 * @param $host
 * @param $content array
 * <pre>
 * dataBaseID => 数据库ID
 * </pre>
 */
function FFS_RuleUdpAu_Del($host, $content)
{
    $opfs = OPFS::OPFS_RuleUdpAu_Del;
    $dataBaseID=$content["dataBaseID"];//数据库ID
    $contents = pack('S1L1', $opfs,$dataBaseID);
    send_fnc($host, $contents);
}

function FFS_RuleUdpAu_Import($host, $content)
{
    $opfs = OPFS::OPFS_RuleUdpAu_Import;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_RuleUdpAu_Export($host, $content)
{
    $opfs = OPFS::OPFS_RuleUdpAu_Export;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_RuleModbusBl_List($host, $content)
{
    $opfs = OPFS::OPFS_RuleModbusBl_List;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_RuleModbusBl_Add($host, $content)
{
    $opfs = OPFS::OPFS_RuleModbusBl_Add;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_RuleModbusBl_Cls($host, $content)
{
    $opfs = OPFS::OPFS_RuleModbusBl_Cls;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_RuleModbusBl_Enable($host, $content)
{
    $opfs = OPFS::OPFS_RuleModbusBl_Enable;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_RuleModbusBl_Disable($host, $content)
{
    $opfs = OPFS::OPFS_RuleModbusBl_Disable;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_RuleModbusBl_Edit($host, $content)
{
    $opfs = OPFS::OPFS_RuleModbusBl_Edit;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_RuleModbusBl_Del($host, $content)
{
    $opfs = OPFS::OPFS_RuleModbusBl_Del;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_RuleModbusBl_Import($host, $content)
{
    $opfs = OPFS::OPFS_RuleModbusBl_Import;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_RuleModbusBl_Export($host, $content)
{
    $opfs = OPFS::OPFS_RuleModbusBl_Export;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_RuleModbusWl_List($host, $content)
{
    $opfs = OPFS::OPFS_RuleModbusWl_List;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_RuleModbusWl_Add($host, $content)
{
    $opfs = OPFS::OPFS_RuleModbusWl_Add;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_RuleModbusWl_Cls($host, $content)
{
    $opfs = OPFS::OPFS_RuleModbusWl_Cls;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_RuleModbusWl_Enable($host, $content)
{
    $opfs = OPFS::OPFS_RuleModbusWl_Enable;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_RuleModbusWl_Disable($host, $content)
{
    $opfs = OPFS::OPFS_RuleModbusWl_Disable;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_RuleModbusWl_Edit($host, $content)
{
    $opfs = OPFS::OPFS_RuleModbusWl_Edit;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_RuleModbusWl_Del($host, $content)
{
    $opfs = OPFS::OPFS_RuleModbusWl_Del;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_RuleModbusWl_Import($host, $content)
{
    $opfs = OPFS::OPFS_RuleModbusWl_Import;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_RuleModbusWl_Export($host, $content)
{
    $opfs = OPFS::OPFS_RuleModbusWl_Export;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_RuleModbusAu_List($host, $content)
{
    $opfs = OPFS::OPFS_RuleModbusAu_List;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_RuleModbusAu_Add($host, $content)
{
    $opfs = OPFS::OPFS_RuleModbusAu_Add;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_RuleModbusAu_Cls($host, $content)
{
    $opfs = OPFS::OPFS_RuleModbusAu_Cls;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_RuleModbusAu_Enable($host, $content)
{
    $opfs = OPFS::OPFS_RuleModbusAu_Enable;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_RuleModbusAu_Disable($host, $content)
{
    $opfs = OPFS::OPFS_RuleModbusAu_Disable;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_RuleModbusAu_Edit($host, $content)
{
    $opfs = OPFS::OPFS_RuleModbusAu_Edit;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_RuleModbusAu_Del($host, $content)
{
    $opfs = OPFS::OPFS_RuleModbusAu_Del;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_RuleModbusAu_Import($host, $content)
{
    $opfs = OPFS::OPFS_RuleModbusAu_Import;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_RuleModbusAu_Export($host, $content)
{
    $opfs = OPFS::OPFS_RuleModbusAu_Export;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_RuleIec104Bl_List($host, $content)
{
    $opfs = OPFS::OPFS_RuleIec104Bl_List;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_RuleIec104Bl_Add($host, $content)
{
    $opfs = OPFS::OPFS_RuleIec104Bl_Add;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_RuleIec104Bl_Cls($host, $content)
{
    $opfs = OPFS::OPFS_RuleIec104Bl_Cls;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_RuleIec104Bl_Enable($host, $content)
{
    $opfs = OPFS::OPFS_RuleIec104Bl_Enable;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_RuleIec104Bl_Disable($host, $content)
{
    $opfs = OPFS::OPFS_RuleIec104Bl_Disable;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_RuleIec104Bl_Edit($host, $content)
{
    $opfs = OPFS::OPFS_RuleIec104Bl_Edit;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_RuleIec104Bl_Del($host, $content)
{
    $opfs = OPFS::OPFS_RuleIec104Bl_Del;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_RuleIec104Bl_Import($host, $content)
{
    $opfs = OPFS::OPFS_RuleIec104Bl_Import;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_RuleIec104Bl_Export($host, $content)
{
    $opfs = OPFS::OPFS_RuleIec104Bl_Export;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_RuleIec104Wl_List($host, $content)
{
    $opfs = OPFS::OPFS_RuleIec104Wl_List;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_RuleIec104Wl_Add($host, $content)
{
    $opfs = OPFS::OPFS_RuleIec104Wl_Add;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_RuleIec104Wl_Cls($host, $content)
{
    $opfs = OPFS::OPFS_RuleIec104Wl_Cls;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_RuleIec104Wl_Enable($host, $content)
{
    $opfs = OPFS::OPFS_RuleIec104Wl_Enable;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_RuleIec104Wl_Disable($host, $content)
{
    $opfs = OPFS::OPFS_RuleIec104Wl_Disable;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_RuleIec104Wl_Edit($host, $content)
{
    $opfs = OPFS::OPFS_RuleIec104Wl_Edit;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_RuleIec104Wl_Del($host, $content)
{
    $opfs = OPFS::OPFS_RuleIec104Wl_Del;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_RuleIec104Wl_Import($host, $content)
{
    $opfs = OPFS::OPFS_RuleIec104Wl_Import;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_RuleIec104Wl_Export($host, $content)
{
    $opfs = OPFS::OPFS_RuleIec104Wl_Export;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_RuleIec104Au_List($host, $content)
{
    $opfs = OPFS::OPFS_RuleIec104Au_List;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_RuleIec104Au_Add($host, $content)
{
    $opfs = OPFS::OPFS_RuleIec104Au_Add;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_RuleIec104Au_Cls($host, $content)
{
    $opfs = OPFS::OPFS_RuleIec104Au_Cls;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_RuleIec104Au_Enable($host, $content)
{
    $opfs = OPFS::OPFS_RuleIec104Au_Enable;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_RuleIec104Au_Disable($host, $content)
{
    $opfs = OPFS::OPFS_RuleIec104Au_Disable;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_RuleIec104Au_Edit($host, $content)
{
    $opfs = OPFS::OPFS_RuleIec104Au_Edit;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_RuleIec104Au_Del($host, $content)
{
    $opfs = OPFS::OPFS_RuleIec104Au_Del;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_RuleIec104Au_Import($host, $content)
{
    $opfs = OPFS::OPFS_RuleIec104Au_Import;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_RuleIec104Au_Export($host, $content)
{
    $opfs = OPFS::OPFS_RuleIec104Au_Export;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_RuleDnp3Bl_List($host, $content)
{
    $opfs = OPFS::OPFS_RuleDnp3Bl_List;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_RuleDnp3Bl_Add($host, $content)
{
    $opfs = OPFS::OPFS_RuleDnp3Bl_Add;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_RuleDnp3Bl_Cls($host, $content)
{
    $opfs = OPFS::OPFS_RuleDnp3Bl_Cls;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_RuleDnp3Bl_Enable($host, $content)
{
    $opfs = OPFS::OPFS_RuleDnp3Bl_Enable;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_RuleDnp3Bl_Disable($host, $content)
{
    $opfs = OPFS::OPFS_RuleDnp3Bl_Disable;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_RuleDnp3Bl_Edit($host, $content)
{
    $opfs = OPFS::OPFS_RuleDnp3Bl_Edit;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_RuleDnp3Bl_Del($host, $content)
{
    $opfs = OPFS::OPFS_RuleDnp3Bl_Del;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_RuleDnp3Bl_Import($host, $content)
{
    $opfs = OPFS::OPFS_RuleDnp3Bl_Import;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_RuleDnp3Bl_Export($host, $content)
{
    $opfs = OPFS::OPFS_RuleDnp3Bl_Export;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_RuleDnp3Wl_List($host, $content)
{
    $opfs = OPFS::OPFS_RuleDnp3Wl_List;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_RuleDnp3Wl_Add($host, $content)
{
    $opfs = OPFS::OPFS_RuleDnp3Wl_Add;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_RuleDnp3Wl_Cls($host, $content)
{
    $opfs = OPFS::OPFS_RuleDnp3Wl_Cls;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_RuleDnp3Wl_Enable($host, $content)
{
    $opfs = OPFS::OPFS_RuleDnp3Wl_Enable;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_RuleDnp3Wl_Disable($host, $content)
{
    $opfs = OPFS::OPFS_RuleDnp3Wl_Disable;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_RuleDnp3Wl_Edit($host, $content)
{
    $opfs = OPFS::OPFS_RuleDnp3Wl_Edit;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_RuleDnp3Wl_Del($host, $content)
{
    $opfs = OPFS::OPFS_RuleDnp3Wl_Del;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_RuleDnp3Wl_Import($host, $content)
{
    $opfs = OPFS::OPFS_RuleDnp3Wl_Import;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_RuleDnp3Wl_Export($host, $content)
{
    $opfs = OPFS::OPFS_RuleDnp3Wl_Export;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_RuleDnp3Au_List($host, $content)
{
    $opfs = OPFS::OPFS_RuleDnp3Au_List;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_RuleDnp3Au_Add($host, $content)
{
    $opfs = OPFS::OPFS_RuleDnp3Au_Add;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_RuleDnp3Au_Cls($host, $content)
{
    $opfs = OPFS::OPFS_RuleDnp3Au_Cls;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_RuleDnp3Au_Enable($host, $content)
{
    $opfs = OPFS::OPFS_RuleDnp3Au_Enable;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_RuleDnp3Au_Disable($host, $content)
{
    $opfs = OPFS::OPFS_RuleDnp3Au_Disable;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_RuleDnp3Au_Edit($host, $content)
{
    $opfs = OPFS::OPFS_RuleDnp3Au_Edit;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_RuleDnp3Au_Del($host, $content)
{
    $opfs = OPFS::OPFS_RuleDnp3Au_Del;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_RuleDnp3Au_Import($host, $content)
{
    $opfs = OPFS::OPFS_RuleDnp3Au_Import;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_RuleDnp3Au_Export($host, $content)
{
    $opfs = OPFS::OPFS_RuleDnp3Au_Export;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_RuleS7Bl_List($host, $content)
{
    $opfs = OPFS::OPFS_RuleS7Bl_List;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_RuleS7Bl_Add($host, $content)
{
    $opfs = OPFS::OPFS_RuleS7Bl_Add;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_RuleS7Bl_Cls($host, $content)
{
    $opfs = OPFS::OPFS_RuleS7Bl_Cls;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_RuleS7Bl_Enable($host, $content)
{
    $opfs = OPFS::OPFS_RuleS7Bl_Enable;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_RuleS7Bl_Disable($host, $content)
{
    $opfs = OPFS::OPFS_RuleS7Bl_Disable;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_RuleS7Bl_Edit($host, $content)
{
    $opfs = OPFS::OPFS_RuleS7Bl_Edit;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_RuleS7Bl_Del($host, $content)
{
    $opfs = OPFS::OPFS_RuleS7Bl_Del;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_RuleS7Bl_Import($host, $content)
{
    $opfs = OPFS::OPFS_RuleS7Bl_Import;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_RuleS7Bl_Export($host, $content)
{
    $opfs = OPFS::OPFS_RuleS7Bl_Export;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_RuleS7Wl_List($host, $content)
{
    $opfs = OPFS::OPFS_RuleS7Wl_List;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_RuleS7Wl_Add($host, $content)
{
    $opfs = OPFS::OPFS_RuleS7Wl_Add;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_RuleS7Wl_Cls($host, $content)
{
    $opfs = OPFS::OPFS_RuleS7Wl_Cls;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_RuleS7Wl_Enable($host, $content)
{
    $opfs = OPFS::OPFS_RuleS7Wl_Enable;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_RuleS7Wl_Disable($host, $content)
{
    $opfs = OPFS::OPFS_RuleS7Wl_Disable;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_RuleS7Wl_Edit($host, $content)
{
    $opfs = OPFS::OPFS_RuleS7Wl_Edit;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_RuleS7Wl_Del($host, $content)
{
    $opfs = OPFS::OPFS_RuleS7Wl_Del;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_RuleS7Wl_Import($host, $content)
{
    $opfs = OPFS::OPFS_RuleS7Wl_Import;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_RuleS7Wl_Export($host, $content)
{
    $opfs = OPFS::OPFS_RuleS7Wl_Export;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_RuleS7Au_List($host, $content)
{
    $opfs = OPFS::OPFS_RuleS7Au_List;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_RuleS7Au_Add($host, $content)
{
    $opfs = OPFS::OPFS_RuleS7Au_Add;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_RuleS7Au_Cls($host, $content)
{
    $opfs = OPFS::OPFS_RuleS7Au_Cls;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_RuleS7Au_Enable($host, $content)
{
    $opfs = OPFS::OPFS_RuleS7Au_Enable;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_RuleS7Au_Disable($host, $content)
{
    $opfs = OPFS::OPFS_RuleS7Au_Disable;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_RuleS7Au_Edit($host, $content)
{
    $opfs = OPFS::OPFS_RuleS7Au_Edit;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_RuleS7Au_Del($host, $content)
{
    $opfs = OPFS::OPFS_RuleS7Au_Del;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_RuleS7Au_Import($host, $content)
{
    $opfs = OPFS::OPFS_RuleS7Au_Import;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_RuleS7Au_Export($host, $content)
{
    $opfs = OPFS::OPFS_RuleS7Au_Export;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_RuleOpcBl_List($host, $content)
{
    $opfs = OPFS::OPFS_RuleOpcBl_List;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_RuleOpcBl_Add($host, $content)
{
    $opfs = OPFS::OPFS_RuleOpcBl_Add;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_RuleOpcBl_Cls($host, $content)
{
    $opfs = OPFS::OPFS_RuleOpcBl_Cls;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_RuleOpcBl_Enable($host, $content)
{
    $opfs = OPFS::OPFS_RuleOpcBl_Enable;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_RuleOpcBl_Disable($host, $content)
{
    $opfs = OPFS::OPFS_RuleOpcBl_Disable;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_RuleOpcBl_Edit($host, $content)
{
    $opfs = OPFS::OPFS_RuleOpcBl_Edit;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_RuleOpcBl_Del($host, $content)
{
    $opfs = OPFS::OPFS_RuleOpcBl_Del;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_RuleOpcBl_Import($host, $content)
{
    $opfs = OPFS::OPFS_RuleOpcBl_Import;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_RuleOpcBl_Export($host, $content)
{
    $opfs = OPFS::OPFS_RuleOpcBl_Export;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_RuleOpcWl_List($host, $content)
{
    $opfs = OPFS::OPFS_RuleOpcWl_List;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_RuleOpcWl_Add($host, $content)
{
    $opfs = OPFS::OPFS_RuleOpcWl_Add;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_RuleOpcWl_Cls($host, $content)
{
    $opfs = OPFS::OPFS_RuleOpcWl_Cls;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_RuleOpcWl_Enable($host, $content)
{
    $opfs = OPFS::OPFS_RuleOpcWl_Enable;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_RuleOpcWl_Disable($host, $content)
{
    $opfs = OPFS::OPFS_RuleOpcWl_Disable;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_RuleOpcWl_Edit($host, $content)
{
    $opfs = OPFS::OPFS_RuleOpcWl_Edit;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_RuleOpcWl_Del($host, $content)
{
    $opfs = OPFS::OPFS_RuleOpcWl_Del;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_RuleOpcWl_Import($host, $content)
{
    $opfs = OPFS::OPFS_RuleOpcWl_Import;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_RuleOpcWl_Export($host, $content)
{
    $opfs = OPFS::OPFS_RuleOpcWl_Export;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_RuleOpcAu_List($host, $content)
{
    $opfs = OPFS::OPFS_RuleOpcAu_List;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_RuleOpcAu_Add($host, $content)
{
    $opfs = OPFS::OPFS_RuleOpcAu_Add;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_RuleOpcAu_Cls($host, $content)
{
    $opfs = OPFS::OPFS_RuleOpcAu_Cls;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_RuleOpcAu_Enable($host, $content)
{
    $opfs = OPFS::OPFS_RuleOpcAu_Enable;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_RuleOpcAu_Disable($host, $content)
{
    $opfs = OPFS::OPFS_RuleOpcAu_Disable;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_RuleOpcAu_Edit($host, $content)
{
    $opfs = OPFS::OPFS_RuleOpcAu_Edit;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_RuleOpcAu_Del($host, $content)
{
    $opfs = OPFS::OPFS_RuleOpcAu_Del;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_RuleOpcAu_Import($host, $content)
{
    $opfs = OPFS::OPFS_RuleOpcAu_Import;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_RuleOpcAu_Export($host, $content)
{
    $opfs = OPFS::OPFS_RuleOpcAu_Export;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_LrnModbus_Start($host, $content)
{
    $opfs = OPFS::OPFS_LrnModbus_Start;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_LrnModbus_End($host, $content)
{
    $opfs = OPFS::OPFS_LrnModbus_End;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_LrnModbus_Edit($host, $content)
{
    $opfs = OPFS::OPFS_LrnModbus_Edit;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_LrnModbus_Del($host, $content)
{
    $opfs = OPFS::OPFS_LrnModbus_Del;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_LrnModbus_Cls($host, $content)
{
    $opfs = OPFS::OPFS_LrnModbus_Cls;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_LrnIec104_Start($host, $content)
{
    $opfs = OPFS::OPFS_LrnIec104_Start;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_LrnIec104_End($host, $content)
{
    $opfs = OPFS::OPFS_LrnIec104_End;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_LrnIec104_Edit($host, $content)
{
    $opfs = OPFS::OPFS_LrnIec104_Edit;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_LrnIec104_Del($host, $content)
{
    $opfs = OPFS::OPFS_LrnIec104_Del;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_LrnIec104_Cls($host, $content)
{
    $opfs = OPFS::OPFS_LrnIec104_Cls;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_LrnDnp3_Start($host, $content)
{
    $opfs = OPFS::OPFS_LrnDnp3_Start;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_LrnDnp3_End($host, $content)
{
    $opfs = OPFS::OPFS_LrnDnp3_End;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_LrnDnp3_Edit($host, $content)
{
    $opfs = OPFS::OPFS_LrnDnp3_Edit;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_LrnDnp3_Del($host, $content)
{
    $opfs = OPFS::OPFS_LrnDnp3_Del;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_LrnDnp3_Cls($host, $content)
{
    $opfs = OPFS::OPFS_LrnDnp3_Cls;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_LrnS7_Start($host, $content)
{
    $opfs = OPFS::OPFS_LrnS7_Start;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_LrnS7_End($host, $content)
{
    $opfs = OPFS::OPFS_LrnS7_End;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_LrnS7_Edit($host, $content)
{
    $opfs = OPFS::OPFS_LrnS7_Edit;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_LrnS7_Del($host, $content)
{
    $opfs = OPFS::OPFS_LrnS7_Del;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_LrnS7_Cls($host, $content)
{
    $opfs = OPFS::OPFS_LrnS7_Cls;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_LrnOpc_Start($host, $content)
{
    $opfs = OPFS::OPFS_LrnOpc_Start;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_LrnOpc_End($host, $content)
{
    $opfs = OPFS::OPFS_LrnOpc_End;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_LrnOpc_Edit($host, $content)
{
    $opfs = OPFS::OPFS_LrnOpc_Edit;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_LrnOpc_Del($host, $content)
{
    $opfs = OPFS::OPFS_LrnOpc_Del;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_LrnOpc_Cls($host, $content)
{
    $opfs = OPFS::OPFS_LrnOpc_Cls;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_LogAll_List($host, $content)
{
    $opfs = OPFS::OPFS_LogAll_List;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_LogAll_Query($host, $content)
{
    $opfs = OPFS::OPFS_LogAll_Query;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_LogAll_Cls($host, $content)
{
    $opfs = OPFS::OPFS_LogAll_Cls;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_LogAll_Del($host, $content)
{
    $opfs = OPFS::OPFS_LogAll_Del;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_LogAll_Export($host, $content)
{
    $opfs = OPFS::OPFS_LogAll_Export;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_LogRuleMac_List($host, $content)
{
    $opfs = OPFS::OPFS_LogRuleMac_List;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_LogRuleMac_Query($host, $content)
{
    $opfs = OPFS::OPFS_LogRuleMac_Query;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_LogRuleMac_Cls($host, $content)
{
    $opfs = OPFS::OPFS_LogRuleMac_Cls;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_LogRuleMac_Del($host, $content)
{
    $opfs = OPFS::OPFS_LogRuleMac_Del;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_LogRuleMac_Export($host, $content)
{
    $opfs = OPFS::OPFS_LogRuleMac_Export;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_LogRuleIp_List($host, $content)
{
    $opfs = OPFS::OPFS_LogRuleIp_List;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_LogRuleIp_Query($host, $content)
{
    $opfs = OPFS::OPFS_LogRuleIp_Query;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_LogRuleIp_Cls($host, $content)
{
    $opfs = OPFS::OPFS_LogRuleIp_Cls;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_LogRuleIp_Del($host, $content)
{
    $opfs = OPFS::OPFS_LogRuleIp_Del;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_LogRuleIp_Export($host, $content)
{
    $opfs = OPFS::OPFS_LogRuleIp_Export;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_LogRuleSz_List($host, $content)
{
    $opfs = OPFS::OPFS_LogRuleSz_List;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_LogRuleSz_Query($host, $content)
{
    $opfs = OPFS::OPFS_LogRuleSz_Query;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_LogRuleSz_Cls($host, $content)
{
    $opfs = OPFS::OPFS_LogRuleSz_Cls;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_LogRuleSz_Del($host, $content)
{
    $opfs = OPFS::OPFS_LogRuleSz_Del;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_LogRuleSz_Export($host, $content)
{
    $opfs = OPFS::OPFS_LogRuleSz_Export;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_LogRuleTcp_List($host, $content)
{
    $opfs = OPFS::OPFS_LogRuleTcp_List;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_LogRuleTcp_Query($host, $content)
{
    $opfs = OPFS::OPFS_LogRuleTcp_Query;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_LogRuleTcp_Cls($host, $content)
{
    $opfs = OPFS::OPFS_LogRuleTcp_Cls;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_LogRuleTcp_Del($host, $content)
{
    $opfs = OPFS::OPFS_LogRuleTcp_Del;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_LogRuleTcp_Export($host, $content)
{
    $opfs = OPFS::OPFS_LogRuleTcp_Export;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_LogRuleUdp_List($host, $content)
{
    $opfs = OPFS::OPFS_LogRuleUdp_List;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_LogRuleUdp_Query($host, $content)
{
    $opfs = OPFS::OPFS_LogRuleUdp_Query;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_LogRuleUdp_Cls($host, $content)
{
    $opfs = OPFS::OPFS_LogRuleUdp_Cls;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_LogRuleUdp_Del($host, $content)
{
    $opfs = OPFS::OPFS_LogRuleUdp_Del;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_LogRuleUdp_Export($host, $content)
{
    $opfs = OPFS::OPFS_LogRuleUdp_Export;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_LogRuleIndWl_List($host, $content)
{
    $opfs = OPFS::OPFS_LogRuleIndWl_List;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_LogRuleIndWl_Query($host, $content)
{
    $opfs = OPFS::OPFS_LogRuleIndWl_Query;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_LogRuleIndWl_Cls($host, $content)
{
    $opfs = OPFS::OPFS_LogRuleIndWl_Cls;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_LogRuleIndWl_Del($host, $content)
{
    $opfs = OPFS::OPFS_LogRuleIndWl_Del;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_LogRuleIndWl_Export($host, $content)
{
    $opfs = OPFS::OPFS_LogRuleIndWl_Export;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_LogRuleIndBl_List($host, $content)
{
    $opfs = OPFS::OPFS_LogRuleIndBl_List;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_LogRuleIndBl_Query($host, $content)
{
    $opfs = OPFS::OPFS_LogRuleIndBl_Query;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_LogRuleIndBl_Cls($host, $content)
{
    $opfs = OPFS::OPFS_LogRuleIndBl_Cls;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_LogRuleIndBl_Del($host, $content)
{
    $opfs = OPFS::OPFS_LogRuleIndBl_Del;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_LogRuleIndBl_Export($host, $content)
{
    $opfs = OPFS::OPFS_LogRuleIndBl_Export;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_LogRuleIndEx_List($host, $content)
{
    $opfs = OPFS::OPFS_LogRuleIndEx_List;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_LogRuleIndEx_Query($host, $content)
{
    $opfs = OPFS::OPFS_LogRuleIndEx_Query;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_LogRuleIndEx_Cls($host, $content)
{
    $opfs = OPFS::OPFS_LogRuleIndEx_Cls;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_LogRuleIndEx_Del($host, $content)
{
    $opfs = OPFS::OPFS_LogRuleIndEx_Del;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_LogRuleIndEx_Export($host, $content)
{
    $opfs = OPFS::OPFS_LogRuleIndEx_Export;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_LogArp_List($host, $content)
{
    $opfs = OPFS::OPFS_LogArp_List;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_LogArp_Query($host, $content)
{
    $opfs = OPFS::OPFS_LogArp_Query;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_LogArp_Cls($host, $content)
{
    $opfs = OPFS::OPFS_LogArp_Cls;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_LogArp_Del($host, $content)
{
    $opfs = OPFS::OPFS_LogArp_Del;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_LogArp_Export($host, $content)
{
    $opfs = OPFS::OPFS_LogArp_Export;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_LogAttack_List($host, $content)
{
    $opfs = OPFS::OPFS_LogAttack_List;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_LogAttack_Query($host, $content)
{
    $opfs = OPFS::OPFS_LogAttack_Query;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_LogAttack_Cls($host, $content)
{
    $opfs = OPFS::OPFS_LogAttack_Cls;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_LogAttack_Del($host, $content)
{
    $opfs = OPFS::OPFS_LogAttack_Del;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_LogAttack_Export($host, $content)
{
    $opfs = OPFS::OPFS_LogAttack_Export;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_LogRun_List($host, $content)
{
    $opfs = OPFS::OPFS_LogRun_List;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_LogRun_Query($host, $content)
{
    $opfs = OPFS::OPFS_LogRun_Query;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_LogRun_Cls($host, $content)
{
    $opfs = OPFS::OPFS_LogRun_Cls;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_LogRun_Del($host, $content)
{
    $opfs = OPFS::OPFS_LogRun_Del;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_LogRun_Export($host, $content)
{
    $opfs = OPFS::OPFS_LogRun_Export;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_LogSys_List($host, $content)
{
    $opfs = OPFS::OPFS_LogSys_List;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_LogSys_Query($host, $content)
{
    $opfs = OPFS::OPFS_LogSys_Query;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_LogSys_Cls($host, $content)
{
    $opfs = OPFS::OPFS_LogSys_Cls;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_LogSys_Del($host, $content)
{
    $opfs = OPFS::OPFS_LogSys_Del;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_LogSys_Export($host, $content)
{
    $opfs = OPFS::OPFS_LogSys_Export;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_Conf_Func($host, $content)
{
    $opfs = OPFS::OPFS_Conf_Func;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_Conf_Warnlevel($host, $content)
{
    $opfs = OPFS::OPFS_Conf_Warnlevel;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

function FFS_Conf_AlarmEmail($host, $content)
{
    $opfs = OPFS::OPFS_Conf_AlarmEmail;
    $content = pack('v', $opfs);
    send_fnc($host, $content);
}

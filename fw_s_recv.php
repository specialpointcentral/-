<?php
require "fw_s_send.php";
/**
 * Created by PhpStorm.
 * User: chenism
 * Date: 2018/3/12
 * Time: 21:04
 */


//C=>S OPC相应回调函数名
$FFC_array = array(
    'FFC_Connect',
    'FFC_Monitor',
    'FFC_Manage_Ret',
    'FFC_Manage_Err',
    'FFC_Manage_ModeSet_Ok',
    'FFC_Manage_ModeSet_Err',
    'FFC_RuleArp_List_Ret',
    'FFC_RuleArp_List_Err',
    'FFC_RuleArp_Add_Ok',
    'FFC_RuleArp_Add_Err',
    'FFC_RuleArp_Enable_Ok',
    'FFC_RuleArp_Enable_Err',
    'FFC_RuleArp_Disable_Ok',
    'FFC_RuleArp_Disable_Err',
    'FFC_RuleArp_Cls_Ok',
    'FFC_RuleArp_Cls_Err',
    'FFC_RuleArp_Edit_Ok',
    'FFC_RuleArp_Edit_Err',
    'FFC_RuleArp_Del_Ok',
    'FFC_RuleArp_Del_Err',
    'FFC_RuleMac_List_Ret',
    'FFC_RuleMac_List_Err',
    'FFC_RuleMac_Add_Ok',
    'FFC_RuleMac_Add_Err',
    'FFC_RuleMac_Cls_Ok',
    'FFC_RuleMac_Cls_Err',
    'FFC_RuleMac_Enable_Ok',
    'FFC_RuleMac_Enable_Err',
    'FFC_RuleMac_Disable_Ok',
    'FFC_RuleMac_Disable_Err',
    'FFC_RuleMac_Edit_Ok',
    'FFC_RuleMac_Edit_Err',
    'FFC_RuleMac_Del_Ok',
    'FFC_RuleMac_Del_Err',
    'FFC_RuleIp_List_Ret',
    'FFC_RuleIp_List_Err',
    'FFC_RuleIp_Add_Ok',
    'FFC_RuleIp_Add_Err',
    'FFC_RuleIp_Cls_Ok',
    'FFC_RuleIp_Cls_Err',
    'FFC_RuleIp_Enable_Ok',
    'FFC_RuleIp_Enable_Err',
    'FFC_RuleIp_Disable_Ok',
    'FFC_RuleIp_Disable_Err',
    'FFC_RuleIp_Edit_Ok',
    'FFC_RuleIp_Edit_Err',
    'FFC_RuleIp_Del_Ok',
    'FFC_RuleIp_Del_Err',
    'FFC_RuleIpAu_List_Ret',
    'FFC_RuleIpAu_List_Err',
    'FFC_RuleIpAu_Add_Ok',
    'FFC_RuleIpAu_Add_Err',
    'FFC_RuleIpAu_Cls_Ok',
    'FFC_RuleIpAu_Cls_Err',
    'FFC_RuleIpAu_Edit_Ok',
    'FFC_RuleIpAu_Edit_Err',
    'FFC_RuleIpAu_Del_Ok',
    'FFC_RuleIpAu_Del_Err',
    'FFC_RuleSzPri_List_Ret',
    'FFC_RuleSzPri_List_Err',
    'FFC_RuleSzPri_Add_Ok',
    'FFC_RuleSzPri_Add_Err',
    'FFC_RuleSzPri_Cls_Ok',
    'FFC_RuleSzPri_Cls_Err',
    'FFC_RuleSzPri_Edit_Ok',
    'FFC_RuleSzPri_Edit_Err',
    'FFC_RuleSzPri_Del_Ok',
    'FFC_RuleSzPri_Del_Err',
    'FFC_RuleSzMac_List_Ret',
    'FFC_RuleSzMac_List_Err',
    'FFC_RuleSzMac_Add_Ok',
    'FFC_RuleSzMac_Add_Err',
    'FFC_RuleSzMac_Cls_Ok',
    'FFC_RuleSzMac_Cls_Err',
    'FFC_RuleSzMac_Enable_Ok',
    'FFC_RuleSzMac_Enable_Err',
    'FFC_RuleSzMac_Disable_Ok',
    'FFC_RuleSzMac_Disable_Err',
    'FFC_RuleSzMac_Edit_Ok',
    'FFC_RuleSzMac_Edit_Err',
    'FFC_RuleSzMac_Del_Ok',
    'FFC_RuleSzMac_Del_Err',
    'FFC_RuleSzIp_List_Ret',
    'FFC_RuleSzIp_List_Err',
    'FFC_RuleSzIp_Add_Ok',
    'FFC_RuleSzIp_Add_Err',
    'FFC_RuleSzIp_Cls_Ok',
    'FFC_RuleSzIp_Cls_Err',
    'FFC_RuleSzIp_Enable_Ok',
    'FFC_RuleSzIp_Enable_Err',
    'FFC_RuleSzIp_Disable_Ok',
    'FFC_RuleSzIp_Disable_Err',
    'FFC_RuleSzIp_Edit_Ok',
    'FFC_RuleSzIp_Edit_Err',
    'FFC_RuleSzIp_Del_Ok',
    'FFC_RuleSzIp_Del_Err',
    'FFC_RuleSzTrans_List_Ret',
    'FFC_RuleSzTrans_List_Err',
    'FFC_RuleSzTrans_Add_Ok',
    'FFC_RuleSzTrans_Add_Err',
    'FFC_RuleSzTrans_Cls_Ok',
    'FFC_RuleSzTrans_Cls_Err',
    'FFC_RuleSzTrans_Enable_Ok',
    'FFC_RuleSzTrans_Enable_Err',
    'FFC_RuleSzTrans_Disable_Ok',
    'FFC_RuleSzTrans_Disable_Err',
    'FFC_RuleSzTrans_Edit_Ok',
    'FFC_RuleSzTrans_Edit_Err',
    'FFC_RuleSzTrans_Del_Ok',
    'FFC_RuleSzTrans_Del_Err',
    'FFC_RuleTcpBl_List_Ret',
    'FFC_RuleTcpBl_List_Err',
    'FFC_RuleTcpBl_Add_Ok',
    'FFC_RuleTcpBl_Add_Err',
    'FFC_RuleTcpBl_Cls_Ok',
    'FFC_RuleTcpBl_Cls_Err',
    'FFC_RuleTcpBl_Enable_Ok',
    'FFC_RuleTcpBl_Enable_Err',
    'FFC_RuleTcpBl_Disable_Ok',
    'FFC_RuleTcpBl_Disable_Err',
    'FFC_RuleTcpBl_Edit_Ok',
    'FFC_RuleTcpBl_Edit_Err',
    'FFC_RuleTcpBl_Del_Ok',
    'FFC_RuleTcpBl_Del_Err',
    'FFC_RuleTcpBl_Import_One_Ok',
    'FFC_RuleTcpBl_Import_One_Err',
    'FFC_RuleTcpBl_Import_All_Ok',
    'FFC_RuleTcpBl_Import_All_Err',
    'FFC_RuleTcpBl_Export_Ret',
    'FFC_RuleTcpBl_Export_Empty',
    'FFC_RuleTcpBl_Export_Err',
    'FFC_RuleTcpWl_List_Ret',
    'FFC_RuleTcpWl_List_Err',
    'FFC_RuleTcpWl_Add_Ok',
    'FFC_RuleTcpWl_Add_Err',
    'FFC_RuleTcpWl_Cls_Ok',
    'FFC_RuleTcpWl_Cls_Err',
    'FFC_RuleTcpWl_Enable_Ok',
    'FFC_RuleTcpWl_Enable_Err',
    'FFC_RuleTcpWl_Disable_Ok',
    'FFC_RuleTcpWl_Disable_Err',
    'FFC_RuleTcpWl_Edit_Ok',
    'FFC_RuleTcpWl_Edit_Err',
    'FFC_RuleTcpWl_Del_Ok',
    'FFC_RuleTcpWl_Del_Err',
    'FFC_RuleTcpWl_Import_One_Ok',
    'FFC_RuleTcpWl_Import_One_Err',
    'FFC_RuleTcpWl_Import_All_Ok',
    'FFC_RuleTcpWl_Import_All_Err',
    'FFC_RuleTcpWl_Export_Ret',
    'FFC_RuleTcpWl_Export_Empty',
    'FFC_RuleTcpWl_Export_Err',
    'FFC_RuleTcpTrust_List_Ret',
    'FFC_RuleTcpTrust_List_Err',
    'FFC_RuleTcpTrust_Add_Ok',
    'FFC_RuleTcpTrust_Add_Err',
    'FFC_RuleTcpTrust_Cls_Ok',
    'FFC_RuleTcpTrust_Cls_Err',
    'FFC_RuleTcpTrust_Enable_Ok',
    'FFC_RuleTcpTrust_Enable_Err',
    'FFC_RuleTcpTrust_Disable_Ok',
    'FFC_RuleTcpTrust_Disable_Err',
    'FFC_RuleTcpTrust_Edit_Ok',
    'FFC_RuleTcpTrust_Edit_Err',
    'FFC_RuleTcpTrust_Del_Ok',
    'FFC_RuleTcpTrust_Del_Err',
    'FFC_RuleTcpTrust_Import_One_Ok',
    'FFC_RuleTcpTrust_Import_One_Err',
    'FFC_RuleTcpTrust_Import_All_Ok',
    'FFC_RuleTcpTrust_Import_All_Err',
    'FFC_RuleTcpTrust_Export_Ret',
    'FFC_RuleTcpTrust_Export_Empty',
    'FFC_RuleTcpTrust_Export_Err',
    'FFC_RuleTcpAu_List_Ret',
    'FFC_RuleTcpAu_List_Err',
    'FFC_RuleTcpAu_Add_Ok',
    'FFC_RuleTcpAu_Add_Err',
    'FFC_RuleTcpAu_Cls_Ok',
    'FFC_RuleTcpAu_Cls_Err',
    'FFC_RuleTcpAu_Enable_Ok',
    'FFC_RuleTcpAu_Enable_Err',
    'FFC_RuleTcpAu_Disable_Ok',
    'FFC_RuleTcpAu_Disable_Err',
    'FFC_RuleTcpAu_Edit_Ok',
    'FFC_RuleTcpAu_Edit_Err',
    'FFC_RuleTcpAu_Del_Ok',
    'FFC_RuleTcpAu_Del_Err',
    'FFC_RuleTcpAu_Import_One_Ok',
    'FFC_RuleTcpAu_Import_One_Err',
    'FFC_RuleTcpAu_Import_All_Ok',
    'FFC_RuleTcpAu_Import_All_Err',
    'FFC_RuleTcpAu_Export_Ret',
    'FFC_RuleTcpAu_Export_Empty',
    'FFC_RuleTcpAu_Export_Err',
    'FFC_RuleUdpBl_List_Ret',
    'FFC_RuleUdpBl_List_Err',
    'FFC_RuleUdpBl_Add_Ok',
    'FFC_RuleUdpBl_Add_Err',
    'FFC_RuleUdpBl_Cls_Ok',
    'FFC_RuleUdpBl_Cls_Err',
    'FFC_RuleUdpBl_Enable_Ok',
    'FFC_RuleUdpBl_Enable_Err',
    'FFC_RuleUdpBl_Disable_Ok',
    'FFC_RuleUdpBl_Disable_Err',
    'FFC_RuleUdpBl_Edit_Ok',
    'FFC_RuleUdpBl_Edit_Err',
    'FFC_RuleUdpBl_Del_Ok',
    'FFC_RuleUdpBl_Del_Err',
    'FFC_RuleUdpBl_Import_One_Ok',
    'FFC_RuleUdpBl_Import_One_Err',
    'FFC_RuleUdpBl_Import_All_Ok',
    'FFC_RuleUdpBl_Import_All_Err',
    'FFC_RuleUdpBl_Export_Ret',
    'FFC_RuleUdpBl_Export_Empty',
    'FFC_RuleUdpBl_Export_Err',
    'FFC_RuleUdpWl_List_Ret',
    'FFC_RuleUdpWl_List_Err',
    'FFC_RuleUdpWl_Add_Ok',
    'FFC_RuleUdpWl_Add_Err',
    'FFC_RuleUdpWl_Cls_Ok',
    'FFC_RuleUdpWl_Cls_Err',
    'FFC_RuleUdpWl_Enable_Ok',
    'FFC_RuleUdpWl_Enable_Err',
    'FFC_RuleUdpWl_Disable_Ok',
    'FFC_RuleUdpWl_Disable_Err',
    'FFC_RuleUdpWl_Edit_Ok',
    'FFC_RuleUdpWl_Edit_Err',
    'FFC_RuleUdpWl_Del_Ok',
    'FFC_RuleUdpWl_Del_Err',
    'FFC_RuleUdpWl_Import_One_Ok',
    'FFC_RuleUdpWl_Import_One_Err',
    'FFC_RuleUdpWl_Import_All_Ok',
    'FFC_RuleUdpWl_Import_All_Err',
    'FFC_RuleUdpWl_Export_Ret',
    'FFC_RuleUdpWl_Export_Empty',
    'FFC_RuleUdpWl_Export_Err',
    'FFC_RuleUdpTrust_List_Ret',
    'FFC_RuleUdpTrust_List_Err',
    'FFC_RuleUdpTrust_Add_Ok',
    'FFC_RuleUdpTrust_Add_Err',
    'FFC_RuleUdpTrust_Cls_Ok',
    'FFC_RuleUdpTrust_Cls_Err',
    'FFC_RuleUdpTrust_Enable_Ok',
    'FFC_RuleUdpTrust_Enable_Err',
    'FFC_RuleUdpTrust_Disable_Ok',
    'FFC_RuleUdpTrust_Disable_Err',
    'FFC_RuleUdpTrust_Edit_Ok',
    'FFC_RuleUdpTrust_Edit_Err',
    'FFC_RuleUdpTrust_Del_Ok',
    'FFC_RuleUdpTrust_Del_Err',
    'FFC_RuleUdpTrust_Import_One_Ok',
    'FFC_RuleUdpTrust_Import_One_Err',
    'FFC_RuleUdpTrust_Import_All_Ok',
    'FFC_RuleUdpTrust_Import_All_Err',
    'FFC_RuleUdpTrust_Export_Ret',
    'FFC_RuleUdpTrust_Export_Empty',
    'FFC_RuleUdpTrust_Export_Err',
    'FFC_RuleUdpAu_List_Ret',
    'FFC_RuleUdpAu_List_Err',
    'FFC_RuleUdpAu_Add_Ok',
    'FFC_RuleUdpAu_Add_Err',
    'FFC_RuleUdpAu_Cls_Ok',
    'FFC_RuleUdpAu_Cls_Err',
    'FFC_RuleUdpAu_Enable_Ok',
    'FFC_RuleUdpAu_Enable_Err',
    'FFC_RuleUdpAu_Disable_Ok',
    'FFC_RuleUdpAu_Disable_Err',
    'FFC_RuleUdpAu_Edit_Ok',
    'FFC_RuleUdpAu_Edit_Err',
    'FFC_RuleUdpAu_Del_Ok',
    'FFC_RuleUdpAu_Del_Err',
    'FFC_RuleUdpAu_Import_One_Ok',
    'FFC_RuleUdpAu_Import_One_Err',
    'FFC_RuleUdpAu_Import_All_Ok',
    'FFC_RuleUdpAu_Import_All_Err',
    'FFC_RuleUdpAu_Export_Ret',
    'FFC_RuleUdpAu_Export_Empty',
    'FFC_RuleUdpAu_Export_Err',
    'FFC_RuleModbusBl_List_Ret',
    'FFC_RuleModbusBl_List_Err',
    'FFC_RuleModbusBl_Add_Ok',
    'FFC_RuleModbusBl_Add_Err',
    'FFC_RuleModbusBl_Cls_Ok',
    'FFC_RuleModbusBl_Cls_Err',
    'FFC_RuleModbusBl_Enable_Ok',
    'FFC_RuleModbusBl_Enable_Err',
    'FFC_RuleModbusBl_Disable_Ok',
    'FFC_RuleModbusBl_Disable_Err',
    'FFC_RuleModbusBl_Edit_Ok',
    'FFC_RuleModbusBl_Edit_Err',
    'FFC_RuleModbusBl_Del_Ok',
    'FFC_RuleModbusBl_Del_Err',
    'FFC_RuleModbusBl_Import_One_Ok',
    'FFC_RuleModbusBl_Import_One_Err',
    'FFC_RuleModbusBl_Import_All_Ok',
    'FFC_RuleModbusBl_Import_All_Err',
    'FFC_RuleModbusBl_Export_Ret',
    'FFC_RuleModbusBl_Export_Empty',
    'FFC_RuleModbusBl_Export_Err',
    'FFC_RuleModbusWl_List_Ret',
    'FFC_RuleModbusWl_List_Err',
    'FFC_RuleModbusWl_Add_Ok',
    'FFC_RuleModbusWl_Add_Err',
    'FFC_RuleModbusWl_Cls_Ok',
    'FFC_RuleModbusWl_Cls_Err',
    'FFC_RuleModbusWl_Enable_Ok',
    'FFC_RuleModbusWl_Enable_Err',
    'FFC_RuleModbusWl_Disable_Ok',
    'FFC_RuleModbusWl_Disable_Err',
    'FFC_RuleModbusWl_Edit_Ok',
    'FFC_RuleModbusWl_Edit_Err',
    'FFC_RuleModbusWl_Del_Ok',
    'FFC_RuleModbusWl_Del_Err',
    'FFC_RuleModbusWl_Import_One_Ok',
    'FFC_RuleModbusWl_Import_One_Err',
    'FFC_RuleModbusWl_Import_All_Ok',
    'FFC_RuleModbusWl_Import_All_Err',
    'FFC_RuleModbusWl_Export_Ret',
    'FFC_RuleModbusWl_Export_Empty',
    'FFC_RuleModbusWl_Export_Err',
    'FFC_RuleModbusAu_List_Ret',
    'FFC_RuleModbusAu_List_Err',
    'FFC_RuleModbusAu_Add_Ok',
    'FFC_RuleModbusAu_Add_Err',
    'FFC_RuleModbusAu_Cls_Ok',
    'FFC_RuleModbusAu_Cls_Err',
    'FFC_RuleModbusAu_Enable_Ok',
    'FFC_RuleModbusAu_Enable_Err',
    'FFC_RuleModbusAu_Disable_Ok',
    'FFC_RuleModbusAu_Disable_Err',
    'FFC_RuleModbusAu_Edit_Ok',
    'FFC_RuleModbusAu_Edit_Err',
    'FFC_RuleModbusAu_Del_Ok',
    'FFC_RuleModbusAu_Del_Err',
    'FFC_RuleModbusAu_Import_One_Ok',
    'FFC_RuleModbusAu_Import_One_Err',
    'FFC_RuleModbusAu_Import_All_Ok',
    'FFC_RuleModbusAu_Import_All_Err',
    'FFC_RuleModbusAu_Export_Ret',
    'FFC_RuleModbusAu_Export_Empty',
    'FFC_RuleModbusAu_Export_Err',
    'FFC_RuleIec104Bl_List_Ret',
    'FFC_RuleIec104Bl_List_Err',
    'FFC_RuleIec104Bl_Add_Ok',
    'FFC_RuleIec104Bl_Add_Err',
    'FFC_RuleIec104Bl_Cls_Ok',
    'FFC_RuleIec104Bl_Cls_Err',
    'FFC_RuleIec104Bl_Enable_Ok',
    'FFC_RuleIec104Bl_Enable_Err',
    'FFC_RuleIec104Bl_Disable_Ok',
    'FFC_RuleIec104Bl_Disable_Err',
    'FFC_RuleIec104Bl_Edit_Ok',
    'FFC_RuleIec104Bl_Edit_Err',
    'FFC_RuleIec104Bl_Del_Ok',
    'FFC_RuleIec104Bl_Del_Err',
    'FFC_RuleIec104Bl_Import_One_Ok',
    'FFC_RuleIec104Bl_Import_One_Err',
    'FFC_RuleIec104Bl_Import_All_Ok',
    'FFC_RuleIec104Bl_Import_All_Err',
    'FFC_RuleIec104Bl_Export_Ret',
    'FFC_RuleIec104Bl_Export_Empty',
    'FFC_RuleIec104Bl_Export_Err',
    'FFC_RuleIec104Wl_List_Ret',
    'FFC_RuleIec104Wl_List_Err',
    'FFC_RuleIec104Wl_Add_Ok',
    'FFC_RuleIec104Wl_Add_Err',
    'FFC_RuleIec104Wl_Cls_Ok',
    'FFC_RuleIec104Wl_Cls_Err',
    'FFC_RuleIec104Wl_Enable_Ok',
    'FFC_RuleIec104Wl_Enable_Err',
    'FFC_RuleIec104Wl_Disable_Ok',
    'FFC_RuleIec104Wl_Disable_Err',
    'FFC_RuleIec104Wl_Edit_Ok',
    'FFC_RuleIec104Wl_Edit_Err',
    'FFC_RuleIec104Wl_Del_Ok',
    'FFC_RuleIec104Wl_Del_Err',
    'FFC_RuleIec104Wl_Import_One_Ok',
    'FFC_RuleIec104Wl_Import_One_Err',
    'FFC_RuleIec104Wl_Import_All_Ok',
    'FFC_RuleIec104Wl_Import_All_Err',
    'FFC_RuleIec104Wl_Export_Ret',
    'FFC_RuleIec104Wl_Export_Empty',
    'FFC_RuleIec104Wl_Export_Err',
    'FFC_RuleIec104Au_List_Ret',
    'FFC_RuleIec104Au_List_Err',
    'FFC_RuleIec104Au_Add_Ok',
    'FFC_RuleIec104Au_Add_Err',
    'FFC_RuleIec104Au_Cls_Ok',
    'FFC_RuleIec104Au_Cls_Err',
    'FFC_RuleIec104Au_Enable_Ok',
    'FFC_RuleIec104Au_Enable_Err',
    'FFC_RuleIec104Au_Disable_Ok',
    'FFC_RuleIec104Au_Disable_Err',
    'FFC_RuleIec104Au_Edit_Ok',
    'FFC_RuleIec104Au_Edit_Err',
    'FFC_RuleIec104Au_Del_Ok',
    'FFC_RuleIec104Au_Del_Err',
    'FFC_RuleIec104Au_Import_One_Ok',
    'FFC_RuleIec104Au_Import_One_Err',
    'FFC_RuleIec104Au_Import_All_Ok',
    'FFC_RuleIec104Au_Import_All_Err',
    'FFC_RuleIec104Au_Export_Ret',
    'FFC_RuleIec104Au_Export_Empty',
    'FFC_RuleIec104Au_Export_Err',
    'FFC_RuleDnpBl_List_Ret',
    'FFC_RuleDnpBl_List_Err',
    'FFC_RuleDnpBl_Add_Ok',
    'FFC_RuleDnpBl_Add_Err',
    'FFC_RuleDnpBl_Cls_Ok',
    'FFC_RuleDnpBl_Cls_Err',
    'FFC_RuleDnpBl_Enable_Ok',
    'FFC_RuleDnpBl_Enable_Err',
    'FFC_RuleDnpBl_Disable_Ok',
    'FFC_RuleDnpBl_Disable_Err',
    'FFC_RuleDnpBl_Edit_Ok',
    'FFC_RuleDnpBl_Edit_Err',
    'FFC_RuleDnpBl_Del_Ok',
    'FFC_RuleDnpBl_Del_Err',
    'FFC_RuleDnpBl_Import_One_Ok',
    'FFC_RuleDnpBl_Import_One_Err',
    'FFC_RuleDnpBl_Import_All_Ok',
    'FFC_RuleDnpBl_Import_All_Err',
    'FFC_RuleDnpBl_Export_Ret',
    'FFC_RuleDnpBl_Export_Empty',
    'FFC_RuleDnpBl_Export_Err',
    'FFC_RuleDnpWl_List_Ret',
    'FFC_RuleDnpWl_List_Err',
    'FFC_RuleDnpWl_Add_Ok',
    'FFC_RuleDnpWl_Add_Err',
    'FFC_RuleDnpWl_Cls_Ok',
    'FFC_RuleDnpWl_Cls_Err',
    'FFC_RuleDnpWl_Enable_Ok',
    'FFC_RuleDnpWl_Enable_Err',
    'FFC_RuleDnpWl_Disable_Ok',
    'FFC_RuleDnpWl_Disable_Err',
    'FFC_RuleDnpWl_Edit_Ok',
    'FFC_RuleDnpWl_Edit_Err',
    'FFC_RuleDnpWl_Del_Ok',
    'FFC_RuleDnpWl_Del_Err',
    'FFC_RuleDnpWl_Import_One_Ok',
    'FFC_RuleDnpWl_Import_One_Err',
    'FFC_RuleDnpWl_Import_All_Ok',
    'FFC_RuleDnpWl_Import_All_Err',
    'FFC_RuleDnpWl_Export_Ret',
    'FFC_RuleDnpWl_Export_Empty',
    'FFC_RuleDnpWl_Export_Err',
    'FFC_RuleDnpAu_List_Ret',
    'FFC_RuleDnpAu_List_Err',
    'FFC_RuleDnpAu_Add_Ok',
    'FFC_RuleDnpAu_Add_Err',
    'FFC_RuleDnpAu_Cls_Ok',
    'FFC_RuleDnpAu_Cls_Err',
    'FFC_RuleDnpAu_Enable_Ok',
    'FFC_RuleDnpAu_Enable_Err',
    'FFC_RuleDnpAu_Disable_Ok',
    'FFC_RuleDnpAu_Disable_Err',
    'FFC_RuleDnpAu_Edit_Ok',
    'FFC_RuleDnpAu_Edit_Err',
    'FFC_RuleDnpAu_Del_Ok',
    'FFC_RuleDnpAu_Del_Err',
    'FFC_RuleDnpAu_Import_One_Ok',
    'FFC_RuleDnpAu_Import_One_Err',
    'FFC_RuleDnpAu_Import_All_Ok',
    'FFC_RuleDnpAu_Import_All_Err',
    'FFC_RuleDnpAu_Export_Ret',
    'FFC_RuleDnpAu_Export_Empty',
    'FFC_RuleDnpAu_Export_Err',
    'FFC_RuleS7Bl_List_Ret',
    'FFC_RuleS7Bl_List_Err',
    'FFC_RuleS7Bl_Add_Ok',
    'FFC_RuleS7Bl_Add_Err',
    'FFC_RuleS7Bl_Cls_Ok',
    'FFC_RuleS7Bl_Cls_Err',
    'FFC_RuleS7Bl_Enable_Ok',
    'FFC_RuleS7Bl_Enable_Err',
    'FFC_RuleS7Bl_Disable_Ok',
    'FFC_RuleS7Bl_Disable_Err',
    'FFC_RuleS7Bl_Edit_Ok',
    'FFC_RuleS7Bl_Edit_Err',
    'FFC_RuleS7Bl_Del_Ok',
    'FFC_RuleS7Bl_Del_Err',
    'FFC_RuleS7Bl_Import_One_Ok',
    'FFC_RuleS7Bl_Import_One_Err',
    'FFC_RuleS7Bl_Import_All_Ok',
    'FFC_RuleS7Bl_Import_All_Err',
    'FFC_RuleS7Bl_Export_Ret',
    'FFC_RuleS7Bl_Export_Empty',
    'FFC_RuleS7Bl_Export_Err',
    'FFC_RuleS7Wl_List_Ret',
    'FFC_RuleS7Wl_List_Err',
    'FFC_RuleS7Wl_Add_Ok',
    'FFC_RuleS7Wl_Add_Err',
    'FFC_RuleS7Wl_Cls_Ok',
    'FFC_RuleS7Wl_Cls_Err',
    'FFC_RuleS7Wl_Enable_Ok',
    'FFC_RuleS7Wl_Enable_Err',
    'FFC_RuleS7Wl_Disable_Ok',
    'FFC_RuleS7Wl_Disable_Err',
    'FFC_RuleS7Wl_Edit_Ok',
    'FFC_RuleS7Wl_Edit_Err',
    'FFC_RuleS7Wl_Del_Ok',
    'FFC_RuleS7Wl_Del_Err',
    'FFC_RuleS7Wl_Import_One_Ok',
    'FFC_RuleS7Wl_Import_One_Err',
    'FFC_RuleS7Wl_Import_All_Ok',
    'FFC_RuleS7Wl_Import_All_Err',
    'FFC_RuleS7Wl_Export_Ret',
    'FFC_RuleS7Wl_Export_Empty',
    'FFC_RuleS7Wl_Export_Err',
    'FFC_RuleS7Au_List_Ret',
    'FFC_RuleS7Au_List_Err',
    'FFC_RuleS7Au_Add_Ok',
    'FFC_RuleS7Au_Add_Err',
    'FFC_RuleS7Au_Cls_Ok',
    'FFC_RuleS7Au_Cls_Err',
    'FFC_RuleS7Au_Enable_Ok',
    'FFC_RuleS7Au_Enable_Err',
    'FFC_RuleS7Au_Disable_Ok',
    'FFC_RuleS7Au_Disable_Err',
    'FFC_RuleS7Au_Edit_Ok',
    'FFC_RuleS7Au_Edit_Err',
    'FFC_RuleS7Au_Del_Ok',
    'FFC_RuleS7Au_Del_Err',
    'FFC_RuleS7Au_Import_One_Ok',
    'FFC_RuleS7Au_Import_One_Err',
    'FFC_RuleS7Au_Import_All_Ok',
    'FFC_RuleS7Au_Import_All_Err',
    'FFC_RuleS7Au_Export_Ret',
    'FFC_RuleS7Au_Export_Empty',
    'FFC_RuleS7Au_Export_Err',
    'FFC_RuleOpcBl_List_Ret',
    'FFC_RuleOpcBl_List_Err',
    'FFC_RuleOpcBl_Add_Ok',
    'FFC_RuleOpcBl_Add_Err',
    'FFC_RuleOpcBl_Cls_Ok',
    'FFC_RuleOpcBl_Cls_Err',
    'FFC_RuleOpcBl_Enable_Ok',
    'FFC_RuleOpcBl_Enable_Err',
    'FFC_RuleOpcBl_Disable_Ok',
    'FFC_RuleOpcBl_Disable_Err',
    'FFC_RuleOpcBl_Edit_Ok',
    'FFC_RuleOpcBl_Edit_Err',
    'FFC_RuleOpcBl_Del_Ok',
    'FFC_RuleOpcBl_Del_Err',
    'FFC_RuleOpcBl_Import_One_Ok',
    'FFC_RuleOpcBl_Import_One_Err',
    'FFC_RuleOpcBl_Import_All_Ok',
    'FFC_RuleOpcBl_Import_All_Err',
    'FFC_RuleOpcBl_Export_Ret',
    'FFC_RuleOpcBl_Export_Empty',
    'FFC_RuleOpcBl_Export_Err',
    'FFC_RuleOpcWl_List_Ret',
    'FFC_RuleOpcWl_List_Err',
    'FFC_RuleOpcWl_Add_Ok',
    'FFC_RuleOpcWl_Add_Err',
    'FFC_RuleOpcWl_Cls_Ok',
    'FFC_RuleOpcWl_Cls_Err',
    'FFC_RuleOpcWl_Enable_Ok',
    'FFC_RuleOpcWl_Enable_Err',
    'FFC_RuleOpcWl_Disable_Ok',
    'FFC_RuleOpcWl_Disable_Err',
    'FFC_RuleOpcWl_Edit_Ok',
    'FFC_RuleOpcWl_Edit_Err',
    'FFC_RuleOpcWl_Del_Ok',
    'FFC_RuleOpcWl_Del_Err',
    'FFC_RuleOpcWl_Import_One_Ok',
    'FFC_RuleOpcWl_Import_One_Err',
    'FFC_RuleOpcWl_Import_All_Ok',
    'FFC_RuleOpcWl_Import_All_Err',
    'FFC_RuleOpcWl_Export_Ret',
    'FFC_RuleOpcWl_Export_Empty',
    'FFC_RuleOpcWl_Export_Err',
    'FFC_RuleOpcAu_List_Ret',
    'FFC_RuleOpcAu_List_Err',
    'FFC_RuleOpcAu_Add_Ok',
    'FFC_RuleOpcAu_Add_Err',
    'FFC_RuleOpcAu_Cls_Ok',
    'FFC_RuleOpcAu_Cls_Err',
    'FFC_RuleOpcAu_Enable_Ok',
    'FFC_RuleOpcAu_Enable_Err',
    'FFC_RuleOpcAu_Disable_Ok',
    'FFC_RuleOpcAu_Disable_Err',
    'FFC_RuleOpcAu_Edit_Ok',
    'FFC_RuleOpcAu_Edit_Err',
    'FFC_RuleOpcAu_Del_Ok',
    'FFC_RuleOpcAu_Del_Err',
    'FFC_RuleOpcAu_Import_One_Ok',
    'FFC_RuleOpcAu_Import_One_Err',
    'FFC_RuleOpcAu_Import_All_Ok',
    'FFC_RuleOpcAu_Import_All_Err',
    'FFC_RuleOpcAu_Export_Ret',
    'FFC_RuleOpcAu_Export_Empty',
    'FFC_RuleOpcAu_Export_Err',
    'FFC_LrnModbus_Start_Ok',
    'FFC_LrnModbus_Start_Err',
    'FFC_LrnModbus_End_Ok',
    'FFC_LrnModbus_End_Err',
    'FFC_LrnModbus_Edit_Ok',
    'FFC_LrnModbus_Edit_Err',
    'FFC_LrnModbus_Del_Ok',
    'FFC_LrnModbus_Del_Err',
    'FFC_LrnModbus_Cls_Ok',
    'FFC_LrnModbus_Cls_Err',
    'FFC_LrnIec104_Start_Ok',
    'FFC_LrnIec104_Start_Err',
    'FFC_LrnIec104_End_Ok',
    'FFC_LrnIec104_End_Err',
    'FFC_LrnIec104_Edit_Ok',
    'FFC_LrnIec104_Edit_Err',
    'FFC_LrnIec104_Del_Ok',
    'FFC_LrnIec104_Del_Err',
    'FFC_LrnIec104_Cls_Ok',
    'FFC_LrnIec104_Cls_Err',
    'FFC_LrnDnp3_Start_Ok',
    'FFC_LrnDnp3_Start_Err',
    'FFC_LrnDnp3_End_Ok',
    'FFC_LrnDnp3_End_Err',
    'FFC_LrnDnp3_Edit_Ok',
    'FFC_LrnDnp3_Edit_Err',
    'FFC_LrnDnp3_Del_Ok',
    'FFC_LrnDnp3_Del_Err',
    'FFC_LrnDnp3_Cls_Ok',
    'FFC_LrnDnp3_Cls_Err',
    'FFC_LrnS7_Start_Ok',
    'FFC_LrnS7_Start_Err',
    'FFC_LrnS7_End_Ok',
    'FFC_LrnS7_End_Err',
    'FFC_LrnS7_Edit_Ok',
    'FFC_LrnS7_Edit_Err',
    'FFC_LrnS7_Del_Ok',
    'FFC_LrnS7_Del_Err',
    'FFC_LrnS7_Cls_Ok',
    'FFC_LrnS7_Cls_Err',
    'FFC_LrnOpc_Start_Ok',
    'FFC_LrnOpc_Start_Err',
    'FFC_LrnOpc_End_Ok',
    'FFC_LrnOpc_End_Err',
    'FFC_LrnOpc_Edit_Ok',
    'FFC_LrnOpc_Edit_Err',
    'FFC_LrnOpc_Del_Ok',
    'FFC_LrnOpc_Del_Err',
    'FFC_LrnOpc_Cls_Ok',
    'FFC_LrnOpc_Cls_Err',
    'FFC_LogAll_List_Ret',
    'FFC_LogAll_List_Err',
    'FFC_LogAll_Query_Ret',
    'FFC_LogAll_Query_Err',
    'FFC_LogAll_Cls_Ok',
    'FFC_LogAll_Cls_Err',
    'FFC_LogAll_Del_Ok',
    'FFC_LogAll_Del_Err',
    'FFC_LogAll_Export_Ret',
    'FFC_LogAll_Export_Empty',
    'FFC_LogAll_Export_Err',
    'FFC_LogRuleMac_List_Ret',
    'FFC_LogRuleMac_List_Err',
    'FFC_LogRuleMac_Query_Ret',
    'FFC_LogRuleMac_Query_Err',
    'FFC_LogRuleMac_Cls_Ok',
    'FFC_LogRuleMac_Cls_Err',
    'FFC_LogRuleMac_Del_Ok',
    'FFC_LogRuleMac_Del_Err',
    'FFC_LogRuleMac_Export_Ret',
    'FFC_LogRuleMac_Export_Empty',
    'FFC_LogRuleMac_Export_Err',
    'FFC_LogRuleIp_List_Ret',
    'FFC_LogRuleIp_List_Err',
    'FFC_LogRuleIp_Query_Ret',
    'FFC_LogRuleIp_Query_Err',
    'FFC_LogRuleIp_Cls_Ok',
    'FFC_LogRuleIp_Cls_Err',
    'FFC_LogRuleIp_Del_Ok',
    'FFC_LogRuleIp_Del_Err',
    'FFC_LogRuleIp_Export_Ret',
    'FFC_LogRuleIp_Export_Empty',
    'FFC_LogRuleIp_Export_Err',
    'FFC_LogRuleSz_List_Ret',
    'FFC_LogRuleSz_List_Err',
    'FFC_LogRuleSz_Query_Ret',
    'FFC_LogRuleSz_Query_Err',
    'FFC_LogRuleSz_Cls_Ok',
    'FFC_LogRuleSz_Cls_Err',
    'FFC_LogRuleSz_Del_Ok',
    'FFC_LogRuleSz_Del_Err',
    'FFC_LogRuleSz_Export_Ret',
    'FFC_LogRuleSz_Export_Empty',
    'FFC_LogRuleSz_Export_Err',
    'FFC_LogRuleTcp_List_Ret',
    'FFC_LogRuleTcp_List_Err',
    'FFC_LogRuleTcp_Query_Ret',
    'FFC_LogRuleTcp_Query_Err',
    'FFC_LogRuleTcp_Cls_Ok',
    'FFC_LogRuleTcp_Cls_Err',
    'FFC_LogRuleTcp_Del_Ok',
    'FFC_LogRuleTcp_Del_Err',
    'FFC_LogRuleTcp_Export_Ret',
    'FFC_LogRuleTcp_Export_Empty',
    'FFC_LogRuleTcp_Export_Err',
    'FFC_LogRuleUdp_List_Ret',
    'FFC_LogRuleUdp_List_Err',
    'FFC_LogRuleUdp_Query_Ret',
    'FFC_LogRuleUdp_Query_Err',
    'FFC_LogRuleUdp_Cls_Ok',
    'FFC_LogRuleUdp_Cls_Err',
    'FFC_LogRuleUdp_Del_Ok',
    'FFC_LogRuleUdp_Del_Err',
    'FFC_LogRuleUdp_Export_Ret',
    'FFC_LogRuleUdp_Export_Empty',
    'FFC_LogRuleUdp_Export_Err',
    'FFC_LogRuleIndWl_List_Ret',
    'FFC_LogRuleIndWl_List_Err',
    'FFC_LogRuleIndWl_Query_Ret',
    'FFC_LogRuleIndWl_Query_Err',
    'FFC_LogRuleIndWl_Cls_Ok',
    'FFC_LogRuleIndWl_Cls_Err',
    'FFC_LogRuleIndWl_Del_Ok',
    'FFC_LogRuleIndWl_Del_Err',
    'FFC_LogRuleIndWl_Export_Ret',
    'FFC_LogRuleIndWl_Export_Empty',
    'FFC_LogRuleIndWl_Export_Err',
    'FFC_LogRuleIndBl_List_Ret',
    'FFC_LogRuleIndBl_List_Err',
    'FFC_LogRuleIndBl_Query_Ret',
    'FFC_LogRuleIndBl_Query_Err',
    'FFC_LogRuleIndBl_Cls_Ok',
    'FFC_LogRuleIndBl_Cls_Err',
    'FFC_LogRuleIndBl_Del_Ok',
    'FFC_LogRuleIndBl_Del_Err',
    'FFC_LogRuleIndBl_Export_Ret',
    'FFC_LogRuleIndBl_Export_Empty',
    'FFC_LogRuleIndBl_Export_Err',
    'FFC_LogRuleIndEx_List_Ret',
    'FFC_LogRuleIndEx_List_Err',
    'FFC_LogRuleIndEx_Query_Ret',
    'FFC_LogRuleIndEx_Query_Err',
    'FFC_LogRuleIndEx_Cls_Ok',
    'FFC_LogRuleIndEx_Cls_Err',
    'FFC_LogRuleIndEx_Del_Ok',
    'FFC_LogRuleIndEx_Del_Err',
    'FFC_LogRuleIndEx_Export_Ret',
    'FFC_LogRuleIndEx_Export_Empty',
    'FFC_LogRuleIndEx_Export_Err',
    'FFC_LogArp_List_Ret',
    'FFC_LogArp_List_Err',
    'FFC_LogArp_Query_Ret',
    'FFC_LogArp_Query_Err',
    'FFC_LogArp_Cls_Ok',
    'FFC_LogArp_Cls_Err',
    'FFC_LogArp_Del_Ok',
    'FFC_LogArp_Del_Err',
    'FFC_LogArp_Export_Ret',
    'FFC_LogArp_Export_Empty',
    'FFC_LogArp_Export_Err',
    'FFC_LogAttack_List_Ret',
    'FFC_LogAttack_List_Err',
    'FFC_LogAttack_Query_Ret',
    'FFC_LogAttack_Query_Err',
    'FFC_LogAttack_Cls_Ok',
    'FFC_LogAttack_Cls_Err',
    'FFC_LogAttack_Del_Ok',
    'FFC_LogAttack_Del_Err',
    'FFC_LogAttack_Export_Ret',
    'FFC_LogAttack_Export_Empty',
    'FFC_LogAttack_Export_Err',
    'FFC_LogRun_List_Ret',
    'FFC_LogRun_List_Err',
    'FFC_LogRun_Query_Ret',
    'FFC_LogRun_Query_Err',
    'FFC_LogRun_Cls_Ok',
    'FFC_LogRun_Cls_Err',
    'FFC_LogRun_Del_Ok',
    'FFC_LogRun_Del_Err',
    'FFC_LogRun_Export_Ret',
    'FFC_LogRun_Export_Empty',
    'FFC_LogRun_Export_Err',
    'FFC_LogSys_List_Ret',
    'FFC_LogSys_List_Err',
    'FFC_LogSys_Query_Ret',
    'FFC_LogSys_Query_Err',
    'FFC_LogSys_Cls_Ok',
    'FFC_LogSys_Cls_Err',
    'FFC_LogSys_Del_Ok',
    'FFC_LogSys_Del_Err',
    'FFC_LogSys_Export_Ret',
    'FFC_LogSys_Export_Empty',
    'FFC_LogSys_Export_Err',
    'FFC_Conf_Func_Ok',
    'FFC_Conf_Func_Err',
    'FFC_Conf_Warnlevel_Ok',
    'FFC_Conf_Warnlevel_Err',
    'FFC_Conf_AlermEmail_Ok',
    'FFC_Conf_AlermEmail_Err'
);
//>==========================================================================================
/**
 * 设备上线
 * @param $host
 * @param $content
 */
function FFC_Connect($host, $content)
{
    require_once "function.php";
    //get the pack and we will unpack the $content
    $get = unpack("S1opcode/a8deviceID/S1gateWayNameLen", $content);
    $opCode = $get["opcode"];//操作码
    $deviceID = $get["deviceID"];//设备编号
    $gateWayNameLen = (int)$get["gateWayNameLen"];//网关名长度
    $otherContent = substr($content, 12);//throw the other part
    $get = unpack("a" . $gateWayNameLen . "gataWayName/S1workMode/S1CPURate/S1memoryRate/L1alertNumber", $otherContent);
    $gataWayName = $get["gataWayName"];//网关名
    $workMode = $get["workMode"];//工作模式
    $CPURate = $get["CPURate"];//CPU占用率
    $memoryRate = $get["memoryRate"];//内存占用
    $alertNumber = $get["alertNumber"];//告警数量
    $userdate = date("Y-m-d H:i:s", time());//现在时间
    //TODO 工作模式两次显示，暂时不处理第二次

    //TODO 判断网关名是否重复，重复则在网关名后添加"新"
    $sql = "SELECT COUNT(*) FROM `device` WHERE `name` = '" . $gataWayName . "'";
    $result = DB_query($sql, "fw");


    //更新数据库，插入
    //TODO 因为分组信息不知道，采用默认值
    $sql = "INSERT INTO `device` (`num`,`name`,`mode`,`warn`,`lasttime`) 
            VALUES 
            ('" . $deviceID . "','" . $gataWayName . "','" . $workMode . "','" . $alertNumber . "','" . $userdate . "')";
    DB_query($sql, "fw");//insert the data

    echo "FFC_Connect                                ";
}

function FFC_Monitor($host, $content)
{
    echo "FFC_Monitor                                ";
}

function FFC_Manage_Ret($host, $content)
{
    echo "FFC_Manage_Ret                             ";
}

function FFC_Manage_Err($host, $content)
{
    echo "FFC_Manage_Err                             ";
}

function FFC_Manage_ModeSet_Ok($host, $content)
{
    echo "FFC_Manage_ModeSet_Ok                      ";
}

function FFC_Manage_ModeSet_Err($host, $content)
{
    echo "FFC_Manage_ModeSet_Err                     ";
}

/**
 * 基本规则管理-ARP规则-获取结果
 *
 * @param $host
 * @param $content
 * @return array \Array List
 * <pre>
 * code => OPFC_RuleArp_List_Ret
 * html=> 调用html页面
 * data=>{
 *      beginIndex => 起始索引(从0开始)
 *      number => 数量
 *      data => array(数据包，数组) {["dataBaseID"]["IP"]["MAC"]}
 * }
 * </pre>
 */
function FFC_RuleArp_List_Ret($host, $content)
{
    //OPFC_RuleArp_List_Ret 基本规则管理-ARP规则-内容
    $content = substr($content, 2);//切去操作码
    $get = unpack("L1beginIndex/L1number", $content);
    $beginIndex = $get["beginIndex"];//起始索引(从0开始)
    $number = $get["number"];//数量
    //TODO 解析数据包
    $content = substr($content, 8);//只留下数据部分
    $data = array();//数据包
    for ($i = 0; $i < $number; ++$i) {
        //循环加入数组
        //TODO ip地址？
        $get = unpack("L1databaseID/C4ip/a6MAC", $content);
        $package = array(
            "dataBaseID" => $get["databaseID"],
            "IP" => $get["ip1"] . "." . $get["ip2"] . "." . $get["ip3"] . "." . $get["ip4"],
            "MAC" => $get["MAC"],//todo mac地址解析有误
        );
        $data[$i] = $package;//加入数组
        $content = substr($content, 14);//只留下剩余数据
    }
    $pack = array(
        "code" => OPFC_RuleArp_List_Ret,
        "html" => "",//TODO html
        "data" => array(
            "beginIndex" => $beginIndex,
            "number" => $number,
            "data" => $data,
        ),
    );
    echo "FFC_RuleArp_List_Ret";
    return $pack;
}

/**
 * 基本规则管理-ARP规则-获取结果-失败
 *
 * @param $host
 * @param $content
 * @return array
 * <pre>
 * code => OPFC_RuleArp_List_Err
 * html => 调用html页面
 * data => array{error => 失败原因（序号）}
 * </pre>
 */
function FFC_RuleArp_List_Err($host, $content)
{
    //OPFC_RuleArp_List_Err 基本规则管理-ARP规则-失败
    $content = substr($content, 2);//切去操作码
    $get = unpack("C1error", $content);
    $error = $get["error"];//失败原因
    $pack = array(
        "code" => OPFC_RuleArp_List_Err,
        "html" => "",//TODO 调用html页面
        "data" => array(
            "error" => $error,
        ),
    );
    echo "FFC_RuleArp_List_Err";
    return $pack;
}

/**
 *基本规则管理-ARP规则-添加-成功
 *
 * @param $host
 * @param $content
 * @return array
 * <pre>
 * code => OPFC_RuleArp_Add_Ok
 * html => 调用html页面
 * data => null
 * </pre>
 */
function FFC_RuleArp_Add_Ok($host, $content)
{
    $pack = array(
        "code" => OPFC_RuleArp_Add_Ok,
        "html" => "",//TODO 调用html页面
        "data" => null,
    );
    echo "FFC_RuleArp_Add_Ok";
    return $pack;
}

/**
 * 基本规则管理-ARP规则-添加-失败
 *
 * @param $host
 * @param $content
 * @return array
 * <pre>
 * code => OPFC_RuleArp_Add_Err
 * html => 调用html页面
 * data => array{error => 失败原因（序号）}
 * </pre>
 */
function FFC_RuleArp_Add_Err($host, $content)
{
    $content = substr($content, 2);//切去操作码
    $get = unpack("C1error", $content);
    $error = $get["error"];//失败原因
    $pack = array(
        "code" => OPFC_RuleArp_Add_Err,
        "html" => "",//TODO 调用html页面
        "data" => array(
            "error" => $error,
        ),
    );
    echo "FFC_RuleArp_Add_Err";
    return $pack;
}

/**
 * 基本规则管理-ARP规则-激活全部-成功
 *
 * @param $host
 * @param $content
 * @return array
 * <pre>
 * code => OPFC_RuleArp_Enable_Ok
 * html => 调用html页面
 * data => null
 * </pre>
 */
function FFC_RuleArp_Enable_Ok($host, $content)
{
    $pack = array(
        "code" => OPFC_RuleArp_Enable_Ok,
        "html" => "",//TODO 调用html页面
        "data" => null,
    );
    echo "FFC_RuleArp_Enable_Ok";
    return $pack;
}

/**
 * 基本规则管理-ARP规则-激活全部-失败
 *
 * @param $host
 * @param $content
 * @return array
 * <pre>
 * code => OPFC_RuleArp_Enable_Err
 * html => 调用html页面
 * data => array{error => 失败原因（序号）}
 * </pre>
 */
function FFC_RuleArp_Enable_Err($host, $content)
{
    $content = substr($content, 2);//切去操作码
    $get = unpack("C1error", $content);
    $error = $get["error"];//失败原因
    $pack = array(
        "code" => OPFC_RuleArp_Enable_Err,
        "html" => "",//TODO 调用html页面
        "data" => array(
            "error" => $error,
        ),
    );
    echo "FFC_RuleArp_Enable_Err";
    return $pack;

}

/**
 * 基本规则管理-ARP规则-禁用全部-成功
 *
 * @param $host
 * @param $content
 * @return array
 * <pre>
 * code => OPFC_RuleArp_Disable_Ok
 * html => 调用html页面
 * data => null
 * </pre>
 */
function FFC_RuleArp_Disable_Ok($host, $content)
{
    $pack = array(
        "code" => OPFC_RuleArp_Disable_Ok,
        "html" => "",//TODO 调用html页面
        "data" => null,
    );
    echo "FFC_RuleArp_Disable_Ok";
    return $pack;
}

/**
 * 基本规则管理-ARP规则-禁用全部-失败
 *
 * @param $host
 * @param $content
 * @return array
 * <pre>
 * code => OPFC_RuleArp_Disable_Err
 * html => 调用html页面
 * data => array{error => 失败原因（序号）}
 * </pre>
 */
function FFC_RuleArp_Disable_Err($host, $content)
{
    $content = substr($content, 2);//切去操作码
    $get = unpack("C1error", $content);
    $error = $get["error"];//失败原因
    $pack = array(
        "code" => OPFC_RuleArp_Disable_Err,
        "html" => "",//TODO 调用html页面
        "data" => array(
            "error" => $error,
        ),
    );
    echo "FFC_RuleArp_Disable_Err";
    return $pack;
}

/**
 * 基本规则管理-ARP规则-全部删除-成功
 *
 * @param $host
 * @param $content
 * @return array
 * <pre>
 * code => OPFC_RuleArp_Cls_Ok
 * html => 调用html页面
 * data => null
 * </pre>
 */
function FFC_RuleArp_Cls_Ok($host, $content)
{
    $pack = array(
        "code" => OPFC_RuleArp_Cls_Ok,
        "html" => "",//TODO 调用html页面
        "data" => null,
    );
    echo "FFC_RuleArp_Cls_Ok";
    return $pack;
}

/**
 * 基本规则管理-ARP规则-全部删除-失败
 *
 * @param $host
 * @param $content
 * @return array
 * <pre>
 * code => OPFC_RuleArp_Cls_Err
 * html => 调用html页面
 * data => array{error => 失败原因（序号）}
 * </pre>
 */
function FFC_RuleArp_Cls_Err($host, $content)
{
    $content = substr($content, 2);//切去操作码
    $get = unpack("C1error", $content);
    $error = $get["error"];//失败原因
    $pack = array(
        "code" => OPFC_RuleArp_Cls_Err,
        "html" => "",//TODO 调用html页面
        "data" => array(
            "error" => $error,
        ),
    );
    echo "FFC_RuleArp_Cls_Err";
    return $pack;
}

/**
 * 基本规则管理-ARP规则-编辑-成功
 *
 * @param $host
 * @param $content
 * @return array
 * <pre>
 * code => OPFC_RuleArp_Edit_Ok
 * html => 调用html页面
 * data => null
 * </pre>
 */
function FFC_RuleArp_Edit_Ok($host, $content)
{
    $pack = array(
        "code" => OPFC_RuleArp_Edit_Ok,
        "html" => "",//TODO 调用html页面
        "data" => null,
    );
    echo "FFC_RuleArp_Edit_Ok";
    return $pack;
}

/**
 * 基本规则管理-ARP规则-编辑-失败
 *
 * @param $host
 * @param $content
 * @return array
 * <pre>
 * code => OPFC_RuleArp_Edit_Err
 * html => 调用html页面
 * data => array{error => 失败原因（序号）}
 * </pre>
 */
function FFC_RuleArp_Edit_Err($host, $content)
{
    $content = substr($content, 2);//切去操作码
    $get = unpack("C1error", $content);
    $error = $get["error"];//失败原因
    $pack = array(
        "code" => OPFC_RuleArp_Edit_Err,
        "html" => "",//TODO 调用html页面
        "data" => array(
            "error" => $error,
        ),
    );
    echo "FFC_RuleArp_Edit_Err";
    return $pack;
}

/**
 * 基本规则管理-ARP规则-删除-成功
 *
 * @param $host
 * @param $content
 * @return array
 * <pre>
 * code => OPFC_RuleArp_Del_Ok
 * html => 调用html页面
 * data => null
 * </pre>
 */
function FFC_RuleArp_Del_Ok($host, $content)
{
    $pack = array(
        "code" => OPFC_RuleArp_Del_Ok,
        "html" => "",//TODO 调用html页面
        "data" => null,
    );
    echo "FFC_RuleArp_Del_Ok";
    return $pack;
}

/**
 * 基本规则管理-ARP规则-删除-失败
 *
 * @param $host
 * @param $content
 * @return array
 * <pre>
 * code => OPFC_RuleArp_Del_Err
 * html => 调用html页面
 * data => array{error => 失败原因（序号）}
 * </pre>
 */
function FFC_RuleArp_Del_Err($host, $content)
{
    $content = substr($content, 2);//切去操作码
    $get = unpack("C1error", $content);
    $error = $get["error"];//失败原因
    $pack = array(
        "code" => OPFC_RuleArp_Del_Err,
        "html" => "",//TODO 调用html页面
        "data" => array(
            "error" => $error,
        ),
    );
    echo "FFC_RuleArp_Del_Err";
    return $pack;
}

/**
 * 基本规则管理-Mac黑名单-内容
 *
 * @param $host
 * @param $content
 * @return array
 * <pre>
 * code => OPFC_RuleMac_List_Ret
 * html => 调用html页面
 * data => {
 *      beginIndex => 起始索引(从0开始)
 *      number => 数量
 *      data => array(数据包，数组) {["dataBaseID"]["MAC"]}
 * }
 * </pre>
 */
function FFC_RuleMac_List_Ret($host, $content)
{
    $content = substr($content, 2);//切去操作码
    $get = unpack("L1beginIndex/L1number", $content);
    $beginIndex = $get["beginIndex"];//起始索引(从0开始)
    $number = $get["number"];//数量
    //TODO 解析数据包
    $content = substr($content, 8);//只留下数据部分
    $data = array();//数据包
    for ($i = 0; $i < $number; ++$i) {
        //循环加入数组
        $get = unpack("L1databaseID/a6MAC", $content);
        $package = array(
            "dataBaseID" => $get["databaseID"],
            "MAC" => $get["MAC"],
        );
        $data[$i] = $package;//加入数组
        $content = substr($content, 10);//只留下剩余数据
    }
    $pack = array(
        "code" => OPFC_RuleMac_List_Ret,
        "html" => "",//TODO html
        "data" => array(
            "beginIndex" => $beginIndex,
            "number" => $number,
            "data" => $data,
        ),
    );
    echo "FFC_RuleMac_List_Ret";
    return $pack;
}

/**
 * 基本规则管理-Mac黑名单-失败
 *
 * @param $host
 * @param $content
 * @return array
 * <pre>
 * code => OPFC_RuleArp_Del_Err
 * html => 调用html页面
 * data => array{error => 失败原因（序号）}
 * </pre>
 */
function FFC_RuleMac_List_Err($host, $content)
{
    $content = substr($content, 2);//切去操作码
    $get = unpack("C1error", $content);
    $error = $get["error"];//失败原因
    $pack = array(
        "code" => OPFC_RuleMac_List_Err,
        "html" => "",//TODO 调用html页面
        "data" => array(
            "error" => $error,
        ),
    );
    echo "FFC_RuleMac_List_Err";
    return $pack;
}

/**
 * 基本规则管理-Mac黑名单-添加-成功
 *
 * @param $host
 * @param $content
 * @return array
 * <pre>
 * code => OPFC_RuleMac_Add_Ok
 * html => 调用html页面
 * data => null
 * </pre>
 */
function FFC_RuleMac_Add_Ok($host, $content)
{
    $pack = array(
        "code" => OPFC_RuleMac_Add_Ok,
        "html" => "",//TODO 调用html页面
        "data" => null,
    );
    echo "FFC_RuleMac_Add_Ok";
    return $pack;
}

/**
 * 基本规则管理-Mac黑名单-添加-失败
 *
 * @param $host
 * @param $content
 * @return array
 * <pre>
 * code => OPFC_RuleMac_Add_Err
 * html => 调用html页面
 * data => array{error => 失败原因（序号）}
 * </pre>
 */
function FFC_RuleMac_Add_Err($host, $content)
{
    $content = substr($content, 2);//切去操作码
    $get = unpack("C1error", $content);
    $error = $get["error"];//失败原因
    $pack = array(
        "code" => OPFC_RuleMac_Add_Err,
        "html" => "",//TODO 调用html页面
        "data" => array(
            "error" => $error,
        ),
    );
    echo "FFC_RuleMac_Add_Err";
    return $pack;
}

/**
 * 基本规则管理-MAC黑名单-全部删除-成功
 *
 * @param $host
 * @param $content
 * @return array
 * <pre>
 * code => OPFC_RuleMac_Cls_Ok
 * html => 调用html页面
 * data => null
 * </pre>
 */
function FFC_RuleMac_Cls_Ok($host, $content)
{
    $pack = array(
        "code" => OPFC_RuleMac_Cls_Ok,
        "html" => "",//TODO 调用html页面
        "data" => null,
    );
    echo "FFC_RuleMac_Cls_Ok";
    return $pack;
}

/**
 * 基本规则管理-MAC黑名单-全部删除-失败
 *
 * @param $host
 * @param $content
 * @return array
 * <pre>
 * code => OPFC_RuleMac_Add_Err
 * html => 调用html页面
 * data => array{error => 失败原因（序号）}
 * </pre>
 */
function FFC_RuleMac_Cls_Err($host, $content)
{
    $content = substr($content, 2);//切去操作码
    $get = unpack("C1error", $content);
    $error = $get["error"];//失败原因
    $pack = array(
        "code" => OPFC_RuleMac_Cls_Err,
        "html" => "",//TODO 调用html页面
        "data" => array(
            "error" => $error,
        ),
    );
    echo "FFC_RuleMac_Cls_Err";
    return $pack;
}

/**
 * 基本规则管理-MAC黑名单-激活全部-成功
 *
 * @param $host
 * @param $content
 * @return array
 * <pre>
 * code => OPFC_RuleMac_Enable_Ok
 * html => 调用html页面
 * data => null
 * </pre>
 */
function FFC_RuleMac_Enable_Ok($host, $content)
{
    $pack = array(
        "code" => OPFC_RuleMac_Enable_Ok,
        "html" => "",//TODO 调用html页面
        "data" => null,
    );
    echo "FFC_RuleMac_Enable_Ok";
    return $pack;
}

/**
 * 基本规则管理-MAC黑名单-激活全部-失败
 *
 * @param $host
 * @param $content
 * @return array
 * <pre>
 * code => OPFC_RuleMac_Enable_Err
 * html => 调用html页面
 * data => array{error => 失败原因（序号）}
 * </pre>
 */
function FFC_RuleMac_Enable_Err($host, $content)
{
    $content = substr($content, 2);//切去操作码
    $get = unpack("C1error", $content);
    $error = $get["error"];//失败原因
    $pack = array(
        "code" => OPFC_RuleMac_Enable_Err,
        "html" => "",//TODO 调用html页面
        "data" => array(
            "error" => $error,
        ),
    );
    echo "FFC_RuleMac_Enable_Err";
    return $pack;
}

/**
 * 基本规则管理-MAC黑名单-禁用全部-成功
 *
 * @param $host
 * @param $content
 * @return array
 * <pre>
 * code => OPFC_RuleMac_Disable_Ok
 * html => 调用html页面
 * data => null
 * </pre>
 */
function FFC_RuleMac_Disable_Ok($host, $content)
{
    $pack = array(
        "code" => OPFC_RuleMac_Disable_Ok,
        "html" => "",//TODO 调用html页面
        "data" => null,
    );
    echo "FFC_RuleMac_Disable_Ok";
    return $pack;
}

/**
 * 基本规则管理-MAC黑名单-禁用全部-失败
 *
 * @param $host
 * @param $content
 * @return array
 * <pre>
 * code => OPFC_RuleMac_Disable_Err
 * html => 调用html页面
 * data => array{error => 失败原因（序号）}
 * </pre>
 */
function FFC_RuleMac_Disable_Err($host, $content)
{
    $content = substr($content, 2);//切去操作码
    $get = unpack("C1error", $content);
    $error = $get["error"];//失败原因
    $pack = array(
        "code" => OPFC_RuleMac_Disable_Err,
        "html" => "",//TODO 调用html页面
        "data" => array(
            "error" => $error,
        ),
    );
    echo "FFC_RuleMac_Disable_Err";
    return $pack;
}

/**
 * 基本规则管理-MAC黑名单-编辑-成功
 *
 * @param $host
 * @param $content
 * @return array
 * <pre>
 * code => OPFC_RuleMac_Edit_Ok
 * html => 调用html页面
 * data => null
 * </pre>
 */
function FFC_RuleMac_Edit_Ok($host, $content)
{
    $pack = array(
        "code" => OPFC_RuleMac_Edit_Ok,
        "html" => "",//TODO 调用html页面
        "data" => null,
    );
    echo "FFC_RuleMac_Edit_Ok";
    return $pack;
}

/**
 * 基本规则管理-MAC黑名单-编辑-失败
 *
 * @param $host
 * @param $content
 * @return array
 * <pre>
 * code => OPFC_RuleMac_Edit_Err
 * html => 调用html页面
 * data => array{error => 失败原因（序号）}
 * </pre>
 */
function FFC_RuleMac_Edit_Err($host, $content)
{
    $content = substr($content, 2);//切去操作码
    $get = unpack("C1error", $content);
    $error = $get["error"];//失败原因
    $pack = array(
        "code" => OPFC_RuleMac_Edit_Err,
        "html" => "",//TODO 调用html页面
        "data" => array(
            "error" => $error,
        ),
    );
    echo "FFC_RuleMac_Edit_Err";
    return $pack;
}

/**
 * 基本规则管理-MAC黑名单-删除-成功
 *
 * @param $host
 * @param $content
 * @return array
 * <pre>
 * code => OPFC_RuleMac_Del_Ok
 * html => 调用html页面
 * data => null
 * </pre>
 */
function FFC_RuleMac_Del_Ok($host, $content)
{
    $pack = array(
        "code" => OPFC_RuleMac_Del_Ok,
        "html" => "",//TODO 调用html页面
        "data" => null,
    );
    echo "FFC_RuleMac_Del_Ok";
    return $pack;
}

/**
 * 基本规则管理-MAC黑名单-删除-失败
 *
 * @param $host
 * @param $content
 * @return array
 * <pre>
 * code => OPFC_RuleMac_Del_Err
 * html => 调用html页面
 * data => array{error => 失败原因（序号）}
 * </pre>
 */
function FFC_RuleMac_Del_Err($host, $content)
{
    $content = substr($content, 2);//切去操作码
    $get = unpack("C1error", $content);
    $error = $get["error"];//失败原因
    $pack = array(
        "code" => OPFC_RuleMac_Del_Err,
        "html" => "",//TODO 调用html页面
        "data" => array(
            "error" => $error,
        ),
    );
    echo "FFC_RuleMac_Del_Err";
    return $pack;
}

/**
 * 基本规则管理-Ip黑名单-内容
 *
 * @param $host
 * @param $content
 * @return array
 * <pre>
 * code => OPFC_RuleIp_List_Ret
 * html => 调用html页面
 * data => {
 *      beginIndex => 起始索引(从0开始)
 *      number => 数量
 *      data => array(数据包，数组) {["dataBaseID"]["IP"]}
 * }
 * </pre>
 */
function FFC_RuleIp_List_Ret($host, $content)
{
    $content = substr($content, 2);//切去操作码
    $get = unpack("L1beginIndex/L1number", $content);
    $beginIndex = $get["beginIndex"];//起始索引(从0开始)
    $number = $get["number"];//数量
    //TODO 解析数据包
    $content = substr($content, 8);//只留下数据部分
    $data = array();//数据包
    for ($i = 0; $i < $number; ++$i) {
        //循环加入数组
        //TODO ip地址？
        $get = unpack("L1databaseID/C4ip", $content);
        $package = array(
            "dataBaseID" => $get["databaseID"],
            "IP" => $get["ip1"] . "." . $get["ip2"] . "." . $get["ip3"] . "." . $get["ip4"],
        );
        $data[$i] = $package;//加入数组
        $content = substr($content, 8);//只留下剩余数据
    }
    $pack = array(
        "code" => OPFC_RuleIp_List_Ret,
        "html" => "",//TODO html
        "data" => array(
            "beginIndex" => $beginIndex,
            "number" => $number,
            "data" => $data,
        ),
    );
    echo "FFC_RuleIp_List_Ret";
    return $pack;
}

/**
 *基本规则管理-Ip黑名单-失败
 *
 * @param $host
 * @param $content
 * @return array
 * <pre>
 * code => OPFC_RuleIp_List_Err
 * html => 调用html页面
 * data => array{error => 失败原因（序号）}
 * </pre>
 */
function FFC_RuleIp_List_Err($host, $content)
{
    $content = substr($content, 2);//切去操作码
    $get = unpack("C1error", $content);
    $error = $get["error"];//失败原因
    $pack = array(
        "code" => OPFC_RuleIp_List_Err,
        "html" => "",//TODO 调用html页面
        "data" => array(
            "error" => $error,
        ),
    );
    echo "FFC_RuleIp_List_Err";
    return $pack;
}

/**
 * 基本规则管理-Ip黑名单-添加-成功
 *
 * @param $host
 * @param $content
 * @return array
 * <pre>
 * code => OPFC_RuleIp_Add_Ok
 * html => 调用html页面
 * data => null
 * </pre>
 */
function FFC_RuleIp_Add_Ok($host, $content)
{
    $pack = array(
        "code" => OPFC_RuleIp_Add_Ok,
        "html" => "",//TODO 调用html页面
        "data" => null,
    );
    echo "FFC_RuleIp_Add_Ok";
    return $pack;
}

/**
 * 基本规则管理-Ip黑名单-添加-失败
 *
 * @param $host
 * @param $content
 * @return array
 * <pre>
 * code => OPFC_RuleIp_Add_Err
 * html => 调用html页面
 * data => array{error => 失败原因（序号）}
 * </pre>
 */
function FFC_RuleIp_Add_Err($host, $content)
{
    $content = substr($content, 2);//切去操作码
    $get = unpack("C1error", $content);
    $error = $get["error"];//失败原因
    $pack = array(
        "code" => OPFC_RuleIp_Add_Err,
        "html" => "",//TODO 调用html页面
        "data" => array(
            "error" => $error,
        ),
    );
    echo "FFC_RuleIp_Add_Err";
    return $pack;
}

/**
 * 基本规则管理-Ip黑名单-全部删除-成功
 *
 * @param $host
 * @param $content
 * @return array
 * <pre>
 * code => OPFC_RuleIp_Cls_Ok
 * html => 调用html页面
 * data => null
 * </pre>
 */
function FFC_RuleIp_Cls_Ok($host, $content)
{
    $pack = array(
        "code" => OPFC_RuleIp_Cls_Ok,
        "html" => "",//TODO 调用html页面
        "data" => null,
    );
    echo "FFC_RuleIp_Cls_Ok";
    return $pack;
}

/**
 * 基本规则管理-Ip黑名单-全部删除-失败
 *
 * @param $host
 * @param $content
 * @return array
 * <pre>
 * code => OPFC_RuleIp_Cls_Err
 * html => 调用html页面
 * data => array{error => 失败原因（序号）}
 * </pre>
 */
function FFC_RuleIp_Cls_Err($host, $content)
{
    $content = substr($content, 2);//切去操作码
    $get = unpack("C1error", $content);
    $error = $get["error"];//失败原因
    $pack = array(
        "code" => OPFC_RuleIp_Cls_Err,
        "html" => "",//TODO 调用html页面
        "data" => array(
            "error" => $error,
        ),
    );
    echo "FFC_RuleIp_Cls_Err";
    return $pack;
}

/**
 * 基本规则管理-Ip黑名单-激活全部-成功
 *
 * @param $host
 * @param $content
 * @return array
 * <pre>
 * code => OPFC_RuleIp_Enable_Ok
 * html => 调用html页面
 * data => null
 * </pre>
 */
function FFC_RuleIp_Enable_Ok($host, $content)
{
    $pack = array(
        "code" => OPFC_RuleIp_Enable_Ok,
        "html" => "",//TODO 调用html页面
        "data" => null,
    );
    echo "FFC_RuleIp_Enable_Ok";
    return $pack;
}

/**
 * 基本规则管理-Ip黑名单-激活全部-失败
 *
 * @param $host
 * @param $content
 * @return array
 * <pre>
 * code => OPFC_RuleIp_Enable_Err
 * html => 调用html页面
 * data => array{error => 失败原因（序号）}
 * </pre>
 */
function FFC_RuleIp_Enable_Err($host, $content)
{
    $content = substr($content, 2);//切去操作码
    $get = unpack("C1error", $content);
    $error = $get["error"];//失败原因
    $pack = array(
        "code" => OPFC_RuleIp_Enable_Err,
        "html" => "",//TODO 调用html页面
        "data" => array(
            "error" => $error,
        ),
    );
    echo "FFC_RuleIp_Enable_Err";
    return $pack;
}

/**
 * 基本规则管理-Ip黑名单-禁用全部-成功
 *
 * @param $host
 * @param $content
 * @return array
 * <pre>
 * code => OPFC_RuleIp_Disable_Ok
 * html => 调用html页面
 * data => null
 * </pre>
 */
function FFC_RuleIp_Disable_Ok($host, $content)
{
    $pack = array(
        "code" => OPFC_RuleIp_Disable_Ok,
        "html" => "",//TODO 调用html页面
        "data" => null,
    );
    echo "FFC_RuleIp_Disable_Ok";
    return $pack;
}

/**
 * 基本规则管理-Ip黑名单-禁用全部-失败
 *
 * @param $host
 * @param $content
 * @return array
 * <pre>
 * code => OPFC_RuleIp_Disable_Err
 * html => 调用html页面
 * data => array{error => 失败原因（序号）}
 * </pre>
 */
function FFC_RuleIp_Disable_Err($host, $content)
{
    $content = substr($content, 2);//切去操作码
    $get = unpack("C1error", $content);
    $error = $get["error"];//失败原因
    $pack = array(
        "code" => OPFC_RuleIp_Disable_Err,
        "html" => "",//TODO 调用html页面
        "data" => array(
            "error" => $error,
        ),
    );
    echo "FFC_RuleIp_Disable_Err";
    return $pack;
}

/**
 * 基本规则管理-Ip黑名单-编辑-成功
 *
 * @param $host
 * @param $content
 * @return array
 * <pre>
 * code => OPFC_RuleIp_Edit_Ok
 * html => 调用html页面
 * data => null
 * </pre>
 */
function FFC_RuleIp_Edit_Ok($host, $content)
{
    $pack = array(
        "code" => OPFC_RuleIp_Edit_Ok,
        "html" => "",//TODO 调用html页面
        "data" => null,
    );
    echo "FFC_RuleIp_Edit_Ok";
    return $pack;
}

/**
 * 基本规则管理-Ip黑名单-编辑-失败
 *
 * @param $host
 * @param $content
 * @return array
 * <pre>
 * code => OPFC_RuleIp_Edit_Err
 * html => 调用html页面
 * data => array{error => 失败原因（序号）}
 * </pre>
 */
function FFC_RuleIp_Edit_Err($host, $content)
{
    $content = substr($content, 2);//切去操作码
    $get = unpack("C1error", $content);
    $error = $get["error"];//失败原因
    $pack = array(
        "code" => OPFC_RuleIp_Edit_Err,
        "html" => "",//TODO 调用html页面
        "data" => array(
            "error" => $error,
        ),
    );
    echo "FFC_RuleIp_Edit_Err";
    return $pack;
}

/**
 * 基本规则管理-Ip黑名单-删除-成功
 *
 * @param $host
 * @param $content
 * @return array
 * <pre>
 * code => OPFC_RuleIp_Del_Ok
 * html => 调用html页面
 * data => null
 * </pre>
 */
function FFC_RuleIp_Del_Ok($host, $content)
{
    $pack = array(
        "code" => OPFC_RuleIp_Del_Ok,
        "html" => "",//TODO 调用html页面
        "data" => null,
    );
    echo "FFC_RuleIp_Del_Ok";
    return $pack;
}

/**
 * 基本规则管理-Ip黑名单-删除-失败
 *
 * @param $host
 * @param $content
 * @return array
 * <pre>
 * code => OPFC_RuleIp_Del_Err
 * html => 调用html页面
 * data => array{error => 失败原因（序号）}
 * </pre>
 */
function FFC_RuleIp_Del_Err($host, $content)
{
    $content = substr($content, 2);//切去操作码
    $get = unpack("C1error", $content);
    $error = $get["error"];//失败原因
    $pack = array(
        "code" => OPFC_RuleIp_Del_Err,
        "html" => "",//TODO 调用html页面
        "data" => array(
            "error" => $error,
        ),
    );
    echo "FFC_RuleIp_Del_Err";
    return $pack;
}

/**
 * 基本规则管理-IP用户自定义-内容
 *
 * @param $host
 * @param $content
 * @return array
 * <pre>
 * code => OPFC_RuleIpAu_List_Ret
 * html => 调用html页面
 * data => {
 *      beginIndex => 起始索引(从0开始)
 *      number => 数量
 *      data => array(数据包，数组) {["dataBaseID"]["IP"]}
 * }
 * </pre>
 */
function FFC_RuleIpAu_List_Ret($host, $content)
{
    $content = substr($content, 2);//切去操作码
    $get = unpack("L1beginIndex/L1number", $content);
    $beginIndex = $get["beginIndex"];//起始索引(从0开始)
    $number = $get["number"];//数量
    //TODO 解析数据包
    $content = substr($content, 8);//只留下数据部分
    $data = array();//数据包
    for ($i = 0; $i < $number; ++$i) {
        //循环加入数组
        //TODO ip地址？
        $get = unpack("L1databaseID/C4ip", $content);
        $package = array(
            "dataBaseID" => $get["databaseID"],
            "IP" => $get["ip1"] . "." . $get["ip2"] . "." . $get["ip3"] . "." . $get["ip4"],
        );
        $data[$i] = $package;//加入数组
        $content = substr($content, 8);//只留下剩余数据
    }
    $pack = array(
        "code" => OPFC_RuleIpAu_List_Ret,
        "html" => "",//TODO html
        "data" => array(
            "beginIndex" => $beginIndex,
            "number" => $number,
            "data" => $data,
        ),
    );
    echo "FFC_RuleIpAu_List_Ret";
    return $pack;
}

/**
 * 基本规则管理-IP用户自定义-失败
 *
 * @param $host
 * @param $content
 * @return array
 * <pre>
 * code => OPFC_RuleIpAu_List_Err
 * html => 调用html页面
 * data => array{error => 失败原因（序号）}
 * </pre>
 */
function FFC_RuleIpAu_List_Err($host, $content)
{
    $content = substr($content, 2);//切去操作码
    $get = unpack("C1error", $content);
    $error = $get["error"];//失败原因
    $pack = array(
        "code" => OPFC_RuleIpAu_List_Err,
        "html" => "",//TODO 调用html页面
        "data" => array(
            "error" => $error,
        ),
    );
    echo "FFC_RuleIpAu_List_Err";
    return $pack;
}

/**
 * 基本规则管理-IP用户自定义-添加-成功
 *
 * @param $host
 * @param $content
 * @return array
 * <pre>
 * code => OPFC_RuleIpAu_Add_Ok
 * html => 调用html页面
 * data => null
 * </pre>
 */
function FFC_RuleIpAu_Add_Ok($host, $content)
{
    $pack = array(
        "code" => OPFC_RuleIpAu_Add_Ok,
        "html" => "",//TODO 调用html页面
        "data" => null,
    );
    echo "FFC_RuleIpAu_Add_Ok";
    return $pack;
}

/**
 * 基本规则管理-IP用户自定义-添加-失败
 *
 * @param $host
 * @param $content
 * @return array
 * <pre>
 * code => OPFC_RuleIpAu_Add_Err
 * html => 调用html页面
 * data => array{error => 失败原因（序号）}
 * </pre>
 */
function FFC_RuleIpAu_Add_Err($host, $content)
{
    $content = substr($content, 2);//切去操作码
    $get = unpack("C1error", $content);
    $error = $get["error"];//失败原因
    $pack = array(
        "code" => OPFC_RuleIpAu_Add_Err,
        "html" => "",//TODO 调用html页面
        "data" => array(
            "error" => $error,
        ),
    );
    echo "FFC_RuleIpAu_Add_Err";
    return $pack;
}

/**
 * 基本规则管理-IP用户自定义-全部删除-成功
 *
 * @param $host
 * @param $content
 * @return array
 * <pre>
 * code => OPFC_RuleIpAu_Cls_Ok
 * html => 调用html页面
 * data => null
 * </pre>
 */
function FFC_RuleIpAu_Cls_Ok($host, $content)
{
    $pack = array(
        "code" => OPFC_RuleIpAu_Cls_Ok,
        "html" => "",//TODO 调用html页面
        "data" => null,
    );
    echo "FFC_RuleIpAu_Cls_Ok";
    return $pack;
}

/**
 * 基本规则管理-IP用户自定义-全部删除-失败
 *
 * @param $host
 * @param $content
 * @return array
 * <pre>
 * code => OPFC_RuleIpAu_Cls_Err
 * html => 调用html页面
 * data => array{error => 失败原因（序号）}
 * </pre>
 */
function FFC_RuleIpAu_Cls_Err($host, $content)
{
    $content = substr($content, 2);//切去操作码
    $get = unpack("C1error", $content);
    $error = $get["error"];//失败原因
    $pack = array(
        "code" => OPFC_RuleIpAu_Cls_Err,
        "html" => "",//TODO 调用html页面
        "data" => array(
            "error" => $error,
        ),
    );
    echo "FFC_RuleIpAu_Cls_Err";
    return $pack;

}

/**
 * 基本规则管理-IP用户自定义-编辑-成功
 *
 * @param $host
 * @param $content
 * @return array
 * <pre>
 * code => OPFC_RuleIpAu_Edit_Ok
 * html => 调用html页面
 * data => null
 * </pre>
 */
function FFC_RuleIpAu_Edit_Ok($host, $content)
{
    $pack = array(
        "code" => OPFC_RuleIpAu_Edit_Ok,
        "html" => "",//TODO 调用html页面
        "data" => null,
    );
    echo "FFC_RuleIpAu_Edit_Ok";
    return $pack;
}

/**
 * 基本规则管理-IP用户自定义-编辑-失败
 *
 * @param $host
 * @param $content
 * @return array
 * <pre>
 * code => OPFC_RuleIpAu_Edit_Err
 * html => 调用html页面
 * data => array{error => 失败原因（序号）}
 * </pre>
 */
function FFC_RuleIpAu_Edit_Err($host, $content)
{
    $content = substr($content, 2);//切去操作码
    $get = unpack("C1error", $content);
    $error = $get["error"];//失败原因
    $pack = array(
        "code" => OPFC_RuleIpAu_Edit_Err,
        "html" => "",//TODO 调用html页面
        "data" => array(
            "error" => $error,
        ),
    );
    echo "FFC_RuleIpAu_Edit_Err";
    return $pack;

}

/**
 * 基本规则管理-IP用户自定义-删除-成功
 *
 * @param $host
 * @param $content
 * @return array
 * <pre>
 * code => OPFC_RuleIpAu_Del_Ok
 * html => 调用html页面
 * data => null
 * </pre>
 */
function FFC_RuleIpAu_Del_Ok($host, $content)
{
    $pack = array(
        "code" => OPFC_RuleIpAu_Del_Ok,
        "html" => "",//TODO 调用html页面
        "data" => null,
    );
    echo "FFC_RuleIpAu_Del_Ok";
    return $pack;
}

/**
 * 基本规则管理-IP用户自定义-删除-失败
 *
 * @param $host
 * @param $content
 * @return array
 * <pre>
 * code => OPFC_RuleIpAu_Del_Err
 * html => 调用html页面
 * data => array{error => 失败原因（序号）}
 * </pre>
 */
function FFC_RuleIpAu_Del_Err($host, $content)
{
    $content = substr($content, 2);//切去操作码
    $get = unpack("C1error", $content);
    $error = $get["error"];//失败原因
    $pack = array(
        "code" => OPFC_RuleIpAu_Del_Err,
        "html" => "",//TODO 调用html页面
        "data" => array(
            "error" => $error,
        ),
    );
    echo "FFC_RuleIpAu_Del_Err";
    return $pack;
}

/**
 * 基本规则管理-优先级配置-内容
 *
 * @param $host
 * @param $content
 * @return array
 * <pre>
 * code => OPFC_RuleSzPri_List_Ret
 * html => 调用html页面
 * data => {
 *      beginIndex => 起始索引(从0开始)
 *      number => 数量
 *      data => array(数据包，数组) {["dataBaseID"]数据库ID["name"]名称["priority"]优先级ID}
 * }
 * </pre>
 */
function FFC_RuleSzPri_List_Ret($host, $content)
{
    $content = substr($content, 2);//切去操作码
    $get = unpack("L1beginIndex/L1number", $content);
    $beginIndex = $get["beginIndex"];//起始索引(从0开始)
    $number = $get["number"];//数量
    //TODO 解析数据包
    $content = substr($content, 8);//只留下数据部分
    $data = array();//数据包
    for ($i = 0; $i < $number; ++$i) {
        //循环加入数组
        $get = unpack("L1databaseID/S1nameLength", $content);
        $databaseID = $get["databaseID"];//数据库ID
        $nameLength = $get["nameLength"];//名称长度
        $content = substr($content, 6);//准备获取名称
        $get = unpack("a" . $nameLength . "name/C1priority", $content);
        $name = $get["name"];//名称
        $priority = $get["priority"];//优先级ID
        $package = array(
            "dataBaseID" => $databaseID,
            "name" => $name,
            "priority" => $priority,
        );
        $data[$i] = $package;//加入数组
        $content = substr($content, 1 + $nameLength);//只留下剩余数据
    }
    $pack = array(
        "code" => OPFC_RuleSzPri_List_Ret,
        "html" => "",//TODO html
        "data" => array(
            "beginIndex" => $beginIndex,
            "number" => $number,
            "data" => $data,
        ),
    );
    echo "FFC_RuleSzPri_List_Ret";
    return $pack;
}

/**
 * 基本规则管理-优先级配置-失败
 *
 * @param $host
 * @param $content
 * @return array
 * <pre>
 * code => OPFC_RuleSzPri_List_Err
 * html => 调用html页面
 * data => array{error => 失败原因（序号）}
 * </pre>
 */
function FFC_RuleSzPri_List_Err($host, $content)
{
    $content = substr($content, 2);//切去操作码
    $get = unpack("C1error", $content);
    $error = $get["error"];//失败原因
    $pack = array(
        "code" => OPFC_RuleSzPri_List_Err,
        "html" => "",//TODO 调用html页面
        "data" => array(
            "error" => $error,
        ),
    );
    echo "FFC_RuleSzPri_List_Err";
    return $pack;
}

/**
 * 基本规则管理-优先级配置-添加-成功
 *
 * @param $host
 * @param $content null
 * @return array
 * <pre>
 * code => OPFC_RuleSzPri_Add_Ok
 * html => 调用html页面
 * data => null
 * </pre>
 */
function FFC_RuleSzPri_Add_Ok($host, $content)
{
    $pack = array(
        "code" => OPFC_RuleSzPri_Add_Ok,
        "html" => "",//TODO 调用html页面
        "data" => null,
    );
    echo "FFC_RuleSzPri_Add_Ok";
    return $pack;
}

/**
 * 基本规则管理-优先级配置-添加-失败
 *
 * @param $host
 * @param $content
 * @return array
 * <pre>
 * code => OPFC_RuleSzPri_Add_Err
 * html => 调用html页面
 * data => array{error => 失败原因（序号）}
 * </pre>
 */
function FFC_RuleSzPri_Add_Err($host, $content)
{
    $content = substr($content, 2);//切去操作码
    $get = unpack("C1error", $content);
    $error = $get["error"];//失败原因
    $pack = array(
        "code" => OPFC_RuleSzPri_Add_Err,
        "html" => "",//TODO 调用html页面
        "data" => array(
            "error" => $error,
        ),
    );
    echo "FFC_RuleSzPri_Add_Err";
    return $pack;
}

/**
 * 基本规则管理-优先级配置-全部删除-成功
 *
 * @param $host
 * @param $content null
 * @return array
 * <pre>
 * code => OPFC_RuleSzPri_Cls_Ok
 * html => 调用html页面
 * data => null
 * </pre>
 */
function FFC_RuleSzPri_Cls_Ok($host, $content)
{
    $pack = array(
        "code" => OPFC_RuleSzPri_Cls_Ok,
        "html" => "",//TODO 调用html页面
        "data" => null,
    );
    echo "FFC_RuleSzPri_Cls_Ok";
    return $pack;
}

/**
 * 基本规则管理-优先级配置-全部删除-失败
 *
 * @param $host
 * @param $content
 * @return array
 * <pre>
 * code => OPFC_RuleSzPri_Cls_Err
 * html => 调用html页面
 * data => array{error => 失败原因（序号）}
 * </pre>
 */
function FFC_RuleSzPri_Cls_Err($host, $content)
{
    $content = substr($content, 2);//切去操作码
    $get = unpack("C1error", $content);
    $error = $get["error"];//失败原因
    $pack = array(
        "code" => OPFC_RuleSzPri_Cls_Err,
        "html" => "",//TODO 调用html页面
        "data" => array(
            "error" => $error,
        ),
    );
    echo "FFC_RuleSzPri_Cls_Err";
    return $pack;
}

/**
 * 基本规则管理-优先级配置-编辑-成功
 *
 * @param $host
 * @param $content null
 * @return array
 * <pre>
 * code => OPFC_RuleSzPri_Edit_Ok
 * html => 调用html页面
 * data => null
 * </pre>
 */
function FFC_RuleSzPri_Edit_Ok($host, $content)
{
    $pack = array(
        "code" => OPFC_RuleSzPri_Edit_Ok,
        "html" => "",//TODO 调用html页面
        "data" => null,
    );
    echo "FFC_RuleSzPri_Edit_Ok";
    return $pack;
}

/**
 * 基本规则管理-优先级配置-编辑-失败
 *
 * @param $host
 * @param $content
 * @return array
 * <pre>
 * code => OPFC_RuleSzPri_Edit_Err
 * html => 调用html页面
 * data => array{error => 失败原因（序号）}
 * </pre>
 */
function FFC_RuleSzPri_Edit_Err($host, $content)
{
    $content = substr($content, 2);//切去操作码
    $get = unpack("C1error", $content);
    $error = $get["error"];//失败原因
    $pack = array(
        "code" => OPFC_RuleSzPri_Edit_Err,
        "html" => "",//TODO 调用html页面
        "data" => array(
            "error" => $error,
        ),
    );
    echo "FFC_RuleSzPri_Edit_Err";
    return $pack;
}

/**
 * 基本规则管理-优先级配置-删除-成功
 *
 * @param $host
 * @param $content null
 * @return array
 * <pre>
 * code => OPFC_RuleSzPri_Del_Ok
 * html => 调用html页面
 * data => null
 * </pre>
 */
function FFC_RuleSzPri_Del_Ok($host, $content)
{
    $pack = array(
        "code" => OPFC_RuleSzPri_Del_Ok,
        "html" => "",//TODO 调用html页面
        "data" => null,
    );
    echo "FFC_RuleSzPri_Del_Ok";
    return $pack;
}

/**
 * 基本规则管理-优先级配置-删除-失败
 *
 * @param $host
 * @param $content
 * @return array
 * <pre>
 * code => OPFC_RuleSzPri_Del_Err
 * html => 调用html页面
 * data => array{error => 失败原因（序号）}
 * </pre>
 */
function FFC_RuleSzPri_Del_Err($host, $content)
{
    $content = substr($content, 2);//切去操作码
    $get = unpack("C1error", $content);
    $error = $get["error"];//失败原因
    $pack = array(
        "code" => OPFC_RuleSzPri_Del_Err,
        "html" => "",//TODO 调用html页面
        "data" => array(
            "error" => $error,
        ),
    );
    echo "FFC_RuleSzPri_Del_Err";
    return $pack;
}

/**
 * 基本规则管理-优先级配置-内容
 *
 * @param $host
 * @param $content
 * @return array
 * <pre>
 * code => OPFC_RuleSzMac_List_Ret
 * html => 调用html页面
 * data => {
 *      beginIndex => 起始索引(从0开始)
 *      number => 数量
 *      data => array(数据包，数组) {["dataBaseID"]数据库ID["MAC"]MAC["priority"]优先级ID}
 * }
 * </pre>
 */
function FFC_RuleSzMac_List_Ret($host, $content)
{
    $content = substr($content, 2);//切去操作码
    $get = unpack("L1beginIndex/L1number", $content);
    $beginIndex = $get["beginIndex"];//起始索引(从0开始)
    $number = $get["number"];//数量
    //TODO 解析数据包
    $content = substr($content, 8);//只留下数据部分
    $data = array();//数据包
    for ($i = 0; $i < $number; ++$i) {
        //循环加入数组
        $get = unpack("L1databaseID/a6MAC/C1priority", $content);
        $databaseID = $get["databaseID"];//数据库ID
        $MAC = $get["MAC"];//MAC
        $priority = $get["priority"];//优先级ID
        $package = array(
            "dataBaseID" => $databaseID,
            "MAC" => $MAC,
            "priority" => $priority,
        );
        $data[$i] = $package;//加入数组
        $content = substr($content, 11);//只留下剩余数据
    }
    $pack = array(
        "code" => OPFC_RuleSzMac_List_Ret,
        "html" => "",//TODO html
        "data" => array(
            "beginIndex" => $beginIndex,
            "number" => $number,
            "data" => $data,
        ),
    );
    echo "FFC_RuleSzMac_List_Ret";
    return $pack;
}

/**
 * 基本规则管理-MAC安全域-失败
 *
 * @param $host
 * @param $content
 * @return array
 * <pre>
 * code => OPFC_RuleSzMac_List_Err
 * html => 调用html页面
 * data => array{error => 失败原因（序号）}
 * </pre>
 */
function FFC_RuleSzMac_List_Err($host, $content)
{
    $content = substr($content, 2);//切去操作码
    $get = unpack("C1error", $content);
    $error = $get["error"];//失败原因
    $pack = array(
        "code" => OPFC_RuleSzMac_List_Err,
        "html" => "",//TODO 调用html页面
        "data" => array(
            "error" => $error,
        ),
    );
    echo "FFC_RuleSzMac_List_Err";
    return $pack;
}

/**
 * 基本规则管理-MAC安全域-添加-成功
 *
 * @param $host
 * @param $content null
 * @return array
 * <pre>
 * code => OPFC_RuleSzMac_Add_Ok
 * html => 调用html页面
 * data => null
 * </pre>
 */
function FFC_RuleSzMac_Add_Ok($host, $content)
{
    $pack = array(
        "code" => OPFC_RuleSzMac_Add_Ok,
        "html" => "",//TODO 调用html页面
        "data" => null,
    );
    echo "FFC_RuleSzMac_Add_Ok";
    return $pack;
}

/**
 * 基本规则管理-MAC安全域-添加-失败
 *
 * @param $host
 * @param $content
 * @return array
 * <pre>
 * code => OPFC_RuleSzMac_Add_Err
 * html => 调用html页面
 * data => array{error => 失败原因（序号）}
 * </pre>
 */
function FFC_RuleSzMac_Add_Err($host, $content)
{
    $content = substr($content, 2);//切去操作码
    $get = unpack("C1error", $content);
    $error = $get["error"];//失败原因
    $pack = array(
        "code" => OPFC_RuleSzMac_Add_Err,
        "html" => "",//TODO 调用html页面
        "data" => array(
            "error" => $error,
        ),
    );
    echo "FFC_RuleSzMac_Add_Err";
    return $pack;
}

/**
 * 基本规则管理-MAC安全域-全部删除-成功
 *
 * @param $host
 * @param $content null
 * @return array
 * <pre>
 * code => OPFC_RuleSzMac_Cls_Ok
 * html => 调用html页面
 * data => null
 * </pre>
 */
function FFC_RuleSzMac_Cls_Ok($host, $content)
{
    $pack = array(
        "code" => OPFC_RuleSzMac_Cls_Ok,
        "html" => "",//TODO 调用html页面
        "data" => null,
    );
    echo "FFC_RuleSzMac_Cls_Ok";
    return $pack;
}

/**
 * 基本规则管理-MAC安全域-全部删除-失败
 *
 * @param $host
 * @param $content
 * @return array
 * <pre>
 * code => OPFC_RuleSzMac_Cls_Err
 * html => 调用html页面
 * data => array{error => 失败原因（序号）}
 * </pre>
 */
function FFC_RuleSzMac_Cls_Err($host, $content)
{
    $content = substr($content, 2);//切去操作码
    $get = unpack("C1error", $content);
    $error = $get["error"];//失败原因
    $pack = array(
        "code" => OPFC_RuleSzMac_Cls_Err,
        "html" => "",//TODO 调用html页面
        "data" => array(
            "error" => $error,
        ),
    );
    echo "FFC_RuleSzMac_Cls_Err";
    return $pack;
}

/**
 * 基本规则管理-MAC安全域-激活全部-成功
 *
 * @param $host
 * @param $content null
 * @return array
 * <pre>
 * code => OPFC_RuleSzMac_Enable_Ok
 * html => 调用html页面
 * data => null
 * </pre>
 */
function FFC_RuleSzMac_Enable_Ok($host, $content)
{
    $pack = array(
        "code" => OPFC_RuleSzMac_Enable_Ok,
        "html" => "",//TODO 调用html页面
        "data" => null,
    );
    echo "FFC_RuleSzMac_Enable_Ok";
    return $pack;
}

/**
 * 基本规则管理-MAC安全域-激活全部-失败
 *
 * @param $host
 * @param $content
 * @return array
 * <pre>
 * code => OPFC_RuleSzMac_Enable_Err
 * html => 调用html页面
 * data => array{error => 失败原因（序号）}
 * </pre>
 */
function FFC_RuleSzMac_Enable_Err($host, $content)
{
    $content = substr($content, 2);//切去操作码
    $get = unpack("C1error", $content);
    $error = $get["error"];//失败原因
    $pack = array(
        "code" => OPFC_RuleSzMac_Enable_Err,
        "html" => "",//TODO 调用html页面
        "data" => array(
            "error" => $error,
        ),
    );
    echo "FFC_RuleSzMac_Enable_Err";
    return $pack;
}

/**
 * 基本规则管理-MAC安全域-禁用全部-成功
 *
 * @param $host
 * @param $content null
 * @return array
 * <pre>
 * code => OPFC_RuleSzMac_Disable_Ok
 * html => 调用html页面
 * data => null
 * </pre>
 */
function FFC_RuleSzMac_Disable_Ok($host, $content)
{
    $pack = array(
        "code" => OPFC_RuleSzMac_Disable_Ok,
        "html" => "",//TODO 调用html页面
        "data" => null,
    );
    echo "FFC_RuleSzMac_Disable_Ok";
    return $pack;
}

/**
 * 基本规则管理-MAC安全域-禁用全部-失败
 *
 * @param $host
 * @param $content
 * @return array
 * <pre>
 * code => OPFC_RuleSzMac_Disable_Err
 * html => 调用html页面
 * data => array{error => 失败原因（序号）}
 * </pre>
 */
function FFC_RuleSzMac_Disable_Err($host, $content)
{
    $content = substr($content, 2);//切去操作码
    $get = unpack("C1error", $content);
    $error = $get["error"];//失败原因
    $pack = array(
        "code" => OPFC_RuleSzMac_Disable_Err,
        "html" => "",//TODO 调用html页面
        "data" => array(
            "error" => $error,
        ),
    );
    echo "FFC_RuleSzMac_Disable_Err";
    return $pack;
}

/**
 * 基本规则管理-MAC安全域-编辑-成功
 *
 * @param $host
 * @param $content null
 * @return array
 * <pre>
 * code => OPFC_RuleSzMac_Edit_Ok
 * html => 调用html页面
 * data => null
 * </pre>
 */
function FFC_RuleSzMac_Edit_Ok($host, $content)
{
    $pack = array(
        "code" => OPFC_RuleSzMac_Edit_Ok,
        "html" => "",//TODO 调用html页面
        "data" => null,
    );
    echo "FFC_RuleSzMac_Edit_Ok";
    return $pack;
}

/**
 * 基本规则管理-MAC安全域-编辑-失败
 *
 * @param $host
 * @param $content
 * @return array
 * <pre>
 * code => OPFC_RuleSzMac_Edit_Err
 * html => 调用html页面
 * data => array{error => 失败原因（序号）}
 * </pre>
 */
function FFC_RuleSzMac_Edit_Err($host, $content)
{
    $content = substr($content, 2);//切去操作码
    $get = unpack("C1error", $content);
    $error = $get["error"];//失败原因
    $pack = array(
        "code" => OPFC_RuleSzMac_Edit_Err,
        "html" => "",//TODO 调用html页面
        "data" => array(
            "error" => $error,
        ),
    );
    echo "FFC_RuleSzMac_Edit_Err";
    return $pack;
}

/**
 * 基本规则管理-MAC安全域-删除-成功
 *
 * @param $host
 * @param $content null
 * @return array
 * <pre>
 * code => OPFC_RuleSzMac_Del_Ok
 * html => 调用html页面
 * data => null
 * </pre>
 */
function FFC_RuleSzMac_Del_Ok($host, $content)
{
    $pack = array(
        "code" => OPFC_RuleSzMac_Del_Ok,
        "html" => "",//TODO 调用html页面
        "data" => null,
    );
    echo "FFC_RuleSzMac_Del_Ok";
    return $pack;
}

/**
 * 基本规则管理-MAC安全域-删除-失败
 *
 * @param $host
 * @param $content
 * @return array
 * <pre>
 * code => OPFC_RuleSzMac_Del_Err
 * html => 调用html页面
 * data => array{error => 失败原因（序号）}
 * </pre>
 */
function FFC_RuleSzMac_Del_Err($host, $content)
{
    $content = substr($content, 2);//切去操作码
    $get = unpack("C1error", $content);
    $error = $get["error"];//失败原因
    $pack = array(
        "code" => OPFC_RuleSzMac_Del_Err,
        "html" => "",//TODO 调用html页面
        "data" => array(
            "error" => $error,
        ),
    );
    echo "FFC_RuleSzMac_Del_Err";
    return $pack;
}

/**
 * 基本规则管理-IP安全域-内容
 *
 * @param $host
 * @param $content
 * @return array
 * <pre>
 * code => OPFC_RuleSzIp_List_Ret
 * html => 调用html页面
 * data => {
 *      beginIndex => 起始索引(从0开始)
 *      number => 数量
 *      data => array(数据包，数组) {
 *                  ["dataBaseID"]数据库ID,
 *                  ["IP"]IP
 *                  ["mask"]掩码
 *                  ["priority"]优先级ID}
 *             }
 * </pre>
 */
function FFC_RuleSzIp_List_Ret($host, $content)
{
    $content = substr($content, 2);//切去操作码
    $get = unpack("L1beginIndex/L1number", $content);
    $beginIndex = $get["beginIndex"];//起始索引(从0开始)
    $number = $get["number"];//数量
    //TODO 解析数据包
    $content = substr($content, 8);//只留下数据部分
    $data = array();//数据包
    for ($i = 0; $i < $number; ++$i) {
        //循环加入数组
        //TODO ip地址？掩码？
        $get = unpack("L1databaseID/C4ip/C4mask/C1priority", $content);
        $databaseID = $get["databaseID"];//数据库ID
        $ip = $get["ip1"].".".$get["ip2"].".".$get["ip3"].".".$get["ip4"];//IP
        $mask = $get["mask1"].".".$get["mask2"].".".$get["mask3"].".".$get["mask4"];//掩码
        $priority = $get["priority"];//优先级ID
        $package = array(
            "dataBaseID" => $databaseID,
            "IP" => $ip,
            "mask" => $mask,
            "priority" => $priority,
        );
        $data[$i] = $package;//加入数组
        $content = substr($content, 13);//只留下剩余数据
    }
    $pack = array(
        "code" => OPFC_RuleSzIp_List_Ret,
        "html" => "",//TODO html
        "data" => array(
            "beginIndex" => $beginIndex,
            "number" => $number,
            "data" => $data,
        ),
    );
    echo "FFC_RuleSzIp_List_Ret";
    return $pack;
}

/**
 * 基本规则管理-IP安全域-失败
 *
 * @param $host
 * @param $content
 * @return array
 * <pre>
 * code => OPFC_RuleSzIp_List_Err
 * html => 调用html页面
 * data => array{error => 失败原因（序号）}
 * </pre>
 */
function FFC_RuleSzIp_List_Err($host, $content)
{
    $content = substr($content, 2);//切去操作码
    $get = unpack("C1error", $content);
    $error = $get["error"];//失败原因
    $pack = array(
        "code" => OPFC_RuleSzIp_List_Err,
        "html" => "",//TODO 调用html页面
        "data" => array(
            "error" => $error,
        ),
    );
    echo "FFC_RuleSzIp_List_Err";
    return $pack;
}

/**
 * 基本规则管理-IP安全域-添加-成功
 *
 * @param $host
 * @param $content null
 * @return array
 * <pre>
 * code => OPFC_RuleSzIp_Add_Ok
 * html => 调用html页面
 * data => null
 * </pre>
 */
function FFC_RuleSzIp_Add_Ok($host, $content)
{
    $pack = array(
        "code" => OPFC_RuleSzIp_Add_Ok,
        "html" => "",//TODO 调用html页面
        "data" => null,
    );
    echo "FFC_RuleSzIp_Add_Ok";
    return $pack;
}

/**
 * 基本规则管理-IP安全域-添加-失败
 *
 * @param $host
 * @param $content
 * @return array
 * <pre>
 * code => OPFC_RuleSzIp_Add_Err
 * html => 调用html页面
 * data => array{error => 失败原因（序号）}
 * </pre>
 */
function FFC_RuleSzIp_Add_Err($host, $content)
{
    $content = substr($content, 2);//切去操作码
    $get = unpack("C1error", $content);
    $error = $get["error"];//失败原因
    $pack = array(
        "code" => OPFC_RuleSzIp_Add_Err,
        "html" => "",//TODO 调用html页面
        "data" => array(
            "error" => $error,
        ),
    );
    echo "FFC_RuleSzIp_Add_Err";
    return $pack;
}

/**
 * 基本规则管理-IP安全域-全部删除-成功
 *
 * @param $host
 * @param $content null
 * @return array
 * <pre>
 * code => OPFC_RuleSzIp_Cls_Ok
 * html => 调用html页面
 * data => null
 * </pre>
 */
function FFC_RuleSzIp_Cls_Ok($host, $content)
{
    $pack = array(
        "code" => OPFC_RuleSzIp_Cls_Ok,
        "html" => "",//TODO 调用html页面
        "data" => null,
    );
    echo "FFC_RuleSzIp_Cls_Ok";
    return $pack;
}

/**
 * 基本规则管理-IP安全域-全部删除-失败
 *
 * @param $host
 * @param $content
 * @return array
 * <pre>
 * code => OPFC_RuleSzIp_Cls_Err
 * html => 调用html页面
 * data => array{error => 失败原因（序号）}
 * </pre>
 */
function FFC_RuleSzIp_Cls_Err($host, $content)
{
    $content = substr($content, 2);//切去操作码
    $get = unpack("C1error", $content);
    $error = $get["error"];//失败原因
    $pack = array(
        "code" => OPFC_RuleSzIp_Cls_Err,
        "html" => "",//TODO 调用html页面
        "data" => array(
            "error" => $error,
        ),
    );
    echo "FFC_RuleSzIp_Cls_Err";
    return $pack;
}

/**
 * 基本规则管理-IP安全域-激活全部-成功
 *
 * @param $host
 * @param $content null
 * @return array
 * <pre>
 * code => OPFC_RuleSzIp_Enable_Ok
 * html => 调用html页面
 * data => null
 * </pre>
 */
function FFC_RuleSzIp_Enable_Ok($host, $content)
{
    $pack = array(
        "code" => OPFC_RuleSzIp_Enable_Ok,
        "html" => "",//TODO 调用html页面
        "data" => null,
    );
    echo "FFC_RuleSzIp_Enable_Ok";
    return $pack;
}

/**
 * 基本规则管理-IP安全域-激活全部-失败
 *
 * @param $host
 * @param $content
 * @return array
 * <pre>
 * code => OPFC_RuleSzIp_Enable_Err
 * html => 调用html页面
 * data => array{error => 失败原因（序号）}
 * </pre>
 */
function FFC_RuleSzIp_Enable_Err($host, $content)
{
    $content = substr($content, 2);//切去操作码
    $get = unpack("C1error", $content);
    $error = $get["error"];//失败原因
    $pack = array(
        "code" => OPFC_RuleSzIp_Enable_Err,
        "html" => "",//TODO 调用html页面
        "data" => array(
            "error" => $error,
        ),
    );
    echo "FFC_RuleSzIp_Enable_Err";
    return $pack;
}

/**
 * 基本规则管理-IP安全域-禁用全部-成功
 *
 * @param $host
 * @param $content null
 * @return array
 * <pre>
 * code => OPFC_RuleSzIp_Disable_Ok
 * html => 调用html页面
 * data => null
 * </pre>
 */
function FFC_RuleSzIp_Disable_Ok($host, $content)
{
    $pack = array(
        "code" => OPFC_RuleSzIp_Disable_Ok,
        "html" => "",//TODO 调用html页面
        "data" => null,
    );
    echo "FFC_RuleSzIp_Disable_Ok";
    return $pack;
}

/**
 * 基本规则管理-IP安全域-禁用全部-失败
 *
 * @param $host
 * @param $content
 * @return array
 * <pre>
 * code => OPFC_RuleSzIp_Disable_Err
 * html => 调用html页面
 * data => array{error => 失败原因（序号）}
 * </pre>
 */
function FFC_RuleSzIp_Disable_Err($host, $content)
{
    $content = substr($content, 2);//切去操作码
    $get = unpack("C1error", $content);
    $error = $get["error"];//失败原因
    $pack = array(
        "code" => OPFC_RuleSzIp_Disable_Err,
        "html" => "",//TODO 调用html页面
        "data" => array(
            "error" => $error,
        ),
    );
    echo "FFC_RuleSzIp_Disable_Err";
    return $pack;
}

/**
 * 基本规则管理-IP安全域-编辑-成功
 *
 * @param $host
 * @param $content null
 * @return array
 * <pre>
 * code => OPFC_RuleSzIp_Edit_Ok
 * html => 调用html页面
 * data => null
 * </pre>
 */
function FFC_RuleSzIp_Edit_Ok($host, $content)
{
    $pack = array(
        "code" => OPFC_RuleSzIp_Edit_Ok,
        "html" => "",//TODO 调用html页面
        "data" => null,
    );
    echo "FFC_RuleSzIp_Edit_Ok";
    return $pack;
}

/**
 * 基本规则管理-IP安全域-编辑-失败
 *
 * @param $host
 * @param $content
 * @return array
 * <pre>
 * code => OPFC_RuleSzIp_Edit_Err
 * html => 调用html页面
 * data => array{error => 失败原因（序号）}
 * </pre>
 */
function FFC_RuleSzIp_Edit_Err($host, $content)
{
    $content = substr($content, 2);//切去操作码
    $get = unpack("C1error", $content);
    $error = $get["error"];//失败原因
    $pack = array(
        "code" => OPFC_RuleSzIp_Edit_Err,
        "html" => "",//TODO 调用html页面
        "data" => array(
            "error" => $error,
        ),
    );
    echo "FFC_RuleSzIp_Edit_Err";
    return $pack;
}

/**
 * 基本规则管理-IP安全域-删除-成功
 *
 * @param $host
 * @param $content null
 * @return array
 * <pre>
 * code => OPFC_RuleSzIp_Del_Ok
 * html => 调用html页面
 * data => null
 * </pre>
 */
function FFC_RuleSzIp_Del_Ok($host, $content)
{
    $pack = array(
        "code" => OPFC_RuleSzIp_Del_Ok,
        "html" => "",//TODO 调用html页面
        "data" => null,
    );
    echo "FFC_RuleSzIp_Del_Ok";
    return $pack;
}

/**
 * 基本规则管理-IP安全域-删除-失败
 *
 * @param $host
 * @param $content
 * @return array
 * <pre>
 * code => OPFC_RuleSzIp_Del_Err
 * html => 调用html页面
 * data => array{error => 失败原因（序号）}
 * </pre>
 */
function FFC_RuleSzIp_Del_Err($host, $content)
{
    $content = substr($content, 2);//切去操作码
    $get = unpack("C1error", $content);
    $error = $get["error"];//失败原因
    $pack = array(
        "code" => OPFC_RuleSzIp_Del_Err,
        "html" => "",//TODO 调用html页面
        "data" => array(
            "error" => $error,
        ),
    );
    echo "FFC_RuleSzIp_Del_Err";
    return $pack;
}

/**
 * 基本规则管理-传输层安全域-内容
 * TODO IP
 * @param $host
 * @param $content
 * @return array
 * <pre>
 * code => OPFC_RuleSzTrans_List_Ret
 * html => 调用html页面
 * data => {
 *      beginIndex => 起始索引(从0开始)
 *      number => 数量
 *      data => array(数据包，数组) {
 *                  ["dataBaseID"]数据库ID,
 *                  ["IP"]IP
 *                  ["mask"]掩码
 *                  ["beginPort"]起始端口
 *                  ["targetPort"]目的端口
 *                  ["priority"]优先级ID
 *             }
 * </pre>
 */
function FFC_RuleSzTrans_List_Ret($host, $content)
{
    $content = substr($content, 2);//切去操作码
    $get = unpack("L1beginIndex/L1number", $content);
    $beginIndex = $get["beginIndex"];//起始索引(从0开始)
    $number = $get["number"];//数量
    //TODO 解析数据包
    $content = substr($content, 8);//只留下数据部分
    $data = array();//数据包
    for ($i = 0; $i < $number; ++$i) {
        //循环加入数组
        //TODO ip地址？掩码？
        $get = unpack("L1databaseID/C4ip/C4mask/S1beginPort/S1targetPort/C1priority", $content);
        $databaseID = $get["databaseID"];//数据库ID
        $ip = $get["ip1"].".".$get["ip2"].".".$get["ip3"].".".$get["ip4"];//IP
        $mask = $get["mask1"].".".$get["mask2"].".".$get["mask3"].".".$get["mask4"];//掩码
        $beginPort = $get["beginPort"];//起始端口
        $targetPort = $get["targetPort"];//目的端口
        $priority = $get["priority"];//优先级ID
        $package = array(
            "dataBaseID" => $databaseID,
            "IP" => $ip,
            "mask" => $mask,
            "beginPort" => $beginPort,
            "targetPort" => $targetPort,
            "priority" => $priority,
        );
        $data[$i] = $package;//加入数组
        $content = substr($content, 17);//只留下剩余数据
    }
    $pack = array(
        "code" => OPFC_RuleSzTrans_List_Ret,
        "html" => "",//TODO html
        "data" => array(
            "beginIndex" => $beginIndex,
            "number" => $number,
            "data" => $data,
        ),
    );
    echo "FFC_RuleSzTrans_List_Ret";
    return $pack;
}

/**
 * 基本规则管理-传输层安全域-失败
 *
 * @param $host
 * @param $content
 * @return array
 * <pre>
 * code => OPFC_RuleSzTrans_List_Err
 * html => 调用html页面
 * data => array{error => 失败原因（序号）}
 * </pre>
 */
function FFC_RuleSzTrans_List_Err($host, $content)
{
    $content = substr($content, 2);//切去操作码
    $get = unpack("C1error", $content);
    $error = $get["error"];//失败原因
    $pack = array(
        "code" => OPFC_RuleSzTrans_List_Err,
        "html" => "",//TODO 调用html页面
        "data" => array(
            "error" => $error,
        ),
    );
    echo "FFC_RuleSzTrans_List_Err";
    return $pack;
}

/**
 * 基本规则管理-传输层安全域-添加-成功
 *
 * @param $host
 * @param $content null
 * @return array
 * <pre>
 * code => OPFC_RuleSzTrans_Add_Ok
 * html => 调用html页面
 * data => null
 * </pre>
 */
function FFC_RuleSzTrans_Add_Ok($host, $content)
{
    $pack = array(
        "code" => OPFC_RuleSzTrans_Add_Ok,
        "html" => "",//TODO 调用html页面
        "data" => null,
    );
    echo "FFC_RuleSzTrans_Add_Ok";
    return $pack;
}

/**
 * 基本规则管理-传输层安全域-添加-失败
 *
 * @param $host
 * @param $content
 * @return array
 * <pre>
 * code => OPFC_RuleSzTrans_Add_Err
 * html => 调用html页面
 * data => array{error => 失败原因（序号）}
 * </pre>
 */
function FFC_RuleSzTrans_Add_Err($host, $content)
{
    $content = substr($content, 2);//切去操作码
    $get = unpack("C1error", $content);
    $error = $get["error"];//失败原因
    $pack = array(
        "code" => OPFC_RuleSzTrans_Add_Err,
        "html" => "",//TODO 调用html页面
        "data" => array(
            "error" => $error,
        ),
    );
    echo "FFC_RuleSzTrans_Add_Err";
    return $pack;
}

/**
 * 基本规则管理-传输层安全域-全部删除-成功
 *
 * @param $host
 * @param $content null
 * @return array
 * <pre>
 * code => OPFC_RuleSzTrans_Cls_Ok
 * html => 调用html页面
 * data => null
 * </pre>
 */
function FFC_RuleSzTrans_Cls_Ok($host, $content)
{
    $pack = array(
        "code" => OPFC_RuleSzTrans_Cls_Ok,
        "html" => "",//TODO 调用html页面
        "data" => null,
    );
    echo "FFC_RuleSzTrans_Cls_Ok";
    return $pack;
}

/**
 * 基本规则管理-传输层安全域-全部删除-失败
 *
 * @param $host
 * @param $content
 * @return array
 * <pre>
 * code => OPFC_RuleSzTrans_Cls_Err
 * html => 调用html页面
 * data => array{error => 失败原因（序号）}
 * </pre>
 */
function FFC_RuleSzTrans_Cls_Err($host, $content)
{
    $content = substr($content, 2);//切去操作码
    $get = unpack("C1error", $content);
    $error = $get["error"];//失败原因
    $pack = array(
        "code" => OPFC_RuleSzTrans_Cls_Err,
        "html" => "",//TODO 调用html页面
        "data" => array(
            "error" => $error,
        ),
    );
    echo "FFC_RuleSzTrans_Cls_Err";
    return $pack;
}

/**
 * 基本规则管理-传输层安全域-激活全部-成功
 *
 * @param $host
 * @param $content null
 * @return array
 * <pre>
 * code => OPFC_RuleSzTrans_Enable_Ok
 * html => 调用html页面
 * data => null
 * </pre>
 */
function FFC_RuleSzTrans_Enable_Ok($host, $content)
{
    $pack = array(
        "code" => OPFC_RuleSzTrans_Enable_Ok,
        "html" => "",//TODO 调用html页面
        "data" => null,
    );
    echo "FFC_RuleSzTrans_Enable_Ok";
    return $pack;
}

/**
 * 基本规则管理-传输层安全域-激活全部-失败
 *
 * @param $host
 * @param $content
 * @return array
 * <pre>
 * code => OPFC_RuleSzTrans_Enable_Err
 * html => 调用html页面
 * data => array{error => 失败原因（序号）}
 * </pre>
 */
function FFC_RuleSzTrans_Enable_Err($host, $content)
{
    $content = substr($content, 2);//切去操作码
    $get = unpack("C1error", $content);
    $error = $get["error"];//失败原因
    $pack = array(
        "code" => OPFC_RuleSzTrans_Enable_Err,
        "html" => "",//TODO 调用html页面
        "data" => array(
            "error" => $error,
        ),
    );
    echo "FFC_RuleSzTrans_Enable_Err";
    return $pack;
}

/**
 * 基本规则管理-传输层安全域-禁用全部-成功
 *
 * @param $host
 * @param $content null
 * @return array
 * <pre>
 * code => OPFC_RuleSzTrans_Disable_Ok
 * html => 调用html页面
 * data => null
 * </pre>
 */
function FFC_RuleSzTrans_Disable_Ok($host, $content)
{
    $pack = array(
        "code" => OPFC_RuleSzTrans_Disable_Ok,
        "html" => "",//TODO 调用html页面
        "data" => null,
    );
    echo "FFC_RuleSzTrans_Disable_Ok";
    return $pack;
}

/**
 * 基本规则管理-传输层安全域-禁用全部-失败
 *
 * @param $host
 * @param $content
 * @return array
 * <pre>
 * code => OPFC_RuleSzTrans_Disable_Err
 * html => 调用html页面
 * data => array{error => 失败原因（序号）}
 * </pre>
 */
function FFC_RuleSzTrans_Disable_Err($host, $content)
{
    $content = substr($content, 2);//切去操作码
    $get = unpack("C1error", $content);
    $error = $get["error"];//失败原因
    $pack = array(
        "code" => OPFC_RuleSzTrans_Disable_Err,
        "html" => "",//TODO 调用html页面
        "data" => array(
            "error" => $error,
        ),
    );
    echo "FFC_RuleSzTrans_Disable_Err";
    return $pack;
}

/**
 * 基本规则管理-传输层安全域-编辑-成功
 *
 * @param $host
 * @param $content null
 * @return array
 * <pre>
 * code => OPFC_RuleSzTrans_Edit_Ok
 * html => 调用html页面
 * data => null
 * </pre>
 */
function FFC_RuleSzTrans_Edit_Ok($host, $content)
{
    $pack = array(
        "code" => OPFC_RuleSzTrans_Edit_Ok,
        "html" => "",//TODO 调用html页面
        "data" => null,
    );
    echo "FFC_RuleSzTrans_Edit_Ok";
    return $pack;
}

/**
 * 基本规则管理-传输层安全域-编辑-失败
 *
 * @param $host
 * @param $content
 * @return array
 * <pre>
 * code => OPFC_RuleSzTrans_Edit_Err
 * html => 调用html页面
 * data => array{error => 失败原因（序号）}
 * </pre>
 */
function FFC_RuleSzTrans_Edit_Err($host, $content)
{
    $content = substr($content, 2);//切去操作码
    $get = unpack("C1error", $content);
    $error = $get["error"];//失败原因
    $pack = array(
        "code" => OPFC_RuleSzTrans_Edit_Err,
        "html" => "",//TODO 调用html页面
        "data" => array(
            "error" => $error,
        ),
    );
    echo "FFC_RuleSzTrans_Edit_Err";
    return $pack;
}

/**
 * 基本规则管理-传输层安全域-删除-成功
 *
 * @param $host
 * @param $content null
 * @return array
 * <pre>
 * code => OPFC_RuleSzTrans_Del_Ok
 * html => 调用html页面
 * data => null
 * </pre>
 */
function FFC_RuleSzTrans_Del_Ok($host, $content)
{
    $pack = array(
        "code" => OPFC_RuleSzTrans_Del_Ok,
        "html" => "",//TODO 调用html页面
        "data" => null,
    );
    echo "FFC_RuleSzTrans_Del_Ok";
    return $pack;
}

/**
 * 基本规则管理-传输层安全域-删除-失败
 *
 * @param $host
 * @param $content
 * @return array
 * <pre>
 * code => OPFC_RuleSzTrans_Del_Err
 * html => 调用html页面
 * data => array{error => 失败原因（序号）}
 * </pre>
 */
function FFC_RuleSzTrans_Del_Err($host, $content)
{
    $content = substr($content, 2);//切去操作码
    $get = unpack("C1error", $content);
    $error = $get["error"];//失败原因
    $pack = array(
        "code" => OPFC_RuleSzTrans_Del_Err,
        "html" => "",//TODO 调用html页面
        "data" => array(
            "error" => $error,
        ),
    );
    echo "FFC_RuleSzTrans_Del_Err";
    return $pack;
}

/**
 * 基本规则管理-TCP黑名单-内容
 *
 * @param $host
 * @param $content
 * @return array
 * <pre>
 * code => OPFC_RuleTcpBl_List_Ret
 * html => 调用html页面
 * data => {
 *      beginIndex => 起始索引(从0开始)
 *      number => 数量
 *      data => array(数据包，数组) {
 *                  dataBaseID => 旧数据库ID
 *                  beginTime => 起始时间 array(["h"]时["m"]分)
 *                  endTime => 结束时间 array(["h"]时["m"]分)
 *                  sourceIP => IP源 array([0][1][2][3])
 *                  sourceMask => 源IP掩码 array([0][1][2][3])
 *                  targetIP => 目的IP array([0][1][2][3])
 *                  targetMask => 目的IP掩码 array([0][1][2][3])
 *                  sourcePortBegin => 源端口起始
 *                  sourcePortEnd => 源端口结束
 *                  targetPortBegin => 目的端口起始
 *                  targetPortEnd => 目的端口结束
 *             }
 * </pre>
 */
function FFC_RuleTcpBl_List_Ret($host, $content)
{
    $content = substr($content, 2);//切去操作码
    $get = unpack("L1beginIndex/L1number", $content);
    $beginIndex = $get["beginIndex"];//起始索引(从0开始)
    $number = $get["number"];//数量
    //TODO 解析数据包
    $content = substr($content, 8);//只留下数据部分
    $data = array();//数据包
    for ($i = 0; $i < $number; ++$i) {
        //循环加入数组
        //TODO ip地址？掩码？
        $get = unpack("L1databaseID/C2beginTime/C2endTime/C4sourceIP/C4sourceMask/
        C4targetIP/C4targetMask/S1sourcePortBegin/S1sourcePortEnd/S1targetPortBegin/S1targetPortEnd", $content);
        $databaseID = $get["databaseID"];//数据库ID
        $beginTime = array("h"=>$get["beginTime1"],"m"=>$get["beginTime2"]);//起始时间
        $endTime = array("h"=>$get["endTime1"],"m"=>$get["endTime2"]);//结束时间
        $sourceIP = array($get["sourceIP1"],$get["sourceIP2"],$get["sourceIP3"],$get["sourceIP4"]);//IP源
        $sourceMask = array($get["sourceMask1"],$get["sourceMask2"],$get["sourceMask3"],$get["sourceMask4"]);//源IP掩码
        $targetIP = array($get["targetIP1"],$get["targetIP2"],$get["targetIP3"],$get["targetIP4"]);//目的IP
        $targetMask = array($get["targetMask1"],$get["targetMask2"],$get["targetMask3"],$get["targetMask4"]);//目的IP掩码
        $sourcePortBegin = $get["sourcePortBegin"];//源端口起始
        $sourcePortEnd = $get["sourcePortEnd"];//源端口结束
        $targetPortBegin = $get["targetPortBegin"];//目的端口起始
        $targetPortEnd = $get["targetPortEnd"];//目的端口结束
        $package = array(
            "dataBaseID" => $databaseID,
            "beginTime" => $beginTime,
            "endTime" => $endTime,
            "sourceIP" => $sourceIP,
            "sourceMask" => $sourceMask,
            "targetIP" => $targetIP,
            "targetMask" => $targetMask,
            "sourcePortBegin" => $sourcePortBegin,
            "sourcePortEnd" => $sourcePortEnd,
            "targetPortBegin" => $targetPortBegin,
            "targetPortEnd" => $targetPortEnd,
        );
        $data[$i] = $package;//加入数组
        $content = substr($content, 32);//只留下剩余数据
    }
    $pack = array(
        "code" => OPFC_RuleTcpBl_List_Ret,
        "html" => "",//TODO html
        "data" => array(
            "beginIndex" => $beginIndex,
            "number" => $number,
            "data" => $data,
        ),
    );
    echo "FFC_RuleTcpBl_List_Ret";
    return $pack;
}
/**
 * 基本规则管理-TCP黑名单-失败
 *
 * @param $host
 * @param $content
 * @return array
 * <pre>
 * code => OPFC_RuleTcpBl_List_Err
 * html => 调用html页面
 * data => array{error => 失败原因（序号）}
 * </pre>
 */
function FFC_RuleTcpBl_List_Err($host, $content)
{
    $content = substr($content, 2);//切去操作码
    $get = unpack("C1error", $content);
    $error = $get["error"];//失败原因
    $pack = array(
        "code" => OPFC_RuleTcpBl_List_Err,
        "html" => "",//TODO 调用html页面
        "data" => array(
            "error" => $error,
        ),
    );
    echo "FFC_RuleTcpBl_List_Err";
    return $pack;
}

/**
 * 基本规则管理-TCP黑名单-添加-成功
 *
 * @param $host
 * @param $content null
 * @return array
 * <pre>
 * code => OPFC_RuleTcpBl_Add_Ok
 * html => 调用html页面
 * data => null
 * </pre>
 */
function FFC_RuleTcpBl_Add_Ok($host, $content)
{
    $pack = array(
        "code" => OPFC_RuleTcpBl_Add_Ok,
        "html" => "",//TODO 调用html页面
        "data" => null,
    );
    echo "FFC_RuleTcpBl_Add_Ok";
    return $pack;
}
/**
 * 基本规则管理-TCP黑名单-添加-失败
 *
 * @param $host
 * @param $content
 * @return array
 * <pre>
 * code => OPFC_RuleTcpBl_Add_Err
 * html => 调用html页面
 * data => array{error => 失败原因（序号）}
 * </pre>
 */
function FFC_RuleTcpBl_Add_Err($host, $content)
{
    $content = substr($content, 2);//切去操作码
    $get = unpack("C1error", $content);
    $error = $get["error"];//失败原因
    $pack = array(
        "code" => OPFC_RuleTcpBl_Add_Err,
        "html" => "",//TODO 调用html页面
        "data" => array(
            "error" => $error,
        ),
    );
    echo "FFC_RuleTcpBl_Add_Err";
    return $pack;
}

/**
 * 基本规则管理-TCP黑名单-全部删除-成功
 *
 * @param $host
 * @param $content null
 * @return array
 * <pre>
 * code => OPFC_RuleTcpBl_Cls_Ok
 * html => 调用html页面
 * data => null
 * </pre>
 */
function FFC_RuleTcpBl_Cls_Ok($host, $content)
{
    $pack = array(
        "code" => OPFC_RuleTcpBl_Cls_Ok,
        "html" => "",//TODO 调用html页面
        "data" => null,
    );
    echo "FFC_RuleTcpBl_Cls_Ok";
    return $pack;
}
/**
 * 基本规则管理-TCP黑名单-全部删除-失败
 *
 * @param $host
 * @param $content
 * @return array
 * <pre>
 * code => OPFC_RuleTcpBl_Cls_Err
 * html => 调用html页面
 * data => array{error => 失败原因（序号）}
 * </pre>
 */
function FFC_RuleTcpBl_Cls_Err($host, $content)
{
    $content = substr($content, 2);//切去操作码
    $get = unpack("C1error", $content);
    $error = $get["error"];//失败原因
    $pack = array(
        "code" => OPFC_RuleTcpBl_Cls_Err,
        "html" => "",//TODO 调用html页面
        "data" => array(
            "error" => $error,
        ),
    );
    echo "FFC_RuleTcpBl_Cls_Err";
    return $pack;
}

/**
 * 基本规则管理-TCP黑名单-激活全部-成功
 *
 * @param $host
 * @param $content null
 * @return array
 * <pre>
 * code => OPFC_RuleTcpBl_Enable_Ok
 * html => 调用html页面
 * data => null
 * </pre>
 */
function FFC_RuleTcpBl_Enable_Ok($host, $content)
{
    $pack = array(
        "code" => OPFC_RuleTcpBl_Enable_Ok,
        "html" => "",//TODO 调用html页面
        "data" => null,
    );
    echo "FFC_RuleTcpBl_Enable_Ok";
    return $pack;
}
/**
 * 基本规则管理-TCP黑名单-激活全部-失败
 *
 * @param $host
 * @param $content
 * @return array
 * <pre>
 * code => OPFC_RuleTcpBl_Enable_Err
 * html => 调用html页面
 * data => array{error => 失败原因（序号）}
 * </pre>
 */
function FFC_RuleTcpBl_Enable_Err($host, $content)
{
    $content = substr($content, 2);//切去操作码
    $get = unpack("C1error", $content);
    $error = $get["error"];//失败原因
    $pack = array(
        "code" => OPFC_RuleTcpBl_Enable_Err,
        "html" => "",//TODO 调用html页面
        "data" => array(
            "error" => $error,
        ),
    );
    echo "FFC_RuleTcpBl_Enable_Err";
    return $pack;
}

/**
 * 基本规则管理-TCP黑名单-禁用全部-成功
 *
 * @param $host
 * @param $content null
 * @return array
 * <pre>
 * code => OPFC_RuleTcpBl_Disable_Ok
 * html => 调用html页面
 * data => null
 * </pre>
 */
function FFC_RuleTcpBl_Disable_Ok($host, $content)
{
    $pack = array(
        "code" => OPFC_RuleTcpBl_Disable_Ok,
        "html" => "",//TODO 调用html页面
        "data" => null,
    );
    echo "FFC_RuleTcpBl_Disable_Ok";
    return $pack;
}
/**
 * 基本规则管理-TCP黑名单-禁用全部-失败
 *
 * @param $host
 * @param $content
 * @return array
 * <pre>
 * code => OPFC_RuleTcpBl_Disable_Err
 * html => 调用html页面
 * data => array{error => 失败原因（序号）}
 * </pre>
 */
function FFC_RuleTcpBl_Disable_Err($host, $content)
{
    $content = substr($content, 2);//切去操作码
    $get = unpack("C1error", $content);
    $error = $get["error"];//失败原因
    $pack = array(
        "code" => OPFC_RuleTcpBl_Disable_Err,
        "html" => "",//TODO 调用html页面
        "data" => array(
            "error" => $error,
        ),
    );
    echo "FFC_RuleTcpBl_Disable_Err";
    return $pack;
}

/**
 * 基本规则管理-TCP黑名单-编辑-成功
 *
 * @param $host
 * @param $content null
 * @return array
 * <pre>
 * code => OPFC_RuleTcpBl_Edit_Ok
 * html => 调用html页面
 * data => null
 * </pre>
 */
function FFC_RuleTcpBl_Edit_Ok($host, $content)
{
    $pack = array(
        "code" => OPFC_RuleTcpBl_Edit_Ok,
        "html" => "",//TODO 调用html页面
        "data" => null,
    );
    echo "FFC_RuleTcpBl_Edit_Ok";
    return $pack;
}
/**
 * 基本规则管理-TCP黑名单-编辑-失败
 *
 * @param $host
 * @param $content
 * @return array
 * <pre>
 * code => OPFC_RuleTcpBl_Edit_Err
 * html => 调用html页面
 * data => array{error => 失败原因（序号）}
 * </pre>
 */
function FFC_RuleTcpBl_Edit_Err($host, $content)
{
    $content = substr($content, 2);//切去操作码
    $get = unpack("C1error", $content);
    $error = $get["error"];//失败原因
    $pack = array(
        "code" => OPFC_RuleTcpBl_Edit_Err,
        "html" => "",//TODO 调用html页面
        "data" => array(
            "error" => $error,
        ),
    );
    echo "FFC_RuleTcpBl_Edit_Err";
    return $pack;
}

/**
 * 基本规则管理-TCP黑名单-删除-成功
 *
 * @param $host
 * @param $content null
 * @return array
 * <pre>
 * code => OPFC_RuleTcpBl_Del_Ok
 * html => 调用html页面
 * data => null
 * </pre>
 */
function FFC_RuleTcpBl_Del_Ok($host, $content)
{
    $pack = array(
        "code" => OPFC_RuleTcpBl_Del_Ok,
        "html" => "",//TODO 调用html页面
        "data" => null,
    );
    echo "FFC_RuleTcpBl_Del_Ok";
    return $pack;
}
/**
 * 基本规则管理-TCP黑名单-删除-失败
 *
 * @param $host
 * @param $content
 * @return array
 * <pre>
 * code => OPFC_RuleTcpBl_Del_Err
 * html => 调用html页面
 * data => array{error => 失败原因（序号）}
 * </pre>
 */
function FFC_RuleTcpBl_Del_Err($host, $content)
{
    $content = substr($content, 2);//切去操作码
    $get = unpack("C1error", $content);
    $error = $get["error"];//失败原因
    $pack = array(
        "code" => OPFC_RuleTcpBl_Del_Err,
        "html" => "",//TODO 调用html页面
        "data" => array(
            "error" => $error,
        ),
    );
    echo "FFC_RuleTcpBl_Del_Err";
    return $pack;
}


function FFC_RuleTcpBl_Import_One_Ok($host, $content)
{
    echo "FFC_RuleTcpBl_Import_One_Ok                ";
}

function FFC_RuleTcpBl_Import_One_Err($host, $content)
{
    echo "FFC_RuleTcpBl_Import_One_Err               ";
}

function FFC_RuleTcpBl_Import_All_Ok($host, $content)
{
    echo "FFC_RuleTcpBl_Import_All_Ok                ";
}

function FFC_RuleTcpBl_Import_All_Err($host, $content)
{
    echo "FFC_RuleTcpBl_Import_All_Err               ";
}

function FFC_RuleTcpBl_Export_Ret($host, $content)
{
    echo "FFC_RuleTcpBl_Export_Ret                   ";
}

function FFC_RuleTcpBl_Export_Empty($host, $content)
{
    echo "FFC_RuleTcpBl_Export_Empty                 ";
}

function FFC_RuleTcpBl_Export_Err($host, $content)
{
    echo "FFC_RuleTcpBl_Export_Err                   ";
}

/**
 * 基本规则管理-TCP白名单-内容
 *
 * @param $host
 * @param $content
 * @return array
 * <pre>
 * code => OPFC_RuleTcpWl_List_Ret
 * html => 调用html页面
 * data => {
 *      beginIndex => 起始索引(从0开始)
 *      number => 数量
 *      data => array(数据包，数组) {
 *                  dataBaseID => 旧数据库ID
 *                  beginTime => 起始时间 array(["h"]时["m"]分)
 *                  endTime => 结束时间 array(["h"]时["m"]分)
 *                  sourceIP => IP源 array([0][1][2][3])
 *                  sourceMask => 源IP掩码 array([0][1][2][3])
 *                  targetIP => 目的IP array([0][1][2][3])
 *                  targetMask => 目的IP掩码 array([0][1][2][3])
 *                  sourcePortBegin => 源端口起始
 *                  sourcePortEnd => 源端口结束
 *                  targetPortBegin => 目的端口起始
 *                  targetPortEnd => 目的端口结束
 *             }
 * </pre>
 */
function FFC_RuleTcpWl_List_Ret($host, $content)
{
    $content = substr($content, 2);//切去操作码
    $get = unpack("L1beginIndex/L1number", $content);
    $beginIndex = $get["beginIndex"];//起始索引(从0开始)
    $number = $get["number"];//数量
    //TODO 解析数据包
    $content = substr($content, 8);//只留下数据部分
    $data = array();//数据包
    for ($i = 0; $i < $number; ++$i) {
        //循环加入数组
        //TODO ip地址？掩码？
        $get = unpack("L1databaseID/C2beginTime/C2endTime/C4sourceIP/C4sourceMask/
        C4targetIP/C4targetMask/S1sourcePortBegin/S1sourcePortEnd/S1targetPortBegin/S1targetPortEnd", $content);
        $databaseID = $get["databaseID"];//数据库ID
        $beginTime = array("h"=>$get["beginTime1"],"m"=>$get["beginTime2"]);//起始时间
        $endTime = array("h"=>$get["endTime1"],"m"=>$get["endTime2"]);//结束时间
        $sourceIP = array($get["sourceIP1"],$get["sourceIP2"],$get["sourceIP3"],$get["sourceIP4"]);//IP源
        $sourceMask = array($get["sourceMask1"],$get["sourceMask2"],$get["sourceMask3"],$get["sourceMask4"]);//源IP掩码
        $targetIP = array($get["targetIP1"],$get["targetIP2"],$get["targetIP3"],$get["targetIP4"]);//目的IP
        $targetMask = array($get["targetMask1"],$get["targetMask2"],$get["targetMask3"],$get["targetMask4"]);//目的IP掩码
        $sourcePortBegin = $get["sourcePortBegin"];//源端口起始
        $sourcePortEnd = $get["sourcePortEnd"];//源端口结束
        $targetPortBegin = $get["targetPortBegin"];//目的端口起始
        $targetPortEnd = $get["targetPortEnd"];//目的端口结束
        $package = array(
            "dataBaseID" => $databaseID,
            "beginTime" => $beginTime,
            "endTime" => $endTime,
            "sourceIP" => $sourceIP,
            "sourceMask" => $sourceMask,
            "targetIP" => $targetIP,
            "targetMask" => $targetMask,
            "sourcePortBegin" => $sourcePortBegin,
            "sourcePortEnd" => $sourcePortEnd,
            "targetPortBegin" => $targetPortBegin,
            "targetPortEnd" => $targetPortEnd,
        );
        $data[$i] = $package;//加入数组
        $content = substr($content, 32);//只留下剩余数据
    }
    $pack = array(
        "code" => OPFC_RuleTcpWl_List_Ret,
        "html" => "",//TODO html
        "data" => array(
            "beginIndex" => $beginIndex,
            "number" => $number,
            "data" => $data,
        ),
    );
    echo "FFC_RuleTcpWl_List_Ret";
    return $pack;
}
/**
 * 基本规则管理-TCP白名单-失败
 *
 * @param $host
 * @param $content
 * @return array
 * <pre>
 * code => OPFC_RuleTcpWl_List_Err
 * html => 调用html页面
 * data => array{error => 失败原因（序号）}
 * </pre>
 */
function FFC_RuleTcpWl_List_Err($host, $content)
{
    $content = substr($content, 2);//切去操作码
    $get = unpack("C1error", $content);
    $error = $get["error"];//失败原因
    $pack = array(
        "code" => OPFC_RuleTcpWl_List_Err,
        "html" => "",//TODO 调用html页面
        "data" => array(
            "error" => $error,
        ),
    );
    echo "FFC_RuleTcpWl_List_Err";
    return $pack;
}

/**
 * 基本规则管理-TCP白名单-添加-成功
 *
 * @param $host
 * @param $content null
 * @return array
 * <pre>
 * code => OPFC_RuleTcpWl_Add_Ok
 * html => 调用html页面
 * data => null
 * </pre>
 */
function FFC_RuleTcpWl_Add_Ok($host, $content)
{
    $pack = array(
        "code" => OPFC_RuleTcpWl_Add_Ok,
        "html" => "",//TODO 调用html页面
        "data" => null,
    );
    echo "FFC_RuleTcpWl_Add_Ok";
    return $pack;
}
/**
 * 基本规则管理-TCP白名单-添加-失败
 *
 * @param $host
 * @param $content
 * @return array
 * <pre>
 * code => OPFC_RuleTcpWl_Add_Err
 * html => 调用html页面
 * data => array{error => 失败原因（序号）}
 * </pre>
 */
function FFC_RuleTcpWl_Add_Err($host, $content)
{
    $content = substr($content, 2);//切去操作码
    $get = unpack("C1error", $content);
    $error = $get["error"];//失败原因
    $pack = array(
        "code" => OPFC_RuleTcpWl_Add_Err,
        "html" => "",//TODO 调用html页面
        "data" => array(
            "error" => $error,
        ),
    );
    echo "FFC_RuleTcpWl_Add_Err";
    return $pack;
}

/**
 * 基本规则管理-TCP白名单-全部删除-成功
 *
 * @param $host
 * @param $content null
 * @return array
 * <pre>
 * code => OPFC_RuleTcpWl_Cls_Ok
 * html => 调用html页面
 * data => null
 * </pre>
 */
function FFC_RuleTcpWl_Cls_Ok($host, $content)
{
    $pack = array(
        "code" => OPFC_RuleTcpWl_Cls_Ok,
        "html" => "",//TODO 调用html页面
        "data" => null,
    );
    echo "FFC_RuleTcpWl_Cls_Ok";
    return $pack;
}
/**
 * 基本规则管理-TCP白名单-全部删除-失败
 *
 * @param $host
 * @param $content
 * @return array
 * <pre>
 * code => OPFC_RuleTcpWl_Cls_Err
 * html => 调用html页面
 * data => array{error => 失败原因（序号）}
 * </pre>
 */
function FFC_RuleTcpWl_Cls_Err($host, $content)
{
    $content = substr($content, 2);//切去操作码
    $get = unpack("C1error", $content);
    $error = $get["error"];//失败原因
    $pack = array(
        "code" => OPFC_RuleTcpWl_Cls_Err,
        "html" => "",//TODO 调用html页面
        "data" => array(
            "error" => $error,
        ),
    );
    echo "FFC_RuleTcpWl_Cls_Err";
    return $pack;
}

/**
 * 基本规则管理-TCP白名单-激活全部-成功
 *
 * @param $host
 * @param $content null
 * @return array
 * <pre>
 * code => OPFC_RuleTcpWl_Enable_Ok
 * html => 调用html页面
 * data => null
 * </pre>
 */
function FFC_RuleTcpWl_Enable_Ok($host, $content)
{
    $pack = array(
        "code" => OPFC_RuleTcpWl_Enable_Ok,
        "html" => "",//TODO 调用html页面
        "data" => null,
    );
    echo "FFC_RuleTcpWl_Enable_Ok";
    return $pack;
}
/**
 * 基本规则管理-TCP白名单-激活全部-失败
 *
 * @param $host
 * @param $content
 * @return array
 * <pre>
 * code => OPFC_RuleTcpWl_Enable_Err
 * html => 调用html页面
 * data => array{error => 失败原因（序号）}
 * </pre>
 */
function FFC_RuleTcpWl_Enable_Err($host, $content)
{
    $content = substr($content, 2);//切去操作码
    $get = unpack("C1error", $content);
    $error = $get["error"];//失败原因
    $pack = array(
        "code" => OPFC_RuleTcpWl_Enable_Err,
        "html" => "",//TODO 调用html页面
        "data" => array(
            "error" => $error,
        ),
    );
    echo "FFC_RuleTcpWl_Enable_Err";
    return $pack;
}

/**
 * 基本规则管理-TCP白名单-禁用全部-成功
 *
 * @param $host
 * @param $content null
 * @return array
 * <pre>
 * code => OPFC_RuleTcpWl_Disable_Ok
 * html => 调用html页面
 * data => null
 * </pre>
 */
function FFC_RuleTcpWl_Disable_Ok($host, $content)
{
    $pack = array(
        "code" => OPFC_RuleTcpWl_Disable_Ok,
        "html" => "",//TODO 调用html页面
        "data" => null,
    );
    echo "FFC_RuleTcpWl_Disable_Ok";
    return $pack;
}
/**
 * 基本规则管理-TCP白名单-禁用全部-失败
 *
 * @param $host
 * @param $content
 * @return array
 * <pre>
 * code => OPFC_RuleTcpWl_Disable_Err
 * html => 调用html页面
 * data => array{error => 失败原因（序号）}
 * </pre>
 */
function FFC_RuleTcpWl_Disable_Err($host, $content)
{
    $content = substr($content, 2);//切去操作码
    $get = unpack("C1error", $content);
    $error = $get["error"];//失败原因
    $pack = array(
        "code" => OPFC_RuleTcpWl_Disable_Err,
        "html" => "",//TODO 调用html页面
        "data" => array(
            "error" => $error,
        ),
    );
    echo "FFC_RuleTcpWl_Disable_Err";
    return $pack;
}

/**
 * 基本规则管理-TCP白名单-编辑-成功
 *
 * @param $host
 * @param $content null
 * @return array
 * <pre>
 * code => OPFC_RuleTcpWl_Edit_Ok
 * html => 调用html页面
 * data => null
 * </pre>
 */
function FFC_RuleTcpWl_Edit_Ok($host, $content)
{
    $pack = array(
        "code" => OPFC_RuleTcpWl_Edit_Ok,
        "html" => "",//TODO 调用html页面
        "data" => null,
    );
    echo "FFC_RuleTcpWl_Edit_Ok";
    return $pack;
}
/**
 * 基本规则管理-TCP白名单-编辑-失败
 *
 * @param $host
 * @param $content
 * @return array
 * <pre>
 * code => OPFC_RuleTcpWl_Edit_Err
 * html => 调用html页面
 * data => array{error => 失败原因（序号）}
 * </pre>
 */
function FFC_RuleTcpWl_Edit_Err($host, $content)
{
    $content = substr($content, 2);//切去操作码
    $get = unpack("C1error", $content);
    $error = $get["error"];//失败原因
    $pack = array(
        "code" => OPFC_RuleTcpWl_Edit_Err,
        "html" => "",//TODO 调用html页面
        "data" => array(
            "error" => $error,
        ),
    );
    echo "FFC_RuleTcpWl_Edit_Err";
    return $pack;
}

/**
 * 基本规则管理-TCP白名单-删除-成功
 *
 * @param $host
 * @param $content null
 * @return array
 * <pre>
 * code => OPFC_RuleTcpWl_Del_Ok
 * html => 调用html页面
 * data => null
 * </pre>
 */
function FFC_RuleTcpWl_Del_Ok($host, $content)
{
    $pack = array(
        "code" => OPFC_RuleTcpWl_Del_Ok,
        "html" => "",//TODO 调用html页面
        "data" => null,
    );
    echo "FFC_RuleTcpWl_Del_Ok";
    return $pack;
}
/**
 * 基本规则管理-TCP白名单-删除-失败
 *
 * @param $host
 * @param $content
 * @return array
 * <pre>
 * code => OPFC_RuleTcpWl_Del_Err
 * html => 调用html页面
 * data => array{error => 失败原因（序号）}
 * </pre>
 */
function FFC_RuleTcpWl_Del_Err($host, $content)
{
    $content = substr($content, 2);//切去操作码
    $get = unpack("C1error", $content);
    $error = $get["error"];//失败原因
    $pack = array(
        "code" => OPFC_RuleTcpWl_Del_Err,
        "html" => "",//TODO 调用html页面
        "data" => array(
            "error" => $error,
        ),
    );
    echo "FFC_RuleTcpWl_Del_Err";
    return $pack;
}

function FFC_RuleTcpWl_Import_One_Ok($host, $content)
{
    echo "FFC_RuleTcpWl_Import_One_Ok                ";
}

function FFC_RuleTcpWl_Import_One_Err($host, $content)
{
    echo "FFC_RuleTcpWl_Import_One_Err               ";
}

function FFC_RuleTcpWl_Import_All_Ok($host, $content)
{
    echo "FFC_RuleTcpWl_Import_All_Ok                ";
}

function FFC_RuleTcpWl_Import_All_Err($host, $content)
{
    echo "FFC_RuleTcpWl_Import_All_Err               ";
}

function FFC_RuleTcpWl_Export_Ret($host, $content)
{
    echo "FFC_RuleTcpWl_Export_Ret                   ";
}

function FFC_RuleTcpWl_Export_Empty($host, $content)
{
    echo "FFC_RuleTcpWl_Export_Empty                 ";
}

function FFC_RuleTcpWl_Export_Err($host, $content)
{
    echo "FFC_RuleTcpWl_Export_Err                   ";
}

/**
 * 基本规则管理-TCP无条件信任-内容
 *
 * @param $host
 * @param $content
 * @return array
 * <pre>
 * code => OPFC_RuleTcpTrust_List_Ret
 * html => 调用html页面
 * data => {
 *      beginIndex => 起始索引(从0开始)
 *      number => 数量
 *      data => array(数据包，数组) {
 *                  dataBaseID => 旧数据库ID
 *                  beginTime => 起始时间 array(["h"]时["m"]分)
 *                  endTime => 结束时间 array(["h"]时["m"]分)
 *                  sourceIP => IP源 array([0][1][2][3])
 *                  sourceMask => 源IP掩码 array([0][1][2][3])
 *                  targetIP => 目的IP array([0][1][2][3])
 *                  targetMask => 目的IP掩码 array([0][1][2][3])
 *                  sourcePortBegin => 源端口起始
 *                  sourcePortEnd => 源端口结束
 *                  targetPortBegin => 目的端口起始
 *                  targetPortEnd => 目的端口结束
 *             }
 * </pre>
 */
function FFC_RuleTcpTrust_List_Ret($host, $content)
{
    $content = substr($content, 2);//切去操作码
    $get = unpack("L1beginIndex/L1number", $content);
    $beginIndex = $get["beginIndex"];//起始索引(从0开始)
    $number = $get["number"];//数量
    //TODO 解析数据包
    $content = substr($content, 8);//只留下数据部分
    $data = array();//数据包
    for ($i = 0; $i < $number; ++$i) {
        //循环加入数组
        //TODO ip地址？掩码？
        $get = unpack("L1databaseID/C2beginTime/C2endTime/C4sourceIP/C4sourceMask/
        C4targetIP/C4targetMask/S1sourcePortBegin/S1sourcePortEnd/S1targetPortBegin/S1targetPortEnd", $content);
        $databaseID = $get["databaseID"];//数据库ID
        $beginTime = array("h"=>$get["beginTime1"],"m"=>$get["beginTime2"]);//起始时间
        $endTime = array("h"=>$get["endTime1"],"m"=>$get["endTime2"]);//结束时间
        $sourceIP = array($get["sourceIP1"],$get["sourceIP2"],$get["sourceIP3"],$get["sourceIP4"]);//IP源
        $sourceMask = array($get["sourceMask1"],$get["sourceMask2"],$get["sourceMask3"],$get["sourceMask4"]);//源IP掩码
        $targetIP = array($get["targetIP1"],$get["targetIP2"],$get["targetIP3"],$get["targetIP4"]);//目的IP
        $targetMask = array($get["targetMask1"],$get["targetMask2"],$get["targetMask3"],$get["targetMask4"]);//目的IP掩码
        $sourcePortBegin = $get["sourcePortBegin"];//源端口起始
        $sourcePortEnd = $get["sourcePortEnd"];//源端口结束
        $targetPortBegin = $get["targetPortBegin"];//目的端口起始
        $targetPortEnd = $get["targetPortEnd"];//目的端口结束
        $package = array(
            "dataBaseID" => $databaseID,
            "beginTime" => $beginTime,
            "endTime" => $endTime,
            "sourceIP" => $sourceIP,
            "sourceMask" => $sourceMask,
            "targetIP" => $targetIP,
            "targetMask" => $targetMask,
            "sourcePortBegin" => $sourcePortBegin,
            "sourcePortEnd" => $sourcePortEnd,
            "targetPortBegin" => $targetPortBegin,
            "targetPortEnd" => $targetPortEnd,
        );
        $data[$i] = $package;//加入数组
        $content = substr($content, 32);//只留下剩余数据
    }
    $pack = array(
        "code" => OPFC_RuleTcpTrust_List_Ret,
        "html" => "",//TODO html
        "data" => array(
            "beginIndex" => $beginIndex,
            "number" => $number,
            "data" => $data,
        ),
    );
    echo "FFC_RuleTcpTrust_List_Ret";
    return $pack;
}
/**
 * 基本规则管理-TCP无条件信任-失败
 *
 * @param $host
 * @param $content
 * @return array
 * <pre>
 * code => OPFC_RuleTcpTrust_List_Err
 * html => 调用html页面
 * data => array{error => 失败原因（序号）}
 * </pre>
 */
function FFC_RuleTcpTrust_List_Err($host, $content)
{
    $content = substr($content, 2);//切去操作码
    $get = unpack("C1error", $content);
    $error = $get["error"];//失败原因
    $pack = array(
        "code" => OPFC_RuleTcpTrust_List_Err,
        "html" => "",//TODO 调用html页面
        "data" => array(
            "error" => $error,
        ),
    );
    echo "FFC_RuleTcpTrust_List_Err";
    return $pack;
}

/**
 * 基本规则管理-TCP无条件信任-添加-成功
 *
 * @param $host
 * @param $content null
 * @return array
 * <pre>
 * code => OPFC_RuleTcpTrust_Add_Ok
 * html => 调用html页面
 * data => null
 * </pre>
 */
function FFC_RuleTcpTrust_Add_Ok($host, $content)
{
    $pack = array(
        "code" => OPFC_RuleTcpTrust_Add_Ok,
        "html" => "",//TODO 调用html页面
        "data" => null,
    );
    echo "FFC_RuleTcpTrust_Add_Ok";
    return $pack;
}
/**
 * 基本规则管理-TCP无条件信任-添加-失败
 *
 * @param $host
 * @param $content
 * @return array
 * <pre>
 * code => OPFC_RuleTcpTrust_Add_Err
 * html => 调用html页面
 * data => array{error => 失败原因（序号）}
 * </pre>
 */
function FFC_RuleTcpTrust_Add_Err($host, $content)
{
    $content = substr($content, 2);//切去操作码
    $get = unpack("C1error", $content);
    $error = $get["error"];//失败原因
    $pack = array(
        "code" => OPFC_RuleTcpTrust_Add_Err,
        "html" => "",//TODO 调用html页面
        "data" => array(
            "error" => $error,
        ),
    );
    echo "FFC_RuleTcpTrust_Add_Err";
    return $pack;
}

/**
 * 基本规则管理-TCP无条件信任-全部删除-成功
 *
 * @param $host
 * @param $content null
 * @return array
 * <pre>
 * code => OPFC_RuleTcpTrust_Cls_Ok
 * html => 调用html页面
 * data => null
 * </pre>
 */
function FFC_RuleTcpTrust_Cls_Ok($host, $content)
{
    $pack = array(
        "code" => OPFC_RuleTcpTrust_Cls_Ok,
        "html" => "",//TODO 调用html页面
        "data" => null,
    );
    echo "FFC_RuleTcpTrust_Cls_Ok";
    return $pack;
}
/**
 * 基本规则管理-TCP无条件信任-全部删除-失败
 *
 * @param $host
 * @param $content
 * @return array
 * <pre>
 * code => OPFC_RuleTcpTrust_Cls_Err
 * html => 调用html页面
 * data => array{error => 失败原因（序号）}
 * </pre>
 */
function FFC_RuleTcpTrust_Cls_Err($host, $content)
{
    $content = substr($content, 2);//切去操作码
    $get = unpack("C1error", $content);
    $error = $get["error"];//失败原因
    $pack = array(
        "code" => OPFC_RuleTcpTrust_Cls_Err,
        "html" => "",//TODO 调用html页面
        "data" => array(
            "error" => $error,
        ),
    );
    echo "FFC_RuleTcpTrust_Cls_Err";
    return $pack;
}

/**
 * 基本规则管理-TCP无条件信任-编辑-成功
 *
 * @param $host
 * @param $content null
 * @return array
 * <pre>
 * code => OPFC_RuleTcpTrust_Edit_Ok
 * html => 调用html页面
 * data => null
 * </pre>
 */
function FFC_RuleTcpTrust_Edit_Ok($host, $content)
{
    $pack = array(
        "code" => OPFC_RuleTcpTrust_Edit_Ok,
        "html" => "",//TODO 调用html页面
        "data" => null,
    );
    echo "FFC_RuleTcpTrust_Edit_Ok";
    return $pack;
}
/**
 * 基本规则管理-TCP无条件信任-编辑-失败
 *
 * @param $host
 * @param $content
 * @return array
 * <pre>
 * code => OPFC_RuleTcpTrust_Edit_Err
 * html => 调用html页面
 * data => array{error => 失败原因（序号）}
 * </pre>
 */
function FFC_RuleTcpTrust_Edit_Err($host, $content)
{
    $content = substr($content, 2);//切去操作码
    $get = unpack("C1error", $content);
    $error = $get["error"];//失败原因
    $pack = array(
        "code" => OPFC_RuleTcpTrust_Edit_Err,
        "html" => "",//TODO 调用html页面
        "data" => array(
            "error" => $error,
        ),
    );
    echo "FFC_RuleTcpTrust_Edit_Err";
    return $pack;
}

/**
 * 基本规则管理-TCP无条件信任-删除-成功
 *
 * @param $host
 * @param $content null
 * @return array
 * <pre>
 * code => OPFC_RuleTcpTrust_Del_Ok
 * html => 调用html页面
 * data => null
 * </pre>
 */
function FFC_RuleTcpTrust_Del_Ok($host, $content)
{
    $pack = array(
        "code" => OPFC_RuleTcpTrust_Del_Ok,
        "html" => "",//TODO 调用html页面
        "data" => null,
    );
    echo "FFC_RuleTcpTrust_Del_Ok";
    return $pack;
}
/**
 * 基本规则管理-TCP无条件信任-删除-失败
 *
 * @param $host
 * @param $content
 * @return array
 * <pre>
 * code => OPFC_RuleTcpTrust_Del_Err
 * html => 调用html页面
 * data => array{error => 失败原因（序号）}
 * </pre>
 */
function FFC_RuleTcpTrust_Del_Err($host, $content)
{
    $content = substr($content, 2);//切去操作码
    $get = unpack("C1error", $content);
    $error = $get["error"];//失败原因
    $pack = array(
        "code" => OPFC_RuleTcpTrust_Del_Err,
        "html" => "",//TODO 调用html页面
        "data" => array(
            "error" => $error,
        ),
    );
    echo "FFC_RuleTcpTrust_Del_Err";
    return $pack;
}

function FFC_RuleTcpTrust_Import_One_Ok($host, $content)
{
    echo "FFC_RuleTcpTrust_Import_One_Ok             ";
}

function FFC_RuleTcpTrust_Import_One_Err($host, $content)
{
    echo "FFC_RuleTcpTrust_Import_One_Err            ";
}

function FFC_RuleTcpTrust_Import_All_Ok($host, $content)
{
    echo "FFC_RuleTcpTrust_Import_All_Ok             ";
}

function FFC_RuleTcpTrust_Import_All_Err($host, $content)
{
    echo "FFC_RuleTcpTrust_Import_All_Err            ";
}

function FFC_RuleTcpTrust_Export_Ret($host, $content)
{
    echo "FFC_RuleTcpTrust_Export_Ret                ";
}

function FFC_RuleTcpTrust_Export_Empty($host, $content)
{
    echo "FFC_RuleTcpTrust_Export_Empty              ";
}

function FFC_RuleTcpTrust_Export_Err($host, $content)
{
    echo "FFC_RuleTcpTrust_Export_Err                ";
}

/**
 * 基本规则管理-TCP用户自定义-内容
 *
 * @param $host
 * @param $content
 * @return array
 * <pre>
 * code => OPFC_RuleTcpAu_List_Ret
 * html => 调用html页面
 * data => {
 *      beginIndex => 起始索引(从0开始)
 *      number => 数量
 *      data => array(数据包，数组) {
 *                  dataBaseID => 旧数据库ID
 *                  beginTime => 起始时间 array(["h"]时["m"]分)
 *                  endTime => 结束时间 array(["h"]时["m"]分)
 *                  sourceIP => IP源 array([0][1][2][3])
 *                  sourceMask => 源IP掩码 array([0][1][2][3])
 *                  targetIP => 目的IP array([0][1][2][3])
 *                  targetMask => 目的IP掩码 array([0][1][2][3])
 *                  sourcePortBegin => 源端口起始
 *                  sourcePortEnd => 源端口结束
 *                  targetPortBegin => 目的端口起始
 *                  targetPortEnd => 目的端口结束
 *                  alertLevel => 告警级别
 *             }
 * </pre>
 */
function FFC_RuleTcpAu_List_Ret($host, $content)
{
    $content = substr($content, 2);//切去操作码
    $get = unpack("L1beginIndex/L1number", $content);
    $beginIndex = $get["beginIndex"];//起始索引(从0开始)
    $number = $get["number"];//数量
    //TODO 解析数据包
    $content = substr($content, 8);//只留下数据部分
    $data = array();//数据包
    for ($i = 0; $i < $number; ++$i) {
        //循环加入数组
        //TODO ip地址？掩码？
        $get = unpack("L1databaseID/C2beginTime/C2endTime/C4sourceIP/C4sourceMask/
        C4targetIP/C4targetMask/S1sourcePortBegin/S1sourcePortEnd/S1targetPortBegin/S1targetPortEnd/C1alertLevel", $content);
        $databaseID = $get["databaseID"];//数据库ID
        $beginTime = array("h"=>$get["beginTime1"],"m"=>$get["beginTime2"]);//起始时间
        $endTime = array("h"=>$get["endTime1"],"m"=>$get["endTime2"]);//结束时间
        $sourceIP = array($get["sourceIP1"],$get["sourceIP2"],$get["sourceIP3"],$get["sourceIP4"]);//IP源
        $sourceMask = array($get["sourceMask1"],$get["sourceMask2"],$get["sourceMask3"],$get["sourceMask4"]);//源IP掩码
        $targetIP = array($get["targetIP1"],$get["targetIP2"],$get["targetIP3"],$get["targetIP4"]);//目的IP
        $targetMask = array($get["targetMask1"],$get["targetMask2"],$get["targetMask3"],$get["targetMask4"]);//目的IP掩码
        $sourcePortBegin = $get["sourcePortBegin"];//源端口起始
        $sourcePortEnd = $get["sourcePortEnd"];//源端口结束
        $targetPortBegin = $get["targetPortBegin"];//目的端口起始
        $targetPortEnd = $get["targetPortEnd"];//目的端口结束
        $alertLevel=$get["alertLevel"];//告警级别
        $package = array(
            "dataBaseID" => $databaseID,
            "beginTime" => $beginTime,
            "endTime" => $endTime,
            "sourceIP" => $sourceIP,
            "sourceMask" => $sourceMask,
            "targetIP" => $targetIP,
            "targetMask" => $targetMask,
            "sourcePortBegin" => $sourcePortBegin,
            "sourcePortEnd" => $sourcePortEnd,
            "targetPortBegin" => $targetPortBegin,
            "targetPortEnd" => $targetPortEnd,
            "alertLevel" => $alertLevel,
        );
        $data[$i] = $package;//加入数组
        $content = substr($content, 33);//只留下剩余数据
    }
    $pack = array(
        "code" => OPFC_RuleTcpAu_List_Ret,
        "html" => "",//TODO html
        "data" => array(
            "beginIndex" => $beginIndex,
            "number" => $number,
            "data" => $data,
        ),
    );
    echo "FFC_RuleTcpAu_List_Ret";
    return $pack;
}
/**
 * 基本规则管理-TCP用户自定义-失败
 *
 * @param $host
 * @param $content
 * @return array
 * <pre>
 * code => OPFC_RuleTcpAu_List_Err
 * html => 调用html页面
 * data => array{error => 失败原因（序号）}
 * </pre>
 */
function FFC_RuleTcpAu_List_Err($host, $content)
{
    $content = substr($content, 2);//切去操作码
    $get = unpack("C1error", $content);
    $error = $get["error"];//失败原因
    $pack = array(
        "code" => OPFC_RuleTcpAu_List_Err,
        "html" => "",//TODO 调用html页面
        "data" => array(
            "error" => $error,
        ),
    );
    echo "FFC_RuleTcpAu_List_Err";
    return $pack;
}

/**
 * 基本规则管理-TCP用户自定义-添加-成功
 *
 * @param $host
 * @param $content null
 * @return array
 * <pre>
 * code => OPFC_RuleTcpAu_Add_Ok
 * html => 调用html页面
 * data => null
 * </pre>
 */
function FFC_RuleTcpAu_Add_Ok($host, $content)
{
    $pack = array(
        "code" => OPFC_RuleTcpAu_Add_Ok,
        "html" => "",//TODO 调用html页面
        "data" => null,
    );
    echo "FFC_RuleTcpAu_Add_Ok";
    return $pack;
}
/**
 * 基本规则管理-TCP用户自定义-添加-失败
 *
 * @param $host
 * @param $content
 * @return array
 * <pre>
 * code => OPFC_RuleTcpAu_Add_Err
 * html => 调用html页面
 * data => array{error => 失败原因（序号）}
 * </pre>
 */
function FFC_RuleTcpAu_Add_Err($host, $content)
{
    $content = substr($content, 2);//切去操作码
    $get = unpack("C1error", $content);
    $error = $get["error"];//失败原因
    $pack = array(
        "code" => OPFC_RuleTcpAu_Add_Err,
        "html" => "",//TODO 调用html页面
        "data" => array(
            "error" => $error,
        ),
    );
    echo "FFC_RuleTcpAu_Add_Err";
    return $pack;
}

/**
 * 基本规则管理-TCP用户自定义-全部删除-成功
 *
 * @param $host
 * @param $content null
 * @return array
 * <pre>
 * code => OPFC_RuleTcpAu_Cls_Ok
 * html => 调用html页面
 * data => null
 * </pre>
 */
function FFC_RuleTcpAu_Cls_Ok($host, $content)
{
    $pack = array(
        "code" => OPFC_RuleTcpAu_Cls_Ok,
        "html" => "",//TODO 调用html页面
        "data" => null,
    );
    echo "FFC_RuleTcpAu_Cls_Ok";
    return $pack;
}
/**
 * 基本规则管理-TCP用户自定义-全部删除-失败
 *
 * @param $host
 * @param $content
 * @return array
 * <pre>
 * code => OPFC_RuleTcpAu_Cls_Err
 * html => 调用html页面
 * data => array{error => 失败原因（序号）}
 * </pre>
 */
function FFC_RuleTcpAu_Cls_Err($host, $content)
{
    $content = substr($content, 2);//切去操作码
    $get = unpack("C1error", $content);
    $error = $get["error"];//失败原因
    $pack = array(
        "code" => OPFC_RuleTcpAu_Cls_Err,
        "html" => "",//TODO 调用html页面
        "data" => array(
            "error" => $error,
        ),
    );
    echo "FFC_RuleTcpAu_Cls_Err";
    return $pack;
}

/**
 * 基本规则管理-TCP用户自定义-编辑-成功
 *
 * @param $host
 * @param $content null
 * @return array
 * <pre>
 * code => OPFC_RuleTcpAu_Edit_Ok
 * html => 调用html页面
 * data => null
 * </pre>
 */
function FFC_RuleTcpAu_Edit_Ok($host, $content)
{
    $pack = array(
        "code" => OPFC_RuleTcpAu_Edit_Ok,
        "html" => "",//TODO 调用html页面
        "data" => null,
    );
    echo "FFC_RuleTcpAu_Edit_Ok";
    return $pack;
}
/**
 * 基本规则管理-TCP用户自定义-编辑-失败
 *
 * @param $host
 * @param $content
 * @return array
 * <pre>
 * code => OPFC_RuleTcpAu_Edit_Err
 * html => 调用html页面
 * data => array{error => 失败原因（序号）}
 * </pre>
 */
function FFC_RuleTcpAu_Edit_Err($host, $content)
{
    $content = substr($content, 2);//切去操作码
    $get = unpack("C1error", $content);
    $error = $get["error"];//失败原因
    $pack = array(
        "code" => OPFC_RuleTcpAu_Edit_Err,
        "html" => "",//TODO 调用html页面
        "data" => array(
            "error" => $error,
        ),
    );
    echo "FFC_RuleTcpAu_Edit_Err";
    return $pack;
}

/**
 * 基本规则管理-TCP用户自定义-删除-成功
 *
 * @param $host
 * @param $content null
 * @return array
 * <pre>
 * code => OPFC_RuleTcpAu_Del_Ok
 * html => 调用html页面
 * data => null
 * </pre>
 */
function FFC_RuleTcpAu_Del_Ok($host, $content)
{
    $pack = array(
        "code" => OPFC_RuleTcpAu_Del_Ok,
        "html" => "",//TODO 调用html页面
        "data" => null,
    );
    echo "FFC_RuleTcpAu_Del_Ok";
    return $pack;
}
/**
 * 基本规则管理-TCP用户自定义-删除-失败
 *
 * @param $host
 * @param $content
 * @return array
 * <pre>
 * code => OPFC_RuleTcpAu_Del_Err
 * html => 调用html页面
 * data => array{error => 失败原因（序号）}
 * </pre>
 */
function FFC_RuleTcpAu_Del_Err($host, $content)
{
    $content = substr($content, 2);//切去操作码
    $get = unpack("C1error", $content);
    $error = $get["error"];//失败原因
    $pack = array(
        "code" => OPFC_RuleTcpAu_Del_Err,
        "html" => "",//TODO 调用html页面
        "data" => array(
            "error" => $error,
        ),
    );
    echo "FFC_RuleTcpAu_Del_Err";
    return $pack;
}

function FFC_RuleTcpAu_Import_One_Ok($host, $content)
{
    echo "FFC_RuleTcpAu_Import_One_Ok                ";
}

function FFC_RuleTcpAu_Import_One_Err($host, $content)
{
    echo "FFC_RuleTcpAu_Import_One_Err               ";
}

function FFC_RuleTcpAu_Import_All_Ok($host, $content)
{
    echo "FFC_RuleTcpAu_Import_All_Ok                ";
}

function FFC_RuleTcpAu_Import_All_Err($host, $content)
{
    echo "FFC_RuleTcpAu_Import_All_Err               ";
}

function FFC_RuleTcpAu_Export_Ret($host, $content)
{
    echo "FFC_RuleTcpAu_Export_Ret                   ";
}

function FFC_RuleTcpAu_Export_Empty($host, $content)
{
    echo "FFC_RuleTcpAu_Export_Empty                 ";
}

function FFC_RuleTcpAu_Export_Err($host, $content)
{
    echo "FFC_RuleTcpAu_Export_Err                   ";
}

/**
 * 基本规则管理-Udp黑名单-内容
 *
 * @param $host
 * @param $content
 * @return array
 * <pre>
 * code => OPFC_RuleUdpBl_List_Ret
 * html => 调用html页面
 * data => {
 *      beginIndex => 起始索引(从0开始)
 *      number => 数量
 *      data => array(数据包，数组) {
 *                  dataBaseID => 旧数据库ID
 *                  beginTime => 起始时间 array(["h"]时["m"]分)
 *                  endTime => 结束时间 array(["h"]时["m"]分)
 *                  sourceIP => IP源 array([0][1][2][3])
 *                  sourceMask => 源IP掩码 array([0][1][2][3])
 *                  targetIP => 目的IP array([0][1][2][3])
 *                  targetMask => 目的IP掩码 array([0][1][2][3])
 *                  sourcePortBegin => 源端口起始
 *                  sourcePortEnd => 源端口结束
 *                  targetPortBegin => 目的端口起始
 *                  targetPortEnd => 目的端口结束
 *             }
 * </pre>
 */
function FFC_RuleUdpBl_List_Ret($host, $content)
{
    $content = substr($content, 2);//切去操作码
    $get = unpack("L1beginIndex/L1number", $content);
    $beginIndex = $get["beginIndex"];//起始索引(从0开始)
    $number = $get["number"];//数量
    //TODO 解析数据包
    $content = substr($content, 8);//只留下数据部分
    $data = array();//数据包
    for ($i = 0; $i < $number; ++$i) {
        //循环加入数组
        //TODO ip地址？掩码？
        $get = unpack("L1databaseID/C2beginTime/C2endTime/C4sourceIP/C4sourceMask/
        C4targetIP/C4targetMask/S1sourcePortBegin/S1sourcePortEnd/S1targetPortBegin/S1targetPortEnd", $content);
        $databaseID = $get["databaseID"];//数据库ID
        $beginTime = array("h"=>$get["beginTime1"],"m"=>$get["beginTime2"]);//起始时间
        $endTime = array("h"=>$get["endTime1"],"m"=>$get["endTime2"]);//结束时间
        $sourceIP = array($get["sourceIP1"],$get["sourceIP2"],$get["sourceIP3"],$get["sourceIP4"]);//IP源
        $sourceMask = array($get["sourceMask1"],$get["sourceMask2"],$get["sourceMask3"],$get["sourceMask4"]);//源IP掩码
        $targetIP = array($get["targetIP1"],$get["targetIP2"],$get["targetIP3"],$get["targetIP4"]);//目的IP
        $targetMask = array($get["targetMask1"],$get["targetMask2"],$get["targetMask3"],$get["targetMask4"]);//目的IP掩码
        $sourcePortBegin = $get["sourcePortBegin"];//源端口起始
        $sourcePortEnd = $get["sourcePortEnd"];//源端口结束
        $targetPortBegin = $get["targetPortBegin"];//目的端口起始
        $targetPortEnd = $get["targetPortEnd"];//目的端口结束
        $package = array(
            "dataBaseID" => $databaseID,
            "beginTime" => $beginTime,
            "endTime" => $endTime,
            "sourceIP" => $sourceIP,
            "sourceMask" => $sourceMask,
            "targetIP" => $targetIP,
            "targetMask" => $targetMask,
            "sourcePortBegin" => $sourcePortBegin,
            "sourcePortEnd" => $sourcePortEnd,
            "targetPortBegin" => $targetPortBegin,
            "targetPortEnd" => $targetPortEnd,
        );
        $data[$i] = $package;//加入数组
        $content = substr($content, 32);//只留下剩余数据
    }
    $pack = array(
        "code" => OPFC_RuleUdpBl_List_Ret,
        "html" => "",//TODO html
        "data" => array(
            "beginIndex" => $beginIndex,
            "number" => $number,
            "data" => $data,
        ),
    );
    echo "FFC_RuleUdpBl_List_Ret";
    return $pack;
}
/**
 * 基本规则管理-Udp黑名单-失败
 *
 * @param $host
 * @param $content
 * @return array
 * <pre>
 * code => OPFC_RuleUdpBl_List_Err
 * html => 调用html页面
 * data => array{error => 失败原因（序号）}
 * </pre>
 */
function FFC_RuleUdpBl_List_Err($host, $content)
{
    $content = substr($content, 2);//切去操作码
    $get = unpack("C1error", $content);
    $error = $get["error"];//失败原因
    $pack = array(
        "code" => OPFC_RuleUdpBl_List_Err,
        "html" => "",//TODO 调用html页面
        "data" => array(
            "error" => $error,
        ),
    );
    echo "FFC_RuleUdpBl_List_Err";
    return $pack;
}

/**
 * 基本规则管理-Udp黑名单-添加-成功
 *
 * @param $host
 * @param $content null
 * @return array
 * <pre>
 * code => OPFC_RuleUdpBl_Add_Ok
 * html => 调用html页面
 * data => null
 * </pre>
 */
function FFC_RuleUdpBl_Add_Ok($host, $content)
{
    $pack = array(
        "code" => OPFC_RuleUdpBl_Add_Ok,
        "html" => "",//TODO 调用html页面
        "data" => null,
    );
    echo "FFC_RuleUdpBl_Add_Ok";
    return $pack;
}
/**
 * 基本规则管理-Udp黑名单-添加-失败
 *
 * @param $host
 * @param $content
 * @return array
 * <pre>
 * code => OPFC_RuleUdpBl_Add_Err
 * html => 调用html页面
 * data => array{error => 失败原因（序号）}
 * </pre>
 */
function FFC_RuleUdpBl_Add_Err($host, $content)
{
    $content = substr($content, 2);//切去操作码
    $get = unpack("C1error", $content);
    $error = $get["error"];//失败原因
    $pack = array(
        "code" => OPFC_RuleUdpBl_Add_Err,
        "html" => "",//TODO 调用html页面
        "data" => array(
            "error" => $error,
        ),
    );
    echo "FFC_RuleUdpBl_Add_Err";
    return $pack;
}

/**
 * 基本规则管理-Udp黑名单-全部删除-成功
 *
 * @param $host
 * @param $content null
 * @return array
 * <pre>
 * code => OPFC_RuleUdpBl_Cls_Ok
 * html => 调用html页面
 * data => null
 * </pre>
 */
function FFC_RuleUdpBl_Cls_Ok($host, $content)
{
    $pack = array(
        "code" => OPFC_RuleUdpBl_Cls_Ok,
        "html" => "",//TODO 调用html页面
        "data" => null,
    );
    echo "FFC_RuleUdpBl_Cls_Ok";
    return $pack;
}
/**
 * 基本规则管理-Udp黑名单-全部删除-失败
 *
 * @param $host
 * @param $content
 * @return array
 * <pre>
 * code => OPFC_RuleUdpBl_Cls_Err
 * html => 调用html页面
 * data => array{error => 失败原因（序号）}
 * </pre>
 */
function FFC_RuleUdpBl_Cls_Err($host, $content)
{
    $content = substr($content, 2);//切去操作码
    $get = unpack("C1error", $content);
    $error = $get["error"];//失败原因
    $pack = array(
        "code" => OPFC_RuleUdpBl_Cls_Err,
        "html" => "",//TODO 调用html页面
        "data" => array(
            "error" => $error,
        ),
    );
    echo "FFC_RuleUdpBl_Cls_Err";
    return $pack;
}

/**
 * 基本规则管理-Udp黑名单-激活全部-成功
 *
 * @param $host
 * @param $content null
 * @return array
 * <pre>
 * code => OPFC_RuleUdpBl_Enable_Ok
 * html => 调用html页面
 * data => null
 * </pre>
 */
function FFC_RuleUdpBl_Enable_Ok($host, $content)
{
    $pack = array(
        "code" => OPFC_RuleUdpBl_Enable_Ok,
        "html" => "",//TODO 调用html页面
        "data" => null,
    );
    echo "FFC_RuleUdpBl_Enable_Ok";
    return $pack;
}
/**
 * 基本规则管理-Udp黑名单-激活全部-失败
 *
 * @param $host
 * @param $content
 * @return array
 * <pre>
 * code => OPFC_RuleUdpBl_Enable_Err
 * html => 调用html页面
 * data => array{error => 失败原因（序号）}
 * </pre>
 */
function FFC_RuleUdpBl_Enable_Err($host, $content)
{
    $content = substr($content, 2);//切去操作码
    $get = unpack("C1error", $content);
    $error = $get["error"];//失败原因
    $pack = array(
        "code" => OPFC_RuleUdpBl_Enable_Err,
        "html" => "",//TODO 调用html页面
        "data" => array(
            "error" => $error,
        ),
    );
    echo "FFC_RuleUdpBl_Enable_Err";
    return $pack;
}

/**
 * 基本规则管理-Udp黑名单-禁用全部-成功
 *
 * @param $host
 * @param $content null
 * @return array
 * <pre>
 * code => OPFC_RuleUdpBl_Disable_Ok
 * html => 调用html页面
 * data => null
 * </pre>
 */
function FFC_RuleUdpBl_Disable_Ok($host, $content)
{
    $pack = array(
        "code" => OPFC_RuleUdpBl_Disable_Ok,
        "html" => "",//TODO 调用html页面
        "data" => null,
    );
    echo "FFC_RuleUdpBl_Disable_Ok";
    return $pack;
}
/**
 * 基本规则管理-Udp黑名单-禁用全部-失败
 *
 * @param $host
 * @param $content
 * @return array
 * <pre>
 * code => OPFC_RuleUdpBl_Disable_Err
 * html => 调用html页面
 * data => array{error => 失败原因（序号）}
 * </pre>
 */
function FFC_RuleUdpBl_Disable_Err($host, $content)
{
    $content = substr($content, 2);//切去操作码
    $get = unpack("C1error", $content);
    $error = $get["error"];//失败原因
    $pack = array(
        "code" => OPFC_RuleUdpBl_Disable_Err,
        "html" => "",//TODO 调用html页面
        "data" => array(
            "error" => $error,
        ),
    );
    echo "FFC_RuleUdpBl_Disable_Err";
    return $pack;
}

/**
 * 基本规则管理-Udp黑名单-编辑-成功
 *
 * @param $host
 * @param $content null
 * @return array
 * <pre>
 * code => OPFC_RuleUdpBl_Edit_Ok
 * html => 调用html页面
 * data => null
 * </pre>
 */
function FFC_RuleUdpBl_Edit_Ok($host, $content)
{
    $pack = array(
        "code" => OPFC_RuleUdpBl_Edit_Ok,
        "html" => "",//TODO 调用html页面
        "data" => null,
    );
    echo "FFC_RuleUdpBl_Edit_Ok";
    return $pack;
}
/**
 * 基本规则管理-Udp黑名单-编辑-失败
 *
 * @param $host
 * @param $content
 * @return array
 * <pre>
 * code => OPFC_RuleUdpBl_Edit_Err
 * html => 调用html页面
 * data => array{error => 失败原因（序号）}
 * </pre>
 */
function FFC_RuleUdpBl_Edit_Err($host, $content)
{
    $content = substr($content, 2);//切去操作码
    $get = unpack("C1error", $content);
    $error = $get["error"];//失败原因
    $pack = array(
        "code" => OPFC_RuleUdpBl_Edit_Err,
        "html" => "",//TODO 调用html页面
        "data" => array(
            "error" => $error,
        ),
    );
    echo "FFC_RuleUdpBl_Edit_Err";
    return $pack;
}

/**
 * 基本规则管理-Udp黑名单-删除-成功
 *
 * @param $host
 * @param $content null
 * @return array
 * <pre>
 * code => OPFC_RuleUdpBl_Del_Ok
 * html => 调用html页面
 * data => null
 * </pre>
 */
function FFC_RuleUdpBl_Del_Ok($host, $content)
{
    $pack = array(
        "code" => OPFC_RuleUdpBl_Del_Ok,
        "html" => "",//TODO 调用html页面
        "data" => null,
    );
    echo "FFC_RuleUdpBl_Del_Ok";
    return $pack;
}
/**
 * 基本规则管理-Udp黑名单-删除-失败
 *
 * @param $host
 * @param $content
 * @return array
 * <pre>
 * code => OPFC_RuleUdpBl_Del_Err
 * html => 调用html页面
 * data => array{error => 失败原因（序号）}
 * </pre>
 */
function FFC_RuleUdpBl_Del_Err($host, $content)
{
    $content = substr($content, 2);//切去操作码
    $get = unpack("C1error", $content);
    $error = $get["error"];//失败原因
    $pack = array(
        "code" => OPFC_RuleUdpBl_Del_Err,
        "html" => "",//TODO 调用html页面
        "data" => array(
            "error" => $error,
        ),
    );
    echo "FFC_RuleUdpBl_Del_Err";
    return $pack;
}


function FFC_RuleUdpBl_Import_One_Ok($host, $content)
{
    echo "FFC_RuleUdpBl_Import_One_Ok                ";
}

function FFC_RuleUdpBl_Import_One_Err($host, $content)
{
    echo "FFC_RuleUdpBl_Import_One_Err               ";
}

function FFC_RuleUdpBl_Import_All_Ok($host, $content)
{
    echo "FFC_RuleUdpBl_Import_All_Ok                ";
}

function FFC_RuleUdpBl_Import_All_Err($host, $content)
{
    echo "FFC_RuleUdpBl_Import_All_Err               ";
}

function FFC_RuleUdpBl_Export_Ret($host, $content)
{
    echo "FFC_RuleUdpBl_Export_Ret                   ";
}

function FFC_RuleUdpBl_Export_Empty($host, $content)
{
    echo "FFC_RuleUdpBl_Export_Empty                 ";
}

function FFC_RuleUdpBl_Export_Err($host, $content)
{
    echo "FFC_RuleUdpBl_Export_Err                   ";
}

/**
 * 基本规则管理-Udp白名单-内容
 *
 * @param $host
 * @param $content
 * @return array
 * <pre>
 * code => OPFC_RuleUdpWl_List_Ret
 * html => 调用html页面
 * data => {
 *      beginIndex => 起始索引(从0开始)
 *      number => 数量
 *      data => array(数据包，数组) {
 *                  dataBaseID => 旧数据库ID
 *                  beginTime => 起始时间 array(["h"]时["m"]分)
 *                  endTime => 结束时间 array(["h"]时["m"]分)
 *                  sourceIP => IP源 array([0][1][2][3])
 *                  sourceMask => 源IP掩码 array([0][1][2][3])
 *                  targetIP => 目的IP array([0][1][2][3])
 *                  targetMask => 目的IP掩码 array([0][1][2][3])
 *                  sourcePortBegin => 源端口起始
 *                  sourcePortEnd => 源端口结束
 *                  targetPortBegin => 目的端口起始
 *                  targetPortEnd => 目的端口结束
 *             }
 * </pre>
 */
function FFC_RuleUdpWl_List_Ret($host, $content)
{
    $content = substr($content, 2);//切去操作码
    $get = unpack("L1beginIndex/L1number", $content);
    $beginIndex = $get["beginIndex"];//起始索引(从0开始)
    $number = $get["number"];//数量
    //TODO 解析数据包
    $content = substr($content, 8);//只留下数据部分
    $data = array();//数据包
    for ($i = 0; $i < $number; ++$i) {
        //循环加入数组
        //TODO ip地址？掩码？
        $get = unpack("L1databaseID/C2beginTime/C2endTime/C4sourceIP/C4sourceMask/
        C4targetIP/C4targetMask/S1sourcePortBegin/S1sourcePortEnd/S1targetPortBegin/S1targetPortEnd", $content);
        $databaseID = $get["databaseID"];//数据库ID
        $beginTime = array("h"=>$get["beginTime1"],"m"=>$get["beginTime2"]);//起始时间
        $endTime = array("h"=>$get["endTime1"],"m"=>$get["endTime2"]);//结束时间
        $sourceIP = array($get["sourceIP1"],$get["sourceIP2"],$get["sourceIP3"],$get["sourceIP4"]);//IP源
        $sourceMask = array($get["sourceMask1"],$get["sourceMask2"],$get["sourceMask3"],$get["sourceMask4"]);//源IP掩码
        $targetIP = array($get["targetIP1"],$get["targetIP2"],$get["targetIP3"],$get["targetIP4"]);//目的IP
        $targetMask = array($get["targetMask1"],$get["targetMask2"],$get["targetMask3"],$get["targetMask4"]);//目的IP掩码
        $sourcePortBegin = $get["sourcePortBegin"];//源端口起始
        $sourcePortEnd = $get["sourcePortEnd"];//源端口结束
        $targetPortBegin = $get["targetPortBegin"];//目的端口起始
        $targetPortEnd = $get["targetPortEnd"];//目的端口结束
        $package = array(
            "dataBaseID" => $databaseID,
            "beginTime" => $beginTime,
            "endTime" => $endTime,
            "sourceIP" => $sourceIP,
            "sourceMask" => $sourceMask,
            "targetIP" => $targetIP,
            "targetMask" => $targetMask,
            "sourcePortBegin" => $sourcePortBegin,
            "sourcePortEnd" => $sourcePortEnd,
            "targetPortBegin" => $targetPortBegin,
            "targetPortEnd" => $targetPortEnd,
        );
        $data[$i] = $package;//加入数组
        $content = substr($content, 32);//只留下剩余数据
    }
    $pack = array(
        "code" => OPFC_RuleUdpWl_List_Ret,
        "html" => "",//TODO html
        "data" => array(
            "beginIndex" => $beginIndex,
            "number" => $number,
            "data" => $data,
        ),
    );
    echo "FFC_RuleUdpWl_List_Ret";
    return $pack;
}
/**
 * 基本规则管理-Udp白名单-失败
 *
 * @param $host
 * @param $content
 * @return array
 * <pre>
 * code => OPFC_RuleUdpWl_List_Err
 * html => 调用html页面
 * data => array{error => 失败原因（序号）}
 * </pre>
 */
function FFC_RuleUdpWl_List_Err($host, $content)
{
    $content = substr($content, 2);//切去操作码
    $get = unpack("C1error", $content);
    $error = $get["error"];//失败原因
    $pack = array(
        "code" => OPFC_RuleUdpWl_List_Err,
        "html" => "",//TODO 调用html页面
        "data" => array(
            "error" => $error,
        ),
    );
    echo "FFC_RuleUdpWl_List_Err";
    return $pack;
}

/**
 * 基本规则管理-Udp白名单-添加-成功
 *
 * @param $host
 * @param $content null
 * @return array
 * <pre>
 * code => OPFC_RuleUdpWl_Add_Ok
 * html => 调用html页面
 * data => null
 * </pre>
 */
function FFC_RuleUdpWl_Add_Ok($host, $content)
{
    $pack = array(
        "code" => OPFC_RuleUdpWl_Add_Ok,
        "html" => "",//TODO 调用html页面
        "data" => null,
    );
    echo "FFC_RuleUdpWl_Add_Ok";
    return $pack;
}
/**
 * 基本规则管理-Udp白名单-添加-失败
 *
 * @param $host
 * @param $content
 * @return array
 * <pre>
 * code => OPFC_RuleUdpWl_Add_Err
 * html => 调用html页面
 * data => array{error => 失败原因（序号）}
 * </pre>
 */
function FFC_RuleUdpWl_Add_Err($host, $content)
{
    $content = substr($content, 2);//切去操作码
    $get = unpack("C1error", $content);
    $error = $get["error"];//失败原因
    $pack = array(
        "code" => OPFC_RuleUdpWl_Add_Err,
        "html" => "",//TODO 调用html页面
        "data" => array(
            "error" => $error,
        ),
    );
    echo "FFC_RuleUdpWl_Add_Err";
    return $pack;
}

/**
 * 基本规则管理-Udp白名单-全部删除-成功
 *
 * @param $host
 * @param $content null
 * @return array
 * <pre>
 * code => OPFC_RuleUdpWl_Cls_Ok
 * html => 调用html页面
 * data => null
 * </pre>
 */
function FFC_RuleUdpWl_Cls_Ok($host, $content)
{
    $pack = array(
        "code" => OPFC_RuleUdpWl_Cls_Ok,
        "html" => "",//TODO 调用html页面
        "data" => null,
    );
    echo "FFC_RuleUdpWl_Cls_Ok";
    return $pack;
}
/**
 * 基本规则管理-Udp白名单-全部删除-失败
 *
 * @param $host
 * @param $content
 * @return array
 * <pre>
 * code => OPFC_RuleUdpWl_Cls_Err
 * html => 调用html页面
 * data => array{error => 失败原因（序号）}
 * </pre>
 */
function FFC_RuleUdpWl_Cls_Err($host, $content)
{
    $content = substr($content, 2);//切去操作码
    $get = unpack("C1error", $content);
    $error = $get["error"];//失败原因
    $pack = array(
        "code" => OPFC_RuleUdpWl_Cls_Err,
        "html" => "",//TODO 调用html页面
        "data" => array(
            "error" => $error,
        ),
    );
    echo "FFC_RuleUdpWl_Cls_Err";
    return $pack;
}

/**
 * 基本规则管理-Udp白名单-激活全部-成功
 *
 * @param $host
 * @param $content null
 * @return array
 * <pre>
 * code => OPFC_RuleUdpWl_Enable_Ok
 * html => 调用html页面
 * data => null
 * </pre>
 */
function FFC_RuleUdpWl_Enable_Ok($host, $content)
{
    $pack = array(
        "code" => OPFC_RuleUdpWl_Enable_Ok,
        "html" => "",//TODO 调用html页面
        "data" => null,
    );
    echo "FFC_RuleUdpWl_Enable_Ok";
    return $pack;
}
/**
 * 基本规则管理-Udp白名单-激活全部-失败
 *
 * @param $host
 * @param $content
 * @return array
 * <pre>
 * code => OPFC_RuleUdpWl_Enable_Err
 * html => 调用html页面
 * data => array{error => 失败原因（序号）}
 * </pre>
 */
function FFC_RuleUdpWl_Enable_Err($host, $content)
{
    $content = substr($content, 2);//切去操作码
    $get = unpack("C1error", $content);
    $error = $get["error"];//失败原因
    $pack = array(
        "code" => OPFC_RuleUdpWl_Enable_Err,
        "html" => "",//TODO 调用html页面
        "data" => array(
            "error" => $error,
        ),
    );
    echo "FFC_RuleUdpWl_Enable_Err";
    return $pack;
}

/**
 * 基本规则管理-Udp白名单-禁用全部-成功
 *
 * @param $host
 * @param $content null
 * @return array
 * <pre>
 * code => OPFC_RuleUdpWl_Disable_Ok
 * html => 调用html页面
 * data => null
 * </pre>
 */
function FFC_RuleUdpWl_Disable_Ok($host, $content)
{
    $pack = array(
        "code" => OPFC_RuleUdpWl_Disable_Ok,
        "html" => "",//TODO 调用html页面
        "data" => null,
    );
    echo "FFC_RuleUdpWl_Disable_Ok";
    return $pack;
}
/**
 * 基本规则管理-Udp白名单-禁用全部-失败
 *
 * @param $host
 * @param $content
 * @return array
 * <pre>
 * code => OPFC_RuleUdpWl_Disable_Err
 * html => 调用html页面
 * data => array{error => 失败原因（序号）}
 * </pre>
 */
function FFC_RuleUdpWl_Disable_Err($host, $content)
{
    $content = substr($content, 2);//切去操作码
    $get = unpack("C1error", $content);
    $error = $get["error"];//失败原因
    $pack = array(
        "code" => OPFC_RuleUdpWl_Disable_Err,
        "html" => "",//TODO 调用html页面
        "data" => array(
            "error" => $error,
        ),
    );
    echo "FFC_RuleUdpWl_Disable_Err";
    return $pack;
}

/**
 * 基本规则管理-Udp白名单-编辑-成功
 *
 * @param $host
 * @param $content null
 * @return array
 * <pre>
 * code => OPFC_RuleUdpWl_Edit_Ok
 * html => 调用html页面
 * data => null
 * </pre>
 */
function FFC_RuleUdpWl_Edit_Ok($host, $content)
{
    $pack = array(
        "code" => OPFC_RuleUdpWl_Edit_Ok,
        "html" => "",//TODO 调用html页面
        "data" => null,
    );
    echo "FFC_RuleUdpWl_Edit_Ok";
    return $pack;
}
/**
 * 基本规则管理-Udp白名单-编辑-失败
 *
 * @param $host
 * @param $content
 * @return array
 * <pre>
 * code => OPFC_RuleUdpWl_Edit_Err
 * html => 调用html页面
 * data => array{error => 失败原因（序号）}
 * </pre>
 */
function FFC_RuleUdpWl_Edit_Err($host, $content)
{
    $content = substr($content, 2);//切去操作码
    $get = unpack("C1error", $content);
    $error = $get["error"];//失败原因
    $pack = array(
        "code" => OPFC_RuleUdpWl_Edit_Err,
        "html" => "",//TODO 调用html页面
        "data" => array(
            "error" => $error,
        ),
    );
    echo "FFC_RuleUdpWl_Edit_Err";
    return $pack;
}

/**
 * 基本规则管理-Udp白名单-删除-成功
 *
 * @param $host
 * @param $content null
 * @return array
 * <pre>
 * code => OPFC_RuleUdpWl_Del_Ok
 * html => 调用html页面
 * data => null
 * </pre>
 */
function FFC_RuleUdpWl_Del_Ok($host, $content)
{
    $pack = array(
        "code" => OPFC_RuleUdpWl_Del_Ok,
        "html" => "",//TODO 调用html页面
        "data" => null,
    );
    echo "FFC_RuleUdpWl_Del_Ok";
    return $pack;
}
/**
 * 基本规则管理-Udp白名单-删除-失败
 *
 * @param $host
 * @param $content
 * @return array
 * <pre>
 * code => OPFC_RuleUdpWl_Del_Err
 * html => 调用html页面
 * data => array{error => 失败原因（序号）}
 * </pre>
 */
function FFC_RuleUdpWl_Del_Err($host, $content)
{
    $content = substr($content, 2);//切去操作码
    $get = unpack("C1error", $content);
    $error = $get["error"];//失败原因
    $pack = array(
        "code" => OPFC_RuleUdpWl_Del_Err,
        "html" => "",//TODO 调用html页面
        "data" => array(
            "error" => $error,
        ),
    );
    echo "FFC_RuleUdpWl_Del_Err";
    return $pack;
}

function FFC_RuleUdpWl_Import_One_Ok($host, $content)
{
    echo "FFC_RuleUdpWl_Import_One_Ok                ";
}

function FFC_RuleUdpWl_Import_One_Err($host, $content)
{
    echo "FFC_RuleUdpWl_Import_One_Err               ";
}

function FFC_RuleUdpWl_Import_All_Ok($host, $content)
{
    echo "FFC_RuleUdpWl_Import_All_Ok                ";
}

function FFC_RuleUdpWl_Import_All_Err($host, $content)
{
    echo "FFC_RuleUdpWl_Import_All_Err               ";
}

function FFC_RuleUdpWl_Export_Ret($host, $content)
{
    echo "FFC_RuleUdpWl_Export_Ret                   ";
}

function FFC_RuleUdpWl_Export_Empty($host, $content)
{
    echo "FFC_RuleUdpWl_Export_Empty                 ";
}

function FFC_RuleUdpWl_Export_Err($host, $content)
{
    echo "FFC_RuleUdpWl_Export_Err                   ";
}

/**
 * 基本规则管理-Udp无条件信任-内容
 *
 * @param $host
 * @param $content
 * @return array
 * <pre>
 * code => OPFC_RuleUdpTrust_List_Ret
 * html => 调用html页面
 * data => {
 *      beginIndex => 起始索引(从0开始)
 *      number => 数量
 *      data => array(数据包，数组) {
 *                  dataBaseID => 旧数据库ID
 *                  beginTime => 起始时间 array(["h"]时["m"]分)
 *                  endTime => 结束时间 array(["h"]时["m"]分)
 *                  sourceIP => IP源 array([0][1][2][3])
 *                  sourceMask => 源IP掩码 array([0][1][2][3])
 *                  targetIP => 目的IP array([0][1][2][3])
 *                  targetMask => 目的IP掩码 array([0][1][2][3])
 *                  sourcePortBegin => 源端口起始
 *                  sourcePortEnd => 源端口结束
 *                  targetPortBegin => 目的端口起始
 *                  targetPortEnd => 目的端口结束
 *             }
 * </pre>
 */
function FFC_RuleUdpTrust_List_Ret($host, $content)
{
    $content = substr($content, 2);//切去操作码
    $get = unpack("L1beginIndex/L1number", $content);
    $beginIndex = $get["beginIndex"];//起始索引(从0开始)
    $number = $get["number"];//数量
    //TODO 解析数据包
    $content = substr($content, 8);//只留下数据部分
    $data = array();//数据包
    for ($i = 0; $i < $number; ++$i) {
        //循环加入数组
        //TODO ip地址？掩码？
        $get = unpack("L1databaseID/C2beginTime/C2endTime/C4sourceIP/C4sourceMask/
        C4targetIP/C4targetMask/S1sourcePortBegin/S1sourcePortEnd/S1targetPortBegin/S1targetPortEnd", $content);
        $databaseID = $get["databaseID"];//数据库ID
        $beginTime = array("h"=>$get["beginTime1"],"m"=>$get["beginTime2"]);//起始时间
        $endTime = array("h"=>$get["endTime1"],"m"=>$get["endTime2"]);//结束时间
        $sourceIP = array($get["sourceIP1"],$get["sourceIP2"],$get["sourceIP3"],$get["sourceIP4"]);//IP源
        $sourceMask = array($get["sourceMask1"],$get["sourceMask2"],$get["sourceMask3"],$get["sourceMask4"]);//源IP掩码
        $targetIP = array($get["targetIP1"],$get["targetIP2"],$get["targetIP3"],$get["targetIP4"]);//目的IP
        $targetMask = array($get["targetMask1"],$get["targetMask2"],$get["targetMask3"],$get["targetMask4"]);//目的IP掩码
        $sourcePortBegin = $get["sourcePortBegin"];//源端口起始
        $sourcePortEnd = $get["sourcePortEnd"];//源端口结束
        $targetPortBegin = $get["targetPortBegin"];//目的端口起始
        $targetPortEnd = $get["targetPortEnd"];//目的端口结束
        $package = array(
            "dataBaseID" => $databaseID,
            "beginTime" => $beginTime,
            "endTime" => $endTime,
            "sourceIP" => $sourceIP,
            "sourceMask" => $sourceMask,
            "targetIP" => $targetIP,
            "targetMask" => $targetMask,
            "sourcePortBegin" => $sourcePortBegin,
            "sourcePortEnd" => $sourcePortEnd,
            "targetPortBegin" => $targetPortBegin,
            "targetPortEnd" => $targetPortEnd,
        );
        $data[$i] = $package;//加入数组
        $content = substr($content, 32);//只留下剩余数据
    }
    $pack = array(
        "code" => OPFC_RuleUdpTrust_List_Ret,
        "html" => "",//TODO html
        "data" => array(
            "beginIndex" => $beginIndex,
            "number" => $number,
            "data" => $data,
        ),
    );
    echo "FFC_RuleUdpTrust_List_Ret";
    return $pack;
}
/**
 * 基本规则管理-Udp无条件信任-失败
 *
 * @param $host
 * @param $content
 * @return array
 * <pre>
 * code => OPFC_RuleUdpTrust_List_Err
 * html => 调用html页面
 * data => array{error => 失败原因（序号）}
 * </pre>
 */
function FFC_RuleUdpTrust_List_Err($host, $content)
{
    $content = substr($content, 2);//切去操作码
    $get = unpack("C1error", $content);
    $error = $get["error"];//失败原因
    $pack = array(
        "code" => OPFC_RuleUdpTrust_List_Err,
        "html" => "",//TODO 调用html页面
        "data" => array(
            "error" => $error,
        ),
    );
    echo "FFC_RuleUdpTrust_List_Err";
    return $pack;
}

/**
 * 基本规则管理-Udp无条件信任-添加-成功
 *
 * @param $host
 * @param $content null
 * @return array
 * <pre>
 * code => OPFC_RuleUdpTrust_Add_Ok
 * html => 调用html页面
 * data => null
 * </pre>
 */
function FFC_RuleUdpTrust_Add_Ok($host, $content)
{
    $pack = array(
        "code" => OPFC_RuleUdpTrust_Add_Ok,
        "html" => "",//TODO 调用html页面
        "data" => null,
    );
    echo "FFC_RuleUdpTrust_Add_Ok";
    return $pack;
}
/**
 * 基本规则管理-Udp无条件信任-添加-失败
 *
 * @param $host
 * @param $content
 * @return array
 * <pre>
 * code => OPFC_RuleUdpTrust_Add_Err
 * html => 调用html页面
 * data => array{error => 失败原因（序号）}
 * </pre>
 */
function FFC_RuleUdpTrust_Add_Err($host, $content)
{
    $content = substr($content, 2);//切去操作码
    $get = unpack("C1error", $content);
    $error = $get["error"];//失败原因
    $pack = array(
        "code" => OPFC_RuleUdpTrust_Add_Err,
        "html" => "",//TODO 调用html页面
        "data" => array(
            "error" => $error,
        ),
    );
    echo "FFC_RuleUdpTrust_Add_Err";
    return $pack;
}

/**
 * 基本规则管理-Udp无条件信任-全部删除-成功
 *
 * @param $host
 * @param $content null
 * @return array
 * <pre>
 * code => OPFC_RuleUdpTrust_Cls_Ok
 * html => 调用html页面
 * data => null
 * </pre>
 */
function FFC_RuleUdpTrust_Cls_Ok($host, $content)
{
    $pack = array(
        "code" => OPFC_RuleUdpTrust_Cls_Ok,
        "html" => "",//TODO 调用html页面
        "data" => null,
    );
    echo "FFC_RuleUdpTrust_Cls_Ok";
    return $pack;
}
/**
 * 基本规则管理-Udp无条件信任-全部删除-失败
 *
 * @param $host
 * @param $content
 * @return array
 * <pre>
 * code => OPFC_RuleUdpTrust_Cls_Err
 * html => 调用html页面
 * data => array{error => 失败原因（序号）}
 * </pre>
 */
function FFC_RuleUdpTrust_Cls_Err($host, $content)
{
    $content = substr($content, 2);//切去操作码
    $get = unpack("C1error", $content);
    $error = $get["error"];//失败原因
    $pack = array(
        "code" => OPFC_RuleUdpTrust_Cls_Err,
        "html" => "",//TODO 调用html页面
        "data" => array(
            "error" => $error,
        ),
    );
    echo "FFC_RuleUdpTrust_Cls_Err";
    return $pack;
}

/**
 * 基本规则管理-Udp无条件信任-编辑-成功
 *
 * @param $host
 * @param $content null
 * @return array
 * <pre>
 * code => OPFC_RuleUdpTrust_Edit_Ok
 * html => 调用html页面
 * data => null
 * </pre>
 */
function FFC_RuleUdpTrust_Edit_Ok($host, $content)
{
    $pack = array(
        "code" => OPFC_RuleUdpTrust_Edit_Ok,
        "html" => "",//TODO 调用html页面
        "data" => null,
    );
    echo "FFC_RuleUdpTrust_Edit_Ok";
    return $pack;
}
/**
 * 基本规则管理-Udp无条件信任-编辑-失败
 *
 * @param $host
 * @param $content
 * @return array
 * <pre>
 * code => OPFC_RuleUdpTrust_Edit_Err
 * html => 调用html页面
 * data => array{error => 失败原因（序号）}
 * </pre>
 */
function FFC_RuleUdpTrust_Edit_Err($host, $content)
{
    $content = substr($content, 2);//切去操作码
    $get = unpack("C1error", $content);
    $error = $get["error"];//失败原因
    $pack = array(
        "code" => OPFC_RuleUdpTrust_Edit_Err,
        "html" => "",//TODO 调用html页面
        "data" => array(
            "error" => $error,
        ),
    );
    echo "FFC_RuleUdpTrust_Edit_Err";
    return $pack;
}

/**
 * 基本规则管理-Udp无条件信任-删除-成功
 *
 * @param $host
 * @param $content null
 * @return array
 * <pre>
 * code => OPFC_RuleUdpTrust_Del_Ok
 * html => 调用html页面
 * data => null
 * </pre>
 */
function FFC_RuleUdpTrust_Del_Ok($host, $content)
{
    $pack = array(
        "code" => OPFC_RuleUdpTrust_Del_Ok,
        "html" => "",//TODO 调用html页面
        "data" => null,
    );
    echo "FFC_RuleUdpTrust_Del_Ok";
    return $pack;
}
/**
 * 基本规则管理-Udp无条件信任-删除-失败
 *
 * @param $host
 * @param $content
 * @return array
 * <pre>
 * code => OPFC_RuleUdpTrust_Del_Err
 * html => 调用html页面
 * data => array{error => 失败原因（序号）}
 * </pre>
 */
function FFC_RuleUdpTrust_Del_Err($host, $content)
{
    $content = substr($content, 2);//切去操作码
    $get = unpack("C1error", $content);
    $error = $get["error"];//失败原因
    $pack = array(
        "code" => OPFC_RuleUdpTrust_Del_Err,
        "html" => "",//TODO 调用html页面
        "data" => array(
            "error" => $error,
        ),
    );
    echo "FFC_RuleUdpTrust_Del_Err";
    return $pack;
}

function FFC_RuleUdpTrust_Import_One_Ok($host, $content)
{
    echo "FFC_RuleUdpTrust_Import_One_Ok             ";
}

function FFC_RuleUdpTrust_Import_One_Err($host, $content)
{
    echo "FFC_RuleUdpTrust_Import_One_Err            ";
}

function FFC_RuleUdpTrust_Import_All_Ok($host, $content)
{
    echo "FFC_RuleUdpTrust_Import_All_Ok             ";
}

function FFC_RuleUdpTrust_Import_All_Err($host, $content)
{
    echo "FFC_RuleUdpTrust_Import_All_Err            ";
}

function FFC_RuleUdpTrust_Export_Ret($host, $content)
{
    echo "FFC_RuleUdpTrust_Export_Ret                ";
}

function FFC_RuleUdpTrust_Export_Empty($host, $content)
{
    echo "FFC_RuleUdpTrust_Export_Empty              ";
}

function FFC_RuleUdpTrust_Export_Err($host, $content)
{
    echo "FFC_RuleUdpTrust_Export_Err                ";
}

/**
 * 基本规则管理-Udp用户自定义-内容
 *
 * @param $host
 * @param $content
 * @return array
 * <pre>
 * code => OPFC_RuleUdpAu_List_Ret
 * html => 调用html页面
 * data => {
 *      beginIndex => 起始索引(从0开始)
 *      number => 数量
 *      data => array(数据包，数组) {
 *                  dataBaseID => 旧数据库ID
 *                  beginTime => 起始时间 array(["h"]时["m"]分)
 *                  endTime => 结束时间 array(["h"]时["m"]分)
 *                  sourceIP => IP源 array([0][1][2][3])
 *                  sourceMask => 源IP掩码 array([0][1][2][3])
 *                  targetIP => 目的IP array([0][1][2][3])
 *                  targetMask => 目的IP掩码 array([0][1][2][3])
 *                  sourcePortBegin => 源端口起始
 *                  sourcePortEnd => 源端口结束
 *                  targetPortBegin => 目的端口起始
 *                  targetPortEnd => 目的端口结束
 *                  alertLevel => 告警级别
 *             }
 * </pre>
 */
function FFC_RuleUdpAu_List_Ret($host, $content)
{
    $content = substr($content, 2);//切去操作码
    $get = unpack("L1beginIndex/L1number", $content);
    $beginIndex = $get["beginIndex"];//起始索引(从0开始)
    $number = $get["number"];//数量
    //TODO 解析数据包
    $content = substr($content, 8);//只留下数据部分
    $data = array();//数据包
    for ($i = 0; $i < $number; ++$i) {
        //循环加入数组
        //TODO ip地址？掩码？
        $get = unpack("L1databaseID/C2beginTime/C2endTime/C4sourceIP/C4sourceMask/
        C4targetIP/C4targetMask/S1sourcePortBegin/S1sourcePortEnd/S1targetPortBegin/S1targetPortEnd/C1alertLevel", $content);
        $databaseID = $get["databaseID"];//数据库ID
        $beginTime = array("h"=>$get["beginTime1"],"m"=>$get["beginTime2"]);//起始时间
        $endTime = array("h"=>$get["endTime1"],"m"=>$get["endTime2"]);//结束时间
        $sourceIP = array($get["sourceIP1"],$get["sourceIP2"],$get["sourceIP3"],$get["sourceIP4"]);//IP源
        $sourceMask = array($get["sourceMask1"],$get["sourceMask2"],$get["sourceMask3"],$get["sourceMask4"]);//源IP掩码
        $targetIP = array($get["targetIP1"],$get["targetIP2"],$get["targetIP3"],$get["targetIP4"]);//目的IP
        $targetMask = array($get["targetMask1"],$get["targetMask2"],$get["targetMask3"],$get["targetMask4"]);//目的IP掩码
        $sourcePortBegin = $get["sourcePortBegin"];//源端口起始
        $sourcePortEnd = $get["sourcePortEnd"];//源端口结束
        $targetPortBegin = $get["targetPortBegin"];//目的端口起始
        $targetPortEnd = $get["targetPortEnd"];//目的端口结束
        $alertLevel=$get["alertLevel"];//告警级别
        $package = array(
            "dataBaseID" => $databaseID,
            "beginTime" => $beginTime,
            "endTime" => $endTime,
            "sourceIP" => $sourceIP,
            "sourceMask" => $sourceMask,
            "targetIP" => $targetIP,
            "targetMask" => $targetMask,
            "sourcePortBegin" => $sourcePortBegin,
            "sourcePortEnd" => $sourcePortEnd,
            "targetPortBegin" => $targetPortBegin,
            "targetPortEnd" => $targetPortEnd,
            "alertLevel" => $alertLevel,
        );
        $data[$i] = $package;//加入数组
        $content = substr($content, 33);//只留下剩余数据
    }
    $pack = array(
        "code" => OPFC_RuleUdpAu_List_Ret,
        "html" => "",//TODO html
        "data" => array(
            "beginIndex" => $beginIndex,
            "number" => $number,
            "data" => $data,
        ),
    );
    echo "FFC_RuleUdpAu_List_Ret";
    return $pack;
}
/**
 * 基本规则管理-Udp用户自定义-失败
 *
 * @param $host
 * @param $content
 * @return array
 * <pre>
 * code => OPFC_RuleUdpAu_List_Err
 * html => 调用html页面
 * data => array{error => 失败原因（序号）}
 * </pre>
 */
function FFC_RuleUdpAu_List_Err($host, $content)
{
    $content = substr($content, 2);//切去操作码
    $get = unpack("C1error", $content);
    $error = $get["error"];//失败原因
    $pack = array(
        "code" => OPFC_RuleUdpAu_List_Err,
        "html" => "",//TODO 调用html页面
        "data" => array(
            "error" => $error,
        ),
    );
    echo "FFC_RuleUdpAu_List_Err";
    return $pack;
}

/**
 * 基本规则管理-Udp用户自定义-添加-成功
 *
 * @param $host
 * @param $content null
 * @return array
 * <pre>
 * code => OPFC_RuleUdpAu_Add_Ok
 * html => 调用html页面
 * data => null
 * </pre>
 */
function FFC_RuleUdpAu_Add_Ok($host, $content)
{
    $pack = array(
        "code" => OPFC_RuleUdpAu_Add_Ok,
        "html" => "",//TODO 调用html页面
        "data" => null,
    );
    echo "FFC_RuleUdpAu_Add_Ok";
    return $pack;
}
/**
 * 基本规则管理-Udp用户自定义-添加-失败
 *
 * @param $host
 * @param $content
 * @return array
 * <pre>
 * code => OPFC_RuleUdpAu_Add_Err
 * html => 调用html页面
 * data => array{error => 失败原因（序号）}
 * </pre>
 */
function FFC_RuleUdpAu_Add_Err($host, $content)
{
    $content = substr($content, 2);//切去操作码
    $get = unpack("C1error", $content);
    $error = $get["error"];//失败原因
    $pack = array(
        "code" => OPFC_RuleUdpAu_Add_Err,
        "html" => "",//TODO 调用html页面
        "data" => array(
            "error" => $error,
        ),
    );
    echo "FFC_RuleUdpAu_Add_Err";
    return $pack;
}

/**
 * 基本规则管理-Udp用户自定义-全部删除-成功
 *
 * @param $host
 * @param $content null
 * @return array
 * <pre>
 * code => OPFC_RuleUdpAu_Cls_Ok
 * html => 调用html页面
 * data => null
 * </pre>
 */
function FFC_RuleUdpAu_Cls_Ok($host, $content)
{
    $pack = array(
        "code" => OPFC_RuleUdpAu_Cls_Ok,
        "html" => "",//TODO 调用html页面
        "data" => null,
    );
    echo "FFC_RuleUdpAu_Cls_Ok";
    return $pack;
}
/**
 * 基本规则管理-Udp用户自定义-全部删除-失败
 *
 * @param $host
 * @param $content
 * @return array
 * <pre>
 * code => OPFC_RuleUdpAu_Cls_Err
 * html => 调用html页面
 * data => array{error => 失败原因（序号）}
 * </pre>
 */
function FFC_RuleUdpAu_Cls_Err($host, $content)
{
    $content = substr($content, 2);//切去操作码
    $get = unpack("C1error", $content);
    $error = $get["error"];//失败原因
    $pack = array(
        "code" => OPFC_RuleUdpAu_Cls_Err,
        "html" => "",//TODO 调用html页面
        "data" => array(
            "error" => $error,
        ),
    );
    echo "FFC_RuleUdpAu_Cls_Err";
    return $pack;
}

/**
 * 基本规则管理-Udp用户自定义-编辑-成功
 *
 * @param $host
 * @param $content null
 * @return array
 * <pre>
 * code => OPFC_RuleUdpAu_Edit_Ok
 * html => 调用html页面
 * data => null
 * </pre>
 */
function FFC_RuleUdpAu_Edit_Ok($host, $content)
{
    $pack = array(
        "code" => OPFC_RuleUdpAu_Edit_Ok,
        "html" => "",//TODO 调用html页面
        "data" => null,
    );
    echo "FFC_RuleUdpAu_Edit_Ok";
    return $pack;
}
/**
 * 基本规则管理-Udp用户自定义-编辑-失败
 *
 * @param $host
 * @param $content
 * @return array
 * <pre>
 * code => OPFC_RuleUdpAu_Edit_Err
 * html => 调用html页面
 * data => array{error => 失败原因（序号）}
 * </pre>
 */
function FFC_RuleUdpAu_Edit_Err($host, $content)
{
    $content = substr($content, 2);//切去操作码
    $get = unpack("C1error", $content);
    $error = $get["error"];//失败原因
    $pack = array(
        "code" => OPFC_RuleUdpAu_Edit_Err,
        "html" => "",//TODO 调用html页面
        "data" => array(
            "error" => $error,
        ),
    );
    echo "FFC_RuleUdpAu_Edit_Err";
    return $pack;
}

/**
 * 基本规则管理-Udp用户自定义-删除-成功
 *
 * @param $host
 * @param $content null
 * @return array
 * <pre>
 * code => OPFC_RuleUdpAu_Del_Ok
 * html => 调用html页面
 * data => null
 * </pre>
 */
function FFC_RuleUdpAu_Del_Ok($host, $content)
{
    $pack = array(
        "code" => OPFC_RuleUdpAu_Del_Ok,
        "html" => "",//TODO 调用html页面
        "data" => null,
    );
    echo "FFC_RuleUdpAu_Del_Ok";
    return $pack;
}
/**
 * 基本规则管理-Udp用户自定义-删除-失败
 *
 * @param $host
 * @param $content
 * @return array
 * <pre>
 * code => OPFC_RuleUdpAu_Del_Err
 * html => 调用html页面
 * data => array{error => 失败原因（序号）}
 * </pre>
 */
function FFC_RuleUdpAu_Del_Err($host, $content)
{
    $content = substr($content, 2);//切去操作码
    $get = unpack("C1error", $content);
    $error = $get["error"];//失败原因
    $pack = array(
        "code" => OPFC_RuleUdpAu_Del_Err,
        "html" => "",//TODO 调用html页面
        "data" => array(
            "error" => $error,
        ),
    );
    echo "FFC_RuleUdpAu_Del_Err";
    return $pack;
}

function FFC_RuleUdpAu_Import_One_Ok($host, $content)
{
    echo "FFC_RuleUdpAu_Import_One_Ok                ";
}

function FFC_RuleUdpAu_Import_One_Err($host, $content)
{
    echo "FFC_RuleUdpAu_Import_One_Err               ";
}

function FFC_RuleUdpAu_Import_All_Ok($host, $content)
{
    echo "FFC_RuleUdpAu_Import_All_Ok                ";
}

function FFC_RuleUdpAu_Import_All_Err($host, $content)
{
    echo "FFC_RuleUdpAu_Import_All_Err               ";
}

function FFC_RuleUdpAu_Export_Ret($host, $content)
{
    echo "FFC_RuleUdpAu_Export_Ret                   ";
}

function FFC_RuleUdpAu_Export_Empty($host, $content)
{
    echo "FFC_RuleUdpAu_Export_Empty                 ";
}

function FFC_RuleUdpAu_Export_Err($host, $content)
{
    echo "FFC_RuleUdpAu_Export_Err                   ";
}

function FFC_RuleModbusBl_List_Ret($host, $content)
{
    echo "FFC_RuleModbusBl_List_Ret                  ";
}

function FFC_RuleModbusBl_List_Err($host, $content)
{
    echo "FFC_RuleModbusBl_List_Err                  ";
}

function FFC_RuleModbusBl_Add_Ok($host, $content)
{
    echo "FFC_RuleModbusBl_Add_Ok                    ";
}

function FFC_RuleModbusBl_Add_Err($host, $content)
{
    echo "FFC_RuleModbusBl_Add_Err                   ";
}

function FFC_RuleModbusBl_Cls_Ok($host, $content)
{
    echo "FFC_RuleModbusBl_Cls_Ok                    ";
}

function FFC_RuleModbusBl_Cls_Err($host, $content)
{
    echo "FFC_RuleModbusBl_Cls_Err                   ";
}

function FFC_RuleModbusBl_Enable_Ok($host, $content)
{
    echo "FFC_RuleModbusBl_Enable_Ok                 ";
}

function FFC_RuleModbusBl_Enable_Err($host, $content)
{
    echo "FFC_RuleModbusBl_Enable_Err                ";
}

function FFC_RuleModbusBl_Disable_Ok($host, $content)
{
    echo "FFC_RuleModbusBl_Disable_Ok                ";
}

function FFC_RuleModbusBl_Disable_Err($host, $content)
{
    echo "FFC_RuleModbusBl_Disable_Err               ";
}

function FFC_RuleModbusBl_Edit_Ok($host, $content)
{
    echo "FFC_RuleModbusBl_Edit_Ok                   ";
}

function FFC_RuleModbusBl_Edit_Err($host, $content)
{
    echo "FFC_RuleModbusBl_Edit_Err                  ";
}

function FFC_RuleModbusBl_Del_Ok($host, $content)
{
    echo "FFC_RuleModbusBl_Del_Ok                    ";
}

function FFC_RuleModbusBl_Del_Err($host, $content)
{
    echo "FFC_RuleModbusBl_Del_Err                   ";
}

function FFC_RuleModbusBl_Import_One_Ok($host, $content)
{
    echo "FFC_RuleModbusBl_Import_One_Ok             ";
}

function FFC_RuleModbusBl_Import_One_Err($host, $content)
{
    echo "FFC_RuleModbusBl_Import_One_Err            ";
}

function FFC_RuleModbusBl_Import_All_Ok($host, $content)
{
    echo "FFC_RuleModbusBl_Import_All_Ok             ";
}

function FFC_RuleModbusBl_Import_All_Err($host, $content)
{
    echo "FFC_RuleModbusBl_Import_All_Err            ";
}

function FFC_RuleModbusBl_Export_Ret($host, $content)
{
    echo "FFC_RuleModbusBl_Export_Ret                ";
}

function FFC_RuleModbusBl_Export_Empty($host, $content)
{
    echo "FFC_RuleModbusBl_Export_Empty              ";
}

function FFC_RuleModbusBl_Export_Err($host, $content)
{
    echo "FFC_RuleModbusBl_Export_Err                ";
}

function FFC_RuleModbusWl_List_Ret($host, $content)
{
    echo "FFC_RuleModbusWl_List_Ret                  ";
}

function FFC_RuleModbusWl_List_Err($host, $content)
{
    echo "FFC_RuleModbusWl_List_Err                  ";
}

function FFC_RuleModbusWl_Add_Ok($host, $content)
{
    echo "FFC_RuleModbusWl_Add_Ok                    ";
}

function FFC_RuleModbusWl_Add_Err($host, $content)
{
    echo "FFC_RuleModbusWl_Add_Err                   ";
}

function FFC_RuleModbusWl_Cls_Ok($host, $content)
{
    echo "FFC_RuleModbusWl_Cls_Ok                    ";
}

function FFC_RuleModbusWl_Cls_Err($host, $content)
{
    echo "FFC_RuleModbusWl_Cls_Err                   ";
}

function FFC_RuleModbusWl_Enable_Ok($host, $content)
{
    echo "FFC_RuleModbusWl_Enable_Ok                 ";
}

function FFC_RuleModbusWl_Enable_Err($host, $content)
{
    echo "FFC_RuleModbusWl_Enable_Err                ";
}

function FFC_RuleModbusWl_Disable_Ok($host, $content)
{
    echo "FFC_RuleModbusWl_Disable_Ok                ";
}

function FFC_RuleModbusWl_Disable_Err($host, $content)
{
    echo "FFC_RuleModbusWl_Disable_Err               ";
}

function FFC_RuleModbusWl_Edit_Ok($host, $content)
{
    echo "FFC_RuleModbusWl_Edit_Ok                   ";
}

function FFC_RuleModbusWl_Edit_Err($host, $content)
{
    echo "FFC_RuleModbusWl_Edit_Err                  ";
}

function FFC_RuleModbusWl_Del_Ok($host, $content)
{
    echo "FFC_RuleModbusWl_Del_Ok                    ";
}

function FFC_RuleModbusWl_Del_Err($host, $content)
{
    echo "FFC_RuleModbusWl_Del_Err                   ";
}

function FFC_RuleModbusWl_Import_One_Ok($host, $content)
{
    echo "FFC_RuleModbusWl_Import_One_Ok             ";
}

function FFC_RuleModbusWl_Import_One_Err($host, $content)
{
    echo "FFC_RuleModbusWl_Import_One_Err            ";
}

function FFC_RuleModbusWl_Import_All_Ok($host, $content)
{
    echo "FFC_RuleModbusWl_Import_All_Ok             ";
}

function FFC_RuleModbusWl_Import_All_Err($host, $content)
{
    echo "FFC_RuleModbusWl_Import_All_Err            ";
}

function FFC_RuleModbusWl_Export_Ret($host, $content)
{
    echo "FFC_RuleModbusWl_Export_Ret                ";
}

function FFC_RuleModbusWl_Export_Empty($host, $content)
{
    echo "FFC_RuleModbusWl_Export_Empty              ";
}

function FFC_RuleModbusWl_Export_Err($host, $content)
{
    echo "FFC_RuleModbusWl_Export_Err                ";
}

function FFC_RuleModbusAu_List_Ret($host, $content)
{
    echo "FFC_RuleModbusAu_List_Ret                  ";
}

function FFC_RuleModbusAu_List_Err($host, $content)
{
    echo "FFC_RuleModbusAu_List_Err                  ";
}

function FFC_RuleModbusAu_Add_Ok($host, $content)
{
    echo "FFC_RuleModbusAu_Add_Ok                    ";
}

function FFC_RuleModbusAu_Add_Err($host, $content)
{
    echo "FFC_RuleModbusAu_Add_Err                   ";
}

function FFC_RuleModbusAu_Cls_Ok($host, $content)
{
    echo "FFC_RuleModbusAu_Cls_Ok                    ";
}

function FFC_RuleModbusAu_Cls_Err($host, $content)
{
    echo "FFC_RuleModbusAu_Cls_Err                   ";
}

function FFC_RuleModbusAu_Enable_Ok($host, $content)
{
    echo "FFC_RuleModbusAu_Enable_Ok                 ";
}

function FFC_RuleModbusAu_Enable_Err($host, $content)
{
    echo "FFC_RuleModbusAu_Enable_Err                ";
}

function FFC_RuleModbusAu_Disable_Ok($host, $content)
{
    echo "FFC_RuleModbusAu_Disable_Ok                ";
}

function FFC_RuleModbusAu_Disable_Err($host, $content)
{
    echo "FFC_RuleModbusAu_Disable_Err               ";
}

function FFC_RuleModbusAu_Edit_Ok($host, $content)
{
    echo "FFC_RuleModbusAu_Edit_Ok                   ";
}

function FFC_RuleModbusAu_Edit_Err($host, $content)
{
    echo "FFC_RuleModbusAu_Edit_Err                  ";
}

function FFC_RuleModbusAu_Del_Ok($host, $content)
{
    echo "FFC_RuleModbusAu_Del_Ok                    ";
}

function FFC_RuleModbusAu_Del_Err($host, $content)
{
    echo "FFC_RuleModbusAu_Del_Err                   ";
}

function FFC_RuleModbusAu_Import_One_Ok($host, $content)
{
    echo "FFC_RuleModbusAu_Import_One_Ok             ";
}

function FFC_RuleModbusAu_Import_One_Err($host, $content)
{
    echo "FFC_RuleModbusAu_Import_One_Err            ";
}

function FFC_RuleModbusAu_Import_All_Ok($host, $content)
{
    echo "FFC_RuleModbusAu_Import_All_Ok             ";
}

function FFC_RuleModbusAu_Import_All_Err($host, $content)
{
    echo "FFC_RuleModbusAu_Import_All_Err            ";
}

function FFC_RuleModbusAu_Export_Ret($host, $content)
{
    echo "FFC_RuleModbusAu_Export_Ret                ";
}

function FFC_RuleModbusAu_Export_Empty($host, $content)
{
    echo "FFC_RuleModbusAu_Export_Empty              ";
}

function FFC_RuleModbusAu_Export_Err($host, $content)
{
    echo "FFC_RuleModbusAu_Export_Err                ";
}

function FFC_RuleIec104Bl_List_Ret($host, $content)
{
    echo "FFC_RuleIec104Bl_List_Ret                  ";
}

function FFC_RuleIec104Bl_List_Err($host, $content)
{
    echo "FFC_RuleIec104Bl_List_Err                  ";
}

function FFC_RuleIec104Bl_Add_Ok($host, $content)
{
    echo "FFC_RuleIec104Bl_Add_Ok                    ";
}

function FFC_RuleIec104Bl_Add_Err($host, $content)
{
    echo "FFC_RuleIec104Bl_Add_Err                   ";
}

function FFC_RuleIec104Bl_Cls_Ok($host, $content)
{
    echo "FFC_RuleIec104Bl_Cls_Ok                    ";
}

function FFC_RuleIec104Bl_Cls_Err($host, $content)
{
    echo "FFC_RuleIec104Bl_Cls_Err                   ";
}

function FFC_RuleIec104Bl_Enable_Ok($host, $content)
{
    echo "FFC_RuleIec104Bl_Enable_Ok                 ";
}

function FFC_RuleIec104Bl_Enable_Err($host, $content)
{
    echo "FFC_RuleIec104Bl_Enable_Err                ";
}

function FFC_RuleIec104Bl_Disable_Ok($host, $content)
{
    echo "FFC_RuleIec104Bl_Disable_Ok                ";
}

function FFC_RuleIec104Bl_Disable_Err($host, $content)
{
    echo "FFC_RuleIec104Bl_Disable_Err               ";
}

function FFC_RuleIec104Bl_Edit_Ok($host, $content)
{
    echo "FFC_RuleIec104Bl_Edit_Ok                   ";
}

function FFC_RuleIec104Bl_Edit_Err($host, $content)
{
    echo "FFC_RuleIec104Bl_Edit_Err                  ";
}

function FFC_RuleIec104Bl_Del_Ok($host, $content)
{
    echo "FFC_RuleIec104Bl_Del_Ok                    ";
}

function FFC_RuleIec104Bl_Del_Err($host, $content)
{
    echo "FFC_RuleIec104Bl_Del_Err                   ";
}

function FFC_RuleIec104Bl_Import_One_Ok($host, $content)
{
    echo "FFC_RuleIec104Bl_Import_One_Ok             ";
}

function FFC_RuleIec104Bl_Import_One_Err($host, $content)
{
    echo "FFC_RuleIec104Bl_Import_One_Err            ";
}

function FFC_RuleIec104Bl_Import_All_Ok($host, $content)
{
    echo "FFC_RuleIec104Bl_Import_All_Ok             ";
}

function FFC_RuleIec104Bl_Import_All_Err($host, $content)
{
    echo "FFC_RuleIec104Bl_Import_All_Err            ";
}

function FFC_RuleIec104Bl_Export_Ret($host, $content)
{
    echo "FFC_RuleIec104Bl_Export_Ret                ";
}

function FFC_RuleIec104Bl_Export_Empty($host, $content)
{
    echo "FFC_RuleIec104Bl_Export_Empty              ";
}

function FFC_RuleIec104Bl_Export_Err($host, $content)
{
    echo "FFC_RuleIec104Bl_Export_Err                ";
}

function FFC_RuleIec104Wl_List_Ret($host, $content)
{
    echo "FFC_RuleIec104Wl_List_Ret                  ";
}

function FFC_RuleIec104Wl_List_Err($host, $content)
{
    echo "FFC_RuleIec104Wl_List_Err                  ";
}

function FFC_RuleIec104Wl_Add_Ok($host, $content)
{
    echo "FFC_RuleIec104Wl_Add_Ok                    ";
}

function FFC_RuleIec104Wl_Add_Err($host, $content)
{
    echo "FFC_RuleIec104Wl_Add_Err                   ";
}

function FFC_RuleIec104Wl_Cls_Ok($host, $content)
{
    echo "FFC_RuleIec104Wl_Cls_Ok                    ";
}

function FFC_RuleIec104Wl_Cls_Err($host, $content)
{
    echo "FFC_RuleIec104Wl_Cls_Err                   ";
}

function FFC_RuleIec104Wl_Enable_Ok($host, $content)
{
    echo "FFC_RuleIec104Wl_Enable_Ok                 ";
}

function FFC_RuleIec104Wl_Enable_Err($host, $content)
{
    echo "FFC_RuleIec104Wl_Enable_Err                ";
}

function FFC_RuleIec104Wl_Disable_Ok($host, $content)
{
    echo "FFC_RuleIec104Wl_Disable_Ok                ";
}

function FFC_RuleIec104Wl_Disable_Err($host, $content)
{
    echo "FFC_RuleIec104Wl_Disable_Err               ";
}

function FFC_RuleIec104Wl_Edit_Ok($host, $content)
{
    echo "FFC_RuleIec104Wl_Edit_Ok                   ";
}

function FFC_RuleIec104Wl_Edit_Err($host, $content)
{
    echo "FFC_RuleIec104Wl_Edit_Err                  ";
}

function FFC_RuleIec104Wl_Del_Ok($host, $content)
{
    echo "FFC_RuleIec104Wl_Del_Ok                    ";
}

function FFC_RuleIec104Wl_Del_Err($host, $content)
{
    echo "FFC_RuleIec104Wl_Del_Err                   ";
}

function FFC_RuleIec104Wl_Import_One_Ok($host, $content)
{
    echo "FFC_RuleIec104Wl_Import_One_Ok             ";
}

function FFC_RuleIec104Wl_Import_One_Err($host, $content)
{
    echo "FFC_RuleIec104Wl_Import_One_Err            ";
}

function FFC_RuleIec104Wl_Import_All_Ok($host, $content)
{
    echo "FFC_RuleIec104Wl_Import_All_Ok             ";
}

function FFC_RuleIec104Wl_Import_All_Err($host, $content)
{
    echo "FFC_RuleIec104Wl_Import_All_Err            ";
}

function FFC_RuleIec104Wl_Export_Ret($host, $content)
{
    echo "FFC_RuleIec104Wl_Export_Ret                ";
}

function FFC_RuleIec104Wl_Export_Empty($host, $content)
{
    echo "FFC_RuleIec104Wl_Export_Empty              ";
}

function FFC_RuleIec104Wl_Export_Err($host, $content)
{
    echo "FFC_RuleIec104Wl_Export_Err                ";
}

function FFC_RuleIec104Au_List_Ret($host, $content)
{
    echo "FFC_RuleIec104Au_List_Ret                  ";
}

function FFC_RuleIec104Au_List_Err($host, $content)
{
    echo "FFC_RuleIec104Au_List_Err                  ";
}

function FFC_RuleIec104Au_Add_Ok($host, $content)
{
    echo "FFC_RuleIec104Au_Add_Ok                    ";
}

function FFC_RuleIec104Au_Add_Err($host, $content)
{
    echo "FFC_RuleIec104Au_Add_Err                   ";
}

function FFC_RuleIec104Au_Cls_Ok($host, $content)
{
    echo "FFC_RuleIec104Au_Cls_Ok                    ";
}

function FFC_RuleIec104Au_Cls_Err($host, $content)
{
    echo "FFC_RuleIec104Au_Cls_Err                   ";
}

function FFC_RuleIec104Au_Enable_Ok($host, $content)
{
    echo "FFC_RuleIec104Au_Enable_Ok                 ";
}

function FFC_RuleIec104Au_Enable_Err($host, $content)
{
    echo "FFC_RuleIec104Au_Enable_Err                ";
}

function FFC_RuleIec104Au_Disable_Ok($host, $content)
{
    echo "FFC_RuleIec104Au_Disable_Ok                ";
}

function FFC_RuleIec104Au_Disable_Err($host, $content)
{
    echo "FFC_RuleIec104Au_Disable_Err               ";
}

function FFC_RuleIec104Au_Edit_Ok($host, $content)
{
    echo "FFC_RuleIec104Au_Edit_Ok                   ";
}

function FFC_RuleIec104Au_Edit_Err($host, $content)
{
    echo "FFC_RuleIec104Au_Edit_Err                  ";
}

function FFC_RuleIec104Au_Del_Ok($host, $content)
{
    echo "FFC_RuleIec104Au_Del_Ok                    ";
}

function FFC_RuleIec104Au_Del_Err($host, $content)
{
    echo "FFC_RuleIec104Au_Del_Err                   ";
}

function FFC_RuleIec104Au_Import_One_Ok($host, $content)
{
    echo "FFC_RuleIec104Au_Import_One_Ok             ";
}

function FFC_RuleIec104Au_Import_One_Err($host, $content)
{
    echo "FFC_RuleIec104Au_Import_One_Err            ";
}

function FFC_RuleIec104Au_Import_All_Ok($host, $content)
{
    echo "FFC_RuleIec104Au_Import_All_Ok             ";
}

function FFC_RuleIec104Au_Import_All_Err($host, $content)
{
    echo "FFC_RuleIec104Au_Import_All_Err            ";
}

function FFC_RuleIec104Au_Export_Ret($host, $content)
{
    echo "FFC_RuleIec104Au_Export_Ret                ";
}

function FFC_RuleIec104Au_Export_Empty($host, $content)
{
    echo "FFC_RuleIec104Au_Export_Empty              ";
}

function FFC_RuleIec104Au_Export_Err($host, $content)
{
    echo "FFC_RuleIec104Au_Export_Err                ";
}

function FFC_RuleDnpBl_List_Ret($host, $content)
{
    echo "FFC_RuleDnpBl_List_Ret                     ";
}

function FFC_RuleDnpBl_List_Err($host, $content)
{
    echo "FFC_RuleDnpBl_List_Err                     ";
}

function FFC_RuleDnpBl_Add_Ok($host, $content)
{
    echo "FFC_RuleDnpBl_Add_Ok                       ";
}

function FFC_RuleDnpBl_Add_Err($host, $content)
{
    echo "FFC_RuleDnpBl_Add_Err                      ";
}

function FFC_RuleDnpBl_Cls_Ok($host, $content)
{
    echo "FFC_RuleDnpBl_Cls_Ok                       ";
}

function FFC_RuleDnpBl_Cls_Err($host, $content)
{
    echo "FFC_RuleDnpBl_Cls_Err                      ";
}

function FFC_RuleDnpBl_Enable_Ok($host, $content)
{
    echo "FFC_RuleDnpBl_Enable_Ok                    ";
}

function FFC_RuleDnpBl_Enable_Err($host, $content)
{
    echo "FFC_RuleDnpBl_Enable_Err                   ";
}

function FFC_RuleDnpBl_Disable_Ok($host, $content)
{
    echo "FFC_RuleDnpBl_Disable_Ok                   ";
}

function FFC_RuleDnpBl_Disable_Err($host, $content)
{
    echo "FFC_RuleDnpBl_Disable_Err                  ";
}

function FFC_RuleDnpBl_Edit_Ok($host, $content)
{
    echo "FFC_RuleDnpBl_Edit_Ok                      ";
}

function FFC_RuleDnpBl_Edit_Err($host, $content)
{
    echo "FFC_RuleDnpBl_Edit_Err                     ";
}

function FFC_RuleDnpBl_Del_Ok($host, $content)
{
    echo "FFC_RuleDnpBl_Del_Ok                       ";
}

function FFC_RuleDnpBl_Del_Err($host, $content)
{
    echo "FFC_RuleDnpBl_Del_Err                      ";
}

function FFC_RuleDnpBl_Import_One_Ok($host, $content)
{
    echo "FFC_RuleDnpBl_Import_One_Ok                ";
}

function FFC_RuleDnpBl_Import_One_Err($host, $content)
{
    echo "FFC_RuleDnpBl_Import_One_Err               ";
}

function FFC_RuleDnpBl_Import_All_Ok($host, $content)
{
    echo "FFC_RuleDnpBl_Import_All_Ok                ";
}

function FFC_RuleDnpBl_Import_All_Err($host, $content)
{
    echo "FFC_RuleDnpBl_Import_All_Err               ";
}

function FFC_RuleDnpBl_Export_Ret($host, $content)
{
    echo "FFC_RuleDnpBl_Export_Ret                   ";
}

function FFC_RuleDnpBl_Export_Empty($host, $content)
{
    echo "FFC_RuleDnpBl_Export_Empty                 ";
}

function FFC_RuleDnpBl_Export_Err($host, $content)
{
    echo "FFC_RuleDnpBl_Export_Err                   ";
}

function FFC_RuleDnpWl_List_Ret($host, $content)
{
    echo "FFC_RuleDnpWl_List_Ret                     ";
}

function FFC_RuleDnpWl_List_Err($host, $content)
{
    echo "FFC_RuleDnpWl_List_Err                     ";
}

function FFC_RuleDnpWl_Add_Ok($host, $content)
{
    echo "FFC_RuleDnpWl_Add_Ok                       ";
}

function FFC_RuleDnpWl_Add_Err($host, $content)
{
    echo "FFC_RuleDnpWl_Add_Err                      ";
}

function FFC_RuleDnpWl_Cls_Ok($host, $content)
{
    echo "FFC_RuleDnpWl_Cls_Ok                       ";
}

function FFC_RuleDnpWl_Cls_Err($host, $content)
{
    echo "FFC_RuleDnpWl_Cls_Err                      ";
}

function FFC_RuleDnpWl_Enable_Ok($host, $content)
{
    echo "FFC_RuleDnpWl_Enable_Ok                    ";
}

function FFC_RuleDnpWl_Enable_Err($host, $content)
{
    echo "FFC_RuleDnpWl_Enable_Err                   ";
}

function FFC_RuleDnpWl_Disable_Ok($host, $content)
{
    echo "FFC_RuleDnpWl_Disable_Ok                   ";
}

function FFC_RuleDnpWl_Disable_Err($host, $content)
{
    echo "FFC_RuleDnpWl_Disable_Err                  ";
}

function FFC_RuleDnpWl_Edit_Ok($host, $content)
{
    echo "FFC_RuleDnpWl_Edit_Ok                      ";
}

function FFC_RuleDnpWl_Edit_Err($host, $content)
{
    echo "FFC_RuleDnpWl_Edit_Err                     ";
}

function FFC_RuleDnpWl_Del_Ok($host, $content)
{
    echo "FFC_RuleDnpWl_Del_Ok                       ";
}

function FFC_RuleDnpWl_Del_Err($host, $content)
{
    echo "FFC_RuleDnpWl_Del_Err                      ";
}

function FFC_RuleDnpWl_Import_One_Ok($host, $content)
{
    echo "FFC_RuleDnpWl_Import_One_Ok                ";
}

function FFC_RuleDnpWl_Import_One_Err($host, $content)
{
    echo "FFC_RuleDnpWl_Import_One_Err               ";
}

function FFC_RuleDnpWl_Import_All_Ok($host, $content)
{
    echo "FFC_RuleDnpWl_Import_All_Ok                ";
}

function FFC_RuleDnpWl_Import_All_Err($host, $content)
{
    echo "FFC_RuleDnpWl_Import_All_Err               ";
}

function FFC_RuleDnpWl_Export_Ret($host, $content)
{
    echo "FFC_RuleDnpWl_Export_Ret                   ";
}

function FFC_RuleDnpWl_Export_Empty($host, $content)
{
    echo "FFC_RuleDnpWl_Export_Empty                 ";
}

function FFC_RuleDnpWl_Export_Err($host, $content)
{
    echo "FFC_RuleDnpWl_Export_Err                   ";
}

function FFC_RuleDnpAu_List_Ret($host, $content)
{
    echo "FFC_RuleDnpAu_List_Ret                     ";
}

function FFC_RuleDnpAu_List_Err($host, $content)
{
    echo "FFC_RuleDnpAu_List_Err                     ";
}

function FFC_RuleDnpAu_Add_Ok($host, $content)
{
    echo "FFC_RuleDnpAu_Add_Ok                       ";
}

function FFC_RuleDnpAu_Add_Err($host, $content)
{
    echo "FFC_RuleDnpAu_Add_Err                      ";
}

function FFC_RuleDnpAu_Cls_Ok($host, $content)
{
    echo "FFC_RuleDnpAu_Cls_Ok                       ";
}

function FFC_RuleDnpAu_Cls_Err($host, $content)
{
    echo "FFC_RuleDnpAu_Cls_Err                      ";
}

function FFC_RuleDnpAu_Enable_Ok($host, $content)
{
    echo "FFC_RuleDnpAu_Enable_Ok                    ";
}

function FFC_RuleDnpAu_Enable_Err($host, $content)
{
    echo "FFC_RuleDnpAu_Enable_Err                   ";
}

function FFC_RuleDnpAu_Disable_Ok($host, $content)
{
    echo "FFC_RuleDnpAu_Disable_Ok                   ";
}

function FFC_RuleDnpAu_Disable_Err($host, $content)
{
    echo "FFC_RuleDnpAu_Disable_Err                  ";
}

function FFC_RuleDnpAu_Edit_Ok($host, $content)
{
    echo "FFC_RuleDnpAu_Edit_Ok                      ";
}

function FFC_RuleDnpAu_Edit_Err($host, $content)
{
    echo "FFC_RuleDnpAu_Edit_Err                     ";
}

function FFC_RuleDnpAu_Del_Ok($host, $content)
{
    echo "FFC_RuleDnpAu_Del_Ok                       ";
}

function FFC_RuleDnpAu_Del_Err($host, $content)
{
    echo "FFC_RuleDnpAu_Del_Err                      ";
}

function FFC_RuleDnpAu_Import_One_Ok($host, $content)
{
    echo "FFC_RuleDnpAu_Import_One_Ok                ";
}

function FFC_RuleDnpAu_Import_One_Err($host, $content)
{
    echo "FFC_RuleDnpAu_Import_One_Err               ";
}

function FFC_RuleDnpAu_Import_All_Ok($host, $content)
{
    echo "FFC_RuleDnpAu_Import_All_Ok                ";
}

function FFC_RuleDnpAu_Import_All_Err($host, $content)
{
    echo "FFC_RuleDnpAu_Import_All_Err               ";
}

function FFC_RuleDnpAu_Export_Ret($host, $content)
{
    echo "FFC_RuleDnpAu_Export_Ret                   ";
}

function FFC_RuleDnpAu_Export_Empty($host, $content)
{
    echo "FFC_RuleDnpAu_Export_Empty                 ";
}

function FFC_RuleDnpAu_Export_Err($host, $content)
{
    echo "FFC_RuleDnpAu_Export_Err                   ";
}

function FFC_RuleS7Bl_List_Ret($host, $content)
{
    echo "FFC_RuleS7Bl_List_Ret                      ";
}

function FFC_RuleS7Bl_List_Err($host, $content)
{
    echo "FFC_RuleS7Bl_List_Err                      ";
}

function FFC_RuleS7Bl_Add_Ok($host, $content)
{
    echo "FFC_RuleS7Bl_Add_Ok                        ";
}

function FFC_RuleS7Bl_Add_Err($host, $content)
{
    echo "FFC_RuleS7Bl_Add_Err                       ";
}

function FFC_RuleS7Bl_Cls_Ok($host, $content)
{
    echo "FFC_RuleS7Bl_Cls_Ok                        ";
}

function FFC_RuleS7Bl_Cls_Err($host, $content)
{
    echo "FFC_RuleS7Bl_Cls_Err                       ";
}

function FFC_RuleS7Bl_Enable_Ok($host, $content)
{
    echo "FFC_RuleS7Bl_Enable_Ok                     ";
}

function FFC_RuleS7Bl_Enable_Err($host, $content)
{
    echo "FFC_RuleS7Bl_Enable_Err                    ";
}

function FFC_RuleS7Bl_Disable_Ok($host, $content)
{
    echo "FFC_RuleS7Bl_Disable_Ok                    ";
}

function FFC_RuleS7Bl_Disable_Err($host, $content)
{
    echo "FFC_RuleS7Bl_Disable_Err                   ";
}

function FFC_RuleS7Bl_Edit_Ok($host, $content)
{
    echo "FFC_RuleS7Bl_Edit_Ok                       ";
}

function FFC_RuleS7Bl_Edit_Err($host, $content)
{
    echo "FFC_RuleS7Bl_Edit_Err                      ";
}

function FFC_RuleS7Bl_Del_Ok($host, $content)
{
    echo "FFC_RuleS7Bl_Del_Ok                        ";
}

function FFC_RuleS7Bl_Del_Err($host, $content)
{
    echo "FFC_RuleS7Bl_Del_Err                       ";
}

function FFC_RuleS7Bl_Import_One_Ok($host, $content)
{
    echo "FFC_RuleS7Bl_Import_One_Ok                 ";
}

function FFC_RuleS7Bl_Import_One_Err($host, $content)
{
    echo "FFC_RuleS7Bl_Import_One_Err                ";
}

function FFC_RuleS7Bl_Import_All_Ok($host, $content)
{
    echo "FFC_RuleS7Bl_Import_All_Ok                 ";
}

function FFC_RuleS7Bl_Import_All_Err($host, $content)
{
    echo "FFC_RuleS7Bl_Import_All_Err                ";
}

function FFC_RuleS7Bl_Export_Ret($host, $content)
{
    echo "FFC_RuleS7Bl_Export_Ret                    ";
}

function FFC_RuleS7Bl_Export_Empty($host, $content)
{
    echo "FFC_RuleS7Bl_Export_Empty                  ";
}

function FFC_RuleS7Bl_Export_Err($host, $content)
{
    echo "FFC_RuleS7Bl_Export_Err                    ";
}

function FFC_RuleS7Wl_List_Ret($host, $content)
{
    echo "FFC_RuleS7Wl_List_Ret                      ";
}

function FFC_RuleS7Wl_List_Err($host, $content)
{
    echo "FFC_RuleS7Wl_List_Err                      ";
}

function FFC_RuleS7Wl_Add_Ok($host, $content)
{
    echo "FFC_RuleS7Wl_Add_Ok                        ";
}

function FFC_RuleS7Wl_Add_Err($host, $content)
{
    echo "FFC_RuleS7Wl_Add_Err                       ";
}

function FFC_RuleS7Wl_Cls_Ok($host, $content)
{
    echo "FFC_RuleS7Wl_Cls_Ok                        ";
}

function FFC_RuleS7Wl_Cls_Err($host, $content)
{
    echo "FFC_RuleS7Wl_Cls_Err                       ";
}

function FFC_RuleS7Wl_Enable_Ok($host, $content)
{
    echo "FFC_RuleS7Wl_Enable_Ok                     ";
}

function FFC_RuleS7Wl_Enable_Err($host, $content)
{
    echo "FFC_RuleS7Wl_Enable_Err                    ";
}

function FFC_RuleS7Wl_Disable_Ok($host, $content)
{
    echo "FFC_RuleS7Wl_Disable_Ok                    ";
}

function FFC_RuleS7Wl_Disable_Err($host, $content)
{
    echo "FFC_RuleS7Wl_Disable_Err                   ";
}

function FFC_RuleS7Wl_Edit_Ok($host, $content)
{
    echo "FFC_RuleS7Wl_Edit_Ok                       ";
}

function FFC_RuleS7Wl_Edit_Err($host, $content)
{
    echo "FFC_RuleS7Wl_Edit_Err                      ";
}

function FFC_RuleS7Wl_Del_Ok($host, $content)
{
    echo "FFC_RuleS7Wl_Del_Ok                        ";
}

function FFC_RuleS7Wl_Del_Err($host, $content)
{
    echo "FFC_RuleS7Wl_Del_Err                       ";
}

function FFC_RuleS7Wl_Import_One_Ok($host, $content)
{
    echo "FFC_RuleS7Wl_Import_One_Ok                 ";
}

function FFC_RuleS7Wl_Import_One_Err($host, $content)
{
    echo "FFC_RuleS7Wl_Import_One_Err                ";
}

function FFC_RuleS7Wl_Import_All_Ok($host, $content)
{
    echo "FFC_RuleS7Wl_Import_All_Ok                 ";
}

function FFC_RuleS7Wl_Import_All_Err($host, $content)
{
    echo "FFC_RuleS7Wl_Import_All_Err                ";
}

function FFC_RuleS7Wl_Export_Ret($host, $content)
{
    echo "FFC_RuleS7Wl_Export_Ret                    ";
}

function FFC_RuleS7Wl_Export_Empty($host, $content)
{
    echo "FFC_RuleS7Wl_Export_Empty                  ";
}

function FFC_RuleS7Wl_Export_Err($host, $content)
{
    echo "FFC_RuleS7Wl_Export_Err                    ";
}

function FFC_RuleS7Au_List_Ret($host, $content)
{
    echo "FFC_RuleS7Au_List_Ret                      ";
}

function FFC_RuleS7Au_List_Err($host, $content)
{
    echo "FFC_RuleS7Au_List_Err                      ";
}

function FFC_RuleS7Au_Add_Ok($host, $content)
{
    echo "FFC_RuleS7Au_Add_Ok                        ";
}

function FFC_RuleS7Au_Add_Err($host, $content)
{
    echo "FFC_RuleS7Au_Add_Err                       ";
}

function FFC_RuleS7Au_Cls_Ok($host, $content)
{
    echo "FFC_RuleS7Au_Cls_Ok                        ";
}

function FFC_RuleS7Au_Cls_Err($host, $content)
{
    echo "FFC_RuleS7Au_Cls_Err                       ";
}

function FFC_RuleS7Au_Enable_Ok($host, $content)
{
    echo "FFC_RuleS7Au_Enable_Ok                     ";
}

function FFC_RuleS7Au_Enable_Err($host, $content)
{
    echo "FFC_RuleS7Au_Enable_Err                    ";
}

function FFC_RuleS7Au_Disable_Ok($host, $content)
{
    echo "FFC_RuleS7Au_Disable_Ok                    ";
}

function FFC_RuleS7Au_Disable_Err($host, $content)
{
    echo "FFC_RuleS7Au_Disable_Err                   ";
}

function FFC_RuleS7Au_Edit_Ok($host, $content)
{
    echo "FFC_RuleS7Au_Edit_Ok                       ";
}

function FFC_RuleS7Au_Edit_Err($host, $content)
{
    echo "FFC_RuleS7Au_Edit_Err                      ";
}

function FFC_RuleS7Au_Del_Ok($host, $content)
{
    echo "FFC_RuleS7Au_Del_Ok                        ";
}

function FFC_RuleS7Au_Del_Err($host, $content)
{
    echo "FFC_RuleS7Au_Del_Err                       ";
}

function FFC_RuleS7Au_Import_One_Ok($host, $content)
{
    echo "FFC_RuleS7Au_Import_One_Ok                 ";
}

function FFC_RuleS7Au_Import_One_Err($host, $content)
{
    echo "FFC_RuleS7Au_Import_One_Err                ";
}

function FFC_RuleS7Au_Import_All_Ok($host, $content)
{
    echo "FFC_RuleS7Au_Import_All_Ok                 ";
}

function FFC_RuleS7Au_Import_All_Err($host, $content)
{
    echo "FFC_RuleS7Au_Import_All_Err                ";
}

function FFC_RuleS7Au_Export_Ret($host, $content)
{
    echo "FFC_RuleS7Au_Export_Ret                    ";
}

function FFC_RuleS7Au_Export_Empty($host, $content)
{
    echo "FFC_RuleS7Au_Export_Empty                  ";
}

function FFC_RuleS7Au_Export_Err($host, $content)
{
    echo "FFC_RuleS7Au_Export_Err                    ";
}

function FFC_RuleOpcBl_List_Ret($host, $content)
{
    echo "FFC_RuleOpcBl_List_Ret                     ";
}

function FFC_RuleOpcBl_List_Err($host, $content)
{
    echo "FFC_RuleOpcBl_List_Err                     ";
}

function FFC_RuleOpcBl_Add_Ok($host, $content)
{
    echo "FFC_RuleOpcBl_Add_Ok                       ";
}

function FFC_RuleOpcBl_Add_Err($host, $content)
{
    echo "FFC_RuleOpcBl_Add_Err                      ";
}

function FFC_RuleOpcBl_Cls_Ok($host, $content)
{
    echo "FFC_RuleOpcBl_Cls_Ok                       ";
}

function FFC_RuleOpcBl_Cls_Err($host, $content)
{
    echo "FFC_RuleOpcBl_Cls_Err                      ";
}

function FFC_RuleOpcBl_Enable_Ok($host, $content)
{
    echo "FFC_RuleOpcBl_Enable_Ok                    ";
}

function FFC_RuleOpcBl_Enable_Err($host, $content)
{
    echo "FFC_RuleOpcBl_Enable_Err                   ";
}

function FFC_RuleOpcBl_Disable_Ok($host, $content)
{
    echo "FFC_RuleOpcBl_Disable_Ok                   ";
}

function FFC_RuleOpcBl_Disable_Err($host, $content)
{
    echo "FFC_RuleOpcBl_Disable_Err                  ";
}

function FFC_RuleOpcBl_Edit_Ok($host, $content)
{
    echo "FFC_RuleOpcBl_Edit_Ok                      ";
}

function FFC_RuleOpcBl_Edit_Err($host, $content)
{
    echo "FFC_RuleOpcBl_Edit_Err                     ";
}

function FFC_RuleOpcBl_Del_Ok($host, $content)
{
    echo "FFC_RuleOpcBl_Del_Ok                       ";
}

function FFC_RuleOpcBl_Del_Err($host, $content)
{
    echo "FFC_RuleOpcBl_Del_Err                      ";
}

function FFC_RuleOpcBl_Import_One_Ok($host, $content)
{
    echo "FFC_RuleOpcBl_Import_One_Ok                ";
}

function FFC_RuleOpcBl_Import_One_Err($host, $content)
{
    echo "FFC_RuleOpcBl_Import_One_Err               ";
}

function FFC_RuleOpcBl_Import_All_Ok($host, $content)
{
    echo "FFC_RuleOpcBl_Import_All_Ok                ";
}

function FFC_RuleOpcBl_Import_All_Err($host, $content)
{
    echo "FFC_RuleOpcBl_Import_All_Err               ";
}

function FFC_RuleOpcBl_Export_Ret($host, $content)
{
    echo "FFC_RuleOpcBl_Export_Ret                   ";
}

function FFC_RuleOpcBl_Export_Empty($host, $content)
{
    echo "FFC_RuleOpcBl_Export_Empty                 ";
}

function FFC_RuleOpcBl_Export_Err($host, $content)
{
    echo "FFC_RuleOpcBl_Export_Err                   ";
}

function FFC_RuleOpcWl_List_Ret($host, $content)
{
    echo "FFC_RuleOpcWl_List_Ret                     ";
}

function FFC_RuleOpcWl_List_Err($host, $content)
{
    echo "FFC_RuleOpcWl_List_Err                     ";
}

function FFC_RuleOpcWl_Add_Ok($host, $content)
{
    echo "FFC_RuleOpcWl_Add_Ok                       ";
}

function FFC_RuleOpcWl_Add_Err($host, $content)
{
    echo "FFC_RuleOpcWl_Add_Err                      ";
}

function FFC_RuleOpcWl_Cls_Ok($host, $content)
{
    echo "FFC_RuleOpcWl_Cls_Ok                       ";
}

function FFC_RuleOpcWl_Cls_Err($host, $content)
{
    echo "FFC_RuleOpcWl_Cls_Err                      ";
}

function FFC_RuleOpcWl_Enable_Ok($host, $content)
{
    echo "FFC_RuleOpcWl_Enable_Ok                    ";
}

function FFC_RuleOpcWl_Enable_Err($host, $content)
{
    echo "FFC_RuleOpcWl_Enable_Err                   ";
}

function FFC_RuleOpcWl_Disable_Ok($host, $content)
{
    echo "FFC_RuleOpcWl_Disable_Ok                   ";
}

function FFC_RuleOpcWl_Disable_Err($host, $content)
{
    echo "FFC_RuleOpcWl_Disable_Err                  ";
}

function FFC_RuleOpcWl_Edit_Ok($host, $content)
{
    echo "FFC_RuleOpcWl_Edit_Ok                      ";
}

function FFC_RuleOpcWl_Edit_Err($host, $content)
{
    echo "FFC_RuleOpcWl_Edit_Err                     ";
}

function FFC_RuleOpcWl_Del_Ok($host, $content)
{
    echo "FFC_RuleOpcWl_Del_Ok                       ";
}

function FFC_RuleOpcWl_Del_Err($host, $content)
{
    echo "FFC_RuleOpcWl_Del_Err                      ";
}

function FFC_RuleOpcWl_Import_One_Ok($host, $content)
{
    echo "FFC_RuleOpcWl_Import_One_Ok                ";
}

function FFC_RuleOpcWl_Import_One_Err($host, $content)
{
    echo "FFC_RuleOpcWl_Import_One_Err               ";
}

function FFC_RuleOpcWl_Import_All_Ok($host, $content)
{
    echo "FFC_RuleOpcWl_Import_All_Ok                ";
}

function FFC_RuleOpcWl_Import_All_Err($host, $content)
{
    echo "FFC_RuleOpcWl_Import_All_Err               ";
}

function FFC_RuleOpcWl_Export_Ret($host, $content)
{
    echo "FFC_RuleOpcWl_Export_Ret                   ";
}

function FFC_RuleOpcWl_Export_Empty($host, $content)
{
    echo "FFC_RuleOpcWl_Export_Empty                 ";
}

function FFC_RuleOpcWl_Export_Err($host, $content)
{
    echo "FFC_RuleOpcWl_Export_Err                   ";
}

function FFC_RuleOpcAu_List_Ret($host, $content)
{
    echo "FFC_RuleOpcAu_List_Ret                     ";
}

function FFC_RuleOpcAu_List_Err($host, $content)
{
    echo "FFC_RuleOpcAu_List_Err                     ";
}

function FFC_RuleOpcAu_Add_Ok($host, $content)
{
    echo "FFC_RuleOpcAu_Add_Ok                       ";
}

function FFC_RuleOpcAu_Add_Err($host, $content)
{
    echo "FFC_RuleOpcAu_Add_Err                      ";
}

function FFC_RuleOpcAu_Cls_Ok($host, $content)
{
    echo "FFC_RuleOpcAu_Cls_Ok                       ";
}

function FFC_RuleOpcAu_Cls_Err($host, $content)
{
    echo "FFC_RuleOpcAu_Cls_Err                      ";
}

function FFC_RuleOpcAu_Enable_Ok($host, $content)
{
    echo "FFC_RuleOpcAu_Enable_Ok                    ";
}

function FFC_RuleOpcAu_Enable_Err($host, $content)
{
    echo "FFC_RuleOpcAu_Enable_Err                   ";
}

function FFC_RuleOpcAu_Disable_Ok($host, $content)
{
    echo "FFC_RuleOpcAu_Disable_Ok                   ";
}

function FFC_RuleOpcAu_Disable_Err($host, $content)
{
    echo "FFC_RuleOpcAu_Disable_Err                  ";
}

function FFC_RuleOpcAu_Edit_Ok($host, $content)
{
    echo "FFC_RuleOpcAu_Edit_Ok                      ";
}

function FFC_RuleOpcAu_Edit_Err($host, $content)
{
    echo "FFC_RuleOpcAu_Edit_Err                     ";
}

function FFC_RuleOpcAu_Del_Ok($host, $content)
{
    echo "FFC_RuleOpcAu_Del_Ok                       ";
}

function FFC_RuleOpcAu_Del_Err($host, $content)
{
    echo "FFC_RuleOpcAu_Del_Err                      ";
}

function FFC_RuleOpcAu_Import_One_Ok($host, $content)
{
    echo "FFC_RuleOpcAu_Import_One_Ok                ";
}

function FFC_RuleOpcAu_Import_One_Err($host, $content)
{
    echo "FFC_RuleOpcAu_Import_One_Err               ";
}

function FFC_RuleOpcAu_Import_All_Ok($host, $content)
{
    echo "FFC_RuleOpcAu_Import_All_Ok                ";
}

function FFC_RuleOpcAu_Import_All_Err($host, $content)
{
    echo "FFC_RuleOpcAu_Import_All_Err               ";
}

function FFC_RuleOpcAu_Export_Ret($host, $content)
{
    echo "FFC_RuleOpcAu_Export_Ret                   ";
}

function FFC_RuleOpcAu_Export_Empty($host, $content)
{
    echo "FFC_RuleOpcAu_Export_Empty                 ";
}

function FFC_RuleOpcAu_Export_Err($host, $content)
{
    echo "FFC_RuleOpcAu_Export_Err                   ";
}

function FFC_LrnModbus_Start_Ok($host, $content)
{
    echo "FFC_LrnModbus_Start_Ok                     ";
}

function FFC_LrnModbus_Start_Err($host, $content)
{
    echo "FFC_LrnModbus_Start_Err                    ";
}

function FFC_LrnModbus_End_Ok($host, $content)
{
    echo "FFC_LrnModbus_End_Ok                       ";
}

function FFC_LrnModbus_End_Err($host, $content)
{
    echo "FFC_LrnModbus_End_Err                      ";
}

function FFC_LrnModbus_Edit_Ok($host, $content)
{
    echo "FFC_LrnModbus_Edit_Ok                      ";
}

function FFC_LrnModbus_Edit_Err($host, $content)
{
    echo "FFC_LrnModbus_Edit_Err                     ";
}

function FFC_LrnModbus_Del_Ok($host, $content)
{
    echo "FFC_LrnModbus_Del_Ok                       ";
}

function FFC_LrnModbus_Del_Err($host, $content)
{
    echo "FFC_LrnModbus_Del_Err                      ";
}

function FFC_LrnModbus_Cls_Ok($host, $content)
{
    echo "FFC_LrnModbus_Cls_Ok                       ";
}

function FFC_LrnModbus_Cls_Err($host, $content)
{
    echo "FFC_LrnModbus_Cls_Err                      ";
}

function FFC_LrnIec104_Start_Ok($host, $content)
{
    echo "FFC_LrnIec104_Start_Ok                     ";
}

function FFC_LrnIec104_Start_Err($host, $content)
{
    echo "FFC_LrnIec104_Start_Err                    ";
}

function FFC_LrnIec104_End_Ok($host, $content)
{
    echo "FFC_LrnIec104_End_Ok                       ";
}

function FFC_LrnIec104_End_Err($host, $content)
{
    echo "FFC_LrnIec104_End_Err                      ";
}

function FFC_LrnIec104_Edit_Ok($host, $content)
{
    echo "FFC_LrnIec104_Edit_Ok                      ";
}

function FFC_LrnIec104_Edit_Err($host, $content)
{
    echo "FFC_LrnIec104_Edit_Err                     ";
}

function FFC_LrnIec104_Del_Ok($host, $content)
{
    echo "FFC_LrnIec104_Del_Ok                       ";
}

function FFC_LrnIec104_Del_Err($host, $content)
{
    echo "FFC_LrnIec104_Del_Err                      ";
}

function FFC_LrnIec104_Cls_Ok($host, $content)
{
    echo "FFC_LrnIec104_Cls_Ok                       ";
}

function FFC_LrnIec104_Cls_Err($host, $content)
{
    echo "FFC_LrnIec104_Cls_Err                      ";
}

function FFC_LrnDnp3_Start_Ok($host, $content)
{
    echo "FFC_LrnDnp3_Start_Ok                       ";
}

function FFC_LrnDnp3_Start_Err($host, $content)
{
    echo "FFC_LrnDnp3_Start_Err                      ";
}

function FFC_LrnDnp3_End_Ok($host, $content)
{
    echo "FFC_LrnDnp3_End_Ok                         ";
}

function FFC_LrnDnp3_End_Err($host, $content)
{
    echo "FFC_LrnDnp3_End_Err                        ";
}

function FFC_LrnDnp3_Edit_Ok($host, $content)
{
    echo "FFC_LrnDnp3_Edit_Ok                        ";
}

function FFC_LrnDnp3_Edit_Err($host, $content)
{
    echo "FFC_LrnDnp3_Edit_Err                       ";
}

function FFC_LrnDnp3_Del_Ok($host, $content)
{
    echo "FFC_LrnDnp3_Del_Ok                         ";
}

function FFC_LrnDnp3_Del_Err($host, $content)
{
    echo "FFC_LrnDnp3_Del_Err                        ";
}

function FFC_LrnDnp3_Cls_Ok($host, $content)
{
    echo "FFC_LrnDnp3_Cls_Ok                         ";
}

function FFC_LrnDnp3_Cls_Err($host, $content)
{
    echo "FFC_LrnDnp3_Cls_Err                        ";
}

function FFC_LrnS7_Start_Ok($host, $content)
{
    echo "FFC_LrnS7_Start_Ok                         ";
}

function FFC_LrnS7_Start_Err($host, $content)
{
    echo "FFC_LrnS7_Start_Err                        ";
}

function FFC_LrnS7_End_Ok($host, $content)
{
    echo "FFC_LrnS7_End_Ok                           ";
}

function FFC_LrnS7_End_Err($host, $content)
{
    echo "FFC_LrnS7_End_Err                          ";
}

function FFC_LrnS7_Edit_Ok($host, $content)
{
    echo "FFC_LrnS7_Edit_Ok                          ";
}

function FFC_LrnS7_Edit_Err($host, $content)
{
    echo "FFC_LrnS7_Edit_Err                         ";
}

function FFC_LrnS7_Del_Ok($host, $content)
{
    echo "FFC_LrnS7_Del_Ok                           ";
}

function FFC_LrnS7_Del_Err($host, $content)
{
    echo "FFC_LrnS7_Del_Err                          ";
}

function FFC_LrnS7_Cls_Ok($host, $content)
{
    echo "FFC_LrnS7_Cls_Ok                           ";
}

function FFC_LrnS7_Cls_Err($host, $content)
{
    echo "FFC_LrnS7_Cls_Err                          ";
}

function FFC_LrnOpc_Start_Ok($host, $content)
{
    echo "FFC_LrnOpc_Start_Ok                        ";
}

function FFC_LrnOpc_Start_Err($host, $content)
{
    echo "FFC_LrnOpc_Start_Err                       ";
}

function FFC_LrnOpc_End_Ok($host, $content)
{
    echo "FFC_LrnOpc_End_Ok                          ";
}

function FFC_LrnOpc_End_Err($host, $content)
{
    echo "FFC_LrnOpc_End_Err                         ";
}

function FFC_LrnOpc_Edit_Ok($host, $content)
{
    echo "FFC_LrnOpc_Edit_Ok                         ";
}

function FFC_LrnOpc_Edit_Err($host, $content)
{
    echo "FFC_LrnOpc_Edit_Err                        ";
}

function FFC_LrnOpc_Del_Ok($host, $content)
{
    echo "FFC_LrnOpc_Del_Ok                          ";
}

function FFC_LrnOpc_Del_Err($host, $content)
{
    echo "FFC_LrnOpc_Del_Err                         ";
}

function FFC_LrnOpc_Cls_Ok($host, $content)
{
    echo "FFC_LrnOpc_Cls_Ok                          ";
}

function FFC_LrnOpc_Cls_Err($host, $content)
{
    echo "FFC_LrnOpc_Cls_Err                         ";
}

function FFC_LogAll_List_Ret($host, $content)
{
    echo "FFC_LogAll_List_Ret                        ";
}

function FFC_LogAll_List_Err($host, $content)
{
    echo "FFC_LogAll_List_Err                        ";
}

function FFC_LogAll_Query_Ret($host, $content)
{
    echo "FFC_LogAll_Query_Ret                       ";
}

function FFC_LogAll_Query_Err($host, $content)
{
    echo "FFC_LogAll_Query_Err                       ";
}

function FFC_LogAll_Cls_Ok($host, $content)
{
    echo "FFC_LogAll_Cls_Ok                          ";
}

function FFC_LogAll_Cls_Err($host, $content)
{
    echo "FFC_LogAll_Cls_Err                         ";
}

function FFC_LogAll_Del_Ok($host, $content)
{
    echo "FFC_LogAll_Del_Ok                          ";
}

function FFC_LogAll_Del_Err($host, $content)
{
    echo "FFC_LogAll_Del_Err                         ";
}

function FFC_LogAll_Export_Ret($host, $content)
{
    echo "FFC_LogAll_Export_Ret                      ";
}

function FFC_LogAll_Export_Empty($host, $content)
{
    echo "FFC_LogAll_Export_Empty                    ";
}

function FFC_LogAll_Export_Err($host, $content)
{
    echo "FFC_LogAll_Export_Err                      ";
}

function FFC_LogRuleMac_List_Ret($host, $content)
{
    echo "FFC_LogRuleMac_List_Ret                    ";
}

function FFC_LogRuleMac_List_Err($host, $content)
{
    echo "FFC_LogRuleMac_List_Err                    ";
}

function FFC_LogRuleMac_Query_Ret($host, $content)
{
    echo "FFC_LogRuleMac_Query_Ret                   ";
}

function FFC_LogRuleMac_Query_Err($host, $content)
{
    echo "FFC_LogRuleMac_Query_Err                   ";
}

function FFC_LogRuleMac_Cls_Ok($host, $content)
{
    echo "FFC_LogRuleMac_Cls_Ok                      ";
}

function FFC_LogRuleMac_Cls_Err($host, $content)
{
    echo "FFC_LogRuleMac_Cls_Err                     ";
}

function FFC_LogRuleMac_Del_Ok($host, $content)
{
    echo "FFC_LogRuleMac_Del_Ok                      ";
}

function FFC_LogRuleMac_Del_Err($host, $content)
{
    echo "FFC_LogRuleMac_Del_Err                     ";
}

function FFC_LogRuleMac_Export_Ret($host, $content)
{
    echo "FFC_LogRuleMac_Export_Ret                  ";
}

function FFC_LogRuleMac_Export_Empty($host, $content)
{
    echo "FFC_LogRuleMac_Export_Empty                ";
}

function FFC_LogRuleMac_Export_Err($host, $content)
{
    echo "FFC_LogRuleMac_Export_Err                  ";
}

function FFC_LogRuleIp_List_Ret($host, $content)
{
    echo "FFC_LogRuleIp_List_Ret                     ";
}

function FFC_LogRuleIp_List_Err($host, $content)
{
    echo "FFC_LogRuleIp_List_Err                     ";
}

function FFC_LogRuleIp_Query_Ret($host, $content)
{
    echo "FFC_LogRuleIp_Query_Ret                    ";
}

function FFC_LogRuleIp_Query_Err($host, $content)
{
    echo "FFC_LogRuleIp_Query_Err                    ";
}

function FFC_LogRuleIp_Cls_Ok($host, $content)
{
    echo "FFC_LogRuleIp_Cls_Ok                       ";
}

function FFC_LogRuleIp_Cls_Err($host, $content)
{
    echo "FFC_LogRuleIp_Cls_Err                      ";
}

function FFC_LogRuleIp_Del_Ok($host, $content)
{
    echo "FFC_LogRuleIp_Del_Ok                       ";
}

function FFC_LogRuleIp_Del_Err($host, $content)
{
    echo "FFC_LogRuleIp_Del_Err                      ";
}

function FFC_LogRuleIp_Export_Ret($host, $content)
{
    echo "FFC_LogRuleIp_Export_Ret                   ";
}

function FFC_LogRuleIp_Export_Empty($host, $content)
{
    echo "FFC_LogRuleIp_Export_Empty                 ";
}

function FFC_LogRuleIp_Export_Err($host, $content)
{
    echo "FFC_LogRuleIp_Export_Err                   ";
}

function FFC_LogRuleSz_List_Ret($host, $content)
{
    echo "FFC_LogRuleSz_List_Ret                     ";
}

function FFC_LogRuleSz_List_Err($host, $content)
{
    echo "FFC_LogRuleSz_List_Err                     ";
}

function FFC_LogRuleSz_Query_Ret($host, $content)
{
    echo "FFC_LogRuleSz_Query_Ret                    ";
}

function FFC_LogRuleSz_Query_Err($host, $content)
{
    echo "FFC_LogRuleSz_Query_Err                    ";
}

function FFC_LogRuleSz_Cls_Ok($host, $content)
{
    echo "FFC_LogRuleSz_Cls_Ok                       ";
}

function FFC_LogRuleSz_Cls_Err($host, $content)
{
    echo "FFC_LogRuleSz_Cls_Err                      ";
}

function FFC_LogRuleSz_Del_Ok($host, $content)
{
    echo "FFC_LogRuleSz_Del_Ok                       ";
}

function FFC_LogRuleSz_Del_Err($host, $content)
{
    echo "FFC_LogRuleSz_Del_Err                      ";
}

function FFC_LogRuleSz_Export_Ret($host, $content)
{
    echo "FFC_LogRuleSz_Export_Ret                   ";
}

function FFC_LogRuleSz_Export_Empty($host, $content)
{
    echo "FFC_LogRuleSz_Export_Empty                 ";
}

function FFC_LogRuleSz_Export_Err($host, $content)
{
    echo "FFC_LogRuleSz_Export_Err                   ";
}

function FFC_LogRuleTcp_List_Ret($host, $content)
{
    echo "FFC_LogRuleTcp_List_Ret                    ";
}

function FFC_LogRuleTcp_List_Err($host, $content)
{
    echo "FFC_LogRuleTcp_List_Err                    ";
}

function FFC_LogRuleTcp_Query_Ret($host, $content)
{
    echo "FFC_LogRuleTcp_Query_Ret                   ";
}

function FFC_LogRuleTcp_Query_Err($host, $content)
{
    echo "FFC_LogRuleTcp_Query_Err                   ";
}

function FFC_LogRuleTcp_Cls_Ok($host, $content)
{
    echo "FFC_LogRuleTcp_Cls_Ok                      ";
}

function FFC_LogRuleTcp_Cls_Err($host, $content)
{
    echo "FFC_LogRuleTcp_Cls_Err                     ";
}

function FFC_LogRuleTcp_Del_Ok($host, $content)
{
    echo "FFC_LogRuleTcp_Del_Ok                      ";
}

function FFC_LogRuleTcp_Del_Err($host, $content)
{
    echo "FFC_LogRuleTcp_Del_Err                     ";
}

function FFC_LogRuleTcp_Export_Ret($host, $content)
{
    echo "FFC_LogRuleTcp_Export_Ret                  ";
}

function FFC_LogRuleTcp_Export_Empty($host, $content)
{
    echo "FFC_LogRuleTcp_Export_Empty                ";
}

function FFC_LogRuleTcp_Export_Err($host, $content)
{
    echo "FFC_LogRuleTcp_Export_Err                  ";
}

function FFC_LogRuleUdp_List_Ret($host, $content)
{
    echo "FFC_LogRuleUdp_List_Ret                    ";
}

function FFC_LogRuleUdp_List_Err($host, $content)
{
    echo "FFC_LogRuleUdp_List_Err                    ";
}

function FFC_LogRuleUdp_Query_Ret($host, $content)
{
    echo "FFC_LogRuleUdp_Query_Ret                   ";
}

function FFC_LogRuleUdp_Query_Err($host, $content)
{
    echo "FFC_LogRuleUdp_Query_Err                   ";
}

function FFC_LogRuleUdp_Cls_Ok($host, $content)
{
    echo "FFC_LogRuleUdp_Cls_Ok                      ";
}

function FFC_LogRuleUdp_Cls_Err($host, $content)
{
    echo "FFC_LogRuleUdp_Cls_Err                     ";
}

function FFC_LogRuleUdp_Del_Ok($host, $content)
{
    echo "FFC_LogRuleUdp_Del_Ok                      ";
}

function FFC_LogRuleUdp_Del_Err($host, $content)
{
    echo "FFC_LogRuleUdp_Del_Err                     ";
}

function FFC_LogRuleUdp_Export_Ret($host, $content)
{
    echo "FFC_LogRuleUdp_Export_Ret                  ";
}

function FFC_LogRuleUdp_Export_Empty($host, $content)
{
    echo "FFC_LogRuleUdp_Export_Empty                ";
}

function FFC_LogRuleUdp_Export_Err($host, $content)
{
    echo "FFC_LogRuleUdp_Export_Err                  ";
}

function FFC_LogRuleIndWl_List_Ret($host, $content)
{
    echo "FFC_LogRuleIndWl_List_Ret                  ";
}

function FFC_LogRuleIndWl_List_Err($host, $content)
{
    echo "FFC_LogRuleIndWl_List_Err                  ";
}

function FFC_LogRuleIndWl_Query_Ret($host, $content)
{
    echo "FFC_LogRuleIndWl_Query_Ret                 ";
}

function FFC_LogRuleIndWl_Query_Err($host, $content)
{
    echo "FFC_LogRuleIndWl_Query_Err                 ";
}

function FFC_LogRuleIndWl_Cls_Ok($host, $content)
{
    echo "FFC_LogRuleIndWl_Cls_Ok                    ";
}

function FFC_LogRuleIndWl_Cls_Err($host, $content)
{
    echo "FFC_LogRuleIndWl_Cls_Err                   ";
}

function FFC_LogRuleIndWl_Del_Ok($host, $content)
{
    echo "FFC_LogRuleIndWl_Del_Ok                    ";
}

function FFC_LogRuleIndWl_Del_Err($host, $content)
{
    echo "FFC_LogRuleIndWl_Del_Err                   ";
}

function FFC_LogRuleIndWl_Export_Ret($host, $content)
{
    echo "FFC_LogRuleIndWl_Export_Ret                ";
}

function FFC_LogRuleIndWl_Export_Empty($host, $content)
{
    echo "FFC_LogRuleIndWl_Export_Empty              ";
}

function FFC_LogRuleIndWl_Export_Err($host, $content)
{
    echo "FFC_LogRuleIndWl_Export_Err                ";
}

function FFC_LogRuleIndBl_List_Ret($host, $content)
{
    echo "FFC_LogRuleIndBl_List_Ret                  ";
}

function FFC_LogRuleIndBl_List_Err($host, $content)
{
    echo "FFC_LogRuleIndBl_List_Err                  ";
}

function FFC_LogRuleIndBl_Query_Ret($host, $content)
{
    echo "FFC_LogRuleIndBl_Query_Ret                 ";
}

function FFC_LogRuleIndBl_Query_Err($host, $content)
{
    echo "FFC_LogRuleIndBl_Query_Err                 ";
}

function FFC_LogRuleIndBl_Cls_Ok($host, $content)
{
    echo "FFC_LogRuleIndBl_Cls_Ok                    ";
}

function FFC_LogRuleIndBl_Cls_Err($host, $content)
{
    echo "FFC_LogRuleIndBl_Cls_Err                   ";
}

function FFC_LogRuleIndBl_Del_Ok($host, $content)
{
    echo "FFC_LogRuleIndBl_Del_Ok                    ";
}

function FFC_LogRuleIndBl_Del_Err($host, $content)
{
    echo "FFC_LogRuleIndBl_Del_Err                   ";
}

function FFC_LogRuleIndBl_Export_Ret($host, $content)
{
    echo "FFC_LogRuleIndBl_Export_Ret                ";
}

function FFC_LogRuleIndBl_Export_Empty($host, $content)
{
    echo "FFC_LogRuleIndBl_Export_Empty              ";
}

function FFC_LogRuleIndBl_Export_Err($host, $content)
{
    echo "FFC_LogRuleIndBl_Export_Err                ";
}

function FFC_LogRuleIndEx_List_Ret($host, $content)
{
    echo "FFC_LogRuleIndEx_List_Ret                  ";
}

function FFC_LogRuleIndEx_List_Err($host, $content)
{
    echo "FFC_LogRuleIndEx_List_Err                  ";
}

function FFC_LogRuleIndEx_Query_Ret($host, $content)
{
    echo "FFC_LogRuleIndEx_Query_Ret                 ";
}

function FFC_LogRuleIndEx_Query_Err($host, $content)
{
    echo "FFC_LogRuleIndEx_Query_Err                 ";
}

function FFC_LogRuleIndEx_Cls_Ok($host, $content)
{
    echo "FFC_LogRuleIndEx_Cls_Ok                    ";
}

function FFC_LogRuleIndEx_Cls_Err($host, $content)
{
    echo "FFC_LogRuleIndEx_Cls_Err                   ";
}

function FFC_LogRuleIndEx_Del_Ok($host, $content)
{
    echo "FFC_LogRuleIndEx_Del_Ok                    ";
}

function FFC_LogRuleIndEx_Del_Err($host, $content)
{
    echo "FFC_LogRuleIndEx_Del_Err                   ";
}

function FFC_LogRuleIndEx_Export_Ret($host, $content)
{
    echo "FFC_LogRuleIndEx_Export_Ret                ";
}

function FFC_LogRuleIndEx_Export_Empty($host, $content)
{
    echo "FFC_LogRuleIndEx_Export_Empty              ";
}

function FFC_LogRuleIndEx_Export_Err($host, $content)
{
    echo "FFC_LogRuleIndEx_Export_Err                ";
}

function FFC_LogArp_List_Ret($host, $content)
{
    echo "FFC_LogArp_List_Ret                        ";
}

function FFC_LogArp_List_Err($host, $content)
{
    echo "FFC_LogArp_List_Err                        ";
}

function FFC_LogArp_Query_Ret($host, $content)
{
    echo "FFC_LogArp_Query_Ret                       ";
}

function FFC_LogArp_Query_Err($host, $content)
{
    echo "FFC_LogArp_Query_Err                       ";
}

function FFC_LogArp_Cls_Ok($host, $content)
{
    echo "FFC_LogArp_Cls_Ok                          ";
}

function FFC_LogArp_Cls_Err($host, $content)
{
    echo "FFC_LogArp_Cls_Err                         ";
}

function FFC_LogArp_Del_Ok($host, $content)
{
    echo "FFC_LogArp_Del_Ok                          ";
}

function FFC_LogArp_Del_Err($host, $content)
{
    echo "FFC_LogArp_Del_Err                         ";
}

function FFC_LogArp_Export_Ret($host, $content)
{
    echo "FFC_LogArp_Export_Ret                      ";
}

function FFC_LogArp_Export_Empty($host, $content)
{
    echo "FFC_LogArp_Export_Empty                    ";
}

function FFC_LogArp_Export_Err($host, $content)
{
    echo "FFC_LogArp_Export_Err                      ";
}

function FFC_LogAttack_List_Ret($host, $content)
{
    echo "FFC_LogAttack_List_Ret                     ";
}

function FFC_LogAttack_List_Err($host, $content)
{
    echo "FFC_LogAttack_List_Err                     ";
}

function FFC_LogAttack_Query_Ret($host, $content)
{
    echo "FFC_LogAttack_Query_Ret                    ";
}

function FFC_LogAttack_Query_Err($host, $content)
{
    echo "FFC_LogAttack_Query_Err                    ";
}

function FFC_LogAttack_Cls_Ok($host, $content)
{
    echo "FFC_LogAttack_Cls_Ok                       ";
}

function FFC_LogAttack_Cls_Err($host, $content)
{
    echo "FFC_LogAttack_Cls_Err                      ";
}

function FFC_LogAttack_Del_Ok($host, $content)
{
    echo "FFC_LogAttack_Del_Ok                       ";
}

function FFC_LogAttack_Del_Err($host, $content)
{
    echo "FFC_LogAttack_Del_Err                      ";
}

function FFC_LogAttack_Export_Ret($host, $content)
{
    echo "FFC_LogAttack_Export_Ret                   ";
}

function FFC_LogAttack_Export_Empty($host, $content)
{
    echo "FFC_LogAttack_Export_Empty                 ";
}

function FFC_LogAttack_Export_Err($host, $content)
{
    echo "FFC_LogAttack_Export_Err                   ";
}

function FFC_LogRun_List_Ret($host, $content)
{
    echo "FFC_LogRun_List_Ret                        ";
}

function FFC_LogRun_List_Err($host, $content)
{
    echo "FFC_LogRun_List_Err                        ";
}

function FFC_LogRun_Query_Ret($host, $content)
{
    echo "FFC_LogRun_Query_Ret                       ";
}

function FFC_LogRun_Query_Err($host, $content)
{
    echo "FFC_LogRun_Query_Err                       ";
}

function FFC_LogRun_Cls_Ok($host, $content)
{
    echo "FFC_LogRun_Cls_Ok                          ";
}

function FFC_LogRun_Cls_Err($host, $content)
{
    echo "FFC_LogRun_Cls_Err                         ";
}

function FFC_LogRun_Del_Ok($host, $content)
{
    echo "FFC_LogRun_Del_Ok                          ";
}

function FFC_LogRun_Del_Err($host, $content)
{
    echo "FFC_LogRun_Del_Err                         ";
}

function FFC_LogRun_Export_Ret($host, $content)
{
    echo "FFC_LogRun_Export_Ret                      ";
}

function FFC_LogRun_Export_Empty($host, $content)
{
    echo "FFC_LogRun_Export_Empty                    ";
}

function FFC_LogRun_Export_Err($host, $content)
{
    echo "FFC_LogRun_Export_Err                      ";
}

function FFC_LogSys_List_Ret($host, $content)
{
    echo "FFC_LogSys_List_Ret                        ";
}

function FFC_LogSys_List_Err($host, $content)
{
    echo "FFC_LogSys_List_Err                        ";
}

function FFC_LogSys_Query_Ret($host, $content)
{
    echo "FFC_LogSys_Query_Ret                       ";
}

function FFC_LogSys_Query_Err($host, $content)
{
    echo "FFC_LogSys_Query_Err                       ";
}

function FFC_LogSys_Cls_Ok($host, $content)
{
    echo "FFC_LogSys_Cls_Ok                          ";
}

function FFC_LogSys_Cls_Err($host, $content)
{
    echo "FFC_LogSys_Cls_Err                         ";
}

function FFC_LogSys_Del_Ok($host, $content)
{
    echo "FFC_LogSys_Del_Ok                          ";
}

function FFC_LogSys_Del_Err($host, $content)
{
    echo "FFC_LogSys_Del_Err                         ";
}

function FFC_LogSys_Export_Ret($host, $content)
{
    echo "FFC_LogSys_Export_Ret                      ";
}

function FFC_LogSys_Export_Empty($host, $content)
{
    echo "FFC_LogSys_Export_Empty                    ";
}

function FFC_LogSys_Export_Err($host, $content)
{
    echo "FFC_LogSys_Export_Err                      ";
}

function FFC_Conf_Func_Ok($host, $content)
{
    echo "FFC_Conf_Func_Ok                           ";
}

function FFC_Conf_Func_Err($host, $content)
{
    echo "FFC_Conf_Func_Err                          ";
}

function FFC_Conf_Warnlevel_Ok($host, $content)
{
    echo "FFC_Conf_Warnlevel_Ok                      ";
}

function FFC_Conf_Warnlevel_Err($host, $content)
{
    echo "FFC_Conf_Warnlevel_Err                     ";
}

function FFC_Conf_AlermEmail_Ok($host, $content)
{
    echo "FFC_Conf_AlermEmail_Ok                     ";
}

function FFC_Conf_AlermEmail_Err($host, $content)
{
    echo "FFC_Conf_AlermEmail_Err                    ";
}
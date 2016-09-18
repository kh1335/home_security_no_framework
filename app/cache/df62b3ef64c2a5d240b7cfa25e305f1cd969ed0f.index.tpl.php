<?php
/* Smarty version 3.1.30, created on 2016-09-18 20:22:20
  from "/Applications/XAMPP/xamppfiles/htdocs/repositories/home_security_no_framework/app/templates/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57dedb5c61ae28_88302920',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '36b318775db802663d62e578d049e6bdbee4f8a7' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/repositories/home_security_no_framework/app/templates/index.tpl',
      1 => 1474222808,
      2 => 'file',
    ),
    '05f4943850a2c2277b191ca50279472ed8dc74c5' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/repositories/home_security_no_framework/app/templates/header.tpl',
      1 => 1474222663,
      2 => 'file',
    ),
    '4cacd95ee2d83bab399b28d0824059c82b625ef5' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/repositories/home_security_no_framework/app/templates/footer.tpl',
      1 => 1473301675,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 120,
),true)) {
function content_57dedb5c61ae28_88302920 (Smarty_Internal_Template $_smarty_tpl) {
?>

<HTML>
<HEAD>
<TITLE>Home Securtity - Sensors</TITLE>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

</HEAD>
<BODY bgcolor="#ffffff">


<h1 class="text-center">Sensor State</h1>

<table name="sensors_table" class="table table-bordered">
    <tr class="active text-center">
        <th>Name</th>
        <th>Type</th>
        <th>State</th>
        <th>Alarm</th>
    </tr>
    <tr class=" Success ">
        <td>Kitchen Temperature</td>
        <td>Temperature</td>
        <td>-79.5&#176;</td>
        <td></td>
    </tr>
    <tr class=" Danger ">
        <td>Basement Temperature</td>
        <td>Temperature</td>
        <td>-48.1&#176;</td>
        <td> Alarm </td>
    </tr>
    <tr class=" Success ">
        <td>Front Door</td>
        <td>Door</td>
        <td>Closed</td>
        <td></td>
    </tr>
    <tr class=" Success ">
        <td>Back Door</td>
        <td>Door</td>
        <td>Closed</td>
        <td></td>
    </tr>
    <tr class=" Success ">
        <td>Basement</td>
        <td>GlassBreak</td>
        <td>517.943hz</td>
        <td></td>
    </tr>
    <tr class=" Success ">
        <td>Main Floor</td>
        <td>GlassBreak</td>
        <td>331.855hz</td>
        <td></td>
    </tr>
    <tr class=" Danger ">
        <td>Main Floor</td>
        <td>GlassBreak</td>
        <td>749.661hz</td>
        <td> Alarm </td>
    </tr>
    <tr class=" Danger ">
        <td>Bedroom 1</td>
        <td>SmokeDetector</td>
        <td>51.6&#37; Visiblity</td>
        <td> Alarm </td>
    </tr>
    <tr class=" Success ">
        <td>Bedroom 2</td>
        <td>SmokeDetector</td>
        <td>56.0&#37; Visiblity</td>
        <td></td>
    </tr>
    <tr class=" Success ">
        <td>Hallway</td>
        <td>SmokeDetector</td>
        <td>83.6&#37; Visiblity</td>
        <td></td>
    </tr>

</table>
<div class="text-right">
    <a href="/app/index.php?action=update" id="refreshSensors" class="btn btn-primary">Refresh Sensors</a>
</div>

</BODY>
</HTML>

<?php }
}

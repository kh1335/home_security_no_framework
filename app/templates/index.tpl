{config_load file="test.conf" section="setup"}
{include file="header.tpl" Name="Sensors"}

<h1 class="text-center">Sensor State</h1>

<table name="sensors_table" class="table table-bordered">
    <tr class="active text-center">
        <th>Name</th>
        <th>Type</th>
        <th>State</th>
        <th>Alarm</th>
    </tr>
{foreach item=sensor from=$sensors}
    <tr class="{if $sensor->alarm()} Danger {else} Success {/if}">
        <td>{$sensor->name}</td>
        <td>{$sensor->type}</td>
        <td>{$sensor->state}{if isset($sensor->units)}{$sensor->units}{/if}</td>
        <td>{if $sensor->alarm()} Alarm {/if}</td>
    </tr>
{/foreach}
</table>
<div class="text-right">
    <a href="{$SCRIPT_NAME}?action=update" id="refreshSensors" class="btn btn-primary">Refresh Sensors</a>
</div>

{include file="footer.tpl"}

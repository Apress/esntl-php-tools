{foreach from=$loop item=flavor key=flavor_key name=flavorloop}
{if $smarty.foreach.flavorloop.first}
There are {$smarty.foreach.flavorloop.total} flavors:
<ul> {/if}
<li> Flavor number {$smarty.foreach.flavorloop.iteration} is {$flavor}
{if $smarty.foreach.flavorloop.last} </ul> {/if}
{/foreach}

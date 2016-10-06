{foreach from=$loop item=flavor name=flavorloop}
{if $smarty.foreach.flavorloop.first} <ul> {/if}
<li> Flavor number {$smarty.foreach.flavorloop.iteration} is {$flavor}
{if $smarty.foreach.flavorloop.last} </ul> {/if}
{/foreach}

{* Test the value of $_REQUEST['choice'] *}
{if $smarty.request.choice > 5}
You've submitted a choice more than 5.
{/if}

{* is today a monday? *}
{if $smarty.now|date_format:"%u" == 1}
It's Monday: don't forget to take out the trash!
{else}
It's not Monday: don't bother taking out the trash.
{/if}

{* how many elements are there in the $flavor array? *}
{assign var="flavor_count" value=$flavor|@count}
{if $flavor_count == 0}
There are no flavors.
{elseif $flavor_count == 1}
There is only one flavor: {$flavor[0]}.
{else}
There are multiple flavors.
{/if}

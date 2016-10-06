{* Test the value of $_REQUEST['choice'] *}
{if $smarty.request.choice gt 5}
You've submitted a choice more than 5.
{/if}

{* is today a monday? *}
{if $smarty.now|date_format:"%u" eq 1}
It's Monday: don't forget to take out the trash!
{else}
It's not Monday: don't bother taking out the trash.
{/if}

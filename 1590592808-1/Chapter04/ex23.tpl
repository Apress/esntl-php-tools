{* "is even" tests for an even number *}
{if $smarty.request.choice is even}
You've submitted a number divisible by two.
{/if}

{* is odd" tests for an odd number *}
{if $smarty.request.choice is odd}
You've submitted a number that's not divisible by two.
{/if}

{* is div by tests for divisibility *}
{$smarty.request.numerator} divided by {$smarty.request.denominator}
{if $smarty.request.numerator is div by $smarty.request.denominator}
is
{else}
is not
{/if}
an integer.

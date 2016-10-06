{$quote|capitalize}
{$flavor|cat:" Sauce"}
{* The first two are the same *}
{$link|escape}
{$link|escape:"html"}
{$quote2|escape:"quotes"}
{$link|escape:"htmlall"}
{$quote|escape:"url"}
{$quote2|escape:"javascript"}
{$flavor|escape:"hex"}
{$address|escape:"hexentity"}
{$description|indent}
{$description|indent:2}
{$description|indent:2:"-"}
{$flavor|lower}
{$description|nl2br}
{$flavor|regex_replace:"/[aeiou]/":"*"}
{$flavor|replace:"e":"3"}
{$flavor|spacify}
{$flavor|spacify:"-"}
{$price:"%.2f"}
{$spaced_flavor|strip}
{$spaced_flavor|strip:"&nbsp;"}
{$link|strip_tags}
{$description|truncate}
{$description|truncate:40}
{$description|truncate:40:" ! "}
{$description|truncate:40:" ! ":true}
{$flavor|upper}
{$description|wordwrap}
{$quote|wordwrap:20}
{$quote|wordwrap:20:"\n\n"}

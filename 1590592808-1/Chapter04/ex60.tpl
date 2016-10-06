{if $file}
<pre>{fetch file="$file"}</pre>
{else}
<h1>Error</h2>
<i>{$smarty.server.PATH_INFO}</i> could not be found or is not readable.
{/if}

<table>
{section name=icecream loop=$flavors}
{* Check if the calories value for the next element is the same as
   the calories value for the current element *}
{if $flavors[icecream.index_next].calories eq $flavors[icecream].calories}
{assign var="do_advance" value=false}
{else}
{assign var="do_advance" value=true}
{/if}
<tr bgcolor="{cycle name=rowcycle values=$row_colors advance=$do_advance}">
 <td>{$flavors[icecream].name}</td>
 <td>{$flavors[icecream].calories}</td>
 <td>${$flavors[icecream].price|string_format:"%.02f"}</td>
</tr>
{/section}
</table>

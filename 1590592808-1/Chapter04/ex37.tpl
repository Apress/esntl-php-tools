{section name=icecream loop=$flavors step=2}
{if $smarty.section.icecream.first}<table>{/if}
<tr>
 <td>{$flavors[icecream].name}</td>
 <td>{$flavors[icecream].calories}</td>
 <td>${$flavors[icecream].price|string_format:"%.02f"}</td>
{assign var="next_flavor" value=`$smarty.section.icecream.index+1`}
{if $flavors[$next_flavor]}
 <td>{$flavors[$next_flavor].name}</td>
 <td>{$flavors[$next_flavor].calories}</td>
 <td>${$flavors[$next_flavor].price|string_format:"%.02f"}</td>
{else}
 <td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
{/if}
</tr>
{if $smarty.section.icecream.last}</table>{/if}
{/section}

{section name=icecream loop=$flavors}
{if $smarty.section.icecream.first}<table>
<tr><th colspan="4" align="center">
Displaying {$smarty.section.icecream.total} flavors</th></tr>
{/if}
<tr>
 <td>Flavor {$smarty.section.icecream.iteration}</td>
 <td>{$flavors[icecream].name}</td>
 <td>{$flavors[icecream].calories}</td>
 <td>${$flavors[icecream].price|string_format:"%.02f"}</td>
</tr>
{if $smarty.section.icecream.last}</table>{/if}
{sectionelse}
There are no flavors to display.
{/section}

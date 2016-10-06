{section name=icecream loop=$flavors max=3}
{if $smarty.section.icecream.first}<table>{/if}
<tr>
 <td>{$flavors[icecream].name}</td>
 <td>{$flavors[icecream].calories}</td>
 <td>${$flavors[icecream].price|string_format:"%.02f"}</td>
</tr>
{if $smarty.section.icecream.last}</table>{/if}
{/section}

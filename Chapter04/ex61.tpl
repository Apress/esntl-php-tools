<table>
{section name=icecream loop=$flavors}
<tr>
 <td>{$flavors[icecream].name}</td>
 <td>
 {if $flavors[icecream].calories < 10}
  Not much
 {else}
  {$flavors[icecream].calories}
 {/if}     
 </td>
 <td>${$flavors[icecream].price|string_format:"%.02f"}</td>
</tr>
{/section}
</table>

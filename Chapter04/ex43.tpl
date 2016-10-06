<table>
{section name=icecream loop=$flavors}
{if $flavors[icecream].price < 4}
{assign var="do_print" value=true}
{else}
{assign var="do_print" value=false}
{/if}
<tr bgcolor="{cycle name=rowcycle values=$row_colors
              advance=$do_print print=$do_print}">
 <td>{$flavors[icecream].name}</td>
 <td>{$flavors[icecream].calories}</td>
 <td>${$flavors[icecream].price|string_format:"%.02f"}</td>
</tr>
{/section}
</table>

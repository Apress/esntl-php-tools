<table>
{section name=icecream loop=$flavors}
<tr bgcolor="{cycle values="#cccc33,#eeee33"}">
 <td>{$flavors[icecream].name}</td>
 <td>{$flavors[icecream].calories}</td>
 <td>${$flavors[icecream].price|string_format:"%.02f"}</td>
</tr>
{/section}
</table>

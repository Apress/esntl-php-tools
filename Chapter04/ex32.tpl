<table>
{section name=icecream loop=$flavors}
<tr>
 <td>{$flavors[icecream].name}</td>
 <td>{$flavors[icecream].calories}</td>
 <td>${$flavors[icecream].price|string_format:"%.02f"}</td>
</tr>
{/section}
</table>

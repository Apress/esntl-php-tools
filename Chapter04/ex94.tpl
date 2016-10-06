{section name=icecream loop=$flavors}
{if $smarty.section.icecream.first}
<table>
{* Display a header row with the search term if there is one *}
<tr><th colspan="3">{if $search_term}Flavors Matching "{$search_term}</i>"
{else}All Flavors{/if}</th></tr>
<tr><td>Flavor</td><td>Calories</td><td>Price</td></tr>
{/if}
{* display each flavor, escaping entities in the flavor name *}
<tr>
 <td>{$flavors[icecream].flavor|escape}</td>
 <td>{$flavors[icecream].calories}</td>
 <td>${$flavors[icecream].price|string_format:"%.02f"}</td>
</tr>
{if $smarty.section.icecream.last}</table>{/if}
{sectionelse}
{* If there was no flavor data, say so *}
There are no flavors
{if $search_term}whose name contains "{$search_term}"{/if}.
{/section}

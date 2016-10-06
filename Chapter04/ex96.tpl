<flavors{if $search_term} search_term="{$search_term}"{/if}>
{section name=icecream loop=$flavors}
<flavor name="{$flavors[icecream].flavor|escape:htmlall}">
   <calories>{$flavors[icecream].calories}</calories>
   <price>${$flavors[icecream].price|string_format:"%.02f"}</price>
</flavor>
{/section}
</flavors>

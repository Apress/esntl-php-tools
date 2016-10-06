{* capture the navigation bar, composed of two subtemplates *}
{capture name="navigation"}
{include file="general-navbar.tpl"}
{include file="specific-navbar.tpl"}
{/capture}

{* display navigation *}
{$smarty.capture.navigation}
{* page body goes here *}
{* display navigation again *}
{$smarty.capture.navigation}

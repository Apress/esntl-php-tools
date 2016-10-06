// Clear everything from the cache
$smarty->clear_all_cache();
// Clear article.tpl from the cache
$smarty->clear_cache('article.tpl');
// Clear article.tpl with cache ID constructionupdate from the cache
// This leaves copies of article.tpl with other cache IDs in the cache
$smarty->clear_cache('article.tpl','constructionupdate');
// Clear copies of any template with cache ID constructionupdate from the cache
$smarty->clear_cache(null,'constructionupdate');

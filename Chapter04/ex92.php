$smarty->caching = 1;
$cache_id = md5($_REQUEST['article_name']);
if (! $smarty->is_cached('article.tpl',$cache_id)) {
    $article_info = get_article_from_database($_REQUEST['article_name']);
    $smarty->assign('headline', $article_info->headline);
    $smarty->assign('byline',$article_info->byline);
    $smarty->assign('body',$article_info->body);
}
$smarty->display('article.tpl',$cache_id);

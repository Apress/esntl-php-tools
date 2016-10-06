function clean_re($s) {
    return preg_replace('/^(re:\s*)+/i','Re: ',$s);
}
$form->applyFilter('subject','clean_re');

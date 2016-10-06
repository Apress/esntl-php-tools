$diet_flavors = $sxe->xpathh('flavor[calories < 20]');
foreach ($diet_flavors as $f) {
    print "$f->name (id $f[id]) only has $f->calories calories.\n";
}

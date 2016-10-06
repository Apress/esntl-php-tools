gunzip -c turck-mmcache-2.4.6.tar.gz | tar xf -
cd turck-mmcache-2.4.6
phpize
./configure --enable-mmcache=shared
make
make install

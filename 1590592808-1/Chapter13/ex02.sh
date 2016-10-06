gunzip -c APC-2.0.tgz | tar xf -
cd APC-2.0
phpize
./configure --enable-apc=shared
make
make install

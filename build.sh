#!/bin/sh

swig -php7 tensorflow.i
echo "build wrap"
gcc `php-config --includes` -fpic -c tensorflow_wrap.c
echo "build interface"
gcc  -fpic -c tensorflow_.c -o tensorflow_.o
echo "link"
gcc  -shared tensorflow_wrap.o tensorflow_.o -o tensorflow.so -L. -ltensorflow

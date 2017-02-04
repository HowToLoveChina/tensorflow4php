# tensorflow4php 是为PHP添加扩展的项目
简介：使用SWIG进行代码的转换，生成PHP扩展。
需要的环境：apt install  php-devel swig  gcc 
需要本地安装tensorflow的话，请参考  https://bazel.build/versions/master/docs/install.html 安装bazel
安装步骤：
1、编译tensorflow,只安装tensorflow的python版本还不可以用，需要手动编译成C版本的库，或从本项目中libtensorflow.tar.gz中提取。
1.1 需要自己编译的可以参考https://www.tensorflow.org/get_started/os_setup#installing_from_sources 。
1.2 在configure 完成以后用 bazel build --config opt //tensorflow/tools/lib_package:libtensorflow 命令来生成库。
1.3 把库文件复制到系统可以存取到的位置（从bazel-bin/tensorflow/tools/lib_package/libtensorflow.tar.gz中解出libtensorflow.so)
2、安装swig-3.0.12+，本例中在build.sh中指定了为php7生成，如果您的运行环境是php5请自行修改build.sh
3、编译成扩展  ./build.sh
4、安装扩展。在php.ini中加入  extension=(你的库目录或任何合法的路径)/tensorflow.so
5、测试  php  test_tensorflow.php  如果运行没问题就是成功了


FAQ:
Q: test_tensorflow.php 报错
A: 把libtensorflow.so 放到系统的lib目录，或是指定LD_LIBRARY_PATH确保libtensorflow.so可以被系统找到


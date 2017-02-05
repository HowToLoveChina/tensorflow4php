### TensorFlow's C-API ###

* 数据类型枚举 TF_DataType 

        TF_FLOAT 浮点
        TF_DOUBLE 双精度
        TF_INT32 整型
        TF_UINT8 无符号8位
        TF_INT16 有符号16位
        TF_INT8 有符号8位
        TF_STRING 字符串
        TF_COMPLEX64 单精度复数
        TF_COMPLEX 废弃仅用于前向兼容
        TF_INT64 64位整型，PHP中的整型默认是这个
        TF_BOOL 逻辑
        TF_QINT8 不明
        TF_QUINT8  不明
        TF_QINT32   不明
        TF_BFLOAT16   32位浮点转成16位，只用于映射
        TF_QINT16    不明
        TF_UINT16    不明
        TF_COMPLEX128  双精度复数
        TF_HALF      不明
        TF_RESOURCE  不明，资源
* 出错类型枚举  TF_Code

        TF_OK  成功
        TF_CANCELLED 取消
        TF_UNKNOWN 未知
        TF_INVALID_ARGUMENT 参数无效
        TF_DEADLINE_EXCEEDED 到达下线？
        TF_NOT_FOUND 没找到
        TF_ALREADY_EXISTS 已有
        TF_PERMISSION_DENIED 没权限
        TF_UNAUTHENTICATED  没授权
        TF_RESOURCE_EXHAUSTED 没资源
        TF_FAILED_PRECONDITION  条件不具备
        TF_ABORTED  中止
        TF_OUT_OF_RANGE 超范围
        TF_UNIMPLEMENTED 没实现
        TF_INTERNAL 内部错误
        TF_UNAVAILABLE 不可用
        TF_DATA_LOSS  这个我不认识
        
* 结构 TF_Buffer 

        const void * data   这是数据指针？
        size_t length       数据长度
        void (*data_deallocator)(void* data, size_t length);  用来回收这些内存的函数指针
        
* 结构 TF_Input 

        TF_Operation* oper;   操作指针
        int index;  oper中的索引？

* 结构 TF_Output

        TF_Operation* oper;   操作指针
        int index;  oper中的索引？

        
* 枚举 属性类型  TF_AttrType
 
        TF_ATTR_STRING = 0,    字符串
        TF_ATTR_INT = 1,       数值
        TF_ATTR_FLOAT = 2,     浮点
        TF_ATTR_BOOL = 3,      逻辑
        TF_ATTR_TYPE = 4,      类型 
        TF_ATTR_SHAPE = 5,     外观？
        TF_ATTR_TENSOR = 6,       张量
        TF_ATTR_PLACEHOLDER = 7,  占位符
        TF_ATTR_FUNC = 8,         功能

* 结构 属性描述结构 TF_AttrMetadata

        unsigned char is_list;    逻辑值1是列表，其他表示不是列表
        int64_t list_size;        列表的长度
        TF_AttrType type;         类型描述 
        int64_t total_size;       总的大小， type==STRING && ! list =>字符串长度
                                  type=STRING&& is list => sum(len(string))
                                  type=shape&& ! list  => 表示维数
                                  type=shape&& is list => 所有外观的维数和

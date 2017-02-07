%module tensorflow
%include "typemaps.i"

%{
#include "tensorflow_.h"
%}






%inline %{




// [已测试] 生成新的状态对象
TF_Status* TF_NewStatus();
// [已测试] 移除对象
void TF_DeleteStatus(TF_Status*);
// [已测试] code 原来的类型是TF_Code ，但是在PHP中使用枚举类型困难，所以改成 int 
void TF_SetStatus(TF_Status* s, int code , const char* msg);
// [已测试] 返回值原为TF_Code，所以改成int
int TF_GetCode(const TF_Status* s);
// [已测试] 返回对象中存储的消息 
const char* TF_Message(const TF_Status* s);



// [已测试] 原为const void * 兼容为 char * 
//TF_Buffer* TF_NewBufferFromString(const void* proto, size_t proto_len);
TF_Buffer* TF_NewBufferFromString( char * proto, size_t proto_len);
// [已测试]
TF_Buffer* TF_NewBuffer();
// [已测试]
void TF_DeleteBuffer(TF_Buffer*);
// [已测试]
TF_Buffer TF_GetBuffer(TF_Buffer* buffer);
// [已测试] PHP不能操作C成员，只能增加这个接口来实现
char * TF_GetBufferData( TF_Buffer* buffer){
	return (char*)buffer->data;
}
// [已测试] PHP不能操作C成员，只能增加这个接口来实现
int   TF_GetBufferLength( TF_Buffer* buffer){
    return (int)buffer->length;
}





//这个在PHP中不使用，回调函数不知道如何实现
/*
TF_Tensor* TF_NewTensor(TF_DataType, const int64_t* dims, int num_dims,void* data, size_t len,
                               void (*deallocator)(void* data, size_t len,
                                                   void* arg),
                               void* deallocator_arg);
*/

//extern TF_Tensor* TF_AllocateTensor(TF_DataType, const int64_t* dims,int num_dims, size_t len);
extern TF_Tensor* TF_AllocateTensor(int type , int64 * dims,int num_dims, size_t len);
extern void TF_DeleteTensor(TF_Tensor*);

//类型不支持所以转成INT
//extern TF_DataType TF_TensorType(const TF_Tensor*);
extern int TF_TensorType(const TF_Tensor*);
extern int64 TF_NumDims(const TF_Tensor*);
//extern int64_t TF_Dim(const TF_Tensor* tensor, int dim_index);
in64_t TF_Dim(const TF_Tensor* tensor, int dim_index);
extern size_t TF_TensorByteSize(const TF_Tensor*);
extern void* TF_TensorData(const TF_Tensor*);
extern size_t TF_StringEncode(const char* src, size_t src_len, char* dst,
                              size_t dst_len, TF_Status* status);
extern size_t TF_StringDecode(const char* src, size_t src_len, const char** dst,
                              size_t* dst_len, TF_Status* status);

extern size_t TF_StringEncodedSize(size_t len);
extern TF_SessionOptions* TF_NewSessionOptions();
extern void TF_SetTarget(TF_SessionOptions* options, const char* target);
extern void TF_SetConfig(TF_SessionOptions* options, const void* proto,
                         size_t proto_len, TF_Status* status);
extern void TF_DeleteSessionOptions(TF_SessionOptions*);
extern TF_Graph* TF_NewGraph();
extern void TF_DeleteGraph(TF_Graph*);
extern void TF_GraphSetTensorShape(TF_Graph* graph, TF_Output output,
                                   const int64_t* dims, const int num_dims,
                                   TF_Status* status);
extern int TF_GraphGetTensorNumDims(TF_Graph* graph, TF_Output output,
                                    TF_Status* status);
extern void TF_GraphGetTensorShape(TF_Graph* graph, TF_Output output,
                                   int64_t* dims, int num_dims,
                                   TF_Status* status);
extern TF_OperationDescription* TF_NewOperation(TF_Graph* graph,
                                                const char* op_type,
                                                const char* oper_name);
extern void TF_SetDevice(TF_OperationDescription* desc, const char* device);
extern void TF_AddInput(TF_OperationDescription* desc, TF_Output input);
extern void TF_AddInputList(TF_OperationDescription* desc,
                            const TF_Output* inputs, int num_inputs);
extern void TF_AddControlInput(TF_OperationDescription* desc,
                               TF_Operation* input);
extern void TF_ColocateWith(TF_OperationDescription* desc, TF_Operation* op);
extern void TF_SetAttrString(TF_OperationDescription* desc,
                             const char* attr_name, const void* value,
                             size_t length);
extern void TF_SetAttrStringList(TF_OperationDescription* desc,
                                 const char* attr_name,
                                 const void* const* values,
                                 const size_t* lengths, int num_values);
extern void TF_SetAttrInt(TF_OperationDescription* desc, const char* attr_name,
                          int64_t value);
extern void TF_SetAttrIntList(TF_OperationDescription* desc,
                              const char* attr_name, const int64_t* values,
                              int num_values);
extern void TF_SetAttrFloat(TF_OperationDescription* desc,
                            const char* attr_name, float value);
extern void TF_SetAttrFloatList(TF_OperationDescription* desc,
                                const char* attr_name, const float* values,
                                int num_values);
extern void TF_SetAttrBool(TF_OperationDescription* desc, const char* attr_name,
                           unsigned char value);
extern void TF_SetAttrBoolList(TF_OperationDescription* desc,
                               const char* attr_name,
                               const unsigned char* values, int num_values);
extern void TF_SetAttrType(TF_OperationDescription* desc, const char* attr_name,
                           TF_DataType value);
extern void TF_SetAttrTypeList(TF_OperationDescription* desc,
                               const char* attr_name, const TF_DataType* values,
                               int num_values);
extern void TF_SetAttrShape(TF_OperationDescription* desc,
                            const char* attr_name, const int64_t* dims,
                            int num_dims);
extern void TF_SetAttrShapeList(TF_OperationDescription* desc,
                                const char* attr_name,
                                const int64_t* const* dims, const int* num_dims,
                                int num_shapes);
extern void TF_SetAttrTensorShapeProto(TF_OperationDescription* desc,
                                       const char* attr_name, const void* proto,
                                       size_t proto_len, TF_Status* status);
extern void TF_SetAttrTensorShapeProtoList(TF_OperationDescription* desc,
                                           const char* attr_name,
                                           const void* const* protos,
                                           const size_t* proto_lens,
                                           int num_shapes, TF_Status* status);
extern void TF_SetAttrTensor(TF_OperationDescription* desc,
                             const char* attr_name, TF_Tensor* value,
                             TF_Status* status);
extern void TF_SetAttrTensorList(TF_OperationDescription* desc,
                                 const char* attr_name,
                                 TF_Tensor* const* values, int num_values,
                                 TF_Status* status);
extern void TF_SetAttrValueProto(TF_OperationDescription* desc,
                                 const char* attr_name, const void* proto,
                                 size_t proto_len, TF_Status* status);
extern TF_Operation* TF_FinishOperation(TF_OperationDescription* desc,
                                        TF_Status* status);
extern const char* TF_OperationName(TF_Operation* oper);
extern const char* TF_OperationOpType(TF_Operation* oper);
extern const char* TF_OperationDevice(TF_Operation* oper);

extern int TF_OperationNumOutputs(TF_Operation* oper);
extern TF_DataType TF_OperationOutputType(TF_Output oper_out);
extern int TF_OperationOutputListLength(TF_Operation* oper,
                                        const char* arg_name,
                                        TF_Status* status);

extern int TF_OperationNumInputs(TF_Operation* oper);
extern TF_DataType TF_OperationInputType(TF_Input oper_in);
extern int TF_OperationInputListLength(TF_Operation* oper, const char* arg_name,
                                       TF_Status* status);
extern TF_Output TF_OperationInput(TF_Input oper_in);
extern int TF_OperationOutputNumConsumers(TF_Output oper_out);
extern int TF_OperationOutputConsumers(TF_Output oper_out, TF_Input* consumers,
                                       int max_consumers);
extern int TF_OperationNumControlInputs(TF_Operation* oper);
extern int TF_OperationGetControlInputs(TF_Operation* oper,
                                        TF_Operation** control_inputs,
                                        int max_control_inputs);
extern int TF_OperationNumControlOutputs(TF_Operation* oper);
extern int TF_OperationGetControlOutputs(TF_Operation* oper,
                                         TF_Operation** control_outputs,
                                         int max_control_outputs);
extern TF_AttrMetadata TF_OperationGetAttrMetadata(TF_Operation* oper,
                                                   const char* attr_name,
                                                   TF_Status* status);
extern void TF_OperationGetAttrString(TF_Operation* oper, const char* attr_name,
                                      void* value, size_t max_length,
                                      TF_Status* status);
extern void TF_OperationGetAttrStringList(TF_Operation* oper,
                                          const char* attr_name, void** values,
                                          size_t* lengths, int max_values,
                                          void* storage, size_t storage_size,
                                          TF_Status* status);
extern void TF_OperationGetAttrInt(TF_Operation* oper, const char* attr_name,
                                   int64_t* value, TF_Status* status);
extern void TF_OperationGetAttrIntList(TF_Operation* oper,
                                       const char* attr_name, int64_t* values,
                                       int max_values, TF_Status* status);
extern void TF_OperationGetAttrFloat(TF_Operation* oper, const char* attr_name,
                                     float* value, TF_Status* status);
extern void TF_OperationGetAttrFloatList(TF_Operation* oper,
                                         const char* attr_name, float* values,
                                         int max_values, TF_Status* status);
extern void TF_OperationGetAttrBool(TF_Operation* oper, const char* attr_name,
                                    unsigned char* value, TF_Status* status);
extern void TF_OperationGetAttrBoolList(TF_Operation* oper,
                                        const char* attr_name,
                                        unsigned char* values, int max_values,
                                        TF_Status* status);
extern void TF_OperationGetAttrType(TF_Operation* oper, const char* attr_name,
                                    TF_DataType* value, TF_Status* status);
extern void TF_OperationGetAttrTypeList(TF_Operation* oper,
                                        const char* attr_name,
                                        TF_DataType* values, int max_values,
                                        TF_Status* status);
extern void TF_OperationGetAttrShape(TF_Operation* oper, const char* attr_name,
                                     int64_t* value, int num_dims,
                                     TF_Status* status);
extern void TF_OperationGetAttrShapeList(TF_Operation* oper,
                                         const char* attr_name, int64_t** dims,
                                         int* num_dims, int num_shapes,
                                         int64_t* storage, int storage_size,
                                         TF_Status* status);
extern void TF_OperationGetAttrTensorShapeProto(TF_Operation* oper,
                                                const char* attr_name,
                                                TF_Buffer* value,
                                                TF_Status* status);
extern void TF_OperationGetAttrTensorShapeProtoList(TF_Operation* oper,
                                                    const char* attr_name,
                                                    TF_Buffer** values,
                                                    int max_values,
                                                    TF_Status* status);
extern void TF_OperationGetAttrTensor(TF_Operation* oper, const char* attr_name,
                                      TF_Tensor** value, TF_Status* status);
extern void TF_OperationGetAttrTensorList(TF_Operation* oper,
                                          const char* attr_name,
                                          TF_Tensor** values, int max_values,
                                          TF_Status* status);
extern void TF_OperationGetAttrValueProto(TF_Operation* oper,
                                          const char* attr_name,
                                          TF_Buffer* output_attr_value,
                                          TF_Status* status);
extern TF_Operation* TF_GraphOperationByName(TF_Graph* graph,
                                             const char* oper_name);
extern TF_Operation* TF_GraphNextOperation(TF_Graph* graph, size_t* pos);
extern void TF_GraphToGraphDef(TF_Graph* graph, TF_Buffer* output_graph_def,
                               TF_Status* status);
extern TF_ImportGraphDefOptions* TF_NewImportGraphDefOptions();
extern void TF_DeleteImportGraphDefOptions(TF_ImportGraphDefOptions* opts);
extern void TF_ImportGraphDefOptionsSetPrefix(TF_ImportGraphDefOptions* opts,
                                              const char* prefix);
extern void TF_ImportGraphDefOptionsAddInputMapping(
    TF_ImportGraphDefOptions* opts, const char* src_name, int src_index,
    TF_Output dst);
extern void TF_ImportGraphDefOptionsAddControlDependency(
    TF_ImportGraphDefOptions* opts, TF_Operation* oper);
extern void TF_ImportGraphDefOptionsAddReturnOutput(
    TF_ImportGraphDefOptions* opts, const char* oper_name, int index);
extern int TF_ImportGraphDefOptionsNumReturnOutputs(
    const TF_ImportGraphDefOptions* opts);
extern void TF_GraphImportGraphDefWithReturnOutputs(
    TF_Graph* graph, const TF_Buffer* graph_def,
    const TF_ImportGraphDefOptions* options, TF_Output* return_outputs,
    int num_return_outputs, TF_Status* status);
extern void TF_GraphImportGraphDef(TF_Graph* graph, const TF_Buffer* graph_def,
                                   const TF_ImportGraphDefOptions* options,
                                   TF_Status* status);
extern void TF_OperationToNodeDef(TF_Operation* oper,
                                  TF_Buffer* output_node_def,
                                  TF_Status* status);
extern TF_Session* TF_NewSession(TF_Graph* graph, const TF_SessionOptions* opts,
                                 TF_Status* status);
TF_Session* TF_LoadSessionFromSavedModel(
    const TF_SessionOptions* session_options, const TF_Buffer* run_options,
    const char* export_dir, const char* const* tags, int tags_len,
    TF_Graph* graph, TF_Buffer* meta_graph_def, TF_Status* status);
extern void TF_CloseSession(TF_Session*, TF_Status* status);

extern void TF_DeleteSession(TF_Session*, TF_Status* status);
extern void TF_SessionRun(TF_Session* session,
                          // RunOptions
                          const TF_Buffer* run_options,
                          // Input tensors
                          const TF_Output* inputs,
                          TF_Tensor* const* input_values, int ninputs,
                          // Output tensors
                          const TF_Output* outputs, TF_Tensor** output_values,
                          int noutputs,
                          // Target operations
                          const TF_Operation* const* target_opers, int ntargets,
                          // RunMetadata
                          TF_Buffer* run_metadata,
                          // Output status
                          TF_Status*);
extern void TF_SessionPRunSetup(TF_Session*,
                                // Input names
                                const TF_Output* inputs, int ninputs,
                                // Output names
                                const TF_Output* outputs, int noutputs,
                                // Target operations
                                const TF_Operation* const* target_opers,
                                int ntargets,
                                // Output handle
                                const char** handle,
                                // Output status
                                TF_Status*);
extern void TF_SessionPRun(TF_Session*, const char* handle,
                           // Input tensors
                           const TF_Output* inputs,
                           TF_Tensor* const* input_values, int ninputs,
                           // Output tensors
                           const TF_Output* outputs, TF_Tensor** output_values,
                           int noutputs,
                           // Target operations
                           const TF_Operation* const* target_opers,
                           int ntargets,
                           // Output status
                           TF_Status*);
extern TF_DeprecatedSession* TF_NewDeprecatedSession(const TF_SessionOptions*,
                                                     TF_Status* status);
extern void TF_CloseDeprecatedSession(TF_DeprecatedSession*, TF_Status* status);
extern void TF_DeleteDeprecatedSession(TF_DeprecatedSession*,
                                       TF_Status* status);
extern void TF_Reset(const TF_SessionOptions* opt, const char** containers,
                     int ncontainers, TF_Status* status);
extern void TF_ExtendGraph(TF_DeprecatedSession*, const void* proto,
                           size_t proto_len, TF_Status*);
extern void TF_Run(TF_DeprecatedSession*, const TF_Buffer* run_options,
                   const char** input_names, TF_Tensor** inputs, int ninputs,
                   const char** output_names, TF_Tensor** outputs, int noutputs,
                   const char** target_oper_names, int ntargets,
                   TF_Buffer* run_metadata, TF_Status*);
extern void TF_PRunSetup(TF_DeprecatedSession*, const char** input_names,
                         int ninputs, const char** output_names, int noutputs,
                         const char** target_oper_names, int ntargets,
                         const char** handle, TF_Status*);
extern void TF_PRun(TF_DeprecatedSession*, const char* handle,
                    const char** input_names, TF_Tensor** inputs, int ninputs,
                    const char** output_names, TF_Tensor** outputs,
                    int noutputs, const char** target_oper_names, int ntargets,
                    TF_Status*);
extern TF_Library* TF_LoadLibrary(const char* library_filename,
                                  TF_Status* status);
extern TF_Buffer TF_GetOpList(TF_Library* lib_handle);
extern void TF_DeleteLibraryHandle(TF_Library* lib_handle);
extern TF_Buffer* TF_GetAllOpList();

%}


/*TF_DataType*/

#define  PHP_TF_FLOAT  		1
#define  PHP_TF_DOUBLE 		2
#define  PHP_TF_INT32  		3 /* Int32 tensors are always in 'host' memory*/
#define  PHP_TF_UINT8		4
#define  PHP_TF_INT16  		5
#define  PHP_TF_INT8   		6
#define  PHP_TF_STRING 		7
#define  PHP_TF_COMPLEX64  	8  /* Single-precision complex*/
#define  PHP_TF_COMPLEX     8  /* Old identifier kept for API backwards compatibility*/
#define  PHP_TF_INT64      9
#define  PHP_TF_BOOL      10
#define  PHP_TF_QINT8     11     /* Quantized int8*/
#define  PHP_TF_QUINT8    12    /* Quantized uint8*/
#define  PHP_TF_QINT32    13    /* Quantized int32*/
#define  PHP_TF_BFLOAT16  14  /* Float32 truncated to 16 bits.  Only for cast ops.*/
#define  PHP_TF_QINT16    15    /* Quantized int16*/
#define  PHP_TF_QUINT16   16   /* Quantized uint16*/
#define  PHP_TF_UINT16    17
#define  PHP_TF_COMPLEX128 18  /* Double-precision complex*/
#define  PHP_TF_HALF   19
#define  PHP_TF_RESOURCE   20


/*TF_Code*/

#define  PHP_TF_OK  0
#define  PHP_TF_CANCELLED  1
#define  PHP_TF_UNKNOWN  2
#define  PHP_TF_INVALID_ARGUMENT 3
#define  PHP_TF_DEADLINE_EXCEEDED 4
#define  PHP_TF_NOT_FOUND  5
#define  PHP_TF_ALREADY_EXISTS  6
#define  PHP_TF_PERMISSION_DENIED 7
#define  PHP_TF_UNAUTHENTICATED  16
#define  PHP_TF_RESOURCE_EXHAUSTED  8
#define  PHP_TF_FAILED_PRECONDITION  9
#define  PHP_TF_ABORTED  10
#define  PHP_TF_OUT_OF_RANGE  11
#define  PHP_TF_UNIMPLEMENTED  12
#define  PHP_TF_INTERNAL  13
#define  PHP_TF_UNAVAILABLE  14
#define  PHP_TF_DATA_LOSS  15



<?php

/* ----------------------------------------------------------------------------
 * This file was automatically generated by SWIG (http://www.swig.org).
 * Version 3.0.12
 *
 * This file is not intended to be easily readable and contains a number of
 * coding conventions designed to improve portability and efficiency. Do not make
 * changes to this file unless you know what you are doing--modify the SWIG
 * interface file instead.
 * ----------------------------------------------------------------------------- */

// Try to load our extension if it's not already loaded.
if (!extension_loaded('tensorflow')) {
  if (strtolower(substr(PHP_OS, 0, 3)) === 'win') {
    if (!dl('php_tensorflow.dll')) return;
  } else {
    // PHP_SHLIB_SUFFIX gives 'dylib' on MacOS X but modules are 'so'.
    if (PHP_SHLIB_SUFFIX === 'dylib') {
      if (!dl('tensorflow.so')) return;
    } else {
      if (!dl('tensorflow.'.PHP_SHLIB_SUFFIX)) return;
    }
  }
}



abstract class tensorflow {
	static function TF_NewStatus() {
		return TF_NewStatus();
	}

	static function TF_DeleteStatus($arg1) {
		TF_DeleteStatus($arg1);
	}

	static function TF_SetStatus($s,$code,$msg) {
		TF_SetStatus($s,$code,$msg);
	}

	static function TF_GetCode($s) {
		return TF_GetCode($s);
	}

	static function TF_Message($s) {
		return TF_Message($s);
	}

	static function TF_NewBufferFromString($proto,$proto_len) {
		return TF_NewBufferFromString($proto,$proto_len);
	}

	static function TF_NewBuffer() {
		return TF_NewBuffer();
	}

	static function TF_DeleteBuffer($arg1) {
		TF_DeleteBuffer($arg1);
	}

	static function TF_GetBuffer($buffer) {
		return TF_GetBuffer($buffer);
	}

	static function TF_NewTensor($arg1,$dims,$num_dims,$data,$len,$deallocator,$deallocator_arg) {
		return TF_NewTensor($arg1,$dims,$num_dims,$data,$len,$deallocator,$deallocator_arg);
	}

	static function TF_AllocateTensor($arg1,$dims,$num_dims,$len) {
		return TF_AllocateTensor($arg1,$dims,$num_dims,$len);
	}

	static function TF_DeleteTensor($arg1) {
		TF_DeleteTensor($arg1);
	}

	static function TF_TensorType($arg1) {
		return TF_TensorType($arg1);
	}

	static function TF_NumDims($arg1) {
		return TF_NumDims($arg1);
	}

	static function TF_Dim($tensor,$dim_index) {
		return TF_Dim($tensor,$dim_index);
	}

	static function TF_TensorByteSize($arg1) {
		return TF_TensorByteSize($arg1);
	}

	static function TF_TensorData($arg1) {
		return TF_TensorData($arg1);
	}

	static function TF_StringEncode($src,$src_len,$dst,$dst_len,$status) {
		return TF_StringEncode($src,$src_len,$dst,$dst_len,$status);
	}

	static function TF_StringDecode($src,$src_len,$dst,$dst_len,$status) {
		return TF_StringDecode($src,$src_len,$dst,$dst_len,$status);
	}

	static function TF_StringEncodedSize($len) {
		return TF_StringEncodedSize($len);
	}

	static function TF_NewSessionOptions() {
		return TF_NewSessionOptions();
	}

	static function TF_SetTarget($options,$target) {
		TF_SetTarget($options,$target);
	}

	static function TF_SetConfig($options,$proto,$proto_len,$status) {
		TF_SetConfig($options,$proto,$proto_len,$status);
	}

	static function TF_DeleteSessionOptions($arg1) {
		TF_DeleteSessionOptions($arg1);
	}

	static function TF_NewGraph() {
		return TF_NewGraph();
	}

	static function TF_DeleteGraph($arg1) {
		TF_DeleteGraph($arg1);
	}

	static function TF_GraphSetTensorShape($graph,$output,$dims,$num_dims,$status) {
		TF_GraphSetTensorShape($graph,$output,$dims,$num_dims,$status);
	}

	static function TF_GraphGetTensorNumDims($graph,$output,$status) {
		return TF_GraphGetTensorNumDims($graph,$output,$status);
	}

	static function TF_GraphGetTensorShape($graph,$output,$dims,$num_dims,$status) {
		TF_GraphGetTensorShape($graph,$output,$dims,$num_dims,$status);
	}

	static function TF_NewOperation($graph,$op_type,$oper_name) {
		return TF_NewOperation($graph,$op_type,$oper_name);
	}

	static function TF_SetDevice($desc,$device) {
		TF_SetDevice($desc,$device);
	}

	static function TF_AddInput($desc,$input) {
		TF_AddInput($desc,$input);
	}

	static function TF_AddInputList($desc,$inputs,$num_inputs) {
		TF_AddInputList($desc,$inputs,$num_inputs);
	}

	static function TF_AddControlInput($desc,$input) {
		TF_AddControlInput($desc,$input);
	}

	static function TF_ColocateWith($desc,$op) {
		TF_ColocateWith($desc,$op);
	}

	static function TF_SetAttrString($desc,$attr_name,$value,$length) {
		TF_SetAttrString($desc,$attr_name,$value,$length);
	}

	static function TF_SetAttrStringList($desc,$attr_name,$values,$lengths,$num_values) {
		TF_SetAttrStringList($desc,$attr_name,$values,$lengths,$num_values);
	}

	static function TF_SetAttrInt($desc,$attr_name,$value) {
		TF_SetAttrInt($desc,$attr_name,$value);
	}

	static function TF_SetAttrIntList($desc,$attr_name,$values,$num_values) {
		TF_SetAttrIntList($desc,$attr_name,$values,$num_values);
	}

	static function TF_SetAttrFloat($desc,$attr_name,$value) {
		TF_SetAttrFloat($desc,$attr_name,$value);
	}

	static function TF_SetAttrFloatList($desc,$attr_name,$values,$num_values) {
		TF_SetAttrFloatList($desc,$attr_name,$values,$num_values);
	}

	static function TF_SetAttrBool($desc,$attr_name,$value) {
		TF_SetAttrBool($desc,$attr_name,$value);
	}

	static function TF_SetAttrBoolList($desc,$attr_name,$values,$num_values) {
		TF_SetAttrBoolList($desc,$attr_name,$values,$num_values);
	}

	static function TF_SetAttrType($desc,$attr_name,$value) {
		TF_SetAttrType($desc,$attr_name,$value);
	}

	static function TF_SetAttrTypeList($desc,$attr_name,$values,$num_values) {
		TF_SetAttrTypeList($desc,$attr_name,$values,$num_values);
	}

	static function TF_SetAttrShape($desc,$attr_name,$dims,$num_dims) {
		TF_SetAttrShape($desc,$attr_name,$dims,$num_dims);
	}

	static function TF_SetAttrShapeList($desc,$attr_name,$dims,$num_dims,$num_shapes) {
		TF_SetAttrShapeList($desc,$attr_name,$dims,$num_dims,$num_shapes);
	}

	static function TF_SetAttrTensorShapeProto($desc,$attr_name,$proto,$proto_len,$status) {
		TF_SetAttrTensorShapeProto($desc,$attr_name,$proto,$proto_len,$status);
	}

	static function TF_SetAttrTensorShapeProtoList($desc,$attr_name,$protos,$proto_lens,$num_shapes,$status) {
		TF_SetAttrTensorShapeProtoList($desc,$attr_name,$protos,$proto_lens,$num_shapes,$status);
	}

	static function TF_SetAttrTensor($desc,$attr_name,$value,$status) {
		TF_SetAttrTensor($desc,$attr_name,$value,$status);
	}

	static function TF_SetAttrTensorList($desc,$attr_name,$values,$num_values,$status) {
		TF_SetAttrTensorList($desc,$attr_name,$values,$num_values,$status);
	}

	static function TF_SetAttrValueProto($desc,$attr_name,$proto,$proto_len,$status) {
		TF_SetAttrValueProto($desc,$attr_name,$proto,$proto_len,$status);
	}

	static function TF_FinishOperation($desc,$status) {
		return TF_FinishOperation($desc,$status);
	}

	static function TF_OperationName($oper) {
		return TF_OperationName($oper);
	}

	static function TF_OperationOpType($oper) {
		return TF_OperationOpType($oper);
	}

	static function TF_OperationDevice($oper) {
		return TF_OperationDevice($oper);
	}

	static function TF_OperationNumOutputs($oper) {
		return TF_OperationNumOutputs($oper);
	}

	static function TF_OperationOutputType($oper_out) {
		return TF_OperationOutputType($oper_out);
	}

	static function TF_OperationOutputListLength($oper,$arg_name,$status) {
		return TF_OperationOutputListLength($oper,$arg_name,$status);
	}

	static function TF_OperationNumInputs($oper) {
		return TF_OperationNumInputs($oper);
	}

	static function TF_OperationInputType($oper_in) {
		return TF_OperationInputType($oper_in);
	}

	static function TF_OperationInputListLength($oper,$arg_name,$status) {
		return TF_OperationInputListLength($oper,$arg_name,$status);
	}

	static function TF_OperationInput($oper_in) {
		return TF_OperationInput($oper_in);
	}

	static function TF_OperationOutputNumConsumers($oper_out) {
		return TF_OperationOutputNumConsumers($oper_out);
	}

	static function TF_OperationOutputConsumers($oper_out,$consumers,$max_consumers) {
		return TF_OperationOutputConsumers($oper_out,$consumers,$max_consumers);
	}

	static function TF_OperationNumControlInputs($oper) {
		return TF_OperationNumControlInputs($oper);
	}

	static function TF_OperationGetControlInputs($oper,$control_inputs,$max_control_inputs) {
		return TF_OperationGetControlInputs($oper,$control_inputs,$max_control_inputs);
	}

	static function TF_OperationNumControlOutputs($oper) {
		return TF_OperationNumControlOutputs($oper);
	}

	static function TF_OperationGetControlOutputs($oper,$control_outputs,$max_control_outputs) {
		return TF_OperationGetControlOutputs($oper,$control_outputs,$max_control_outputs);
	}

	static function TF_OperationGetAttrMetadata($oper,$attr_name,$status) {
		return TF_OperationGetAttrMetadata($oper,$attr_name,$status);
	}

	static function TF_OperationGetAttrString($oper,$attr_name,$value,$max_length,$status) {
		TF_OperationGetAttrString($oper,$attr_name,$value,$max_length,$status);
	}

	static function TF_OperationGetAttrStringList($oper,$attr_name,$values,$lengths,$max_values,$storage,$storage_size,$status) {
		TF_OperationGetAttrStringList($oper,$attr_name,$values,$lengths,$max_values,$storage,$storage_size,$status);
	}

	static function TF_OperationGetAttrInt($oper,$attr_name,$value,$status) {
		TF_OperationGetAttrInt($oper,$attr_name,$value,$status);
	}

	static function TF_OperationGetAttrIntList($oper,$attr_name,$values,$max_values,$status) {
		TF_OperationGetAttrIntList($oper,$attr_name,$values,$max_values,$status);
	}

	static function TF_OperationGetAttrFloat($oper,$attr_name,$value,$status) {
		TF_OperationGetAttrFloat($oper,$attr_name,$value,$status);
	}

	static function TF_OperationGetAttrFloatList($oper,$attr_name,$values,$max_values,$status) {
		TF_OperationGetAttrFloatList($oper,$attr_name,$values,$max_values,$status);
	}

	static function TF_OperationGetAttrBool($oper,$attr_name,$value,$status) {
		TF_OperationGetAttrBool($oper,$attr_name,$value,$status);
	}

	static function TF_OperationGetAttrBoolList($oper,$attr_name,$values,$max_values,$status) {
		TF_OperationGetAttrBoolList($oper,$attr_name,$values,$max_values,$status);
	}

	static function TF_OperationGetAttrType($oper,$attr_name,$value,$status) {
		TF_OperationGetAttrType($oper,$attr_name,$value,$status);
	}

	static function TF_OperationGetAttrTypeList($oper,$attr_name,$values,$max_values,$status) {
		TF_OperationGetAttrTypeList($oper,$attr_name,$values,$max_values,$status);
	}

	static function TF_OperationGetAttrShape($oper,$attr_name,$value,$num_dims,$status) {
		TF_OperationGetAttrShape($oper,$attr_name,$value,$num_dims,$status);
	}

	static function TF_OperationGetAttrShapeList($oper,$attr_name,$dims,$num_dims,$num_shapes,$storage,$storage_size,$status) {
		TF_OperationGetAttrShapeList($oper,$attr_name,$dims,$num_dims,$num_shapes,$storage,$storage_size,$status);
	}

	static function TF_OperationGetAttrTensorShapeProto($oper,$attr_name,$value,$status) {
		TF_OperationGetAttrTensorShapeProto($oper,$attr_name,$value,$status);
	}

	static function TF_OperationGetAttrTensorShapeProtoList($oper,$attr_name,$values,$max_values,$status) {
		TF_OperationGetAttrTensorShapeProtoList($oper,$attr_name,$values,$max_values,$status);
	}

	static function TF_OperationGetAttrTensor($oper,$attr_name,$value,$status) {
		TF_OperationGetAttrTensor($oper,$attr_name,$value,$status);
	}

	static function TF_OperationGetAttrTensorList($oper,$attr_name,$values,$max_values,$status) {
		TF_OperationGetAttrTensorList($oper,$attr_name,$values,$max_values,$status);
	}

	static function TF_OperationGetAttrValueProto($oper,$attr_name,$output_attr_value,$status) {
		TF_OperationGetAttrValueProto($oper,$attr_name,$output_attr_value,$status);
	}

	static function TF_GraphOperationByName($graph,$oper_name) {
		return TF_GraphOperationByName($graph,$oper_name);
	}

	static function TF_GraphNextOperation($graph,$pos) {
		return TF_GraphNextOperation($graph,$pos);
	}

	static function TF_GraphToGraphDef($graph,$output_graph_def,$status) {
		TF_GraphToGraphDef($graph,$output_graph_def,$status);
	}

	static function TF_NewImportGraphDefOptions() {
		return TF_NewImportGraphDefOptions();
	}

	static function TF_DeleteImportGraphDefOptions($opts) {
		TF_DeleteImportGraphDefOptions($opts);
	}

	static function TF_ImportGraphDefOptionsSetPrefix($opts,$prefix) {
		TF_ImportGraphDefOptionsSetPrefix($opts,$prefix);
	}

	static function TF_ImportGraphDefOptionsAddInputMapping($opts,$src_name,$src_index,$dst) {
		TF_ImportGraphDefOptionsAddInputMapping($opts,$src_name,$src_index,$dst);
	}

	static function TF_ImportGraphDefOptionsAddControlDependency($opts,$oper) {
		TF_ImportGraphDefOptionsAddControlDependency($opts,$oper);
	}

	static function TF_ImportGraphDefOptionsAddReturnOutput($opts,$oper_name,$index) {
		TF_ImportGraphDefOptionsAddReturnOutput($opts,$oper_name,$index);
	}

	static function TF_ImportGraphDefOptionsNumReturnOutputs($opts) {
		return TF_ImportGraphDefOptionsNumReturnOutputs($opts);
	}

	static function TF_GraphImportGraphDefWithReturnOutputs($graph,$graph_def,$options,$return_outputs,$num_return_outputs,$status) {
		TF_GraphImportGraphDefWithReturnOutputs($graph,$graph_def,$options,$return_outputs,$num_return_outputs,$status);
	}

	static function TF_GraphImportGraphDef($graph,$graph_def,$options,$status) {
		TF_GraphImportGraphDef($graph,$graph_def,$options,$status);
	}

	static function TF_OperationToNodeDef($oper,$output_node_def,$status) {
		TF_OperationToNodeDef($oper,$output_node_def,$status);
	}

	static function TF_NewSession($graph,$opts,$status) {
		return TF_NewSession($graph,$opts,$status);
	}

	static function TF_LoadSessionFromSavedModel($session_options,$run_options,$export_dir,$tags,$tags_len,$graph,$meta_graph_def,$status) {
		return TF_LoadSessionFromSavedModel($session_options,$run_options,$export_dir,$tags,$tags_len,$graph,$meta_graph_def,$status);
	}

	static function TF_CloseSession($arg1,$status) {
		TF_CloseSession($arg1,$status);
	}

	static function TF_DeleteSession($arg1,$status) {
		TF_DeleteSession($arg1,$status);
	}

	static function TF_SessionRun($session,$run_options,$inputs,$input_values,$ninputs,$outputs,$output_values,$noutputs,$target_opers,$ntargets,$run_metadata,$arg12) {
		TF_SessionRun($session,$run_options,$inputs,$input_values,$ninputs,$outputs,$output_values,$noutputs,$target_opers,$ntargets,$run_metadata,$arg12);
	}

	static function TF_SessionPRunSetup($arg1,$inputs,$ninputs,$outputs,$noutputs,$target_opers,$ntargets,$handle,$arg9) {
		TF_SessionPRunSetup($arg1,$inputs,$ninputs,$outputs,$noutputs,$target_opers,$ntargets,$handle,$arg9);
	}

	static function TF_SessionPRun($arg1,$handle,$inputs,$input_values,$ninputs,$outputs,$output_values,$noutputs,$target_opers,$ntargets,$arg11) {
		TF_SessionPRun($arg1,$handle,$inputs,$input_values,$ninputs,$outputs,$output_values,$noutputs,$target_opers,$ntargets,$arg11);
	}

	static function TF_NewDeprecatedSession($arg1,$status) {
		return TF_NewDeprecatedSession($arg1,$status);
	}

	static function TF_CloseDeprecatedSession($arg1,$status) {
		TF_CloseDeprecatedSession($arg1,$status);
	}

	static function TF_DeleteDeprecatedSession($arg1,$status) {
		TF_DeleteDeprecatedSession($arg1,$status);
	}

	static function TF_Reset($opt,$containers,$ncontainers,$status) {
		TF_Reset($opt,$containers,$ncontainers,$status);
	}

	static function TF_ExtendGraph($arg1,$proto,$proto_len,$arg4) {
		TF_ExtendGraph($arg1,$proto,$proto_len,$arg4);
	}

	static function TF_Run($arg1,$run_options,$input_names,$inputs,$ninputs,$output_names,$outputs,$noutputs,$target_oper_names,$ntargets,$run_metadata,$arg12) {
		TF_Run($arg1,$run_options,$input_names,$inputs,$ninputs,$output_names,$outputs,$noutputs,$target_oper_names,$ntargets,$run_metadata,$arg12);
	}

	static function TF_PRunSetup($arg1,$input_names,$ninputs,$output_names,$noutputs,$target_oper_names,$ntargets,$handle,$arg9) {
		TF_PRunSetup($arg1,$input_names,$ninputs,$output_names,$noutputs,$target_oper_names,$ntargets,$handle,$arg9);
	}

	static function TF_PRun($arg1,$handle,$input_names,$inputs,$ninputs,$output_names,$outputs,$noutputs,$target_oper_names,$ntargets,$arg11) {
		TF_PRun($arg1,$handle,$input_names,$inputs,$ninputs,$output_names,$outputs,$noutputs,$target_oper_names,$ntargets,$arg11);
	}

	static function TF_LoadLibrary($library_filename,$status) {
		return TF_LoadLibrary($library_filename,$status);
	}

	static function TF_GetOpList($lib_handle) {
		return TF_GetOpList($lib_handle);
	}

	static function TF_DeleteLibraryHandle($lib_handle) {
		TF_DeleteLibraryHandle($lib_handle);
	}

	static function TF_GetAllOpList() {
		return TF_GetAllOpList();
	}

	const PHP_TF_FLOAT = PHP_TF_FLOAT;

	const PHP_TF_DOUBLE = PHP_TF_DOUBLE;

	const PHP_TF_INT32 = PHP_TF_INT32;

	const PHP_TF_UINT8 = PHP_TF_UINT8;

	const PHP_TF_INT16 = PHP_TF_INT16;

	const PHP_TF_INT8 = PHP_TF_INT8;

	const PHP_TF_STRING = PHP_TF_STRING;

	const PHP_TF_COMPLEX64 = PHP_TF_COMPLEX64;

	const PHP_TF_COMPLEX = PHP_TF_COMPLEX;

	const PHP_TF_INT64 = PHP_TF_INT64;

	const PHP_TF_BOOL = PHP_TF_BOOL;

	const PHP_TF_QINT8 = PHP_TF_QINT8;

	const PHP_TF_QUINT8 = PHP_TF_QUINT8;

	const PHP_TF_QINT32 = PHP_TF_QINT32;

	const PHP_TF_BFLOAT16 = PHP_TF_BFLOAT16;

	const PHP_TF_QINT16 = PHP_TF_QINT16;

	const PHP_TF_QUINT16 = PHP_TF_QUINT16;

	const PHP_TF_UINT16 = PHP_TF_UINT16;

	const PHP_TF_COMPLEX128 = PHP_TF_COMPLEX128;

	const PHP_TF_HALF = PHP_TF_HALF;

	const PHP_TF_RESOURCE = PHP_TF_RESOURCE;

	const PHP_TF_OK = PHP_TF_OK;

	const PHP_TF_CANCELLED = PHP_TF_CANCELLED;

	const PHP_TF_UNKNOWN = PHP_TF_UNKNOWN;

	const PHP_TF_INVALID_ARGUMENT = PHP_TF_INVALID_ARGUMENT;

	const PHP_TF_DEADLINE_EXCEEDED = PHP_TF_DEADLINE_EXCEEDED;

	const PHP_TF_NOT_FOUND = PHP_TF_NOT_FOUND;

	const PHP_TF_ALREADY_EXISTS = PHP_TF_ALREADY_EXISTS;

	const PHP_TF_PERMISSION_DENIED = PHP_TF_PERMISSION_DENIED;

	const PHP_TF_UNAUTHENTICATED = PHP_TF_UNAUTHENTICATED;

	const PHP_TF_RESOURCE_EXHAUSTED = PHP_TF_RESOURCE_EXHAUSTED;

	const PHP_TF_FAILED_PRECONDITION = PHP_TF_FAILED_PRECONDITION;

	const PHP_TF_ABORTED = PHP_TF_ABORTED;

	const PHP_TF_OUT_OF_RANGE = PHP_TF_OUT_OF_RANGE;

	const PHP_TF_UNIMPLEMENTED = PHP_TF_UNIMPLEMENTED;

	const PHP_TF_INTERNAL = PHP_TF_INTERNAL;

	const PHP_TF_UNAVAILABLE = PHP_TF_UNAVAILABLE;

	const PHP_TF_DATA_LOSS = PHP_TF_DATA_LOSS;
}

/* PHP Proxy Classes */

?>
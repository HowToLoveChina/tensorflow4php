#include "include/tensorflow/c/c_api.h"

int main() {
  TF_Status* s = TF_NewStatus();
  TF_SetStatus(s, TF_UNKNOWN, "Some error");
  if (TF_GetCode(s) != TF_UNKNOWN) {
    return 1;
  }
  TF_DeleteStatus(s);
  return 0;
}

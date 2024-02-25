export enum RequestStatus {
  None,
  Updating,
  Success,
  Failed
}

export interface AjaxResult {
  status: RequestStatus
  error?: Error
}

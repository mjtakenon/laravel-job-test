import {defineStore} from 'pinia'
import axios from 'axios'
import {ref} from 'vue'
import {AjaxResult, RequestStatus} from "$entity/Network.js";
import {JobResult} from "$entity/JobResult.js";

export const useIndexStore = defineStore('index', () => {
  const ajaxResult = ref<AjaxResult>({ status: RequestStatus.None })

  const postJob = async(): Promise<AjaxResult> => {
    console.debug('POST', '/api/jobs')
    await axios
      .post('/api/jobs')
      .then((res) => {
        console.debug(res)
        ajaxResult.value.status = RequestStatus.Success
      })
      .catch((err) => {
        console.error(err)
        ajaxResult.value.status = RequestStatus.Failed
        ajaxResult.value.error = err
      })
  }

  return { ajaxResult, postJob }
})

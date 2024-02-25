import {defineStore} from 'pinia'
import axios from 'axios'
import {ref} from 'vue'
import {AjaxResult, RequestStatus} from "$entity/Network.js";
import {JobResult} from "$entity/JobResult.js";

export const useJobResultStore = defineStore('jobResult', () => {
  const jobResults = ref<JobResult[]>([])
  const ajaxResult = ref<AjaxResult>({ status: RequestStatus.None })

  const getJobResults = async (): Promise<AjaxResult> => {
    console.debug('GET', '/api/jobs')
    await axios
      .get('/api/jobs')
      .then((res) => {
        console.debug(res)
        ajaxResult.value.status = RequestStatus.Success
        jobResults.value = res.data.data
      })
      .catch((err) => {
        console.error(err)
        ajaxResult.value.status = RequestStatus.Failed
        ajaxResult.value.error = err
      })
  }
  return { jobResults, ajaxResult, getJobResults }
})

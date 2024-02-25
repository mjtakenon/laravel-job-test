<template>
  <div class="job-results">
    <h2 class="subtitle">Job Results <span class="update-button" @click="onClickUpdate">↻</span></h2>
    <template
      v-if="jobResultStore.ajaxResult.status === RequestStatus.None || jobResultStore.ajaxResult.status === RequestStatus.Updating">
      <div class="animate-spin h-10 w-10 border-4 border-blue-500 rounded-full border-t-transparent"></div>
    </template>
    <template v-else-if="jobResultStore.ajaxResult.status === RequestStatus.Success">
      <table class="table">
        <thead>
          <tr>
            <th class="th">id</th>
            <th class="th">result</th>
            <th class="th">created_at</th>
            <th class="th">updated_at</th>
          </tr>
        </thead>
        <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
          <tr v-for="jobResult of jobResultStore.jobResults">
            <td class="td"> {{ jobResult.id }} </td>
            <td class="td"> {{ jobResult.result }} </td>
            <td class="td"> {{ new Date(jobResult.created_at).toLocaleString() }} </td>
            <td class="td"> {{ new Date(jobResult.updated_at).toLocaleString() }} </td>
          </tr>
        </tbody>
      </table>
    </template>
    <template v-else>
      {{ jobResultStore.ajaxResult.error }}
    </template>
  </div>
</template>

<script setup lang="ts">
import {onMounted} from "vue";
import {useJobResultStore} from "$store/JobResultStore.js";
import {RequestStatus} from "$entity/Network.js";

const jobResultStore = useJobResultStore()

onMounted(() => {
  jobResultStore.getJobResults()
})

const onClickUpdate = () => {
  jobResultStore.ajaxResult.status = RequestStatus.Updating
  jobResultStore.getJobResults()
}
</script>

<style scoped lang="scss">

.subtitle {
  @apply mb-2 mt-6 border-b text-lg;
}

.update-button {
  @apply cursor-pointer;
}

.update-button:hover {
  @apply select-none text-gray-500;
}

.table {
  @apply min-w-full divide-y divide-gray-200 dark:divide-gray-700;
}

.th {
  @apply px-2 py-2 text-start text-sm font-medium text-gray-500;
}

.td {
  @apply px-2 py-2 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200;
}
</style>

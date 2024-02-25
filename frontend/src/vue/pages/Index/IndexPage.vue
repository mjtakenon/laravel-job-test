<template>
  <div id="index-page">
    <h1 class="title">Laravel job test</h1>

    <button class="btn btn-blue">enqueue</button>

    <JobResultsView/>
  </div>
</template>

<script setup lang="ts">

import JobResultsView from "$vue/components/Queue/JobResultsView.vue";
</script>

<style scoped lang="scss">
#index-page {
  @apply mx-auto max-w-[1000px] px-3;

  .title {
    @apply mb-4 mt-6 border-b pb-1 text-2xl font-black;
  }

  .btn {
    @apply font-bold py-2 px-4 rounded;
  }

  .btn-blue {
    @apply bg-blue-500 text-white;
  }

  .btn-blue:hover {
    @apply bg-blue-700;
  }
}
</style>

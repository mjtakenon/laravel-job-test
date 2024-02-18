<template>
  <div id="index">
    <h1 class="title">Laravel template</h1>
    {{ message }}
  </div>
</template>

<script setup lang="ts">

import {ref} from "vue";

const message = ref<string>()

message.value = "Laravel and vue are working properly!"

</script>

<style scoped lang="scss">
#index {
  @apply mx-auto max-w-[1000px] px-3;

  .title {
    @apply mb-4 mt-6 border-b pb-1 text-2xl font-black;
  }

  .subtitle {
    @apply mb-2 mt-6 border-b text-lg;
  }
}
</style>

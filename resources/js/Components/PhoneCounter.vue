<script setup>
import { toRefs } from 'vue'

const props = defineProps({
  form: {
    type: Object,
    required: true,
  },
})

console.log(props.form.phones)

const { tempForm } = toRefs(props)

function onAddPhone() {
  tempForm.value.phones.push({
    number: '',
    type: '',
  })
}
</script>

<template>
  <div class="flex flex-row justify-center space-x-4">
    <div v-for="(phone, idx) in form.phones" :key="idx">
      <input v-model="phone.number" type="text">

      <input v-model="phone.type" type="text">
    </div>

    <button
      type="button"
      @click="onAddPhone"
    >
      Add phone
    </button>
  </div>
</template>

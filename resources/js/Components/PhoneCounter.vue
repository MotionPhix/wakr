<script setup>
import { computed, ref } from 'vue'

const props = defineProps({
  modelValue: {
    type: [Array, String],
    default: () => [
      {
        number: '',
        type: '',
      },
    ],
  },
})

const emit = defineEmits(['update:modelValue'])

const phones = computed(() => Array.isArray(props.modelValue) ? props.modelValue : [])

function addPhone() {
  phones.value.push({ number: '', type: '' })
  emitUpdatedPhones()
}

function removePhone(index) {
  phones.value.splice(index, 1)
  emitUpdatedPhones()
}

function emitUpdatedPhones() {
  const updatedPhones = [...phones.value]
  emit('update:modelValue', updatedPhones)
}
</script>

<template>
  <label class="block font-medium text-sm text-gray-700 dark:text-gray-300 mb-1">
    Contact phones
  </label>

  <div
    v-for="(phone, index) in phones"
    :key="index"
    class="grid grid-cols-2 gap-6 w-full mb-6"
  >
    <input
      v-model="phone.number"
      type="text"
      class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500"
      placeholder="Enter a phone number"
    >

    <article class="flex gap-2">
      <select
        v-model="phone.type"
        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500"
      >
        <option value="" disabled>
          Pick a phone type
        </option>

        <option value="mobile">
          Mobile
        </option>

        <option value="home">
          Home
        </option>

        <option value="office">
          Office
        </option>
      </select>

      <button type="button" class="hover:text-rose-500" @click="removePhone(index)">
        <IconTrash />
      </button>
    </article>
  </div>

  <button type="button" class="flex items-center gap-2 hover:bg-gray-200 rounded py-1.5 px-2" @click="addPhone">
    <IconPlus /> <span>Add Phone</span>
  </button>
</template>

<x-splade-modal max-width="md" :close-button="false" close-explicitly>

  <h2 class="font-bold text-xl mb-4">Edit posting</h2>

  <x-splade-form
    :default="$post"
    class="flex flex-col gap-5"
    action="{{ route('posts.update', $post) }}"
    method="put">

    <x-splade-input name="title" label="Job title" />

    <x-splade-textarea
      autosize
      name="content"
      label="Job description" />

    <section class="flex items-center gap-2 justify-end">
      <x-splade-submit
        class="px-3 py-1.5 border-2 border-lime-500 bg-lime-500 hover:bg-lime-700 hover:border-lime-700 transition"
        type="submit"
        label="Update" />

      <button
        type="button"
        class="font-semibold rounded-lg px-3 py-1.5 border-2 border-lime-500 hover:border-lime-700"
        @click="modal.close">
        Cancel
      </button>
    </section>

  </x-splade-form>

</x-splade-modal>

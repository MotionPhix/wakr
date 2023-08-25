<x-splade-modal
  max-width="xl" :close-button="false" close-explicitly
  class="p-4 rounded-lg shadow dark:bg-gray-800 sm:p-5">

  <div class="flex items-center justify-between pb-4 mb-4 border-b rounded-t sm:mb-5 dark:border-gray-600">

    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
      {{ $post->id ? 'Edit' : 'Create' }} post
    </h3>

    <button
      type="button"
      @click="modal.close"
      class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white">
      <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
      <span class="sr-only">Close modal</span>
    </button>

  </div>

  <x-splade-form
    :default="$post"
    class="flex flex-col gap-5"
    action="{{ $post->id ? route('posts.update', $post) : route('posts.store') }}"
    :method="$post->id ? 'patch' : 'post'">

    <x-splade-input
      name="title"
      label="Post title"
      placeholder="Enter post title" />

    <x-splade-textarea
      name="intro"
      label="Post intro"
      placeholder="Fill out an intro context"
      autosize />

    <x-splade-wysiwyg
      name="content"
      label="Post content"
      placeholder="Provide post content"
      autosize />

    <section
      class="flex items-center justify-end gap-2">

      <x-splade-submit
        class="px-3 py-1.5 border-2 border-lime-500 bg-lime-500 hover:bg-lime-700 hover:border-lime-700 transition"
        :label="$post->id ? 'Update' : 'Publish'"
        type="submit" />

      <button
        type="button"
        class="font-semibold rounded-lg px-3 py-1.5 border-2 border-lime-500 hover:border-lime-700"
        @click="modal.close">
        Cancel
      </button>
    </section>

  </x-splade-form>

</x-splade-modal>

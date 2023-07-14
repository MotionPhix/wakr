<x-splade-modal max-width="md" close-explicitly>

  <h2 class="font-bold text-xl mb-4">Add new posting</h2>

  <x-splade-form
    class="flex flex-col gap-5"
    action="{{ route('posts.store') }}"
    method="post">

    <x-splade-input name="title" label="Product title" />

    <x-splade-file
      name="photo_path"
      label="Product photo"
      filepond
      preview />

    <x-splade-textarea
      autosize
      name="content"
      label="Product description" />


    <x-splade-submit class="bg-lime-500 hover:bg-lime-700 transition" type="submit" label="Save" />

  </x-splade-form>

</x-splade-modal>

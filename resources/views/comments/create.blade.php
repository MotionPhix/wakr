  <x-splade-modal max-width="md">

    <x-modal-title>
      Add comment
    </x-modal-title>

    <x-splade-form 
      class="flex flex-col gap-5"
      action="{{ route('posts.comments.store', $post) }}"
      method="post">

      <x-splade-textarea  
        autosize
        name="body" 
        label="Write your comment" />

      
      <x-splade-submit 
        class="bg-lime-500 hover:bg-lime-700 transition" 
        type="submit" 
        label="Post" />

    </x-splade-form>

  </x-splade-modal>

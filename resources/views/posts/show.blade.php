<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl flex items-center gap-2 text-gray-800 leading-tight">
      <Link
        href="{{ route('posts.index') }}"
        class="inline-flex gap-2 items-center group transition text-lime-500 hover:text-lime-700">

        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="w-6 h-6">
        <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
      </svg>

      <span>Posts</span>

      </Link>

      {{ __($post->title) }}
    </h2>

    <div class="flex gap-3 items-center">
      <Link modal href="{{ route('posts.edit', $post->id) }}" class="text-lime-500 hover:text-lime-700 transition flex items-center gap-3">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
        <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
      </svg>

      <span class="hidden sm:inline">Edit</span>
      </Link>

      <x-splade-form action="{{ route('posts.destroy', $post) }}" method="delete">
        <button class="flex gap-3 text-rose-500 hover:text-rose-700 lin transition">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
            <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
          </svg>

          <span class="hidden sm:inline">Delete</span>
        </button>
      </x-splade-form>
    </div>
  </x-slot>

  <div class="max-w-7xl mx-auto p-3 sm:p-5 md:p-10 grid grid-cols-3">
    <main class="col-span-2">
      <x-card>
        @if($post->images->count())
        {{-- @dd($post->images->random()) --}}
        <div style="height: 360px; background-image: url({{
            $post->images->count() > 0
            ? $post->images->random()->path
            : 'https://via.placeholder.com/350x200.png?text=No+Image'
        }})" class="rounded-t-lg bg-no-repeat bg-cover" />
        {{-- {{ asset('storage/posts/' . $post->image->path) }} --}}
        @endif

        <h3 class="font-bold text-2xl p-6">
          {{ $post->title }}
        </h3>

        <article class="px-6 pb-6 flex flex-col h-full justify-end">
          <p class="text-xl my-2 md:max-w-lg">
            {{ $post->content }}
          </p>

          <p class="text-gray-300 font-bold text-sm">
            Posted:
            <span class="text-gray-500">
              {{ $post->created_at->diffForHumans() }}
            </span>

            by:
            <span class="text-gray-500">
              {{ $post->user->first_name }}
            </span>
          </p>
        </article>
      </x-card>

      <section class="p-3 sm:p-5 md:p-10 flex flex-col gap-2 mt-8 sm:mt-0">
        <div class="flex gap-2 items-center border-b pb-4 border-lime-500">
          <h2 class="font-semibold text-xl">
            Comments
          </h2>

          <Link modal href="{{ route('posts.comments.create', $post) }}" class="bg-lime-500 hover:bg-lime-700 transition text-sm text-white px-3 py-1.5 font-semibold rounded-md flex gap-1 items-center">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="w-5 h-5">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
          </svg>

          Add
          </Link>
        </div>

        @forelse ($comments as $comment)
        <p class="text-lg font-medium">
          {{ $comment->body }}
        </p>

        <span class="text-gray-400 text-sm">By {{ $comment->user->first_name }}</span>
        @empty
        No comments yet!
        @endforelse
      </section>
    </main>

    <aside class="text-gray-600 body-font">
      <div class="px-5 @container">
        <div class="flex-wrap -m-4 block @[618px]:flex">
          @forelse ($posts as $my_post)
          <div class="@lg:w-1/4 @md:w-1/2 p-4 w-full">
            <a class="block relative h-48 rounded overflow-hidden">
              <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="https://dummyimage.com/420x260">
            </a>
            <div class="mt-4">
              <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">CATEGORY</h3>
              <h2 class="text-gray-900 title-font text-lg font-medium">The Catalyzer</h2>
              <p class="mt-1">$16.00</p>
            </div>
          </div>
          @empty

          @endforelse
        </div>
      </div>
    </aside>
  </div>
</x-app-layout>

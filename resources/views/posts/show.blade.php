<x-app-layout>

  <x-slot:header>

    <h2 class="flex items-center gap-2 text-xl font-semibold leading-tight text-gray-800">

      <Link
        href="{{ route('posts.index') }}"
        class="inline-flex items-center gap-2 transition group text-lime-500 hover:text-lime-700">

        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="w-6 h-6">
          <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
        </svg>

        <span>Posts</span>

      </Link>

    </h2>

    <div class="flex items-center gap-3">

      <Link modal href="{{ route('posts.edit', $post->id) }}" class="flex items-center gap-3 transition text-lime-500 hover:text-lime-700">

        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
          <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
        </svg>

        <span class="hidden sm:inline">Edit</span>

      </Link>

      <Link
        href="{{ route('posts.destroy', $post) }}"
        class="flex gap-3 transition text-rose-500 hover:text-rose-700"
        confirm-text="Really delete this post?"
        confirm="Delete post..."
        confirm-button="Yes!"
        cancel-button="No!"
        method="delete">

        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
          <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
        </svg>

        <span class="hidden sm:inline">Delete</span>

      </Link>

    </div>

  </x-slot>

  {{-- <div class="grid grid-cols-3 p-3 mx-auto max-w-7xl sm:p-5 md:p-10">
    <main class="col-span-2">
      <x-card>
        @if($post->images->count())
        <div style="height: 360px; background-image: url({{
            $post->images->count() > 0
            ? $post->images->random()->path
            : 'https://via.placeholder.com/350x200.png?text=No+Image'
        }})" class="bg-no-repeat bg-cover rounded-t-lg" />
        @endif

        <h3 class="p-6 text-2xl font-bold">
          {{ $post->title }}
        </h3>

        <article class="flex flex-col justify-end h-full px-6 pb-6">
          <p class="my-2 text-xl md:max-w-lg">
            {!! $post->content !!}
          </p>

          <p class="text-sm font-bold text-gray-300">
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

      <section class="flex flex-col gap-2 p-3 mt-8 sm:p-5 md:p-10 sm:mt-0">
        <div class="flex items-center gap-2 pb-4 border-b border-lime-500">
          <h2 class="text-xl font-semibold">
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

        <span class="text-sm text-gray-400">By {{ $comment->user->first_name }}</span>
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
            <a class="relative block h-48 overflow-hidden rounded">
              <img alt="ecommerce" class="block object-cover object-center w-full h-full" src="https://dummyimage.com/420x260">
            </a>
            <div class="mt-4">
              <h3 class="mb-1 text-xs tracking-widest text-gray-500 title-font">CATEGORY</h3>
              <h2 class="text-lg font-medium text-gray-900 title-font">The Catalyzer</h2>
              <p class="mt-1">$16.00</p>
            </div>
          </div>
          @empty

          @endforelse
        </div>
      </div>
    </aside>
  </div> --}}

  <section>

    <h1 class="flex items-center mb-6">

      <Link
        href="{{ route('posts.index') }}"
        class="w-8 h-8 p-1 font-semibold text-indigo-600 hover:text-indigo-900">

        <i class="w-5 h-5 ti ti-arrow-left"></i>

        <span>All posts</span>

      </Link>

      <span class="w-[2rem]"></span>

      <Link
        class="w-8 h-8 p-1 mr-1 font-semibold text-white bg-indigo-600 rounded-xl hover:bg-indigo-900"
        href="{{ route('posts.edit', $post) }}">

        <i class="w-5 h-5 ti ti-pencil"></i>

      </Link>

      <Link
        class="w-8 h-8 p-1 font-semibold text-white bg-indigo-600 rounded-xl hover:bg-indigo-900"
        href="{{ route('posts.destroy', $post) }}"
        method="delete">

        <i class="w-5 h-5 ti ti-trash"></i>

    </Link>
    </h1>

    <div class="pb-8 border-b">

      <h1 class="mb-4 text-2xl font-medium">
        {{ $post->title }}
      </h1>

      {!! $post->content !!}

    </div>

    <h2 class="my-8">Comments</h2>

    {{-- <%= render @article.comments %> --}}

    {{-- <%= render 'comments/form' %> --}}

  </section>
</x-app-layout>

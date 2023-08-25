<x-app-layout>

  <x-slot:header>

    <h2 class="text-xl font-semibold leading-tight text-gray-800">

    {{ __('Posts') }}

    </h2>

    <x-button
      modal
      href="{{ route('posts.create') }}"
      aria-label="modal dialogue to create a new job post">
      New
    </x-button>

  </x-slot>

  <div class="max-w-2xl py-12 mx-auto">

    <ul>

      @forelse ($posts as $post)

        @unless ($post->archived())

          <li>

            <Post :article="@js($post)" #default="{ actionShow }">

              {{-- <div class="flex items-center justify-between">

                <h2 class="text-xl font-semibold text-gray-500">
                  {{ $post->title }}
                </h2>

                <Link
                  modal
                  href="{{ route('posts.edit', $post) }}"
                  class="transition text-lime-500 hover:text-lime-700">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                  </svg>
                </Link>

              </div>

              <p class="text-sm text-gray-400">

                by {{ $post->user->name }}

              </p>

              <span class="flex-1" />

              <div class="flex gap-2">
                <button
                  class="px-4 py-1.5 bg-lime-500 font-bold text-gray-100 hover:bg-lime-700 transition rounded"
                  @click="actionShow" v-text="'Read'" />

                <Link
                  class="px-4 py-1.5 transition bg-rose-500 font-bold text-gray-100 hover:bg-rose-700 rounded"
                  href="{{ route('posts.destroy', $post) }}"
                  confirm="Enter the danger zone..."
                  confirm-text="Are you sure?"
                  confirm-button="Yes, take me there!"
                  cancel-button="No, keep me save!"
                  method="delete">
                  Delete
                </Link>

                <span class="flex-1" />

                <span class="flex items-center gap-2">
                  <span class="font-bold">
                    {{ $post->comments_count }}
                  </span>

                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 01.865-.501 48.172 48.172 0 003.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z" />
                  </svg>
                </span>
              </div> --}}

              <div class="pt-6 pb-4 space-y-2">

                <span class="text-xs font-medium">
                  {{ $post->created_at  }}
                </span>

                <h3 class="text-xl font-semibold">
                  {{ $post->title }}
                </h3>

                <section class="line-cramp-2">
                  {{ $post->intro }}
                </section>

                <Link
                  href="{{ route('posts.show', $post) }}"
                  class="inline-flex items-center py-2 space-x-2 text-sm transition duration-300 dark:text-violet-400 hover:text-blue-600">

                  <span>Read more</span>

                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4">
                    <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                  </svg>

                </Link>

              </div>

            </Post>

          </li>

        @endunless

      @empty

        <article class="flex flex-col gap-4 py-10 text-gray-500">

          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-12 h-12">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
          </svg>

          <h2 class="text-2xl font-semibold">
            No job posts here yet!
          </h2>

          <p>

            <Link
              modal
              href="{{ route('posts.create') }}"
              aria-label="modal dialogue to create a new job post"
              class="px-3 py-1.5 bg-lime-500 hover:bg-lime-700 transition text-white font-semibold rounded">
              Post a job
            </Link>

          </p>

        </article>

      @endforelse

    </ul>

  </div>

</x-app-layout>

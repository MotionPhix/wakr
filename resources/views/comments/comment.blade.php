<article class="p-6 mb-6 text-base bg-gray-100 rounded-lg dark:bg-gray-900">

  <footer class="flex items-center justify-between mb-2">

      <div class="flex items-center gap-3">

          <p class="inline-flex items-center text-sm text-gray-900 dark:text-white">

            <img
              class="w-6 h-6 mr-2 rounded-full"
              src="https://flowbite.com/docs/images/people/profile-picture-2.jpg" />

            <span>{{ $comment->user->first_name . ' ' . $comment->user->last_name }}</span>

          </p>

          <span class="bg-lime-500 w-1.5 h-1.5 rounded-full"></span>

          <p class="text-xs text-gray-400 dark:text-gray-300">

            <span>{{ $comment->created_at->diffForHumans() }}</span>

          </p>
      </div>

      <button
        id="dropdownComment1Button"
        data-dropdown-toggle="dropdownComment1"
        class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-400 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-50 dark:bg-gray-900 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
        type="button">

        <span class="w-5 h-5">

          <IconDots stroke-width="2" />

        </span>

        <span class="sr-only">Comment settings</span>

      </button>

      <div id="dropdownComment1"
        class="z-10 hidden bg-white divide-y divide-gray-100 rounded shadow w-36 dark:bg-gray-700 dark:divide-gray-600">

         <ul class="py-1 text-sm text-gray-700 dark:text-gray-200"
          aria-labelledby="dropdownMenuIconHorizontalButton">

          <li>
            <a href="#"
              class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Edit</a>
          </li>

          <li>
            <%= link_to 'Remove',
              [comment.article, comment], data: {
                turbo_method: :delete,
                turbo_confirm: "Are you sure?"
              },
              class: 'block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white' %>
          </li>

          <li>

            <a href="#"
              class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Report</a>

          </li>

        </ul>

      </div>

  </footer>

  <p class="text-gray-500 dark:text-gray-400">

    <span>{{ $comment->body }}</span>

  </p>

  <div class="flex items-center mt-4 space-x-4">

    <button type="button"
      class="flex items-center text-sm text-gray-500 dark:text-gray-400 hover:text-blue-200">

      <IconThumbUp class="mr-1 w-5" />

      <span>Like<span>

    </button>

  </div>

</article>

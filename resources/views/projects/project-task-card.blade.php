<section class="container mb-4 mx-auto">
  <div class="grid grid-cols-1 gap-3 md:grid-cols-2">

    @foreach ($project->tasks as $key => $task)

      <section class="flex flex-col border hover:bg-gray-200 border-gray-500 dark:border-none p-4 dark:bg-gray-900 group rounded-xl dark:hover:bg-gray-700 transition duration-300 ease-in-out">
        <h4 class="dark:text-white text-gray-800 font-semibold leading-none mb-1">
          {{ $task->title }}
        </h4>

        <div class="flex justify-between items-center">
          <div class="flex gap-2 items-center">
            <span class="h-4 w-4 bg-{{ $task->status_color }}-500 dark:bg-{{ $task->status_color }}-200 rounded-full" />

            <span class="text-sm font-medium leading-4 dark:text-{{ $task->status_color }}-200 text-{{ $task->status_color }}-500">
              {{ $task->status_display }}
            </span>
          </div>

          <article class="flex items-center gap-1">

            <x-action-menu>

              <div class="text-gray-900 bg-white border border-gray-200 rounded-lg dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                <button type="button" class="relative inline-flex items-center w-full px-4 py-2 text-sm font-medium border-b border-gray-200 rounded-t-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:border-gray-600 dark:hover:bg-gray-600 dark:hover:text-white dark:focus:ring-gray-500 dark:focus:text-white">
                    <svg aria-hidden="true" class="w-4 h-4 mr-2 fill-current" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd"></path></svg>
                    Re-assign
                </button>

                <Link
                  slideover
                  preserve-scroll
                  href="{{ route('tasks.show', $task) }}"
                  class="relative inline-flex items-center w-full px-4 py-2 text-sm font-medium border-b border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:border-gray-600 dark:hover:bg-gray-600 dark:hover:text-white dark:focus:ring-gray-500 dark:focus:text-white">
                  <svg aria-hidden="true" class="w-4 h-4 mr-2 fill-current" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M5 4a1 1 0 00-2 0v7.268a2 2 0 000 3.464V16a1 1 0 102 0v-1.268a2 2 0 000-3.464V4zM11 4a1 1 0 10-2 0v1.268a2 2 0 000 3.464V16a1 1 0 102 0V8.732a2 2 0 000-3.464V4zM16 3a1 1 0 011 1v7.268a2 2 0 010 3.464V16a1 1 0 11-2 0v-1.268a2 2 0 010-3.464V4a1 1 0 011-1z"></path></svg>
                  Details
                </Link>

                <button type="button" class="relative inline-flex items-center w-full px-4 py-2 text-sm font-medium border-b border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:border-gray-600 dark:hover:bg-gray-600 dark:hover:text-white dark:focus:ring-gray-500 dark:focus:text-white">
                  <x-phosphor-chat-teardrop-text-bold class="w-4 h-4 mr-2 fill-current" />
                  Comment
                </button>

                <x-general-link
                  preserve-scroll
                  class="relative inline-flex items-center w-full px-4 py-2 text-sm font-medium rounded-b-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:border-gray-600 dark:hover:bg-gray-600 dark:hover:text-white dark:focus:ring-gray-500 dark:focus:text-white"
                  href="{{ route('tasks.destroy', $task) }}"
                  method="delete">
                  <x-phosphor-trash-simple-bold class="w-4 h-4 mr-2 fill-current" />
                  Delete
                </x-general-link>
              </div>

            </x-action-menu>

          </article>
        </div>

        <p
          class="text-sm dark:text-gray-200 text-gray-700 leading-normal line-clamp-2 mb-5 group-hover:(text-gray-300) transition duration-300 ease-in-out">
          {{ $task->description }}
        </p>

        <span class="flex-1" />

        <div class="pt-4 border-t border-gray-500">
          <div class="flex flex-wrap items-center justify-between -m-2">
            <div class="w-auto p-2">
              <div class="flex items-center p-2 text-gray-200 bg-gray-600 rounded-md">
                <credit-card-icon class="w-4" />

                <span class="ml-2 text-xs font-medium">
                  Costs {{ $task->human_cost }}
                </span>
              </div>
            </div>

            <div class="w-auto p-2">
              <div class="flex gap-1 text-xs items-center dark:text-gray-300 text-gray-500">
                <x-phosphor-user-bold class="w-4" />

                <span>
                  {{ $task->user_id === auth()->user()->id ? 'Me' : $task->user->name}}
                </span>
              </div>
            </div>
          </div>
        </div>
      </section>

      {{-- re-assign modal --}}
      <x-splade-modal name="re-assign" max-width="sm" :close-button="false">

        <h2 class="font-semibold text-xl mb-4">Re-assign task</h2>

        <x-splade-form
          class="flex flex-col gap-5"
          {{-- :action="route('projects.tasks.partial', [$project, $task])" --}}
          preserve-scroll
          method="patch">

          <x-splade-select
            name="assigned_to"
            label="Assign task to"
            choices="{ searchEnabled: false }">

            <option value="" disabled>Pick a user to be re-assigned the task</option>

            <option value="{{ Auth::user()->id }}">Me</option>

            {{-- @foreach ($task->assignees() as $user)
              <option value="{{ $user->id }}">
                {{ $user->name }}
              </option>
            @endforeach --}}
          </x-splade-select>

          <div class="flex justify-end gap-2">
            <button type="button" class="btn btn-outline px-4" @click="modal.close">Cancel</button>

            <x-splade-submit class="flex items-center gap-2 btn">
              <x-phosphor-user-circle-plus-bold class="w-5" /> <span>Re-assign</span>
            </x-splade-submit>
          </div>

        </x-splade-form>

      </x-splade-modal>

    @endforeach

  </div>
</section>

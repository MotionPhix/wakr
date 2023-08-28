<x-app-layout>

  <x-slot:header>

    <Link
      href="{{ route('projects.index') }}"
      class="text-lg flex items-center p-1 font-semibold hover:text-lime-900">

      <IconArrowLeft class="w-5 h-5" />

      <span>All Projects</span>

    </Link>

    <span class="flex-1"></span>

    <Link
      class="flex items-center mr-1 font-semibold text-lime-600 hover:text-lime-800"
      href="{{ route('projects.edit', $project) }}"
      modal>

      <IconPencil class="w-5 h-5" />

      <span class="hidden sm:inline-flex px-2">
        Edit
      </span>

    </Link>

    <Link
      class="flex items-center font-semibold text-rose-600 hover:text-rose-800"
      href="{{ route('projects.destroy', $project) }}"
      confirm-text="Really delete this post?"
      confirm="Delete Post"
      confirm-button="Yes! Why not?"
      cancel-button="No! Wait a minute"
      method="delete">

      <IconTrash class="w-5 h-5" />

      <span class="hidden sm:inline-flex px-2">

        Delete

      </span>

    </Link>

  </x-slot>

  <section class="max-w-4xl mx-auto my-12">

    <div class="pb-8 border-b">

      <h1 class="mb-4 text-4xl font-thin max-w-xl">
        {{ $project->name }}
      </h1>

      <p class="font-medium max-w-xl">
        {{ $project->description }}
      </p>

      <section class="my-8 flex gap-4 items-center">

        <IconUser class="w-12 h-12 bg-rose-300 rounded-full" />

        <div class="flex flex-col">

          <span class="font-medium">

            {{ $project->contact->full_name }}

          </span>

          <span class="text-xs text-gray-500">

            Deadline {{ $project->end_date->diffForHumans() }}

          </span>

        </div>

      </section>

      <div class="container mx-auto">

        <div class="flex flex-wrap -mx-4">

          <section class="w-full md:w-2/3 px-4 mb-8 space-y-6">

            <div class="overflow-hidden bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">

              <div class="px-4 py-4">

                <p class="font-medium text-lg text-gray-700 dark:text-gray-400 flex items-center gap-2">
                  <IconBuildingWarehouse class="h-5" />

                  <span>
                    {{ $project->contact->company->name }}
                  </span>
                </p>

              </div>

              <div class="px-4 py-4 border-t border-gray-200 dark:border-gray-600">

                <section
                  class="flex {{ $project->tasks->count() ? 'justify-between' : 'justify-center' }} items-center pt-4">

                  <div class="grid grid-cols-4 gap-4">

                    @if ($project->tasks->count())

                      @foreach ($project->users as $member)

                        <figcaption class="flex items-center justify-center gap-3 w-full">
                          <img class="rounded-full w-9 h-9" src="{{ $member->avatarUrl() }}" alt="profile picture">

                          <div class="-space-y-1 font-medium dark:text-white text-left">
                            <div>{{ $member->id === auth()->user()->id ? 'Me' : $member->name }}</div>
                            <div class="text-xs text-gray-500 dark:text-gray-400">
                              {{ $member->roles->first()->name }}
                            </div>
                          </div>
                        </figcaption>

                      @endforeach

                    @else

                      <div class="text-gray-500 col-span-4">

                        <section class="py-4 overflow-hidden">
                          <div class="container px-4 mx-auto">

                            <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto h-16" viewBox="0 0 20 20">
                              <g fill="none">
                                <path d="M5.854 3.354a.5.5 0 1 0-.708-.708L3.5 4.293l-.646-.647a.5.5 0 1 0-.708.708l1 1a.5.5 0 0 0 .708 0l2-2zM8.5 4a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9zm0 5a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9zm1.522 6c.031-.343.094-.678.185-1H8.5a.5.5 0 0 0 0 1h1.522zM5.854 8.854a.5.5 0 1 0-.708-.708L3.5 9.793l-.646-.647a.5.5 0 1 0-.708.708l1 1a.5.5 0 0 0 .708 0l2-2zm0 4.292a.5.5 0 0 1 0 .708l-2 2a.5.5 0 0 1-.708 0l-1-1a.5.5 0 0 1 .708-.708l.646.647l1.646-1.647a.5.5 0 0 1 .708 0zM20 15.5a4.5 4.5 0 1 1-9 0a4.5 4.5 0 0 1 9 0zm-4-2a.5.5 0 0 0-1 0V15h-1.5a.5.5 0 0 0 0 1H15v1.5a.5.5 0 0 0 1 0V16h1.5a.5.5 0 0 0 0-1H16v-1.5z" fill="currentColor"></path>
                              </g>
                            </svg>

                            <div class="max-w-md mx-auto text-center mt-2 space-y-5">
                              <h2 class="text-2xl font-semibold">It's a bit empty here</h2>

                              <p class="text-neutral-500">
                                Create a task for this project and then assign one of the users available in the system.
                                You can also assign the task to yourself should you need to.
                              </p>

                              <div class="flex items-center justify-center">

                                <Link
                                  modal
                                  class="flex items-center gap-2 text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700"
                                  preserve-scroll>
                                  {{-- href="{{ route('tasks.create', $project) }}" --}}
                                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5" viewBox="0 0 24 24">
                                    <g fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                      <path d="M12 5v14"></path>
                                      <path d="M5 12h14"></path>
                                    </g>
                                  </svg>

                                  <span>Add your first task</span>
                                </Link>

                              </div>

                            </div>
                          </div>
                        </section>
                      </div>

                    @endif
                  </div>
                </section>
              </div>
            </div>

            @if($project->tasks->count())
              <div
                class="bg-white border border-gray-200 rounded-lg shadow sm:px-4 sm:pt-6 dark:bg-gray-800 dark:border-gray-700 overflow-hidden">

                <h3 class="leading-none text-gray-900 dark:text-white font-semibold">Tasks</h3>
                <p class="text-gray-500 dark:text-gray-400">Related to this project only</p>

                <div class="mt-6 pt-6 border-t dark:border-gray-600">
                  @include('projects.project-task-card', ['project' => $project])
                </div>

              </div>
            @endif

            {{-- files list --}}
            <div class="py-10">
              <section class="flex items-start justify-between">
                <div>
                  <h3 class="leading-none text-gray-900 dark:text-white font-semibold">Files</h3>
                  <p class="text-gray-500 dark:text-gray-400 mb-2">Files specifically for this project</p>
                </div>

                @if($project->files->count())
                  <div>
                    <Link
                        class="mt-4 text-blue-500 hover:text-blue-600 font-semibold focus:outline-none flex items-center gap-2"
                        preserve-sroll
                        modal>
                        {{-- href="{{ route('files.load', $project) }}" --}}
                        <IconUpload class="w-5" /> <span>Upload files</span>
                      </Link>
                  </div>
                @endif
              </section>

              @if ($project->files->count() > 0)

                <section class="grid grid-cols-1 sm:grid-cols-2 my-8 gap-4">

                  @foreach ($project->files as $file)

                    <article class="py-2 flex justify-between border rounded-lg p-6">

                      <div class="flex flex-col gap-2">
                        <section class="flex items-center gap-2">
                          <x-dynamic-component :component="$file->icon()" class="w-6 h-6 text-gray-400" />
                          <span class="text-gray-700">{{ $file->original_filename }}</span>
                        </section>

                        <span class="block text-xs text-gray-400">
                          Uploaded by <strong>{{ $file->user->name }}</strong> {{ $file->created_at->diffForHumans() }}
                        </span>
                      </div>

                      <div class="flex items-center gap-3">
                        <a
                          class="text-blue-500 hover:text-blue-700 w-8 h-8 bg-gray-700 rounded-lg flex items-center justify-center"
                          preserve-scroll
                          download>
                          {{-- href="{{ route('files.download', $file) }}" --}}
                          <IconDownload class="w-5" />
                        </a>

                        <Link
                          class="text-red-700 hover:text-red-900 w-8 h-8 bg-red-300 rounded-lg flex items-center justify-center"
                          confirm="Delete {{ $file->original_filename }}"
                          confirm-text="Are you sure?"
                          confirm-button="Yes!"
                          cancel-button="No."
                          method="delete"
                          preserve-scroll>
                          {{-- href="{{ route('files.destroy', $file) }}" --}}
                          <IconTrash class="w-5" />
                        </Link>
                      </div>

                    </article>

                  @endforeach

                </section>

              @else

                <section class="border dark:border-gray-600 rounded-lg">

                  <div class="flex flex-col items-center mx-auto max-w-md justify-center h-full my-8 space-y-5 p-8">
                    <IconFileText class="w-24 h-24 text-gray-300" stroke-width="1" />

                    <p class="text-2xl font-semibold text-gray-500">No files found.</p>

                    <p class="text-neutral-500 text-center">
                      Looks like no one has uploaded any files to the project. It's ok not to include files, but
                      should you need to, go ahead, upload those files now!
                    </p>

                    <Link
                      class="mt-4 bg-blue-500 hover:bg-blue-600 text-white flex items-center gap-2 font-semibold py-2 px-4 rounded-lg focus:outline-none"
                      preserve-scroll
                      modal>
                      {{-- href="{{ route('files.load', $project) }}" --}}
                      <IconUpload /> <span>Upload files</span>
                    </Link>
                  </div>

                </section>

              @endif

            </div>

            {{-- <section class="flex items-center justify-between">

              <div>
                <h3 class="leading-none text-gray-900 dark:text-white font-semibold">
                  Team members
                </h3>

                <p class="text-gray-500 dark:text-gray-400">Users working on this project</p>
              </div>

              <Link
                modal
                class="text-blue-500 px-3 py-1.5 transition duration-300 font-semibold hover:text-blue-700 bg-gray-300 dark:bg-gray-700 dark:hover:bg-gray-900 rounded-lg flex items-center justify-center"
                preserve-scroll>
                href="{{ route('projects.openaddmember', $project) }}"
                <IconUser class="w-5 mr-2" /> Add user
              </Link>

            </section> --}}

            <article
              class="flex items-center justify-end my-12">
              <Link
                href="{{ route('projects.destroy', $project) }}"
                method="delete"
                confirm-danger="Deleting project worth {{ $project->budget }}"
                confirm-text="Once the project is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm."
                confirm-button="Yes, delete everything!"
                cancel-button="No, let me keep it!"
                require-password
                preserve-scroll>
                <x-btn.primary>
                  Delete project
                </x-btn.primary>
              </Link>
            </article>
          </section>

          <section class="w-full md:w-1/3 px-4 mb-8">
            <div class="bg-white rounded-lg shadow overflow-hidden">
              <div class="px-4 py-4 border-y">
                <h3 class="text-lg font-semibold">Project details</h3>
              </div>

              <div class="pt-4 space-y-2 divide-y">
                <p class="px-4 text-sm text-gray-600">
                  <span class="block font-bold">
                    Start date
                  </span>

                  <span class="block">
                    {{ $project->start_date->format('j F Y') }}
                  </span>
                </p>

                <p class="px-4 text-sm text-gray-600 pt-2">
                  <span class="block font-bold">
                    Budget
                  </span>

                  <span class="block">
                    {{ $project->budget }}
                  </span>
                </p>

                <p class="px-4 text-sm text-gray-600 pt-2">
                  <span class="block font-bold">
                    Contact person
                  </span>

                  <Link class="block text-blue-500" preserve-scroll href="{{ route('contacts.show', $project->contact->id) }}">
                    {{ $project->contact->full_name }}
                  </Link>

                  @if($project->contact->phones)
                    <div class="flex items-center gap-2">

                      <phone-icon class="w-4" />

                      @foreach ($project->contact->phones as $idx => $phone)

                        @if($idx > 0)
                          <span class="font-medium">|</span>
                        @endif

                        <span class="text-gray-400">
                          {{ $phone->number }}
                        </span>

                      @endforeach
                    </div>
                  @endif

                  <div class="w-full text-gray-400 flex items-center gap-2">
                    <envelope-icon class="w-4" />

                    <span>
                      {{ $project->contact->email }}
                    </span>
                  </div>
                </p>

                <p class="px-4 text-sm text-gray-600 py-4">
                  <span class="block font-bold">Deadline</span>
                  <span class="block">{{ $project->end_date->diffForHumans() }}</span>
                </p>

                {{-- <Link class="text-sm text-gray-300 px-4 py-2 w-full block bg-gray-500" href="{{ route('profile.edit') }}" preserve-scroll>

                  <span class="block font-bold">
                    Project owner
                  </span>

                  <div class="flex items-center justify-between">

                    <span class="block">
                      {{ optional($project->owner)->name ?? 'No assigned owner!' }}
                    </span>

                    @if($project->isOwner(Auth::user()) || Auth::user()->hasAnyRole(['admin', 'general-manager']))
                      <span class="block font-bold text-gray-300 border px-2 py-1 rounded">
                        {{ $project->commission }}
                      </span>
                    @endif

                  </div>

                  @if (! optional($project->owner)->id)
                    <span class="block text-gray-400">
                      {{ $project->owner?->roles->first()->name }}
                    </span>
                  @endif

                </Link> --}}

              </div>
            </div>
          </section>
        </div>
      </div>

    </div>

  </section>
</x-app-layout>

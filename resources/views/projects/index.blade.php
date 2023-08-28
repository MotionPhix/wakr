<x-app-layout>

  <x-slot:header>

    <h2 class="text-xl font-semibold leading-tight text-gray-800">

    {{ __('Explore Projects') }}

    </h2>

    <span class="flex-1"></span>

    <x-button
      modal
      href="{{ route('projects.create') }}"
      aria-label="modal dialogue to create a new article">
      New
    </x-button>

  </x-slot>

  <section class="py-12 max-w-2xl mx-auto space-y-6">

    @forelse ($projects as $project)

      @unless ($project->cancelled)

        <Link
          href="{{ route('projects.show', $project) }}"
          class="space-y-2 block group">

          <div class="text-sm font-medium flex items-center gap-2">

            <IconUser class="w-7 h-7 text-gray-200 bg-indigo-400 rounded-full p-1" />

            <p class="flex flex-col">

              <span>
                {{ $project->contact->full_name }}
              </span>

              <span>
                {{ $project->company }}
              </span>

            </p>

          </div>

          <h3 class="text-xl font-semibold">
            {{ $project->name }}
          </h3>

          <section class="line-cramp-2">
            {{ $project->description }}
          </section>

          <div
            class="inline-flex items-center py-2 space-x-2 text-xs transition duration-300 dark:text-violet-400 group-hover:text-blue-600 text-gray-500">

            <span>
              Deadline
            </span>

            <span class="w-2 h-2 rounded-full {{ $project->deadline_color }}" />

            <span>
              {{ $project->deadline }}
            </span>

          </div>

        </Link>

      @endunless

    @empty

      <article class="flex flex-col gap-4 py-10 text-gray-500">

        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-12 h-12">
          <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
        </svg>

        <h2 class="text-2xl font-semibold">
          You are not working on any project yet!
        </h2>

        <p>

          <Link
            modal
            href="{{ route('projects.create') }}"
            aria-label="modal dialogue to create a new job project"
            class="px-4 py-3 inline-flex items-center gap-2 bg-lime-500 hover:bg-lime-700 transition text-white font-semibold rounded-full">

            <IconPlus
              stroke-width="3"
              stroke="currentColor" />

            <span>
              Create Project
            </span>

          </Link>

        </p>

      </article>

    @endforelse

  </section>

</x-app-layout>

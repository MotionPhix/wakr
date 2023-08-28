<x-app-layout>

  <x-slot:header>

    <Link
      href="{{ route('contacts.index') }}"
      class="text-lg flex items-center p-1 font-semibold hover:text-lime-900">

      <IconArrowLeft class="w-5 h-5" />

      <span>All Contacts</span>

    </Link>

    <span class="flex-1"></span>

    <Link
      class="flex items-center mr-1 font-semibold text-lime-600 hover:text-lime-800"
      href="{{ route('contacts.edit', $contact) }}"
      modal>

      <IconPencil class="w-5 h-5" />

      <span class="hidden sm:inline-flex px-2">
        Update
      </span>

    </Link>

    <Link
      class="flex items-center font-semibold text-rose-600 hover:text-rose-800"
      href="{{ route('contacts.destroy', $contact) }}"
      confirm-text="Really delete this contact?"
      confirm="{{ 'Delete ' . $contact->full_name }}"
      confirm-button="Yes! Why not?"
      cancel-button="No! Wait a minute"
      method="delete">

      <IconTrash class="w-5 h-5" />

      <span class="hidden sm:inline-flex px-2">

        Delete

      </span>

    </Link>

  </x-slot>

  <section class="max-w-2xl mx-auto my-12">

    <div class="pb-8 border-b">

      <h1 class="mb-4 text-4xl font-medium">
        {{ $contact->company->name }}
      </h1>

      @isset($contact->company->bio)

        <p class="font-medium">
          {{ $contact->company->bio }}
        </p>

      @endisset

      <section class="my-8 flex gap-4 items-center">

        <IconUser class="w-12 h-12 bg-rose-300 rounded-full" />

        <div class="flex flex-col">

          <p class="font-medium flex items-center gap-4">

            <span>
              {{ $contact->full_name }}
            </span>

            <span class="h-2 w-2 rounded-full {{ $contact->status === 'active' ? 'bg-green-500' : 'bg-rose-500' }}" />

            <span class="text-gray-500">{{ $contact->email }}</span>
          </p>

          <span class="text-xs text-gray-500">

            Added {{ $contact->created_at->diffForHumans() }}

          </span>

        </div>

      </section>

    </div>

  </section>
</x-app-layout>

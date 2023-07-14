<x-card class="my-4">
  <Link 
    href="#" class="group transition relative">
    <span class="absolute left-2 z-40 top first-letter:-5">
      <svg 
        width="20" 
        height="20" 
        fill="none" 
        aria-hidden="true"
        viewBox="0 0 10 10" 
        class="mt-0.5 ml-2 -mr-1 stroke-primary stroke-2">
        <path class="opacity-0 transition group-hover:opacity-100" d="M0 5h7" />
        <path class="opacity-0 transition delay-75 group-hover:translate-x-[3px] group-hover:opacity-100" d="M1 1l4 4-4 4" />
      </svg>
    </span>

    <img 
      class="rounded-lg" 
      src="{{ asset('storage/posts/' . $post->image->path) }}"
      alt="{{ $post->title }}" />
  </Link>

  <div class="flex items-center justify-between">
    <h2 class="font-bold text-lg">{{ $post->title }}</h2>

    <p class="text-gray-300 font-bold">
      Posted:
      <span class="text-gray-500">
        {{ $post->created_at->diffForHumans() }}
      </span>
    </p>
  </div>
</x-card>

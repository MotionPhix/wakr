{{-- <section 
  class="relative bg-lime-500 flex flex-col justify-center align-center space-y-4 mb-4 px-10">

  <div 
    class="absolute top-0 left-0 w-full h-full opacity-10 bg-no-repeat bg-center bg-cover" style="background-image: url({{ asset('logos/ultra_logo.png') }})" />

<article class="mx-auto max-w-6xl w-full">
  <div class="flex items-center gap-2 relative z-10">
    <img src="{{ asset('logos/ultra_logo.png') }}" alt="ultraposts logo" class="w-6 h-6">

    <h1 class="font-bold text-2xl text-slate-900">
      ultraposts
    </h1>
  </div>

  <div class="py-8 relative z-50">
    <p class="flex gap-3 font-semibold text-lime-800 items-center py-5">
      <span>
        292+ posts
      </span>

      <span>
        &middot;
      </span>

      <span>
        Govt recognised
      </span>

      <span>
        &middot;
      </span>

      <span>
        Verified designers
      </span>
    </p>

    <p class="font-extrabold text-4xl leading-tight max-w-2xl">
      Find or post graphic designer jobs
    </p>

    <div class="py-8 flex gap-4">

      <Link href="{{ route('register') }}" class="group inline-flex items-center rounded-full bg-slate-900 px-4 py-1.5 font-semibold text-white transition hover:bg-slate-700">
      Sign up now
      <svg class="mt-0.5 ml-2 -mr-1 stroke-white stroke-2" fill="none" width="10" height="10" viewBox="0 0 10 10" aria-hidden="true">
        <path class="opacity-0 transition group-hover:opacity-100" d="M0 5h7" />
        <path class="transition group-hover:translate-x-[3px]" d="M1 1l4 4-4 4" />
      </svg>
      </Link>

      <Link href="{{ route('login') }}" class="group inline-flex items-center rounded-full border-2 border-slate-900 px-4 py-1.5 font-semibold text-slate-900 hover:text-slate-700 transition hover:border-slate-700">
      Login
      </Link>

    </div>
  </div>
</article>

</section> --}}



{{-- <section class="bg-blueGray-50">
  <div class="container mx-auto overflow-hidden">
    <div class="flex items-center justify-between px-4 py-5 bg-blueGray-50">
      <div class="w-auto">
        <div class="flex flex-wrap items-center">
          <div class="w-auto mr-14">
            <a href="#">
              <img src="flaro-assets/logos/flaro-logo-black.svg" alt="">
            </a>
          </div>
        </div>
      </div>
      <div class="w-auto">
        <div class="flex flex-wrap items-center">
          <div class="w-auto hidden lg:block">
            <ul class="flex items-center mr-16">
              <li class="mr-9 font-medium hover:text-gray-700"><a href="#">Features</a></li>
              <li class="mr-9 font-medium hover:text-gray-700"><a href="#">Solutions</a></li>
              <li class="mr-9 font-medium hover:text-gray-700"><a href="#">Resources</a></li>
              <li class="font-medium hover:text-gray-700"><a href="#">Pricing</a></li>
            </ul>
          </div>
          <div class="w-auto hidden lg:block">
            <div class="inline-block">
              <button class="py-3 px-5 w-full text-white font-semibold border border-indigo-700 rounded-xl focus:ring focus:ring-indigo-300 bg-indigo-600 hover:bg-indigo-700 transition ease-in-out duration-200" type="button">Try 14 Days Free Trial</button>
            </div>
          </div>
          <div class="w-auto lg:hidden">
            <a href="#">
              <svg class="navbar-burger text-indigo-600" width="51" height="51" viewbox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect width="56" height="56" rx="28" fill="currentColor"></rect>
                <path d="M37 32H19M37 24H19" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
              </svg>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="hidden navbar-menu fixed top-0 left-0 bottom-0 w-4/6 sm:max-w-xs z-50">
      <div class="navbar-backdrop fixed inset-0 bg-gray-800 opacity-80"></div>
      <nav class="relative z-10 px-9 pt-8 bg-white h-full overflow-y-auto">
        <div class="flex flex-wrap justify-between h-full">
          <div class="w-full">
            <div class="flex items-center justify-between -m-2">
              <div class="w-auto p-2">
                <a class="inline-block" href="#">
                  <img src="flaro-assets/logos/flaro-logo-black.svg" alt="">
                </a>
              </div>
              <div class="w-auto p-2">
                <a class="navbar-burger" href="#">
                  <svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6 18L18 6M6 6L18 18" stroke="#111827" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                  </svg>
                </a>
              </div>
            </div>
          </div>
          <div class="flex flex-col justify-center py-16 w-full">
            <ul>
              <li class="mb-12"><a class="font-medium hover:text-gray-700" href="#">Features</a></li>
              <li class="mb-12"><a class="font-medium hover:text-gray-700" href="#">Solutions</a></li>
              <li class="mb-12"><a class="font-medium hover:text-gray-700" href="#">Resources</a></li>
              <li><a class="font-medium hover:text-gray-700" href="#">Pricing</a></li>
            </ul>
          </div>
          <div class="flex flex-col justify-end w-full pb-8">
            <div class="flex flex-wrap">
              <div class="w-full">
                <div class="block">
                  <button class="py-3 px-5 w-full text-white font-semibold border border-indigo-700 rounded-xl focus:ring focus:ring-indigo-300 bg-indigo-600 hover:bg-indigo-700 transition ease-in-out duration-200" type="button">Try 14 Days Free Trial</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </nav>
    </div>
  </div>
  <div class="overflow-hidden pt-16">
    <div class="container px-4 mx-auto">
      <div class="flex flex-wrap -m-8">
        <div class="w-full md:w-1/2 p-8">
          <div class="inline-block mb-6 px-2 py-1 font-semibold bg-green-100 rounded-full">
            <div class="flex flex-wrap items-center -m-1">
              <div class="w-auto p-1"><a class="text-sm" href="">&#x1F44B; We are hiring! View open roles</a></div>
              <div class="w-auto p-1">
                <svg width="15" height="15" viewbox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M8.66667 3.41675L12.75 7.50008M12.75 7.50008L8.66667 11.5834M12.75 7.50008L2.25 7.50008" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
              </div>
            </div>
          </div>
          <h1 class="mb-6 text-6xl md:text-8xl lg:text-10xl font-bold font-heading md:max-w-xl leading-none">Discover mentors that helps you grow</h1>
          <p class="mb-11 text-lg text-gray-900 font-medium md:max-w-md">Get the best-in-class group mentoring plans and professional benefits for your team</p>
          <div class="flex flex-wrap -m-2.5 mb-20">
            <div class="w-full md:w-auto p-2.5">
              <div class="block">
                <button class="py-4 px-6 w-full text-white font-semibold border border-indigo-700 rounded-xl focus:ring focus:ring-indigo-300 bg-indigo-600 hover:bg-indigo-700 transition ease-in-out duration-200" type="button">Join Free for 30 Days</button>
              </div>
            </div>
            <div class="w-full md:w-auto p-2.5">
              <div class="block">
                <button class="py-4 px-9 w-full font-semibold border border-gray-300 hover:border-gray-400 rounded-xl focus:ring focus:ring-gray-50 bg-transparent hover:bg-gray-100 transition ease-in-out duration-200" type="button">
                  <div class="flex flex-wrap justify-center items-center -m-1">
                    <div class="w-auto p-1">
                      <svg width="19" height="18" viewbox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2.75 3.75C2.75 2.92157 3.42157 2.25 4.25 2.25H6.70943C7.03225 2.25 7.31886 2.45657 7.42094 2.76283L8.5443 6.13291C8.66233 6.48699 8.50203 6.87398 8.1682 7.0409L6.47525 7.88737C7.30194 9.72091 8.77909 11.1981 10.6126 12.0247L11.4591 10.3318C11.626 9.99796 12.013 9.83767 12.3671 9.9557L15.7372 11.0791C16.0434 11.1811 16.25 11.4677 16.25 11.7906V14.25C16.25 15.0784 15.5784 15.75 14.75 15.75H14C7.7868 15.75 2.75 10.7132 2.75 4.5V3.75Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                      </svg>
                    </div>
                    <div class="w-auto p-1">
                      <span>Book a call</span>
                    </div>
                  </div>
                </button>
              </div>
            </div>
          </div>
          <p class="mb-6 text-sm text-gray-500 font-semibold uppercase">Trusted and loved by 100+ tech first teams</p>
          <div class="flex flex-wrap -m-3">
            <div class="w-auto p-3">
              <img src="flaro-assets/logos/brands/brand.png" alt="">
            </div>
            <div class="w-auto p-3">
              <img src="flaro-assets/logos/brands/brand2.png" alt="">
            </div>
            <div class="w-auto p-3">
              <img src="flaro-assets/logos/brands/brand3.png" alt="">
            </div>
          </div>
        </div>
        <div class="w-full md:w-1/2 p-8">
          <img class="transform hover:-translate-y-16 transition ease-in-out duration-1000" src="{{ asset('previews/header.png') }}" alt="">
</div>
</div>
</div>
</div>
</section> --}}



{{-- <section class="py-3">
  <div class="container px-4 mx-auto">
    <div class="flex flex-wrap -mx-3 -mb-8">
      <div class="w-full md:w-1/2 lg:w-1/4 px-3 mb-8">
        <div class="max-w-sm mx-auto h-full px-4 pt-6 pb-24 bg-gray-500 rounded-xl">
          <div class="flex items-center justify-between mb-3">
            <div class="flex items-center">
              <h3 class="text-lg text-white font-semibold mr-2">To do</h3>
              <span class="inline-flex items-center justify-center w-6 h-7 rounded-full bg-gray-600 text-xs font-medium text-gray-400">3</span>
            </div>
            <div>
              <button class="inline-block mr-2 text-gray-400 hover:text-gray-300">
                <svg width="12" height="12" viewbox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M10.6667 5.33329H6.66675V1.33329C6.66675 1.15648 6.59651 0.986913 6.47149 0.861888C6.34646 0.736864 6.17689 0.666626 6.00008 0.666626C5.82327 0.666626 5.6537 0.736864 5.52868 0.861888C5.40365 0.986913 5.33342 1.15648 5.33342 1.33329V5.33329H1.33341C1.1566 5.33329 0.987035 5.40353 0.86201 5.52855C0.736986 5.65358 0.666748 5.82315 0.666748 5.99996C0.666748 6.17677 0.736986 6.34634 0.86201 6.47136C0.987035 6.59639 1.1566 6.66663 1.33341 6.66663H5.33342V10.6666C5.33342 10.8434 5.40365 11.013 5.52868 11.138C5.6537 11.2631 5.82327 11.3333 6.00008 11.3333C6.17689 11.3333 6.34646 11.2631 6.47149 11.138C6.59651 11.013 6.66675 10.8434 6.66675 10.6666V6.66663H10.6667C10.8436 6.66663 11.0131 6.59639 11.1382 6.47136C11.2632 6.34634 11.3334 6.17677 11.3334 5.99996C11.3334 5.82315 11.2632 5.65358 11.1382 5.52855C11.0131 5.40353 10.8436 5.33329 10.6667 5.33329Z" fill="currentColor"></path>
                </svg>
              </button>
              <a class="inline-block py-1 text-gray-400 hover:text-gray-300" href="#">
                <svg width="12" height="4" viewbox="0 0 12 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M6 0.666626C5.73629 0.666626 5.47851 0.744825 5.25924 0.891333C5.03998 1.03784 4.86908 1.24608 4.76816 1.48971C4.66724 1.73335 4.64084 2.00144 4.69229 2.26008C4.74373 2.51872 4.87072 2.7563 5.05719 2.94277C5.24366 3.12924 5.48124 3.25623 5.73988 3.30767C5.99852 3.35912 6.26661 3.33272 6.51025 3.2318C6.75388 3.13088 6.96212 2.95998 7.10863 2.74072C7.25514 2.52145 7.33333 2.26367 7.33333 1.99996C7.33333 1.64634 7.19286 1.3072 6.94281 1.05715C6.69276 0.807102 6.35362 0.666626 6 0.666626ZM1.33333 0.666626C1.06963 0.666626 0.811839 0.744825 0.592574 0.891333C0.373308 1.03784 0.202411 1.24608 0.101495 1.48971C0.000577708 1.73335 -0.0258267 2.00144 0.0256202 2.26008C0.0770672 2.51872 0.204055 2.7563 0.390525 2.94277C0.576995 3.12924 0.814572 3.25623 1.07321 3.30767C1.33185 3.35912 1.59994 3.33272 1.84358 3.2318C2.08721 3.13088 2.29545 2.95998 2.44196 2.74072C2.58847 2.52145 2.66667 2.26367 2.66667 1.99996C2.66667 1.64634 2.52619 1.3072 2.27614 1.05715C2.02609 0.807102 1.68696 0.666626 1.33333 0.666626ZM10.6667 0.666626C10.403 0.666626 10.1452 0.744825 9.92591 0.891333C9.70664 1.03784 9.53574 1.24608 9.43483 1.48971C9.33391 1.73335 9.30751 2.00144 9.35895 2.26008C9.4104 2.51872 9.53739 2.7563 9.72386 2.94277C9.91033 3.12924 10.1479 3.25623 10.4065 3.30767C10.6652 3.35912 10.9333 3.33272 11.1769 3.2318C11.4205 3.13088 11.6288 2.95998 11.7753 2.74072C11.9218 2.52145 12 2.26367 12 1.99996C12 1.64634 11.8595 1.3072 11.6095 1.05715C11.3594 0.807102 11.0203 0.666626 10.6667 0.666626Z" fill="currentColor"></path>
                </svg>
              </a>
            </div>
          </div>
          <div class="h-1 w-full mb-4 rounded-full bg-purple-500"></div>
          <a class="block p-4 mb-4 bg-gray-600 rounded-xl hover:bg-gray-700 transition duration-200" href="#">
            <h4 class="text-white font-semibold leading-6 mb-1">Implement Login</h4>
            <div class="flex items-center mb-4">
              <span class="h-2 w-2 mr-1 bg-pink-400 rounded-full"></span>
              <span class="text-xs font-medium text-pink-400">Development</span>
            </div>
            <p class="text-xs text-gray-300 leading-normal mb-10">This is an example task that can be used within a Kanban system.</p>
            <div class="pt-4 border-t border-gray-500">
              <div class="flex flex-wrap items-center justify-between -m-2">
                <div class="w-auto p-2">
                  <div class="flex items-center p-2 bg-gray-500 rounded-md">
                    <svg width="14" height="14" viewbox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M11.0001 2.33337H3.00008C2.2637 2.33337 1.66675 2.93033 1.66675 3.66671V11.6667C1.66675 12.4031 2.2637 13 3.00008 13H11.0001C11.7365 13 12.3334 12.4031 12.3334 11.6667V3.66671C12.3334 2.93033 11.7365 2.33337 11.0001 2.33337Z" stroke="#3D485B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                      <path d="M9.66675 1V3.66667" stroke="#3D485B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                      <path d="M4.3335 1V3.66667" stroke="#3D485B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                      <path d="M1.66675 6.33337H12.3334" stroke="#3D485B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                      <path d="M6.3335 9H7.00016" stroke="#3D485B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                      <path d="M7 9V11" stroke="#3D485B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                    <span class="ml-2 text-xs font-medium text-gray-200">Jul 03</span>
                  </div>
                </div>
                <div class="w-auto p-2">
                  <div class="flex h-full items-center">
                    <img class="w-7 h-7 rounded-full object-cover" src="trizzle-assets/images/avatar-men-circle-border.png" alt="">
                    <img class="w-7 h-7 -ml-3 rounded-full object-cover" src="trizzle-assets/images/avatar-women-circle-border.png" alt="">
                  </div>
                </div>
              </div>
            </div>
          </a>
          <a class="block p-4 mb-4 bg-gray-600 rounded-xl hover:bg-gray-700 transition duration-200" href="#">
            <h4 class="text-white font-semibold leading-6 mb-1">Release MVP</h4>
            <div class="flex items-center mb-4">
              <span class="h-2 w-2 mr-1 bg-green-500 rounded-full"></span>
              <span class="text-xs font-medium text-green-500">Planning</span>
            </div>
            <p class="text-xs text-gray-300 leading-normal mb-10">This is an example task that can be used within a Kanban system.</p>
            <div class="pt-4 border-t border-gray-500">
              <div class="flex flex-wrap items-center justify-between -m-2">
                <div class="w-auto p-2">
                  <div class="flex items-center p-2 bg-gray-500 rounded-md">
                    <svg width="14" height="14" viewbox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M11.0001 2.33337H3.00008C2.2637 2.33337 1.66675 2.93033 1.66675 3.66671V11.6667C1.66675 12.4031 2.2637 13 3.00008 13H11.0001C11.7365 13 12.3334 12.4031 12.3334 11.6667V3.66671C12.3334 2.93033 11.7365 2.33337 11.0001 2.33337Z" stroke="#3D485B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                      <path d="M9.66675 1V3.66667" stroke="#3D485B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                      <path d="M4.3335 1V3.66667" stroke="#3D485B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                      <path d="M1.66675 6.33337H12.3334" stroke="#3D485B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                      <path d="M6.3335 9H7.00016" stroke="#3D485B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                      <path d="M7 9V11" stroke="#3D485B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                    <span class="ml-2 text-xs font-medium text-gray-200">Jul 04</span>
                  </div>
                </div>
                <div class="w-auto p-2">
                  <div class="flex h-full items-center">
                    <img class="w-7 h-7 rounded-full object-cover" src="trizzle-assets/images/avatar-women-2-circle-border.png" alt="">
                    <img class="w-7 h-7 -ml-3 rounded-full object-cover" src="trizzle-assets/images/avatar-women-3-circle-border.png" alt="">
                  </div>
                </div>
              </div>
            </div>
          </a>
          <a class="block p-4 mb-4 bg-gray-600 rounded-xl hover:bg-gray-700 transition duration-200" href="#">
            <h4 class="text-white font-semibold leading-6 mb-1">Design Review</h4>
            <div class="flex items-center mb-4">
              <span class="h-2 w-2 mr-1 bg-purple-500 rounded-full"></span>
              <span class="text-xs font-medium text-purple-500">Design</span>
            </div>
            <div class="pt-4 border-t border-gray-500">
              <div class="flex flex-wrap items-center justify-between -m-2">
                <div class="w-auto p-2">
                  <div class="flex items-center p-2 bg-gray-500 rounded-md">
                    <svg width="14" height="14" viewbox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M11.0001 2.33337H3.00008C2.2637 2.33337 1.66675 2.93033 1.66675 3.66671V11.6667C1.66675 12.4031 2.2637 13 3.00008 13H11.0001C11.7365 13 12.3334 12.4031 12.3334 11.6667V3.66671C12.3334 2.93033 11.7365 2.33337 11.0001 2.33337Z" stroke="#3D485B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                      <path d="M9.66675 1V3.66667" stroke="#3D485B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                      <path d="M4.3335 1V3.66667" stroke="#3D485B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                      <path d="M1.66675 6.33337H12.3334" stroke="#3D485B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                      <path d="M6.3335 9H7.00016" stroke="#3D485B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                      <path d="M7 9V11" stroke="#3D485B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                    <span class="ml-2 text-xs font-medium text-gray-200">Jul 05</span>
                  </div>
                </div>
                <div class="w-auto p-2">
                  <div class="inline-flex items-center justify-center w-8 h-8 bg-gray-500 rounded-full">
                    <svg width="14" height="14" viewbox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M9.47333 7.47332C10.1269 6.95909 10.604 6.25393 10.8382 5.45594C11.0723 4.65796 11.0519 3.80682 10.7799 3.02096C10.5078 2.23509 9.9975 1.55358 9.32005 1.07122C8.64259 0.588861 7.83163 0.329651 7 0.329651C6.16836 0.329651 5.35741 0.588861 4.67995 1.07122C4.0025 1.55358 3.49223 2.23509 3.22014 3.02096C2.94805 3.80682 2.92767 4.65796 3.16184 5.45594C3.396 6.25393 3.87307 6.95909 4.52666 7.47332C3.40672 7.92201 2.42952 8.66621 1.69926 9.62659C0.968996 10.587 0.51304 11.7275 0.379998 12.9266C0.370368 13.0142 0.378075 13.1028 0.402681 13.1874C0.427287 13.2719 0.468309 13.3508 0.523405 13.4195C0.634677 13.5583 0.79652 13.6472 0.973331 13.6666C1.15014 13.6861 1.32744 13.6345 1.46621 13.5232C1.60499 13.412 1.69388 13.2501 1.71333 13.0733C1.85972 11.7701 2.48112 10.5665 3.45881 9.69251C4.4365 8.8185 5.70193 8.33533 7.01333 8.33533C8.32473 8.33533 9.59016 8.8185 10.5679 9.69251C11.5455 10.5665 12.1669 11.7701 12.3133 13.0733C12.3315 13.2371 12.4096 13.3884 12.5327 13.498C12.6559 13.6076 12.8152 13.6676 12.98 13.6666H13.0533C13.2281 13.6465 13.3878 13.5582 13.4977 13.4208C13.6076 13.2835 13.6587 13.1082 13.64 12.9333C13.5063 11.7308 13.0479 10.5873 12.3139 9.62545C11.5799 8.6636 10.5979 7.91963 9.47333 7.47332ZM7 6.99998C6.47258 6.99998 5.95701 6.84358 5.51848 6.55057C5.07995 6.25755 4.73815 5.84107 4.53632 5.3538C4.33449 4.86653 4.28168 4.33036 4.38457 3.81307C4.48746 3.29579 4.74144 2.82064 5.11438 2.4477C5.48732 2.07476 5.96247 1.82078 6.47976 1.71789C6.99704 1.61499 7.53322 1.6678 8.02049 1.86964C8.50776 2.07147 8.92423 2.41326 9.21725 2.85179C9.51027 3.29033 9.66667 3.8059 9.66667 4.33331C9.66667 5.04056 9.38571 5.71884 8.88562 6.21893C8.38552 6.71903 7.70724 6.99998 7 6.99998Z" fill="#3D485B"></path>
                    </svg>
                  </div>
                </div>
              </div>
            </div>
          </a>
        </div>
      </div>
      <div class="w-full md:w-1/2 lg:w-1/4 px-3 mb-8">
        <div class="max-w-sm mx-auto h-full px-4 pt-6 pb-24 bg-gray-500 rounded-xl">
          <div class="flex items-center justify-between mb-3">
            <div class="flex items-center">
              <h3 class="text-lg text-white font-semibold mr-2">In progress</h3>
              <span class="inline-flex items-center justify-center w-6 h-7 rounded-full bg-gray-600 text-xs font-medium text-gray-400">2</span>
            </div>
            <div>
              <button class="inline-block mr-2 text-gray-400 hover:text-gray-300">
                <svg width="12" height="12" viewbox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M10.6667 5.33329H6.66675V1.33329C6.66675 1.15648 6.59651 0.986913 6.47149 0.861888C6.34646 0.736864 6.17689 0.666626 6.00008 0.666626C5.82327 0.666626 5.6537 0.736864 5.52868 0.861888C5.40365 0.986913 5.33342 1.15648 5.33342 1.33329V5.33329H1.33341C1.1566 5.33329 0.987035 5.40353 0.86201 5.52855C0.736986 5.65358 0.666748 5.82315 0.666748 5.99996C0.666748 6.17677 0.736986 6.34634 0.86201 6.47136C0.987035 6.59639 1.1566 6.66663 1.33341 6.66663H5.33342V10.6666C5.33342 10.8434 5.40365 11.013 5.52868 11.138C5.6537 11.2631 5.82327 11.3333 6.00008 11.3333C6.17689 11.3333 6.34646 11.2631 6.47149 11.138C6.59651 11.013 6.66675 10.8434 6.66675 10.6666V6.66663H10.6667C10.8436 6.66663 11.0131 6.59639 11.1382 6.47136C11.2632 6.34634 11.3334 6.17677 11.3334 5.99996C11.3334 5.82315 11.2632 5.65358 11.1382 5.52855C11.0131 5.40353 10.8436 5.33329 10.6667 5.33329Z" fill="currentColor"></path>
                </svg>
              </button>
              <a class="inline-block py-1 text-gray-400 hover:text-gray-300" href="#">
                <svg width="12" height="4" viewbox="0 0 12 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M6 0.666626C5.73629 0.666626 5.47851 0.744825 5.25924 0.891333C5.03998 1.03784 4.86908 1.24608 4.76816 1.48971C4.66724 1.73335 4.64084 2.00144 4.69229 2.26008C4.74373 2.51872 4.87072 2.7563 5.05719 2.94277C5.24366 3.12924 5.48124 3.25623 5.73988 3.30767C5.99852 3.35912 6.26661 3.33272 6.51025 3.2318C6.75388 3.13088 6.96212 2.95998 7.10863 2.74072C7.25514 2.52145 7.33333 2.26367 7.33333 1.99996C7.33333 1.64634 7.19286 1.3072 6.94281 1.05715C6.69276 0.807102 6.35362 0.666626 6 0.666626ZM1.33333 0.666626C1.06963 0.666626 0.811839 0.744825 0.592574 0.891333C0.373308 1.03784 0.202411 1.24608 0.101495 1.48971C0.000577708 1.73335 -0.0258267 2.00144 0.0256202 2.26008C0.0770672 2.51872 0.204055 2.7563 0.390525 2.94277C0.576995 3.12924 0.814572 3.25623 1.07321 3.30767C1.33185 3.35912 1.59994 3.33272 1.84358 3.2318C2.08721 3.13088 2.29545 2.95998 2.44196 2.74072C2.58847 2.52145 2.66667 2.26367 2.66667 1.99996C2.66667 1.64634 2.52619 1.3072 2.27614 1.05715C2.02609 0.807102 1.68696 0.666626 1.33333 0.666626ZM10.6667 0.666626C10.403 0.666626 10.1452 0.744825 9.92591 0.891333C9.70664 1.03784 9.53574 1.24608 9.43483 1.48971C9.33391 1.73335 9.30751 2.00144 9.35895 2.26008C9.4104 2.51872 9.53739 2.7563 9.72386 2.94277C9.91033 3.12924 10.1479 3.25623 10.4065 3.30767C10.6652 3.35912 10.9333 3.33272 11.1769 3.2318C11.4205 3.13088 11.6288 2.95998 11.7753 2.74072C11.9218 2.52145 12 2.26367 12 1.99996C12 1.64634 11.8595 1.3072 11.6095 1.05715C11.3594 0.807102 11.0203 0.666626 10.6667 0.666626Z" fill="currentColor"></path>
                </svg>
              </a>
            </div>
          </div>
          <div class="h-1 w-full mb-4 rounded-full bg-blue-500"></div>
          <a class="block p-4 mb-4 bg-gray-600 rounded-xl hover:bg-gray-700 transition duration-200" href="#">
            <h4 class="text-white font-semibold leading-6 mb-1">UI Adjustments</h4>
            <div class="flex items-center mb-4">
              <span class="h-2 w-2 mr-1 bg-purple-500 rounded-full"></span>
              <span class="text-xs font-medium text-purple-500">Design</span>
            </div>
            <p class="text-xs text-gray-300 leading-normal mb-10">This is an example task that can be used within a Kanban system.</p>
            <div class="pt-4 border-t border-gray-500">
              <div class="flex flex-wrap items-center justify-between -m-2">
                <div class="w-auto p-2">
                  <div class="flex items-center p-2 bg-gray-500 rounded-md">
                    <svg width="14" height="14" viewbox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M11.0001 2.33337H3.00008C2.2637 2.33337 1.66675 2.93033 1.66675 3.66671V11.6667C1.66675 12.4031 2.2637 13 3.00008 13H11.0001C11.7365 13 12.3334 12.4031 12.3334 11.6667V3.66671C12.3334 2.93033 11.7365 2.33337 11.0001 2.33337Z" stroke="#3D485B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                      <path d="M9.66675 1V3.66667" stroke="#3D485B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                      <path d="M4.3335 1V3.66667" stroke="#3D485B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                      <path d="M1.66675 6.33337H12.3334" stroke="#3D485B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                      <path d="M6.3335 9H7.00016" stroke="#3D485B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                      <path d="M7 9V11" stroke="#3D485B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                    <span class="ml-2 text-xs font-medium text-gray-200">Jul 03</span>
                  </div>
                </div>
                <div class="w-auto p-2">
                  <div class="flex h-full items-center">
                    <img class="w-7 h-7 rounded-full object-cover" src="trizzle-assets/images/avatar-women-3-circle-border.png" alt="">
                    <img class="w-7 h-7 -ml-3 rounded-full object-cover" src="trizzle-assets/images/avatar-women-circle-border.png" alt="">
                  </div>
                </div>
              </div>
            </div>
          </a>
          <a class="block p-4 mb-4 bg-gray-600 rounded-xl hover:bg-gray-700 transition duration-200" href="#">
            <h4 class="text-white font-semibold leading-6 mb-1">Design Review</h4>
            <div class="flex items-center mb-4">
              <span class="h-2 w-2 mr-1 bg-purple-500 rounded-full"></span>
              <span class="text-xs font-medium text-purple-500">Design</span>
            </div>
            <div class="pt-4 border-t border-gray-500">
              <div class="flex flex-wrap items-center justify-between -m-2">
                <div class="w-auto p-2">
                  <div class="flex items-center p-2 bg-gray-500 rounded-md">
                    <svg width="14" height="14" viewbox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M11.0001 2.33337H3.00008C2.2637 2.33337 1.66675 2.93033 1.66675 3.66671V11.6667C1.66675 12.4031 2.2637 13 3.00008 13H11.0001C11.7365 13 12.3334 12.4031 12.3334 11.6667V3.66671C12.3334 2.93033 11.7365 2.33337 11.0001 2.33337Z" stroke="#3D485B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                      <path d="M9.66675 1V3.66667" stroke="#3D485B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                      <path d="M4.3335 1V3.66667" stroke="#3D485B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                      <path d="M1.66675 6.33337H12.3334" stroke="#3D485B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                      <path d="M6.3335 9H7.00016" stroke="#3D485B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                      <path d="M7 9V11" stroke="#3D485B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                    <span class="ml-2 text-xs font-medium text-gray-200">Jul 05</span>
                  </div>
                </div>
                <div class="w-auto p-2">
                  <div class="inline-flex items-center justify-center w-8 h-8 bg-gray-500 rounded-full">
                    <svg width="14" height="14" viewbox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M9.47333 7.47332C10.1269 6.95909 10.604 6.25393 10.8382 5.45594C11.0723 4.65796 11.0519 3.80682 10.7799 3.02096C10.5078 2.23509 9.9975 1.55358 9.32005 1.07122C8.64259 0.588861 7.83163 0.329651 7 0.329651C6.16836 0.329651 5.35741 0.588861 4.67995 1.07122C4.0025 1.55358 3.49223 2.23509 3.22014 3.02096C2.94805 3.80682 2.92767 4.65796 3.16184 5.45594C3.396 6.25393 3.87307 6.95909 4.52666 7.47332C3.40672 7.92201 2.42952 8.66621 1.69926 9.62659C0.968996 10.587 0.51304 11.7275 0.379998 12.9266C0.370368 13.0142 0.378075 13.1028 0.402681 13.1874C0.427287 13.2719 0.468309 13.3508 0.523405 13.4195C0.634677 13.5583 0.79652 13.6472 0.973331 13.6666C1.15014 13.6861 1.32744 13.6345 1.46621 13.5232C1.60499 13.412 1.69388 13.2501 1.71333 13.0733C1.85972 11.7701 2.48112 10.5665 3.45881 9.69251C4.4365 8.8185 5.70193 8.33533 7.01333 8.33533C8.32473 8.33533 9.59016 8.8185 10.5679 9.69251C11.5455 10.5665 12.1669 11.7701 12.3133 13.0733C12.3315 13.2371 12.4096 13.3884 12.5327 13.498C12.6559 13.6076 12.8152 13.6676 12.98 13.6666H13.0533C13.2281 13.6465 13.3878 13.5582 13.4977 13.4208C13.6076 13.2835 13.6587 13.1082 13.64 12.9333C13.5063 11.7308 13.0479 10.5873 12.3139 9.62545C11.5799 8.6636 10.5979 7.91963 9.47333 7.47332ZM7 6.99998C6.47258 6.99998 5.95701 6.84358 5.51848 6.55057C5.07995 6.25755 4.73815 5.84107 4.53632 5.3538C4.33449 4.86653 4.28168 4.33036 4.38457 3.81307C4.48746 3.29579 4.74144 2.82064 5.11438 2.4477C5.48732 2.07476 5.96247 1.82078 6.47976 1.71789C6.99704 1.61499 7.53322 1.6678 8.02049 1.86964C8.50776 2.07147 8.92423 2.41326 9.21725 2.85179C9.51027 3.29033 9.66667 3.8059 9.66667 4.33331C9.66667 5.04056 9.38571 5.71884 8.88562 6.21893C8.38552 6.71903 7.70724 6.99998 7 6.99998Z" fill="#3D485B"></path>
                    </svg>
                  </div>
                </div>
              </div>
            </div>
          </a>
          <a class="block p-4 mb-4 bg-gray-600 rounded-xl hover:bg-gray-700 transition duration-200" href="#">
            <h4 class="text-white font-semibold leading-6 mb-1">Shuffle Improvements</h4>
            <div class="flex items-center mb-4">
              <span class="h-2 w-2 mr-1 bg-green-500 rounded-full"></span>
              <span class="text-xs font-medium text-green-500">Planning</span>
            </div>
            <img class="block w-full h-28 object-cover rounded-md mb-3" src="trizzle-assets/images/laptop-photo-placeholder.png" alt="">
            <p class="text-xs text-gray-300 mb-4">This is an example task that can be used within a Kanban system.</p>
            <div class="pt-4 border-t border-gray-500">
              <div class="flex flex-wrap items-center justify-between -m-2">
                <div class="w-auto p-2">
                  <div class="flex items-center p-2 bg-gray-500 rounded-md">
                    <svg width="14" height="14" viewbox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M11.0001 2.33337H3.00008C2.2637 2.33337 1.66675 2.93033 1.66675 3.66671V11.6667C1.66675 12.4031 2.2637 13 3.00008 13H11.0001C11.7365 13 12.3334 12.4031 12.3334 11.6667V3.66671C12.3334 2.93033 11.7365 2.33337 11.0001 2.33337Z" stroke="#3D485B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                      <path d="M9.66675 1V3.66667" stroke="#3D485B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                      <path d="M4.3335 1V3.66667" stroke="#3D485B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                      <path d="M1.66675 6.33337H12.3334" stroke="#3D485B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                      <path d="M6.3335 9H7.00016" stroke="#3D485B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                      <path d="M7 9V11" stroke="#3D485B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                    <span class="ml-2 text-xs font-medium text-gray-200">Jul 05</span>
                  </div>
                </div>
                <div class="w-auto p-2">
                  <div class="flex h-full items-center">
                    <img class="w-7 h-7 rounded-full object-cover" src="trizzle-assets/images/avatar-women-circle-border.png" alt="">
                    <img class="w-7 h-7 -ml-3 rounded-full object-cover" src="trizzle-assets/images/avatar-men-2-circle-border.png" alt="">
                  </div>
                </div>
              </div>
            </div>
          </a>
        </div>
      </div>
      <div class="w-full md:w-1/2 lg:w-1/4 px-3 mb-8">
        <div class="max-w-sm mx-auto h-full px-4 pt-6 pb-24 bg-gray-500 rounded-xl">
          <div class="flex items-center justify-between mb-3">
            <div class="flex items-center">
              <h3 class="text-lg text-white font-semibold mr-2">In Review</h3>
              <span class="inline-flex items-center justify-center w-6 h-7 rounded-full bg-gray-600 text-xs font-medium text-gray-400">10</span>
            </div>
            <div>
              <button class="inline-block mr-2 text-gray-400 hover:text-gray-300">
                <svg width="12" height="12" viewbox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M10.6667 5.33329H6.66675V1.33329C6.66675 1.15648 6.59651 0.986913 6.47149 0.861888C6.34646 0.736864 6.17689 0.666626 6.00008 0.666626C5.82327 0.666626 5.6537 0.736864 5.52868 0.861888C5.40365 0.986913 5.33342 1.15648 5.33342 1.33329V5.33329H1.33341C1.1566 5.33329 0.987035 5.40353 0.86201 5.52855C0.736986 5.65358 0.666748 5.82315 0.666748 5.99996C0.666748 6.17677 0.736986 6.34634 0.86201 6.47136C0.987035 6.59639 1.1566 6.66663 1.33341 6.66663H5.33342V10.6666C5.33342 10.8434 5.40365 11.013 5.52868 11.138C5.6537 11.2631 5.82327 11.3333 6.00008 11.3333C6.17689 11.3333 6.34646 11.2631 6.47149 11.138C6.59651 11.013 6.66675 10.8434 6.66675 10.6666V6.66663H10.6667C10.8436 6.66663 11.0131 6.59639 11.1382 6.47136C11.2632 6.34634 11.3334 6.17677 11.3334 5.99996C11.3334 5.82315 11.2632 5.65358 11.1382 5.52855C11.0131 5.40353 10.8436 5.33329 10.6667 5.33329Z" fill="currentColor"></path>
                </svg>
              </button>
              <a class="inline-block py-1 text-gray-400 hover:text-gray-300" href="#">
                <svg width="12" height="4" viewbox="0 0 12 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M6 0.666626C5.73629 0.666626 5.47851 0.744825 5.25924 0.891333C5.03998 1.03784 4.86908 1.24608 4.76816 1.48971C4.66724 1.73335 4.64084 2.00144 4.69229 2.26008C4.74373 2.51872 4.87072 2.7563 5.05719 2.94277C5.24366 3.12924 5.48124 3.25623 5.73988 3.30767C5.99852 3.35912 6.26661 3.33272 6.51025 3.2318C6.75388 3.13088 6.96212 2.95998 7.10863 2.74072C7.25514 2.52145 7.33333 2.26367 7.33333 1.99996C7.33333 1.64634 7.19286 1.3072 6.94281 1.05715C6.69276 0.807102 6.35362 0.666626 6 0.666626ZM1.33333 0.666626C1.06963 0.666626 0.811839 0.744825 0.592574 0.891333C0.373308 1.03784 0.202411 1.24608 0.101495 1.48971C0.000577708 1.73335 -0.0258267 2.00144 0.0256202 2.26008C0.0770672 2.51872 0.204055 2.7563 0.390525 2.94277C0.576995 3.12924 0.814572 3.25623 1.07321 3.30767C1.33185 3.35912 1.59994 3.33272 1.84358 3.2318C2.08721 3.13088 2.29545 2.95998 2.44196 2.74072C2.58847 2.52145 2.66667 2.26367 2.66667 1.99996C2.66667 1.64634 2.52619 1.3072 2.27614 1.05715C2.02609 0.807102 1.68696 0.666626 1.33333 0.666626ZM10.6667 0.666626C10.403 0.666626 10.1452 0.744825 9.92591 0.891333C9.70664 1.03784 9.53574 1.24608 9.43483 1.48971C9.33391 1.73335 9.30751 2.00144 9.35895 2.26008C9.4104 2.51872 9.53739 2.7563 9.72386 2.94277C9.91033 3.12924 10.1479 3.25623 10.4065 3.30767C10.6652 3.35912 10.9333 3.33272 11.1769 3.2318C11.4205 3.13088 11.6288 2.95998 11.7753 2.74072C11.9218 2.52145 12 2.26367 12 1.99996C12 1.64634 11.8595 1.3072 11.6095 1.05715C11.3594 0.807102 11.0203 0.666626 10.6667 0.666626Z" fill="currentColor"></path>
                </svg>
              </a>
            </div>
          </div>
          <div class="h-1 w-full mb-4 rounded-full bg-yellow-500"></div>
          <a class="block p-4 mb-4 bg-gray-600 rounded-xl hover:bg-gray-700 transition duration-200" href="#">
            <h4 class="text-white font-semibold leading-6 mb-1">Implement Login</h4>
            <div class="flex items-center mb-4">
              <span class="h-2 w-2 mr-1 bg-pink-400 rounded-full"></span>
              <span class="text-xs font-medium text-pink-400">Development</span>
            </div>
            <p class="text-xs text-gray-300 leading-normal mb-10">This is an example task that can be used within a Kanban system.</p>
            <div class="pt-4 border-t border-gray-500">
              <div class="flex flex-wrap items-center justify-between -m-2">
                <div class="w-auto p-2">
                  <div class="flex items-center p-2 bg-gray-500 rounded-md">
                    <svg width="14" height="14" viewbox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M11.0001 2.33337H3.00008C2.2637 2.33337 1.66675 2.93033 1.66675 3.66671V11.6667C1.66675 12.4031 2.2637 13 3.00008 13H11.0001C11.7365 13 12.3334 12.4031 12.3334 11.6667V3.66671C12.3334 2.93033 11.7365 2.33337 11.0001 2.33337Z" stroke="#3D485B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                      <path d="M9.66675 1V3.66667" stroke="#3D485B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                      <path d="M4.3335 1V3.66667" stroke="#3D485B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                      <path d="M1.66675 6.33337H12.3334" stroke="#3D485B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                      <path d="M6.3335 9H7.00016" stroke="#3D485B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                      <path d="M7 9V11" stroke="#3D485B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                    <span class="ml-2 text-xs font-medium text-gray-200">Jul 03</span>
                  </div>
                </div>
                <div class="w-auto p-2">
                  <div class="flex h-full items-center">
                    <img class="w-7 h-7 rounded-full object-cover" src="trizzle-assets/images/avatar-women-3-circle-border.png" alt="">
                    <img class="w-7 h-7 -ml-3 rounded-full object-cover" src="trizzle-assets/images/avatar-women-circle-border.png" alt="">
                  </div>
                </div>
              </div>
            </div>
          </a>
          <a class="block p-4 mb-4 bg-gray-600 rounded-xl hover:bg-gray-700 transition duration-200" href="#">
            <img class="block w-full h-28 object-cover rounded-md mb-3" src="trizzle-assets/images/working-women-laptop.png" alt="">
            <h4 class="text-white font-semibold leading-6 mb-1">Posts for Social Media</h4>
            <div class="flex items-center mb-4">
              <span class="h-2 w-2 mr-1 bg-blue-500 rounded-full"></span>
              <span class="text-xs font-medium text-blue-500">Design</span>
            </div>
            <div class="pt-4 border-t border-gray-500">
              <div class="flex flex-wrap items-center justify-between -m-2">
                <div class="w-auto p-2">
                  <div class="flex flex-wrap -m-1">
                    <div class="w-auto p-1">
                      <div class="inline-flex w-10 h-8 items-center py-1 px-2 bg-gray-400 rounded-lg">
                        <svg width="16" height="16" viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M6.66675 9.3333C6.884 9.55503 7.14331 9.73118 7.4295 9.85144C7.71568 9.9717 8.02299 10.0336 8.33341 10.0336C8.64384 10.0336 8.95114 9.9717 9.23733 9.85144C9.52352 9.73118 9.78283 9.55503 10.0001 9.3333L12.6667 6.66663C13.1088 6.22461 13.3571 5.62509 13.3571 4.99997C13.3571 4.37485 13.1088 3.77533 12.6667 3.3333C12.2247 2.89127 11.6252 2.64294 11.0001 2.64294C10.375 2.64294 9.77544 2.89127 9.33341 3.3333L9.00008 3.66663" stroke="#64748B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                          <path d="M9.33342 6.66665C9.11617 6.44492 8.85686 6.26876 8.57067 6.14851C8.28449 6.02825 7.97718 5.96631 7.66676 5.96631C7.35633 5.96631 7.04903 6.02825 6.76284 6.14851C6.47665 6.26876 6.21734 6.44492 6.00009 6.66665L3.33342 9.33332C2.89139 9.77534 2.64307 10.3749 2.64307 11C2.64307 11.6251 2.89139 12.2246 3.33342 12.6666C3.77545 13.1087 4.37497 13.357 5.00009 13.357C5.62521 13.357 6.22473 13.1087 6.66676 12.6666L7.00009 12.3333" stroke="#64748B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                        <span class="ml-1 text-xs text-white">2</span>
                      </div>
                    </div>
                    <div class="w-auto p-1">
                      <div class="inline-flex w-10 h-8 items-center py-1 px-2 bg-gray-400 rounded-lg">
                        <svg width="16" height="16" viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M2 13.3333L2.86667 10.7333C2.11763 9.62549 1.84666 8.31358 2.10415 7.04151C2.36163 5.76943 3.13004 4.62375 4.26651 3.81749C5.40298 3.01122 6.83017 2.59924 8.28273 2.65813C9.73528 2.71703 11.1143 3.24279 12.1635 4.13768C13.2127 5.03256 13.8606 6.23567 13.9867 7.52329C14.1128 8.81092 13.7086 10.0955 12.8492 11.1381C11.9899 12.1807 10.7338 12.9104 9.31453 13.1915C7.89529 13.4727 6.40947 13.2862 5.13333 12.6666L2 13.3333Z" stroke="#64748B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                          <path d="M8 8V8.00667" stroke="#64748B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                          <path d="M5.33325 8V8.00667" stroke="#64748B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                          <path d="M10.6667 8V8.00667" stroke="#64748B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                        <span class="ml-1 text-xs text-white">5</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="w-auto p-2">
                  <div class="flex h-full items-center">
                    <img class="w-7 h-7 rounded-full object-cover" src="trizzle-assets/images/avatar-women-3-circle-border.png" alt="">
                    <img class="w-7 h-7 -ml-3 rounded-full object-cover" src="trizzle-assets/images/avatar-women-circle-border.png" alt="">
                  </div>
                </div>
              </div>
            </div>
          </a>
          <a class="block p-4 mb-4 bg-gray-600 rounded-xl hover:bg-gray-700 transition duration-200" href="#">
            <h4 class="text-white font-semibold leading-6 mb-1">Design Review</h4>
            <div class="flex items-center mb-4">
              <span class="h-2 w-2 mr-1 bg-purple-500 rounded-full"></span>
              <span class="text-xs font-medium text-purple-500">Design</span>
            </div>
            <div class="pt-4 border-t border-gray-500">
              <div class="flex flex-wrap items-center justify-between -m-2">
                <div class="w-auto p-2">
                  <div class="flex items-center p-2 bg-gray-500 rounded-md">
                    <svg width="14" height="14" viewbox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M11.0001 2.33337H3.00008C2.2637 2.33337 1.66675 2.93033 1.66675 3.66671V11.6667C1.66675 12.4031 2.2637 13 3.00008 13H11.0001C11.7365 13 12.3334 12.4031 12.3334 11.6667V3.66671C12.3334 2.93033 11.7365 2.33337 11.0001 2.33337Z" stroke="#3D485B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                      <path d="M9.66675 1V3.66667" stroke="#3D485B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                      <path d="M4.3335 1V3.66667" stroke="#3D485B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                      <path d="M1.66675 6.33337H12.3334" stroke="#3D485B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                      <path d="M6.3335 9H7.00016" stroke="#3D485B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                      <path d="M7 9V11" stroke="#3D485B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                    <span class="ml-2 text-xs font-medium text-gray-200">Jul 05</span>
                  </div>
                </div>
                <div class="w-auto p-2">
                  <div class="inline-flex items-center justify-center w-8 h-8 bg-gray-500 rounded-full">
                    <svg width="14" height="14" viewbox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M9.47333 7.47332C10.1269 6.95909 10.604 6.25393 10.8382 5.45594C11.0723 4.65796 11.0519 3.80682 10.7799 3.02096C10.5078 2.23509 9.9975 1.55358 9.32005 1.07122C8.64259 0.588861 7.83163 0.329651 7 0.329651C6.16836 0.329651 5.35741 0.588861 4.67995 1.07122C4.0025 1.55358 3.49223 2.23509 3.22014 3.02096C2.94805 3.80682 2.92767 4.65796 3.16184 5.45594C3.396 6.25393 3.87307 6.95909 4.52666 7.47332C3.40672 7.92201 2.42952 8.66621 1.69926 9.62659C0.968996 10.587 0.51304 11.7275 0.379998 12.9266C0.370368 13.0142 0.378075 13.1028 0.402681 13.1874C0.427287 13.2719 0.468309 13.3508 0.523405 13.4195C0.634677 13.5583 0.79652 13.6472 0.973331 13.6666C1.15014 13.6861 1.32744 13.6345 1.46621 13.5232C1.60499 13.412 1.69388 13.2501 1.71333 13.0733C1.85972 11.7701 2.48112 10.5665 3.45881 9.69251C4.4365 8.8185 5.70193 8.33533 7.01333 8.33533C8.32473 8.33533 9.59016 8.8185 10.5679 9.69251C11.5455 10.5665 12.1669 11.7701 12.3133 13.0733C12.3315 13.2371 12.4096 13.3884 12.5327 13.498C12.6559 13.6076 12.8152 13.6676 12.98 13.6666H13.0533C13.2281 13.6465 13.3878 13.5582 13.4977 13.4208C13.6076 13.2835 13.6587 13.1082 13.64 12.9333C13.5063 11.7308 13.0479 10.5873 12.3139 9.62545C11.5799 8.6636 10.5979 7.91963 9.47333 7.47332ZM7 6.99998C6.47258 6.99998 5.95701 6.84358 5.51848 6.55057C5.07995 6.25755 4.73815 5.84107 4.53632 5.3538C4.33449 4.86653 4.28168 4.33036 4.38457 3.81307C4.48746 3.29579 4.74144 2.82064 5.11438 2.4477C5.48732 2.07476 5.96247 1.82078 6.47976 1.71789C6.99704 1.61499 7.53322 1.6678 8.02049 1.86964C8.50776 2.07147 8.92423 2.41326 9.21725 2.85179C9.51027 3.29033 9.66667 3.8059 9.66667 4.33331C9.66667 5.04056 9.38571 5.71884 8.88562 6.21893C8.38552 6.71903 7.70724 6.99998 7 6.99998Z" fill="#3D485B"></path>
                    </svg>
                  </div>
                </div>
              </div>
            </div>
          </a>
        </div>
      </div>
      <div class="w-full md:w-1/2 lg:w-1/4 px-3 mb-8">
        <div class="max-w-sm mx-auto h-full px-4 pt-6 pb-24 bg-gray-500 rounded-xl">
          <div class="flex items-center justify-between mb-3">
            <div class="flex items-center">
              <h3 class="text-lg text-white font-semibold mr-2">In progress</h3>
              <span class="inline-flex items-center justify-center w-6 h-7 rounded-full bg-gray-600 text-xs font-medium text-gray-400">2</span>
            </div>
            <div>
              <button class="inline-block mr-2 text-gray-400 hover:text-gray-300">
                <svg width="12" height="12" viewbox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M10.6667 5.33329H6.66675V1.33329C6.66675 1.15648 6.59651 0.986913 6.47149 0.861888C6.34646 0.736864 6.17689 0.666626 6.00008 0.666626C5.82327 0.666626 5.6537 0.736864 5.52868 0.861888C5.40365 0.986913 5.33342 1.15648 5.33342 1.33329V5.33329H1.33341C1.1566 5.33329 0.987035 5.40353 0.86201 5.52855C0.736986 5.65358 0.666748 5.82315 0.666748 5.99996C0.666748 6.17677 0.736986 6.34634 0.86201 6.47136C0.987035 6.59639 1.1566 6.66663 1.33341 6.66663H5.33342V10.6666C5.33342 10.8434 5.40365 11.013 5.52868 11.138C5.6537 11.2631 5.82327 11.3333 6.00008 11.3333C6.17689 11.3333 6.34646 11.2631 6.47149 11.138C6.59651 11.013 6.66675 10.8434 6.66675 10.6666V6.66663H10.6667C10.8436 6.66663 11.0131 6.59639 11.1382 6.47136C11.2632 6.34634 11.3334 6.17677 11.3334 5.99996C11.3334 5.82315 11.2632 5.65358 11.1382 5.52855C11.0131 5.40353 10.8436 5.33329 10.6667 5.33329Z" fill="currentColor"></path>
                </svg>
              </button>
              <a class="inline-block py-1 text-gray-400 hover:text-gray-300" href="#">
                <svg width="12" height="4" viewbox="0 0 12 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M6 0.666626C5.73629 0.666626 5.47851 0.744825 5.25924 0.891333C5.03998 1.03784 4.86908 1.24608 4.76816 1.48971C4.66724 1.73335 4.64084 2.00144 4.69229 2.26008C4.74373 2.51872 4.87072 2.7563 5.05719 2.94277C5.24366 3.12924 5.48124 3.25623 5.73988 3.30767C5.99852 3.35912 6.26661 3.33272 6.51025 3.2318C6.75388 3.13088 6.96212 2.95998 7.10863 2.74072C7.25514 2.52145 7.33333 2.26367 7.33333 1.99996C7.33333 1.64634 7.19286 1.3072 6.94281 1.05715C6.69276 0.807102 6.35362 0.666626 6 0.666626ZM1.33333 0.666626C1.06963 0.666626 0.811839 0.744825 0.592574 0.891333C0.373308 1.03784 0.202411 1.24608 0.101495 1.48971C0.000577708 1.73335 -0.0258267 2.00144 0.0256202 2.26008C0.0770672 2.51872 0.204055 2.7563 0.390525 2.94277C0.576995 3.12924 0.814572 3.25623 1.07321 3.30767C1.33185 3.35912 1.59994 3.33272 1.84358 3.2318C2.08721 3.13088 2.29545 2.95998 2.44196 2.74072C2.58847 2.52145 2.66667 2.26367 2.66667 1.99996C2.66667 1.64634 2.52619 1.3072 2.27614 1.05715C2.02609 0.807102 1.68696 0.666626 1.33333 0.666626ZM10.6667 0.666626C10.403 0.666626 10.1452 0.744825 9.92591 0.891333C9.70664 1.03784 9.53574 1.24608 9.43483 1.48971C9.33391 1.73335 9.30751 2.00144 9.35895 2.26008C9.4104 2.51872 9.53739 2.7563 9.72386 2.94277C9.91033 3.12924 10.1479 3.25623 10.4065 3.30767C10.6652 3.35912 10.9333 3.33272 11.1769 3.2318C11.4205 3.13088 11.6288 2.95998 11.7753 2.74072C11.9218 2.52145 12 2.26367 12 1.99996C12 1.64634 11.8595 1.3072 11.6095 1.05715C11.3594 0.807102 11.0203 0.666626 10.6667 0.666626Z" fill="currentColor"></path>
                </svg>
              </a>
            </div>
          </div>
          <div class="h-1 w-full mb-4 rounded-full bg-blue-500"></div>
          <a class="block p-4 mb-4 bg-gray-600 rounded-xl hover:bg-gray-700 transition duration-200" href="#">
            <h4 class="text-white font-semibold leading-6 mb-1">UI Adjustments</h4>
            <div class="flex items-center mb-4">
              <span class="h-2 w-2 mr-1 bg-purple-500 rounded-full"></span>
              <span class="text-xs font-medium text-purple-500">Design</span>
            </div>
            <p class="text-xs text-gray-300 leading-normal mb-10">This is an example task that can be used within a Kanban system.</p>
            <div class="pt-4 border-t border-gray-500">
              <div class="flex flex-wrap items-center justify-between -m-2">
                <div class="w-auto p-2">
                  <div class="flex items-center p-2 bg-gray-500 rounded-md">
                    <svg width="14" height="14" viewbox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M11.0001 2.33337H3.00008C2.2637 2.33337 1.66675 2.93033 1.66675 3.66671V11.6667C1.66675 12.4031 2.2637 13 3.00008 13H11.0001C11.7365 13 12.3334 12.4031 12.3334 11.6667V3.66671C12.3334 2.93033 11.7365 2.33337 11.0001 2.33337Z" stroke="#3D485B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                      <path d="M9.66675 1V3.66667" stroke="#3D485B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                      <path d="M4.3335 1V3.66667" stroke="#3D485B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                      <path d="M1.66675 6.33337H12.3334" stroke="#3D485B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                      <path d="M6.3335 9H7.00016" stroke="#3D485B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                      <path d="M7 9V11" stroke="#3D485B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                    <span class="ml-2 text-xs font-medium text-gray-200">Jul 03</span>
                  </div>
                </div>
                <div class="w-auto p-2">
                  <div class="flex h-full items-center">
                    <img class="w-7 h-7 rounded-full object-cover" src="trizzle-assets/images/avatar-women-3-circle-border.png" alt="">
                    <img class="w-7 h-7 -ml-3 rounded-full object-cover" src="trizzle-assets/images/avatar-women-circle-border.png" alt="">
                  </div>
                </div>
              </div>
            </div>
          </a>
          <a class="block p-4 mb-4 bg-gray-600 rounded-xl hover:bg-gray-700 transition duration-200" href="#">
            <h4 class="text-white font-semibold leading-6 mb-1">Design Review</h4>
            <div class="flex items-center mb-4">
              <span class="h-2 w-2 mr-1 bg-purple-500 rounded-full"></span>
              <span class="text-xs font-medium text-purple-500">Design</span>
            </div>
            <div class="pt-4 border-t border-gray-500">
              <div class="flex flex-wrap items-center justify-between -m-2">
                <div class="w-auto p-2">
                  <div class="flex items-center p-2 bg-gray-500 rounded-md">
                    <svg width="14" height="14" viewbox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M11.0001 2.33337H3.00008C2.2637 2.33337 1.66675 2.93033 1.66675 3.66671V11.6667C1.66675 12.4031 2.2637 13 3.00008 13H11.0001C11.7365 13 12.3334 12.4031 12.3334 11.6667V3.66671C12.3334 2.93033 11.7365 2.33337 11.0001 2.33337Z" stroke="#3D485B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                      <path d="M9.66675 1V3.66667" stroke="#3D485B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                      <path d="M4.3335 1V3.66667" stroke="#3D485B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                      <path d="M1.66675 6.33337H12.3334" stroke="#3D485B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                      <path d="M6.3335 9H7.00016" stroke="#3D485B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                      <path d="M7 9V11" stroke="#3D485B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                    <span class="ml-2 text-xs font-medium text-gray-200">Jul 05</span>
                  </div>
                </div>
                <div class="w-auto p-2">
                  <div class="inline-flex items-center justify-center w-8 h-8 bg-gray-500 rounded-full">
                    <svg width="14" height="14" viewbox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M9.47333 7.47332C10.1269 6.95909 10.604 6.25393 10.8382 5.45594C11.0723 4.65796 11.0519 3.80682 10.7799 3.02096C10.5078 2.23509 9.9975 1.55358 9.32005 1.07122C8.64259 0.588861 7.83163 0.329651 7 0.329651C6.16836 0.329651 5.35741 0.588861 4.67995 1.07122C4.0025 1.55358 3.49223 2.23509 3.22014 3.02096C2.94805 3.80682 2.92767 4.65796 3.16184 5.45594C3.396 6.25393 3.87307 6.95909 4.52666 7.47332C3.40672 7.92201 2.42952 8.66621 1.69926 9.62659C0.968996 10.587 0.51304 11.7275 0.379998 12.9266C0.370368 13.0142 0.378075 13.1028 0.402681 13.1874C0.427287 13.2719 0.468309 13.3508 0.523405 13.4195C0.634677 13.5583 0.79652 13.6472 0.973331 13.6666C1.15014 13.6861 1.32744 13.6345 1.46621 13.5232C1.60499 13.412 1.69388 13.2501 1.71333 13.0733C1.85972 11.7701 2.48112 10.5665 3.45881 9.69251C4.4365 8.8185 5.70193 8.33533 7.01333 8.33533C8.32473 8.33533 9.59016 8.8185 10.5679 9.69251C11.5455 10.5665 12.1669 11.7701 12.3133 13.0733C12.3315 13.2371 12.4096 13.3884 12.5327 13.498C12.6559 13.6076 12.8152 13.6676 12.98 13.6666H13.0533C13.2281 13.6465 13.3878 13.5582 13.4977 13.4208C13.6076 13.2835 13.6587 13.1082 13.64 12.9333C13.5063 11.7308 13.0479 10.5873 12.3139 9.62545C11.5799 8.6636 10.5979 7.91963 9.47333 7.47332ZM7 6.99998C6.47258 6.99998 5.95701 6.84358 5.51848 6.55057C5.07995 6.25755 4.73815 5.84107 4.53632 5.3538C4.33449 4.86653 4.28168 4.33036 4.38457 3.81307C4.48746 3.29579 4.74144 2.82064 5.11438 2.4477C5.48732 2.07476 5.96247 1.82078 6.47976 1.71789C6.99704 1.61499 7.53322 1.6678 8.02049 1.86964C8.50776 2.07147 8.92423 2.41326 9.21725 2.85179C9.51027 3.29033 9.66667 3.8059 9.66667 4.33331C9.66667 5.04056 9.38571 5.71884 8.88562 6.21893C8.38552 6.71903 7.70724 6.99998 7 6.99998Z" fill="#3D485B"></path>
                    </svg>
                  </div>
                </div>
              </div>
            </div>
          </a>
          <a class="block p-4 mb-4 bg-gray-600 rounded-xl hover:bg-gray-700 transition duration-200" href="#">
            <h4 class="text-white font-semibold leading-6 mb-1">Shuffle Improvements</h4>
            <div class="flex items-center mb-4">
              <span class="h-2 w-2 mr-1 bg-green-500 rounded-full"></span>
              <span class="text-xs font-medium text-green-500">Planning</span>
            </div>
            <img class="block w-full h-28 object-cover rounded-md mb-3" src="trizzle-assets/images/laptop-photo-placeholder.png" alt="">
            <p class="text-xs text-gray-300 mb-4">This is an example task that can be used within a Kanban system.</p>
            <div class="pt-4 border-t border-gray-500">
              <div class="flex flex-wrap items-center justify-between -m-2">
                <div class="w-auto p-2">
                  <div class="flex items-center p-2 bg-gray-500 rounded-md">
                    <svg width="14" height="14" viewbox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M11.0001 2.33337H3.00008C2.2637 2.33337 1.66675 2.93033 1.66675 3.66671V11.6667C1.66675 12.4031 2.2637 13 3.00008 13H11.0001C11.7365 13 12.3334 12.4031 12.3334 11.6667V3.66671C12.3334 2.93033 11.7365 2.33337 11.0001 2.33337Z" stroke="#3D485B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                      <path d="M9.66675 1V3.66667" stroke="#3D485B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                      <path d="M4.3335 1V3.66667" stroke="#3D485B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                      <path d="M1.66675 6.33337H12.3334" stroke="#3D485B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                      <path d="M6.3335 9H7.00016" stroke="#3D485B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                      <path d="M7 9V11" stroke="#3D485B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                    <span class="ml-2 text-xs font-medium text-gray-200">Jul 05</span>
                  </div>
                </div>
                <div class="w-auto p-2">
                  <div class="flex h-full items-center">
                    <img class="w-7 h-7 rounded-full object-cover" src="trizzle-assets/images/avatar-women-circle-border.png" alt="">
                    <img class="w-7 h-7 -ml-3 rounded-full object-cover" src="trizzle-assets/images/avatar-men-2-circle-border.png" alt="">
                  </div>
                </div>
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
</section> --}}



<div class="" id="content">
  <section class="py-3" >
    <div class="container px-4 mx-auto" >
      <div class="mb-6" >
        <div class="flex flex-wrap -mx-3 -mb-6" >
          <div class="w-full md:w-1/2 lg:w-1/4 px-3 mb-6" >
            <div class="max-w-sm mx-auto py-8 px-6 bg-gray-50 rounded-xl" >
              <div class="max-w-xs mx-auto text-center text-gray-600" >
                <div class="flex mx-auto w-12 h-12 mb-4 items-center justify-center bg-blue-500 bg-opacity-20 rounded-xl" >
                  <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg"  >
                    <path d="M21 16H1C0.734784 16 0.48043 16.1054 0.292893 16.2929C0.105357 16.4804 0 16.7348 0 17C0 17.2652 0.105357 17.5196 0.292893 17.7071C0.48043 17.8946 0.734784 18 1 18H21C21.2652 18 21.5196 17.8946 21.7071 17.7071C21.8946 17.5196 22 17.2652 22 17C22 16.7348 21.8946 16.4804 21.7071 16.2929C21.5196 16.1054 21.2652 16 21 16ZM21 20H1C0.734784 20 0.48043 20.1054 0.292893 20.2929C0.105357 20.4804 0 20.7348 0 21C0 21.2652 0.105357 21.5196 0.292893 21.7071C0.48043 21.8946 0.734784 22 1 22H21C21.2652 22 21.5196 21.8946 21.7071 21.7071C21.8946 21.5196 22 21.2652 22 21C22 20.7348 21.8946 20.4804 21.7071 20.2929C21.5196 20.1054 21.2652 20 21 20ZM5 6C4.80222 6 4.60888 6.05865 4.44443 6.16853C4.27998 6.27841 4.15181 6.43459 4.07612 6.61732C4.00043 6.80004 3.98063 7.00111 4.01921 7.19509C4.0578 7.38907 4.15304 7.56725 4.29289 7.70711C4.43275 7.84696 4.61093 7.9422 4.80491 7.98079C4.99889 8.01937 5.19996 7.99957 5.38268 7.92388C5.56541 7.84819 5.72159 7.72002 5.83147 7.55557C5.94135 7.39112 6 7.19778 6 7C6 6.73478 5.89464 6.48043 5.70711 6.29289C5.51957 6.10536 5.26522 6 5 6ZM19 0H3C2.20435 0 1.44129 0.31607 0.87868 0.87868C0.31607 1.44129 0 2.20435 0 3V11C0 11.7956 0.31607 12.5587 0.87868 13.1213C1.44129 13.6839 2.20435 14 3 14H19C19.7956 14 20.5587 13.6839 21.1213 13.1213C21.6839 12.5587 22 11.7956 22 11V3C22 2.20435 21.6839 1.44129 21.1213 0.87868C20.5587 0.31607 19.7956 0 19 0ZM20 11C20 11.2652 19.8946 11.5196 19.7071 11.7071C19.5196 11.8946 19.2652 12 19 12H3C2.73478 12 2.48043 11.8946 2.29289 11.7071C2.10536 11.5196 2 11.2652 2 11V3C2 2.73478 2.10536 2.48043 2.29289 2.29289C2.48043 2.10536 2.73478 2 3 2H19C19.2652 2 19.5196 2.10536 19.7071 2.29289C19.8946 2.48043 20 2.73478 20 3V11ZM11 4C10.4067 4 9.82664 4.17595 9.33329 4.50559C8.83994 4.83524 8.45542 5.30377 8.22836 5.85195C8.0013 6.40013 7.94189 7.00333 8.05764 7.58527C8.1734 8.16721 8.45912 8.70176 8.87868 9.12132C9.29824 9.54088 9.83279 9.8266 10.4147 9.94236C10.9967 10.0581 11.5999 9.9987 12.1481 9.77164C12.6962 9.54458 13.1648 9.16006 13.4944 8.66671C13.8241 8.17336 14 7.59334 14 7C14 6.20435 13.6839 5.44129 13.1213 4.87868C12.5587 4.31607 11.7956 4 11 4ZM11 8C10.8022 8 10.6089 7.94135 10.4444 7.83147C10.28 7.72159 10.1518 7.56541 10.0761 7.38268C10.0004 7.19996 9.98063 6.99889 10.0192 6.80491C10.0578 6.61093 10.153 6.43275 10.2929 6.29289C10.4327 6.15304 10.6109 6.0578 10.8049 6.01921C10.9989 5.98063 11.2 6.00043 11.3827 6.07612C11.5654 6.15181 11.7216 6.27998 11.8315 6.44443C11.9414 6.60888 12 6.80222 12 7C12 7.26522 11.8946 7.51957 11.7071 7.70711C11.5196 7.89464 11.2652 8 11 8ZM17 6C16.8022 6 16.6089 6.05865 16.4444 6.16853C16.28 6.27841 16.1518 6.43459 16.0761 6.61732C16.0004 6.80004 15.9806 7.00111 16.0192 7.19509C16.0578 7.38907 16.153 7.56725 16.2929 7.70711C16.4327 7.84696 16.6109 7.9422 16.8049 7.98079C16.9989 8.01937 17.2 7.99957 17.3827 7.92388C17.5654 7.84819 17.7216 7.72002 17.8315 7.55557C17.9414 7.39112 18 7.19778 18 7C18 6.73478 17.8946 6.48043 17.7071 6.29289C17.5196 6.10536 17.2652 6 17 6Z" fill="#194BFB" ></path>
                  </svg>
                </div>
                <span class="text-xs font-semibold"  >Budget</span>
                <h4 class="text-2xl leading-8 text-indigo-300 font-semibold mb-4" >$28K</h4>
                <div class="flex flex-wrap items-center justify-center -m-1" >
                  <div class="w-auto p-1" >
                    <span class="inline-block py-1 px-2 text-xs text-green-500 font-medium bg-teal-900 rounded-full"  >1,0%</span>
                  </div>
                  <div class="w-auto p-1" >
                    <span class="text-xs text-gray-300 font-medium"  >Since last month</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="w-full md:w-1/2 lg:w-1/4 px-3 mb-6" >
            <div class="max-w-sm mx-auto py-8 px-6 bg-gray-500 rounded-xl" >
              <div class="max-w-xs mx-auto text-center" >
                <div class="flex mx-auto w-12 h-12 mb-4 items-center justify-center bg-blue-500 bg-opacity-20 text-blue-500 rounded-xl" >
                  <svg width="22" height="18" viewBox="0 0 22 18" fill="none" xmlns="http://www.w3.org/2000/svg"  >
                    <path d="M11.3 9.22C11.8336 8.75813 12.2616 8.18688 12.5549 7.54502C12.8482 6.90316 13 6.20571 13 5.5C13 4.17392 12.4732 2.90215 11.5355 1.96447C10.5979 1.02678 9.32608 0.5 8 0.5C6.67392 0.5 5.40215 1.02678 4.46447 1.96447C3.52678 2.90215 3 4.17392 3 5.5C2.99999 6.20571 3.1518 6.90316 3.44513 7.54502C3.73845 8.18688 4.16642 8.75813 4.7 9.22C3.30014 9.85388 2.11247 10.8775 1.27898 12.1685C0.445495 13.4596 0.00147185 14.9633 0 16.5C0 16.7652 0.105357 17.0196 0.292893 17.2071C0.48043 17.3946 0.734784 17.5 1 17.5C1.26522 17.5 1.51957 17.3946 1.70711 17.2071C1.89464 17.0196 2 16.7652 2 16.5C2 14.9087 2.63214 13.3826 3.75736 12.2574C4.88258 11.1321 6.4087 10.5 8 10.5C9.5913 10.5 11.1174 11.1321 12.2426 12.2574C13.3679 13.3826 14 14.9087 14 16.5C14 16.7652 14.1054 17.0196 14.2929 17.2071C14.4804 17.3946 14.7348 17.5 15 17.5C15.2652 17.5 15.5196 17.3946 15.7071 17.2071C15.8946 17.0196 16 16.7652 16 16.5C15.9985 14.9633 15.5545 13.4596 14.721 12.1685C13.8875 10.8775 12.6999 9.85388 11.3 9.22ZM8 8.5C7.40666 8.5 6.82664 8.32405 6.33329 7.99441C5.83994 7.66476 5.45542 7.19623 5.22836 6.64805C5.0013 6.09987 4.94189 5.49667 5.05764 4.91473C5.1734 4.33279 5.45912 3.79824 5.87868 3.37868C6.29824 2.95912 6.83279 2.6734 7.41473 2.55764C7.99667 2.44189 8.59987 2.5013 9.14805 2.72836C9.69623 2.95542 10.1648 3.33994 10.4944 3.83329C10.8241 4.32664 11 4.90666 11 5.5C11 6.29565 10.6839 7.05871 10.1213 7.62132C9.55871 8.18393 8.79565 8.5 8 8.5ZM17.74 8.82C18.38 8.09933 18.798 7.20905 18.9438 6.25634C19.0896 5.30362 18.9569 4.32907 18.5618 3.45C18.1666 2.57093 17.5258 1.8248 16.7165 1.30142C15.9071 0.77805 14.9638 0.499742 14 0.5C13.7348 0.5 13.4804 0.605357 13.2929 0.792893C13.1054 0.98043 13 1.23478 13 1.5C13 1.76522 13.1054 2.01957 13.2929 2.20711C13.4804 2.39464 13.7348 2.5 14 2.5C14.7956 2.5 15.5587 2.81607 16.1213 3.37868C16.6839 3.94129 17 4.70435 17 5.5C16.9986 6.02524 16.8593 6.5409 16.5961 6.99542C16.3328 7.44994 15.9549 7.82738 15.5 8.09C15.3517 8.17552 15.2279 8.29766 15.1404 8.44474C15.0528 8.59182 15.0045 8.7589 15 8.93C14.9958 9.09976 15.0349 9.2678 15.1137 9.41826C15.1924 9.56872 15.3081 9.69665 15.45 9.79L15.84 10.05L15.97 10.12C17.1754 10.6917 18.1923 11.596 18.901 12.7263C19.6096 13.8566 19.9805 15.1659 19.97 16.5C19.97 16.7652 20.0754 17.0196 20.2629 17.2071C20.4504 17.3946 20.7048 17.5 20.97 17.5C21.2352 17.5 21.4896 17.3946 21.6771 17.2071C21.8646 17.0196 21.97 16.7652 21.97 16.5C21.9782 14.9654 21.5938 13.4543 20.8535 12.1101C20.1131 10.7659 19.0413 9.63331 17.74 8.82Z" fill="#194BFB" ></path>
                  </svg>
                </div>
                <span class="text-xs text-gray-300 font-semibold"  >Total customers</span>
                <h4 class="text-2xl leading-8 text-gray-100 font-semibold mb-4"  >1.6K</h4>
                <div class="flex flex-wrap items-center justify-center -m-1" >
                  <div class="w-auto p-1" >
                    <span class="inline-block py-1 px-2 text-xs text-green-500 font-medium bg-teal-900 rounded-full"  >1,0%</span>
                  </div>
                  <div class="w-auto p-1" >
                    <span class="text-xs text-gray-300 font-medium"  >Since last month</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="w-full md:w-1/2 lg:w-1/4 px-3 mb-6" >
            <div class="max-w-sm mx-auto py-8 px-6 bg-gray-500 rounded-xl" >
              <div class="max-w-xs mx-auto text-center" >
                <div class="flex mx-auto w-12 h-12 mb-4 items-center justify-center bg-blue-500 bg-opacity-20 text-blue-500 rounded-xl" >
                  <svg width="16" height="20" viewBox="0 0 16 20" fill="none" xmlns="http://www.w3.org/2000/svg"  >
                    <path d="M13 2H11.82C11.6137 1.41645 11.2319 0.910998 10.7271 0.552938C10.2222 0.194879 9.61894 0.00173951 9 0H7C6.38106 0.00173951 5.7778 0.194879 5.27293 0.552938C4.76807 0.910998 4.38631 1.41645 4.18 2H3C2.20435 2 1.44129 2.31607 0.87868 2.87868C0.316071 3.44129 0 4.20435 0 5V17C0 17.7956 0.316071 18.5587 0.87868 19.1213C1.44129 19.6839 2.20435 20 3 20H13C13.7956 20 14.5587 19.6839 15.1213 19.1213C15.6839 18.5587 16 17.7956 16 17V5C16 4.20435 15.6839 3.44129 15.1213 2.87868C14.5587 2.31607 13.7956 2 13 2ZM6 3C6 2.73478 6.10536 2.48043 6.29289 2.29289C6.48043 2.10536 6.73478 2 7 2H9C9.26522 2 9.51957 2.10536 9.70711 2.29289C9.89464 2.48043 10 2.73478 10 3V4H6V3ZM14 17C14 17.2652 13.8946 17.5196 13.7071 17.7071C13.5196 17.8946 13.2652 18 13 18H3C2.73478 18 2.48043 17.8946 2.29289 17.7071C2.10536 17.5196 2 17.2652 2 17V5C2 4.73478 2.10536 4.48043 2.29289 4.29289C2.48043 4.10536 2.73478 4 3 4H4V5C4 5.26522 4.10536 5.51957 4.29289 5.70711C4.48043 5.89464 4.73478 6 5 6H11C11.2652 6 11.5196 5.89464 11.7071 5.70711C11.8946 5.51957 12 5.26522 12 5V4H13C13.2652 4 13.5196 4.10536 13.7071 4.29289C13.8946 4.48043 14 4.73478 14 5V17Z" fill="#194BFB" ></path>
                  </svg>
                </div>
                <span class="text-xs text-gray-300 font-semibold"  >Tasks Progress</span>
                <h4 class="text-2xl leading-8 text-gray-100 font-semibold mb-4"  >64.5%</h4>
                <div class="flex flex-wrap items-center justify-center -m-1" >
                  <div class="w-auto p-1" >
                    <span class="inline-block py-1 px-2 text-xs text-green-500 font-medium bg-teal-900 rounded-full"  >1,0%</span>
                  </div>
                  <div class="w-auto p-1" >
                    <span class="text-xs text-gray-300 font-medium"  >Since last month</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="w-full md:w-1/2 lg:w-1/4 px-3 mb-6" >
            <div class="max-w-sm mx-auto py-8 px-6 bg-gray-500 rounded-xl" >
              <div class="max-w-xs mx-auto text-center" >
                <div class="flex mx-auto w-12 h-12 mb-4 items-center justify-center bg-blue-500 bg-opacity-20 text-blue-500 rounded-xl" >
                  <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg"  >
                    <path d="M19 0H3C2.20435 0 1.44129 0.31607 0.87868 0.87868C0.31607 1.44129 0 2.20435 0 3V19C0 19.7956 0.31607 20.5587 0.87868 21.1213C1.44129 21.6839 2.20435 22 3 22H19C19.7956 22 20.5587 21.6839 21.1213 21.1213C21.6839 20.5587 22 19.7956 22 19V3C22 2.20435 21.6839 1.44129 21.1213 0.87868C20.5587 0.31607 19.7956 0 19 0ZM7 20H3C2.73478 20 2.48043 19.8946 2.29289 19.7071C2.10536 19.5196 2 19.2652 2 19V17.82C2.32067 17.9364 2.65886 17.9973 3 18H7V20ZM7 16H3C2.73478 16 2.48043 15.8946 2.29289 15.7071C2.10536 15.5196 2 15.2652 2 15V13.82C2.32067 13.9364 2.65886 13.9973 3 14H7V16ZM7 12H3C2.73478 12 2.48043 11.8946 2.29289 11.7071C2.10536 11.5196 2 11.2652 2 11V3C2 2.73478 2.10536 2.48043 2.29289 2.29289C2.48043 2.10536 2.73478 2 3 2H7V12ZM13 20H9V14H13V20ZM13 12H9V2H13V12ZM20 19C20 19.2652 19.8946 19.5196 19.7071 19.7071C19.5196 19.8946 19.2652 20 19 20H15V18H19C19.3411 17.9973 19.6793 17.9364 20 17.82V19ZM20 15C20 15.2652 19.8946 15.5196 19.7071 15.7071C19.5196 15.8946 19.2652 16 19 16H15V14H19C19.3411 13.9973 19.6793 13.9364 20 13.82V15ZM20 11C20 11.2652 19.8946 11.5196 19.7071 11.7071C19.5196 11.8946 19.2652 12 19 12H15V2H19C19.2652 2 19.5196 2.10536 19.7071 2.29289C19.8946 2.48043 20 2.73478 20 3V11ZM17 6C16.8022 6 16.6089 6.05865 16.4444 6.16853C16.28 6.27841 16.1518 6.43459 16.0761 6.61732C16.0004 6.80004 15.9806 7.00111 16.0192 7.19509C16.0578 7.38907 16.153 7.56725 16.2929 7.70711C16.4327 7.84696 16.6109 7.9422 16.8049 7.98079C16.9989 8.01937 17.2 7.99957 17.3827 7.92388C17.5654 7.84819 17.7216 7.72002 17.8315 7.55557C17.9414 7.39112 18 7.19778 18 7C18 6.73478 17.8946 6.48043 17.7071 6.29289C17.5196 6.10536 17.2652 6 17 6ZM5 8C5.19778 8 5.39112 7.94135 5.55557 7.83147C5.72002 7.72159 5.84819 7.56541 5.92388 7.38268C5.99957 7.19996 6.01937 6.99889 5.98079 6.80491C5.9422 6.61093 5.84696 6.43275 5.70711 6.29289C5.56725 6.15304 5.38907 6.0578 5.19509 6.01921C5.00111 5.98063 4.80004 6.00043 4.61732 6.07612C4.43459 6.15181 4.27841 6.27998 4.16853 6.44443C4.05865 6.60888 4 6.80222 4 7C4 7.26522 4.10536 7.51957 4.29289 7.70711C4.48043 7.89464 4.73478 8 5 8Z" fill="#194BFB" ></path>
                  </svg>
                </div>
                <span class="text-xs text-gray-300 font-semibold"  >Total profit</span>
                <h4 class="text-2xl leading-8 text-gray-100 font-semibold mb-4"  >$23K</h4>
                <div class="flex flex-wrap items-center justify-center -m-1" >
                  <div class="w-auto p-1" >
                    <span class="inline-block py-1 px-2 text-xs text-green-500 font-medium bg-teal-900 rounded-full"  >1,0%</span>
                  </div>
                  <div class="w-auto p-1" >
                    <span class="text-xs text-gray-300 font-medium"  >Since last month</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="mb-6">
        <div class="flex flex-wrap -mx-3">
          <div class="w-full lg:w-2/3 px-3 mb-6 lg:mb-0">
            <div class="p-6 bg-gray-500 rounded-xl">
              <div class="flex flex-wrap -mx-4 -mb-4 justify-between items-center" >
                <div class="w-auto px-4 mb-4" >
                  <h4 class="text-gray-100 font-bold tracking-wide"  >Latest Sales</h4>
                </div>
                <div class="w-auto px-4 mb-4" >
                  <div class="flex items-center" >
                    <div class="mr-4" >
                      <span class="inline-block w-2 h-2 mr-1 bg-blue-500 rounded-full"></span>
                      <span class="text-xs text-gray-300">This year</span>
                    </div>
                    <div class="mr-6">
                      <span class="inline-block w-2 h-2 mr-1 bg-purple-500 rounded-full"></span>
                      <span class="text-xs text-gray-300">Last year</span>
                    </div>
                    <div class="relative inline-block bg-gray-600 rounded-xl">
                      <select class="relative py-3 pl-2 pr-6 cursor-pointer bg-transparent text-xs text-gray-300 font-semibold appearance-none outline-none" style="z-index: 1;">
                        <option value="">Last 7 days</option>
                        <option value="">Last Month</option>
                      </select>
                      <span class="absolute top-1/2 right-0 mr-2 transform -translate-y-1/2" style="z-index: 0;">
                        <svg width="10" height="7" viewBox="0 0 10 7" fill="none" xmlns="http://www.w3.org/2000/svg" >
                          <path d="M1 1.5L5 5.5L9 1.5" stroke="#3D485B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                      </span>
                    </div>
                  </div>
                </div>
              </div>

              <SalesChart />
              
            </div>
          </div>

          <div class="w-full lg:w-1/3 px-3">
            <div class="p-6 bg-gray-500 rounded-xl">
              <h4 class="text-gray-100 font-bold tracking-wide mb-8">Traffic by Device</h4>

              <FastSellingChart />
              
              <div class="flex flex-wrap px-4 items-center justify-between">
                <div class="text-center">
                  <span class="inline-block w-2 h-2 mb-2 bg-blue-500 rounded-full"></span>
                  <h6 class="text-xs text-gray-300 font-semibold">Desktop</h6>
                  <h5 class="text-2xl text-gray-100 font-semibold">65%</h5>
                </div>
                <div class="text-center">
                  <span class="inline-block w-2 h-2 mb-2 bg-purple-500 rounded-full"></span>
                  <h6 class="text-xs text-gray-300 font-semibold">Mobile</h6>
                  <h5 class="text-2xl text-gray-100 font-semibold">20%</h5>
                </div>
                <div class="text-center">
                  <span class="inline-block w-2 h-2 mb-2 bg-yellow-500 rounded-full"></span>
                  <h6 class="text-xs text-gray-300 font-semibold">Tablet</h6>
                  <h5 class="text-2xl text-gray-100 font-semibold">15%</h5>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="flex flex-wrap -mx-3">
        <div class="w-full lg:w-1/3 px-3 mb-6 lg:mb-0">
          <div class="h-full py-6 px-4 sm:px-6 bg-gray-500 rounded-xl">
            <h4 class="text-lg text-gray-100 font-semibold mb-6" >Latest Products</h4>
            <a class="flex p-4 items-center justify-between hover:bg-gray-600 rounded-xl transition duration-150" href="#">
              <div class="flex items-center pr-2">
                <div class="flex w-10 h-10 mr-3 items-center justify-center bg-gray-400 bg-opacity-20 text-blue-500 rounded-xl">
                  <img src="trizzle-assets/logos/dropbox.svg">
                </div>
                <div>
                  <h5 class="text-sm text-gray-100 leading-5 font-medium mb-1">Dropbox</h5>
                  <p class="text-xs text-gray-300 font-semibold">Updated about 7 hours</p>
                </div>
              </div>
              <svg width="4" height="18" viewBox="0 0 4 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M2 4C2.39556 4 2.78224 3.8827 3.11114 3.66294C3.44004 3.44318 3.69639 3.13082 3.84776 2.76537C3.99914 2.39992 4.03874 1.99778 3.96157 1.60982C3.8844 1.22186 3.69392 0.865492 3.41421 0.585787C3.13451 0.306082 2.77814 0.115601 2.39018 0.0384303C2.00222 -0.0387401 1.60009 0.000866562 1.23463 0.152242C0.869182 0.303617 0.556825 0.559962 0.337062 0.88886C0.117299 1.21776 1.07779e-06 1.60444 1.07779e-06 2C1.07779e-06 2.53043 0.210715 3.03914 0.585788 3.41421C0.960861 3.78929 1.46957 4 2 4ZM2 14C1.60444 14 1.21776 14.1173 0.888861 14.3371C0.559963 14.5568 0.303617 14.8692 0.152242 15.2346C0.000866562 15.6001 -0.0387401 16.0022 0.0384303 16.3902C0.115601 16.7781 0.306083 17.1345 0.585788 17.4142C0.865493 17.6939 1.22186 17.8844 1.60982 17.9616C1.99778 18.0387 2.39992 17.9991 2.76537 17.8478C3.13082 17.6964 3.44318 17.44 3.66294 17.1111C3.8827 16.7822 4 16.3956 4 16C4 15.4696 3.78929 14.9609 3.41421 14.5858C3.03914 14.2107 2.53043 14 2 14ZM2 7C1.60444 7 1.21776 7.1173 0.888861 7.33706C0.559963 7.55682 0.303617 7.86918 0.152242 8.23463C0.000866562 8.60009 -0.0387401 9.00222 0.0384303 9.39018C0.115601 9.77814 0.306083 10.1345 0.585788 10.4142C0.865493 10.6939 1.22186 10.8844 1.60982 10.9616C1.99778 11.0387 2.39992 10.9991 2.76537 10.8478C3.13082 10.6964 3.44318 10.44 3.66294 10.1111C3.8827 9.78224 4 9.39556 4 9C4 8.46957 3.78929 7.96086 3.41421 7.58579C3.03914 7.21071 2.53043 7 2 7Z" fill="#3D485B" />
              </svg>
            </a>
            <a class="flex p-4 items-center justify-between hover:bg-gray-600 rounded-xl transition duration-150" href="#">
              <div class="flex items-center pr-2">
                <div class="flex w-10 h-10 mr-3 items-center justify-center bg-gray-400 bg-opacity-20 text-blue-500 rounded-xl">
                  <img src="trizzle-assets/logos/medium.svg" alt="">
                </div>
                <div>
                  <h5 class="text-sm text-gray-100 leading-5 font-medium mb-1">Medium</h5>
                  <p class="text-xs text-gray-300 font-semibold">Updated about 7 hours</p>
                </div>
              </div>
              <svg width="4" height="18" viewBox="0 0 4 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M2 4C2.39556 4 2.78224 3.8827 3.11114 3.66294C3.44004 3.44318 3.69639 3.13082 3.84776 2.76537C3.99914 2.39992 4.03874 1.99778 3.96157 1.60982C3.8844 1.22186 3.69392 0.865492 3.41421 0.585787C3.13451 0.306082 2.77814 0.115601 2.39018 0.0384303C2.00222 -0.0387401 1.60009 0.000866562 1.23463 0.152242C0.869182 0.303617 0.556825 0.559962 0.337062 0.88886C0.117299 1.21776 1.07779e-06 1.60444 1.07779e-06 2C1.07779e-06 2.53043 0.210715 3.03914 0.585788 3.41421C0.960861 3.78929 1.46957 4 2 4ZM2 14C1.60444 14 1.21776 14.1173 0.888861 14.3371C0.559963 14.5568 0.303617 14.8692 0.152242 15.2346C0.000866562 15.6001 -0.0387401 16.0022 0.0384303 16.3902C0.115601 16.7781 0.306083 17.1345 0.585788 17.4142C0.865493 17.6939 1.22186 17.8844 1.60982 17.9616C1.99778 18.0387 2.39992 17.9991 2.76537 17.8478C3.13082 17.6964 3.44318 17.44 3.66294 17.1111C3.8827 16.7822 4 16.3956 4 16C4 15.4696 3.78929 14.9609 3.41421 14.5858C3.03914 14.2107 2.53043 14 2 14ZM2 7C1.60444 7 1.21776 7.1173 0.888861 7.33706C0.559963 7.55682 0.303617 7.86918 0.152242 8.23463C0.000866562 8.60009 -0.0387401 9.00222 0.0384303 9.39018C0.115601 9.77814 0.306083 10.1345 0.585788 10.4142C0.865493 10.6939 1.22186 10.8844 1.60982 10.9616C1.99778 11.0387 2.39992 10.9991 2.76537 10.8478C3.13082 10.6964 3.44318 10.44 3.66294 10.1111C3.8827 9.78224 4 9.39556 4 9C4 8.46957 3.78929 7.96086 3.41421 7.58579C3.03914 7.21071 2.53043 7 2 7Z" fill="#3D485B" />
              </svg>
            </a>
            <a class="flex p-4 items-center justify-between hover:bg-gray-600 rounded-xl transition duration-150" href="#">
              <div class="flex items-center pr-2">
                <div class="flex w-10 h-10 mr-3 items-center justify-center bg-gray-400 bg-opacity-20 text-blue-500 rounded-xl">
                  <img src="trizzle-assets/logos/slack.svg" alt="">
                </div>
                <div>
                  <h5 class="text-sm text-gray-100 leading-5 font-medium mb-1">Slack</h5>
                  <p class="text-xs text-gray-300 font-semibold">Updated about 7 hours</p>
                </div>
              </div>
              <svg width="4" height="18" viewBox="0 0 4 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M2 4C2.39556 4 2.78224 3.8827 3.11114 3.66294C3.44004 3.44318 3.69639 3.13082 3.84776 2.76537C3.99914 2.39992 4.03874 1.99778 3.96157 1.60982C3.8844 1.22186 3.69392 0.865492 3.41421 0.585787C3.13451 0.306082 2.77814 0.115601 2.39018 0.0384303C2.00222 -0.0387401 1.60009 0.000866562 1.23463 0.152242C0.869182 0.303617 0.556825 0.559962 0.337062 0.88886C0.117299 1.21776 1.07779e-06 1.60444 1.07779e-06 2C1.07779e-06 2.53043 0.210715 3.03914 0.585788 3.41421C0.960861 3.78929 1.46957 4 2 4ZM2 14C1.60444 14 1.21776 14.1173 0.888861 14.3371C0.559963 14.5568 0.303617 14.8692 0.152242 15.2346C0.000866562 15.6001 -0.0387401 16.0022 0.0384303 16.3902C0.115601 16.7781 0.306083 17.1345 0.585788 17.4142C0.865493 17.6939 1.22186 17.8844 1.60982 17.9616C1.99778 18.0387 2.39992 17.9991 2.76537 17.8478C3.13082 17.6964 3.44318 17.44 3.66294 17.1111C3.8827 16.7822 4 16.3956 4 16C4 15.4696 3.78929 14.9609 3.41421 14.5858C3.03914 14.2107 2.53043 14 2 14ZM2 7C1.60444 7 1.21776 7.1173 0.888861 7.33706C0.559963 7.55682 0.303617 7.86918 0.152242 8.23463C0.000866562 8.60009 -0.0387401 9.00222 0.0384303 9.39018C0.115601 9.77814 0.306083 10.1345 0.585788 10.4142C0.865493 10.6939 1.22186 10.8844 1.60982 10.9616C1.99778 11.0387 2.39992 10.9991 2.76537 10.8478C3.13082 10.6964 3.44318 10.44 3.66294 10.1111C3.8827 9.78224 4 9.39556 4 9C4 8.46957 3.78929 7.96086 3.41421 7.58579C3.03914 7.21071 2.53043 7 2 7Z" fill="#3D485B" ></path>
              </svg>
            </a>
            <a class="flex p-4 items-center justify-between hover:bg-gray-600 rounded-xl transition duration-150" href="#">
              <div class="flex items-center pr-2">
                <div class="flex w-10 h-10 mr-3 items-center justify-center bg-gray-400 bg-opacity-20 text-blue-500 rounded-xl" >
                  <img src="trizzle-assets/logos/github.svg" alt=""  >
                </div>
                <div >
                  <h5 class="text-sm text-gray-100 leading-5 font-medium mb-1"  >Github</h5>
                  <p class="text-xs text-gray-300 font-semibold"  >Updated about 7 hours</p>
                </div>
              </div>
              <svg width="4" height="18" viewBox="0 0 4 18" fill="none" xmlns="http://www.w3.org/2000/svg"  >
                <path d="M2 4C2.39556 4 2.78224 3.8827 3.11114 3.66294C3.44004 3.44318 3.69639 3.13082 3.84776 2.76537C3.99914 2.39992 4.03874 1.99778 3.96157 1.60982C3.8844 1.22186 3.69392 0.865492 3.41421 0.585787C3.13451 0.306082 2.77814 0.115601 2.39018 0.0384303C2.00222 -0.0387401 1.60009 0.000866562 1.23463 0.152242C0.869182 0.303617 0.556825 0.559962 0.337062 0.88886C0.117299 1.21776 1.07779e-06 1.60444 1.07779e-06 2C1.07779e-06 2.53043 0.210715 3.03914 0.585788 3.41421C0.960861 3.78929 1.46957 4 2 4ZM2 14C1.60444 14 1.21776 14.1173 0.888861 14.3371C0.559963 14.5568 0.303617 14.8692 0.152242 15.2346C0.000866562 15.6001 -0.0387401 16.0022 0.0384303 16.3902C0.115601 16.7781 0.306083 17.1345 0.585788 17.4142C0.865493 17.6939 1.22186 17.8844 1.60982 17.9616C1.99778 18.0387 2.39992 17.9991 2.76537 17.8478C3.13082 17.6964 3.44318 17.44 3.66294 17.1111C3.8827 16.7822 4 16.3956 4 16C4 15.4696 3.78929 14.9609 3.41421 14.5858C3.03914 14.2107 2.53043 14 2 14ZM2 7C1.60444 7 1.21776 7.1173 0.888861 7.33706C0.559963 7.55682 0.303617 7.86918 0.152242 8.23463C0.000866562 8.60009 -0.0387401 9.00222 0.0384303 9.39018C0.115601 9.77814 0.306083 10.1345 0.585788 10.4142C0.865493 10.6939 1.22186 10.8844 1.60982 10.9616C1.99778 11.0387 2.39992 10.9991 2.76537 10.8478C3.13082 10.6964 3.44318 10.44 3.66294 10.1111C3.8827 9.78224 4 9.39556 4 9C4 8.46957 3.78929 7.96086 3.41421 7.58579C3.03914 7.21071 2.53043 7 2 7Z" fill="#3D485B" ></path>
              </svg>
            </a>
            <a class="flex p-4 items-center justify-between hover:bg-gray-600 rounded-xl transition duration-150" href="#" >
              <div class="flex items-center pr-2" >
                <div class="flex w-10 h-10 mr-3 items-center justify-center bg-gray-400 bg-opacity-20 text-blue-500 rounded-xl" >
                  <img src="trizzle-assets/logos/discord.svg" alt=""  >
                </div>
                <div >
                  <h5 class="text-sm text-gray-100 leading-5 font-medium mb-1"  >Discord</h5>
                  <p class="text-xs text-gray-300 font-semibold"  >Updated about 7 hours</p>
                </div>
              </div>
              <svg width="4" height="18" viewBox="0 0 4 18" fill="none" xmlns="http://www.w3.org/2000/svg"  >
                <path d="M2 4C2.39556 4 2.78224 3.8827 3.11114 3.66294C3.44004 3.44318 3.69639 3.13082 3.84776 2.76537C3.99914 2.39992 4.03874 1.99778 3.96157 1.60982C3.8844 1.22186 3.69392 0.865492 3.41421 0.585787C3.13451 0.306082 2.77814 0.115601 2.39018 0.0384303C2.00222 -0.0387401 1.60009 0.000866562 1.23463 0.152242C0.869182 0.303617 0.556825 0.559962 0.337062 0.88886C0.117299 1.21776 1.07779e-06 1.60444 1.07779e-06 2C1.07779e-06 2.53043 0.210715 3.03914 0.585788 3.41421C0.960861 3.78929 1.46957 4 2 4ZM2 14C1.60444 14 1.21776 14.1173 0.888861 14.3371C0.559963 14.5568 0.303617 14.8692 0.152242 15.2346C0.000866562 15.6001 -0.0387401 16.0022 0.0384303 16.3902C0.115601 16.7781 0.306083 17.1345 0.585788 17.4142C0.865493 17.6939 1.22186 17.8844 1.60982 17.9616C1.99778 18.0387 2.39992 17.9991 2.76537 17.8478C3.13082 17.6964 3.44318 17.44 3.66294 17.1111C3.8827 16.7822 4 16.3956 4 16C4 15.4696 3.78929 14.9609 3.41421 14.5858C3.03914 14.2107 2.53043 14 2 14ZM2 7C1.60444 7 1.21776 7.1173 0.888861 7.33706C0.559963 7.55682 0.303617 7.86918 0.152242 8.23463C0.000866562 8.60009 -0.0387401 9.00222 0.0384303 9.39018C0.115601 9.77814 0.306083 10.1345 0.585788 10.4142C0.865493 10.6939 1.22186 10.8844 1.60982 10.9616C1.99778 11.0387 2.39992 10.9991 2.76537 10.8478C3.13082 10.6964 3.44318 10.44 3.66294 10.1111C3.8827 9.78224 4 9.39556 4 9C4 8.46957 3.78929 7.96086 3.41421 7.58579C3.03914 7.21071 2.53043 7 2 7Z" fill="#3D485B" ></path>
              </svg>
            </a>
            <a class="flex p-4 items-center justify-between hover:bg-gray-600 rounded-xl transition duration-150" href="#" >
              <div class="flex items-center pr-2" >
                <div class="flex w-10 h-10 mr-3 items-center justify-center bg-gray-400 bg-opacity-20 text-blue-500 rounded-xl" >
                  <img src="trizzle-assets/logos/spotify.svg" alt=""  >
                </div>
                <div >
                  <h5 class="text-sm text-gray-100 leading-5 font-medium mb-1"  >Spotify</h5>
                  <p class="text-xs text-gray-300 font-semibold"  >Updated about 7 hours</p>
                </div>
              </div>
              <svg width="4" height="18" viewBox="0 0 4 18" fill="none" xmlns="http://www.w3.org/2000/svg"  >
                <path d="M2 4C2.39556 4 2.78224 3.8827 3.11114 3.66294C3.44004 3.44318 3.69639 3.13082 3.84776 2.76537C3.99914 2.39992 4.03874 1.99778 3.96157 1.60982C3.8844 1.22186 3.69392 0.865492 3.41421 0.585787C3.13451 0.306082 2.77814 0.115601 2.39018 0.0384303C2.00222 -0.0387401 1.60009 0.000866562 1.23463 0.152242C0.869182 0.303617 0.556825 0.559962 0.337062 0.88886C0.117299 1.21776 1.07779e-06 1.60444 1.07779e-06 2C1.07779e-06 2.53043 0.210715 3.03914 0.585788 3.41421C0.960861 3.78929 1.46957 4 2 4ZM2 14C1.60444 14 1.21776 14.1173 0.888861 14.3371C0.559963 14.5568 0.303617 14.8692 0.152242 15.2346C0.000866562 15.6001 -0.0387401 16.0022 0.0384303 16.3902C0.115601 16.7781 0.306083 17.1345 0.585788 17.4142C0.865493 17.6939 1.22186 17.8844 1.60982 17.9616C1.99778 18.0387 2.39992 17.9991 2.76537 17.8478C3.13082 17.6964 3.44318 17.44 3.66294 17.1111C3.8827 16.7822 4 16.3956 4 16C4 15.4696 3.78929 14.9609 3.41421 14.5858C3.03914 14.2107 2.53043 14 2 14ZM2 7C1.60444 7 1.21776 7.1173 0.888861 7.33706C0.559963 7.55682 0.303617 7.86918 0.152242 8.23463C0.000866562 8.60009 -0.0387401 9.00222 0.0384303 9.39018C0.115601 9.77814 0.306083 10.1345 0.585788 10.4142C0.865493 10.6939 1.22186 10.8844 1.60982 10.9616C1.99778 11.0387 2.39992 10.9991 2.76537 10.8478C3.13082 10.6964 3.44318 10.44 3.66294 10.1111C3.8827 9.78224 4 9.39556 4 9C4 8.46957 3.78929 7.96086 3.41421 7.58579C3.03914 7.21071 2.53043 7 2 7Z" fill="#3D485B" ></path>
              </svg>
            </a>
          </div>
        </div>
        <div class="w-full lg:w-2/3 px-3" >
          <div class="h-full p-6 bg-gray-500 rounded-xl" >
            <h4 class="text-lg text-gray-100 font-semibold mb-6"  >Latest Products</h4>
            <div class="w-full mt-6 pb-4 overflow-x-auto" >
              <table class="w-full min-w-max">
                <thead>
                  <tr class="text-left">
                    <th class="p-0">
                      <div class="py-3 px-6 rounded-l-xl bg-gray-600">
                        <span class="text-xs text-gray-300 font-semibold">ORDER REF</span>
                      </div>
                    </th>
                    <th class="p-0">
                      <div class="py-3 px-6 bg-gray-600">
                        <span class="text-xs text-gray-300 font-semibold">CUSTOMER</span>
                      </div>
                    </th>
                    <th class="p-0">
                      <div class="py-3 px-6 bg-gray-600">
                        <button class="inline-flex items-center text-xs text-gray-300 font-semibold">
                          <span class="mr-2">DATE</span>
                          <svg width="10" height="14" viewBox="0 0 10 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7.8598 8.52669L4.9998 11.3934L2.1398 8.52669C2.01426 8.40115 1.844 8.33063 1.66646 8.33063C1.48893 8.33063 1.31867 8.40115 1.19313 8.52669C1.0676 8.65222 0.99707 8.82249 0.99707 9.00002C0.99707 9.17756 1.0676 9.34782 1.19313 9.47335L4.52646 12.8067C4.58844 12.8692 4.66217 12.9188 4.74341 12.9526C4.82465 12.9865 4.91179 13.0039 4.9998 13.0039C5.08781 13.0039 5.17494 12.9865 5.25618 12.9526C5.33742 12.9188 5.41116 12.8692 5.47313 12.8067L8.80646 9.47335C8.86862 9.41119 8.91793 9.3374 8.95157 9.25619C8.98521 9.17497 9.00252 9.08793 9.00252 9.00002C9.00252 8.91211 8.98521 8.82507 8.95157 8.74385C8.91793 8.66264 8.86862 8.58885 8.80646 8.52669C8.7443 8.46453 8.67051 8.41522 8.5893 8.38158C8.50808 8.34794 8.42104 8.33063 8.33313 8.33063C8.24522 8.33063 8.15818 8.34794 8.07696 8.38158C7.99575 8.41522 7.92196 8.46453 7.8598 8.52669ZM2.1398 5.47335L4.9998 2.60669L7.8598 5.47335C7.92177 5.53584 7.99551 5.58544 8.07675 5.61928C8.15799 5.65313 8.24512 5.67055 8.33313 5.67055C8.42114 5.67055 8.50828 5.65313 8.58952 5.61928C8.67075 5.58544 8.74449 5.53584 8.80646 5.47335C8.86895 5.41138 8.91855 5.33764 8.95239 5.2564C8.98624 5.17517 9.00366 5.08803 9.00366 5.00002C9.00366 4.91201 8.98624 4.82488 8.95239 4.74364C8.91855 4.6624 8.86895 4.58866 8.80646 4.52669L5.47313 1.19335C5.41116 1.13087 5.33742 1.08127 5.25618 1.04743C5.17494 1.01358 5.08781 0.996155 4.9998 0.996155C4.91179 0.996155 4.82465 1.01358 4.74341 1.04743C4.66217 1.08127 4.58844 1.13087 4.52646 1.19335L1.19313 4.52669C1.0676 4.65222 0.99707 4.82249 0.99707 5.00002C0.99707 5.17756 1.0676 5.34782 1.19313 5.47335C1.31867 5.59889 1.48893 5.66941 1.66646 5.66941C1.844 5.66941 2.01426 5.59889 2.1398 5.47335Z" fill="currentColor" ></path>
                          </svg>
                        </button>
                      </div>
                    </th>
                    <th class="p-0" >
                      <div class="py-3 px-5 rounded-r-xl bg-gray-600" >
                        <span class="text-xs text-gray-300 font-semibold"  >STATUS</span>
                      </div>
                    </th>
                  </tr>
                </thead>
                <tbody >
                  <tr >
                    <td class="p-0" >
                      <div class="h-16 p-6" >
                        <h5 class="text-sm font-medium text-gray-100"  >CDD1049</h5>
                      </div>
                    </td>
                    <td class="p-0" >
                      <div class="h-16 p-6" >
                        <div class="flex h-full items-center" >
                          <img class="w-8 h-8 mr-3 rounded-full object-cover" src="trizzle-assets/images/avatar-men-circle-border.png" alt=""  >
                          <span class="text-sm font-medium text-gray-100"  >John Doe</span>
                        </div>
                      </div>
                    </td>
                    <td class="p-0" >
                      <div class="h-16 p-6" >
                        <span class="text-sm text-gray-100 font-medium"  >July 06, 2022</span>
                      </div>
                    </td>
                    <td class="p-0" >
                      <div class="h-16 p-6" >
                        <div class="flex h-full items-center" >
                          <span class="inline-block w-2 h-2 mr-1 bg-yellow-500 rounded-full" ></span>
                          <span class="text-sm font-medium text-gray-100"  >Pending</span>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr >
                    <td class="p-0" >
                      <div class="h-16 p-6 rounded-l-xl bg-gray-600" >
                        <h5 class="text-sm font-medium text-gray-100"  >CDD1049</h5>
                      </div>
                    </td>
                    <td class="p-0" >
                      <div class="h-16 p-6 bg-gray-600" >
                        <div class="flex h-full items-center" >
                          <img class="w-8 h-8 mr-3 rounded-full object-cover" src="trizzle-assets/images/avatar-men-circle-border.png" alt=""  >
                          <span class="text-sm font-medium text-gray-100"  >John Doe</span>
                        </div>
                      </div>
                    </td>
                    <td class="p-0" >
                      <div class="h-16 p-6 bg-gray-600" >
                        <h5 class="text-sm font-medium text-gray-100"  >July 06, 2022</h5>
                      </div>
                    </td>
                    <td class="p-0" >
                      <div class="flex h-16 p-6 items-center rounded-r-xl bg-gray-600" >
                        <span class="inline-block w-2 h-2 mr-1 bg-green-500 rounded-full" ></span>
                        <span class="text-sm font-medium text-gray-100"  >Delivered</span>
                      </div>
                    </td>
                  </tr>
                  <tr >
                    <td class="p-0" >
                      <div class="h-16 p-6" >
                        <h5 class="text-sm font-medium text-gray-100"  >CDD1049</h5>
                      </div>
                    </td>
                    <td class="p-0" >
                      <div class="h-16 p-6" >
                        <div class="flex h-full items-center" >
                          <img class="w-8 h-8 mr-3 rounded-full object-cover" src="trizzle-assets/images/avatar-men-circle-border.png" alt=""  >
                          <span class="text-sm font-medium text-gray-100"  >John Doe</span>
                        </div>
                      </div>
                    </td>
                    <td class="p-0" >
                      <div class="h-16 p-6" >
                        <span class="text-sm text-gray-100 font-medium"  >July 06, 2022</span>
                      </div>
                    </td>
                    <td class="p-0" >
                      <div class="h-16 p-6" >
                        <div class="flex h-full items-center" >
                          <span class="inline-block w-2 h-2 mr-1 bg-yellow-500 rounded-full" ></span>
                          <span class="text-sm font-medium text-gray-100"  >Pending</span>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr >
                    <td class="p-0" >
                      <div class="h-16 p-6 rounded-l-xl bg-gray-600" >
                        <h5 class="text-sm font-medium text-gray-100"  >CDD1049</h5>
                      </div>
                    </td>
                    <td class="p-0" >
                      <div class="h-16 p-6 bg-gray-600" >
                        <div class="flex h-full items-center" >
                          <img class="w-8 h-8 mr-3 rounded-full object-cover" src="trizzle-assets/images/avatar-men-circle-border.png" alt=""  >
                          <span class="text-sm font-medium text-gray-100"  >John Doe</span>
                        </div>
                      </div>
                    </td>
                    <td class="p-0" >
                      <div class="h-16 p-6 bg-gray-600" >
                        <h5 class="text-sm font-medium text-gray-100"  >July 06, 2022</h5>
                      </div>
                    </td>
                    <td class="p-0" >
                      <div class="flex h-16 p-6 items-center rounded-r-xl bg-gray-600" >
                        <span class="inline-block w-2 h-2 mr-1 bg-red-500 rounded-full" ></span>
                        <span class="text-sm font-medium text-gray-100"  >Refunded</span>
                      </div>
                    </td>
                  </tr>
                  <tr >
                    <td class="p-0" >
                      <div class="h-16 p-6" >
                        <h5 class="text-sm font-medium text-gray-100"  >CDD1049</h5>
                      </div>
                    </td>
                    <td class="p-0" >
                      <div class="h-16 p-6" >
                        <div class="flex h-full items-center" >
                          <img class="w-8 h-8 mr-3 rounded-full object-cover" src="trizzle-assets/images/avatar-men-circle-border.png" alt=""  >
                          <span class="text-sm font-medium text-gray-100"  >John Doe</span>
                        </div>
                      </div>
                    </td>
                    <td class="p-0" >
                      <div class="h-16 p-6" >
                        <span class="text-sm text-gray-100 font-medium"  >July 06, 2022</span>
                      </div>
                    </td>
                    <td class="p-0" >
                      <div class="h-16 p-6" >
                        <div class="flex h-full items-center" >
                          <span class="inline-block w-2 h-2 mr-1 bg-yellow-500 rounded-full" ></span>
                          <span class="text-sm font-medium text-gray-100"  >Pending</span>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr >
                    <td class="p-0" >
                      <div class="h-16 p-6 rounded-l-xl bg-gray-600" >
                        <h5 class="text-sm font-medium text-gray-100"  >CDD1049</h5>
                      </div>
                    </td>
                    <td class="p-0" >
                      <div class="h-16 p-6 bg-gray-600" >
                        <div class="flex h-full items-center" >
                          <img class="w-8 h-8 mr-3 rounded-full object-cover" src="trizzle-assets/images/avatar-men-circle-border.png" alt=""  >
                          <span class="text-sm font-medium text-gray-100"  >John Doe</span>
                        </div>
                      </div>
                    </td>
                    <td class="p-0" >
                      <div class="h-16 p-6 bg-gray-600" >
                        <h5 class="text-sm font-medium text-gray-100"  >July 06, 2022</h5>
                      </div>
                    </td>
                    <td class="p-0" >
                      <div class="flex h-16 p-6 items-center rounded-r-xl bg-gray-600" >
                        <span class="inline-block w-2 h-2 mr-1 bg-red-500 rounded-full" ></span>
                        <span class="text-sm font-medium text-gray-100"  >Refunded</span>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

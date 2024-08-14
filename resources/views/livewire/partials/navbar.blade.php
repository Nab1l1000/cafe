<header class="relative flex flex-wrap sm:justify-start sm:flex-nowrap w-full bg-[#f7f3e9] text-sm py-3 shadow-md">
  <nav class="max-w-[85rem] w-full mx-auto px-4 sm:flex sm:items-center sm:justify-between">
    <div class="flex items-center justify-between">
      <a class="flex-none text-xl font-semibold text-[#4e342e] focus:outline-none focus:opacity-80" href="/" aria-label="Brand">
        <span class="inline-flex items-center gap-x-2">
          <img class="w-10 h-10 rounded-full" src="/img/ngopi.png" alt="Logo">
          <span class="font-cursive text-2xl">Gopi & Toast</span>
        </span>
      </a>
      <div class="sm:hidden">
        <button type="button" class="hs-collapse-toggle relative flex justify-center items-center gap-x-2 rounded-lg border border-[#8d6e63] bg-[#f7f3e9] text-[#4e342e] shadow-sm hover:bg-[#e0d7c9] focus:outline-none" id="hs-navbar-example-collapse" aria-expanded="false" aria-controls="hs-navbar-example" aria-label="Toggle navigation" data-hs-collapse="#hs-navbar-example">
          <svg class="hs-collapse-open:hidden w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="3" x2="21" y1="6" y2="6"/><line x1="3" x2="21" y1="12" y2="12"/><line x1="3" x2="21" y1="18" y2="18"/></svg>
          <svg class="hs-collapse-open:block hidden w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
          <span class="sr-only">Toggle navigation</span>
        </button>
      </div>
    </div>
    <div id="hs-navbar-example" class="hidden hs-collapse overflow-hidden transition-all duration-300 basis-full grow sm:block" aria-labelledby="hs-navbar-example-collapse">
      <div class="flex flex-col gap-5 mt-5 sm:flex-row sm:items-center sm:justify-end sm:mt-0 sm:pl-5">
        <a wire:navigate class="font-medium {{request()->is('/') ? 'text-[#4e342e]' : 'text-[#6d4c41]'}} hover:text-[#4e342e] focus:outline-none" href="/" aria-current="page">Home</a>
        <a wire:navigate class="font-medium {{request()->is('aboutUs') ? 'text-[#4e342e]' : 'text-[#6d4c41]'}} hover:text-[#4e342e] focus:outline-none" href="aboutUs">About Us</a>
        <a wire:navigate class="font-medium {{request()->is('shop') ? 'text-[#4e342e]' : 'text-[#6d4c41]'}} hover:text-[#4e342e] focus:outline-none" href="shop">Shop</a>
        <a wire:navigate class="font-medium {{request()->is('menu') ? 'text-[#4e342e]' : 'text-[#6d4c41]'}} hover:text-[#4e342e] focus:outline-none" href="menu">Our Menu</a>
        <a wire:navigate class="font-medium {{request()->is('contactUs') ? 'text-[#4e342e]' : 'text-[#6d4c41]'}} hover:text-[#4e342e] focus:outline-none" href="contactUs">Contact Us</a>
        <a wire:navigate class="font-medium {{request()->is('cart') ? 'text-[#4e342e]' : 'text-[#6d4c41]'}} flex items-center hover:text-[#4e342e] py-3 md:py-6" href="/cart">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="flex-shrink-0 w-6 h-6 mr-2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007ZM8.625 10.5a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm7.5 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
          </svg>
          <span class="mr-2">Cart</span> <span class="py-0.5 px-2 rounded-full text-xs font-medium bg-[#ffeb3b] text-[#4e342e]">4</span>
        </a>
        <div class="pt-3 md:pt-0">
          <a wire:navigate class="py-2.5 px-4 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg bg-[#ff6f00] text-white hover:bg-[#e65100] focus:outline-none" href="/login">
            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2" />
              <circle cx="12" cy="7" r="4" />
            </svg>
            Log in
          </a>
        </div>
      </div>
    </div>
  </nav>
</header>

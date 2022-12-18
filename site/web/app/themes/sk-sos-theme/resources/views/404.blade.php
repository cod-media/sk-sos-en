@extends('layouts.app')

@section('content')
  <div class="bg-white">
    <main class="mx-auto w-full max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="flex-shrink-0 pt-16">
        <img class="mx-auto h-24 w-auto" src="https://sksos.fra1.digitaloceanspaces.com/logo404.png" alt="Your Company">
      </div>
      <div class="mx-auto max-w-xl py-8 sm:py-12">
        <div class="text-center">
          <p class="text-base font-semibold text-[#C45B5B]">404</p>
          <h1 class="mt-2 text-4xl font-bold tracking-tight text-gray-900 sm:text-5xl">Этой страницы не существует</h1>
          <p class="mt-2 text-lg text-gray-500">Произошла ошибка. Если вы перешли по верному адресу, сообщите об ошибке
            администратору.</p>
        </div>
        <div class="mt-12">
          <h2 class="text-base font-semibold text-gray-500">Куда можно зайти вместо</h2>
          <ul role="list" class="mt-4 divide-y divide-gray-200 border-t border-b border-gray-200">
            <li class="relative flex items-start space-x-4 py-6">
              <div class="flex-shrink-0">
                <span class="flex h-12 w-12 items-center justify-center rounded-lg bg-[#EC966B] bg-opacity-10">
                  <!-- Heroicon name: outline/book-open -->
                  <svg class="h-6 w-6 text-[#EC966B]" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round"
                      d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                  </svg>
                </span>
              </div>
              <div class="min-w-0 flex-1">
                <h3 class="text-base font-medium text-gray-900">
                  <span class="rounded-sm focus-within:ring-2 focus-within:ring-gray-500 focus-within:ring-offset-2">
                    <a href="/about" class="focus:outline-none">
                      <span class="absolute inset-0" aria-hidden="true"></span>
                      О проекте
                    </a>
                  </span>
                </h3>
                <p class="text-base text-gray-500">Узнайте больше о СК: SOS</p>
              </div>
              <div class="flex-shrink-0 self-center">
                <!-- Heroicon name: mini/chevron-right -->
                <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                  fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd"
                    d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                    clip-rule="evenodd" />
                </svg>
              </div>
            </li>

            <li class="relative flex items-start space-x-4 py-6">
              <div class="flex-shrink-0">
                <span class="flex h-12 w-12 items-center justify-center rounded-lg bg-[#EC966B] bg-opacity-10">
                  <!-- Heroicon name: outline/money -->
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="h-6 w-6 text-[#EC966B]">
                    <path stroke-linecap="round" stroke-linejoin="round"
                      d="M12 6v12m-3-2.818l.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                  </svg>

                </span>
              </div>
              <div class="min-w-0 flex-1">
                <h3 class="text-base font-medium text-gray-900">
                  <span class="rounded-sm focus-within:ring-2 focus-within:ring-gray-500 focus-within:ring-offset-2">
                    <a href="/support" class="focus:outline-none">
                      <span class="absolute inset-0" aria-hidden="true"></span>
                      Пожертвовать
                    </a>
                  </span>
                </h3>
                <p class="text-base text-gray-500">Поддержите наш проект</p>
              </div>
              <div class="flex-shrink-0 self-center">
                <!-- Heroicon name: mini/chevron-right -->
                <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                  fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd"
                    d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                    clip-rule="evenodd" />
                </svg>
              </div>
            </li>

            <li class="relative flex items-start space-x-4 py-6">
              <div class="flex-shrink-0">
                <span class="flex h-12 w-12 items-center justify-center rounded-lg bg-[#EC966B] bg-opacity-10">
                  <!-- Heroicon name: outline/rss -->
                  <svg class="h-6 w-6 text-[#EC966B]" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round"
                      d="M12.75 19.5v-.75a7.5 7.5 0 00-7.5-7.5H4.5m0-6.75h.75c7.87 0 14.25 6.38 14.25 14.25v.75M6 18.75a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                  </svg>
                </span>
              </div>
              <div class="min-w-0 flex-1">
                <h3 class="text-base font-medium text-gray-900">
                  <span class="rounded-sm focus-within:ring-2 focus-within:ring-gray-500 focus-within:ring-offset-2">
                    <a href="/blog" class="focus:outline-none">
                      <span class="absolute inset-0" aria-hidden="true"></span>
                      Блог
                    </a>
                  </span>
                </h3>
                <p class="text-base text-gray-500">Последние новости и записи</p>
              </div>
              <div class="flex-shrink-0 self-center">
                <!-- Heroicon name: mini/chevron-right -->
                <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                  fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd"
                    d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                    clip-rule="evenodd" />
                </svg>
              </div>
            </li>
          </ul>
          <div class="mt-8">
            <a href="#" class="text-base font-medium text-[#EC966B] hover:opacity-75">
              Вернуться на главную
              <span aria-hidden="true"> &rarr;</span>
            </a>
          </div>
        </div>
      </div>
    </main>
  </div>
@endsection

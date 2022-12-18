@extends('layouts.app')

@section('content')
  {{-- Event --}}
  <div class="relative bg-[#228b22]">
    <div class="mx-auto max-w-7xl py-3 px-2 text-center sm:px-6 md:max-w-none lg:px-8">
      <div class="sm:px-16 sm:text-center md:pr-16">
        <p class="flex justify-center text-center font-medium text-white md:text-left">
          <span class="">Предновогодний сбор <span class="hidden md:inline">на подарки подопечным</span></span>
          <span class="ml-2 block sm:inline-block">
            <a href="#" class="whitespace-nowrap font-bold text-white underline">
              Подробнее
              <span aria-hidden="true"> &rarr;</span>
            </a>
          </span>
        </p>
      </div>
    </div>
  </div>

  {{-- Widget for help --}}
  <div class="relative sm:pt-4 md:mt-4">
    <div class="absolute inset-x-0 bottom-0 h-1/2"></div>
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
      <div class="relative shadow-xl sm:overflow-hidden sm:rounded-2xl">
        <div class="absolute inset-0">
          <div class="absolute inset-0 bg-gray-900 mix-blend-multiply"></div>
        </div>
        <div class="relative z-10 px-4 py-8 text-left sm:px-6 sm:py-12 lg:py-16 lg:px-8">
          <h1 class="text-left text-4xl font-bold tracking-tight sm:text-5xl lg:text-6xl">
            <span class="block text-white">Помочь тем, кто борется за</span>
            <span class="text-red-500">жизнь и свободу</span>
          </h1>
          <p class="mt-6 max-w-lg text-left text-xl text-gray-200 sm:max-w-3xl">Помогаем ЛГБТИК+ людям и
            членам их семей, столкнувшимся с опасностью на Северном Кавказе</p>
          <div class="mt-10 flex max-w-sm sm:justify-start">
            <div class="space-y-4 sm:space-y-0">
              <a href="#"
                class="flex items-center justify-center rounded-md border border-transparent bg-[#EC966B] px-4 py-3 text-base font-medium text-white shadow-sm transition hover:bg-[#EC966Bd0] sm:px-8">Поддержать</a>
            </div>
          </div>
        </div>
        <img src="https://sksos.org/wp-content/uploads/2022/12/framed-1-1.jpg"
          class="absolute right-0 bottom-0 opacity-50" alt="" srcset="">
      </div>
    </div>
  </div>

  {{-- Stats --}}

  <div class="sm:mt-6">
    <div class="mx-auto max-w-7xl py-8 px-4 sm:py-16 sm:px-6 lg:px-8 lg:py-12">
      <div class="mx-auto max-w-4xl py-2 text-center">
        <h2 class="text-3xl font-bold tracking-tight text-black sm:text-4xl">Что уже сделано?
        </h2>
      </div>
      <dl class="mt-4 text-center sm:mx-auto sm:grid sm:max-w-3xl sm:grid-cols-3 sm:gap-8">
        <div class="flex flex-col">
          <dt class="leading-2 order-2 mt-2 text-sm font-medium text-gray-700">людям мы оказали помощь
          </dt>
          <dd class="order-1 text-5xl font-bold tracking-tight text-black">745</dd>
        </div>
        <div class="mt-10 flex flex-col sm:mt-0">
          <dt class="leading-2 order-2 mt-2 text-sm font-medium text-gray-700">людям помогли покинуть регион
          </dt>
          <dd class="order-1 text-5xl font-bold tracking-tight text-black">357</dd>
        </div>
        <div class="mt-10 flex flex-col sm:mt-0">
          <dt class="leading-2 order-2 mt-2 text-sm font-medium text-gray-700">людям помогли получить убежище
          </dt>
          <dd class="order-1 text-5xl font-bold tracking-tight text-black">274</dd>
        </div>
      </dl>
      <div class="mx-auto max-w-4xl text-center">
        <p class="mt-2 text-sm text-gray-400 sm:mt-4">Указанные цифры включают лишь ЛГБТИК+ заявителей. Мы не
          отображаем в них членов семьи, а также людей, которые подвергались опасности из-за подозрений.</p>
      </div>
    </div>
  </div>

  {{-- About --}}
  <div class="bg-[#ffd3bf]">
    <div class="mx-auto max-w-4xl px-6 py-12 sm:py-32 lg:max-w-7xl lg:px-8 lg:py-16">
      <h2 class="text-4xl font-bold tracking-tight text-black">Кризисная группа СК SOS</h2>
      <div class="mt-8 grid grid-cols-1 gap-16 sm:grid-cols-2 lg:gap-x-8 lg:gap-y-16">
        <div>
          <div class="mt-6 rounded bg-white bg-opacity-40 px-4 py-4">
            <h3 class="text-xl font-semibold leading-9 text-black">Кто мы?</h3>
            <p class="mt-2 text-base leading-7 text-gray-700">Команда правозащитников, которая помогает ЛГБТИК+ людям и
              членам их семей, столкнувшимся с опасностью для жизни, преследованиями и насилием на Северном Кавказе.</p>
            <button type="button"
              class="mt-4 inline-flex items-center rounded border border-transparent bg-[#e87743] px-6 py-3 text-base font-medium text-white shadow-sm transition hover:bg-opacity-80 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2">Подробнее</button>
          </div>
        </div>
        <div>
          <div class="mt-6 rounded bg-white bg-opacity-40 px-4 py-4">
            <h3 class="text text-left text-xl font-semibold leading-9 text-black">Как обратиться за помощью?</h3>
            <p class="mt-2 text-left text-base leading-7 text-gray-700">Если вам или вашим близким угрожает опасность в
              связи с
              гендерной или сексуальной идентичностью, а также если вы хотите сообщить о нарушении прав человека на
              Северном Кавказе, напишите нам.</p>
            <button type="button"
              class="mt-4 inline-flex items-center rounded border border-transparent bg-[#e87743] px-6 py-3 text-base font-medium text-white shadow-sm transition hover:bg-opacity-80 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2"><svg
                class="-ml-1 mr-3 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                aria-hidden="true">
                <path d="M3 4a2 2 0 00-2 2v1.161l8.441 4.221a1.25 1.25 0 001.118 0L19 7.162V6a2 2 0 00-2-2H3z" />
                <path d="M19 8.839l-7.77 3.885a2.75 2.75 0 01-2.46 0L1 8.839V14a2 2 0 002 2h14a2 2 0 002-2V8.839z" />
              </svg>Обратиться</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  {{-- New year event --}}
  <div class="overflow-hidden bg-gray-900 pt-10 sm:pt-8 lg:pt-4">
    <div class="mx-auto max-w-7xl lg:px-8">
      <div class="lg:grid lg:grid-cols-2 lg:gap-8">
        <div
          class="relative z-10 mx-auto max-w-md px-4 sm:max-w-2xl sm:px-6 sm:text-center lg:flex lg:items-center lg:px-0 lg:text-left">
          <div class="lg:py-24">
            <h1
              class="mt-4 text-4xl font-bold leading-8 tracking-tight text-white sm:mt-5 sm:text-6xl lg:mt-6 xl:text-6xl">

              Предновогодний сбор на подарки подопечным

            </h1>
            <p class="mt-3 text-base text-gray-300 sm:mt-5 sm:text-xl lg:text-lg xl:text-xl">В этом году
              ребята прошли
              через тяжелые испытания: большинство пережили домашнее или полицейское насилие, побои и пытки, а их жизни
              находились под угрозой. Они были вынуждены покинуть места, в которых родились и выросли, зная, что больше не
              смогут вернуться, и навсегда разорвать отношения со своими семьями. Им пришлось начать новую,
              самостоятельную жизнь вдали от дома и столкнуться со всеми ее трудностями.
            </p>
            <button
              class="mt-4 w-32 rounded-md bg-[#EC966B] py-3 px-4 font-medium text-white shadow transition hover:bg-opacity-80 focus:outline-none focus:ring-2 focus:ring-gray-300 focus:ring-offset-2 focus:ring-offset-gray-900">Помочь</button>
          </div>
        </div>
        <div
          class="-mt-64 max-h-72 opacity-20 sm:mb-4 sm:-mt-96 sm:max-h-96 lg:relative lg:m-0 lg:-mt-0 lg:max-h-full lg:opacity-100">
          <div class="mx-auto max-w-xl sm:max-w-5xl lg:max-w-none lg:px-0"> <img
              class="w-full lg:absolute lg:inset-y-0 lg:left-0 lg:h-full lg:w-auto lg:max-w-none"
              src="https://sksos.fra1.digitaloceanspaces.com/15.png" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

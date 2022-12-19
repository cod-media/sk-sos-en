@extends('layouts.app')

@section('content')
  <div class="mx-auto max-w-2xl py-4 sm:py-8 lg:py-12">
    <div class="prose">
      <h1>Как помочь? </h1>
      <h2>Сделать пожертвование</h2>
      <p>
        На собранные средства мы эвакуируем людей из региона, обеспечиваем безопасность, предоставляем юридическую,
        финансовую, медицинскую и психологическую помощь
      </p>
      <p>
        Поддержать нашу работу можно сделав пожертвование. Сейчас поддерживаются следующие способы:
      </p>
      <h2>PayPal</h2>
      <a href="https://www.paypal.com/donate/?hosted_button_id=SKC65LKDSH582"
        class="inline-flex items-center rounded-md border border-transparent bg-[#00457C] px-6 py-3 text-base font-medium text-white shadow-sm hover:opacity-80 focus:outline-none focus:ring-2 focus:ring-gray-400 focus:ring-offset-2">
        <!-- Heroicon name: mini/envelope -->
        <svg class="-ml-1 mr-3 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
          aria-hidden="true">
          <path d="M3 4a2 2 0 00-2 2v1.161l8.441 4.221a1.25 1.25 0 001.118 0L19 7.162V6a2 2 0 00-2-2H3z" />
          <path d="M19 8.839l-7.77 3.885a2.75 2.75 0 01-2.46 0L1 8.839V14a2 2 0 002 2h14a2 2 0 002-2V8.839z" />
        </svg>
        Перейти в PayPal
      </a>
      <h2>Crypto</h2>
      <div class="not-prose">

        {{-- 
            Bitcoin BTC: bc1qsagw7vmzke9kace9ga4ne3l22vqj3amx5czvde
            Litecoin LTC: ltc1qrh2qk0tenk3czat4hgdpr7as56e6xdavs3ds5d
            Ethereum ETH: 0xf1760f1b880fb001b6C810a84F8b624eede0aEFC
            Zerocoin ZEC: t1cf7bA8gjXc38pQGdd2SmJptnYzXS3Jp22
            Toncoin TON: EQBzn9j7Ps1UCPkB2gl8AQUyE7--rOXXYIKY07Tr0IEzzDdm
            USDT (TRC20): TG3WEYgGyTtt1aMapnGYMxpTpJcs63PUVz
            Dogecoin (DOGE): DHAUcL7RwyvhpR3vhCfuYeYnbecVrGkwa8
            --}}

        <div class="inline-block min-w-full align-middle">
          <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
            <table class="min-w-full divide-y divide-gray-300">
              <thead class="bg-gray-50">
                <tr>
                  <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">
                    Платфома</th>
                  <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Адрес</th>
                </tr>
              </thead>
              <tbody class="divide-y divide-gray-200 bg-white">
                <tr>
                  <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">Bitcoin BTC
                  </td>
                  <td class="whitespace-nowrap px-3 py-4 font-mono text-sm text-gray-500">
                    bc1qsagw7vmzke9kace9ga4ne3l22vqj3amx5czvde</td>
                </tr>
                <tr>
                  <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">Litecoin LTC
                  </td>
                  <td class="whitespace-nowrap px-3 py-4 font-mono text-sm text-gray-500">
                    ltc1qrh2qk0tenk3czat4hgdpr7as56e6xdavs3ds5d</td>
                </tr>
                <tr>
                  <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">Ethereum ETH
                  </td>
                  <td class="whitespace-nowrap px-3 py-4 font-mono text-sm text-gray-500">
                    0xf1760f1b880fb001b6C810a84F8b624eede0aEFC</td>
                </tr>

                <tr>
                  <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">Zerocoin ZEC
                  </td>
                  <td class="whitespace-nowrap px-3 py-4 font-mono text-sm text-gray-500">
                    t1cf7bA8gjXc38pQGdd2SmJptnYzXS3Jp22</td>
                </tr>
                <tr>
                  <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">Toncoin TON
                  </td>
                  <td class="whitespace-nowrap px-3 py-4 font-mono text-sm text-gray-500">
                    EQBzn9j7Ps1UCPkB2gl8AQUyE7--rOXXYIKY07Tr0IEzzDdm</td>
                </tr>
                <tr>
                  <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">USDT (TRC20)
                  </td>
                  <td class="whitespace-nowrap px-3 py-4 font-mono text-sm text-gray-500">
                    TG3WEYgGyTtt1aMapnGYMxpTpJcs63PUVz</td>
                </tr>
                <tr>
                  <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">Dogecoin (DOGE)
                  </td>
                  <td class="whitespace-nowrap px-3 py-4 font-mono text-sm text-gray-500">
                    DHAUcL7RwyvhpR3vhCfuYeYnbecVrGkwa8</td>
                </tr>

              </tbody>
            </table>
          </div>
        </div>
      </div>
      <h2>Стать волонтером</h2>
      <p>Мы нуждаемся в волонтерах. Мы ищем:</p>
      <ol>
        <li>Юристов и адвокатов</li>

        <li>IT-специалистов</li>

        <li>Дизайнеров и иллюстраторов</li>

        <li>Психологов</li>

        <li>Переводчиков</li>
      </ol>
      <p>
        Чтобы стать волонтером, отправьте заявку на почту <a class="text-[#EC966B] hover:opacity-80"
          href="mailto:volunteer@sksos.org">volunteer@sksos.org</a>
      </p>
      <p>Пожалуйста, укажите «Волонтерство» в теме письма и заполните анкету:</p>
      <ul class="font-medium">
        <li>Ваше имя</li>

        <li>Специальность / как могли бы помочь?</li>

        <li>Местонахождение (если можете сообщить)</li>

        <li>Краткий рассказ о себе и почему хотите присоединиться к нам</li>

        <li>Ссылки на соцсети для верификации заявки</li>
      </ul>
      <h2>Подписываться на наши соцсети</h2>

      <p>Помогите нам говорить громче. Придайте огласке правонарушения, расскажите о нашей деятельности.</p>
      <div class="mt-8 flex justify-between space-x-6 px-4">
        <a href="https://www.facebook.com/sksosorg" class="text-gray-400 hover:text-gray-500">
          <span class="sr-only">Facebook</span>
          <svg class="h-12 w-12" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
            <path fill-rule="evenodd"
              d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
              clip-rule="evenodd" />
          </svg>
        </a>

        <a href="https://instagram.com/sksosorg" class="text-gray-400 hover:text-gray-500">
          <span class="sr-only">Instagram</span>
          <svg class="h-12 w-12" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
            <path fill-rule="evenodd"
              d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
              clip-rule="evenodd" />
          </svg>
        </a>

        <a href="https://twitter.com/ncsosorg" class="text-gray-400 hover:text-gray-500">
          <span class="sr-only">Twitter</span>
          <svg class="h-12 w-12" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
            <path
              d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
          </svg>
        </a>

        <a href="https://t.me/sksos.org" class="text-gray-400 hover:text-gray-500">
          <span class="sr-only">Telegram</span>
          <svg class="h-12 w-12" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path
              d="m20.665 3.717-17.73 6.837c-1.21.486-1.203 1.161-.222 1.462l4.552 1.42 10.532-6.645c.498-.303.953-.14.579.192l-8.533 7.701h-.002l.002.001-.314 4.692c.46 0 .663-.211.921-.46l2.211-2.15 4.599 3.397c.848.467 1.457.227 1.668-.785l3.019-14.228c.309-1.239-.473-1.8-1.282-1.434z" />
          </svg>
        </a>

        <a href="https://vk.com/sksosorg" class="text-gray-400 hover:text-gray-500">
          <span class="sr-only">VK</span>
          <svg class="h-12 w-12 fill-gray-400 text-gray-400" fill="currentColor" viewBox="0 0 22 22"
            xmlns="http://www.w3.org/2000/svg">
            <path
              d="m21.579 6.855c.14-.465 0-.806-.662-.806h-2.193c-.558 0-.813.295-.953.619 0 0-1.115 2.719-2.695 4.482-.51.513-.743.675-1.021.675-.139 0-.341-.162-.341-.627v-4.343c0-.558-.161-.806-.626-.806h-3.446c-.348 0-.558.258-.558.504 0 .528.79.65.871 2.138v3.228c0 .707-.127.836-.407.836-.743 0-2.551-2.729-3.624-5.853-.209-.607-.42-.852-.98-.852h-2.192c-.627 0-.752.295-.752.619 0 .582.743 3.462 3.461 7.271 1.812 2.601 4.363 4.011 6.687 4.011 1.393 0 1.565-.313 1.565-.853v-1.966c0-.626.133-.752.574-.752.324 0 .882.164 2.183 1.417 1.486 1.486 1.732 2.153 2.567 2.153h2.192c.626 0 .939-.313.759-.931-.197-.615-.907-1.51-1.849-2.569-.512-.604-1.277-1.254-1.51-1.579-.325-.419-.231-.604 0-.976.001.001 2.672-3.761 2.95-5.04z" />
          </svg>
        </a>
      </div>
      <h2>Партнерские проекты и сотрудничество</h2>
      <p>
        Есть идея для сотрудничества? Пишите нам на почту <a class="text-[#EC966B] hover:opacity-80"
          href="mailto:media@sksos.org">media@sksos.org</a>
      </p>
    </div>
  </div>
  </div>
@endsection

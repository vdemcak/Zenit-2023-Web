<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="icon" type="image/svg+xml" href="/logo-icon.svg" />

  <title>ZubZen | Ziskajte najlepšíu zubnú starostlivosť</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fork-awesome@1.2.0/css/fork-awesome.min.css" integrity="sha256-XoaMnoYC5TH6/+ihMEnospgm0J1PM/nioxbOUdnM8HY=" crossorigin="anonymous" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  @vite('resources/css/app.css')
  @vite('resources/js/app.js')
</head>

<body>
  <main>
    <!-- Header Section -->
    <header class="fixed left-0 right-0 top-0 z-50 flex items-center justify-between bg-white px-10 py-5">
      <div class="flex gap-x-1 items-center">
        <img src="/logo-icon.svg" alt="ZubZen Logo" class="h-10 w-10" />
        <h1 class="text-sky-500 font-bold text-3xl">ZubZen</h1>
      </div>

      <nav>
        <ul class="flex gap-x-5 font-semibold">
          <li>
            <a href="#">Úvod</a>
          </li>
          <li>
            <a href="#sluzby">Služby</a>
          </li>
          <li>
            <a href="#cennik">Cenník</a>
          </li>
          <li>
            <a href="#specialisti">Naši špecialisti</a>
          </li>
          <li>
            <a href="" class="button">Objednajte sa</a>
          </li>
        </ul>
      </nav>
    </header>

    <!-- Scroll Hint -->
    <button id="scroll-hint" class="h-14 w-14 bg-sky-500 items-center justify-center fixed right-7 bottom-7 z-50 hidden">
      <i class="fa fa-long-arrow-up text-white" aria-hidden="true"></i>
    </button>

    <!-- Hero Section -->
    <section class="bg-darkBlue relative flex h-screen items-center justify-center overflow-hidden">
      <img src="/images/bg-1.jpg" alt="Pozadie Hero" class="absolute inset-0 h-full w-full object-cover opacity-20" aria-hidden="true" />

      <div class="z-10 flex max-w-2xl flex-col gap-y-5 text-center text-white">
        <span class="uppercase"> Zuby zdravé, úspev krásny: Starajte sa o svoje ústa každý deň!</span>
        <h1 class="text-7xl font-bold">Ziskajte najlepšíu zubnú starostlivosť.</h1>

        <div class="flex justify-center gap-x-5">
          <a href="" class="button large"> Objednajte sa </a>
          <a href="" class="button large orange"> Kontaktujte nás </a>
        </div>
      </div>
    </section>

    <!-- Info Section -->
    <section class="content-wrapper relative -mt-16 grid grid-cols-3 bg-red-100">
      <!-- Otvaracie Hodiny -->
      <div class="bg-skyBlue flex flex-col p-10">
        <span class="text-2xl font-medium text-white"> Otvaracie hodiny </span>

        <div class="mt-3 flex flex-col gap-y-3 text-white">
          <div class="flex items-center justify-between">
            <span>Pon - Pia</span>
            <span>6:00 - 20:00</span>
          </div>
          <div class="flex items-center justify-between">
            <span>Sobota</span>
            <span>9:00 - 16:00</span>
          </div>
          <div class="flex items-center justify-between">
            <span>Nedeľa</span>
            <span>9:00 - 13:00</span>
          </div>
        </div>

        <a href="" class="button white mt-5 text-center font-bold"> Objednajte sa </a>
      </div>

      <!-- Vyhladat doktora -->
      <div class="bg-darkBlue flex flex-col p-10">
        <span class="text-2xl font-medium text-white"> Vyhľadať doktora </span>

        <form class="mt-3 flex flex-col gap-y-3">
          <input class="w-full px-5 py-2" type="text" name="reservation-date" id="reservation-date" placeholder="dátum objednania" />
          <input class="w-full px-5 py-2" type="text" name="service" id="service" placeholder="Vyberte službu" />

          <a href="" class="button white text-center font-bold"> Vyhľadajte </a>
        </form>
      </div>

      <!-- Objednanie sa -->
      <div class="bg-orange flex flex-col p-10">
        <span class="text-2xl font-medium text-white"> Objednajte sa </span>
        <p class="mt-5 pr-14 text-white">
          Ak máte problémy so zubami, alebo sa chcete len poradiť. Neváhajte nám zavolať na číslo:
        </p>
        <span class="mt-5 text-3xl font-semibold text-white"> +00 123 456 789 </span>
      </div>
    </section>

    <!-- Naše služby -->
    <section id="sluzby" class="content-wrapper section-spacing">
      <!-- Top Grid -->
      <div class="flex gap-x-10">
        <img src="/images/service-promo.jpg" alt="Promo služieb" class="h-[30rem]" />

        <div>
          <div class="flex items-center">
            <span class="text-skyBlue pr-2 font-medium uppercase">Naše služby</span>
            <div class="bg-skyBlue h-[3px] w-10"></div>
            <div class="bg-orange ml-1 h-[3px] w-5"></div>
          </div>
          <h1 class="text-darkBlue mt-2 pr-36 text-5xl font-bold">Ponúkame iba služby tej najvyššej kvality</h1>

          <div class="mt-12 flex gap-x-5">
            <div class="card grid grid-rows-[1fr_min-content]">
              <img src="/images/service-1.jpg" alt="Estetická stomatológia" />
              <span class="bg-offWhite text-darkBlue w-full py-4 text-center text-lg font-semibold">Estetická stomatológia</span>
            </div>

            <div class="card grid grid-rows-[1fr_min-content]">
              <img src="/images/service-2.jpg" alt="Zubná chirurgia" />
              <span class="bg-offWhite text-darkBlue w-full py-4 text-center text-lg font-semibold">Zubná chirurgia</span>
            </div>
          </div>
        </div>
      </div>

      <!-- Bottom Grid -->
      <div class="mt-10 flex gap-x-10">
        <div class="card grid grid-rows-[1fr_min-content]">
          <img src="/images/service-3.jpg" alt="Zubné implantáty" />
          <span class="bg-offWhite text-darkBlue w-full py-4 text-center text-lg font-semibold">Zubné implantáty</span>
        </div>
        <div class="card grid grid-rows-[1fr_min-content]">
          <img src="/images/service-4.jpg" alt="Bielenie zubov" />
          <span class="bg-offWhite text-darkBlue w-full py-4 text-center text-lg font-semibold">Bielenie zubov</span>
        </div>

        <div class="bg-skyBlue flex flex-col items-center justify-center p-10">
          <span class="text-2xl font-medium text-white"> Objednajte sa </span>
          <p class="mt-5 text-center text-white">
            Ak máte problémy so zubami, alebo sa chcete len poradiť. Neváhajte nám zavolať na číslo:
          </p>
          <span class="mt-5 text-3xl font-semibold text-white"> +00 123 456 789 </span>
        </div>
      </div>
    </section>

    <!-- Prva Prehliadka -->
    <section class="section-spacing relative flex items-center justify-center py-24">
      <img src="/images/bg-1.jpg" alt="Pozadie Hero" class="absolute inset-0 h-full w-full object-cover" aria-hidden="true" />

      <div class="bg-skyBlue/80 z-10 flex max-w-3xl flex-col items-center justify-center p-10">
        <span class="text-center text-5xl font-semibold text-white"> Ušetrite až 30% pri prvej prehliadke </span>
        <p class="mt-5 text-center leading-loose text-white">
          Prejdie k nám a získajte túto neskutočnú zľavu. Všetky ošetrenia a služby, súvisiace s odstránením nájdených
          problémov počas prvej prehliadky, budú účtované so zľavou 30%
        </p>
        <div class="mt-5 flex justify-center gap-x-5">
          <a href="" class="button large dark"> Objednajte sa </a>
          <a href="" class="button large white"> Zistite viac </a>
        </div>
      </div>
    </section>

    <!-- Cennik -->
    <section id="cennik" class="content-wrapper section-spacing flex">
      <!-- Left Content-->
      <div class="flex w-2/3 flex-col">
        <div class="flex items-center">
          <span class="text-skyBlue pr-2 font-medium uppercase">Cenník</span>
          <div class="bg-skyBlue h-[3px] w-10"></div>
          <div class="bg-orange ml-1 h-[3px] w-5"></div>
        </div>
        <h1 class="text-darkBlue mt-2 pr-24 text-5xl font-bold">Ponúkame férové ceny za špičkovú kvalitu</h1>
        <p class="text-text mt-5 pr-28">
          Neváhajte využiť naše príjemné a ukľudnujúce prosredie, v ktorom sa budete cítiť bezpečne a bez zbytočných
          stresov. Klinika je vybavena najnovšími technológiami a vysoko kvalifikovaným a profesionálnym zubným
          personálom, vrátane zubárov, ortodontov a zubných hygienikov.
        </p>

        <span class="text-skyBlue mt-5 pr-2 text-lg font-medium uppercase">Objednajte sa na čísle</span>
        <span class="text-darkBlue mt-1 text-4xl font-bold"> +00 123 456 789 </span>
      </div>

      <!-- Right Content -->
      <div class="relative">
        <!-- Scroll right -->

        <button id="carousel-scroll-left" class="h-14 w-14 bg-sky-500 flex items-center justify-center absolute top-1/2 -ml-7">
          <i class="fa fa-long-arrow-left text-white" aria-hidden="true"></i>
        </button>

        <!-- Scroll Left -->
        <button id="carousel-scroll-right" class="h-14 w-14 bg-sky-500 flex items-center justify-center absolute top-1/2 right-0 -mr-7">
          <i class="fa fa-long-arrow-right text-white" aria-hidden="true"></i>
        </button>

        <!-- Carousel -->
        <div id="carousel-wrapper" class="flex gap-x-10 ">
          @foreach($pricelist as $key => $item)
          <div class="flex flex-col items-center border-b border-sky-500 bg-sky-50 {{ $loop->index >= 2 ? 'hidden' : ''  }}">
            <img src="{{$item->picture}}" alt="Dentálna hygiena" />

            <span class="-mt-10 bg-sky-50 p-4 text-4xl font-semibold text-sky-500">{{$item->price}}€</span>
            <h2 class="text-darkBlue mt-5 text-2xl font-bold">{{$item->name}}</h2>
            <span class="my-2 h-[2px] w-1/3 bg-sky-200"></span>


            <div class="mt-2 flex w-full flex-col gap-y-3 px-10">

              @foreach(unserialize($item->advantages) as $advantage)
              <div class="flex items-center justify-between">
                <span class="text-text text-lg">{{$advantage}}</span>
                <i class="fa fa-check text-sky-500" aria-hidden="true"></i>
              </div>
              @endforeach
            </div>

            <a href="" class="button translate-y-1/2 font-semibold"> Objednajte sa </a>
          </div>
          @endforeach
        </div>
      </div>
    </section>

    <!-- Naši špecialisti -->
    <section id="specialisti" class="section-spacing relative py-36">
      <img src="/images/bg-2.jpg" alt="Rôzny doktori na fotke" aria-hidden="true" class="absolute top-0 h-96 w-full object-cover opacity-80" />

      <div class="content-wrapper relative z-10 grid grid-cols-3 grid-rows-2 gap-10">
        <!-- Initial Card -->
        <div class="flex flex-col items-start bg-sky-50 p-10">
          <div class="flex items-center">
            <span class="text-skyBlue pr-2 font-medium uppercase">Naši špecialisti</span>
            <div class="bg-skyBlue h-[3px] w-10"></div>
            <div class="bg-orange ml-1 h-[3px] w-5"></div>
          </div>

          <h1 class="text-darkBlue mt-1 text-4xl font-bold">Spoznaje naších certifikovaných zubných profesionálov</h1>
          <a href="" class="button mt-5 px-10 py-4"> Objednajte sa </a>
        </div>

        <!-- Doctor 1 -->
        @foreach($doctors as $key => $item)
        <div class="card flex flex-col items-center bg-sky-50 p-2 pb-5">
          <img src="{{$item['img']}}" alt="Dentálna hygiena" />

          <div class="-mt-6 grid grid-cols-4 gap-x-2 bg-sky-50 p-2 text-white">
            <div class="flex items-center justify-center bg-sky-500 p-2 text-lg">
              <i class="fa fa-twitter" aria-hidden="true"></i>
            </div>
            <div class="flex items-center justify-center bg-sky-500 p-2 text-lg">
              <i class="fa fa-facebook" aria-hidden="true"></i>
            </div>
            <div class="flex items-center justify-center bg-sky-500 p-2 text-lg">
              <i class="fa fa-linkedin" aria-hidden="true"></i>
            </div>
            <div class="flex items-center justify-center bg-sky-500 p-2 text-lg">
              <i class="fa fa-instagram" aria-hidden="true"></i>
            </div>
          </div>
          <h2 class="text-darkBlue mt-2 text-2xl font-bold">{{$item['name']}}</h2>
          <span class="text-sky-500">{{$item['job']}}</span>
        </div>
        @endforeach

      </div>
    </section>

    <!-- Footer -->
    <footer class="bg-darkBlue py-16">
      <div class="content-wrapper mx-auto grid grid-cols-4">
        <div>
          <h1 class="mb-5 text-2xl font-medium text-white">Obľúbené odkazy</h1>

          <div class="flex flex-col gap-y-1">
            <div>
              <i class="fa fa-long-arrow-right text-sky-500" aria-hidden="true"></i>
              <a href="#" class="text-offWhite">Úvod</a>
            </div>
            <div>
              <i class="fa fa-long-arrow-right text-sky-500" aria-hidden="true"></i>
              <a href="#" class="text-offWhite">O nás</a>
            </div>
            <div>
              <i class="fa fa-long-arrow-right text-sky-500" aria-hidden="true"></i>
              <a href="#" class="text-offWhite">Naši špecialisti</a>
            </div>
          </div>
        </div>
        <div>
          <h1 class="mb-5 text-2xl font-medium text-white">Užitočné odkazy</h1>
          <div class="flex flex-col gap-y-1">
            <div>
              <i class="fa fa-long-arrow-right text-sky-500" aria-hidden="true"></i>
              <a href="#" class="text-offWhite">Služby</a>
            </div>
            <div>
              <i class="fa fa-long-arrow-right text-sky-500" aria-hidden="true"></i>
              <a href="#" class="text-offWhite">Cenník</a>
            </div>
            <div>
              <i class="fa fa-long-arrow-right text-sky-500" aria-hidden="true"></i>
              <a href="#" class="text-offWhite">Kontakt</a>
            </div>
          </div>
        </div>
        <div>
          <h1 class="mb-5 text-2xl font-medium text-white">Kde nás nájdete</h1>
          <div class="flex flex-col gap-y-1">
            <div>
              <i class="fa fa fa-map-marker text-sky-500" aria-hidden="true"></i>
              <a href="#" class="text-offWhite">123 Ulica, Bratislava, Slovensko</a>
            </div>
            <div>
              <i class="fa fa-envelope-o text-sky-500" aria-hidden="true"></i>
              <a href="mailto:info@ZubZen.com" class="text-offWhite">info@ZubZen.com</a>
            </div>
            <div>
              <i class="fa fa-phone text-sky-500" aria-hidden="true"></i>
              <a href="tel:+000123456789" class="text-offWhite">+000 123 456 789</a>
            </div>
          </div>
        </div>
        <div>
          <h1 class="mb-5 text-2xl font-medium text-white">Sledujte nás na</h1>
          <div class="flex gap-x-2 text-white">
            <div class="flex h-10 w-10 items-center justify-center bg-sky-500 text-lg">
              <i class="fa fa-twitter" aria-hidden="true"></i>
            </div>
            <div class="flex h-10 w-10 items-center justify-center bg-sky-500 text-lg">
              <i class="fa fa-facebook" aria-hidden="true"></i>
            </div>
            <div class="flex h-10 w-10 items-center justify-center bg-sky-500 text-lg">
              <i class="fa fa-linkedin" aria-hidden="true"></i>
            </div>
            <div class="flex h-10 w-10 items-center justify-center bg-sky-500 text-lg">
              <i class="fa fa-instagram" aria-hidden="true"></i>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </main>
</body>

</html>
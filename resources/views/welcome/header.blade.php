<section class="relative mx-auto flex w-full max-w-screen-2xl px-8">
    <div class="prose mx-auto w-full pt-36 text-center lg:mx-0 lg:w-1/2 lg:pr-2 lg:text-left">
        <h1>Bienvenidos a COTRANSMEBA</h1>
        <p>Somos una corporación para la transformación del tejido social del medio y bajo Atrato para el desarrollo
            de la región. </p>
        <p class="mb-0"><span class="font-semibold">Contáctanos</span> <x-button class="btn-link btn-sm"
            no-wire-navigate link="tel:+573145375318">314-537-5318</x-button></p>
        <p class="mt-0 text-xs opacity-80">Para cualquier pregunta o inquietud</p>
        <x-button class="btn-outline mt-2" link="#contact" no-wire-navigate>Ir a contacto</x-button>
    </div>
    <div class="hidden w-1/2 lg:block"></div>
    <div class="absolute right-0 hidden w-1/2 lg:block">
        <x-slider class="rounded-bl-3xl shadow-xl 2xl:rounded-br-3xl" :sliders="$headerSliders" />
    </div>
</section>

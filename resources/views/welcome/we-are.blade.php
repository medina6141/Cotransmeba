<section class="relative z-10 mx-auto max-w-screen-2xl px-8 pb-20 pt-20 md:pb-0">
    <div class="flex items-center gap-8">
        <div class="relative hidden basis-1/2 gap-8 pb-9 md:flex md:w-1/2">
            <div class="flex-1">
                <x-icon.waves class="absolute -left-5 top-5 h-auto w-10 text-sky-300"></x-icon.waves>
                <img class="mb-8 rounded-md shadow" src="{{ asset('img/cotransmeba_g_11.jpeg') }}" alt="Cotransmeba">
                <img class="rounded-md shadow" src="{{ asset('img/cotransmeba_g_31.jpeg') }}" alt="Cotransmeba">
            </div>
            <div class="relative flex-1">
                <x-icon.middle-circle class="h-auto w-12 text-orange-500"></x-icon.middle-circle>
                <img class="mb-5 mt-7 rounded-md shadow" src="{{ asset('img/cotransmeba_g_9.jpeg') }}"
                    alt="Cotransmeba">
                <x-icon.middle-circle
                    class="absolute -bottom-9 -mb-0.5 h-auto w-full text-emerald-500 dark:text-base-300"
                    :vertical="true"></x-icon.middle-circle>
                <x-logo class="absolute -bottom-[21%] left-1/2 h-auto w-[110%] -translate-x-1/2" :dark="true"
                    :noSwap="true" />
            </div>
        </div>
        <div class="prose text-center md:w-1/2 md:text-left">
            <h4 class="text-orange-500 dark:text-orange-100">Quiénes somos</h4>
            <h2>Somos un espacio de concertación, participación e integración</h2>
            <p>
                Para los diferentes miembros étnicos territoriales de comunidades negras afrocolombianas raizales,
                palenqueras, indígenas y mestizos, queconforman este territorio, nuestro principal objetivo, será
                generar todos los mecanismos para la reconstrucción de los diferentes escenarios, que garanticen una
                vida digna para todos nuestros conciudadanos.
            </p>
        </div>
    </div>
</section>

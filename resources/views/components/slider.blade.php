@props(['class' => '', 'sliders' => []])
<div class="{{ $class }} relative max-w-full overflow-hidden" x-data="slider(@js($sliders))">
    <img class="invisible object-cover" src="{{ asset('img/cotransmeba_g_1.jpeg') }}" alt="COTRANSMEBA">
    <template x-for="(slide, index) in slides">
        <div class="absolute inset-0" x-cloak x-show="currentSlideIndex == index + 1"
            x-transition.opacity.duration.1000ms>
            <img class="absolute inset-0 h-full w-full object-cover text-orange-600 dark:text-orange-300"
                x-bind:src="slide.imgSrc" x-bind:alt="slide.imgAlt" />
        </div>
    </template>
    <!-- Pause/Play Button -->
    <button
        class="absolute bottom-5 right-5 z-20 rounded-full text-orange-600 opacity-70 transition hover:opacity-90 focus-visible:opacity-80 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-orange-700 active:outline-offset-0"
        type="button" aria-label="pause carousel"
        x-on:click="(isPaused = !isPaused), setAutoplayInterval(autoplayIntervalTime)" x-bind:aria-pressed="isPaused">
        <svg class="size-7 xl:size-9" aria-hidden="true" x-cloak x-show="isPaused" xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd"
                d="M2 10a8 8 0 1 1 16 0 8 8 0 0 1-16 0Zm6.39-2.908a.75.75 0 0 1 .766.027l3.5 2.25a.75.75 0 0 1 0 1.262l-3.5 2.25A.75.75 0 0 1 8 12.25v-4.5a.75.75 0 0 1 .39-.658Z"
                clip-rule="evenodd">
        </svg>
        <svg class="size-7 xl:size-9" aria-hidden="true" x-cloak x-show="!isPaused" xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd"
                d="M2 10a8 8 0 1 1 16 0 8 8 0 0 1-16 0Zm5-2.25A.75.75 0 0 1 7.75 7h.5a.75.75 0 0 1 .75.75v4.5a.75.75 0 0 1-.75.75h-.5a.75.75 0 0 1-.75-.75v-4.5Zm4 0a.75.75 0 0 1 .75-.75h.5a.75.75 0 0 1 .75.75v4.5a.75.75 0 0 1-.75.75h-.5a.75.75 0 0 1-.75-.75v-4.5Z"
                clip-rule="evenodd">
        </svg>
    </button>
    <!-- indicators -->
    <fieldset
        class="absolute bottom-3 left-1/2 z-20 flex -translate-x-1/2 gap-4 rounded-md bg-white/75 px-1.5 py-1 dark:bg-orange-950/75 md:bottom-5 md:gap-3 md:px-2 xl:px-3 xl:py-1.5"
        role="group" aria-label="slides">
        <template x-for="(slide, index) in slides">
            <button class="size-2 xl:size-3 cursor-pointer rounded-full bg-orange-600 transition dark:bg-neutral-300"
                x-on:click="currentSlideIndex = index + 1"
                x-bind:class="[currentSlideIndex === index + 1 ? 'bg-orange-600 dark:bg-neutral-300' :
                    'bg-orange-600/50 dark:bg-neutral-300/50'
                ]"
                x-bind:aria-label="'slide ' + (index + 1)"></button>
        </template>
    </fieldset>
</div>

<?php

namespace App\Livewire;

use Livewire\Component;
use Mary\Traits\Toast;

class Welcome extends Component
{
    use Toast;

    public array $headerSliders = [];
    public array $footSliders = [];

    public function mount()
    {
        $this->headerSliders = [
            [
                'imgSrc' => asset('img/cotransmeba_g_1.jpeg'),
                'imgAlt' => 'COTRANSMEBA',
            ],
            [
                'imgSrc' => asset('img/cotransmeba_g_2.jpeg'),
                'imgAlt' => 'COTRANSMEBA',
            ],
            [
                'imgSrc' => asset('img/cotransmeba_g_3.jpeg'),
                'imgAlt' => 'COTRANSMEBA',
            ],
            [
                'imgSrc' => asset('img/cotransmeba_g_4.jpeg'),
                'imgAlt' => 'COTRANSMEBA',
            ],
            [
                'imgSrc' => asset('img/cotransmeba_g_5.jpeg'),
                'imgAlt' => 'COTRANSMEBA',
            ],
            [
                'imgSrc' => asset('img/cotransmeba_g_8.jpeg'),
                'imgAlt' => 'COTRANSMEBA',
            ],
        ];

        $this->footSliders = [
            [
                'imgSrc' => asset('img/cotransmeba_g_7.jpeg'),
                'imgAlt' => 'COTRANSMEBA',
            ],
            [
                'imgSrc' => asset('img/cotransmeba_g_8.jpeg'),
                'imgAlt' => 'COTRANSMEBA',
            ],
            [
                'imgSrc' => asset('img/cotransmeba_g_9.jpeg'),
                'imgAlt' => 'COTRANSMEBA',
            ],
            [
                'imgSrc' => asset('img/cotransmeba_g_10.jpeg'),
                'imgAlt' => 'COTRANSMEBA',
            ],
            [
                'imgSrc' => asset('img/cotransmeba_g_11.jpeg'),
                'imgAlt' => 'COTRANSMEBA',
            ],
            [
                'imgSrc' => asset('img/cotransmeba_g_12.jpeg'),
                'imgAlt' => 'COTRANSMEBA',
            ],
            [
                'imgSrc' => asset('img/cotransmeba_g_13.jpeg'),
                'imgAlt' => 'COTRANSMEBA',
            ],
            [
                'imgSrc' => asset('img/cotransmeba_g_14.jpeg'),
                'imgAlt' => 'COTRANSMEBA',
            ],
            [
                'imgSrc' => asset('img/cotransmeba_g_15.jpeg'),
                'imgAlt' => 'COTRANSMEBA',
            ],
        ];
    }

    public function render()
    {
        return view('livewire.welcome');
    }
}

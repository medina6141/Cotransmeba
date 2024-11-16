@props(['onlyIcon' => false, 'noSwap' => false, 'dark' => false, 'id' => '1'])
@if (!$noSwap)
    <div class="swap-rotate inline-block">
        <div class="swap">
            <input id="logoCheck_{{$id}}" type="checkbox">
            @if ($onlyIcon)
                {{-- Ligth icon --}}
                @include('logo.icon-light')
                {{-- Dark icon --}}
                @include('logo.icon-dark')
            @else
                {{-- Ligth logo --}}
                @include('logo.light')
                {{-- Dark logo --}}
                @include('logo.dark')
            @endif
        </div>
    </div>
@else
    @if ($dark)
        @if ($onlyIcon)
            {{-- Dark icon --}}
            @include('logo.icon-dark')
        @else
            {{-- Dark logo --}}
            @include('logo.dark')
        @endif
    @else
        @if ($onlyIcon)
            {{-- Ligth icon --}}
            @include('logo.icon-light')
        @else
            {{-- Ligth logo --}}
            @include('logo.light')
        @endif
    @endif
@endif

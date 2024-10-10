@props(['active' => false])

<li class="mr-3 flex-1">
    <a class="{{ $active ? 'block py-1 md:py-3 pl-1 align-middle text-white hover: border-b-2 border-blue-600' : 'block py-1 md:py-3 pl-1 align-middle text-white no-underline' }}"
        {{ $attributes }}>
        <i class="fas fa-chart-area pr-0 md:pr-3 text-blue-600"></i><span
            class="pb-1 md:pb-0 text-xs md:text-base text-white md:text-white block md:inline-block">{{ $slot }}</span>
    </a>
</li>

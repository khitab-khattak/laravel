@props(['active' => false, 'type' => 'a'])

@if ($type == 'a')
    <a {{ $attributes->merge([
        'class' => ($active ? 'block rounded-md bg-gray-900 ' : '') . 'px-3 py-2 text-base font-medium text-white'
    ]) }} aria-current="{{ $active ? 'page' : 'false' }}">
        {{ $slot }}
    </a>
@else
    <button {{ $attributes->merge([
        'class' => ($active ? 'block rounded-md bg-gray-900 ' : '') . 'px-3 py-2 text-base font-medium text-white'
    ]) }} aria-current="{{ $active ? 'page' : 'false' }}">
        {{ $slot }}
    </button>
@endif

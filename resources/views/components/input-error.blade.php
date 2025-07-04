@props(['message'])

@if ($message)
    <p {{ $attributes->merge(['class' => 'text-danger']) }}>{{ $message }}</p>
@endif

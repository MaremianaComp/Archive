@props(['value' => ''])

<textarea
{{ $attributes->class([
'form-control',
]) }}>
{{ (old($attributes->get('name')) ?: $value) }}
{{-- old('content') --}}
{{-- {{ $slot }} --}}
</textarea>


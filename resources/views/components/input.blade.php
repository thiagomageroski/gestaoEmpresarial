@props(['label' => null, 'name', 'type' => 'text', 'value' => null, 'placeholder' => ''])
<div class="space-y-1">
  @if($label)<label class="text-sm font-medium" for="{{ $name }}">{{ $label }}</label>@endif
  <input id="{{ $name }}" name="{{ $name }}" type="{{ $type }}" value="{{ old($name, $value) }}"
    placeholder="{{ $placeholder }}"
    {{ $attributes->merge(['class' => 'w-full border rounded px-3 py-2']) }}>
  @error($name)<p class="text-xs text-red-600">{{ $message }}</p>@enderror
</div>

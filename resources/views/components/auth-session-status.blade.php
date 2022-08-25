@props(['status'])

@if ($status)
<div class=" flex justify-center bg-blue-100 border-t border-b border-blue-500 text-blue-700 px-4 py-3" role="alert">
    <div {{ $attributes->merge(['class' => 'font-medium text-sm text-green-600']) }}>
        {{ $status }}
    </div>
</div>
@endif

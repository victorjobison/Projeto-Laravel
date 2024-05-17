@if ($errors->any())
    <div {{ $attributes }}>
        <div class="text-sm text-red-600">{{ __('Credenciais Inválidas!') }}</div>
    </div>
@endif

@if ($errors->any())
    <div class="max-px-5">
        <div {{ $attributes }}>
            @foreach ($errors->all() as $error)
            <p class="block font-medium text-sm text-red-700">
                {{ $error }}
            </p>
            @endforeach
        </div>
    </div>
    
@endif
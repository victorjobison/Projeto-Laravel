@if ($errors->any())
    <div class="max-px-5">
        <div {{ $attributes }}>
            <ul class="px-5 text-sm text-red-600 list-disc list-inside">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    </div>
    
@endif
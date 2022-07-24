@if (session()->has('success'))
    <x-shiroyuki-tabler::alerts.success :title="$errorTitle">
        {{ session('success') }}
    </x-shiroyuki-tabler::alerts.success>
@endif

@if (session()->has('error'))
    <x-shiroyuki-tabler::alerts.error :title="$errorTitle">
        {{ session('error') }}
    </x-shiroyuki-tabler::alerts.error>
@endif

@if (session()->has('errors'))
    <x-shiroyuki-tabler::alerts.error :title="$errorTitle">
        <ul>
            @foreach ($errors->all() as $error)
                <li>
                    {{ $error }}
                </li>
            @endforeach
        </ul>
    </x-shiroyuki-tabler::alerts.error>
@endif
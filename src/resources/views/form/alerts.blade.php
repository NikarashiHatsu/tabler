@if (session()->has('success'))
    <x-tabler::alerts.success :title="$errorTitle">
        {{ session('success') }}
    </x-tabler::alerts.success>
@endif

@if (session()->has('error'))
    <x-tabler::alerts.error :title="$errorTitle">
        {{ session('error') }}
    </x-tabler::alerts.error>
@endif

@if (session()->has('errors'))
    <x-tabler::alerts.error :title="$errorTitle">
        <ul>
            @foreach ($errors->all() as $error)
                <li>
                    {{ $error }}
                </li>
            @endforeach
        </ul>
    </x-tabler::alerts.error>
@endif
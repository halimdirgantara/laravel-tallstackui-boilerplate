<div>
    <x-tall-side-bar>
        @foreach ($menu as $item)
            <x-tall-side-bar.item text="{{ $item['text'] }}" icon="{{ $item['icon'] }}" :route="$item['route']" />
        @endforeach
    </x-tall-side-bar>
</div>

<div>
    <x-tall-layout.header>
        <x-slot:right>
            <x-tall-dropdown text="Hello, {{ auth()->user()->name }}!">
                <form method="POST" action="#">
                    @csrf
                    <x-tall-dropdown.items text="Logout"
                        onclick="event.preventDefault(); this.closest('form').submit();" />
                </form>
            </x-tall-dropdown>
        </x-slot:right>
    </x-tall-layout.header>
</div>

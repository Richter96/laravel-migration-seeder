<header>
    <nav class="nav nav-tabs bg-warning pt-2 px-4">
        <a class="nav-link  {{ Route::currentRouteName() === 'home' ? 'active bg-black text-white' : '' }}"
            href="{{ route('home') }}" aria-current="page">Home</a>
        <a class="nav-link {{ Route::currentRouteName() === 'contacts' ? 'active bg-black text-white' : '' }}"
            href="{{ route('contacts') }}">Contacts</a>
    </nav>
</header>

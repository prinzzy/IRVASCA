<x-maz-sidebar :href="route('dashboard')" :logo="asset('images/logo/logo.png')">

    <!-- Add Sidebar Menu Items Here -->

    <x-maz-sidebar-item name="Dashboard" :link="route('dashboard')" icon="bi bi-grid-fill"></x-maz-sidebar-item>
    <x-maz-sidebar-item name="Product" icon="bi bi-stack">
    <x-maz-sidebar-sub-item name="Manage Product" :link="route('products.index')"></x-maz-sidebar-sub-item>
    </x-maz-sidebar-item>
</x-maz-sidebar>
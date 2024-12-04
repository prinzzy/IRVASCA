<x-maz-sidebar :href="route('dashboard-collaborator')" :logo="asset('images/logo/logo_putihNOBG.png')">

    <!-- Add Sidebar Menu Items Here -->

    <x-maz-sidebar-item name="Dashboard" :link="route('dashboard-collaborator')" icon="bi bi-grid-fill"></x-maz-sidebar-item>
    <x-maz-sidebar-item name="Penjualan" :link="route('sales.index')" icon="bi bi-graph-up"></x-maz-sidebar-item>
</x-maz-sidebar>
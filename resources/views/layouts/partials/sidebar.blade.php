<x-maz-sidebar :href="route('dashboard')" :logo="asset('images/logo/logoputihNOBG.png')">

    <!-- Add Sidebar Menu Items Here -->

    <x-maz-sidebar-item name="Dashboard" :link="route('dashboard')" icon="bi bi-grid-fill"></x-maz-sidebar-item>
    <x-maz-sidebar-item name="Product" icon="bi bi-stack">
        <x-maz-sidebar-sub-item name="Manage Product" :link="route('products.index')"></x-maz-sidebar-sub-item>
        <x-maz-sidebar-sub-item name="Discount" :link="route('discounts.index')"></x-maz-sidebar-sub-item>
    </x-maz-sidebar-item>

    <x-maz-sidebar-item name="Countdown" icon="bi bi-clock">
        <x-maz-sidebar-sub-item name="Submitted Email" :link="route('admin.emails.index')"></x-maz-sidebar-sub-item>
    </x-maz-sidebar-item>
    <x-maz-sidebar-item name="Transactions" icon="bi bi-bank">
        <x-maz-sidebar-sub-item name="Transaction History" :link="route('transactions.index')"></x-maz-sidebar-sub-item>
        <x-maz-sidebar-sub-item name="Order History" :link="route('admin.orders.index')"></x-maz-sidebar-sub-item>
    </x-maz-sidebar-item>
</x-maz-sidebar>
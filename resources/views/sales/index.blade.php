   <x-app-cust-layout>
       <x-slot name="header">
           <h2 class="font-semibold text-xl text-dark leading-tight">
           </h2>
       </x-slot>

       @if(session('success'))
       <div class="alert alert-success">{{ session('success') }}</div>
       @endif

       <div class="container">
           <h1>Transaksi Penjualan</h1>
           <table class="table">
               <thead>
                   <tr>
                       <th>ID</th>
                       <th>Status</th>
                       <th>Voucher Code</th>
                       <th>Nama Pelanggan</th>
                       <th>Produk</th>
                       <th>Total Amount</th>
                   </tr>
               </thead>
               <tbody>
                   @foreach($orders as $order)
                   <tr>
                       <td>{{ $order->id }}</td>
                       <td>{{ $order->status }}</td>
                       <td>{{ $order->discount_code }}</td>
                       <td>{{ $order->customer_name }}</td>
                       <td>{{ $order->products }}</td>
                       <td>{{ $order->total_amount }}</td>
                   </tr>
                   @endforeach
               </tbody>
           </table>
       </div>
   </x-app-cust-layout>
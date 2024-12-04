   <x-app-cust-layout>
       <x-slot name="header">
           <div class="row">
               <div class="col-12 col-md-6 order-md-1 order-last">
                   <h3>Selamat Datang di IRVASCA Collaborator!</h3>
                   <p class="text-subtitle text-muted">Terimakasih sudah bergabung dengan kami</p>
               </div>
               <div class="col-12 col-md-6 order-md-2 order-first">
                   <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                       <ol class="breadcrumb">
                           <li class="breadcrumb-item active" aria-current="page">IRVASCA Collaborator</li>
                       </ol>
                   </nav>
               </div>
           </div>
       </x-slot>

       <section class="section">
           <div class="row">
               <div class="col-12 col-md-8">
                   <div class="card">
                       <div class="card-header">
                           <h4>Grafik Penjualan</h4>
                       </div>
                       <div class="card-body">
                           <canvas id="salesChart"></canvas>
                       </div>
                   </div>
               </div>
               <div class="col-12 col-md-4">
                   <div class="card">
                       <div class="card-header">
                           <h4>Transaksi</h4>
                       </div>
                       <div class="card-body">
                           <ul class="list-group">
                               <li class="list-group-item d-flex justify-content-between align-items-center">
                                   <a href="{{ route('sales.index') }}" class="stretched-link">Total Pesanan</a>
                                   <span id="totalOrders" class="badge bg-primary rounded-pill">Loading...</span>
                               </li>
                           </ul>
                       </div>
                   </div>
               </div>
           </div>
       </section>
       <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
       <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
       <script>
           $(document).ready(function() {
               $.ajax({
                   url: '/api/dashboard-data',
                   method: 'GET',
                   success: function(data) {
                       // Update total orders
                       $('#totalOrders').text(data.totalOrders);

                       // Update chart
                       var ctx = document.getElementById('salesChart').getContext('2d');
                       var salesChart = new Chart(ctx, {
                           type: 'bar',
                           data: {
                               labels: Object.keys(data.salesData),
                               datasets: [{
                                   label: 'Pesanan',
                                   data: Object.values(data.salesData),
                                   backgroundColor: 'rgba(54, 162, 235, 0.2)',
                                   borderColor: 'rgba(54, 162, 235, 1)',
                                   borderWidth: 1
                               }]
                           },
                           options: {
                               animation: {
                                   onComplete: function() {
                                       var chartInstance = this.chart;
                                       var ctx = chartInstance.ctx;
                                       ctx.textAlign = 'center';
                                       ctx.textBaseline = 'bottom';

                                       this.data.datasets.forEach(function(dataset, i) {
                                           var meta = chartInstance.getDatasetMeta(i);
                                           meta.data.forEach(function(bar, index) {
                                               var data = dataset.data[index];
                                               ctx.fillText(data, bar.x, bar.y - 5);
                                           });
                                       });
                                   },
                                   duration: 2000,
                                   easing: 'easeOutBounce'
                               },
                               scales: {
                                   y: {
                                       beginAtZero: true
                                   }
                               }
                           }
                       });
                   },
                   error: function() {
                       $('#totalOrders').text('Data tidak tersedia');
                   }
               });
           });
       </script>
   </x-app-cust-layout>
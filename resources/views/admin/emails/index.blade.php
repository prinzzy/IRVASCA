<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-dark leading-tight">
            {{ __('Submitted Email') }}
        </h2>
    </x-slot>

    <!--<div class="container my-4">-->
    <!--    <form action="{{ route('admin.emails.import') }}" method="POST" enctype="multipart/form-data">-->
    <!--        @csrf-->
    <!--        <div class="form-group">-->
    <!--            <label for="file">Upload Email List (Excel):</label>-->
    <!--            <input type="file" name="email_file" class="form-control" required>-->
    <!--        </div>-->
    <!--        <button type="submit" class="btn btn-primary">Import Emails</button>-->
    <!--    </form>-->

    <!--     <div class="progress mt-4">-->
    <!--        <div id="progress-bar" class="progress-bar" role="progressbar" -->
    <!--             style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">-->
    <!--            0% emails processed-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->

    <!-- Email Table -->
    <div class="mb-4">
        <h3 class="text-lg font-weight-bold mb-3">Email List</h3>
        <div class="table-responsive">
            <table class="table table-bordered table-hover" id="emailTable">
                <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>Email</th>
                        <th>Created At</th>
                        <th>Updated At</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>

    <!-- Total Emails Per Month -->
    <div class="mb-4">
        <h3 class="text-lg font-weight-bold mb-3">Total Emails Per Month</h3>
        <ul id="emailTotalsList" class="list-group"></ul>
        <div class="mt-4">
            <canvas id="emailStatsChart"></canvas>
        </div>
    </div>

    <!-- Email Counts by Day Chart -->
    <div>
        <h3 class="text-lg font-weight-bold mb-3">Email Counts by Day</h3>
        <div class="mt-4">
            <canvas id="emailCountsByDayChart"></canvas>
        </div>
    </div>
    </div>

    <!-- DataTables and Chart.js -->

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.7.0/dist/chart.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-adapter-date-fns@latest"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize DataTable with server-side processing
            $('#emailTable').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{{ route("admin.emails.data") }}', // Correct usage of double quotes inside the Blade directive
                columns: [{
                        data: 'id',
                        name: 'id'
                    },
                    {
                        data: 'email',
                        name: 'email'
                    },
                    {
                        data: 'created_at',
                        name: 'created_at'
                    },
                    {
                        data: 'updated_at',
                        name: 'updated_at'
                    }
                ],
                pageLength: 50, // Adjust based on your needs
            });


            // Fetch email statistics asynchronously
            fetch(`{{ route('admin.emails.statsByMonth') }}`)
                .then(response => response.json())
                .then(data => {
                    const ctx = document.getElementById('emailStatsChart').getContext('2d');
                    new Chart(ctx, {
                        type: 'bar',
                        data: {
                            labels: data.map(item => item.month),
                            datasets: [{
                                label: 'Total Emails',
                                data: data.map(item => item.count),
                                backgroundColor: 'rgba(54, 162, 235, 0.5)',
                                borderColor: 'rgba(54, 162, 235, 1)',
                                borderWidth: 1
                            }]
                        },
                        options: {
                            responsive: true,
                            scales: {
                                y: {
                                    beginAtZero: true
                                },
                                x: {
                                    title: {
                                        display: true,
                                        text: 'Month'
                                    }
                                }
                            }
                        }
                    });
                });

            // Email counts by day
            fetch(`{{ route('admin.emails.countsByDay') }}`)
                .then(response => response.json())
                .then(data => {
                    const ctx = document.getElementById('emailCountsByDayChart').getContext('2d');
                    new Chart(ctx, {
                        type: 'line',
                        data: {
                            labels: data.map(item => new Date(item.date)),
                            datasets: [{
                                label: 'Emails Per Day',
                                data: data.map(item => ({
                                    x: new Date(item.date),
                                    y: item.count
                                })),
                                fill: false,
                                borderColor: 'rgba(75, 192, 192, 1)',
                                tension: 0.1
                            }]
                        },
                        options: {
                            responsive: true,
                            scales: {
                                x: {
                                    type: 'time',
                                    time: {
                                        unit: 'day'
                                    },
                                    title: {
                                        display: true,
                                        text: 'Date'
                                    }
                                },
                                y: {
                                    beginAtZero: true,
                                    title: {
                                        display: true,
                                        text: 'Count'
                                    }
                                }
                            }
                        }
                    });
                })
                .catch(error => console.error('Error fetching email counts by day:', error));
        });

        document.addEventListener('DOMContentLoaded', function() {
            // Check if session data for progress exists
            var progress = "{{ session('progress.total', 0) }}"; // Default to 0 if session not set
            var progressBar = document.getElementById('progress-bar');

            // Ensure progress is a valid percentage
            var percentage = Math.min(100, parseInt(progress, 10));

            // Update the progress bar dynamically based on session data
            if (percentage > 0) {
                progressBar.style.width = percentage + '%';
                progressBar.setAttribute('aria-valuenow', percentage);
                progressBar.textContent = percentage + '% emails processed';
            }
        });
    </script>
</x-app-layout>
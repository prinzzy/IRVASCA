<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-dark leading-tight">
            {{ __('Submitted Email') }}
        </h2>
    </x-slot>

    <div class="container my-4">
        <form action="{{ route('admin.emails.import') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="file">Upload Email List (Excel):</label>
                <input type="file" name="email_file" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Import Emails</button>
        </form>
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
                    <tbody>
                        @forelse($emails as $email)
                        <tr>
                            <td>{{ $email->id }}</td>
                            <td>{{ $email->email }}</td>
                            <td>{{ $email->created_at }}</td>
                            <td>{{ $email->updated_at }}</td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="4" class="text-center">No emails found</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Total Emails Per Month -->
        <div class="mb-4">
            <h3 class="text-lg font-weight-bold mb-3">Total Emails Per Month</h3>
            <ul id="emailTotalsList" class="list-group">
                <!-- Totals will be injected here -->
            </ul>
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

    <!-- External Libraries -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.7.0/dist/chart.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-adapter-date-fns@latest"></script>

    <!-- JavaScript for DataTables and Charts -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize DataTable for the email table
            $('#emailTable').DataTable();

            // Fetch and display total emails per month
            fetch(`{{ route('admin.emails.statsByMonth') }}`)
                .then(response => response.json())
                .then(data => {
                    const totalsList = document.getElementById('emailTotalsList');
                    data.forEach(item => {
                        const li = document.createElement('li');
                        li.className = 'list-group-item';
                        li.textContent = `${item.month}: ${item.count} emails`;
                        totalsList.appendChild(li);
                    });

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
                                    beginAtZero: true,
                                    title: {
                                        display: true,
                                        text: 'Count'
                                    }
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
                })
                .catch(error => console.error('Error fetching email stats by month:', error));

            // Fetch and display email counts by day (existing logic)
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
    </script>
</x-app-layout>
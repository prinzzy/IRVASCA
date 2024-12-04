<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-dark leading-tight">
            {{ __('Email Blast Management') }}
        </h2>
    </x-slot>

    <div class="container mt-4">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h2>Email Blasts</h2>
            <button class="btn btn-primary" data-toggle="modal" data-target="#createEmailBlastModal">
                Create New Email Blast
            </button>

        </div>

        <!-- Success Message -->
        @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif

        <!-- Email Blast Table -->
        <div class="card">
            <div class="card-header">
                <h4>Previous Email Blasts</h4>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Subject</th>
                            <th>Created At</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($emailBlasts as $blast)
                        <tr>
                            <td>{{ $blast->id }}</td>
                            <td>{{ $blast->subject }}</td>
                            <td>{{ $blast->created_at }}</td>
                            <td>
                                <button class="btn btn-info btn-sm btn-view-log" data-blast-id="{{ $blast->id }}">
                                    View Logs
                                </button>

                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="4" class="text-center">No Email Blasts Found</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Create Email Blast Modal -->
    <div class="modal fade" id="createEmailBlastModal" tabindex="-1" role="dialog" aria-labelledby="createEmailBlastModalLabel" aria-hidden="false">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <form action="{{ url('admin/email-blast/create') }}" method="POST" id="emailBlastForm">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title">Create New Email Blast</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="subject">Email Subject</label>
                            <input type="text" name="subject" id="subject" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="content">Email Content</label>
                            <!-- Plain Textarea for HTML input -->
                            <textarea name="content" id="content" class="form-control" rows="10" placeholder="Write your email content here using HTML tags..."></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Send Email Blast</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Log Modal (AJAX Fetched Content) -->
    <div class="modal fade" id="logModal" tabindex="-1" aria-labelledby="logModalLabel">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Email Blast Logs</h5>
                    <button type="button" class="close" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table class="table table-sm">
                        <thead>
                            <tr>
                                <th>Email</th>
                                <th>Status</th>
                                <th>Error Message</th>
                                <th>Timestamp</th>
                            </tr>
                        </thead>
                        <tbody id="logContent">
                            <tr>
                                <td colspan="4" class="text-center">Loading...</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Include jQuery and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.6.0/js/bootstrap.min.js"></script>

    <script>
        $(document).ready(function() {
            // Open the Create Email Blast Modal
            $('button[data-target="#createEmailBlastModal"]').on('click', function() {
                $('#createEmailBlastModal').modal('show'); // Show the Create Email Blast modal
            });

            // Form submission for Create Email Blast
            // Form submission for Create Email Blast
            $('#emailBlastForm').on('submit', function(event) {
                event.preventDefault();

                const form = $(this);

                // Serialize form data (includes content automatically)
                const formData = form.serialize();

                $.ajax({
                    url: form.attr('action'),
                    method: 'POST',
                    data: formData,
                    beforeSend: function() {
                        form.find('button[type="submit"]').prop('disabled', true);
                    },
                    success: function(response) {
                        alert('Email blast sent successfully!');
                        form[0].reset(); // Reset the form
                        $('#createEmailBlastModal').modal('hide'); // Hide the modal
                    },
                    error: function() {
                        alert('Failed to send email blast.');
                    },
                    complete: function() {
                        form.find('button[type="submit"]').prop('disabled', false);
                    }
                });
            });


            // Open the View Log Modal and fetch log data
            $(document).on('click', '.btn-view-log', function() {
                const emailBlastId = $(this).data('blast-id');
                const logContent = $('#logContent');

                $('#logModal').modal('show'); // Show the Log Modal

                // Fetch logs via AJAX
                logContent.html('<tr><td colspan="4" class="text-center">Loading...</td></tr>');

                $.ajax({
                    url: `/admin/email-blast/logs/${emailBlastId}`,
                    method: 'GET',
                    success: function(response) {
                        if (response.logs.length > 0) {
                            const rows = response.logs.map(log => `
                            <tr>
                                <td>${log.email}</td>
                                <td>${log.status}</td>
                                <td>${log.error_message || '-'}</td>
                                <td>${log.timestamp}</td>
                            </tr>
                        `);
                            logContent.html(rows.join(''));
                        } else {
                            logContent.html('<tr><td colspan="4" class="text-center">No logs found</td></tr>');
                        }
                    },
                    error: function() {
                        logContent.html('<tr><td colspan="4" class="text-center">Failed to load logs.</td></tr>');
                    }
                });
            });
        });
    </script>

</x-app-layout>
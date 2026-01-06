<x-layouts.admin>
    @section('admin')
        <div class="row">
            <div class="col-12">
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row mb-4 mt-2">
                            <div class="col-lg-8">
                                <h2 class="section-title mt-0"> Create Order Behalf of User</h2>
                            </div>
                        </div>
                        <div class="">
                            <form id="orderForm">
                                @csrf

                                <div class="form-group">
                                    <label for="userEmail">Select User</label>
                                    <select name="email" class="form-control select2" id="userEmail" required>
                                        <option value="" disabled selected>Select User</option>
                                        @foreach ($users as $user)
                                            <option value="{{ $user->email }}">{{ $user->email }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="ticketId">Select Ticket</label>
                                    <select class="form-control select2" id="ticketId" name="ticket_id" required>
                                        <option value="" disabled selected>Select Ticket</option>
                                        @foreach ($tickets as $ticket)
                                            <option value="{{ $ticket->id }}">
                                                Ticket : {{ $ticket->ticket_title }} | From Event :
                                                {{ $ticket->event_name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="quantity">Quantity</label>
                                    <input type="number" name="quantity" class="form-control" min="1" value="1"
                                        required>
                                </div>

                                <button type="submit" class="btn btn-primary">Book a Ticket</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        <script>
            $(document).ready(function() {
                $('#orderForm').submit(function(e) {
                    e.preventDefault();

                    $.ajax({
                        url: "{{ route('admin.orders.store') }}",
                        type: "POST",
                        data: $(this).serialize(),

                        success: function(response) {
                            Swal.fire({
                                icon: 'success',
                                title: 'Success',
                                text: 'Order booked successfully!',
                                timer: 2000,
                                showConfirmButton: false
                            }).then(() => {
                                window.location.href = "{{ route('admin.orders') }}";
                            });

                            $('#orderForm')[0].reset();
                            $('.select2').val(null).trigger('change');
                        },

                        error: function(xhr) {
                            let errorText = 'Something went wrong!';
                            if (xhr.responseJSON && xhr.responseJSON.errors) {
                                errorText = Object.values(xhr.responseJSON.errors).join("\n");
                            }
                            Swal.fire({
                                icon: 'error',
                                title: 'Error',
                                text: errorText
                            });
                        }
                    });
                });
            });
        </script>
    @endsection
</x-layouts.admin>

<x-layouts.admin>
    @section('admin')
        <section class="section">
            <div class="section-header">
                <h1>Event Detail </h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{ route('admin.dashboard') }}">Dashboard</a>
                    </div>
                    <div class="breadcrumb-item"><a href="{{ route('admin.events') }}">Event</a></div>
                    <div class="breadcrumb-item">Event Detail </a></div>
                </div>
            </div>
            <div class="section-body">
                <div class="row event-single">
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 mb-3">
                                        <div class="event-img w-100" style="background: url('{{ asset('1.png') }}')">
                                        </div>

                                    </div>
                                    <div class="col-12 event-description">
                                        <h2 class="mt-3">Virtual Cocktail Shake-up <button type="button"
                                                class="btn btn-primary "><a class="text-white"
                                                    href="{{ route('admin.orders') }}">Manage
                                                    Tickets</a></button></h2>
                                        <p>
                                        <div style="text-align: justify;">
                                            <font color="#000000" face="Open Sans, Arial, sans-serif">A Virtual Cocktail
                                                Party
                                                is an online group event that simulates the experience of a social gathering
                                                where guests can enjoy drinks and conversations with one another in a
                                                virtual
                                                setting. The party typically takes place on a video conferencing platform
                                                and
                                                can be hosted by a professional mixologist or a virtual event organizer.
                                            </font>
                                        </div>
                                        <div style="text-align: justify;">
                                            <font color="#000000" face="Open Sans, Arial, sans-serif"><br></font>
                                        </div>
                                        <div style="text-align: justify;">
                                            <font color="#000000" face="Open Sans, Arial, sans-serif">Before the event,
                                                guests
                                                receive a list of cocktail recipes and ingredients to prepare ahead of time,
                                                so
                                                they can mix their own drinks during the party. During the event, guests can
                                                socialize and catch up with friends, colleagues or other participants, while
                                                enjoying their homemade cocktails.</font>
                                        </div>
                                        <div style="text-align: justify;">
                                            <font color="#000000" face="Open Sans, Arial, sans-serif"><br></font>
                                        </div>
                                        <div style="text-align: justify;">
                                            <font color="#000000" face="Open Sans, Arial, sans-serif">The virtual cocktail
                                                party
                                                can be customized to fit different themes and occasions, such as a holiday
                                                party, a team-building event, a birthday celebration, or simply a fun way to
                                                connect with others. Participants can also play games, share stories or have
                                                a
                                                virtual toast.</font>
                                        </div>
                                        <div style="text-align: justify;">
                                            <font color="#000000" face="Open Sans, Arial, sans-serif"><br></font>
                                        </div>
                                        <div style="text-align: justify;">
                                            <font color="#000000" face="Open Sans, Arial, sans-serif">Overall, the Virtual
                                                Cocktail Party provides a unique and interactive way for individuals to
                                                socialize and network in a fun and engaging virtual environment.</font>
                                        </div>
                                        </p>
                                    </div>
                                </div>
                                <div class="row ml-0 mr-0 mt-4">
                                    <div class="col-lg-3">
                                        <div class="card single-card-light">
                                            <div class="row">
                                                <div class="col-3 text-center">
                                                    <i class="fas fa-users"></i>
                                                </div>
                                                <div class="col-9">
                                                    <p class="mb-0">People allowed</p>
                                                    <span>500</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="card single-card-light">
                                            <div class="row">
                                                <div class="col-3 text-center">
                                                    <i class="far fa-calendar-alt"></i>
                                                </div>
                                                <div class="col-9">
                                                    <p class="mb-0">Date</p>
                                                    <span>Wednesday,</span>
                                                    <span>08 February 2023</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-5">
                                        <div class="card single-card-light">
                                            <div class="row">
                                                <div class="col-2 text-center">
                                                    <i class="fas fa-map-marker-alt"></i>
                                                </div>
                                                <div class="col-9">
                                                    <p class="mb-0">Location</p>
                                                    <span> Online Event </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h2 class="section-title"> Recent Sales</h2>
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table" id="">
                                        <thead>
                                            <tr>
                                                <th>Order Id</th>
                                                <th>Customer Name</th>
                                                <th>Ticket Name</th>
                                                <th>Date</th>
                                                <th>Sold Ticket</th>
                                                <th>Payment</th>
                                                <th>Payment Gateway</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <tr>
                                                <td>#76552</td>
                                                <td>Gordon</td>
                                                <th>Above 18</th>
                                                <th>2023-03-23</th>
                                                <th>2</th>
                                                <th>$400.00</th>
                                                <th>LOCAL</th>
                                            </tr>
                                            <tr>
                                                <td>#89745</td>
                                                <td>Gordon</td>
                                                <th>Teenagers</th>
                                                <th>2023-02-16</th>
                                                <th>5</th>
                                                <th>$2500.00</th>
                                                <th>LOCAL</th>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">

                        <div class="card card-hero">
                            <div class="card-header">

                                <div class="card-icon">
                                    <i class="fas fa-ticket-alt"></i>
                                </div>
                                <div class="card-description">No tickets</div>
                                <a href="{{ route('admin.orders.create') }}"><button type="button"
                                        class="btn btn-ticket"><i class="fas fa-plus"></i> </button> </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    @endsection
</x-layouts.admin>

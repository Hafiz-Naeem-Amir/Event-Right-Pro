<div class="row">
    <div class="col-lg-4 col-md-4 col-sm-12">
        <div class="card card-statistic-2">
            <div class="card-stats">
                <div class="card-stats-title">Order Statistics -
                    <div class="dropdown d-inline">
                        <a class="font-weight-600 dropdown-toggle month" data-toggle="dropdown" href="#"
                            id="orders-month">All</a>
                        <ul class="dropdown-menu dropdown-menu-sm">
                            <li class="dropdown-title">Select Month</li>
                            <a href="https://eventrights.saasmonks.in/admin/home" class="text-decoration-none">All</a>
                            <li><a href="#" class="dropdown-item"
                                    onclick="getStatistics(1,'January' )">January</a>
                            </li>
                            <li><a href="#" class="dropdown-item"
                                    onclick="getStatistics(2,'February' )">February</a>
                            </li>
                            <li><a href="#" class="dropdown-item" onclick="getStatistics(3,'March' )">March</a>
                            </li>
                            <li><a href="#" class="dropdown-item" onclick="getStatistics(4,'April' )">April</a>
                            </li>
                            <li><a href="#" class="dropdown-item" onclick="getStatistics(5,'May' )">May</a>
                            </li>
                            <li><a href="#" class="dropdown-item" onclick="getStatistics(6,'June' )">June</a>
                            </li>
                            <li><a href="#" class="dropdown-item" onclick="getStatistics(7,'July' )">July</a>
                            </li>
                            <li><a href="#" class="dropdown-item" onclick="getStatistics(8,'August' )">August</a>
                            </li>
                            <li><a href="#" class="dropdown-item"
                                    onclick="getStatistics(9,'September' )">September</a>
                            </li>
                            <li><a href="#" class="dropdown-item"
                                    onclick="getStatistics(10,'October' )">October</a>
                            </li>
                            <li><a href="#" class="dropdown-item"
                                    onclick="getStatistics(11,'November' )">November</a>
                            </li>
                            <li><a href="#" class="dropdown-item"
                                    onclick="getStatistics(12,'December' )">December</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card-stats-items">
                    <div class="card-stats-item">
                        <div class="card-stats-item-count order-pending">1716</div>
                        <div class="card-stats-item-label">Pending</div>
                    </div>
                    <div class="card-stats-item">
                        <div class="card-stats-item-count order-complete">1480</div>
                        <div class="card-stats-item-label">Completed</div>
                    </div>
                    <div class="card-stats-item">
                        <div class="card-stats-item-count order-cancel">0</div>
                        <div class="card-stats-item-label">Cancel</div>
                    </div>
                </div>
            </div>
            <div class="card-icon shadow-primary bg-primary">
                <i class="fas fa-shopping-bag"></i>
            </div>
            <div class="card-wrap">
                <div class="card-header">
                    <h4>Total Orders</h4>
                </div>
                <div class="card-body order-total">
                    3196
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-12">
        <div class="card card-hero">
            <div class="card-header">
                <div class="card-icon">
                    <i class="fas fa-ticket-alt"></i>
                </div>
                <h4>4010/108656</h4>
                <div class="card-description">Remaining Tickets</div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-12">
        <div class="card card-hero">
            <div class="card-header">
                <div class="card-icon">
                    <i class="fas fa-glass-cheers"></i>
                </div>
                <h4>13</h4>
                <div class="card-description">Events</div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-8 col-xl-9">
        <div class="row">
            <div class="col-lg-12">
                <div class="card mb-4">
                    <div class="card-header pt-0 pb-0">
                        <div class="row w-100">
                            <div class="col-lg-8">
                                <h2 class="section-title">Upcoming Event</h2>
                            </div>
                            <div class="col-lg-4 text-right mt-2">
                                <a href="https://eventrights.saasmonks.in/events">
                                    <button class="btn btn-sm btn-primary">See all</button>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table home-tbl" id="">
                                <tbody>
                                    <tr>
                                        <td>
                                            <img class="table-img"
                                                src="{{ asset('site/images/upload/63e37cbbd47f8.jfif') }}">
                                        </td>
                                        <td style="width:360px">
                                            <h6>Virtual Cocktail Shake-up</h6>
                                            <p>Online Event</p>
                                        </td>
                                        <td>
                                            <button class="btn-icon btn block">
                                                <i class="fas fa-user-friends cursor"></i>
                                            </button>
                                            <span class="tbl-info">500 allowed</span>
                                        </td>
                                        <td>
                                            <button class="btn-icon btn block">
                                                <i class="fas fa-ticket-alt cursor"></i>
                                            </button>
                                            <span class="tbl-info">5873 Pcs left</span>
                                        </td>
                                        <td>
                                            <button class="btn-icon btn block">
                                                <i class="far fa-calendar-alt cursor"></i>
                                            </button>
                                            <span class="tbl-info">2023-02-08</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img class="table-img"
                                                src="{{ asset('site/images/upload/64707a6fc9d91.png') }}">
                                        </td>
                                        <td style="width:360px">
                                            <h6>Couple's Campfire</h6>
                                            <p>New York-New York Hotel &amp; Casino, South Las
                                                Vegas Boulevard, Las Vegas, NV, USA</p>
                                        </td>
                                        <td>
                                            <button class="btn-icon btn block">
                                                <i class="fas fa-user-friends cursor"></i>
                                            </button>
                                            <span class="tbl-info">500 allowed</span>
                                        </td>
                                        <td>
                                            <button class="btn-icon btn block">
                                                <i class="fas fa-ticket-alt cursor"></i>
                                            </button>
                                            <span class="tbl-info">1819 Pcs left</span>
                                        </td>
                                        <td>
                                            <button class="btn-icon btn block">
                                                <i class="far fa-calendar-alt cursor"></i>
                                            </button>
                                            <span class="tbl-info">2023-02-10</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img class="table-img"
                                                src="{{ asset('site/images/upload/63e5ea549eef9.jpg') }}">
                                        </td>
                                        <td style="width:360px">
                                            <h6>Online Game Night</h6>
                                            <p>Online Event</p>
                                        </td>
                                        <td>
                                            <button class="btn-icon btn block">
                                                <i class="fas fa-user-friends cursor"></i>
                                            </button>
                                            <span class="tbl-info">500 allowed</span>
                                        </td>
                                        <td>
                                            <button class="btn-icon btn block">
                                                <i class="fas fa-ticket-alt cursor"></i>
                                            </button>
                                            <span class="tbl-info">9817 Pcs left</span>
                                        </td>
                                        <td>
                                            <button class="btn-icon btn block">
                                                <i class="far fa-calendar-alt cursor"></i>
                                            </button>
                                            <span class="tbl-info">2023-02-10</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-4 col-xl-3">
        <div class="card">
            <div class="card-body calender-event">
                <input type="hidden" name="eventDate" id="eventDate"
                    value='["2023-02-08","2023-02-10","2023-02-10","2023-03-22","2023-06-24","2024-01-04","2024-02-10"]'>
                <div id="home_calender"></div>
                <h5 class="text-dark mb-4 mt-2">November Event</h5>
                <div class="home-upcoming-event">
                    <div class="row">
                        <div class="col-12 text-center">
                            <div class="empty-data">
                                <div class="card-icon shadow-primary">
                                    <i class="fas fa-search"></i>
                                </div>
                                <h6 class="mt-3">No events found</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

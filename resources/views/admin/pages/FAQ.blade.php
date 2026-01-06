@extends('admin.app')
@section('admin')
    <section class="section">
        <div class="section-header">
            <h1>FAQs</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="https://eventrights.saasmonks.in/admin/home">Dashboard</a></div>
                <div class="breadcrumb-item">FAQs</a></div>
            </div>
        </div>


        <div class="section-body">


            <div class="row">
                <div class="col-12">
                </div>
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row mb-4 mt-2">
                                <div class="col-lg-8">
                                    <h2 class="section-title mt-0"> All FAQs</h2>
                                </div>
                                <div class="col-lg-4 text-right">
                                    <button class="btn btn-primary add-button"><a
                                            href="https://eventrights.saasmonks.in/faq/create"><i class="fas fa-plus"></i>
                                            Add New</a></button>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table" id="report_table">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>Question</th>
                                            <th style="width: 800px">Answer</th>
                                            <th>Status</th>

                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td></td>
                                            <th> Can I choose my seats or select a specific area for the event when booking
                                                tickets online? </th>
                                            <td>Depending on the Ticket Information, buyer gets his place.</td>
                                            <td>
                                                <h5><span class="badge badge-success  m-1">Publish</span></h5>
                                            </td>

                                            <td>
                                                <a href="https://eventrights.saasmonks.in/faq/7/edit" title="Edit Faq"
                                                    class="btn-icon"><i class="fas fa-edit"></i></a>

                                                <a href="#" onclick="deleteData('faq','7');" title="Delete Faq"
                                                    class="btn-icon text-danger"><i
                                                        class="fas fa-trash-alt text-danger"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <th> Can I transfer my tickets to someone else if I can&#039;t attend the event?
                                            </th>
                                            <td>Ticket transfer policies vary depending on the event and ticketing platform.
                                                Some events may allow ticket transfers to another person, while others may
                                                have restrictions or require additional steps for transferring tickets.
                                                It&#039;s best to review the specific event&#039;s policy.</td>
                                            <td>
                                                <h5><span class="badge badge-success  m-1">Publish</span></h5>
                                            </td>

                                            <td>
                                                <a href="https://eventrights.saasmonks.in/faq/6/edit" title="Edit Faq"
                                                    class="btn-icon"><i class="fas fa-edit"></i></a>

                                                <a href="#" onclick="deleteData('faq','6');" title="Delete Faq"
                                                    class="btn-icon text-danger"><i
                                                        class="fas fa-trash-alt text-danger"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <th> How do I receive my tickets after booking them online? </th>
                                            <td>After booking tickets online, you may receive them in the form of electronic
                                                tickets via email or as QR, which you can either print out or display on
                                                your smartphone for entry to the event.</td>
                                            <td>
                                                <h5><span class="badge badge-success  m-1">Publish</span></h5>
                                            </td>

                                            <td>
                                                <a href="https://eventrights.saasmonks.in/faq/5/edit" title="Edit Faq"
                                                    class="btn-icon"><i class="fas fa-edit"></i></a>

                                                <a href="#" onclick="deleteData('faq','5');" title="Delete Faq"
                                                    class="btn-icon text-danger"><i
                                                        class="fas fa-trash-alt text-danger"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <th> What types of events can I book tickets for online? </th>
                                            <td>Online ticket booking systems cater to various types of events, including
                                                concerts, festivals, conferences, seminars, sports events, theater shows,
                                                and more. You can typically find tickets for a wide range of events on these
                                                platforms.</td>
                                            <td>
                                                <h5><span class="badge badge-success  m-1">Publish</span></h5>
                                            </td>

                                            <td>
                                                <a href="https://eventrights.saasmonks.in/faq/4/edit" title="Edit Faq"
                                                    class="btn-icon"><i class="fas fa-edit"></i></a>

                                                <a href="#" onclick="deleteData('faq','4');" title="Delete Faq"
                                                    class="btn-icon text-danger"><i
                                                        class="fas fa-trash-alt text-danger"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <th> Can I cancel or refund my tickets if my plans change? </th>
                                            <td>Ticket cancellation and refund policies vary depending on the event and the
                                                ticketing platform. It&#039;s important to review the terms and conditions
                                                before purchasing tickets. Some events may allow cancellations or refunds,
                                                while others may have a no-refund policy.</td>
                                            <td>
                                                <h5><span class="badge badge-success  m-1">Publish</span></h5>
                                            </td>

                                            <td>
                                                <a href="https://eventrights.saasmonks.in/faq/3/edit" title="Edit Faq"
                                                    class="btn-icon"><i class="fas fa-edit"></i></a>

                                                <a href="#" onclick="deleteData('faq','3');" title="Delete Faq"
                                                    class="btn-icon text-danger"><i
                                                        class="fas fa-trash-alt text-danger"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <th> Is my personal and payment information secure when booking tickets online?
                                            </th>
                                            <td>Yes, reputable online ticket booking systems use secure encryption protocols
                                                to protect your personal and payment information. Look for the
                                                &quot;https&quot; and padlock symbol in the website URL to ensure a secure
                                                connection.</td>
                                            <td>
                                                <h5><span class="badge badge-success  m-1">Publish</span></h5>
                                            </td>

                                            <td>
                                                <a href="https://eventrights.saasmonks.in/faq/2/edit" title="Edit Faq"
                                                    class="btn-icon"><i class="fas fa-edit"></i></a>

                                                <a href="#" onclick="deleteData('faq','2');" title="Delete Faq"
                                                    class="btn-icon text-danger"><i
                                                        class="fas fa-trash-alt text-danger"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <th> How do I purchase tickets for an event using the online ticket booking
                                                system? </th>
                                            <td>To purchase tickets for an event using an online ticket booking system,
                                                simply visit the event&#039;s website or the ticketing platform, select the
                                                event you want to attend, choose the desired ticket type and quantity, and
                                                follow the prompts to complete the payment process.</td>
                                            <td>
                                                <h5><span class="badge badge-success  m-1">Publish</span></h5>
                                            </td>

                                            <td>
                                                <a href="https://eventrights.saasmonks.in/faq/1/edit" title="Edit Faq"
                                                    class="btn-icon"><i class="fas fa-edit"></i></a>

                                                <a href="#" onclick="deleteData('faq','1');" title="Delete Faq"
                                                    class="btn-icon text-danger"><i
                                                        class="fas fa-trash-alt text-danger"></i></a>
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
    </section>
@endsection

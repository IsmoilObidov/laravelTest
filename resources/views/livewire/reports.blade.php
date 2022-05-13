<section class="content">

        
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2 style="text-align: center">
                    Report List
                </h2>
                <form action="search" style="text-align: right">
                    <input wire:model="search" type="text" placeholder="Search..." />
                </form>
            </div>
            <div class="body table-responsive">
                <table class="table table-bordered" name="table">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Username</th>
                            <th>Report</th>
                            <th>Reply</th>



                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $i = 0;
                        @endphp
                        @foreach ($reports as $report)
                            <tr>
                                <th scope="row">{{ $report->id }}</th>
                                <th scope="row">{{ $report->name_user }}</th>
                                <th scope="row">{{ $report->report_to_admin }}</th>
                                <th scope="row">
                                    <button type="button" onclick="fnc({{$i}})" id="reply{{$i}}" class="btn btn-info btn-lg">Double click to reply</button>

                                        <form name="input" id='form{{$i}}' style="display: none;" wire:submit.prevent='sendReportAnswer'>
                                            <input type="text" name="report_answer" placeholder="Reply to {{$report->name_user}}..."/>
                                            <button type="submit" class="btn btn-info btn-lg">Send</button>
                                        </form>
                                </th>


                                @php
                                    $i++;
                                @endphp


                            </tr>
                        @endforeach


                    </tbody>
                </table>
            </div>
        </div>
    </div>


</section>
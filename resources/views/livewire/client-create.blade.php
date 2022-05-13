<section class="content">
    <div id="client" class="modal fade" role="dialog">
        <div class="body">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">History</h4>
                    </div>
                    <div class="modal-body">
                        @livewire('client-form')
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div id="debt_payment" class="modal fade" role="dialog">
        <div class="body">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">History</h4>
                    </div>
                    <div class="modal-body">
                        @livewire('form.debt-payment-form')
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <form action="search">
        <label for="search">Search</label>
        <input wire:model="searchClient" type="text" placeholder="Search By name" />
    </form>
    <br>





    <button type="button" class="btn btn-info btn-lg" data-target="#client1" data-toggle="modal"
        style="margin-left: 15px">Add clients</button>
        
    <div id="client1" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Add clients</h4>
                </div>
                <div class="modal-body">
                    <div class="row clearfix">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="card">
                                <div class="header">
                                    <h2>
                                        Section for adding clients

                                    </h2>
                                </div>
                                <div class="body">
                                    <form method="POST">
                                        <label>Name</label>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input name="name" wire:model.defer="name" type="text"
                                                    class="form-control" placeholder="Enter client name">
                                            </div>
                                        </div>
                                        @error('name')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                        <label>Address</label>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input name="address" wire:model.defer="address" type="text"
                                                    class="form-control" placeholder="Enter address">

                                            </div>
                                        </div>
                                        @error('address')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                        <label>Phone Number</label>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input name="phoneNumber" wire:model.defer="phoneNumber" type="number"
                                                    class="form-control" placeholder="Enter PhoneNumber">
                                            </div>
                                        </div>
                                        @error('phoneNumber')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror

                                        <div class="modal-footer">
                                            <button type="button" wire:click='createClient'
                                                class="btn btn-info">Add</button>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2 style="text-align: center">
                    Product List
                </h2>
            </div>
            <div class="body table-responsive">
                <table class="table table-bordered" name="table">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Address</th>
                            <th>Phone Number</th>
                            <th>Purchase History</th>
                            <th>Debt Payment</th>
                            <th>Debit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($clients as $item)
                            <tr>
                                <th scope="row">{{ $item->id }}</th>
                                <th scope="row">{{ $item->name }}</th>
                                <th scope="row">{{ $item->address }}</th>
                                <th scope="row">{{ $item->phoneNumber }}</th>
                                <th scope="row">
                                    <button type="button"
                                        wire:click="$emitTo('client-form', 'setForm', {{ $item->id }})"
                                        class="btn btn-info btn-lg">History</button>

                                </th>

                                <th class="row">{{ $item->getDebit() }}</th>
                                <th scope="row"><button type="button" wire:click="$emitTo('form.debt-payment-form', 'setForm', {{ $item->id }})"
                                    class="btn btn-info btn-lg">Debt</button></th>
                                <th scope="row"><button type="button" wire:click="$emit('delete', {{ $item->id }})"
                                        class="btn btn-danger btn-lg">Delete</button></th>

                            </tr>
                        @endforeach


                    </tbody>
                </table>


                <script>
                    window.addEventListener('open', function() {

                        $('#client').modal('show');
                    })
                    window.addEventListener('open_debt_payment', function() {

                    $('#debt_payment').modal('show');
                    })
                </script>
            </div>
        </div>
    </div>
</section>
<section class="content">

    <div id="saleForm" class="modal fade" role="dialog">
        <div class="body">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Expenditure rate</h4>
                    </div>
                    <div class="modal-body">
                        @livewire('sale-form')
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid">
        <form action="search">
            <label for="search">Search</label>
            <input wire:model="search" type="text" placeholder="Search..." />
        </form>



        @livewire('product-create')
    </div>





    @livewireStyles
    @livewireScripts
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2 style="text-align: center">
                    Product List
                </h2>
            </div>
            <div class="body table-responsive">
                <table class="table" name="table">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Quantity</th>
                            <th>Discount</th>
                            <th>Price</th>
                            <th>Barcode</th>
                            <th>Article</th>
                            <th>Photo</th>
                            <th>Expense</th>
                            <th>Coming</th>
                            <th>Add</th>
                            <th>Minus</th>
                            <th>Delete</th>




                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $i = 0;
                        @endphp
                        @foreach ($products as $item)
                            <tr>
                                <th scope="row">{{ $item->id }}</th>
                                <th scope="row">{{ $item->name }}</th>
                                <th scope="row">{{ $item->quantity }}</th>
                                <th scope="row">%{{ $item->discount }}</th>
                                <th scope="row">${{ $item->price }}</th>
                                <th scope="row">{{ $item->barcode }}</th>
                                <th scope="row">{{ $item->article }}</th>
                                <th scope="row">
                                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal"
                                        data-target="#photoModal{{ $i }}">Image</button>

                                    <div id="photoModal{{ $i }}" class="modal fade" role="dialog">
                                        <div class="modal-dialog">
                                            <div class="cookiesContent" id="cookiesPopup">
                                                <button class="close" data-dismiss="modal">✖</button>
                                                <img src="{{ asset('storage/' . $item->photo) }}" style="width: 100%">
                                            </div>
                                        </div>
                                    </div>
                                </th>

                                <th scope="row">
                                    <button type="button"
                                        wire:click="$emitTo('sale-form', 'setForm', {{ $item->id }})"
                                        class="btn btn-info btn-lg">Expense</button>

                                </th>



                                <th scope="row">{{ $item->get_history->count() }}</th>
                                <th scope="row"><button type="button" class="btn btn-info btn-lg"
                                        wire:click="$emit('add',{{ $item->id }})">Add</button></th>
                                <th scope="row"><button type="button" class="btn btn-info btn-lg"
                                        wire:click="$emit('minus',{{ $item->id }})">Minus</button></th>
                                <th scope="row"><button type="button" wire:click="$emit('delete', {{ $item->id }})"
                                        class="btn btn-danger btn-lg">Delete</button></th>

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
    {{ $products->links() }}



    </form>

    <script>
        window.addEventListener('openModal', function() {

            $('#saleForm').modal('show');
        });
    </script>

</section>

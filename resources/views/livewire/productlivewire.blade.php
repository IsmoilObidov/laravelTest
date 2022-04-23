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

        <button type="button" wire:click="$emitTo('form.product-add', 'setForm')" class="btn btn-info btn-lg"
            style="margin-left: 15px">Add Product</button>

        <div id="product_add" class="modal fade" role="dialog">
            <div class="body">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Add Product</h4>
                        </div>
                        <div class="modal-body">
                            @livewire('form.product-add')
                        </div>
                    </div>
                </div>
            </div>
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
                                <th>Sales</th>
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
                                                    <img src="{{ asset('storage/' . $item->photo) }}"
                                                        style="width: 100%">
                                                </div>
                                            </div>
                                        </div>
                                    </th>

                                    <th scope="row">
                                        <button type="button"
                                            wire:click="$emitTo('sale-form', 'setForm', {{ $item->id }})"
                                            class="btn btn-info btn-lg">Expense</button>

                                    </th>



                                    <th scope="row">
                                        <button type="button" class="btn btn-info btn-lg"
                                            wire:click="$emit('report', {{ $item->id }})" data-toggle="modal"
                                            data-target="#history">History</button>
                                    </th>

                                    <th scope="row">
                                        <button type="button" class="btn btn-info btn-lg"
                                            wire:click="$emit('sales', {{ $item->id }})" data-toggle="modal"
                                            data-target="#sales">Sales</button>
                                    </th>


                                    <th scope="row"><button type="button" class="btn btn-info btn-lg"
                                            wire:click="$emit('add',{{ $item->id }})">Add</button></th>

                                    <th scope="row"><button type="button" class="btn btn-info btn-lg"
                                            wire:click="$emit('minus',{{ $item->id }})">Minus</button></th>
                                    
                                    <th scope="row"><button type="button"
                                            wire:click="$emit('delete', {{ $item->id }})"
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

            window.addEventListener('openProductAdd', function() {

                $('#product_add').modal('show');
            });


            labels = [
                '2022-03-26',
            ];

            data = {
                labels: labels,
                datasets: [{
                        label: '',
                        backgroundColor: 'rgb(0,0,0)',
                        borderColor: 'rgb(0,0,0)',
                        data: [0, 0, 0, 0, 0],
                    },
                ]
            };
            config = {
                type: 'line',
                data: data,
                options: {}
            };






            const myChart = new Chart(
                document.getElementById('myChart'),
                config
            );


            const salesChart = new Chart(
                document.getElementById('salesChart'),
                config
            );







            window.addEventListener('report-product', event => {

                label = [];

                labels = [];

                data_qty = [];

                event.detail.report.map(function name(value) {



                    labels.push(value.date);

                    data_qty.push(value.quantity);
                })

                data = {
                    labels: labels,
                    datasets: [{
                            label: event.detail.name,
                            backgroundColor: 'rgb(255, 99, 132)',
                            borderColor: 'rgb(255, 99, 132)',
                            data: data_qty,
                        }

                    ]
                };

                config = {
                    type: 'line',
                    data: data,
                    options: {}
                };

                myChart.data = data;

                myChart.update();
            })








            window.addEventListener('sales-product', event => {

                labels = [];

                data_qty = [];

                event.detail.sales.map(function name(value) {

                    labels.push(value.date);

                    data_qty.push(value.quantity);
                })

                data = {
                    labels: labels,
                    datasets: [{
                            label: event.detail.name,
                            backgroundColor: 'rgb(255, 99, 132)',
                            borderColor: 'rgb(255, 99, 132)',
                            data: data_qty,
                        }

                    ]
                };

                config = {
                    type: 'line',
                    data: data,
                    options: {}
                };

                salesChart.data = data;

                salesChart.update();
            })



        </script>

</section>

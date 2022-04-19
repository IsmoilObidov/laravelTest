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
                                        <button type="button" class="btn btn-info btn-lg" data-toggle="modal"
                                            data-target="#history">History</button>
                                        <div id="history" class="modal fade" role="dialog">
                                            <div class="body">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close"
                                                                data-dismiss="modal">&times;</button>
                                                            <h4 class="modal-title">Coming</h4>
                                                        </div>
                                                        <div class="modal-body">
                                                            <canvas id="myChart"></canvas>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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

            const labels = [
                '2022-03-26',
                '2022-03-28',
                '2022-04-02',
                '2022-04-04',
                '2022-04-14',
            ];

            const data = {
                labels: labels,
                datasets: [{
                        label: 'nexia',
                        backgroundColor: 'rgb(255, 99, 132)',
                        borderColor: 'rgb(255, 99, 132)',
                        data: [10, 0, 0, 0, 0],
                    },
                    {
                        label: 'apelsin',
                        backgroundColor: 'rgb(51, 0, 102)',
                        borderColor: 'rgb(51, 0, 102)',
                        data: [11, 0, 0, 0, 0],
                    },
                    {
                        label: 'mandarin',
                        backgroundColor: 'rgb(51, 255, 511)',
                        borderColor: 'rgb(51, 255, 511)',
                        data: [50, 0, 0, 0, 0],
                    },
                    {
                        label: 'apple',
                        backgroundColor: 'rgb(0, 5, 255)',
                        borderColor: 'rgb(0, 5, 255)',
                        data: [26, 0, 0, 0, 0],
                    },
                    {
                        label: 'asdqa',
                        backgroundColor: 'rgb(255 ,51, 51)',
                        borderColor: 'rgb(255 ,51, 51)',
                        data: [0, 12, 0, 0, 0],
                    },
                    {
                        label: 'asd',
                        backgroundColor: 'rgb(0, 25, 51)',
                        borderColor: 'rgb(0, 25, 51)',
                        data: [0, 21, 0, 0, 0],
                    },

                ]
            };
            const config = {
                type: 'line',
                data: data,
                options: {}
            };

            const myChart = new Chart(
                document.getElementById('myChart'),
                config
            );
        </script>

</section>

<div>
    <div class="row clearfix">

        @foreach ($client_sale as $client)
            <div class="card">
                <div class="header">
                    <h2>
                        <small>Purchase Date: {{ $client->date }}</small>
                    </h2>
                </div>
                <div class="body">
                    <label>Product Name : </label> <input type="text" name='productName'
                        value="{{ $client->get_product->{'name'} }}" readonly style="border:none"><br>

                    <label>Quantity : </label> <input type="text" name='productName' value="{{ $client->quantity }}"
                        readonly style="border:none"><br>

                    <label>Price : </label> <input type="text" name='priceAll' value="{{ $client->price }}" readonly
                        style="border:none"><br>

                    <label>Paid : </label> <input type="text" name='paid' value="{{ $client->get_payment() }}"
                        readonly style="border:none"><br>
                        
                    <label>Debt : </label> <input type="text" name='debit' value="{{ $client->debit }}" readonly
                        style="border:none"><br>
                </div>
            </div>
        @endforeach

    </div>


</div>

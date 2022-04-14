<div>

    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        Client Consumption
                    </h2>
                </div>
                <div class="body">
                    <form wire:submit.prevent="save">
                        @csrf

                        <input type="hidden" name='product' value="{{ $product }}" wire:model="product">


                        <label>Quantity</label>
                        <div class="form-group">
                            <div class="form-line">
                                <label>Choose a client:</label>
                                <select name="client_id" wire:model="client_id">
                                    <option></option>
                                    @foreach ($clients as $client)
                                        <option value="{{ $client->id }}">{{ $client->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <label>Price You need to pay</label>
                        <div class="form-group">
                            <div class="form-line">

                                <input type="number" class="form-control" wire:model="payment" readonly >
                            </div>
                        </div>


                        <label>Quantity</label>
                        <div class="form-group">
                            <div class="form-line">

                                <input name="quantity" type="number" class="form-control"
                                    placeholder="Enter how much you want to buy" wire:model="quantity" wire:keydown="getPayment">
                                <br>
                                <input type="hidden" class="form-control" name="price" value="{{ $price }}"
                                     wire:model="price">
                                    <br>
                                
                                <label>Quantity</label>
                                <input name="income" type="number" class="form-control"
                                    placeholder="Enter how much you want to pay" wire:keydown="debitSet"
                                    wire:model="income">
                                <br>

                                <label>Debit</label>
                                <input name="debit" type="number" class="form-control" readonly wire:model='debit' />
                            </div>
                        </div>


                        @error('debit')
                            <div class="alert alert-danger">
                                {{ $message }}</div>
                        @enderror

                        @error('client_id')
                            <div class="alert alert-danger">
                                {{ $message }}</div>
                        @enderror
                        
                        @error('product')
                            <div class="alert alert-danger">
                                {{ $message }}</div>
                        @enderror
                        

                        @error('quantity')
                            <div class="alert alert-danger">
                                {{ $message }}</div>
                        @enderror

                        @error('price')
                            <div class="alert alert-danger">
                                {{ $message }}</div>
                        @enderror


                        <div class="modal-footer">
                            <button type="submit" class="btn btn-info">Add</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

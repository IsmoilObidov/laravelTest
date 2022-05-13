<section class="content">
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        Debit Pay
                    </h2>
                </div>
                <div class="body">
                    <form wire:submit.prevent="save">
                        @csrf
                        <div class="form-group">
                            <div class="form-line">
                                <label>Choose a client:</label>
                                <select name="client_id" wire:model="client_id" wire:click="getDebit" >
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
                                <input type="number" class="form-control" wire:model="required_debit" readonly>
                            </div>
                        </div>


                        <label>Pay Debit</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input name="summa" type="number" class="form-control"
                                 placeholder="Enter how much you want to pay" wire:model="summa" wire:keydown="debitPay1">
                            </div>
                        </div>


                        <label>Lasted Debit</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input name="lasted_debit" type="number" class="form-control" readonly wire:model="lasted_debit">
                            </div>
                        </div>




                        @error('client_id')
                            <div class="alert alert-danger">
                                {{ $message }}</div>
                        @enderror

                        @error('required_debit')
                            <div class="alert alert-danger">
                                {{ $message }}</div>
                        @enderror

                        @error('debit_pay')
                            <div class="alert alert-danger">
                                {{ $message }}</div>
                        @enderror

                        @error('lasted_debit')
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
</section>

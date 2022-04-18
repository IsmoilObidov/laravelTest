<section class="content">



    <div class="card">
        <div class="body">
            <form wire:submit.prevent='create'>
                <div class="row clearfix">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                        <select name="departament_id" wire:model="departament_id">
                            <option></option>
                            @foreach ($departament as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                        <select name="departament_oper_id" wire:model="departament_oper_id">
                            <option></option>
                            @foreach ($departament_operation as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                        <input type="number" name="summa" wire:model="summa" class="form-control"
                            placeholder="Enter sum">
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                        <input type="text" name="description" wire:model="description" class="form-control"
                            placeholder="Description...">
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                        <button type="submit" class="btn btn-primary btn-lg m-l-15 waves-effect">Add</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    @error('departament_id')
        <div class="alert alert-danger">
            {{ $message }}</div>
    @enderror

    @error('departament_oper_id')
        <div class="alert alert-danger">
            {{ $message }}</div>
    @enderror

    @error('summa')
        <div class="alert alert-danger">
            {{ $message }}</div>
    @enderror

    @error('description')
        <div class="alert alert-danger">
            {{ $message }}</div>
    @enderror


















    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    Sum
                </h2>
            </div>
            <div class="body table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Departament</th>
                            <th>Departament Operation</th>
                            <th>Summa</th>
                            <th>Description</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    @php
                        $i = 0;
                    @endphp
                    @foreach ($summa_departament as $item)
                        <tbody>

                            <th scope="row">{{ $item->id }}</th>
                            <th scope="row">{{ $item->get_departament() }}</th>
                            <th scope="row">{{ $item->departament_operation_name() }}</th>
                            <th scope="row">${{ $item->summa }}</th>
                            <th scope="row">

                                <button type="button" class="btn btn-primary btn-lg m-l-15 waves-effect" data-toggle="modal"
                                    data-target="#myModal{{ $i }}">Description</button>

                                <div class="modal fade" id="myModal{{ $i }}" role="dialog">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close"
                                                    data-dismiss="modal">&times;</button>
                                            </div>
                                            <div class="modal-body">
                                                <strong>{{ $item->description }}</strong>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </th>
                            <th scope="row"><button type="button" wire:click="$emit('delete', {{ $item->id }})"
                                    class="btn btn-danger btn-lg">Delete</button></th>


                        </tbody>
                        @php
                            $i+=1;
                        @endphp
                    @endforeach
                </table>
            </div>
        </div>
    </div>

</section>

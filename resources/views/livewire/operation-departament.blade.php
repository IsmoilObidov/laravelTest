<section class="content">

        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" wire:click="closeModal">&times;</button>
                    <h4 class="modal-title">Add Operations</h4>
                </div>
                <div class="modal-body">
                    <div class="row clearfix">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="card">
                                <div class="header">
                                    <h2>
                                        Section for adding Operations
    
                                    </h2>
                                </div>
                                <div class="body">
                                    <form method="POST">
                                        <label>Name</label>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input name="name_operation_departament" wire:model="name_operation_departament" type="text"
                                                    class="form-control" placeholder="Enter Operation">
                                            </div>
                                        </div>
                                        @error('name')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                        <label>Departament</label>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <select name="departament" wire:model="departament">
                                                    <option></option>
                                                    @foreach ($departament_s as $item)
                                                        <option value="{{$item->id}}">{{$item->name}}</option>
                                                    @endforeach
                                                </select>
    
                                            </div>
                                        </div>
                                        @error('departament_id')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
    
                                        <div class="modal-footer">
                                            <button type="button" wire:click='create'
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














    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2 style="text-align: center">
                    Operation List
                </h2>
            </div>
            <div class="body table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Operation</th>
                            <th>Departament</th>
                            <th>Delete</th>




                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $i = 0;
                        @endphp
                        @foreach ($departament_operation as $departament_o)
                            <tr>
                                <th scope="row">{{ $departament_o->id }}</th>
                                <th scope="row">{{$departament_o->name}}</th>
                                <th scope="row">{{$departament_o->get_departament()}}</th>
                                <th scope="row"><button type="button" wire:click="$emit('delete', {{ $departament_o->id }})"
                                    class="btn btn-danger btn-lg">Delete</button></th>

                            </tr>
                        @endforeach


                    </tbody>
                </table>
            </div>
        </div>
    </div>



</section>

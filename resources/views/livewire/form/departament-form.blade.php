<div>
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        Create
                    </h2>
                </div>
                <div class="body">
                    <form method="POST">
                        <label>Name</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input name="name_departament" wire:model="name_departament" type="text" class="form-control" placeholder="Enter name">

                            </div>
                        </div>
                        @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        <div class="modal-footer">
                            <button type="button" wire:click='create' class="btn btn-info">Add</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

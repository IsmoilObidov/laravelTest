<div class="container" style="margin-left: 24%;width: 70%">

    <button type="button" wire:click="$emitTo('form.departament-form', 'setForm')"
        class="btn btn-info btn-lg" style="margin-left: 15px">Add</button>

    <div id="departamentForm" class="modal fade" role="dialog">
        <div class="body">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Add</h4>
                    </div>
                    <div class="modal-body">
                        @livewire('form.departament-form')
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
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Delete</th>





                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($departament as $item)
                            <tr>
                                <th scope="row">{{ $item->id }}</th>
                                <th scope="row">{{ $item->name }}</th>
                                <th scope="row"><button type="button" wire:click="$emit('delete', {{ $item->id }})"
                                    class="btn btn-danger btn-lg">Delete</button></th>
                            </tr>
                        @endforeach


                    </tbody>
                </table>
            </div>
        </div>

        <script>
            window.addEventListener('open_departament', function() {

                $('#departamentForm').modal('show');
            });
        </script>
    </div>
</div>

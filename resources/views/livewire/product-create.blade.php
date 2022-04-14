<div>
    {{-- <div id="add" class="modal fade" role="dialog"> --}}
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" wire:click="closeModal">&times;</button>
                    <h4 class="modal-title">Добавить продукт</h4>
                </div>
                <div class="modal-body">
                    <div class="row clearfix">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="card">
                                <div class="header">
                                    <h2>
                                        Раздел для создания продукта

                                    </h2>
                                </div>
                                <div class="body">
                                    <form method="POST">
                                        <label>Имя</label>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input wire:model.defer="name" type="text" class="form-control"
                                                    placeholder="Введите название продукта">
                                            </div>
                                        </div>
                                        @error('name')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                        <label>Количество</label>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input name="quantity" wire:model.defer="quantity" type="number"
                                                    class="form-control" placeholder="Введите количество">

                                            </div>
                                        </div>
                                        @error('quantity')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                        <label>Скидка</label>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input name="discount" wire:model.defer="discount" type="number"
                                                    class="form-control" placeholder="Введите скидку">
                                            </div>
                                        </div>
                                        @error('discount')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                        <label>Цена</label>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input name="price" wire:model.defer="price" type="number"
                                                    class="form-control" placeholder="Введите Цена продукта">
                                            </div>
                                        </div>
                                        @error('price')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                        <label>Баркод</label>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input name="barcode" wire:model.defer="barcode" type="number"
                                                    class="form-control" placeholder="Введите Баркод продукта">
                                            </div>
                                        </div>
                                        @error('barcode')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                        <label>Артикль</label>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input name="article" wire:model.defer="article" type="text"
                                                    class="form-control" placeholder="Введите артикль продукта">
                                            </div>
                                        </div>
                                        @error('article')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                        <label>Описание</label>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input name="description" wire:model.defer="description" type="text"
                                                    class="form-control" placeholder="Введите описание продукта">
                                            </div>
                                        </div>
                                        @error('description')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                        <label>Фото</label>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input wire:model="photo" type="file" name="photo">
                                            </div>
                                        </div>
                                        @error('photo')
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
    {{-- </div> --}}
</div>

<div>
    <form wire:submit.prevent='createReport'>
                    <h1 class="address_text">Report Bug</h1>
                    <span style="margin-top: 21px;"><input type="hidden" class="form-control" name="name_user"
                        wire:model='name_user'></span>
                    @error('name_user')
                        <div class="alert alert-danger">
                            {{ $message }}</div>
                    @enderror
                <br>
                    <input type="text" class="form-control" name="report_to_admin"
                            wire:model='report_to_admin' height="500px" placeholder="Write your report to admin">
                    @error('report_to_admin')
                        <div class="alert alert-danger">
                            {{ $message }}</div>
                    @enderror
                    <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="submit" id='send_report'>Send report</button>
    </form>
</div>

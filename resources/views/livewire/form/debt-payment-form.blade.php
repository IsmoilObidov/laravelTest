<div>
    <div class="row clearfix">

        @foreach ($debt_payment as $debt)
            <div class="card">
                <div class="header">
                    <h2>
                        <small>Purchase Date: {{ $debt->data }}</small>
                    </h2>
                </div>
                <div class="body">

                    <label>Debt : </label> <input type="text" value="{{ $debt->lasted_debt() }}" readonly
                        style="border:none">

                </div>
            </div>
        @endforeach

    </div>


</div>

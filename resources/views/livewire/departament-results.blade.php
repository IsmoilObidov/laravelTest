<section class="content">
    <label for="">From</label>
    <input type="date" wire:model="fromDate" name="fromDate" id="fromDate" style="margin-right: 50%">
    <label for="">To</label>
    <input type="date" name="toDate" wire:model="toDate" id="toDate">
    <input type="button" class="btn btn-primary" name="search" wire:click="report" value="Search">
    <canvas id="myChart"></canvas>
</section>

<script>
    labels = [
        '0000-00-00',
    ];

    data = {
        labels: labels,
        datasets: [{
            label: 'null',
            backgroundColor: 'rgb(0,0,0)',
            borderColor: 'rgb(0,0,0)',
            data: [0, 0, 0, 0, 0],
        }]
    };
    config = {
        type: 'line',
        data: data,
        options: {}
    };






    const myChart = new Chart(
        document.getElementById('myChart'),
        config
    );







    window.addEventListener('report-product', event => {

        labels = [];

        data = [];

        num = [];

        function getRandomInt() {
            return Math.floor(Math.random() * (255 - 0)) + 0;
        }



        data_qty = [];

        event.detail.date.map(function name(value) {
            labels.push(value.date);
        })

        event.detail.report.map(function name(value) {

            data_qty = []

            Object.values(value)[0].map(function name(value1) {
                data_qty.push(value1.summa);

            })

            data.push({
                label: Object.keys(value)[0],
                backgroundColor: `rgb(${ getRandomInt() },${ getRandomInt() }, ${ getRandomInt() })`,
                borderColor: `rgb(${ getRandomInt() },${ getRandomInt() },${ getRandomInt() })`,
                data: data_qty,
            });



        })



        data = {
            labels: labels,
            datasets: data
        };

        config = {
            type: 'line',
            data: data,
            options: {}
        };

        myChart.data = data;

        myChart.update();
    })
</script>
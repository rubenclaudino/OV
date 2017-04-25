<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <link rel="shortcut icon" href="<?php echo e(url('/images/favicon.png')); ?>" type="image/png">
    <title><?php echo e($title); ?> | <?php echo e(config('app.name', 'Rapido')); ?></title>

    @include('includes.stylesheets')

            <!-- Scripts -->
    <script type="text/javascript">
        window.Laravel = '<?php echo json_encode(['csrfToken' => csrf_token(), ]); ?>';
        var APP_URL = '<?php echo e(url('/')); ?>';
        var csrf_token = '<?php echo e(csrf_token()); ?>';
    </script>
</head>
<body>
@include('includes.topbar')
<div class="main_wrapper">
    @include('includes.header')
    @include('includes.nav')
    @include('includes.rightbar')
    <div class="main-container inner">
        @yield('content')
    </div>
</div>
@include('includes.scripts')
@include('includes.chartscripts')
<script>
    jQuery(document).ready(function () {

        var ctx = document.getElementById("canvas1").getContext("2d");
        var gradient = ctx.createLinearGradient(0, 0, 0, 400);
        gradient.addColorStop(0, 'rgba(31,174,206,0.4)');
        gradient.addColorStop(1, 'rgba(53,182,210,0.2)');
        Chart.defaults.global.responsive = true;
        var myData = {
            labels: ["Jan", "Fev", "Mar", "Abr", "Mai", "Jun", "Jul", "Ago", "Set", "Out", "Nov", "Dez"],
            datasets: [{
                fillColor: "rgba(220,220,220,.4)",
                strokeColor: "rgba(220,220,220,1)",
                pointColor: "rgba(220,220,220,1)",
                pointStrokeColor: "#fff",
                data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0]
            }, {
                /* fillColor: "rgba(90,190,90,.5)", */
                fillColor: gradient,
                strokeColor: '#1FAECE',
                pointColor: '#1FAECE',
                pointStrokeColor: "#fff",
                data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0]
            }]
        }
        var data = {
            labels: ["Jan", "Fev", "Mar", "Abr", "Mai", "Jun", "Jul", "Ago", "Set", "Out", "Nov", "Dez"],
            datasets: [
                {
                    label: "Unimed",
                    /* fillColor: "rgba(90,190,90,.5)", */
                    fillColor: gradient,
                    strokeColor: '#1FAECE',
                    pointColor: '#1FAECE',
                    pointStrokeColor: "#fff",
                    data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0]
                }/* ,
                 {
                 label: "Ordanto Prev",
                 fillColor: "rgba(220,220,220,.5)",
                 strokeColor: "rgba(220,220,220,1)",
                 pointColor: "rgba(220,220,220,1)",
                 pointStrokeColor: "#fff",
                 data: [45, 110, 50, 21, 78, 81, 60, 22, 61, 53, 67, 20]
                 },
                 {
                 label: "Private",
                 fillColor: "rgba(151,187,205,0.5)",
                 strokeColor: "rgba(151,187,205,0.8)",
                 highlightFill: "rgba(151,187,205,0.75)",
                 highlightStroke: "rgba(151,187,205,1)",
                 data: [28, 48, 40, 19, 86, 27, 90, 20, 67, 32, 55, 97]
                 }  */
            ]
        };
        var data2 = [
            {
                value: 35,
                /* color:"rgba(169,169,169,.5)", */
                color: gradient,
                highlight: "rgba(1,117,178,.8)",
                label: "Ortodontia",
            },
            {
                value: 65,
                color: "rgba(220,220,220,0.5)",
                highlight: "rgba(220,220,220,0.8)",
                label: "Outros"
            }
        ];


        var data3 = {
            labels: ["Jan", "Fev", "Mar", "Abr", "Mai", "Jun", "Jul", "Ago", "Set", "Out", "Nov", "Dez"],
            datasets: [
                {
                    fillColor: "rgba(220,220,220,0.4)",
                    strokeColor: "rgba(220,220,220,1)",
                    pointColor: "rgba(220,220,220,1)",
                    pointStrokeColor: "#fff",
                    pointHighlightFill: "#fff",
                    pointHighlightStroke: "rgba(220,220,220,1)",
                    data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0]
                },
                {
                    /* fillColor: "rgba(151,187,205,0.2)", */
                    fillColor: gradient,
                    strokeColor: '#1FAECE',
                    pointColor: '#1FAECE',
                    pointStrokeColor: "#fff",
                    pointHighlightFill: "#fff",
                    pointHighlightStroke: "rgba(1,117,178,1)",
                    data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0]
                }
            ]
        };


        new Chart(document.getElementById("barChart").getContext("2d")).Bar(data, {
            responsive: true,
            maintainAspectRatio: true
        });
        new Chart(document.getElementById("canvas1").getContext("2d")).Line(myData, {
            responsive: true,
            maintainAspectRatio: true
        });
        if ($("#canvas2").length) {
            new Chart(document.getElementById("canvas2").getContext("2d")).Line(data3, {
                responsive: true,
                maintainAspectRatio: true
            });
        }
        if ($("#pieChart").length) {
            var myChart = new Chart(document.getElementById("pieChart").getContext("2d")).Pie(data2, {
                responsive: true,
                maintainAspectRatio: true
            });
        }
        if ($("#p-legend").length) {
            document.getElementById('p-legend').innerHTML = myChart.generateLegend();
        }

        function equalHeight(element) {
            var maxHeight = 0;
            $(element).each(function () {
                if ($(element).height() > maxHeight) {
                    maxHeight = $(element).height();
                }
            });
            $(element).css({'height': maxHeight + 'px'});
        }

        var notesHeight = ".little4Divs";
        equalHeight(notesHeight);

        var el2 = ".equalSecondRow";
        equalHeight(el2);
        var el5 = ".equalSecondRow2";
        equalHeight(el5);
        var el3 = ".equalThirdRow";
        equalHeight(el3);
        var el4 = ".equalForthRow";
        equalHeight(el4);
        var el5 = ".equalThisRow";
        equalHeight(el5);
        function getHeight(element) {
            var halfHeight = 0;
            $(element).each(function () {
                if ($(element).height() > halfHeight) {
                    halfHeight = $(element).height();
                }
            });
            return halfHeight;
        }

        var el7 = ".equalThirdRow";
        $('.halfEqual').css({'height': (getHeight(el7) / 2.14) + 'px'});
    });

</script>
<script>
    jQuery(document).ready(function () {
        // stopping holiday Events
        Main.init();
        Index.init();
    });
</script>
</body>
</html>

@extends('layouts.app')

@section('content')
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<section>
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <!--begin::Charts Widget 2-->
                <div class="card card-custom bg-gray-100 card-stretch gutter-b">
                    <!--begin::Header-->
                    <div class="card-header h-auto border-0">
                        <!--begin::Title-->
                        <div class="card-title py-5">
                            <h3 class="card-label">
                                <span class="d-block text-dark font-weight-bolder">Динамика по партнерам</span>
                                <span class="d-block text-dark-50 mt-2 font-size-sm">Динамика подключения партнеров в срезе за последние 3 года</span>
                            </h3>
                        </div>
                        <!--end::Title-->

                        <!--begin::Toolbar-->
                        <div class="card-toolbar">
                            <div class="dropdown dropdown-inline">
                                <a href="#" class="prd_link btn btn-light btn-sm font-size-sm font-weight-bolder dropdown-toggle text-dark-75" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Продукт
                                </a>
                                <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right" style="">
                                    <!--begin::Navigation-->
                                    <ul class="navi navi-hover">
                                        <li class="navi-header pb-1">
                                            <span class="text-primary text-uppercase font-weight-bold font-size-sm">Выбор продукта:</span>
                                        </li>
                                        <li class="navi-item">
                                            <a href="javascript:void()" class="select_btn navi-link" data-prd="">
                                                <span class="navi-icon"><i class="flaticon2-shopping-cart-1"></i></span>
                                                <span class="navi-text">Все</span>
                                            </a>
                                        </li>
                                        <li class="navi-item">
                                            <a href="javascript:void()" class="select_btn navi-link" data-prd="Партнер 1С-Отчетность">
                                                <span class="navi-icon"><i class="flaticon2-shopping-cart-1"></i></span>
                                                <span class="navi-text">1С-Отчетность</span>
                                            </a>
                                        </li>
                                        <li class="navi-item">
                                            <a href="javascript:void()" class="select_btn navi-link" data-prd="Партнер Астрал-Отчет">
                                                <span class="navi-icon"><i class="flaticon2-shopping-cart-1"></i></span>
                                                <span class="navi-text">Астрал Отчет</span>
                                            </a>
                                        </li>
                                        <li class="navi-item">
                                            <a href="javascript:void()" class="select_btn navi-link" data-prd="Партнер 1С-ЭП">
                                                <span class="navi-icon"><i  class="flaticon2-shopping-cart-1"></i></span>
                                                <span class="navi-text">1С-ЭП</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <!--end::Navigation-->
                                </div>
                            </div>
                        </div>
                        <div class="card-toolbar">
                            <ul class="nav nav-pills nav-pills-sm nav-dark-75" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link py-2 px-4 active select_btn select_year " data-toggle="tab" data-year="2020" href="#kt_charts_widget_2_chart_tab_1"   >
                                        <span class="nav-text font-size-sm">2020 год</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link py-2 px-4 select_btn select_year" data-toggle="tab" data-year="2019" href="#kt_charts_widget_2_chart_tab_2"   >
                                        <span class="nav-text font-size-sm">2019 год</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link py-2 px-4 select_btn select_year " data-toggle="tab" data-year="2018" href="#kt_charts_widget_2_chart_tab_3"   >
                                        <span class="nav-text font-size-sm">2018 год</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!--end::Toolbar-->
                    </div>
                    <!--end::Header-->

                    <!--begin::Body-->
                    <div class="card-body">
                        <div id="chart"></div>
                    </div>
                    <!--end::Body-->
                </div>

                <!--end::Charts Widget 2-->
            </div>
            <div class="col-xl-12">
                <div class="card card-custom bg-gray-100 card-stretch gutter-b">
                    <!--begin::Header-->
                    <div class="card-header h-auto border-0">
                        <!--begin::Title-->
                        <div class="card-title py-5">
                            <h3 class="card-label">
                                <span class="d-block text-dark font-weight-bolder">Динамика по партнерам</span>
                                <span class="d-block text-dark-50 mt-2 font-size-sm">Количество партнеров по месяцам за последние 3 года</span>
                            </h3>
                        </div>
                        <!--end::Toolbar-->
                    </div>
                    <!--end::Header-->

                    <!--begin::Body-->
                    <div class="card-body">
                        <div id="chart2"></div>
                    </div>
                    <!--end::Body-->
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    $(document).ready(function () {

        $('.navi-link').on('click',function () {
            $('.navi-link').removeClass('active');
            $(this).addClass('active');
            var text = $(this).find('.navi-text').text();
            $('.prd_link').text(text);
        });


        var month = ['Январь', 'Февраль','Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь'];
        var newPartner = [];
        var fallPartner = [];
        var succesPartner = [];
        var chart;
        var chart2;
        $.ajax({
            url : "{{route('products')}}",
            method : "post",
            headers: {
                'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
            },
            data : {
                data : 2020,
                data_prd : ' '
            },
            success: function (request) {
                var month_f = month.slice(0,request.length);
                $(request).each(function (i,e) {
                    newPartner.push(request[i].data_patner);
                    fallPartner.push(request[i].data_off);
                    succesPartner.push(request[i].all);
                });
                var options = {
                    series: [{
                        name: 'Новые партнеры',
                        type: 'bar',
                        stacked: true,
                        data: newPartner
                    }, {
                        name: 'Ушедшие партнеры',
                        type: 'bar',
                        stacked: true,
                        data: fallPartner
                    }],
                    chart: {
                        type: 'bar',
                        height: 350,
                        stacked: true,
                        toolbar: {
                            show: true
                        },
                        zoom: {
                            enabled: true
                        }
                    },
                    responsive: [{
                        breakpoint: 480,
                        options: {
                            legend: {
                                position: 'bottom',
                                offsetX: -10,
                                offsetY: 0
                            }
                        }
                    }],
                    plotOptions: {
                        bar: {
                            horizontal: false,
                        },
                    },

                    xaxis: {
                        categories: month_f,
                    },
                    legend: {
                        position: 'top',
                        offsetY: 5
                    },
                    colors: [KTApp.getSettings()['colors']['theme']['base']['success'], KTApp.getSettings()['colors']['theme']['base']['danger'], KTApp.getSettings()['colors']['theme']['base']['success']],
                    fill: {
                        opacity: 1
                    }
                };
                var options2 = {
                    series: [{
                        name: 'series1',
                        data: succesPartner
                    }],
                    chart: {
                        height: 350,
                        type: 'area'
                    },
                    dataLabels: {
                        enabled: false
                    },
                    stroke: {
                        curve: 'smooth'
                    },
                    xaxis: {
                        categories: month_f
                    },
                };


                 chart = new ApexCharts(document.querySelector("#chart"), options);
                 chart2 = new ApexCharts(document.querySelector("#chart2"), options2);
                chart.render();
                chart2.render();
            }
        });
        $('.select_btn').on('click',function () {

            if($(this).hasClass('navi-link')) {
                var year = $('.select_year.active').data('year');
                var prd =  $(this).data('prd');
            }
            if($(this).hasClass('select_year')) {
                var year = $(this).data('year');
                var prd =  $('.navi-link.active').data('prd');
            }

            console.log(prd);
            console.log(year);
            $.ajax({
                url : "{{route('products')}}",
                method : "post",
                headers: {
                    'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
                },
                data : {
                    data : year,
                    data_prd : prd
                },
                success: function (request) {
                    newPartner = [];
                    fallPartner = [];
                    succesPartner = [];
                    var month_f = month.slice(0,request.length);
                    console.log(request)
                    $(request).each(function (i,e) {
                        newPartner.push(request[i].data_patner);
                        fallPartner.push(request[i].data_off);
                        succesPartner.push(request[i].all);
                    });
                    chart.updateOptions({
                        xaxis: {
                            categories: month_f,
                        },
                        series: [{
                            name: 'Новые партнеры',
                            type: 'bar',
                            stacked: true,
                            data: newPartner
                        }, {
                            name: 'Ушедшие партнеры',
                            type: 'bar',
                            stacked: true,
                            data: fallPartner
                        }]
                    })
                    chart2.updateOptions({
                        xaxis: {
                            categories: month_f,
                        },
                        series: [{
                            name: 'Inflation',
                            data:succesPartner
                        }]
                    })
                }
            });
        });

        //
        //
        // for (var i = 0; i < test_json.length; i++) {
        //     if (i > 0) {
        //         test_json[i].all = test_json[i - 1].all + test_json[i].data - test_json[i].data_off;
        //     }
        // }
        // console.log( test_json);
        {{--$.ajax({--}}
        {{--    url : "{{route('products')}}",--}}
        {{--    method : "post",--}}
        {{--    dataType : "json",--}}
        {{--    headers: {--}}
        {{--        'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')--}}
        {{--    },--}}
        {{--    data : {--}}
        {{--        test : test_json--}}
        {{--    },--}}
        {{--    success: function (data) {--}}
        {{--        console.log(data);--}}
        {{--    }--}}
        {{--});--}}
    });

</script>
@endsection


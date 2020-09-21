@extends('layouts.app')

@section('content')

<section>
    <div class="container">
        <h5>Статистика за {{$date_from}} - {{$date_to}}</h5><br>
        <div class="row">
            <div class="col-xl-4">
                <div class="card card-custom card-stretch gutter-b">
                    <div class="card-header border-0">
                        <h3 class="card-title font-weight-bolder text-dark">Статистика звонков </h3>
                    </div>
                    <div class="card-body pt-0">
                        @foreach($response as $blockKey => $blockVal)
                            @if($blockVal['percent'] <= 10 || $blockVal['percent'] === 0)
                                @php $type = 'success' @endphp
                            @elseif($blockVal['percent'] >= 20)
                                @php $type = 'danger' @endphp
                            @else
                                @php $type = 'warning' @endphp
                            @endif
                            <div class="d-flex align-items-center bg-light-{{$type ?? ''}} rounded p-5 mb-9">
                                <!--begin::Icon-->
                                <span class="svg-icon svg-icon-success mr-5">
                <span class="svg-icon svg-icon-lg"><!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"></rect>
        <path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953) "></path>
        <path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
    </g>
</svg><!--end::Svg Icon--></span>            </span>
                                <!--end::Icon-->

                                <!--begin::Title-->
                                <div class="d-flex flex-column flex-grow-1 mr-2">
                                    <a href="#" class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1">{{$blockVal['name']}} - {{$blockVal['phone']}}</a>
                                    <span class="text-muted font-weight-bold">
                                        Принятые - {{$blockVal['all']}}, Пропущенные - {{$blockVal['fail']}}
                                    </span>
                                </div>
                                <!--end::Title-->

                                <!--begin::Lable-->
                                <span class="font-weight-bolder text-success py-1 font-size-lg">{{$blockVal['percent']}} %</span>
                                <!--end::Lable-->
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="card card-custom card-stretch gutter-b">
                    <div class="card-header border-0">
                        <h3 class="card-title font-weight-bolder text-dark">Статистика обработки сделок</h3>
                    </div>
                    <div class="card-body pt-0">
                        @foreach($responseDeal as $resVal)
                            @if($resVal['percent'] <= 10 || $resVal['percent'] === 0)
                                @php $type = 'success' @endphp
                            @elseif($resVal['percent'] >= 20)
                                @php $type = 'danger' @endphp
                            @else
                                @php $type = 'warning' @endphp
                            @endif
                            <div class="d-flex align-items-center bg-light-{{$type ?? ''}} rounded p-5 mb-9">
                                <!--begin::Icon-->
                                <span class="svg-icon svg-icon-success mr-5">
                <span class="svg-icon svg-icon-lg"><!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"></rect>
        <path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953) "></path>
        <path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
    </g>
</svg><!--end::Svg Icon--></span>            </span>
                                <!--end::Icon-->

                                <!--begin::Title-->
                                <div class="d-flex flex-column flex-grow-1 mr-2">
                                    <a href="#" class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1"> {{$resVal['name']}}</a>
                                    <span class="text-muted font-weight-bold">
                                Общее кол-во - {{$resVal['all']}} <br> on time - {{$resVal['on_time']}} <br> off time - {{$resVal['off_time']}}<br> not on time -{{$resVal['not_on_time']}}                                    </span>
                                </div>
                                <!--end::Title-->

                                <!--begin::Lable-->
                                <span class="font-weight-bolder text-success py-1 font-size-lg">
                                    {{$resVal['percent']}} %
                                </span>
                                <!--end::Lable-->
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="card card-custom gutter-b ">
                    <div class="card-header border-0 pt-5">
                        <h3 class="card-title font-weight-bolder ">Средний процент пропущенных, по всем ОП за прошлую неделю</h3>
                    </div>
                    <div class="card-body d-flex flex-column">
                        <div class="flex-grow-1">
                            <div id="kt_mixed_widget_14_chart" style="height: 200px"></div>
                        </div>
                        <div class="pt-5">
                            <p>Процент считается, как общая сумма всех номеров сайтов astral.ru и kkt.astral.ru. В статистику входят только звонки в рабочее время с 9:00 до 18:00 по региональному времени. звонки длительность менее 47 секунд не учитываются (это время голосового меню).</p>
                        </div>
                    </div>
                </div>
                <div class="card card-custom gutter-b ">
                    <div class="card-header border-0 pt-5">
                        <h3 class="card-title font-weight-bolder ">Средний процент обработки сделок, по всем ЦП за прошлую неделю</h3>
                    </div>
                    <div class="card-body d-flex flex-column">
                        <div class="flex-grow-1">
                            <div id="kt_mixed_widget_123_chart" style="height: 200px"></div>
                        </div>
                        <div class="pt-5">
                            <p>Процент считается : Разница сумм общего количества и off_time делится на сумму not_on_time (умножается на 100 и округляется до целых)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    var _initMixedWidget14 = function () {
        var element = document.getElementById("kt_mixed_widget_14_chart");
        var element2 = document.getElementById("kt_mixed_widget_123_chart");
        var height = parseInt(KTUtil.css(element, 'height'));

        if (!element) {
            return;
        }

        var options = {
            series: [{{$average}}],
            chart: {
                height: height,
                type: 'radialBar',
            },
            plotOptions: {
                radialBar: {
                    hollow: {
                        margin: 0,
                        size: "65%"
                    },
                    dataLabels: {
                        showOn: "always",
                        name: {
                            show: false,
                            fontWeight: '700'
                        },
                        value: {
                            color: KTApp.getSettings()['colors']['gray']['gray-700'],
                            fontSize: "30px",
                            fontWeight: '700',
                            offsetY: 12,
                            show: true
                        }
                    },
                    track: {
                        background: KTApp.getSettings()['colors']['theme']['light']['success'],
                        strokeWidth: '100%'
                    }
                }
            },
            colors: [KTApp.getSettings()['colors']['theme']['base']['success']],
            stroke: {
                lineCap: "round",
            },
            labels: ["Progress"]
        };
        var options2 = {
            series: [{{$averageDeal}}],
            chart: {
                height: height,
                type: 'radialBar',
            },
            plotOptions: {
                radialBar: {
                    hollow: {
                        margin: 0,
                        size: "65%"
                    },
                    dataLabels: {
                        showOn: "always",
                        name: {
                            show: false,
                            fontWeight: '700'
                        },
                        value: {
                            color: KTApp.getSettings()['colors']['gray']['gray-700'],
                            fontSize: "30px",
                            fontWeight: '700',
                            offsetY: 12,
                            show: true
                        }
                    },
                    track: {
                        background: KTApp.getSettings()['colors']['theme']['light']['success'],
                        strokeWidth: '100%'
                    }
                }
            },
            colors: [KTApp.getSettings()['colors']['theme']['base']['success']],
            stroke: {
                lineCap: "round",
            },
            labels: ["Progress"]
        };
        var chart = new ApexCharts(element, options);
        var chart2 = new ApexCharts(element2, options2);
        chart.render();
        chart2.render();
    }
</script>


@endsection

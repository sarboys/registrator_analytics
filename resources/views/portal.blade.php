@extends('layouts.app')

@section('content')
    <div class="d-flex flex-column-fluid">
        <div class=" container ">
            <div class="row">
                <div class="col-xl-6">
                    <!--begin::Charts Widget 1-->
                    <div class="card card-custom card-stretch gutter-b">
                        <!--begin::Header-->
                        <div class="card-header h-auto border-0">
                            <!--begin::Title-->
                            <div class="card-title py-5">
                                <h3 class="card-label">
                                    <span class="d-block text-dark font-weight-bolder">Процент пропущенных по номерам</span>
                                    <span class="d-block text-muted mt-2 font-size-sm">Выбрать телефон и дату</span>
                                </h3>
                            </div>
                            <!--end::Title-->

                            <!--begin::Toolbar-->
                            <div class="card-toolbar">
                                <div class="dropdown dropdown-inline">
                                    <a href="#" class="btn btn-clean btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ki ki-bold-more-hor"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-md dropdown-menu-right" style="">
                                        <!--begin::Naviigation-->
                                        <ul class="navi">
                                            <li class="navi-header font-weight-bold py-5">
                                                <span class="font-size-lg">Add New:</span>
                                                <i class="flaticon2-information icon-md text-muted" data-toggle="tooltip" data-placement="right" title="" data-original-title="Click to learn more..."></i>
                                            </li>
                                            <li class="navi-separator mb-3 opacity-70"></li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-icon"><i class="flaticon2-shopping-cart-1"></i></span>
                                                    <span class="navi-text">Order</span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-icon"><i class="navi-icon flaticon2-calendar-8"></i></span>
                                                    <span class="navi-text">Members</span>
                                                    <span class="navi-label">
                                    <span class="label label-light-danger label-rounded font-weight-bold">3</span>
                                </span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-icon"><i class="navi-icon flaticon2-telegram-logo"></i></span>
                                                    <span class="navi-text">Project</span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-icon"><i class="navi-icon flaticon2-new-email"></i></span>
                                                    <span class="navi-text">Record</span>
                                                    <span class="navi-label">
                                    <span class="label label-light-success label-rounded font-weight-bold">5</span>
                                </span>
                                                </a>
                                            </li>
                                            <li class="navi-separator mt-3 opacity-70"></li>
                                            <li class="navi-footer pt-5 pb-4">
                                                <a class="btn btn-light-primary font-weight-bolder btn-sm" href="#">More options</a>
                                                <a class="btn btn-clean font-weight-bold btn-sm d-none" href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Click to learn more...">Learn more</a>
                                            </li>
                                        </ul>
                                        <!--end::Naviigation-->
                                    </div>
                                </div>
                            </div>
                            <!--end::Toolbar-->
                        </div>
                        <!--end::Header-->

                        <!--begin::Body-->
                        <div class="card-body" style="position: relative;">
                            <!--begin::Chart-->
                            <div id="kt_charts_widget_1_chart" style="min-height: 365px;">
                                <div id="apexchartskntbfvs9l" class="apexcharts-canvas apexchartskntbfvs9l apexcharts-theme-light" style="width: 574px; height: 350px;">
                                    <svg
                                        id="SvgjsSvg1806"
                                        width="574"
                                        height="350"
                                        xmlns="http://www.w3.org/2000/svg"
                                        version="1.1"
                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                        xmlns:svgjs="http://svgjs.com/svgjs"
                                        class="apexcharts-svg"
                                        xmlns:data="ApexChartsNS"
                                        transform="translate(0, 0)"
                                        style="background: transparent;"
                                    >
                                        <g id="SvgjsG1808" class="apexcharts-inner apexcharts-graphical" transform="translate(45.75, 30)">
                                            <defs id="SvgjsDefs1807">
                                                <linearGradient id="SvgjsLinearGradient1812" x1="0" y1="0" x2="0" y2="1">
                                                    <stop id="SvgjsStop1813" stop-opacity="0.4" stop-color="rgba(216,227,240,0.4)" offset="0"></stop>
                                                    <stop id="SvgjsStop1814" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                                    <stop id="SvgjsStop1815" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                                </linearGradient>
                                                <clipPath id="gridRectMaskkntbfvs9l">
                                                    <rect id="SvgjsRect1817" width="524.25" height="279.494" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                </clipPath>
                                                <clipPath id="gridRectMarkerMaskkntbfvs9l">
                                                    <rect id="SvgjsRect1818" width="522.25" height="281.494" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                </clipPath>
                                            </defs>
                                            <rect
                                                id="SvgjsRect1816"
                                                width="12.95625"
                                                height="277.494"
                                                x="286.6249938964844"
                                                y="0"
                                                rx="0"
                                                ry="0"
                                                opacity="1"
                                                stroke-width="0"
                                                stroke-dasharray="3"
                                                fill="url(#SvgjsLinearGradient1812)"
                                                class="apexcharts-xcrosshairs"
                                                y2="277.494"
                                                filter="none"
                                                fill-opacity="0.9"
                                                x1="286.6249938964844"
                                                x2="286.6249938964844"
                                            ></rect>
                                            <g id="SvgjsG1836" class="apexcharts-xaxis" transform="translate(0, 0)">
                                                <g id="SvgjsG1837" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)">
                                                    <text
                                                        id="SvgjsText1839"
                                                        font-family="Poppins"
                                                        x="43.1875"
                                                        y="306.494"
                                                        text-anchor="middle"
                                                        dominant-baseline="auto"
                                                        font-size="12px"
                                                        font-weight="400"
                                                        fill="#b5b5c3"
                                                        class="apexcharts-text apexcharts-xaxis-label"
                                                        style="font-family: Poppins;"
                                                    >
                                                        <tspan id="SvgjsTspan1840">Feb</tspan>
                                                        <title>Feb</title>
                                                    </text>
                                                    <text
                                                        id="SvgjsText1842"
                                                        font-family="Poppins"
                                                        x="129.5625"
                                                        y="306.494"
                                                        text-anchor="middle"
                                                        dominant-baseline="auto"
                                                        font-size="12px"
                                                        font-weight="400"
                                                        fill="#b5b5c3"
                                                        class="apexcharts-text apexcharts-xaxis-label"
                                                        style="font-family: Poppins;"
                                                    >
                                                        <tspan id="SvgjsTspan1843">Mar</tspan>
                                                        <title>Mar</title>
                                                    </text>
                                                    <text
                                                        id="SvgjsText1845"
                                                        font-family="Poppins"
                                                        x="215.9375"
                                                        y="306.494"
                                                        text-anchor="middle"
                                                        dominant-baseline="auto"
                                                        font-size="12px"
                                                        font-weight="400"
                                                        fill="#b5b5c3"
                                                        class="apexcharts-text apexcharts-xaxis-label"
                                                        style="font-family: Poppins;"
                                                    >
                                                        <tspan id="SvgjsTspan1846">Apr</tspan>
                                                        <title>Apr</title>
                                                    </text>
                                                    <text
                                                        id="SvgjsText1848"
                                                        font-family="Poppins"
                                                        x="302.3125"
                                                        y="306.494"
                                                        text-anchor="middle"
                                                        dominant-baseline="auto"
                                                        font-size="12px"
                                                        font-weight="400"
                                                        fill="#b5b5c3"
                                                        class="apexcharts-text apexcharts-xaxis-label"
                                                        style="font-family: Poppins;"
                                                    >
                                                        <tspan id="SvgjsTspan1849">May</tspan>
                                                        <title>May</title>
                                                    </text>
                                                    <text
                                                        id="SvgjsText1851"
                                                        font-family="Poppins"
                                                        x="388.6875"
                                                        y="306.494"
                                                        text-anchor="middle"
                                                        dominant-baseline="auto"
                                                        font-size="12px"
                                                        font-weight="400"
                                                        fill="#b5b5c3"
                                                        class="apexcharts-text apexcharts-xaxis-label"
                                                        style="font-family: Poppins;"
                                                    >
                                                        <tspan id="SvgjsTspan1852">Jun</tspan>
                                                        <title>Jun</title>
                                                    </text>
                                                    <text
                                                        id="SvgjsText1854"
                                                        font-family="Poppins"
                                                        x="475.0625"
                                                        y="306.494"
                                                        text-anchor="middle"
                                                        dominant-baseline="auto"
                                                        font-size="12px"
                                                        font-weight="400"
                                                        fill="#b5b5c3"
                                                        class="apexcharts-text apexcharts-xaxis-label"
                                                        style="font-family: Poppins;"
                                                    >
                                                        <tspan id="SvgjsTspan1855">Jul</tspan>
                                                        <title>Jul</title>
                                                    </text>
                                                </g>
                                            </g>
                                            <g id="SvgjsG1868" class="apexcharts-grid">
                                                <g id="SvgjsG1869" class="apexcharts-gridlines-horizontal">
                                                    <line id="SvgjsLine1871" x1="0" y1="0" x2="518.25" y2="0" stroke="#ebedf3" stroke-dasharray="4" class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1872" x1="0" y1="69.3735" x2="518.25" y2="69.3735" stroke="#ebedf3" stroke-dasharray="4" class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1873" x1="0" y1="138.747" x2="518.25" y2="138.747" stroke="#ebedf3" stroke-dasharray="4" class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1874" x1="0" y1="208.12050000000002" x2="518.25" y2="208.12050000000002" stroke="#ebedf3" stroke-dasharray="4" class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1875" x1="0" y1="277.494" x2="518.25" y2="277.494" stroke="#ebedf3" stroke-dasharray="4" class="apexcharts-gridline"></line>
                                                </g>
                                                <g id="SvgjsG1870" class="apexcharts-gridlines-vertical"></g>
                                                <line id="SvgjsLine1877" x1="0" y1="277.494" x2="518.25" y2="277.494" stroke="transparent" stroke-dasharray="0"></line>
                                                <line id="SvgjsLine1876" x1="0" y1="1" x2="0" y2="277.494" stroke="transparent" stroke-dasharray="0"></line>
                                            </g>
                                            <g id="SvgjsG1819" class="apexcharts-bar-series apexcharts-plot-series">
                                                <g id="SvgjsG1820" class="apexcharts-series" rel="1" seriesName="NetxProfit" data:realIndex="0">
                                                    <path
                                                        id="SvgjsPath1822"
                                                        d="M 30.23125 277.494L 30.23125 177.9852625Q 35.709375 173.5071375 41.1875 177.9852625L 41.1875 177.9852625L 41.1875 277.494L 41.1875 277.494z"
                                                        fill="rgba(27,197,189,1)"
                                                        fill-opacity="1"
                                                        stroke="transparent"
                                                        stroke-opacity="1"
                                                        stroke-linecap="square"
                                                        stroke-width="2"
                                                        stroke-dasharray="0"
                                                        class="apexcharts-bar-area"
                                                        index="0"
                                                        clip-path="url(#gridRectMaskkntbfvs9l)"
                                                        pathTo="M 30.23125 277.494L 30.23125 177.9852625Q 35.709375 173.5071375 41.1875 177.9852625L 41.1875 177.9852625L 41.1875 277.494L 41.1875 277.494z"
                                                        pathFrom="M 30.23125 277.494L 30.23125 277.494L 41.1875 277.494L 41.1875 277.494L 41.1875 277.494L 30.23125 277.494"
                                                        cy="175.74620000000002"
                                                        cx="115.60625"
                                                        j="0"
                                                        val="123123"
                                                        barHeight="101.74780000000001"
                                                        barWidth="12.95625"
                                                    ></path>
                                                    <path
                                                        id="SvgjsPath1823"
                                                        d="M 116.60625 277.494L 116.60625 152.5483125Q 122.08437500000001 148.0701875 127.5625 152.5483125L 127.5625 152.5483125L 127.5625 277.494L 127.5625 277.494z"
                                                        fill="rgba(27,197,189,1)"
                                                        fill-opacity="1"
                                                        stroke="transparent"
                                                        stroke-opacity="1"
                                                        stroke-linecap="square"
                                                        stroke-width="2"
                                                        stroke-dasharray="0"
                                                        class="apexcharts-bar-area"
                                                        index="0"
                                                        clip-path="url(#gridRectMaskkntbfvs9l)"
                                                        pathTo="M 116.60625 277.494L 116.60625 152.5483125Q 122.08437500000001 148.0701875 127.5625 152.5483125L 127.5625 152.5483125L 127.5625 277.494L 127.5625 277.494z"
                                                        pathFrom="M 116.60625 277.494L 116.60625 277.494L 127.5625 277.494L 127.5625 277.494L 127.5625 277.494L 116.60625 277.494"
                                                        cy="150.30925000000002"
                                                        cx="201.98125"
                                                        j="1"
                                                        val="55"
                                                        barHeight="127.18475000000001"
                                                        barWidth="12.95625"
                                                    ></path>
                                                    <path
                                                        id="SvgjsPath1824"
                                                        d="M 202.98125 277.494L 202.98125 147.9234125Q 208.459375 143.4452875 213.9375 147.9234125L 213.9375 147.9234125L 213.9375 277.494L 213.9375 277.494z"
                                                        fill="rgba(27,197,189,1)"
                                                        fill-opacity="1"
                                                        stroke="transparent"
                                                        stroke-opacity="1"
                                                        stroke-linecap="square"
                                                        stroke-width="2"
                                                        stroke-dasharray="0"
                                                        class="apexcharts-bar-area"
                                                        index="0"
                                                        clip-path="url(#gridRectMaskkntbfvs9l)"
                                                        pathTo="M 202.98125 277.494L 202.98125 147.9234125Q 208.459375 143.4452875 213.9375 147.9234125L 213.9375 147.9234125L 213.9375 277.494L 213.9375 277.494z"
                                                        pathFrom="M 202.98125 277.494L 202.98125 277.494L 213.9375 277.494L 213.9375 277.494L 213.9375 277.494L 202.98125 277.494"
                                                        cy="145.68435000000002"
                                                        cx="288.35625"
                                                        j="2"
                                                        val="11"
                                                        barHeight="131.80965"
                                                        barWidth="12.95625"
                                                    ></path>
                                                    <path
                                                        id="SvgjsPath1825"
                                                        d="M 289.35625 277.494L 289.35625 150.2358625Q 294.83437499999997 145.7577375 300.3125 150.2358625L 300.3125 150.2358625L 300.3125 277.494L 300.3125 277.494z"
                                                        fill="rgba(27,197,189,1)"
                                                        fill-opacity="1"
                                                        stroke="transparent"
                                                        stroke-opacity="1"
                                                        stroke-linecap="square"
                                                        stroke-width="2"
                                                        stroke-dasharray="0"
                                                        class="apexcharts-bar-area"
                                                        index="0"
                                                        clip-path="url(#gridRectMaskkntbfvs9l)"
                                                        pathTo="M 289.35625 277.494L 289.35625 150.2358625Q 294.83437499999997 145.7577375 300.3125 150.2358625L 300.3125 150.2358625L 300.3125 277.494L 300.3125 277.494z"
                                                        pathFrom="M 289.35625 277.494L 289.35625 277.494L 300.3125 277.494L 300.3125 277.494L 300.3125 277.494L 289.35625 277.494"
                                                        cy="147.9968"
                                                        cx="374.73125"
                                                        j="3"
                                                        val="11"
                                                        barHeight="129.49720000000002"
                                                        barWidth="12.95625"
                                                    ></path>
                                                    <path
                                                        id="SvgjsPath1826"
                                                        d="M 375.73125 277.494L 375.73125 138.6736125Q 381.20937499999997 134.19548749999998 386.6875 138.6736125L 386.6875 138.6736125L 386.6875 277.494L 386.6875 277.494z"
                                                        fill="rgba(27,197,189,1)"
                                                        fill-opacity="1"
                                                        stroke="transparent"
                                                        stroke-opacity="1"
                                                        stroke-linecap="square"
                                                        stroke-width="2"
                                                        stroke-dasharray="0"
                                                        class="apexcharts-bar-area"
                                                        index="0"
                                                        clip-path="url(#gridRectMaskkntbfvs9l)"
                                                        pathTo="M 375.73125 277.494L 375.73125 138.6736125Q 381.20937499999997 134.19548749999998 386.6875 138.6736125L 386.6875 138.6736125L 386.6875 277.494L 386.6875 277.494z"
                                                        pathFrom="M 375.73125 277.494L 375.73125 277.494L 386.6875 277.494L 386.6875 277.494L 386.6875 277.494L 375.73125 277.494"
                                                        cy="136.43455"
                                                        cx="461.10625"
                                                        j="4"
                                                        val="61"
                                                        barHeight="141.05945000000003"
                                                        barWidth="12.95625"
                                                    ></path>
                                                    <path
                                                        id="SvgjsPath1827"
                                                        d="M 462.10625 277.494L 462.10625 145.6109625Q 467.58437499999997 141.1328375 473.0625 145.6109625L 473.0625 145.6109625L 473.0625 277.494L 473.0625 277.494z"
                                                        fill="rgba(27,197,189,1)"
                                                        fill-opacity="1"
                                                        stroke="transparent"
                                                        stroke-opacity="1"
                                                        stroke-linecap="square"
                                                        stroke-width="2"
                                                        stroke-dasharray="0"
                                                        class="apexcharts-bar-area"
                                                        index="0"
                                                        clip-path="url(#gridRectMaskkntbfvs9l)"
                                                        pathTo="M 462.10625 277.494L 462.10625 145.6109625Q 467.58437499999997 141.1328375 473.0625 145.6109625L 473.0625 145.6109625L 473.0625 277.494L 473.0625 277.494z"
                                                        pathFrom="M 462.10625 277.494L 462.10625 277.494L 473.0625 277.494L 473.0625 277.494L 473.0625 277.494L 462.10625 277.494"
                                                        cy="143.3719"
                                                        cx="547.48125"
                                                        j="5"
                                                        val="58"
                                                        barHeight="134.12210000000002"
                                                        barWidth="12.95625"
                                                    ></path>
                                                </g>
                                                <g id="SvgjsG1828" class="apexcharts-series" rel="2" seriesName="Revenue" data:realIndex="1">
                                                    <path
                                                        id="SvgjsPath1830"
                                                        d="M 43.1875 277.494L 43.1875 103.98686250000002Q 48.665625 99.50873750000001 54.14375 103.98686250000002L 54.14375 103.98686250000002L 54.14375 277.494L 54.14375 277.494z"
                                                        fill="rgba(228,230,239,1)"
                                                        fill-opacity="1"
                                                        stroke="transparent"
                                                        stroke-opacity="1"
                                                        stroke-linecap="square"
                                                        stroke-width="2"
                                                        stroke-dasharray="0"
                                                        class="apexcharts-bar-area"
                                                        index="1"
                                                        clip-path="url(#gridRectMaskkntbfvs9l)"
                                                        pathTo="M 43.1875 277.494L 43.1875 103.98686250000002Q 48.665625 99.50873750000001 54.14375 103.98686250000002L 54.14375 103.98686250000002L 54.14375 277.494L 54.14375 277.494z"
                                                        pathFrom="M 43.1875 277.494L 43.1875 277.494L 54.14375 277.494L 54.14375 277.494L 54.14375 277.494L 43.1875 277.494"
                                                        cy="101.74780000000001"
                                                        cx="128.5625"
                                                        j="0"
                                                        val="76"
                                                        barHeight="175.74620000000002"
                                                        barWidth="12.95625"
                                                    ></path>
                                                    <path
                                                        id="SvgjsPath1831"
                                                        d="M 129.5625 277.494L 129.5625 83.17481250000002Q 135.040625 78.69668750000001 140.51875 83.17481250000002L 140.51875 83.17481250000002L 140.51875 277.494L 140.51875 277.494z"
                                                        fill="rgba(228,230,239,1)"
                                                        fill-opacity="1"
                                                        stroke="transparent"
                                                        stroke-opacity="1"
                                                        stroke-linecap="square"
                                                        stroke-width="2"
                                                        stroke-dasharray="0"
                                                        class="apexcharts-bar-area"
                                                        index="1"
                                                        clip-path="url(#gridRectMaskkntbfvs9l)"
                                                        pathTo="M 129.5625 277.494L 129.5625 83.17481250000002Q 135.040625 78.69668750000001 140.51875 83.17481250000002L 140.51875 83.17481250000002L 140.51875 277.494L 140.51875 277.494z"
                                                        pathFrom="M 129.5625 277.494L 129.5625 277.494L 140.51875 277.494L 140.51875 277.494L 140.51875 277.494L 129.5625 277.494"
                                                        cy="80.93575000000001"
                                                        cx="214.9375"
                                                        j="1"
                                                        val="85"
                                                        barHeight="196.55825000000002"
                                                        barWidth="12.95625"
                                                    ></path>
                                                    <path
                                                        id="SvgjsPath1832"
                                                        d="M 215.9375 277.494L 215.9375 46.175612500000014Q 221.415625 41.697487500000015 226.89375 46.175612500000014L 226.89375 46.175612500000014L 226.89375 277.494L 226.89375 277.494z"
                                                        fill="rgba(228,230,239,1)"
                                                        fill-opacity="1"
                                                        stroke="transparent"
                                                        stroke-opacity="1"
                                                        stroke-linecap="square"
                                                        stroke-width="2"
                                                        stroke-dasharray="0"
                                                        class="apexcharts-bar-area"
                                                        index="1"
                                                        clip-path="url(#gridRectMaskkntbfvs9l)"
                                                        pathTo="M 215.9375 277.494L 215.9375 46.175612500000014Q 221.415625 41.697487500000015 226.89375 46.175612500000014L 226.89375 46.175612500000014L 226.89375 277.494L 226.89375 277.494z"
                                                        pathFrom="M 215.9375 277.494L 215.9375 277.494L 226.89375 277.494L 226.89375 277.494L 226.89375 277.494L 215.9375 277.494"
                                                        cy="43.93655000000001"
                                                        cx="301.3125"
                                                        j="2"
                                                        val="101"
                                                        barHeight="233.55745000000002"
                                                        barWidth="12.95625"
                                                    ></path>
                                                    <path
                                                        id="SvgjsPath1833"
                                                        d="M 302.3125 277.494L 302.3125 53.112962499999995Q 307.790625 48.634837499999996 313.26875 53.112962499999995L 313.26875 53.112962499999995L 313.26875 277.494L 313.26875 277.494z"
                                                        fill="rgba(228,230,239,1)"
                                                        fill-opacity="1"
                                                        stroke="transparent"
                                                        stroke-opacity="1"
                                                        stroke-linecap="square"
                                                        stroke-width="2"
                                                        stroke-dasharray="0"
                                                        class="apexcharts-bar-area"
                                                        index="1"
                                                        clip-path="url(#gridRectMaskkntbfvs9l)"
                                                        pathTo="M 302.3125 277.494L 302.3125 53.112962499999995Q 307.790625 48.634837499999996 313.26875 53.112962499999995L 313.26875 53.112962499999995L 313.26875 277.494L 313.26875 277.494z"
                                                        pathFrom="M 302.3125 277.494L 302.3125 277.494L 313.26875 277.494L 313.26875 277.494L 313.26875 277.494L 302.3125 277.494"
                                                        cy="50.87389999999999"
                                                        cx="387.6875"
                                                        j="3"
                                                        val="98"
                                                        barHeight="226.62010000000004"
                                                        barWidth="12.95625"
                                                    ></path>
                                                    <path
                                                        id="SvgjsPath1834"
                                                        d="M 388.6875 277.494L 388.6875 78.54991250000002Q 394.165625 74.07178750000001 399.64375 78.54991250000002L 399.64375 78.54991250000002L 399.64375 277.494L 399.64375 277.494z"
                                                        fill="rgba(228,230,239,1)"
                                                        fill-opacity="1"
                                                        stroke="transparent"
                                                        stroke-opacity="1"
                                                        stroke-linecap="square"
                                                        stroke-width="2"
                                                        stroke-dasharray="0"
                                                        class="apexcharts-bar-area"
                                                        index="1"
                                                        clip-path="url(#gridRectMaskkntbfvs9l)"
                                                        pathTo="M 388.6875 277.494L 388.6875 78.54991250000002Q 394.165625 74.07178750000001 399.64375 78.54991250000002L 399.64375 78.54991250000002L 399.64375 277.494L 399.64375 277.494z"
                                                        pathFrom="M 388.6875 277.494L 388.6875 277.494L 399.64375 277.494L 399.64375 277.494L 399.64375 277.494L 388.6875 277.494"
                                                        cy="76.31085000000002"
                                                        cx="474.0625"
                                                        j="4"
                                                        val="87"
                                                        barHeight="201.18315"
                                                        barWidth="12.95625"
                                                    ></path>
                                                    <path
                                                        id="SvgjsPath1835"
                                                        d="M 475.0625 277.494L 475.0625 36.92581249999999Q 480.540625 32.447687499999994 486.01875 36.92581249999999L 486.01875 36.92581249999999L 486.01875 277.494L 486.01875 277.494z"
                                                        fill="rgba(228,230,239,1)"
                                                        fill-opacity="1"
                                                        stroke="transparent"
                                                        stroke-opacity="1"
                                                        stroke-linecap="square"
                                                        stroke-width="2"
                                                        stroke-dasharray="0"
                                                        class="apexcharts-bar-area"
                                                        index="1"
                                                        clip-path="url(#gridRectMaskkntbfvs9l)"
                                                        pathTo="M 475.0625 277.494L 475.0625 36.92581249999999Q 480.540625 32.447687499999994 486.01875 36.92581249999999L 486.01875 36.92581249999999L 486.01875 277.494L 486.01875 277.494z"
                                                        pathFrom="M 475.0625 277.494L 475.0625 277.494L 486.01875 277.494L 486.01875 277.494L 486.01875 277.494L 475.0625 277.494"
                                                        cy="34.68674999999999"
                                                        cx="560.4375"
                                                        j="5"
                                                        val="105"
                                                        barHeight="242.80725000000004"
                                                        barWidth="12.95625"
                                                    ></path>
                                                    <g id="SvgjsG1829" class="apexcharts-datalabels" data:realIndex="1"></g>
                                                </g>
                                                <g id="SvgjsG1821" class="apexcharts-datalabels" data:realIndex="0"></g>
                                            </g>
                                            <line id="SvgjsLine1878" x1="0" y1="0" x2="518.25" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line>
                                            <line id="SvgjsLine1879" x1="0" y1="0" x2="518.25" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line>
                                            <g id="SvgjsG1880" class="apexcharts-yaxis-annotations"></g>
                                            <g id="SvgjsG1881" class="apexcharts-xaxis-annotations"></g>
                                            <g id="SvgjsG1882" class="apexcharts-point-annotations"></g>
                                        </g>
                                        <g id="SvgjsG1856" class="apexcharts-yaxis" rel="0" transform="translate(15.75, 0)">
                                            <g id="SvgjsG1857" class="apexcharts-yaxis-texts-g">
                                                <text
                                                    id="SvgjsText1858"
                                                    font-family="Poppins"
                                                    x="20"
                                                    y="31.4"
                                                    text-anchor="end"
                                                    dominant-baseline="auto"
                                                    font-size="12px"
                                                    font-weight="400"
                                                    fill="#b5b5c3"
                                                    class="apexcharts-text apexcharts-yaxis-label"
                                                    style="font-family: Poppins;"
                                                >
                                                    <tspan id="SvgjsTspan1859">120</tspan>
                                                </text>
                                                <text
                                                    id="SvgjsText1860"
                                                    font-family="Poppins"
                                                    x="20"
                                                    y="100.77350000000001"
                                                    text-anchor="end"
                                                    dominant-baseline="auto"
                                                    font-size="12px"
                                                    font-weight="400"
                                                    fill="#b5b5c3"
                                                    class="apexcharts-text apexcharts-yaxis-label"
                                                    style="font-family: Poppins;"
                                                >
                                                    <tspan id="SvgjsTspan1861">90</tspan>
                                                </text>
                                                <text
                                                    id="SvgjsText1862"
                                                    font-family="Poppins"
                                                    x="20"
                                                    y="170.14700000000002"
                                                    text-anchor="end"
                                                    dominant-baseline="auto"
                                                    font-size="12px"
                                                    font-weight="400"
                                                    fill="#b5b5c3"
                                                    class="apexcharts-text apexcharts-yaxis-label"
                                                    style="font-family: Poppins;"
                                                >
                                                    <tspan id="SvgjsTspan1863">60</tspan>
                                                </text>
                                                <text
                                                    id="SvgjsText1864"
                                                    font-family="Poppins"
                                                    x="20"
                                                    y="239.52050000000003"
                                                    text-anchor="end"
                                                    dominant-baseline="auto"
                                                    font-size="12px"
                                                    font-weight="400"
                                                    fill="#b5b5c3"
                                                    class="apexcharts-text apexcharts-yaxis-label"
                                                    style="font-family: Poppins;"
                                                >
                                                    <tspan id="SvgjsTspan1865">30</tspan>
                                                </text>
                                                <text
                                                    id="SvgjsText1866"
                                                    font-family="Poppins"
                                                    x="20"
                                                    y="308.894"
                                                    text-anchor="end"
                                                    dominant-baseline="auto"
                                                    font-size="12px"
                                                    font-weight="400"
                                                    fill="#b5b5c3"
                                                    class="apexcharts-text apexcharts-yaxis-label"
                                                    style="font-family: Poppins;"
                                                >
                                                    <tspan id="SvgjsTspan1867">0</tspan>
                                                </text>
                                            </g>
                                        </g>
                                        <g id="SvgjsG1809" class="apexcharts-annotations"></g>
                                    </svg>
                                    <div class="apexcharts-legend"></div>
                                    <div class="apexcharts-tooltip apexcharts-theme-light" style="left: 338.853px; top: 143px;">
                                        <div class="apexcharts-tooltip-title" style="font-family: Poppins; font-size: 12px;">May</div>
                                        <div class="apexcharts-tooltip-series-group apexcharts-active" style="display: flex;">
                                            <span class="apexcharts-tooltip-marker" style="background-color: rgb(27, 197, 189);"></span>
                                            <div class="apexcharts-tooltip-text" style="font-family: Poppins; font-size: 12px;">
                                                <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label">Net Profit: </span><span class="apexcharts-tooltip-text-value">$56 thousands</span></div>
                                                <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                            </div>
                                        </div>
                                        <div class="apexcharts-tooltip-series-group" style="display: none;">
                                            <span class="apexcharts-tooltip-marker" style="background-color: rgb(27, 197, 189);"></span>
                                            <div class="apexcharts-tooltip-text" style="font-family: Poppins; font-size: 12px;">
                                                <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label">Net Profit: </span><span class="apexcharts-tooltip-text-value">$56 thousands</span></div>
                                                <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div>
                                </div>
                            </div>
                            <!--end::Chart-->
                            <div class="resize-triggers">
                                <div class="expand-trigger"><div style="width: 634px; height: 418px;"></div></div>
                                <div class="contract-trigger"></div>
                            </div>
                        </div>
                        <!--end::Body-->
                    </div>

                    <!--end::Charts Widget 1-->
                </div>
            </div>
        </div>
    </div>
@endsection



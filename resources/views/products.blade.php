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
                                                <span class="navi-text">Астрал-Отчет</span>
                                            </a>
                                        </li>
                                        <li class="navi-item">
                                            <a href="javascript:void()" class="select_btn navi-link" data-prd="Астрал ОФД для Агента">
                                                <span class="navi-icon"><i class="flaticon2-shopping-cart-1"></i></span>
                                                <span class="navi-text">Астрал ОФД</span>
                                            </a>
                                        </li>
                                        <li class="navi-item">
                                            <a href="javascript:void()" class="select_btn navi-link" data-prd="Астрал СКРИН">
                                                <span class="navi-icon"><i class="flaticon2-shopping-cart-1"></i></span>
                                                <span class="navi-text">Астрал СКРИН</span>
                                            </a>
                                        </li>

                                        <li class="navi-item">
                                            <a href="javascript:void()" class="select_btn navi-link" data-prd="Партнер 1С-ЭП">
                                                <span class="navi-icon"><i class="flaticon2-shopping-cart-1"></i></span>
                                                <span class="navi-text">1С-ЭП</span>
                                            </a>
                                        </li>
                                        <li class="navi-item">
                                            <a href="javascript:void()" class="select_btn navi-link" data-prd="Партнер АО5">
                                                <span class="navi-icon"><i class="flaticon2-shopping-cart-1"></i></span>
                                                <span class="navi-text">АО5</span>
                                            </a>
                                        </li>
                                        <li class="navi-item">
                                            <a href="javascript:void()" class="select_btn navi-link" data-prd="Партнер АО5-ЭДО">
                                                <span class="navi-icon"><i class="flaticon2-shopping-cart-1"></i></span>
                                                <span class="navi-text">АО5-ЭДО</span>
                                            </a>
                                        </li>

                                        <li class="navi-item">
                                            <a href="javascript:void()" class="select_btn navi-link" data-prd="Партнер Астрал-ЭП">
                                                <span class="navi-icon"><i class="flaticon2-shopping-cart-1"></i></span>
                                                <span class="navi-text">Астрал-ЭП</span>
                                            </a>
                                        </li>
                                        <li class="navi-item">
                                            <a href="javascript:void()" class="select_btn navi-link" data-prd="Партнер Астрал.Меркурий">
                                                <span class="navi-icon"><i class="flaticon2-shopping-cart-1"></i></span>
                                                <span class="navi-text">Астрал.Меркурий</span>
                                            </a>
                                        </li>
                                        <li class="navi-item">
                                            <a href="javascript:void()" class="select_btn navi-link" data-prd="Партнер Астрал.Поставщик">
                                                <span class="navi-icon"><i class="flaticon2-shopping-cart-1"></i></span>
                                                <span class="navi-text">Астрал.Поставщик</span>
                                            </a>
                                        </li>
                                        <li class="navi-item">
                                            <a href="javascript:void()" class="select_btn navi-link" data-prd="Партнер Астрал.ЭДО">
                                                <span class="navi-icon"><i class="flaticon2-shopping-cart-1"></i></span>
                                                <span class="navi-text">Астрал.ЭДО</span>
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
            <div class="col-xl-12">
                <div class="card card-custom">
                    <div class="card-header flex-wrap border-0 pt-6 pb-0">
                        <div class="card-title py-5">
                            <h3 class="card-label">
                                <span class="d-block text-dark font-weight-bolder">Динамика по партнерам</span>
                                <span class="d-block text-dark-50 mt-2 font-size-sm">Количество партнеров по месяцам за последние 3 года</span>
                            </h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <!--begin: Search Form-->
                        <!--begin::Search Form-->
                        <div class="mb-7">
                            <div class="row align-items-center">
                                <div class="col-lg-9 col-xl-8">
                                    <div class="row align-items-center">
                                        <div class="col-md-4 my-2 my-md-0">
                                            <div class="input-icon">
                                                <input type="text" class="form-control" placeholder="Поиск по названию" id="kt_datatable_search_query" />
                                                <span><i class="flaticon2-search-1 text-muted"></i></span>
                                            </div>
                                        </div>
{{--                                        <div class="col-md-4 my-2 my-md-0">--}}
{{--                                            <div class="d-flex align-items-center">--}}
{{--                                                <label class="mr-3 mb-0 d-none d-md-block">Status:</label>--}}
{{--                                                <select class="form-control" id="kt_datatable_search_status">--}}
{{--                                                    <option value="">All</option>--}}
{{--                                                    <option value="1">Pending</option>--}}
{{--                                                    <option value="2">Delivered</option>--}}
{{--                                                    <option value="3">Canceled</option>--}}
{{--                                                    <option value="4">Success</option>--}}
{{--                                                    <option value="5">Info</option>--}}
{{--                                                    <option value="6">Danger</option>--}}
{{--                                                </select>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-md-4 my-2 my-md-0">--}}
{{--                                            <div class="d-flex align-items-center">--}}
{{--                                                <label class="mr-3 mb-0 d-none d-md-block">Type:</label>--}}
{{--                                                <select class="form-control" id="kt_datatable_search_type">--}}
{{--                                                    <option value="">All</option>--}}
{{--                                                    <option value="5220">Online</option>--}}
{{--                                                    <option value="5061">Retail</option>--}}
{{--                                                    <option value="5060">Direct</option>--}}
{{--                                                </select>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
                                    </div>
                                </div>
{{--                                <div class="col-lg-3 col-xl-4 mt-5 mt-lg-0">--}}
{{--                                    <a href="#" class="btn btn-light-primary px-6 font-weight-bold">--}}
{{--                                        Search--}}
{{--                                    </a>--}}
{{--                                </div>--}}
                            </div>
                        </div>
                        <div class="datatable datatable-bordered datatable-head-custom" id="kt_datatable"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    $(document).ready(function () {
        var dataJSONArray = [
            {
                "parent_id": 238,
                "agent_name": "ООО \"Рарус - Софт\"",
                "data": 1263,
                "data_last": 69
            },
            {
                "parent_id": 197,
                "agent_name": "ООО \"Астрал Партнер\" ЦП",
                "data": 1259,
                "data_last": 58
            },
            {
                "parent_id": 276,
                "agent_name": "ООО \"1С-ГЭНДАЛЬФ\"",
                "data": 1049,
                "data_last": 35
            },
            {
                "parent_id": 178,
                "agent_name": "АО Калуга Астрал Центр Продаж",
                "data": 796,
                "data_last": 72
            },
            {
                "parent_id": 176,
                "agent_name": "ООО 1С Северо-Запад",
                "data": 730,
                "data_last": 18
            },
            {
                "parent_id": 386,
                "agent_name": "ООО \"1С-Поволжье\"",
                "data": 446,
                "data_last": 19
            },
            {
                "parent_id": 289,
                "agent_name": "1С-Профиль",
                "data": 329,
                "data_last": 24
            },
            {
                "parent_id": 340,
                "agent_name": "ООО \"1С-Консоль\"",
                "data": 242,
                "data_last": 12
            },
            {
                "parent_id": 317,
                "agent_name": "ОП АО \"Калуга Астрал\" в СПб ЦП",
                "data": 212,
                "data_last": 28
            },
            {
                "parent_id": 806,
                "agent_name": "ООО «Прайм Регион»",
                "data": 162,
                "data_last": 8
            },
            {
                "parent_id": 7344,
                "agent_name": "ОП АО \"Калуга Астрал\" в г. Уфа ЦП",
                "data": 147,
                "data_last": 30
            },
            {
                "parent_id": 8779,
                "agent_name": "ИП Гончаренко С.В.",
                "data": 134,
                "data_last": 7
            },
            {
                "parent_id": 855,
                "agent_name": "ООО \"1С-Галэкс\"",
                "data": 133,
                "data_last": 5
            },
            {
                "parent_id": 1497,
                "agent_name": "ИП Клевцова Анастасия Ильгизовна ЦП",
                "data": 123,
                "data_last": 6
            },
            {
                "parent_id": 2179,
                "agent_name": "ООО \"Дист АйТи\" ЦП",
                "data": 116,
                "data_last": 8
            },
            {
                "parent_id": 190,
                "agent_name": "ООО «РКЦ» Владивосток",
                "data": 115,
                "data_last": 7
            },
            {
                "parent_id": 182,
                "agent_name": "ООО «РКЦ» Красноярск",
                "data": 109,
                "data_last": 3
            },
            {
                "parent_id": 11437,
                "agent_name": "ООО «МОСТ»",
                "data": 102,
                "data_last": 2
            },
            {
                "parent_id": 462,
                "agent_name": "ООО \"Ризотек\"",
                "data": 96,
                "data_last": 5
            },
            {
                "parent_id": 192,
                "agent_name": "ООО «РКЦ» Хабаровск",
                "data": 94,
                "data_last": 7
            },
            {
                "parent_id": 189,
                "agent_name": "ООО «РКЦ» Чита",
                "data": 87,
                "data_last": 2
            },
            {
                "parent_id": 274,
                "agent_name": "ООО «РКЦ» Иркутск Центр Продаж",
                "data": 80,
                "data_last": 4
            },
            {
                "parent_id": 1639,
                "agent_name": "ООО «Компьютерная компания Микос»",
                "data": 78,
                "data_last": 8
            },
            {
                "parent_id": 1829,
                "agent_name": "ИП Ахмедова Фатима Абдулкадыровна Центр продаж",
                "data": 71,
                "data_last": 5
            },
            {
                "parent_id": 5144,
                "agent_name": "ОП АО \"Калуга Астрал\" в г.Новосибирске ЦП",
                "data": 67,
                "data_last": 5
            },
            {
                "parent_id": 2633,
                "agent_name": "ОП АО \"Калуга Астрал\" в г. Омске ЦП",
                "data": 67,
                "data_last": 3
            },
            {
                "parent_id": 254,
                "agent_name": "ЗАО «ЦЭК»",
                "data": 57,
                "data_last": 3
            },
            {
                "parent_id": 406,
                "agent_name": "ООО \"ВЕАРД\" ЦП",
                "data": 53,
                "data_last": 3
            },
            {
                "parent_id": 7623,
                "agent_name": "ООО \"Софтехно\"",
                "data": 51,
                "data_last": 1
            },
            {
                "parent_id": 195,
                "agent_name": "ООО «РКЦ» Томск ",
                "data": 50,
                "data_last": 3
            },
            {
                "parent_id": 431,
                "agent_name": "ООО Информ-право",
                "data": 47,
                "data_last": 6
            },
            {
                "parent_id": 259,
                "agent_name": "ООО \"Бизнес-Инфо\" Центр продаж",
                "data": 43,
                "data_last": null
            },
            {
                "parent_id": 30,
                "agent_name": "ООО Бизнес Док Центр Продаж",
                "data": 35,
                "data_last": 4
            },
            {
                "parent_id": 2113,
                "agent_name": "ООО «1С-Вятка»",
                "data": 35,
                "data_last": 3
            },
            {
                "parent_id": 193,
                "agent_name": "ООО «РКЦ» Новосибирск",
                "data": 32,
                "data_last": 1
            },
            {
                "parent_id": 194,
                "agent_name": "ООО «РКЦ» ХМАО",
                "data": 29,
                "data_last": null
            },
            {
                "parent_id": 836,
                "agent_name": "ООО \"1С-Якутск\"",
                "data": 28,
                "data_last": 1
            },
            {
                "parent_id": 278,
                "agent_name": "ООО «Астрал Екатеринбург» ЦП",
                "data": 27,
                "data_last": 3
            },
            {
                "parent_id": 6,
                "agent_name": "ООО Система Центр Продаж",
                "data": 26,
                "data_last": null
            },
            {
                "parent_id": 2337,
                "agent_name": "ООО \"ТЕХНОСЕРВ-С\"",
                "data": 25,
                "data_last": 2
            },
            {
                "parent_id": 212,
                "agent_name": "ООО НПК \"СВИМУЧ\" Центр Продаж",
                "data": 23,
                "data_last": 4
            },
            {
                "parent_id": 199,
                "agent_name": "ООО И-Сервис Центр Продаж",
                "data": 23,
                "data_last": 3
            },
            {
                "parent_id": 8784,
                "agent_name": "ООО \"Электронный Эксперт\" ЦП",
                "data": 21,
                "data_last": 1
            },
            {
                "parent_id": 10232,
                "agent_name": "ОП АО \"Калуга Астрал\" в г. Саратов ЦП",
                "data": 18,
                "data_last": 8
            },
            {
                "parent_id": 8962,
                "agent_name": "ООО «Все Кассы» (ЦП_ОФД)",
                "data": 17,
                "data_last": 7
            },
            {
                "parent_id": 7159,
                "agent_name": "ООО Астрал Системы ЦП",
                "data": 17,
                "data_last": 1
            },
            {
                "parent_id": 772,
                "agent_name": "ООО \"Выбор\" ЦП (1С-Отчетность)",
                "data": 16,
                "data_last": null
            },
            {
                "parent_id": 69,
                "agent_name": "Астрал-ДВ",
                "data": 16,
                "data_last": 1
            },
            {
                "parent_id": 227,
                "agent_name": "ТестовыйЦП",
                "data": 13,
                "data_last": 1
            },
            {
                "parent_id": 1587,
                "agent_name": "ООО \"Абсолют\" как ЦП",
                "data": 12,
                "data_last": null
            },
            {
                "parent_id": 3975,
                "agent_name": "ООО Информ-право ЦП (Астрал Отчет)",
                "data": 11,
                "data_last": null
            },
            {
                "parent_id": 8923,
                "agent_name": "ЦП Облачный альянс",
                "data": 11,
                "data_last": null
            },
            {
                "parent_id": 3750,
                "agent_name": "ЗАО ЦЭК (Астрал Отчет.)",
                "data": 11,
                "data_last": null
            },
            {
                "parent_id": 8446,
                "agent_name": "ООО «1С:Северо-Запад»  (АО)",
                "data": 9,
                "data_last": 3
            },
            {
                "parent_id": 7802,
                "agent_name": "ООО «Рарус-Софт»  (Астрал-ЭТ)",
                "data": 8,
                "data_last": 5
            },
            {
                "parent_id": 10408,
                "agent_name": "КАЛУГА АСТРАЛ ККТ",
                "data": 6,
                "data_last": null
            },
            {
                "parent_id": 2329,
                "agent_name": "Искра Класс (Астрал Отчет)",
                "data": 6,
                "data_last": null
            },
            {
                "parent_id": 10507,
                "agent_name": "ОП АО \"Калуга Астрал\" в г. Воронеж",
                "data": 6,
                "data_last": 4
            },
            {
                "parent_id": 3957,
                "agent_name": "ЗАО НПК \"СВИМУЧ\" ЦП Астрал Отчет",
                "data": 5,
                "data_last": null
            },
            {
                "parent_id": 9595,
                "agent_name": "_ТЕСТ_118191_ЦП",
                "data": 5,
                "data_last": null
            },
            {
                "parent_id": 10173,
                "agent_name": "БД Инсталл ЦП ОФД",
                "data": 5,
                "data_last": 1
            },
            {
                "parent_id": 2730,
                "agent_name": "ООО \"Консультант-Сервис\"",
                "data": 4,
                "data_last": null
            },
            {
                "parent_id": 3576,
                "agent_name": "Тестовый Центр Продаж",
                "data": 4,
                "data_last": null
            },
            {
                "parent_id": 3374,
                "agent_name": "ООО ЮВИС-Сервис ЦП (Астрал Отчет)",
                "data": 4,
                "data_last": null
            },
            {
                "parent_id": 7260,
                "agent_name": "ООО «Доминион»",
                "data": 4,
                "data_last": null
            },
            {
                "parent_id": 196,
                "agent_name": "ООО «Центр экономических технологий»",
                "data": 4,
                "data_last": null
            },
            {
                "parent_id": 3751,
                "agent_name": "ИП Селюгина Дарья Константиновна ЦП",
                "data": 4,
                "data_last": null
            },
            {
                "parent_id": 7,
                "agent_name": "ООО ГСКС Профи Центр Продаж",
                "data": 4,
                "data_last": null
            },
            {
                "parent_id": 172,
                "agent_name": "ООО ЮВИС-Сервис ЦП",
                "data": 4,
                "data_last": null
            },
            {
                "parent_id": 149,
                "agent_name": "ИП Комаров Андрей Петрович",
                "data": 4,
                "data_last": null
            },
            {
                "parent_id": 11577,
                "agent_name": "АО \"Калуга Астрал\" Калуга ЦП (для Калуги)",
                "data": 4,
                "data_last": 2
            },
            {
                "parent_id": 95,
                "agent_name": "ООО Деловые сети ЦП",
                "data": 3,
                "data_last": null
            },
            {
                "parent_id": 7304,
                "agent_name": "ООО \"ВЕАРД\" ЦП (АстралОтчет)",
                "data": 3,
                "data_last": null
            },
            {
                "parent_id": 3290,
                "agent_name": "ИП Комаров Андрей Петрович (Астрал Отчет)",
                "data": 2,
                "data_last": null
            },
            {
                "parent_id": 4797,
                "agent_name": "Филиал АО \"Калуга Астрал\" в городе Пермь",
                "data": 2,
                "data_last": null
            },
            {
                "parent_id": 8390,
                "agent_name": "ООО Центр автоматизации бизнеса ЦП ОФД",
                "data": 2,
                "data_last": null
            },
            {
                "parent_id": 821,
                "agent_name": "ИП Селюгина Дарья Константиновна ЦП (отключен)",
                "data": 1,
                "data_last": null
            },
            {
                "parent_id": 3739,
                "agent_name": "ООО ИЦ «Выбор» (Астрал Отчет) ЦП",
                "data": 1,
                "data_last": null
            },
            {
                "parent_id": 1,
                "agent_name": "АО Калуга Астрал",
                "data": 1,
                "data_last": null
            },
            {
                "parent_id": 5743,
                "agent_name": "ООО ИЦ \"Выбор\" (1С) ЦП",
                "data": 1,
                "data_last": null
            },
            {
                "parent_id": 10421,
                "agent_name": "ИП Мертес Ю.В. ЦП ОФД",
                "data": 1,
                "data_last": null
            },
            {
                "parent_id": 3392,
                "agent_name": "ООО «Астрал-ДВ» (Астрал Отчет)",
                "data": 1,
                "data_last": null
            },
            {
                "parent_id": 8193,
                "agent_name": "ООО «Сервисный центр «Инновация» ОФД ЦП",
                "data": 1,
                "data_last": null
            },
            {
                "parent_id": 428,
                "agent_name": "ООО «Сервис ИТ»",
                "data": 1,
                "data_last": null
            },
            {
                "parent_id": 7256,
                "agent_name": "ООО \"Ваш консультант\" ЦП (Астрал Отчет)",
                "data": 1,
                "data_last": null
            },
            {
                "parent_id": 7276,
                "agent_name": "ООО \"Абсолют\"  ЦП (Астрал Отчет)",
                "data": 1,
                "data_last": null
            },
            {
                "parent_id": 10780,
                "agent_name": "ОП АО \"Калуга Астрал\" в г. Томск",
                "data": 1,
                "data_last": null
            },
            {
                "parent_id": 157,
                "agent_name": "ООО РКЦ",
                "data": 1,
                "data_last": null
            },
            {
                "parent_id": 10614,
                "agent_name": "ООО «Консультационный Центр» ЦП ОФД",
                "data": 1,
                "data_last": null
            },
            {
                "parent_id": 3084,
                "agent_name": "ООО \"Экспресс-Линк\" ЦП (Астрал Отчет)",
                "data": 1,
                "data_last": null
            },
            {
                "parent_id": 9961,
                "agent_name": "ООО «СИСТЕМА-К»",
                "data": 1,
                "data_last": null
            },
            {
                "parent_id": 8221,
                "agent_name": "ООО «ККС-Сервис» ОФД ЦП",
                "data": 1,
                "data_last": null
            },
            {
                "parent_id": 4195,
                "agent_name": "ОП АО \"Калуга Астрал\" в г. Новосибирске ЦП (Астрал Отчет)",
                "data": 1,
                "data_last": null
            },
            {
                "parent_id": 1847,
                "agent_name": "ООО \"Ваш консультант\" ЦП",
                "data": 1,
                "data_last": null
            },
            {
                "parent_id": 1962,
                "agent_name": "ООО \"АСТРАЛ ЕКАТЕРИНБУРГ\" (Астрал Отчет)",
                "data": 1,
                "data_last": null
            },
            {
                "parent_id": 11352,
                "agent_name": "_тест_центр продаж",
                "data": 1,
                "data_last": 1
            }
        ];
        var KTDatatableDataLocalDemo = function() {
            var demo = function() {
                var datatable = $('#kt_datatable').KTDatatable({
                    // datasource definition
                    data: {
                        type: 'local',
                        source: dataJSONArray,
                        pageSize: 15,
                    },

                    // layout definition
                    layout: {
                        scroll: false, // enable/disable datatable scroll both horizontal and vertical when needed.
                        // height: 450, // datatable's body's fixed height
                        footer: false, // display/hide footer
                    },

                    // column sorting
                    sortable: true,

                    pagination: true,

                    search: {
                        input: $('#kt_datatable_search_query'),
                        key: 'generalSearch'
                    },
                    // columns definition
                    columns: [
                     {
                        field: 'agent_name',
                        title: 'Имя ЦП',
                    }, {
                        field: 'data',
                        title: 'Общее кол-во',
                        type: 'number',
                    }, {
                        field: 'data_last',
                        title: 'Прирост за год',
                        type: 'number',
                    }],
                });

                $('#kt_datatable_search_status').on('change', function() {
                    datatable.search($(this).val().toLowerCase(), 'Status');
                });

                $('#kt_datatable_search_type').on('change', function() {
                    datatable.search($(this).val().toLowerCase(), 'UF_CRM_1555936928');
                });

                $('#kt_datatable_search_status, #kt_datatable_search_type').selectpicker();
            };

            return {
                // Public functions
                init: function() {
                    // init dmeo
                    demo();
                },
            };
        }();
        jQuery(document).ready(function() {
            KTDatatableDataLocalDemo.init();
        });
{{--        var test_json =--}}
{{--[]--}}
{{--        ;--}}
{{--        for (var i = 0; i < test_json.length; i++) {--}}
{{--            if (i > 0) {--}}
{{--                test_json[i].all = test_json[i - 1].all + test_json[i].data - test_json[i].data_off;--}}
{{--            }--}}
{{--        }--}}
{{--            console.log( test_json);--}}
{{--            $.ajax({--}}
{{--                url : "{{route('products')}}",--}}
{{--                method : "post",--}}
{{--                dataType : "json",--}}
{{--                headers: {--}}
{{--                    'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')--}}
{{--                },--}}
{{--                data : {--}}
{{--                    test : test_json--}}
{{--                },--}}
{{--                success: function (data) {--}}
{{--                    console.log(data);--}}
{{--                }--}}
{{--        });--}}
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


    });

</script>
@endsection


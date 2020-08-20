@extends('layouts.app')

@section('content')
<div class="container">
    <form class="form col-sm-12" action="{{route('tel')}}" method="get">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="row">
           <div class="col-sm-3 pl-0">
               <select class="form-control col-sm-12" id="kt_select2_1" name="param">
                   @foreach($response['allPhones'] as $phone)
                        <option value="{{$phone['phone']}}" {{$response['phone']==$phone['phone'] ? "selected" : ""}}>
                           {{$phone['phone']}}
                       </option>
                   @endforeach
               </select>
           </div>
           <div class="col-sm-4">
               <div class="">
                   <div class='input-group' id='kt_daterangepicker_4'>
                       <input type='text' value="{{$response['dateRange']}}" name="dateRange" class="form-control" readonly  placeholder="Выберите дату время"/>
                       <div class="input-group-prepend">
                           <span class="input-group-text"><i class="la la-calendar-check-o"></i></span>
                       </div>
                   </div>
               </div>
           </div>
            <div class="col-sm-4">
                <input type="text" name="callDuration" value="{{$response['callDuration']==0 ? '' : $response['callDuration']}}" class="form-control" placeholder="Время телефонного звонка >секунд">
            </div>
          <div class="col-sm-1">
              <button class="btn btn-success">Применить</button>
          </div>
       </div>
    </form>
</div>
<div class="d-flex flex-column flex-root">
    <div class="content  d-flex flex-column flex-column-fluid" id="kt_content">

        <div class="d-flex flex-column-fluid">
            <div class=" container ">
               @if(is_array($response))
                    <div class="row">
                        <div class="col-xl-4">
                            <!--begin::Stats Widget 25-->
                            <div class="card card-custom bg-light-success card-stretch gutter-b">
                                <!--begin::Body-->
                                <div class="card-body">
        <span class="svg-icon svg-icon-2x svg-icon-success"><!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Mail-opened.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"></rect>
        <path d="M6,2 L18,2 C18.5522847,2 19,2.44771525 19,3 L19,12 C19,12.5522847 18.5522847,13 18,13 L6,13 C5.44771525,13 5,12.5522847 5,12 L5,3 C5,2.44771525 5.44771525,2 6,2 Z M7.5,5 C7.22385763,5 7,5.22385763 7,5.5 C7,5.77614237 7.22385763,6 7.5,6 L13.5,6 C13.7761424,6 14,5.77614237 14,5.5 C14,5.22385763 13.7761424,5 13.5,5 L7.5,5 Z M7.5,7 C7.22385763,7 7,7.22385763 7,7.5 C7,7.77614237 7.22385763,8 7.5,8 L10.5,8 C10.7761424,8 11,7.77614237 11,7.5 C11,7.22385763 10.7761424,7 10.5,7 L7.5,7 Z" fill="#000000" opacity="0.3"></path>
        <path d="M3.79274528,6.57253826 L12,12.5 L20.2072547,6.57253826 C20.4311176,6.4108595 20.7436609,6.46126971 20.9053396,6.68513259 C20.9668779,6.77033951 21,6.87277228 21,6.97787787 L21,17 C21,18.1045695 20.1045695,19 19,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,6.97787787 C3,6.70173549 3.22385763,6.47787787 3.5,6.47787787 C3.60510559,6.47787787 3.70753836,6.51099993 3.79274528,6.57253826 Z" fill="#000000"></path>
    </g>
</svg><!--end::Svg Icon--></span>
                                    <span class="card-title font-weight-bolder text-dark-75 font-size-h2 mb-0 mt-6 d-block">{{$response['success'] ? $response['success'] : "0"}}</span>
                                    <span class="font-weight-bold text-muted  font-size-sm">Принятые</span>
                                </div>
                                <!--end::Body-->
                            </div>
                            <!--end::Stats Widget 25-->
                        </div>
                        <div class="col-xl-4">
                            <!--begin::Stats Widget 26-->
                            <div class="card card-custom bg-light-danger card-stretch gutter-b">
                                <!--begin::ody-->
                                <div class="card-body">
        <span class="svg-icon svg-icon-2x svg-icon-danger"><!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Group.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <polygon points="0 0 24 0 24 24 0 24"></polygon>
        <path d="M18,14 C16.3431458,14 15,12.6568542 15,11 C15,9.34314575 16.3431458,8 18,8 C19.6568542,8 21,9.34314575 21,11 C21,12.6568542 19.6568542,14 18,14 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
        <path d="M17.6011961,15.0006174 C21.0077043,15.0378534 23.7891749,16.7601418 23.9984937,20.4 C24.0069246,20.5466056 23.9984937,21 23.4559499,21 L19.6,21 C19.6,18.7490654 18.8562935,16.6718327 17.6011961,15.0006174 Z M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero"></path>
    </g>
</svg><!--end::Svg Icon--></span>
                                    <span class="card-title font-weight-bolder text-dark-75 font-size-h2 mb-0 mt-6 d-block">{{$response['fail'] ? $response['fail'] : "0"}}</span>
                                    <span class="font-weight-bold text-muted font-size-sm">Пропущенные</span>
                                </div>
                                <!--end::Body-->
                            </div>
                            <!--end::Stats Widget 26-->
                        </div>
                        <div class="col-xl-4">
                            <!--begin: Stats Widget 19-->
                            <div class="card card-custom bg-light-danger card-stretch gutter-b">
                                <!--begin::Body-->
                                <div class="card-body my-3">
                                    <a href="#" class="card-title font-weight-bolder text-danger text-hover-state-dark font-size-h6 mb-4 d-block">Процент пропущенных</a>

                                    <div class="font-weight-bold text-muted font-size-sm"><span class="text-dark-75 font-size-h2 font-weight-bolder mr-2">{{$response['all'] ? $response['all'] : '0'}} %</span></div>

                                    <div class="progress progress-xs mt-7 bg-success-o-60">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: {{$response['all'] ? $response['all'] : '0'}}%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <!--end:: Body-->
                            </div>
                            <!--end: Stats:Widget 19-->
                        </div>
                    </div>
               @endif
            </div>
        </div>
    </div>
</div>






@endsection

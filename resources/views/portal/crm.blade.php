@extends('layouts.app')

@section('content')
<div class="container">
    <form class="col-sm-12">
        <input type="hidden" value="{{csrf_token()}}">
        <div class="row">
            <div class="col-sm-4">
                <div class='input-group' id='kt_daterangepicker_2'>
                    <input type='text' class="form-control" readonly  placeholder="Выберите даты"/>
                    <div class="input-group-append">
                        <span class="input-group-text"><i class="la la-calendar-check-o"></i></span>
                    </div>
                </div>
            </div>

            <div class="col-sm-4">
                <select class="form-control selectpicker" multiple data-actions-box="true">
                    @foreach($response[0] as $dep)
                        <option value="{{$dep['ID']}}">{{$dep['NAME']}}</option>
                    @endforeach
                </select>
            </div>

            <div class="col-sm-4">
                <select class="form-control select2" id="kt_select2_3" name="param" multiple="multiple">
                    <optgroup label="Сотрудники">
                        @foreach($response[1] as $people)
                            <option value="{{$people['portal_id']}}">{{$people['name']}}</option>
                        @endforeach
                    </optgroup>

                </select>
            </div>
        </div>
    </form>
</div>

<script>
    $("select").change(function(){
        var arr = $(this).val();
        console.log(arr);
        $.ajax({
            url : "{{route('crm')}}",
            type : "post",
            data : {
                data : arr
            },
            headers: {
                'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (data) {
                // $('.select2-selection__rendered').empty();
                // $(data).each(function( index, element ) {
                //     $( "<li class=\"select2-selection__choice\" title=\"Alaska\" data-select2-id=\""+element['ID']+"\"> <span class=\"select2-selection__choice__remove\" role=\"presentation\">×</span>"+element['NAME']+' '+element['LAST_NAME']+"</li>" ).appendTo( ".select2-selection__rendered" );
                // });
            }
        });
    });
</script>
@endsection

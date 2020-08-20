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
            <span id="test" class="select2 select2-container select2-container--default select2-container--below select2-container--focus" dir="ltr" data-select2-id="9" style="width: 393.828px;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false"><ul class="select2-selection__rendered"><li class="select2-selection__choice" title="Alaska" data-select2-id="615"><span class="select2-selection__choice__remove" role="presentation">×</span>Alaska</li><li class="select2-selection__choice" title="Nevada" data-select2-id="616"><span class="select2-selection__choice__remove" role="presentation">×</span>Nevada</li><li class="select2-selection__choice" title="Oregon" data-select2-id="617"><span class="select2-selection__choice__remove" role="presentation">×</span>Oregon</li><li class="select2-selection__choice" title="Washington" data-select2-id="618"><span class="select2-selection__choice__remove" role="presentation">×</span>Washington</li><li class="select2-selection__choice" title="Colorado" data-select2-id="619"><span class="select2-selection__choice__remove" role="presentation">×</span>Colorado</li><li class="select2-selection__choice" title="Montana" data-select2-id="620"><span class="select2-selection__choice__remove" role="presentation">×</span>Montana</li><li class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="none" spellcheck="false" role="searchbox" aria-autocomplete="list" placeholder="" style="width: 0.75em;"></li></ul></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
            <div class="col-sm-4">
                <select class="form-control selectpicker" multiple data-actions-box="true">
                    <option>Mustard</option>
                    <option>Ketchup</option>
                    <option>Relish</option>
                    <option>Mayonnaise</option>
                    <option>Barbecue Sauce</option>
                    <option>Salad Dressing</option>
                    <option>Tabasco</option>
                    <option>Salsa</option>
                    <option>Mustard</option>
                    <option>Ketchup</option>
                    <option>Relish</option>
                    <option>Mayonnaise</option>
                    <option>Barbecue Sauce</option>
                    <option>Salad Dressing</option>
                    <option>Tabasco</option>
                    <option>Salsa</option>
                    <option>Mustard</option>
                    <option>Ketchup</option>
                    <option>Relish</option>
                    <option>Mayonnaise</option>
                    <option>Barbecue Sauce</option>
                    <option>Salad Dressing</option>
                    <option>Tabasco</option>
                    <option>Salsa</option>
                </select>
            </div>
        </div>
    </form>
</div>
<script>
    $("select").change(function(){
        if($(this).val() == 0) return false;
        alert($(this).val());
    });
</script>
@endsection

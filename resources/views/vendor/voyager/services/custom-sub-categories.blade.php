<?php $dash.='&nbsp;&nbsp; '; ?>
@foreach($children as $subcategory)
    <option value="{{$subcategory->id}}" @if($subcategory->id == $selectedId) selected @endif>{!! $dash !!}{{$subcategory->name}}</option>
    @if(count($subcategory->children))
        @include('vendor.voyager.services.custom-sub-categories',['children' => $subcategory->children])
    @endif
@endforeach

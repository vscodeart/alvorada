<select type="text" name="parent_id" class="form-control">
    <option value="">{{ __('Root Category') }}</option>
    @if($customCategoriesTree)
        @foreach($customCategoriesTree as $category)
                <?php $dash=''; ?>
            <option value="{{$category->id}}" @if($category->id == $selectedId) selected @endif>{{$category->name}}</option>
            @if(count($category->children))
                @include('vendor.voyager.services.custom-sub-categories',['children' => $category->children,'selectedId'=>$selectedId])
            @endif
        @endforeach
    @endif
</select>

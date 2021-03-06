
@extends('admin.layout.master')


@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="box">
                <div class="box-header with-border">
                    <h1 class="box-title">
                        ایجاد بندی ها
                    </h1>
                </div>
                <div class="box-body">
                    <form action="{{route('categories.update' , $category)}}" method="post">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <label for="category_id">دسته والد</label>
                            <select name="category_id" id="category_id" class="form">
                                <option value="" disabled selected>دسته والد را انتخاب کنید</option>
                                @foreach($categories as $parent)
                                    <option
                                        @if($parent->id == $category->category_id)
                                            selected
                                        @endif
                                        value="{{$parent->id}} ">{{$parent->title}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="title">عنوان</label>
                            <input type="text"  class="form-control" name="title" id="title" value="{{$category->title}}">
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" value="ثبت" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

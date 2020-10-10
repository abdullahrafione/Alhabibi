@extends('layouts.app')

@section('title','Add Category')

@push('css')
@endpush
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    @include('layouts.partial.msg')
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">Add New Category</h4>
                        </div>
                        <div class="card-content ">
                            <form method="POST" action="{{route('category.store')}}" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">name</label>
                                            <input type="text" class="form-control" name="name">
                                        </div>
                                    </div>

{{--                                    <div class="col-md-4">--}}
{{--                                        <div class="form-group label-floating">--}}
{{--                                            <label class="control-label">Caption </label>--}}
{{--                                            <input type="text" class="form-control" name="sub_title">--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

{{--                                    <div class="col-md-4">--}}
{{--                                        <label class="control-label">Image</label>--}}
{{--                                            <input type="file" name="image">--}}
{{--                                        </div>--}}
{{--                                </div>--}}
                                <a href="{{route('category.index')}}" class="btn btn-danger">Back To Category</a>
                                <button type="submit" class="btn btn-primary">Add Category</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
@endpush

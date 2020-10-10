@extends('layouts.app')

@section('title','Edit Slider')

@push('css')
@endpush
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    @include('layouts.partial.msg ')
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">Add New Slider</h4>
                        </div>
                        <div class="card-content ">
                            <form method="POST" action="{{route('slider.update',$slider->id )}}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group label-floating">
                                            <label class="control-label" >Slider Title</label>
                                            <input type="text" class="form-control" name="title" value="{{$slider->title}}">
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Caption </label>
                                            <input type="text" class="form-control" name="sub_title" value="{{$slider->sub_title}}">
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <label class="control-label">Image</label>
                                            <input type="file" name="image">
                                        </div>
                                </div>
                                <a href="{{route('slider.index')}}" class="btn btn-danger">Back To Slider</a>
                                <button type="submit" class="btn btn-primary">Save Changes</button>
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

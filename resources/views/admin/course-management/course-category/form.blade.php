@extends('admin.master')

@section('title',isset($courseCategory) ? 'Edit' :'Create' . 'Course Category')

@section('body')
    <div class="row py-5">
        <div class="col-md-6 mx-auto">
            <div class="card">
                <div class="card-header bg-light">
                    <h3>{{isset($courseCategory) ? 'Edit' :'Create'}} Course Category</h3>
                </div>
                <div class="card-body">
                    <form action="{{ isset($courseCategory) ? route('course-categories.update',$courseCategory) : route('course-categories.store') }}" method="post" enctype="multipart/form-data">
                    @if(isset($courseCategory))
                        @method('put')
                    @endif
                    @csrf
                    <input type="hidden" name="course_category_id" class="form-control" value="{{ $_GET['category-id'] ?? 0 }}">
                    <div class="row mt-3">
                        <label for="" class="col-md-4">Category Name</label>
                        <div class="col-md-8">
                            <input type="text" name="name" class="form-control" value="{{ isset($courseCategory) ? $courseCategory->name :''}}" placeholder="Category Name">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <label for="" class="col-md-4">Category Image</label>
                        <div class="col-md-8">
                            <input type="file" name="image" class="form-control" placeholder="Category Image" accept="image/*" />
                            @if (isset($courseCategory))
                            <div class="mt-2">
                                <img src="{{ asset( $courseCategory->image)}}" alt="" style="height: 80px">
                            </div>
                                
                            @endif
                        </div>
                    </div>
                    <div class="row mt-3">
                        <label for="" class="col-md-4">Category Status</label>
                        <div class="col-md-8">
                            <div class="material-switch">
                                <input id="someSwitchOptionInfo" name="status" type="checkbox" {{ isset($courseCategory) && $courseCategory->status == 0 ? '' : 'checked' }}>
                                <label for="someSwitchOptionInfo" class="label-info"></label>
                            </div>
                            
                        </div>
                    </div>
                    <div class="row mt-3">
                        <label for="" class="col-md-4"></label>
                        <div class="col-md-8">
                            <input type="submit" class="btn btn-info" value="{{isset($courseCategory) ? 'Update' :'Create'}} Course Category">
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
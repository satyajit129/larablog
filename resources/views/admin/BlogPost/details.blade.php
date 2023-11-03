@extends('backend.layouts.app')



@section('content')
    <div class="card ">
        <div class="row">
            <div class="col-12">
                <h3 class="text-center heading p-1">Post Details</h3>
            </div>
        </div>

        <div class="card-body page-content">

            <div class="row mt-4 ">
                <style>
                    .heading{
                        border: 1px solid black;
                        /* padding: 15px 15px; */
                    }
                    .page-content {
                        max-height: 318px;
                        overflow-y: auto;
                    }

                    .card-img,
                    .card-img-bottom,
                    .card-img-top {

                        width: 80%;
                        height: 85px;
                    }

                    .card-details:hover {
                        transition: 0.5s;
                        background: #ff00001a;
                    }
                </style>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="left-content">
                        <div class="card card-details">
                            <div class="card-body">
                                <h5>Post Title</h5>
                                {{ $showdata->title }}
                            </div>
                        </div>

                    </div>
                    <div class="card card-details">
                        <div class="card-body">
                            <h5>Category Name</h5>
                            {{ $showdata->category->name }}
                        </div>
                    </div>
                    <div class="card card-details">
                        <div class="card-body">
                            <h5>SubCategory Name</h5>
                            {{ $showdata->subcategory->name }}
                        </div>
                    </div>


                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="middle-content">

                        <div class="card card-details">
                            <div class="card-body">
                                <h5>Thumb Image</h5>
                                <img src="{{ asset($showdata->thumb_image) }}" class="card-img-top" alt="Thumb Image">
                            </div>
                        </div>
                        <style>

                        </style>
                        <div class="card card-details">
                            <div class="card-body">
                                <h5>Banner Image</h5>
                                <img src="{{ asset($showdata->banner_image) }}" class="card-img-top" alt="Thumb Image">
                            </div>
                        </div>
                    </div>
                </div><!--col-->
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="right-content">
                        <div class="card card-details">
                            <div class="card-body">
                                <h5>Status</h5>
                                {{ $showdata->status == 1 ? 'Active' : 'InActive' }}
                            </div>
                        </div>
                        <div class="card card-details">
                            <div class="card-body">
                                <h5>Meta Title</h5>
                                {{ $showdata->meta_title }}
                            </div>
                        </div>
                        <div class="card card-details">
                            <div class="card-body">
                                <h5>Meta Key Word</h5>
                                {{ $showdata->meta_keyword }}
                            </div>
                        </div>
                    </div>
                </div><!--col-->

            </div><!--col-->
            <div class="row">
                <div class="col-12">
                    <div class="card card-details">
                        <div class="card-body">
                            <h5>Post Description</h5>
                            {!! $showdata->description !!}
                        </div>
                    </div>
                    <div class="card card-details">
                        <div class="card-body">
                            <h5>Meta Description</h5>
                            {!! $showdata->meta_description !!}
                        </div>
                    </div>
                </div>

            </div>
        </div><!--row-->

    </div><!--card-body-->
    </div><!--card-->
@endsection

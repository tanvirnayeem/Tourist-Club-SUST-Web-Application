@extends('layouts.frontend')
    @section('content')

	<div class="breadcrumb-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <h4 style="font-size:30px;color:DarkGrey;">Writing Article</h4>
                    </div>
                    <div class="col-sm-6 hidden-xs text-right">
                        <ol class="breadcrumb">
                            <li><a style="font-size:20px;color:DarkBlue;" href="{{ route('index')}}">Home</a></li>
                            <li><a style="font-size:20px;color:DarkBlue;" href="{{ route('blog.index')}}">Blog</a></li>
                            <li style="font-size:20px;color:DarkBlue;">Writing Article</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div><!--breadcrumbs-->

        <style type="text/css">
            .breadcrumb-wrap {
                padding: 60px 0;
                background-position: center center;
                background-repeat: no-repeat;
                background: url('user/img/bg.jpg') no-repeat center center;
            }
        </style>

        <div class="divide80"></div>
         <div class="container">
         @include('admin.includes.alert')
            <div class="row">  
                <div class="col-md-12 col-sm-12">
                    <div class="login-form">
                        <h3>{{ $title }}</h3>
                         <form role="form" method="POST" action="{{ route('blog.store') }}"  enctype="multipart/form-data" class="form-horizontal">
                          {{ csrf_field() }}

                        <div class="form-group">
                            {!! Form::label('title', "Title*", array('class' => 'control-label col-lg-2')) !!}
                            <div class="col-lg-10">
                                {!! Form::text('title', null, array('class' => 'form-control', 'placeholder' => 'Enter Your Article Title', 'required' => 'required')) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('category_id', "Category*", array('class' => 'control-label col-lg-2')) !!}
                            <div class="col-lg-10">
                                {!! Form::select('category_id', $categories, null, array('class' => 'form-control ', 'placeholder' => 'Select Category', 'required' => 'required')) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('details', "Details*", array('class' => 'control-label col-lg-2')) !!}
                            <div class="col-lg-10">
                                {!! Form::textarea('details', null, array('class' => 'form-control summernote', 'placeholder' => 'Article Content Goes Here')) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('tags', "Tags*", array('class' => 'control-label col-lg-2')) !!}
                            <div class="col-lg-10">
                                {!! Form::text('tags', null, array('class' => 'form-control', 'placeholder' => 'science, biology, dna etc', 'required' => 'required')) !!}
                            </div>
                        </div>

                        

                        <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                            {!! Form::submit('Create Article', array('class' => 'btn btn-success')) !!}
                            </div>
                        </div>
                   

                    </form>
                    </div>
                </div>
                
            </div>
        </div>
        <div class="divide60"></div>
    @endsection



@section('style')


    {!! Html::style('assets/summernote/summernote.css') !!}
@stop

@section('script')

    {!! Html::script('assets/summernote/summernote.min.js') !!}

    <!-- for editor-->
   <script type="text/javascript">

        jQuery(document).ready(function(){
                
                // $('.wysihtml5').wysihtml5();

                $('.summernote').summernote({
                    height: 200,                 // set editor height

                    minHeight: null,             // set minimum height of editor
                    maxHeight: null,             // set maximum height of editor

                    // focus: true                 // set focus to editable area after initializing summernote
                });

        });
    </script>
 


@stop
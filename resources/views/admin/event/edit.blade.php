@extends('layouts.default')
@section('content')
    <div class="wraper container-fluid">

        @include('admin.includes.alert')
        <!-- <div class="page-title"> 
            <h3 class="title">{!!$title!!}</h3> 
        </div> -->
        <!-- Masiur Rahman Siddiki -->
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="panel panel-default">

                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                    <h4>{{ $title }}</h4>
                            </div>
                            <div class="col-md-6">                            
                                <a class="pull-right" href="{!! route('event.index')!!}"><button class="btn btn-success">event List</button></a>
                            </div>
                         </div>
                    </div>

                    <div class="panel-body">
                            
                                <div class=" form"> 

                                    {!! Form::model($event, array('route' => ['event.update',$event->id], 'method' => 'PUT', 'class' => 'cmxform form-horizontal tasi-form' ,'files' => true)) !!}


                                    <div class="form-group">
                                        {!! Form::label('name', 'event Name (required)', array('class' => 'control-label col-lg-2')) !!}
                                        <div class="col-lg-10">
                                            {!! Form::text('name', null, array('class' => 'form-control', 'placeholder' => 'Enter event Name', 'required' => 'required')) !!}
                                        </div>
                                    </div>


                                   
                                <div class="form-group">
                                    {!! Form::label('date', "Event Date*", array('class' => 'control-label col-lg-2')) !!}
                                    <div class="col-lg-6">
                                        {!! Form::text('date', null, array('class' => 'form-control', 'placeholder' => 'Date of the Event', 'required' => 'required')) !!}
                                    </div>
                                </div>

                                <div class="form-group">
                                    {!! Form::label('description', "Event Details*", array('class' => 'control-label col-lg-2')) !!}
                                    <div class="col-lg-6">
                                        {!! Form::textarea('description', null, array('class' => 'form-control','placeholder' => 'Details of the event', 'row' => 2, 'required')) !!}
                                    </div>
                                </div>


                                <div class="form-group">
                                    {!! Form::label('fb_event_link', "Facebook Link*", array('class' => 'control-label col-lg-2')) !!}
                                    <div class="col-lg-6">
                                        {!! Form::text('fb_event_link', null, array('class' => 'form-control','placeholder' => 'facebook link of the event')) !!}
                                    </div>
                                </div>
      
                                <div class="form-group">
                                        {!! Form::label('image', "Image*", array('class' => 'control-label col-lg-2')) !!}
                                        <div class="col-lg-10">
                                            {!! Form::file('image', array('class' => 'form-control', 'multiple'=>false )) !!}
                                        </div>
                                </div>
                                       


                                <div class="form-group">
                                    {!! Form::label('place', "Event Place*", array('class' => 'control-label col-lg-2')) !!}
                                    <div class="col-lg-6">
                                        {!! Form::text('place', null, array('class' => 'form-control', 'placeholder' => 'Enter Event place', 'required' => 'required', 'aria-required' =>'true')) !!}
                                    </div>
                                </div>


                                    

                                    <div class="form-group">
                                        <div class="col-lg-offset-2 col-lg-10">
                                        {!! Form::submit('Save Changes', array('class' => 'btn btn-success')) !!}
                                        </div>
                                    </div>

                                    {!! Form::close() !!}
                                </div>
                             
                    </div>
                </div>

            </div>

        </div>

@stop


@section('style')

    {!! Html::style('assets/bootstrap-wysihtml5/bootstrap-wysihtml5.css') !!}
    {!! Html::style('assets/summernote/summernote.css') !!}
@stop

@section('script')

    {!! Html::script('assets/bootstrap-wysihtml5/wysihtml5-0.3.0.js') !!}
    {!! Html::script('assets/bootstrap-wysihtml5/bootstrap-wysihtml5.js') !!}
    {!! Html::script('assets/summernote/summernote.min.js') !!}


    {!! Html::script('assets/jquery.validate/jquery.validate.min.js') !!}
    {!! Html::script('assets/jquery.validate/form-validation-init.js') !!}



    <!-- for editor-->
    <script type="text/javascript">

        // jQuery(document).ready(function(){
                
        //         $('.wysihtml5').wysihtml5();

        //         $('.summernote').summernote({
        //             height: 200,                 // set editor height

        //             minHeight: null,             // set minimum height of editor
        //             maxHeight: null,             // set maximum height of editor

        //             focus: true                 // set focus to editable area after initializing summernote
        //         });

        // });
    </script>


@stop
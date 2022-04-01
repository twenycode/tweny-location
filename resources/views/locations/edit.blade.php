@extends('layouts.backend')
@section('title','Update Locations')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-6">
            <x-card cardTitle="Update Location">
                <!-- Start form -->
                {{ Form::model($location, array('route' => array('locations.update',$location), 'method' => 'PUT')) }}
                    @csrf
                    <div class="mb-3">
                        <x-label for="name" star="true"/>
                        <x-input name="name" required :value="$location->name" />
                        <x-error field="name" />
                    </div>

                    <div class="mb-3">
                        <x-label for="Parent" />
                        <x-location name="parent_id" :value="$location->parent_id"/>
                        <x-error field="parent_id" />
                    </div>
                    <div class="mb-3">
                        <x-label for="description" />
                        <x-textarea name="descriptions" class="form-control" >{{$location->descriptions}}</x-textarea>
                        <x-error field="descriptions" />
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <x-nav-link href="{{route('locations.index')}}" label="Back" class="btn btn-danger"/>
                        </div>
                        <div class="col-md-6 text-end">
                            <x-button class="btn btn-primary" label="update" />
                        </div>
                    </div>
                {{Form::close()}}

            </x-card>
        </div>
    </div>

@endsection

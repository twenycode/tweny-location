@extends('layouts.backend')
@section('title','New Locations')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-6">
            <x-card cardTitle="New Location">
                <x-alert />
                <!-- Start form -->
                <x-form action="{{route('locations.store')}}">

                    <div class="mb-3">
                        <x-label for="name" star="true"/>
                        <x-input name="name" required />
                        <x-error field="name" />
                    </div>

                    <div class="mb-3">
                        <x-label for="description" />
                        <x-textarea name="descriptions" class="form-control" />
                        <x-error field="descriptions" />
                    </div>

                    <div class="mb-3">
                        <x-label for="Parent" />
                        <x-location name="parent_id"/>
                        <x-error field="parent_id" />
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <x-nav-link href="{{route('locations.index')}}" label="Back" class="btn btn-danger"/>
                        </div>
                        <div class="col-md-6 text-end">
                            <x-button class="btn btn-primary" />
                        </div>
                    </div>
                </x-form>
            </x-card>
        </div>
    </div>

@endsection

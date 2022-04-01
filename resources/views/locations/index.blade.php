@extends('layouts.backend')
@section('title','Geographical Locations')
@section('content')

        <x-card cardTitle="Geographical Locations">

            <x-slot name="cardButtons">
                <x-nav-link href="{{route('locations.create')}}" label="<i class='fa fa-plus'></i> Add" class="btn btn-primary btn-sm"/><br/>
            </x-slot>

            <x-alert />

            <x-table>

                <!-- table headers -->
                <x-slot name="thead" >
                    <th class="col-first">#</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Parent</th>
                    <th class="col-last"><i class="fa-solid fa-gears"></i></th>
                </x-slot>

                @foreach ($locations as $location)
                    <tr>
                        <td class="text-center">{{ $loop->iteration }}</td>
                        <td class="text-left">{{ $location->name }}</td>
                        <td  class="text-left">{{ $location->descriptions }}</td>
                        <td  class="text-center">{{ $location->parent_id }}</td>
                        <td class="text-center">
                            <x-nav-link label="edit" href="{{route('locations.edit',$location)}}" class="btn btn-sm btn-outline-primary"  />
                            <x-delete action="{{route('locations.destroy',$location)}}" class="btn-outline-danger"/>
                        </td>
                    </tr>
                @endforeach

            </x-table>



        </x-card>


@endsection

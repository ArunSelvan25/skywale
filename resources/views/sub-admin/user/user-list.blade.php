@extends('sub-admin.includes.app')

@section('content')

    <div class="col-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Property Form</h4>
                <div class="main-panel">
                    <div class="content-wrapper">
                        <div class="card">
                            <div class="card-body">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h4 class="card-title">Property List</h4>
                                            <div class="">
                                                <div class="">
                                                    <div class="table-responsive">
                                                        <table class="table">
                                                            <thead>
                                                            <tr>
                                                                <th>Name</th>
                                                                <th>Rent</th>
                                                                <th>Address</th>
                                                                <th>Action</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
{{--                                                            @foreach($records as $record)--}}
{{--                                                                <tr>--}}
{{--                                                                    <td>{{ $record->name }}</td>--}}
{{--                                                                    <td>{{ $record->rent }}</td>--}}
{{--                                                                    <td>{{ $record->address }}</td>--}}
{{--                                                                    <td>--}}
{{--                                                                        <div class="row col-md-12">--}}
{{--                                                                            <div class="form-group col-md-6">--}}
{{--                                                                                <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#editProperty-{{$record->id}}">Edit</button>--}}
{{--                                                                            </div>--}}
{{--                                                                            <div class="form-group col-md-6">--}}
{{--                                                                                <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#deleteProperty-{{$record->id}}">Delete</button>--}}
{{--                                                                            </div>--}}
{{--                                                                        </div>--}}
{{--                                                                    </td>--}}
{{--                                                                </tr>--}}


{{--                                                                --}}{{-- Edit Modal --}}
{{--                                                                <div class="modal fade" id="editProperty-{{$record->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">--}}
{{--                                                                    <div class="modal-dialog modal-lg" role="document">--}}
{{--                                                                        <div class="modal-content">--}}
{{--                                                                            <div class="modal-header">--}}
{{--                                                                                <h5 class="modal-title" id="exampleModalLabel">Update property</h5>--}}
{{--                                                                                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">--}}
{{--                                                                                    <span aria-hidden="true">&times;</span>--}}
{{--                                                                                </button>--}}
{{--                                                                            </div>--}}
{{--                                                                            <form class="form-sample" method="post" action="{{ route('property.update') }}">--}}

{{--                                                                                <div class="modal-body">--}}
{{--                                                                                    @csrf--}}
{{--                                                                                    <p class="card-description">--}}

{{--                                                                                    </p>--}}
{{--                                                                                    <input type="hidden" name="id" class="form-control" value="{{$record->id}}"/>--}}
{{--                                                                                    <div class="row">--}}
{{--                                                                                        <div class="">--}}
{{--                                                                                            <div class="form-group row">--}}
{{--                                                                                                <label class="col-sm-3 col-form-label">Property Name</label>--}}
{{--                                                                                                <div class="col-sm-9">--}}
{{--                                                                                                    <input type="text" name="name" class="form-control" value="{{$record->name}}"/>--}}
{{--                                                                                                </div>--}}
{{--                                                                                            </div>--}}
{{--                                                                                        </div>--}}
{{--                                                                                    </div>--}}
{{--                                                                                    <div class="row">--}}
{{--                                                                                        <div class="">--}}
{{--                                                                                            <div class="form-group row">--}}
{{--                                                                                                <label class="col-sm-3 col-form-label">Property Description</label>--}}
{{--                                                                                                <div class="col-sm-9">--}}
{{--                                                                                                    <input type="text" name="description" class="form-control" value="{{$record->description}}"/>--}}
{{--                                                                                                </div>--}}
{{--                                                                                            </div>--}}
{{--                                                                                        </div>--}}
{{--                                                                                    </div>--}}
{{--                                                                                    <div class="row">--}}
{{--                                                                                        <div class="">--}}
{{--                                                                                            <div class="form-group row">--}}
{{--                                                                                                <label class="col-sm-3 col-form-label">Property Facilities</label>--}}
{{--                                                                                                <div class="col-sm-9">--}}
{{--                                                                                                    <input type="text" name="facilities" class="form-control" value="{{$record->facilities}}"/>--}}
{{--                                                                                                </div>--}}
{{--                                                                                            </div>--}}
{{--                                                                                        </div>--}}
{{--                                                                                    </div>--}}
{{--                                                                                    <div class="row">--}}
{{--                                                                                        <div class="">--}}
{{--                                                                                            <div class="form-group row">--}}
{{--                                                                                                <label class="col-sm-3 col-form-label">Size</label>--}}
{{--                                                                                                <div class="col-sm-9">--}}
{{--                                                                                                    <input type="text" name="size" class="form-control" value="{{$record->size}}"/>--}}
{{--                                                                                                </div>--}}
{{--                                                                                            </div>--}}
{{--                                                                                        </div>--}}
{{--                                                                                    </div>--}}
{{--                                                                                    <div class="row">--}}
{{--                                                                                        <div class="">--}}
{{--                                                                                            <div class="form-group row">--}}
{{--                                                                                                <label class="col-sm-3 col-form-label">Rent</label>--}}
{{--                                                                                                <div class="col-sm-9">--}}
{{--                                                                                                    <input type="text" name="rent" class="form-control" value="{{$record->rent}}"/>--}}
{{--                                                                                                </div>--}}
{{--                                                                                            </div>--}}
{{--                                                                                        </div>--}}
{{--                                                                                    </div>--}}
{{--                                                                                    <div class="row">--}}
{{--                                                                                        <div class="">--}}
{{--                                                                                            <div class="form-group">--}}
{{--                                                                                                <label for="exampleTextarea1">Address</label>--}}
{{--                                                                                                <textarea class="form-control" name="address" id="exampleTextarea1" rows="4">{{$record->address}}</textarea>--}}
{{--                                                                                            </div>--}}
{{--                                                                                        </div>--}}
{{--                                                                                    </div>--}}
{{--                                                                                </div>--}}
{{--                                                                                <div class="modal-footer">--}}
{{--                                                                                    <button type="submit" class="btn btn-success">Submit</button>--}}
{{--                                                                                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>--}}
{{--                                                                                </div>--}}
{{--                                                                            </form>--}}

{{--                                                                        </div>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                                --}}{{-- Edit modal end --}}

{{--                                                                --}}{{-- Delete Modal --}}
{{--                                                                <div class="modal fade" id="deleteProperty-{{$record->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">--}}
{{--                                                                    <div class="modal-dialog modal-lg" role="document">--}}
{{--                                                                        <div class="modal-content">--}}
{{--                                                                            <div class="modal-header">--}}
{{--                                                                                <h5 class="modal-title" id="exampleModalLabel">Delete property</h5>--}}
{{--                                                                                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">--}}
{{--                                                                                    <span aria-hidden="true">&times;</span>--}}
{{--                                                                                </button>--}}
{{--                                                                            </div>--}}
{{--                                                                            <form class="form-sample" method="post" action="{{ route('property.delete') }}">--}}

{{--                                                                                <div class="modal-body">--}}
{{--                                                                                    @csrf--}}
{{--                                                                                    <p>--}}
{{--                                                                                        Do you really want to delete <b>{{$record->name}}</b>?--}}
{{--                                                                                    </p>--}}
{{--                                                                                    <input type="hidden" name="id" class="form-control" value="{{$record->id}}"/>--}}
{{--                                                                                </div>--}}
{{--                                                                                <div class="modal-footer">--}}
{{--                                                                                    <button type="submit" class="btn btn-success">Submit</button>--}}
{{--                                                                                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>--}}
{{--                                                                                </div>--}}
{{--                                                                            </form>--}}

{{--                                                                        </div>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                                --}}{{-- Delete Modal End --}}
{{--                                                            @endforeach--}}
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <!-- a Tag for previous page -->
{{--                                                    <a href="{{$records->previousPageUrl()}}">--}}
{{--                                                    </a>--}}
{{--                                                    @for($i=1;$i<=$records->lastPage();$i++)--}}
{{--                                                        <a href="{{$records->url($i)}}">{{$i}}</a>--}}
{{--                                                    @endfor--}}
{{--                                                    <!-- a Tag for next page -->--}}
{{--                                                    <a href="{{$records->nextPageUrl()}}">--}}
{{--                                                    </a>--}}
                                                </div>
                                            </div>
                                        </div>

                                        {{-- Create Property --}}
                                        <div class="col-md-6">
                                            <form class="form-sample" method="post" action="{{ route('property.store') }}">
                                                @csrf
                                                <p class="card-description">
                                                    Register property
                                                </p>
                                                <div class="row">
                                                    <div class="">
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label">Property Name</label>
                                                            <div class="col-sm-9">
                                                                <input type="text" name="name" class="form-control" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="">
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label">Property Description</label>
                                                            <div class="col-sm-9">
                                                                <input type="text" name="description" class="form-control" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="">
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label">Property Facilities</label>
                                                            <div class="col-sm-9">
                                                                <input type="text" name="facilities" class="form-control" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="">
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label">Size</label>
                                                            <div class="col-sm-9">
                                                                <input type="text" name="size" class="form-control" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="">
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label">Rent</label>
                                                            <div class="col-sm-9">
                                                                <input type="text" name="rent" class="form-control" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="">
                                                        <div class="form-group">
                                                            <label for="exampleTextarea1">Address</label>
                                                            <textarea class="form-control" name="address" id="exampleTextarea1" rows="4"></textarea>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="form-group">
                                                        <button type="submit" class="btn btn-success">Success</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('script')

    <script>
        const url = window.location.origin;
    </script>
@endsection

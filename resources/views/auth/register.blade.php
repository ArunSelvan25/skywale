@extends('sub-admin.includes.app')

@section('style')
.select2-container--default .select2-selection--single .select2-selection__arrow {
    top: 13px !important;
    right: 7px !important;
@endsection

@section('content')
    <div class="col-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Users Form</h4>
                <div class="main-panel">
                    <div class="">
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
                                                                <th>Email</th>
                                                                <th>Action</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach($users as $user)
                                                                    <tr>
                                                                        <td>{{ $user->name }}</td>
                                                                        <td>{{ $user->email }}</td>
                                                                        <td>
                                                                            <div class="row col-md-12">
                                                                                <div class="form-group col-md-6">
                                                                                    <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#editUser-{{$user->id}}">Edit</button>
                                                                                </div>
                                                                                <div class="form-group col-md-6">
                                                                                    <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#deleteUser-{{$user->id}}">Delete</button>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>


        {{--                                                                                                                             Edit Modal--}}
                                                                    <div class="modal fade" id="editUser-{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                        <div class="modal-dialog modal-lg" role="document">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h5 class="modal-title" id="exampleModalLabel">Update property</h5>
                                                                                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                                                                        <span aria-hidden="true">&times;</span>
                                                                                    </button>
                                                                                </div>
                                                                                <form class="form-sample" method="post" action="#">

                                                                                    <div class="modal-body">
                                                                                        @csrf
                                                                                        <p class="card-description">

                                                                                        </p>
                                                                                        <input type="hidden" name="id" class="form-control" value="{{$user->id}}"/>
                                                                                        <div class="row">
                                                                                            <div class="">
                                                                                                <div class="form-group row">
                                                                                                    <label class="col-sm-3 col-form-label">Name</label>
                                                                                                    <div class="col-sm-9">
                                                                                                        <input type="text" name="name" class="form-control" value="{{$user->name}}"/>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="row">
                                                                                            <div class="">
                                                                                                <div class="form-group row">
                                                                                                    <label class="col-sm-3 col-form-label">Email</label>
                                                                                                    <div class="col-sm-9">
                                                                                                        <input type="text" name="facilities" class="form-control" value="{{$user->email}}"/>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    <div class="modal-footer">
                                                                                        <button type="submit" class="btn btn-success">Submit</button>
                                                                                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                                                                                    </div>
                                                                                </form>

                                                                            </div>
                                                                        </div>
                                                                    </div>
        {{--                                                                                                                             Edit modal end--}}

        {{--                                                                                                                             Delete Modal--}}
                                                                    <div class="modal fade" id="deleteUser-{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title" id="exampleModalLabel">Delete user</h5>
                                                                                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                                                                    <span aria-hidden="true">&times;</span>
                                                                                </button>
                                                                            </div>
                                                                            <form class="form-sample" method="post" action="#">

                                                                                <div class="modal-body">
                                                                                    @csrf
                                                                                    <p>
                                                                                        Do you really want to delete <b>{{$user->name}}</b>?
                                                                                    </p>
                                                                                    <input type="hidden" name="id" class="form-control" value="{{$user->id}}"/>
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="submit" class="btn btn-success">Submit</button>
                                                                                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                                                                                </div>
                                                                            </form>

                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-dialog modal-lg" role="document">
                                                                    </div>
        {{--                                                                                                                             Delete Modal End--}}
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div>
{{--                                                    <!-- a Tag for previous page -->--}}
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
                                            <form method="POST" action="{{route('post-register')}}">
                                                @csrf

                                                <div class="row mb-3">
                                                    <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                                                    <div class="col-md-6">
                                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                                        @error('name')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                                    <div class="col-md-6">
                                                        <input id="email" type="email" class="form-control custom-validate @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                                        @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                                    <div class="col-md-6">
                                                        <input id="password" type="password" class="form-control custom-validate @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                                        @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                </div>





                                                <div class="row mb-3">
                                                    <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                                                    <div class="col-md-6">
                                                        <input id="password-confirm" type="password" class="form-control custom-validate" name="password_confirmation" required autocomplete="new-password">
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label for="password" class="col-md-4 col-form-label text-md-end">Select Property</label>
                                                    <div class="col-md-6">
                                                        <select name="property_id" class="js-example-basic-single w-100">
                                                            <option>Select property</option>
                                                            @foreach($properties as $property)
                                                                <option value="{{$property->id}}">{{$property->name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="row mb-0">
                                                    <div class="col-md-6 offset-md-6">
                                                        <button type="submit" class="btn btn-primary">
                                                            {{ __('Register') }}
                                                        </button>
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
        function errorMessageShow(element, errorMessage, style = "") {
            element.parent().append('<p class="validation invalid-feedback text-xs font-sans mt-2 text-red leading-4" style="' + style + ';color:#d32929;">' + errorMessage + '</p>');
            element.css('border-color', '#d32929');
            element.next().children().children().addClass('select-color');
        }

        function removeErrorMessage(attribute, className) {
            if (attribute.parent().children().hasClass(className)) {
                attribute.parent().find('.' + className).remove();
                attribute.css("border-color", "#cbd5e0");
                attribute.parent().css("border-color", "#cbd5e0");
            }
        }
    </script>
@endsection

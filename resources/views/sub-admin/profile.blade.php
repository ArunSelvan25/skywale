@extends('sub-admin.includes.app')

@section('style')
    .dropzone {
{{--        border-radius : 100px !important;--}}
    }
@endsection

@section('content')

    <div class="col-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Profile</h4>
                <div class="main-panel">
                    <div class="">
                        <div class="card">
                            <div class="card-body">
                                <div class="col-md-12">
                                    <div class="row">
{{--                                        <div class="col-md-10">--}}

{{--                                        </div>--}}
{{--                                        <div class="col-md-2">--}}
                                            <h4 class="card-title">Profile image</h4>
                                            <form action="{{ route('sub-admin.profile.image-upload') }}" class="dropzone" id="my-dropzone">
                                                @csrf
                                                <div class="dz-default dz-message">
                                                    Drop your profile image here
                                                </div>
                                            </form>
{{--                                        </div>--}}
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
        let profileImage = "{{$profileImage}}";
        let profileImagePath = "{{$profileImagePath}}";
        let mockFile = new File([profileImagePath], profileImage);
        // console.log('profileImagePath.size',profileImagePath.width());
        let file = {
            name: profileImage,
            path: profileImagePath,
        };
        console.log('file',file);
        const url = window.location.origin;
        let myDropzone = Dropzone("#my-element", {
            maxFilesize: 12,
            thumbnailWidth: 200,
            acceptedFiles: ".jpeg,.jpg,.png,.gif",
            addRemoveLinks: true,
            timeout: 5000,
            success: function(file, response)
            {
                console.log('response',response);
                console.log('file',file);
            },
            error: function(file, response)
            {
                return false;
            }
        });
        myDropzone.emit("addedfile", mockFile);
        myDropzone.emit("thumbnail", mockFile, file.path);
        myDropzone.emit("complete", mockFile);
    </script>
@endsection


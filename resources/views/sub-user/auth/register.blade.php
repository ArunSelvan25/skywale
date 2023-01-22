@extends('includes.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="#">
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

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-6">
                                <a href="/admin/login" class="btn btn-primary">
                                    {{ __('Login') }}
                                </a>
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
@endsection

@section('script')
    <script>
        $('#name').on('focusout',function() {
            removeErrorMessage($(this), "invalid-feedback");
            if($(this).val() == '') {
                errorMessageShow($(this), 'This field is required', "display:block; margin-bottom:2px;");
            }
        });
        $('#email').on('focusout',function() {
            removeErrorMessage($(this), "invalid-feedback");
            if($(this).val() == '') {
                errorMessageShow($(this), 'This field is required', "display:block; margin-bottom:2px;");
            }

        });
        $('#password').on('focusout',function() {
            removeErrorMessage($(this), "invalid-feedback");
            if($(this).val() == '') {
                errorMessageShow($(this), 'This field is required', "display:block; margin-bottom:2px;");
            }

        });
        $('#password-confirm').on('focusout',function() {
            removeErrorMessage($(this), "invalid-feedback");
            if($(this).val() == '') {
                errorMessageShow($(this), 'This field is required', "display:block; margin-bottom:2px;");
            }

        });

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

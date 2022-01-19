@extends('layouts.app')

@section('content')
<div class="mt-4">
    <div class="italic uppercase border-b text-left">
        <h2>change password</h2>
    </div>
</div>
                
                    @if (session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    @if($errors)
                        @foreach ($errors->all() as $error)
                            <div class="alert alert-danger">{{ $error }}</div>
                        @endforeach
                    @endif
                    <form class="form-horizontal" method="POST" action="{{ route('changePasswordPost') }}">
                        {{ csrf_field() }}
                        <div class="flex flex-wrap">
                            <div class="pt-3">
                                <div class="max-w-lg mr-12">
                        <div class="form-group{{ $errors->has('current-password') ? ' has-error' : '' }}">
                            <label for="new-password" class="block text-gray-700 text-s text-left mb-2">Current Password</label>

                            
                                <input id="current-password" type="password" class="form-control appearance-none block w-80 bg-gray-200 text-gray-700 rounded py-2.5
                                px-4 mb-3 leading-tight focus:outline-none focus:bg-white" placeholder="Enter your current-password" name="current-password" required>

                                @if ($errors->has('current-password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('current-password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('new-password') ? ' has-error' : '' }}">
                            <label for="new-password" class="block text-gray-700 text-s text-left mb-2">New Password</label>

                            <div class="col-md-6">
                                <input id="new-password" type="password" class="form-control appearance-none block w-80 bg-gray-200 text-gray-700 rounded
                                py-2.5 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" 
                                placeholder="Enter your new-password" name="new-password" required>

                                @if ($errors->has('new-password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('new-password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="new-password-confirm" class="block text-gray-700 text-s text-left mb-2">Confirm New Password</label>

                            <div class="col-md-6">
                                <input id="new-password-confirm" type="password" class="form-control appearance-none block w-80 bg-gray-200 text-gray-700 rounded
                                py-2.5 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" placeholder="Confirm your new-password" name="new-password_confirmation" required>
                            </div>
                        </div>
                        <div class="flex relative mt-10">
                                <button type="submit" class="btn btn-primary ml-20 bg-blue-500">
                                    Change Password
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
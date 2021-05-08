@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Welcome  {{  Auth::user()->name }}
                    <a href="{{ route('get-upload')  }}"  class="btn btn-primary btn-sm" style="float: right">Add Image(s)</a>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h4>All Images</h4>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

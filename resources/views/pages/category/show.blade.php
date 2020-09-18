@extends('layouts.app')
@section('content')
<div class="col-md-12 col-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Create Category</h4>
        </div>
        <div class="card-content">
            <div class="card-body">
                <form class="form" action="{{ route('category.update',$data->id) }}" method="POST">
                    @method('PUT')
                    {{ csrf_field() }}
                    <div class="form-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-label-group">
                                    <input type="text" class="form-control" placeholder="Name" name="name" value="{{ $data->name }}">
                                    <label for="name-floating">Name</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-label-group">
                                    <input type="text" class="form-control" name="pretty_url" placeholder="Pretty Url" value="{{ $data->pretty_url }}">
                                    <label for="pretty-url-floating">Pretty Url</label>
                                </div>
                            </div>
                            <div class="col-12 text-right">
                                <button type="submit" class="btn btn-primary mr-1 mb-1 waves-effect waves-light">Submit</button>
                                <a href="{{ URL::previous() }}" class="btn btn-outline-warning mr-1 mb-1 waves-effect waves-light">Cancel</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
@extends('layouts.app')
@section('content')
<div class="col-md-12 col-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Create Book</h4>
        </div>
        <div class="card-content">
            <div class="card-body">
                <form class="form" action="{{ route('book.store') }}" method="POST">
                    {{ csrf_field() }}
                    <div class="form-body">
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label>Title</label>
                                    <input type="text" class="form-control" placeholder="Title" name="title">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label>ISBN</label>
                                    <input type="text" class="form-control" name="ISBN" placeholder="ISBN">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label>Pretty Url</label>
                                    <input type="text" class="form-control" name="pretty_url" placeholder="Pretty Url">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label>Category</label>
                                    <select multiple name="categories[]" class="form-control">
                                        @foreach($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label>Page(s)</label>
                                    <input type="number" class="form-control" name="pages" placeholder="Pages">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label>Author</label>
                                    <input type="text" class="form-control" name="author" placeholder="Author">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label>Publisher Date</label>
                                    <input type="date" class="form-control" name="publication_date" placeholder="Publication Date">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label>Publisher</label>
                                    <input type="text" class="form-control" name="publisher" placeholder="Publisher">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea class="form-control" name="description"></textarea>
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
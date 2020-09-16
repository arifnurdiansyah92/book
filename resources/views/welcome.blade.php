@extends('layouts.app')
@section('title','Dashboard')
@section('content')
<!-- Description -->
<section id="description" class="card">
    <div class="card-header">
        <h4 class="card-title">Description</h4>
    </div>
    <div class="card-content">
        <div class="card-body">
            <div class="card-text">
                <p>2 Columns layout is the most common and popular layout, it has a navigation with content section. This layout
                    use the common navbar and footer sections, however you can add customized header or footer on page level.</p>
                <div class="alert alert-warning" role="alert">
                    Vuexy Admin Template default layout is 2 columns. If you do not define pageConfig block on page or template
                    level, it will consider 2 columns by default.
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ Description -->
@endsection
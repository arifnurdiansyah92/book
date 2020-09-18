<div class="row breadcrumbs-top">
    <div class="col-12">
        <h2 class="content-header-title float-left mb-0">{{ $breadcrumbs->last()[0] }}</h2>
        <div class="breadcrumb-wrapper col-12">
            <ol class="breadcrumb">
                @foreach($breadcrumbs as $item)
                <li class="breadcrumb-item">
                    <a href="{{ $item[1] }}">{{ $item[0] }}</a>
                </li>
                @endforeach
            </ol>
        </div>
    </div>
</div>
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
              <div class="card-header">Search</div>
                <div class="card-body">
		            <form action="{{ route('search') }}" method="GET">
					    @csrf
					    <input type="text" name="query" class="form-control" />
					    <input type="submit" class="btn btn-sm btn-primary" value="Search" style="margin-top: 10px;" />
					</form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('text.Welcome') }}</div>

                    <div class="card-body" style="width:400px">
                        <form action="{{ url('import') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="file" name="file" class="form-control">
                            <br>
                            <button class="btn btn-success">Import User Data</button>
                            <a class="btn btn-warning" href="{{ url('export') }}">Export User Data</a>
                        </form>
                        <a class="btn btn-success mt-3" href="{{ url('comment_import') }}">Export Comment
                            Data</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

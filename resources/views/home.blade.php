@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row" id="timeline">
            <div class="col-md-4">
                <form action="#">
                    <div class="form-group">
                        <textarea class="form-control" rows="10" maxlength="140" placeholder="What are you upto?" required></textarea>
                    </div>
                    <input type="submit" value="Post" class="form-control">

                </form>
            </div>
            <div class="col-md-4">
                Timeline
            </div>
        </div>
    </div>
@endsection

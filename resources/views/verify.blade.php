@extends('layouts.main')
<style>
    body{
        background: #364d59 !important;
    }
    .track_cert{
        margin-top: 15rem;
        margin-bottom: 9rem;
    }
    .header{
        background: black !important;
    }
</style>
@section('content')
<div class="container">
    <div class="track_cert">
        <form method="POST" action="{{ url('send-verification') }}">
            @csrf
            <div class="mb-3 mt-3">
              <label for="email" class="form-label">Verify Certificate</label>
              <input type="text" name="tracking_code" class="form-control" id="email" placeholder="Enter Tracking number" name="email">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
</div>
@endsection

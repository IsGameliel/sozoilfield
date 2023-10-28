@extends('layouts.admin')

<style>
  span > a > svg{
    width: 3%;
  }

  span > svg{
    width: 3%;
  }
</style>

@section('content')
      <div class="body flex-grow-1 px-3">
        <div class="container-lg">
          <div class="row">
          <!-- /.row-->
          <div class="row">
            <div class="col-md-12">
              <div class="card mb-4">
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table border mb-0 mb-4">
                      <thead class="table-light fw-semibold">
                        <tr class="align-middle">
                          <th class="text-center">ID</th>
                          <th class="text-center">Title</th>
                          <th class="text-center">Tag</th>
                          <th class="text-center">Image</th>
                          <th class="text-center">Description</th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($courses as $item)
                        <tr class="align-middle">
                          <td class="text-center">{{ $item->id }}</td>
                          <td class="text-center">{{ $item->title }}</td>
                          <td class="text-center">{{ $item->tag }}</td>
                          <td class="text-center"><img src="{{ asset('image/' . $item->image)}}" width="100" height="50" alt="course image"></td>
                          <td class="text-center">{{ $item->description }}</td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                    {!! $courses->links() !!}
                  </div>
                </div>
              </div>
            </div>
            <!-- /.col-->
          </div>
          <!-- /.row-->
        </div>
      </div>
      @endsection

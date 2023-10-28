@extends('layouts.user')

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
                          <th class="text-center">Download</th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr class="align-middle">
                          <td class="text-center">1</td>
                          <td class="text-center">Confinedspace</td>
                          <td class="text-center">CONSP001</td>
                          <td class="text-center"><img src="{{ asset('course/1.jpg') }}" width="100" height="50" alt="course image"></td>
                          <td class="text-center">Working in a confined space entails navigating tight quarters, dealing with limited ventilation, and performing tasks that require precision and adaptability.</td>
                          <td class="text-center"><a href="{{ asset('course/confinedspace.ppt') }}" download>Download</a></td>
                        </tr>
                        <tr class="align-middle">
                          <td class="text-center">2</td>
                          <td class="text-center">IMIST</td>
                          <td class="text-center">IMIST001</td>
                          <td class="text-center"><img src="{{ asset('course/2.jpg') }}" width="100" height="50" alt="course image"></td>
                          <td class="text-center">IMIST (International Minimum Industry Safety Training) is an OPITO standard which supports the global Oil and Gas Industry to meet safety initiative targets.</td>
                          <td class="text-center"><a href="{{ asset('/course/IMIST.pptx') }}" download>Download</a></td>
                        </tr>
                      </tbody>
                    </table>
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

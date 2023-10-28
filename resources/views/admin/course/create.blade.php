@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb my-0 ms-2">
        <li class="breadcrumb-item">
          <!-- if breadcrumb is single--><span>Home</span>
        </li>
        <li class="breadcrumb-item"><span>Course</span></li>
        <li class="breadcrumb-item active"><span>Create</span></li>
      </ol>
    </nav>
  </div>
</header>
<div class="body flex-grow-1 px-3">
<div class="container-lg">
    <div class="row">
    <div class="col-12">
        <div class="card mb-4">
        <div class="card-header"><strong>Create Course</strong></div>
        <div class="card-body">
            <div class="example">
            <div class="tab-content rounded-bottom">
                <form action="{{ url('admin/course/send') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="container">
                        <div class="form-group mb-4">
                            <input type="text" name="title" placeholder="title" class="form-control">
                        </div>

                        <div class="form-group mb-4">
                            <select name="tag" id="" class="form-control">
                                <option value="filter-oil">filter-oil</option>
                                <option value="filter-hse">filter-hse</option>
                                <option value="filter-mgt">filter-mgt</option>
                                <option value="filter-leadership">filter-leadership</option>
                                <option value="filter-others">filter-others</option>
                            </select>
                        </div>

                        <div class="form-group mb-4">
                            <input type="file" name="image" class="form-control">
                        </div>

                        <div class="form-group mb-4">
                            <textarea name="description"  class="form-control" id="" cols="30" rows="10"></textarea>
                        </div>

                        <div class="form-group mb-4">
                            <input type="submit" class="btn btn-primary btn-lg">
                        </div>
                    </div>
                </form>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
</div>
</div>
    @endsection

@extends('admin/layout/app')

@section('title')
    Blog - {{ env('APP_NAME') }}
@endsection

@section('content')
 
  <form action="{{ route('UpdateBlogSection') }}" method="post">
    @csrf
    @method('put')
    <input type="hidden" name="id" value="{{ $blogSection->id }}">
    <div class="row">
      <div class="col-lg-12">
          <div class="card">
              <div class="card-header">
                  <h4 class="card-title mb-0">Custom country select input</h4>
              </div>
              <div class="card-body">
                  <div class="row g-3">
                      <div class="col-lg-6">
                          <div>
                              <label class="form-label">Name of Blog Section</label>
                              <div>
                                  <input type="text" name="name" class="form-control rounded-end" value="{{ $blogSection->name }}"  placeholder="Ex. Mathmatic" >
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-6">
                          <div>
                              <label class="form-label">Description of Blog Section</label>
                              <div>
                                <textarea name="description" class="form-control" id="" cols="30" rows="1" style="resize:none">{{  $blogSection->description}} </textarea>
                              </div>
                          </div>
                      </div>
                      <button type="submit" class="btn btn-success">Add</button>
                  </div>
              </div>
              <!-- end card body -->
          </div>
          <!-- end card -->
      </div>
      <!-- end col -->
  </div>
  </form>
@endsection

@extends('admin/layout/app')

@section('title')
    Blog - {{ env('APP_NAME') }}
@endsection

@section('content')
 
  <form action="{{ route('admin.Updateblog') }}" method="post">
    @csrf
    @method('put')
    <input type="hidden" name="id" value="{{ $blog->id }}">
    <div class="row">
      <div class="col-lg-12">
          <div class="card">
              <div class="card-header">
                  <h4 class="card-title mb-0">Edit blog</h4>
              </div>
              <div class="card-body">
                  <div class="row g-3">
                      <div class="col-lg-6">
                          <div>
                              <label class="form-label">Name of Blog </label>
                              <div>
                                  <input type="text" name="name" value="{{ $blog->name }}" class="form-control rounded-end"  placeholder="Ex. Mathmatic" >
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-6">
                          <div>
                              <label class="form-label">Description of Blog </label>
                              <div>
                                <textarea name="description" class="form-control" id="" cols="30" rows="1" style="resize:none">{{ $blog->description }}</textarea>
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-6">
                          <div>
                              <label class="form-label">img of Blog </label>
                              <div>
                                <input type="file" name="img" value="{{ $blog->img }}" class="form-control rounded-end" >
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-6">
                          <div>
                              <label class="form-label">blog section of Blog </label>
                              <div>
                                <select class="form-select" name="blog_section_id" id="">
                                  @foreach($sections as $key => $section)
                                    <option value="{{ $section->id }}" @if($blog->blog_section_id==$section->id) selected @endif >{{ $section->name }}</option>
                                  @endforeach
                                </select>
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

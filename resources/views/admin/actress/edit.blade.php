@extends('admin.layout')
@section('title', 'Dark Movies')
@section('panel')
              <div class="col-lg-12">
                <div class="block" style="background-color: #222222;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.4), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                  <div class="title"><strong>Edit Actress</strong></div>
                  <div class="block-body">
                    @if ($errors->any())
                  <div class="alert alert-danger">
                  <ul>
                    @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                  @endforeach
                  </ul>
                  </div>
                  @endif
                    <form class="form-horizontal"  method="POST" action="/admin/actress/{{ $actress->id }}" enctype="multipart/form-data">
                    	  {{ method_field('PATCH') }}
                           {{ csrf_field() }}
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Actor Name</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="name" value="{{$actress->name}}">
                        </div>
                      </div>
                                             <div class="line"></div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Born</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="born" value="{{$actress->born}}">
                        </div>
                      </div>
                                             <div class="line"></div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Birth Name</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="birth_name" value="{{$actress->birth_name}}">
                        </div>
                      </div>

                                                                   <div class="line"></div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Facebook ID</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="facebook" value="{{$actress->facebook}}">
                        </div>
                      </div>
                       <div class="line"></div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">twitter ID</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="twitter" value="{{$actress->twitter}}">
                        </div>
                      </div>
                       <div class="line"></div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Wiki ID</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="wiki" value="{{$actress->wiki}}">
                        </div>
                      </div>
                       <div class="line"></div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Image</label>
                        <div class="col-sm-9">
                        <img width="150px" height="150px" src="{{asset('/images/actress/'.$actress->image)}}">
                            <input type="file" name="image" class="form-control">

                        </div>
                      </div>

                       <div class="line"></div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Description</label>
                        <div class="col-sm-9">
                          <textarea class="form-control" name="desc" id="exampleFormControlTextarea5" rows="4" >{{$actress->desc}}</textarea>
                        </div>
                        </div>
                      </div>
                      <div class="line"></div>
                      <div class="form-group row">
                        <div class="col-sm-9 ml-auto">

                          <button name="upload" value="Upload" type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
@endsection

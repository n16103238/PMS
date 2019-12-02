@extends('Dashboard.admin_dashboard')

@section('content')
<!-- page start-->
        <section class="panel">
            <h1>
            <header class="panel-heading">
                <i class="fa fa-plus-circle"></i>
                Add Category
              </header></h2>
            <div class="">
                <div class="adv-table editable-table ">
                    <div class="clearfix">
                        <div class="col-md-6">
                            <section class="panel">
                                <div class="panel-body">
                                  <form  action="{{ route('create_category') }}" method="POST">
                                      @csrf
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Name</label>
                                            <input type="text" class="form-control" name="name" >
                                        </div>
                                        <div class="form-group">
                                            <label>Description</label>
                                            <textarea class="form-control" name="description">
                                            </textarea>
                                        </div>

                                        <button type="submit" name="submit" class="btn btn-info"> Submit</button>
                                      </form>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- page end-->
@endsection

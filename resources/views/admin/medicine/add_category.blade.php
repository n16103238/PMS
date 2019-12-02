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
          <form role="form" action="admin/medicine/add_category" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Category</label>
                                            <input type="text" class="form-control" name="category" value='' placeholder="Enter Category Name">
                                        </div>
                                        <div class="form-group">
                                            <label>Description</label>
                                            <textarea class="form-control" name="description"  value='' placeholder="Enter Short Description">
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

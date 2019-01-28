@extends('layouts.app')
@section('title') Create  @stop
@section('content')
<div class="container" style="margin:50px;">
   
        <h2> Add new Blog</h2>
        @if($errors->any())
        <div class="alert alert-danger">
            <ul class="list-unstyled">
                @foreach($errors->all() as $error)
                    <li> {{ $error  }}</li>
                @endforeach
            </ul>
        </div>
    @endif
<div class="row">
        <div class="col-md-8">
            <form action="{!! url('blogs') !!}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="email">Title *</label>
                    <input type="text" class="form-control" placeholder="Enter title" name="title" >
                </div>
                <div class="form-group">
                    <label for="pwd">Image</label>
                    <input type="file" class="form-control" name="image">
                </div>
                <div class="form-group">
                    <label for="email">Description</label>
                    <textarea class="form-control" placeholder="Enter title" name="description" rows="3">
            </textarea>
                </div>

                <div class="form-group">
                    <label for="email">Meta Title</label>
                    <input type="text" class="form-control" placeholder="Meta title" name="meta_title">
                </div>

                <div class="form-group">
                    <label for="email">Meta Keywords</label>
                    <input type="text" class="form-control" placeholder="Meta keywords" name="meta_keywords">
                </div>

                <div class="form-group">
                    <label for="email">Meta Description</label>
                    <textarea class="form-control" placeholder="Enter meta description" name="meta_description"
                              rows="3">
            </textarea>
                </div>


                <div class="form-group">
                    <label for="email">Publish Status</label>
                    <input type="radio" name="status" value="1" checked> : Published
                    <input type="radio" name="status" value="0"> : Unpublished
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
</div>
@stop
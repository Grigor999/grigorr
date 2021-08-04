@extends("layouts.main");

@section("title","Products / Create")

@section("content")

    <div class="container mt-5">

        @include("errors.form"){{-- ---verevic grvox erorneri hamar --}}

            <form method="POST">

                @csrf
                
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="fprm-control" name="name">
                </div>

                    @error('name')
                        <span class="text-denger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                <div class="form-group">
                    <label>Price</label>
                    <input type="text" class="fprm-control" name="price">
                </div>

                    @error('price')
                        <span class="text-denger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                <div class="form-group">
                    <label>Count</label>
                    <input type="text" class="fprm-control" name="count">
                </div>

                    @error('count')
                        <span class="text-denger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                <div class="form-group">
                    <label>Description</label>
                    <textarea class="fprm-control" rows="5" name="description"></textarea>
                </div>

                <div>
                    <input type="submit" class="btn btn-primary" value="New">
                </div>

            </form>  
    </div>
    
    @endsection
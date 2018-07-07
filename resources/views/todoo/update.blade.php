@extends('todoo/app')
@section('content')

 
        
   <form class="form-group" method="GET" action="{{ route('todoo.edit',$data->id) }}">
   	{{ csrf_field() }}

   	 <label>
   	 	Update Text Here.
   	 </label>
   	 <input type="text" name="text" value="{{ $data->text }} " class="form-control">
       <br>
   	 <input type="submit" name="submit" class="btn btn-primary" value="Update">

   </form>
      


@stop
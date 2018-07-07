@extends('todoo/app')
@section('content')
   @if(Session::has('success'))
   <div class="alert alert-success" role="alert">

          {{ Session::get('success')}}   	
   </div>

   @endif
   <form class="form-group" method="post">
   	{{ csrf_field() }}

   	 <label>
   	 	Enter Text Here.
   	 </label>
   	 <input type="text" name="text" class="form-control">
       <!-- <input type="hidden" name="completed"> -->
   	 <input type="submit" name="submit" class="btn btn-primary">

   </form>
   <table class="table table-bordered">
   	<tr>
   		<th>Content</th>
   		<th>Action</th>
   	</tr>
   	@foreach($data as $info)
   	     <tr>
   		   <td>{{ $info->text }}</td>
   		   <td>
   		   	<a href="{{ route('todoo.destroy',$info->id )}}" onclick="return confirm('Are you sure?')" data-method="delete" class="btn btn-danger" id="showtoast" >Delete</a>
   		   	<a href="{{ route('todoo.update',$info->id )}} " data-method="PUT"  class="btn btn-success">Update</a>
               @if(!$info->completed)
               <a href="{{ route('todoo.completed', $info->id) }}" class="btn btn-xs btn-primary">Mark As Completed</a>
               @else
               <h3> Completed</h3>
                
               @endif

   		   </td>
   	     </tr>
   	@endforeach
   	
   </table>

@stop
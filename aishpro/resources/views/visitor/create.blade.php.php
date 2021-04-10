@extends('visitorlog')

@section('content')

<div class="row">
    <div class="row-md-12">
          <br/>
          <h3align="center">add data</h3>
          <br>
          <form action="{{url('visitor')}}" method="post">
          name: <input type="text" name="Name" >
          <br>
           roll no:<input type="text" name="Roll" >
           <br>
            mobile no:<input type="text" name="Mobile" >
            <br>
            <input type="submit"  name ="submit" value="insert" class="btn btn-primary">

          </form>
    </div>
</div>

@endsection
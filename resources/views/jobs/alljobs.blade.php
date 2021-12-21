@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
      <div class="form-inline">
          <div class="form-group">
              <label>Keyword&nbsp;</label>
              <input type="text" name="title" class="form-control">&nbsp;&nbsp;&nbsp;
          </div>
          <div class="form-group">
            <label>Employment type</label>
            <input type="text" name="type" class="form-control">&nbsp;&nbsp;
        </div>
        <div class="form-group">
            <label>category</label>
            <input type="text" class="form-control">&nbsp;&nbsp;
        </div>
        <div class="form-group">
              <label>address</label>
              <input type="text" name="address" class="form-control">&nbsp;&nbsp;
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-outline-success">Search</button>
        </div>
      </div>

      <table class="table">
       
        <tbody>
          @foreach($jobs as $job)
          <tr>
            <td><img src="{{asset('avatar/man.jpg')}}" width="80"></td>
            <td>position:{{$job->position}}
              <br>
              <i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp;{{$job->type}}
            </td>
            <td><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;Address:{{$job->address}}</td>
            <td><i class="fa fa-globe" aria-hidden="true"></i>&nbsp;Date:{{$job->created_at}}</td>
            <td>
              <a href="
              {{route('jobs.show',[$job->id,$job->slug])}}">
               <button class="btn btn-success btn-sm">Apply</button>
            </a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      {{$jobs->links()}}
        
    </div>
  

@endsection
<style>
  .fa{
    color:#4183D7;
  }
</style>


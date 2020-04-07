@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Send Bulk SMS</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action='' method='post'>
              @csrf
                      @if($errors->any())
              <ul>
             @foreach($errors->all() as $error)
            <li> {{ $error }} </li>
             @endforeach
        @endif

        @if( session( 'success' ) )
             {{ session( 'success' ) }}
        @endif
        <div class="card">
        <div class="card-header">Phone numbers (seperate with a comma [,])</div><br>
        <div class="card-body"> 
             <input type='text' class="form-control col-xs-12" rows="7" cols="50" name='numbers' /></div>

             <div class="card">
        <div class="card-header">Message</div><br>
        <div class="card-body"> 
            <textarea class="form-control col-xs-12" rows="7" cols="50" name='message'></textarea></div>

            <button type='submit'>Send Message!</button>
      </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@extends('layouts.app')

@section('content')

  <div class="container">

    {{-- visualizzare tutti gli errori in alto --}}
    {{-- @if($errors->any())
      <div class="alert alert-danger"> --}}
        {{-- @dd($errors)   --}}
        {{-- <ul>
          @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
          @endforeach
        </ul>
      </div>
    @endif --}}

    <form action="{{ route('admin.posts.store')}}" method="post">
      @csrf
      <div class="mb-3">
        <label for="titolo" class="form-label">Titolo</label>
        <input type="text" class="form-control
        {{-- punto esclamativo su campo errore --}}
        @error('title')
        is-invalid 
        @enderror"
        id="titolo" name='title' value="{{old('title')}}">
        {{-- errore sotto al campo con errore --}}
        @error('title')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>

      <div class="mb-3">
        <label for="desc" class="form-label">Descrizione</label>
        <textarea class="form-control
        @error ('content')
        is-invalid 
        @enderror" 
        name="content" id="desc" cols="30" rows="10">
          {{old('content')}}
        </textarea>
        @error('content')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>
      
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
    
@endsection
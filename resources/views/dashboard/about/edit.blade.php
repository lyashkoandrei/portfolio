@extends('layouts.dashboard')

@section('content')

    <h2>{{__('about.about')}}</h2>
    <nav>
        <a class="btn btn-info"  href="/ru/dashboard/about">RU</a>
        <a class="btn btn-info"  href="/en/dashboard/about">EN</a>
    </nav>
    <form method="post" class="col-md-6" action="/dashboard/about">
        <div class="form-group">
            <label>{{__('about.name')}}</label>
            <input type="text" name="name" class="form-control" placeholder="{{__('about.name')}}" value="{{$about->name}}">
            @error ('name')
            <small class="form-text text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group">
            <label>{{__('about.surname')}}</label>
            <input type="text" name="surname" class="form-control" placeholder="{{__('about.surname')}}" value="{{$about->surname}}">

        </div>
        <div class="form-group">
            <label>{{__('about.tel')}}</label>
            <input type="text" name="tel" class="form-control" placeholder="{{__('about.tel')}}" value="{{$about->tel}}">

        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="text" name="email" class="form-control" placeholder="email" value="{{$about->email}}">
            @error ('email')
            <small class="form-text text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group">
            <label>{{__('about.address')}}</label>
            <input type="text" name="address" class="form-control" placeholder="{{__('about.address')}}" value="{{$about->address}}">
            @error ('address')
            <small class="form-text text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group">
            <label>LinkedIN</label>
            <input type="text" name="linkedin" class="form-control" placeholder="linkedin" value="{{$about->linkedin}}">
            @error ('linkedin')
            <small class="form-text text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group">
            <label>GitHub</label>
            <input type="text" name="github" class="form-control" placeholder="github" value="{{$about->github}}">
            @error ('github')
            <small class="form-text text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group">
            <label>Twitter</label>
            <input type="text" name="twitter" class="form-control" placeholder="twitter" value="{{$about->twitter}}">
            @error ('twitter')
            <small class="form-text text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group">
            <label>Facebook</label>
            <input type="text" name="facebook" class="form-control" placeholder="facebook" value="{{$about->facebook}}">
            @error ('facebook')
            <small class="form-text text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group">
            <label>Stackoverflow</label>
            <input type="text" name="stackoverflow" class="form-control" placeholder="stackoverflow" value="{{$about->stackoverflow}}">
            @error ('stackoverflow')
            <small class="form-text text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group">
            <label>{{__('about.color')}}</label>
            <input type="color" name="color" class="form-control" value="{{$about->color}}">
        </div>
        <div class="form-group">
            <label>{{__('about.description')}}</label>
            <input type="text" name="description" class="form-control" value="{{$about->description}}">
        </div>

        <button type="submit" class="btn btn-primary">Save</button>
        @csrf
        @method('PUT')
    </form>

@endsection

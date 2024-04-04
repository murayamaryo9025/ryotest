f@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
    <div class="content">
        <p class="content__title">{{Auth::user()->name }}さんお疲れ様です</p>
        <div class="content__inner">
           <div class="content__inner-item-upper">
            <form action="/" method="post" class="content__inner-items">
            @csrf 
               <input tipe="text" name="user_id" value="{{Auth::user()->id }}>
               <button type="submit" name="work_start_time" class="content__inner-item"> 勤務開始</button>
            </form>
            <form action="/" method="post" class="content__inner-items">
            @method('PATCH')
            @csrf 
               <input type="text" name="user_id" value="{{Auth::user()->id }}>
               <button type="submit" name="work_start_time" class="content__inner-item"> 勤務終了</button>
             </form>
           </div>
         </div>
      </div>
    </div>
@endsection
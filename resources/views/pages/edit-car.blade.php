@extends('welcome')

@section('content')

  <form method="post" action="{{ route('cars.update' , $car->id) }}" >
    @csrf
    @method('PUT')

    <div class="formRow">
      <label for="brand">BRAND</label>
      <input type="text" name="brand" value="{{$car->brand}}">
    </div>

    <div class="formRow">
      <label for="model">MODEL</label>
      <input type="text" name="model" value="{{$car->model}}">
    </div>

    <div class="formRow">
      <label for="price_in_euro">PRICE</label>
      <input type="text" name="price_in_euro" value="{{$car->price_in_euro}}">
    </div>

    <div class="formRow">
      <label for="power">POWER</label>
      <input type="text" name="power" value="{{$car->power}}">
    </div>

    <div class="formRow">
      <label for="hp">HP</label>
      <input type="text" name="hp" value="{{$car->hp}}">
    </div>

    <button type="submit" name="button">SAVE EDIT CAR</button>

  </form>

@stop

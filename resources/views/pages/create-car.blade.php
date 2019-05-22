@extends('welcome')

@section('content')

  <form method="post" action="{{ route('cars.store') }}" >
    @csrf

    <div class="formRow">
      <label for="brand">BRAND</label>
      <input type="text" name="brand">
    </div>

    <div class="formRow">
      <label for="model">MODEL</label>
      <input type="text" name="model">
    </div>

    <div class="formRow">
      <label for="price_in_euro">PRICE</label>
      <input type="text" name="price_in_euro">
    </div>

    <div class="formRow">
      <label for="power">POWER</label>
      <input type="text" name="power">
    </div>

    <div class="formRow">
      <label for="hp">HP</label>
      <input type="text" name="hp">
    </div>

    <button class="submit-btn" type="submit" name="button">SAVE NEW CAR</button>

  </form>

@stop

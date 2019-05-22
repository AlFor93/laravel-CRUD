@extends('welcome')

@section('content')

  <table>
    <tr>
      <td><b>ID</b></td>
      <td><b>BRAND</b></td>
      <td><b>MODEL</b></td>
      <td><b>PRICE (€)</b></td>
      <td><b>POWER</b></td>
      <td><b>HP</b></td>
      <td></td>
      <td></td>
    </tr>
    @foreach($cars as $car)
    <tr>
      <td>{{ $car -> id }}</td>
      <td>{{ $car -> brand }}</td>
      <td>{{ $car -> model }}</td>
      <td>{{ $car -> price_in_euro }}</td>
      <td>{{ $car -> power }}</td>
      <td>{{ $car -> hp }}</td>
      <td><a href="{{ route('cars.edit' , $car->id) }}"><i class="far fa-edit"></i></a></td>
      <td>
        <form method="post" action="{{ route('cars.destroy' , $car->id) }}" >
          @csrf
          @method('DELETE')
          <button type="submit" class="trash-btn" name="button"><a href="#"><i class="far fa-trash-alt"></i></a></button>

        </form>
      </td>
    </tr>
    @endforeach
  </table>
  <div class="button-cont">

    <button type="button"> <a href="{{ route('cars.create') }}">Add New Car</a></button>
  </div>

@stop

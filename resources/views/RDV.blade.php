
@extends('bureauPortail')

@section('content')
    <div class="container">

        <div class="mb-0">
            <label class="form-label">Date de disponibilité pour un RDV</label>
            <input class="form-control form-control-solid" placeholder="Pick date rage" id="kt_daterangepicker_1"/>
        </div>
<br>
<br>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Description </label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>

    </div>
@endsection

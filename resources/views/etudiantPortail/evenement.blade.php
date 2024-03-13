@extends('etudiantPortail.etudiantPortail')

@section('content')
    <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSdMwAdLXqfpBr5yYcQSRIFxq7VXDYaH8U-NtWbr_k4h79o1Og/viewform?embedded=true" width="1140" height="979" frameborder="0" marginheight="0" marginwidth="0">Chargement…</iframe>
@endsection

@section('custom-css')
  <link rel="stylesheet" href="{{ asset('css/evenement.css') }}">
@endsection

@section('custom-js')
  <script src="{{ asset('js/evenement.js') }}"></script>
@endsection

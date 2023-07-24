@extends('layouts.admin')
@section('content')
{{ $membership['id'] }}
{{ $membership['company_name'] }}
{{ $membership['company_bin'] }}
{{ $membership['country_incorporation'] }}
{{ $membership['address'] }}
{{ $membership['city'] }}
{{ $membership['postcode'] }}
{{ $membership['country'] }}
{{ $membership['company_phone'] }}
{{ $membership['description'] }}
{{ $membership['employes_count'] }}
{{ $membership['name'] }}
{{ $membership['job_title'] }}
{{ $membership['phone'] }}
{{ $membership['email'] }}
{{ $membership['date'] }}

@endsection

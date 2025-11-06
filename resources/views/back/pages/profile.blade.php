@extends('back.layouts.pages-layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle : "Profile")
@section('content')
<div class="page-header">
    <div class="row align-items-center">
        <div class="col-auto"><span class="avatar avatar-md" style="background-image: "></span></div>
        <div class="col-md-6">
            <h2 class="page-title">Pawel Kuna</h2>
            <div class="page-subtitle">
                <div class="row">
                    <div class="col-auto"><a href="" class="text-reset">UI Designer at Tabler</a></div>
                    <div class="col-auto"><a href="" class="text-reset">194 friends</a></div>
                    <div class="col-auto text-success">Verified</div>
                </div>
            </div>
        </div>
        <div class="col-auto  d-md-flex"><a href="
            #" class="btn btn-primary">Change picture</a></div>
    </div>
</div>
@endsection

@extends('dashboard.admin.admin_master')
@section('admin')
    @php
        $currentPath = url()->current();
    @endphp

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12 admin-start-title">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0" style="font-size: 40px;color:#01030299">KRIASHIK BETU ======> SON OF SONU</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->
            <div class="row">
                <div class="col-xl-12">
                    @if ($currentPath == url('admin-dashboard'))
                        <div id="docs-card"
                            class=" image-container flex flex-col items-start gap-6 overflow-hidden rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] md:row-span-3 lg:p-10 lg:pb-10 dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20]">
                            <img src="{{ asset('betu_photo.jpg') }}" alt="Description of Image">
                        </div>
                    @endif
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
    @endsection

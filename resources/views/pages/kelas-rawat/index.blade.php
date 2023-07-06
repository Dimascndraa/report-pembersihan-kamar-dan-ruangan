@extends('inc.layout')
@section('title','Kelas Rawat')
@section('content')
<main id="js-page-content" role="main" class="page-content">
    @include('inc.breadcrumb',['bcrumb' => 'bc_level_dua','bc_1'=>'Datatables'])
    <div class="subheader">
        @component('inc.subheader',['subheader_title'=>'st_type_5'])
        @slot('sh_icon') table @endslot
        @slot('sh_titile_main') DataTables: <span class='fw-300'>Kelas Rawat</span> <sup
            class='badge badge-primary fw-500'>ADDON</sup> @endslot
        @slot('sh_descipt') Create headache free searching, sorting and pagination tables without any complex
        configuration @endslot
        @endcomponent
    </div>
    <div class="row mb-5">
        <div class="col-xl-12">
            <button type="button" class="btn btn-primary waves-effect waves-themed" data-toggle="modal"
                data-target="#default-example-modal-lg">
                <span class="fal fa-plus-circle mr-1"></span>
                Tambah Kelas Rawat
            </button>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-12">
            <div id="panel-1" class="panel">
                <div class="panel-hdr">
                    <h2>
                        Rooms <span class="fw-300"><i>Table</i></span>
                    </h2>
                    <div class="panel-toolbar">
                        <button class="btn btn-primary btn-sm" data-toggle="dropdown">Table Style</button>
                        <div class="dropdown-menu dropdown-menu-animated dropdown-menu-right position-absolute pos-top">
                            <button class="dropdown-item active" data-action="toggle" data-class="table-bordered"
                                data-target="#dt-basic-example"> Bordered Table </button>
                            <button class="dropdown-item" data-action="toggle" data-class="table-sm"
                                data-target="#dt-basic-example"> Smaller Table </button>
                            <button class="dropdown-item" data-action="toggle" data-class="table-dark"
                                data-target="#dt-basic-example"> Table Dark </button>
                            <button class="dropdown-item active" data-action="toggle" data-class="table-hover"
                                data-target="#dt-basic-example"> Table Hover </button>
                            <button class="dropdown-item active" data-action="toggle" data-class="table-stripe"
                                data-target="#dt-basic-example"> Table Stripped </button>
                            <div class="dropdown-divider m-0"></div>
                            <div class="dropdown-multilevel dropdown-multilevel-left">
                                <div class="dropdown-item">
                                    tbody color
                                </div>
                                <div class="dropdown-menu no-transition-delay">
                                    <div class="js-tbody-colors dropdown-multilevel dropdown-multilevel-left d-flex flex-wrap"
                                        style="width: 15.9rem; padding: 0.5rem">
                                        <a href="javascript:void(0);" data-bg="bg-primary-100"
                                            class="btn d-inline-block bg-primary-100 width-2 height-2 p-0 rounded-0"
                                            style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-primary-200"
                                            class="btn d-inline-block bg-primary-200 width-2 height-2 p-0 rounded-0"
                                            style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-primary-300"
                                            class="btn d-inline-block bg-primary-300 width-2 height-2 p-0 rounded-0"
                                            style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-primary-400"
                                            class="btn d-inline-block bg-primary-400 width-2 height-2 p-0 rounded-0"
                                            style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-primary-500"
                                            class="btn d-inline-block bg-primary-500 width-2 height-2 p-0 rounded-0"
                                            style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-primary-600"
                                            class="btn d-inline-block bg-primary-600 width-2 height-2 p-0 rounded-0"
                                            style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-primary-700"
                                            class="btn d-inline-block bg-primary-700 width-2 height-2 p-0 rounded-0"
                                            style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-primary-800"
                                            class="btn d-inline-block bg-primary-800 width-2 height-2 p-0 rounded-0"
                                            style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-primary-900"
                                            class="btn d-inline-block bg-primary-900 width-2 height-2 p-0 rounded-0"
                                            style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-success-100"
                                            class="btn d-inline-block bg-success-100 width-2 height-2 p-0 rounded-0"
                                            style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-success-200"
                                            class="btn d-inline-block bg-success-200 width-2 height-2 p-0 rounded-0"
                                            style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-success-300"
                                            class="btn d-inline-block bg-success-300 width-2 height-2 p-0 rounded-0"
                                            style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-success-400"
                                            class="btn d-inline-block bg-success-400 width-2 height-2 p-0 rounded-0"
                                            style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-success-500"
                                            class="btn d-inline-block bg-success-500 width-2 height-2 p-0 rounded-0"
                                            style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-success-600"
                                            class="btn d-inline-block bg-success-600 width-2 height-2 p-0 rounded-0"
                                            style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-success-700"
                                            class="btn d-inline-block bg-success-700 width-2 height-2 p-0 rounded-0"
                                            style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-success-800"
                                            class="btn d-inline-block bg-success-800 width-2 height-2 p-0 rounded-0"
                                            style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-success-900"
                                            class="btn d-inline-block bg-success-900 width-2 height-2 p-0 rounded-0"
                                            style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-info-100"
                                            class="btn d-inline-block bg-info-100 width-2 height-2 p-0 rounded-0"
                                            style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-info-200"
                                            class="btn d-inline-block bg-info-200 width-2 height-2 p-0 rounded-0"
                                            style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-info-300"
                                            class="btn d-inline-block bg-info-300 width-2 height-2 p-0 rounded-0"
                                            style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-info-400"
                                            class="btn d-inline-block bg-info-400 width-2 height-2 p-0 rounded-0"
                                            style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-info-500"
                                            class="btn d-inline-block bg-info-500 width-2 height-2 p-0 rounded-0"
                                            style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-info-600"
                                            class="btn d-inline-block bg-info-600 width-2 height-2 p-0 rounded-0"
                                            style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-info-700"
                                            class="btn d-inline-block bg-info-700 width-2 height-2 p-0 rounded-0"
                                            style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-info-800"
                                            class="btn d-inline-block bg-info-800 width-2 height-2 p-0 rounded-0"
                                            style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-info-900"
                                            class="btn d-inline-block bg-info-900 width-2 height-2 p-0 rounded-0"
                                            style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-danger-100"
                                            class="btn d-inline-block bg-danger-100 width-2 height-2 p-0 rounded-0"
                                            style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-danger-200"
                                            class="btn d-inline-block bg-danger-200 width-2 height-2 p-0 rounded-0"
                                            style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-danger-300"
                                            class="btn d-inline-block bg-danger-300 width-2 height-2 p-0 rounded-0"
                                            style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-danger-400"
                                            class="btn d-inline-block bg-danger-400 width-2 height-2 p-0 rounded-0"
                                            style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-danger-500"
                                            class="btn d-inline-block bg-danger-500 width-2 height-2 p-0 rounded-0"
                                            style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-danger-600"
                                            class="btn d-inline-block bg-danger-600 width-2 height-2 p-0 rounded-0"
                                            style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-danger-700"
                                            class="btn d-inline-block bg-danger-700 width-2 height-2 p-0 rounded-0"
                                            style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-danger-800"
                                            class="btn d-inline-block bg-danger-800 width-2 height-2 p-0 rounded-0"
                                            style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-danger-900"
                                            class="btn d-inline-block bg-danger-900 width-2 height-2 p-0 rounded-0"
                                            style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-warning-100"
                                            class="btn d-inline-block bg-warning-100 width-2 height-2 p-0 rounded-0"
                                            style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-warning-200"
                                            class="btn d-inline-block bg-warning-200 width-2 height-2 p-0 rounded-0"
                                            style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-warning-300"
                                            class="btn d-inline-block bg-warning-300 width-2 height-2 p-0 rounded-0"
                                            style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-warning-400"
                                            class="btn d-inline-block bg-warning-400 width-2 height-2 p-0 rounded-0"
                                            style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-warning-500"
                                            class="btn d-inline-block bg-warning-500 width-2 height-2 p-0 rounded-0"
                                            style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-warning-600"
                                            class="btn d-inline-block bg-warning-600 width-2 height-2 p-0 rounded-0"
                                            style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-warning-700"
                                            class="btn d-inline-block bg-warning-700 width-2 height-2 p-0 rounded-0"
                                            style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-warning-800"
                                            class="btn d-inline-block bg-warning-800 width-2 height-2 p-0 rounded-0"
                                            style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-warning-900"
                                            class="btn d-inline-block bg-warning-900 width-2 height-2 p-0 rounded-0"
                                            style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-fusion-100"
                                            class="btn d-inline-block bg-fusion-100 width-2 height-2 p-0 rounded-0"
                                            style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-fusion-200"
                                            class="btn d-inline-block bg-fusion-200 width-2 height-2 p-0 rounded-0"
                                            style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-fusion-300"
                                            class="btn d-inline-block bg-fusion-300 width-2 height-2 p-0 rounded-0"
                                            style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-fusion-400"
                                            class="btn d-inline-block bg-fusion-400 width-2 height-2 p-0 rounded-0"
                                            style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-fusion-500"
                                            class="btn d-inline-block bg-fusion-500 width-2 height-2 p-0 rounded-0"
                                            style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-fusion-600"
                                            class="btn d-inline-block bg-fusion-600 width-2 height-2 p-0 rounded-0"
                                            style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-fusion-700"
                                            class="btn d-inline-block bg-fusion-700 width-2 height-2 p-0 rounded-0"
                                            style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-fusion-800"
                                            class="btn d-inline-block bg-fusion-800 width-2 height-2 p-0 rounded-0"
                                            style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-fusion-900"
                                            class="btn d-inline-block bg-fusion-900 width-2 height-2 p-0 rounded-0"
                                            style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg=""
                                            class="btn d-inline-block bg-white border width-2 height-2 p-0 rounded-0"
                                            style="margin:1px"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="dropdown-multilevel dropdown-multilevel-left">
                                <div class="dropdown-item">
                                    thead color
                                </div>
                                <div class="dropdown-menu no-transition-delay">
                                    <div class="js-thead-colors dropdown-multilevel dropdown-multilevel-left d-flex flex-wrap"
                                        style="width: 15.9rem; padding: 0.5rem">
                                        <a href="javascript:void(0);" data-bg="bg-primary-100"
                                            class="btn d-inline-block bg-primary-100 width-2 height-2 p-0 rounded-0"
                                            style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-primary-200"
                                            class="btn d-inline-block bg-primary-200 width-2 height-2 p-0 rounded-0"
                                            style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-primary-300"
                                            class="btn d-inline-block bg-primary-300 width-2 height-2 p-0 rounded-0"
                                            style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-primary-400"
                                            class="btn d-inline-block bg-primary-400 width-2 height-2 p-0 rounded-0"
                                            style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-primary-500"
                                            class="btn d-inline-block bg-primary-500 width-2 height-2 p-0 rounded-0"
                                            style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-primary-600"
                                            class="btn d-inline-block bg-primary-600 width-2 height-2 p-0 rounded-0"
                                            style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-primary-700"
                                            class="btn d-inline-block bg-primary-700 width-2 height-2 p-0 rounded-0"
                                            style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-primary-800"
                                            class="btn d-inline-block bg-primary-800 width-2 height-2 p-0 rounded-0"
                                            style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-primary-900"
                                            class="btn d-inline-block bg-primary-900 width-2 height-2 p-0 rounded-0"
                                            style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-success-100"
                                            class="btn d-inline-block bg-success-100 width-2 height-2 p-0 rounded-0"
                                            style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-success-200"
                                            class="btn d-inline-block bg-success-200 width-2 height-2 p-0 rounded-0"
                                            style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-success-300"
                                            class="btn d-inline-block bg-success-300 width-2 height-2 p-0 rounded-0"
                                            style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-success-400"
                                            class="btn d-inline-block bg-success-400 width-2 height-2 p-0 rounded-0"
                                            style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-success-500"
                                            class="btn d-inline-block bg-success-500 width-2 height-2 p-0 rounded-0"
                                            style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-success-600"
                                            class="btn d-inline-block bg-success-600 width-2 height-2 p-0 rounded-0"
                                            style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-success-700"
                                            class="btn d-inline-block bg-success-700 width-2 height-2 p-0 rounded-0"
                                            style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-success-800"
                                            class="btn d-inline-block bg-success-800 width-2 height-2 p-0 rounded-0"
                                            style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-success-900"
                                            class="btn d-inline-block bg-success-900 width-2 height-2 p-0 rounded-0"
                                            style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-info-100"
                                            class="btn d-inline-block bg-info-100 width-2 height-2 p-0 rounded-0"
                                            style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-info-200"
                                            class="btn d-inline-block bg-info-200 width-2 height-2 p-0 rounded-0"
                                            style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-info-300"
                                            class="btn d-inline-block bg-info-300 width-2 height-2 p-0 rounded-0"
                                            style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-info-400"
                                            class="btn d-inline-block bg-info-400 width-2 height-2 p-0 rounded-0"
                                            style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-info-500"
                                            class="btn d-inline-block bg-info-500 width-2 height-2 p-0 rounded-0"
                                            style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-info-600"
                                            class="btn d-inline-block bg-info-600 width-2 height-2 p-0 rounded-0"
                                            style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-info-700"
                                            class="btn d-inline-block bg-info-700 width-2 height-2 p-0 rounded-0"
                                            style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-info-800"
                                            class="btn d-inline-block bg-info-800 width-2 height-2 p-0 rounded-0"
                                            style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-info-900"
                                            class="btn d-inline-block bg-info-900 width-2 height-2 p-0 rounded-0"
                                            style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-danger-100"
                                            class="btn d-inline-block bg-danger-100 width-2 height-2 p-0 rounded-0"
                                            style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-danger-200"
                                            class="btn d-inline-block bg-danger-200 width-2 height-2 p-0 rounded-0"
                                            style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-danger-300"
                                            class="btn d-inline-block bg-danger-300 width-2 height-2 p-0 rounded-0"
                                            style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-danger-400"
                                            class="btn d-inline-block bg-danger-400 width-2 height-2 p-0 rounded-0"
                                            style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-danger-500"
                                            class="btn d-inline-block bg-danger-500 width-2 height-2 p-0 rounded-0"
                                            style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-danger-600"
                                            class="btn d-inline-block bg-danger-600 width-2 height-2 p-0 rounded-0"
                                            style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-danger-700"
                                            class="btn d-inline-block bg-danger-700 width-2 height-2 p-0 rounded-0"
                                            style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-danger-800"
                                            class="btn d-inline-block bg-danger-800 width-2 height-2 p-0 rounded-0"
                                            style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-danger-900"
                                            class="btn d-inline-block bg-danger-900 width-2 height-2 p-0 rounded-0"
                                            style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-warning-100"
                                            class="btn d-inline-block bg-warning-100 width-2 height-2 p-0 rounded-0"
                                            style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-warning-200"
                                            class="btn d-inline-block bg-warning-200 width-2 height-2 p-0 rounded-0"
                                            style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-warning-300"
                                            class="btn d-inline-block bg-warning-300 width-2 height-2 p-0 rounded-0"
                                            style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-warning-400"
                                            class="btn d-inline-block bg-warning-400 width-2 height-2 p-0 rounded-0"
                                            style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-warning-500"
                                            class="btn d-inline-block bg-warning-500 width-2 height-2 p-0 rounded-0"
                                            style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-warning-600"
                                            class="btn d-inline-block bg-warning-600 width-2 height-2 p-0 rounded-0"
                                            style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-warning-700"
                                            class="btn d-inline-block bg-warning-700 width-2 height-2 p-0 rounded-0"
                                            style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-warning-800"
                                            class="btn d-inline-block bg-warning-800 width-2 height-2 p-0 rounded-0"
                                            style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-warning-900"
                                            class="btn d-inline-block bg-warning-900 width-2 height-2 p-0 rounded-0"
                                            style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-fusion-100"
                                            class="btn d-inline-block bg-fusion-100 width-2 height-2 p-0 rounded-0"
                                            style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-fusion-200"
                                            class="btn d-inline-block bg-fusion-200 width-2 height-2 p-0 rounded-0"
                                            style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-fusion-300"
                                            class="btn d-inline-block bg-fusion-300 width-2 height-2 p-0 rounded-0"
                                            style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-fusion-400"
                                            class="btn d-inline-block bg-fusion-400 width-2 height-2 p-0 rounded-0"
                                            style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-fusion-500"
                                            class="btn d-inline-block bg-fusion-500 width-2 height-2 p-0 rounded-0"
                                            style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-fusion-600"
                                            class="btn d-inline-block bg-fusion-600 width-2 height-2 p-0 rounded-0"
                                            style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-fusion-700"
                                            class="btn d-inline-block bg-fusion-700 width-2 height-2 p-0 rounded-0"
                                            style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-fusion-800"
                                            class="btn d-inline-block bg-fusion-800 width-2 height-2 p-0 rounded-0"
                                            style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-fusion-900"
                                            class="btn d-inline-block bg-fusion-900 width-2 height-2 p-0 rounded-0"
                                            style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg=""
                                            class="btn d-inline-block bg-white border width-2 height-2 p-0 rounded-0"
                                            style="margin:1px"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-container show">
                    <div class="panel-content">
                        <!-- datatable start -->
                        <table id="dt-basic-example" class="table table-bordered table-hover table-striped w-100">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Kelas Rawat</th>
                                    <th>Jumlah Ruang</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($kelas_rawat as $kelas)
                                <tr>
                                    <td style="white-space: normal">{{ $loop->iteration }}</td>
                                    <td style="white-space: normal"><a href="/ruangan/{{ $kelas->id }}" class="">{{
                                            $kelas->name }}</a></td>
                                    <td style="white-space: normal">{{
                                        count($kelas->ruangan) }}</td>
                                    <td style="white-space: normal">
                                        <a href="/ruangan/{{ $kelas->id }}" style="transform: scale(1.1)"
                                            class="badge mx-1 badge-warning p-2 border-0 text-white"><i
                                                class='bx bx-door-open' style="transform: scale(1.5)"
                                                title="Kelola Ruangan"></i></a>
                                        <button type="button" class="badge mx-1 badge-primary p-2 border-0 text-white"
                                            data-toggle="modal" data-target="#ubah-kelas-rawat{{ $kelas->id }}"
                                            title="Ubah">
                                            <span class="fal fa-pencil mr-1"></span>
                                        </button>
                                        <form action="/kelas-rawat/{{ $kelas->id }}" method="POST" class="d-inline">
                                            @method('delete')
                                            @csrf
                                            <button title="Hapus Kelas Rawat"
                                                class="badge mx-1 badge-danger p-2 border-0"
                                                onclick="return confirm('Anda takin?')">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                <div class="modal fade" id="ubah-kelas-rawat{{ $kelas->id }}" tabindex="-1"
                                    role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <form autocomplete="off" novalidate action="/kelas-rawat/{{ $kelas->id }}"
                                                method="post">
                                                @method('put')
                                                @csrf
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Ubah Kelas Rawat</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true"><i class="fal fa-times"></i></span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                        <label for="name">Nama Kelas Rawat</label>
                                                        <input type="text" value="{{ old('name', $kelas->name) }}"
                                                            class="form-control @error('name') is-invalid @enderror"
                                                            id="name" name="name" placeholder="Nama Kelas Rawat">
                                                        @error('name')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">
                                                        <span class="fal fa-pencil mr-1"></span>
                                                        Ubah
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Kelas Rawat</th>
                                    <th>Jumlah Ruang</th>
                                    <th>Aksi</th>
                                </tr>
                            </tfoot>
                        </table>
                        <!-- datatable end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- Modal Large -->
<div class="modal fade" id="default-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <form autocomplete="off" novalidate action="/kelas-rawat" method="post">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Kelas Rawat</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fal fa-times"></i></span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="name">Nama Kelas Rawat</label>
                        <input type="text" value="{{ old('name') }}"
                            class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                            placeholder="Nama Kelas Rawat">
                        @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">
                        <span class="fal fa-plus-circle mr-1"></span>
                        Tambah
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@section('plugin')
<script src="/js/datagrid/datatables/datatables.bundle.js"></script>
<script src="/js/datatable/jszip.min.js"></script>

<script>
    /* demo scripts for change table color */
        /* change background */
        $(document).ready(function() {
            $('#dt-basic-example').dataTable({
                responsive: true,
                dom: 'Bfrtip',
                buttons: [{
                        extend: 'print',
                        text: 'Print',
                        className: 'float-right btn btn-primary',
                        exportOptions: {
                            columns: ':not(.no-export)'
                        },
                    },
                    {
                        extend: 'excel',
                        text: 'Download as Excel',
                        className: 'float-right btn btn-success',
                        exportOptions: {
                            columns: ':not(.no-export)'
                        }
                    }
                ]
            });

            $('.js-thead-colors a').on('click', function() {
                var theadColor = $(this).attr("data-bg");
                console.log(theadColor);
                $('#dt-basic-example thead').removeClassPrefix('bg-').addClass(theadColor);
            });

            $('.js-tbody-colors a').on('click', function() {
                var theadColor = $(this).attr("data-bg");
                console.log(theadColor);
                $('#dt-basic-example').removeClassPrefix('bg-').addClass(theadColor);
            });

        });

        function previewImage() {
            const image = document.querySelector('#foto');
            const imgPreview = document.querySelector('.image-preview')

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0])

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }

        function previewImage2() {
            const image = document.querySelector('#foto2');
            const imgPreview = document.querySelector('.image-preview2')

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0])

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }
</script>
@endsection
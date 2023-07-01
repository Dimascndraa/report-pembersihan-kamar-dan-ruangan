@extends('inc.layout')
@section('title', 'Barang')
@section('content')
<main id="js-page-content" role="main" class="page-content">
    @include('inc.breadcrumb', ['bcrumb' => 'bc_level_dua', 'bc_1' => 'Datatables'])
    <div class="subheader">
        @component('inc.subheader', ['subheader_title' => 'st_type_5'])
        @slot('sh_icon')
        table
        @endslot
        @slot('sh_titile_main')
        DataTables: <span class='fw-300'>Barang</span> <sup class='badge badge-primary fw-500'>ADDON</sup>
        @endslot
        @slot('sh_descipt')
        Create headache free searching, sorting and pagination tables without any complex
        configuration
        @endslot
        @endcomponent
    </div>
    <div class="row mb-5">
        <div class="col-xl-12">
            <button type="button" class="btn btn-primary waves-effect waves-themed" data-toggle="modal"
                data-target="#default-example-modal-lg">
                <span class="fal fa-plus-circle mr-1"></span>
                Tambah Barang
            </button>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-12">
            <div id="panel-1" class="panel">
                <div class="panel-hdr">
                    <h2>
                        Table <span class="fw-300"><i>Barang</i></span>
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
                                    {{-- <th>Foto</th> --}}
                                    <th>Nama Barang</th>
                                    <th>Kategori Barang</th>
                                    <th>Merk</th>
                                    <th>Kondisi</th>
                                    <th>Tahun Pengadaan</th>
                                    <th>Ruangan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($barangs as $barang)

                                <div class="modal fade" id="ruangan{{ $barang->id }}" tabindex="-1" role="dialog"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <form autocomplete="off" novalidate action="/barang/{{ $barang->id }}/ruang"
                                                method="post" enctype="multipart/form-data">
                                                @method('put')
                                                @csrf
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Pindahkan @if($barang->custom_name === null)
                                                        {{ $barang->template_barang->name }} @else {{
                                                        $barang->custom_name }} @endif ke Ruang</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true"><i class="fal fa-times"></i></span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                        <label for="room_id">Nama Ruang</label>
                                                        <select
                                                            class="form-control w-100 @error('room_id') is-invalid @enderror"
                                                            id="single-default" name="room_id">
                                                            <optgroup label="Ruangan">
                                                                @foreach ($rooms as $room)
                                                                @if (old("room_id") == $room->id ||
                                                                $room->room_id == $room->id)
                                                                <option value="{{ $room->id }}" selected>{{
                                                                    $room->name }}</option>
                                                                @else
                                                                <option value="{{ $room->id }}">{{ $room->name
                                                                    }}
                                                                </option>
                                                                @endif
                                                                @endforeach
                                                                @error('room_id')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                                @enderror
                                                            </optgroup>
                                                        </select>
                                                        @error('room_id')
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

                                <tr>
                                    {{-- <td style="white-space: normal">{{ $barang->template_barang->foto }}</td> --}}
                                    @if ($barang->custom_name === null)
                                    <td style="white-space: normal">{{ $barang->template_barang->name }}</td>
                                    @else
                                    <td style="white-space: normal">{{ $barang->custom_name }}</td>
                                    @endif
                                    <td style="white-space: normal">{{
                                        $barang->template_barang->category->name }}</td>
                                    <td style="white-space: normal">{{ $barang->template_barang->merk }}</td>
                                    <td style="white-space: normal">{{ $barang->condition }}</td>
                                    <td style="white-space: normal">{{ $barang->bidding_year }}</td>
                                    @if ($barang->room === null)
                                    <td style="white-space: normal">*Barang belum di Ruangan</td>
                                    @else
                                    <td style="white-space: normal">{{ $barang->room->name }}</td>
                                    @endif
                                    <td style="white-space: normal">
                                        <button type="button" class="badge mx-1 badge-primary p-2 border-0 text-white"
                                            data-toggle="modal" data-target="#ubah-barang{{ $barang->id }}"
                                            title="Ubah">
                                            <span class="fal fa-pencil"></span>
                                        </button>
                                        <form action="/barang/{{ $barang->id }}" method="POST" class="d-inline">
                                            @method('delete')
                                            @csrf
                                            <button title="Hapus Barang" class="badge mx-1 badge-danger p-2 border-0"
                                                onclick="return confirm('Anda takin?')">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>
                                        @if ($barang->room === null)
                                        <button type="button" class="badge mx-1 badge-success p-2 border-0 text-white"
                                            data-toggle="modal" data-target="#ruangan{{ $barang->id }}"
                                            title="ke Ruangan">
                                            <span class="fal fa-arrow-circle-right"></span>
                                        </button>
                                        @endif
                                    </td>
                                </tr>

                                <div class="modal fade" id="ubah-barang{{ $barang->id }}" tabindex="-1" role="dialog"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <form autocomplete="off" novalidate action="/barang/{{ $barang->id }}"
                                                method="post" enctype="multipart/form-data">
                                                @method('put')
                                                @csrf
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Ubah Barang</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true"><i class="fal fa-times"></i></span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                        <label for="custom_name">Nama Barang
                                                            <sup>(Opsional)</sup></label>
                                                        <input type="text"
                                                            value="{{ old('custom_name', $barang->custom_name) }}"
                                                            class="form-control @error('custom_name') is-invalid @enderror"
                                                            id="custom_name" name="custom_name"
                                                            placeholder="Nama Barang">
                                                        @error('custom_name')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="template_barang_id">Barang</label>
                                                        <select
                                                            class="form-control w-100 @error('template_barang_id') is-invalid @enderror"
                                                            id="single-default" name="template_barang_id">
                                                            <optgroup label="Kategori Barang">
                                                                @foreach ($template as $barang)
                                                                @if (old("template_barang_id") == $barang->id ||
                                                                $barang->template_barang_id == $barang->id)
                                                                <option value="{{ $barang->id }}" selected>{{
                                                                    $barang->name }}</option>
                                                                @else
                                                                <option value="{{ $barang->id }}">{{ $barang->name
                                                                    }}
                                                                </option>
                                                                @endif
                                                                @endforeach
                                                                @error('template_barang_id')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                                @enderror
                                                            </optgroup>
                                                        </select>
                                                        @error('template_barang_id')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                        @enderror
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="condition">Kondisi Barang</label>
                                                        <select
                                                            class="form-control w-100 @error('condition') is-invalid @enderror"
                                                            id="single-default" name="condition">
                                                            <optgroup label="Kondisi Barang">
                                                                <option value="Baik" {{ $barang->condition === "Baik" ?
                                                                    "selected" : '' }}>Baik</option>
                                                                <option value="Rusak" {{ $barang->condition === "Rusak"
                                                                    ?
                                                                    "selected" : '' }}>Rusak</option>
                                                            </optgroup>
                                                        </select>
                                                        @error('condition')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="form-label" for="single-default">
                                                            Tahun Pengadaan
                                                        </label>
                                                        <select
                                                            class="form-control w-100 @error('bidding_year') is-invalid @enderror"
                                                            id="single-default" name="bidding_year">
                                                            <optgroup label="Tahun Pengadaan">
                                                                <option value="2010" {{ $barang->bidding_year == "2010"
                                                                    ? 'selected' : '' }}>2010</option>
                                                                <option value="2011" {{ $barang->bidding_year == "2011"
                                                                    ? 'selected' : '' }}>2011</option>
                                                                <option value="2012" {{ $barang->bidding_year == "2012"
                                                                    ? 'selected' : '' }}>2012</option>
                                                                <option value="2013" {{ $barang->bidding_year == "2013"
                                                                    ? 'selected' : '' }}>2013</option>
                                                                <option value="2014" {{ $barang->bidding_year == "2014"
                                                                    ? 'selected' : '' }}>2014</option>
                                                                <option value="2015" {{ $barang->bidding_year == "2015"
                                                                    ? 'selected' : '' }}>2015</option>
                                                                <option value="2016" {{ $barang->bidding_year == "2016"
                                                                    ? 'selected' : '' }}>2016</option>
                                                                <option value="2017" {{ $barang->bidding_year == "2017"
                                                                    ? 'selected' : '' }}>2017</option>
                                                                <option value="2018" {{ $barang->bidding_year == "2018"
                                                                    ? 'selected' : '' }}>2018</option>
                                                                <option value="2019" {{ $barang->bidding_year == "2019"
                                                                    ? 'selected' : '' }}>2019</option>
                                                                <option value="2020" {{ $barang->bidding_year == "2020"
                                                                    ? 'selected' : '' }}>2020</option>
                                                                <option value="2021" {{ $barang->bidding_year == "2021"
                                                                    ? 'selected' : '' }}>2021</option>
                                                                <option value="2022" {{ $barang->bidding_year == "2022"
                                                                    ? 'selected' : '' }}>2022</option>
                                                                <option value="2023" {{ $barang->bidding_year == "2023"
                                                                    ? 'selected' : '' }}>2023</option>
                                                                <option value="2024" {{ $barang->bidding_year == "2024"
                                                                    ? 'selected' : '' }}>2024</option>
                                                                <option value="2025" {{ $barang->bidding_year == "2025"
                                                                    ? 'selected' : '' }}>2025</option>
                                                            </optgroup>
                                                        </select>
                                                        @error('bidding_year')
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
                                    {{-- <th>Foto</th> --}}
                                    <th>Nama Barang</th>
                                    <th>Kategori Barang</th>
                                    <th>Merk</th>
                                    <th>Kondisi</th>
                                    <th>Tahun Pengadaan</th>
                                    <th>Ruangan</th>
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
            <form autocomplete="off" novalidate action="/barang" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Barang</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fal fa-times"></i></span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="custom_name">Nama Barang <sup>(Opsional)</sup></label>
                        <input type="text" value="{{ old('custom_name') }}"
                            class="form-control @error('custom_name') is-invalid @enderror" id="custom_name"
                            name="custom_name" placeholder="Nama Barang">
                        @error('custom_name')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="single-default">
                            Barang
                        </label>
                        <select class="form-control w-100 @error('template_barang_id') is-invalid @enderror"
                            id="single-default" name="template_barang_id">
                            <optgroup label="Kategori Barang">
                                @foreach ($template as $barang)
                                <option value="{{ $barang->id }}">{{ $barang->name }}</option>
                                @endforeach
                            </optgroup>
                        </select>
                        @error('template_barang_id')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="single-default">
                            Kondisi Barang
                        </label>
                        <select class="form-control w-100 @error('condition') is-invalid @enderror" id="single-default"
                            name="condition">
                            <optgroup label="Kondisi Barang">
                                <option value="Baik">Baik</option>
                                <option value="Rusak">Rusak</option>
                            </optgroup>
                        </select>
                        @error('condition')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="single-default">
                            Tahun Pengadaan
                        </label>
                        <select class="form-control w-100 @error('bidding_year') is-invalid @enderror"
                            id="single-default" name="bidding_year">
                            <optgroup label="Tahun Pengadaan">
                                <option value="2010">2010</option>
                                <option value="2011">2011</option>
                                <option value="2012">2012</option>
                                <option value="2013">2013</option>
                                <option value="2014">2014</option>
                                <option value="2015">2015</option>
                                <option value="2016">2016</option>
                                <option value="2017">2017</option>
                                <option value="2018">2018</option>
                                <option value="2019">2019</option>
                                <option value="2020">2020</option>
                                <option value="2021">2021</option>
                                <option value="2022">2022</option>
                                <option value="2023">2023</option>
                                <option value="2024">2024</option>
                                <option value="2025">2025</option>
                            </optgroup>
                        </select>
                        @error('bidding_year')
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
<script>
    /* demo scripts for change table color */
        /* change background */
        $(document).ready(function() {
            $('#dt-basic-example').dataTable({
                responsive: true
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
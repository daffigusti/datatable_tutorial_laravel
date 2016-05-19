<?php
/**
 * Created by PhpStorm.
 * User: KHADAFI
 * Date: 5/19/2016
 * Time: 9:49 AM
 */

        ?>


@extends('layout.home')

@section('title', 'Table Ajax Server side')

@section("content")
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>
                        Datatable
                        <small>
                            Example of Ajax Server Side PHP
                        </small>
                    </h3>
                </div>

                <div class="title_right">
                    <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                              <button class="btn btn-default" type="button">Go!</button>
                          </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>

            <div class="row">

                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Datatable <small>Ajax</small></h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="#">Settings 1</a>
                                        </li>
                                        <li><a href="#">Settings 2</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <p class="text-muted font-13 m-b-30">
                                Contoh menggunakan datatable dengan ajax Server Side PHP.
                            </p>
                            <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                <thead>
                                <tr>
                                    <th>User ID</th>
                                    <th>First name</th>
                                    <th>Last name</th>
                                    <th>Gender</th>
                                    <th>Email</th>
                                    <th>Ip Address</th>
                                    <th>Created date</th>
                                </tr>
                                </thead>
                               <tbody></tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section("javascript")
    <!-- Datatables -->
    <script src="{{url("")}}/plugins/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="{{url("")}}/plugins/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="{{url("")}}/plugins/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="{{url("")}}/plugins/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="{{url("")}}/plugins/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="{{url("")}}/plugins/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="{{url("")}}/plugins/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="{{url("")}}/plugins/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="{{url("")}}/plugins/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="{{url("")}}/plugins/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="{{url("")}}/plugins/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="{{url("")}}/plugins/datatables.net-scroller/js/datatables.scroller.min.js"></script>
    <script src="{{url("")}}/plugins/jszip/dist/jszip.min.js"></script>
    <script src="{{url("")}}/plugins/pdfmake/build/pdfmake.min.js"></script>
    <script src="{{url("")}}/plugins/pdfmake/build/vfs_fonts.js"></script>

    <!-- Datatables -->
    <script>
        $(document).ready(function() {



            $('#datatable-responsive').DataTable({
                "processing": true,
                "serverSide": true,
                "ajax": {
                    url: "{{action('TableController@anyData')}}",
                    type: 'GET'
                }
            });

        });
    </script>
    <!-- /Datatables -->
@endsection


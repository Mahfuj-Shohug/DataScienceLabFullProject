@extends('backend.lib.layout')

@section('main_content')
    	<!-- start: Content -->
			<div id="content" class="span10">


                    <div class="row-fluid sortable">
                        <div class="box span12">
                            <div class="box-header" data-original-title>
                                <h2><i class="fas fa-barcode"></i><span class="break"></span>All seminar register members</h2>
                                <div class="box-icon">

                                    <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>

                                </div>
                            </div>
                            <div class="box-content">
                                <table class="table table-hover table-bordered bootstrap-datatable datatable">
                                  <thead>
                                      <tr>
                                          <th class="text-warning">Name</th>
                                          <th class="text-warning">Univeristy Name</th>
                                          <th class="text-warning">Department Name</th>
                                          <th class="text-warning">Seminar Name</th>
                                          <th class="text-warning">Phone Number</th>
                                          <th class="text-warning">Email</th>
                                          <th class="text-warning">Transaction ID</th>
                                      </tr>
                                  </thead>
                                  <tbody>

                                      @foreach ($seminar as $c)
                                      <tr>
                                            <td> {{$c->name}}</td>
                                            <td class="center">{{$c->varsity}}</td>
                                            <td class="center">{{$c->dept}}</td>
                                            <td class="center">{{$c->sname}}</td>
                                            <td class="center">{{$c->phone}}</td>
                                            <td class="center">{{$c->gmail}}</td>
                                            <td class="center">{{$c->trid}}</td>

                                            </td>
                                        </tr>
                                      @endforeach


                                  </tbody>
                              </table>
                            </div>
                        </div><!--/span-->

                    </div><!--/row-->
        </div>
@endsection

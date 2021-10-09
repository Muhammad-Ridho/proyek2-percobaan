@extends('layout.template')

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title ">PENDUDUK</h4>
                        {{-- <p class="card-category"> Here is a subtitle for this table</p> --}}
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                  <th>
                                    NIK
                                  </th>
                                  <th>
                                    Nama
                                  </th>
                                  <th>
                                    Jenis Kelamin
                                  </th>
                                  <th>
                                    No Hp
                                  </th>
                                  <th>
                                    Alamat
                                  </th>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

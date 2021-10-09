@extends('layout.template')

@section('content')
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title ">WILAYAH</h4>
                    {{-- <p class="card-category"> Here is a subtitle for this table</p> --}}
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary">
                              <th>
                                ID
                              </th>
                              <th>
                                Nama Daerah
                              </th>
                              <th>
                                Alamat
                              </th>
                              <th>
                                Kelurahan
                              </th>
                              <th>
                                Kecamatan
                              </th>
                              <th>
                                  Alasan
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

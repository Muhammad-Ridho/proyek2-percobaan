@extends('layout.template')

@section('content')
<div class="content">
    <div class="row">
        <div class="col-md-12">

            <td>
                <a href="/wilayah/add" class="btn btn-outline-primary">Tambah</a>
            </td>

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
                                No
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
                              <th>
                                Tanggal
                              </th>
                              <th>
                                Action
                              </th>
                            </thead>
                            <tbody>
                                <?php $no=1; ?>
                                @foreach ($wilayah as $data)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $data->nama_daerah }}</td>
                                        <td>{{ $data->alamat }}</td>
                                        <td>{{ $data->kelurahan }}</td>
                                        <td>{{ $data->kecamatan }}</td>
                                        <td>{{ $data->alasan }}</td>
                                        <td>{{ $data->tanggal }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

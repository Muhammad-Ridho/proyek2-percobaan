@extends('layout.template')

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">

                <td>
                    <a href="/penduduk/add" class="btn btn-outline-primary">Tambah</a>
                </td>

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
                                        NO
                                    </th>
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
                                    <th>
                                        Foto
                                    </th>
                                    <th>
                                        Action
                                    </th>
                                </thead>
                                <tbody>
                                    <?php $no=1; ?>
                                    @foreach ($penduduk as $data)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $data->nik }}</td>
                                            <td>{{ $data->nama }}</td>
                                            <td>{{ $data->jk }}</td>
                                            <td>{{ $data->no_telpon }}</td>
                                            <td>{{ $data->alamat }}</td>
                                            <td><img src="{{ url('foto_nik/'.$data->foto) }}" width="100px"></td>
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

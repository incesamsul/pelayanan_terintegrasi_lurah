@extends('layouts.v_template')

@section('content')
    @if (auth()->user()->role == 'Administrator' || auth()->user()->role == 'user')
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body table-responsive">
                       <div class="d-flex justify-content-between" >
                        <h5>Form Data</h5>
                        <a class="btn btn-primary" href="{{ URL::to('/sk/' . $jenis_surat . '/request') }}" class="text-white">Request </a>
                       </div>
                        {{-- judul surat
                        nomor surat
                        isi surat
                        ttd --}}
                        <table class="table" id="table-data">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Jenis surat</th>
                                    <th>Nomor</th>
                                    <th>Hp User</th>
                                    <th>Tgl. Surat</th>
                                    <th>status</th>
                                    <th>Aksi</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($request as $row)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $row->user->name }}</td>
                                        <td>{{ $row->jenis_surat }}</td>
                                        <td>{{ $row->nomor_surat ? $row->nomor_surat : 'Belum ada' }}</td>
                                        <td>{{ $row->user->no_hp }}</td>
                                        <td>{{ $row->created_at }}</td>
                                        <td>
                                            @if ($row->status == 'Pending')
                                                <span class="badge bg-warning">{{ $row->status }}</span>
                                            @elseif ($row->status == 'Approved')
                                                <span class="badge bg-success">{{ $row->status }}</span>
                                            @else
                                                <span class="badge bg-danger">{{ $row->status }}</span>
                                            @endif
                                        </td>
                                        @if (auth()->user()->role == 'Administrator')
                                            <td>
                                                <button type="button" class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#modal-{{ $row->id }}">
                                                    Terima
                                                </button>

                                                <div class="modal fade" id="modal-{{ $row->id }}" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="modalLabel">Terima Surat</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form action="{{ URL::to('/sk/' . $jenis_surat . '/accept/' . $row->id) }}" method="post">
                                                                    @csrf
                                                                    <div class="mb-3">
                                                                        <label for="nomor_surat" class="form-label">Nomor Surat</label>
                                                                        <input type="text" class="form-control" id="nomor_surat" name="nomor_surat" required>
                                                                    </div>
                                                                    <button type="submit" class="btn btn-primary">Terima</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        @else
                                            @if ($row->status == 'Approved')
                                                <td>
                                                     <a class="btn btn-primary" href="{{ URL::to('/sk/' . $jenis_surat . '/download') }}" class="text-white">Download</a>
                                                </td>
                                                @else
                                                <td>
                                                    Menunggu acc
                                               </td>
                                            @endif
                                        @endif
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    @endif



@endsection

@section('script')
    <script>
        // table data
        var table = $('#table-data').DataTable({
            "lengthChange": false,
            "responsive": true,
            dom: 'Bfrtip',
            buttons: [
                'copy', 'excel', 'pdf'
            ]
        });

        $('#liWilayah').addClass('active');
    </script>
@endSection

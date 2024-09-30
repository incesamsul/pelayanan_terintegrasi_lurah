@extends('layouts.v_template')
<style>
    .signatureCanvas {
        border: 1px solid #000;
        cursor: crosshair;
        margin: 20px 0;
    }
</style>
@section('content')
    @if (auth()->user()->role == 'Administrator' || auth()->user()->role == 'user')
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body table-responsive">
                        <div class="d-flex justify-content-between">
                            <h5>Form Data</h5>
                            <a class="btn btn-primary" href="{{ URL::to('/sk/' . $jenis_surat . '/request') }}"
                                class="text-white">Request </a>
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
                                                <button type="button" class="btn btn-info btn-sm" data-bs-toggle="modal"
                                                    data-bs-target="#modal-{{ $row->id }}">
                                                    Terima
                                                </button>

                                                <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                                    data-bs-target="#modal-ttd-{{ $row->id }}">
                                                    Tanda Tangan
                                                </button>

                                                <div class="modal fade" id="modal-{{ $row->id }}" tabindex="-1"
                                                    aria-labelledby="modalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="modalLabel">Terima Surat</h5>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form
                                                                    action="{{ URL::to('/sk/' . $jenis_surat . '/accept/' . $row->id) }}"
                                                                    method="post">
                                                                    @csrf
                                                                    <div class="mb-3">
                                                                        <label for="nomor_surat" class="form-label">Nomor
                                                                            Surat</label>
                                                                        <input type="text" class="form-control"
                                                                            id="nomor_surat" name="nomor_surat" required>
                                                                    </div>
                                                                    <button type="submit"
                                                                        class="btn btn-primary">Terima</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="modal fade" id="modal-ttd-{{ $row->id }}" tabindex="-1"
                                                    aria-labelledby="modalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="modalLabel">Tanda Tangan Surat
                                                                </h5>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form
                                                                    action="{{ URL::to('/sk/' . $jenis_surat . '/ttd/' . $row->id) }}"
                                                                    method="post">
                                                                    @csrf

                                                                    @if ($row->tanda_tangan != null)
                                                                        <div class="mb-3"></div>
                                                                            <img src="{{ asset('storage/signatures/' . $row->tanda_tangan) }}"
                                                                                class="img-fluid" alt="image">
                                                                        </div>
                                                                    @else

                                                                    <div class="container">
                                                                        <canvas class="signatureCanvas" width="400"
                                                                            height="200"></canvas>
                                                                        <div id="buttons">
                                                                            <button data-id_surat="{{ $row->id }}" class="saveButton btn btn-primary">Simpan</button>
                                                                            <button class="clearButton btn btn-secondary">Batal</button>
                                                                        </div>
                                                                    </div>
                                                                    @endif



                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        @else
                                            @if ($row->status == 'Approved')
                                                <td>
                                                    <a class="btn btn-primary"
                                                        href="{{ URL::to('/sk/' . $jenis_surat . '/download/' . $row->id ) }}"
                                                        class="text-white">Download</a>
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
        $(document).ready(function() {
            const canvasList = $('.signatureCanvas');

            canvasList.each(function(index, canvas) {
                const ctx = canvas.getContext('2d');

                let isDrawing = false;
                let lastX = 0;
                let lastY = 0;

                $(canvas).on('mousedown', (e) => {
                    isDrawing = true;
                    [lastX, lastY] = [e.offsetX, e.offsetY];
                });

                $(canvas).on('mousemove', (e) => {
                    if (!isDrawing) return;
                    drawSignature(e.offsetX, e.offsetY, ctx, lastX, lastY);
                    [lastX, lastY] = [e.offsetX, e.offsetY];
                });

                $(canvas).on('mouseup', () => isDrawing = false);
                $(canvas).on('mouseout', () => isDrawing = false);

                // Scope the buttons within the current container of this canvas
                const container = $(canvas).closest('.container');

                // Save signature as PNG
                container.find('.saveButton').on('click', function(e) {
                    e.preventDefault(); // Prevent form submission

                    const dataURL = canvas.toDataURL(
                    'image/png'); // Get the image data as a URL in PNG format
                    console.log(dataURL);
                    let idSurat = $(this).data('id_surat');
                    console.log(idSurat);
                    $.ajax({
                        url: "{{ route('save.signature') }}", // Add your route here
                        type: 'POST',
                        data: {
                            signature: dataURL,
                            id_surat: idSurat,
                            _token: '{{ csrf_token() }}' // Include CSRF token
                        },
                        success: function(response) {
                            alert('Signature saved successfully!');
                            console.log(response);
                            // close modal
                            $('#modal-ttd-' + idSurat).modal('hide');
                        },
                        error: function(xhr, status, error) {
                            console.error('Error saving signature:', error);
                        }
                    });
                });


                // Clear the canvas
                container.find('.clearButton').on('click', function(e) {
                    e.preventDefault();
                    ctx.clearRect(0, 0, canvas.width, canvas.height); // Clear the canvas
                });
            });

            function drawSignature(x, y, ctx, lastX, lastY) {
                ctx.beginPath();
                ctx.moveTo(lastX, lastY); // Move to the last position
                ctx.lineTo(x, y); // Draw a line to the current position
                ctx.strokeStyle = '#000'; // Line color
                ctx.lineWidth = 2; // Line width
                ctx.lineCap = 'round'; // Line end style
                ctx.stroke(); // Render the line
            }
        });




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

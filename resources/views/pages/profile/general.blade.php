<div class="row">
    <div class="col-lg-4">
        <div class="card shadow-none">
            <div class="card-body">
                <div class="">
                    <h5><strong>Detail Profile {{ auth()->user()->role }}</strong></h5>
                    <div class="mb-3">
                        <label class="my-3">Email</label>
                        <div>{{ auth()->user()->email }}</div>
                    </div>
                    @if (auth()->user()->role == 'Administrator')
                    <form action="{{ URL::to('/update_profile') }}" method="POST">
                        @csrf
                        <div class="gorm-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name" id="name" value="{{ auth()->user()->name }}">
                        </div>
                        <div class="gorm-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" id="email" value="{{ auth()->user()->email }}">
                        </div>
                        <div class="gorm-group">
                            <label for="jabatan">Jabatan</label>
                            <input type="text" class="form-control" name="jabatan" id="jabatan" value="{{ auth()->user()->jabatan }}">
                        </div>

                        <button type="submit" class="btn btn-primary mt-3">Update</button>

                    </form>
                    @endif

                    @if (auth()->user()->role == 'user')
                        <form action="{{ URL::to('/update_profile') }}" method="POST">
                            @csrf
                            {{-- $table->string('name');
                            $table->string('email')->unique();
                            $table->timestamp('email_verified_at')->nullable();
                            $table->string('jabatan');
                            $table->string('nik');
                            $table->string('tempat_tanggal_lahir');
                            $table->string('agama');
                            $table->string('pekerjaan');
                            $table->string('alamat');
                            $table->string('foto'); --}}
                            <div class="gorm-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" name="name" id="name" value="{{ auth()->user()->name }}">
                            </div>
                            <div class="gorm-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" name="email" id="email" value="{{ auth()->user()->email }}">
                            </div>
                            <div class="gorm-group">
                                <label for="nik">Nik</label>
                                <input type="text" class="form-control" name="nik" id="nik" value="{{ auth()->user()->nik }}">
                            </div>
                            <div class="gorm-group">
                                <label for="tempat_tanggal_lahir">Tempat Tanggal Lahir</label>
                                <input type="text" class="form-control" name="tempat_tanggal_lahir" id="tempat_tanggal_lahir" value="{{ auth()->user()->tempat_tanggal_lahir }}">
                            </div>
                            <div class="gorm-group">
                                <label for="agama">Agama</label>
                                <input type="text" class="form-control" name="agama" id="agama" value="{{ auth()->user()->agama }}">
                            </div>
                            <div class="gorm-group">
                                <label for="pekerjaan">Pekerjaan</label>
                                <input type="text" class="form-control" name="pekerjaan" id="pekerjaan" value="{{ auth()->user()->pekerjaan }}">
                            </div>
                            <div class="gorm-group">
                                <label for="alamat">Alamat</label>
                                <input type="text" class="form-control" name="alamat" id="alamat" value="{{ auth()->user()->alamat }}">
                            </div>
                            <div class="gorm-group">
                                <label for="no_hp">No hp</label>
                                <input type="text" class="form-control" name="no_hp" id="no_hp" value="{{ auth()->user()->no_hp }}">
                            </div>
                            <button type="submit" class="btn btn-primary mt-3">Update</button>
                        </form>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

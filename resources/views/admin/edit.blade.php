<x-layout>
    <div class="container mt-5">
        <!-- Pesan Kesalahan -->
        @if ($errors->any())
        <div class="alert alert-warning">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <!-- Form untuk Edit Data -->
        <form action="{{ url('admin/' . $data->id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="my-3 p-3 bg-body rounded shadow-sm">
                <h4 class="mb-4">Edit Data</h4>

                <div class="mb-3 row">
                    <label for="name" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="name" id="name" value="{{ $data->name }}" required>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" name="email" id="email" value="{{ $data->email }}" required>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="address" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="address" id="address" value="{{ $data->address }}" required>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="jobTitle" class="col-sm-2 col-form-label">Jabatan</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="jobTitle" id="jobTitle" value="{{ $data->jobTitle }}" required>
                    </div>
                </div>

                <div class="mb-3 row">
                    <div class="col-sm-10 offset-sm-2">
                        <button type="submit" class="btn btn-primary" name="submit">SIMPAN</button>
                        <a href="{{ url('/admin') }}" class="btn btn-info">Kembali</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</x-layout>

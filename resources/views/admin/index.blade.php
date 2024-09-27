<x-layout>

    <!-- Bagian Data Karyawan -->
    <div class="row">
        <div class="col-2"></div>
        <div class="col-10">
            <div class="row">
                <div class="col">
                    <h1 class="display-1">Data Karyawan</h1>
                </div>
            </div>
            <div class="my-3 p-3 bg-body rounded shadow-sm">

                <div class="row">
                    <div class="col-11">
                        <div class="align-center my-5 p-4  rounded shadow-sm">
                            <table class="table">

                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Alamat</th>
                                        <th>Jabatan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody class="table-group-divider">
                                    <?php $i = 1; ?>
                                    @foreach ($data as $item)
                                        <tr>
                                            <th>{{ $i++ }}</th>
                                            <td>{{ $item['name'] }}</td>
                                            <td>{{ $item['email'] }}</td>
                                            <td>{{ $item['address'] }}</td>
                                            <td>{{ $item['jobTitle'] }}</td>
                                            <td>
                                                <a href="{{ url('admin/' . $item->id . '/edit') }}"
                                                    class="btn btn-primary">Edit</a>
                                                <form onsubmit="return confirm('Are you sure?')" class="d-inline"
                                                    action="{{ url('admin/' . $item->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-danger" type="submit">DELETE</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                Insert
                            </button>
                            <a href="/session/logout" class="btn btn-danger">Log Out</a>

                            <form action="{{ url('/admin') }}" method="post">
                                @csrf
                                <div class="modal fade" id="exampleModal" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Insert Data</h1>
                                            </div>
                                            <div class="modal-body">
                                                @csrf
                                                <div class="mb-3">
                                                    <label for="exampleInputEmail1" class="form-label">Nama</label>
                                                    <input type="text" class="form-control" name="name"
                                                        id="exampleInputEmail1" aria-describedby="emailHelp"
                                                        value="">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="exampleInputEmail1" class="form-label">Email</label>
                                                    <input type="email" class="form-control" name="email"
                                                        id="exampleInputEmail1" aria-describedby="emailHelp"
                                                        value="">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="exampleInputEmail1" class="form-label">Alamat</label>
                                                    <input type="text" class="form-control" name="address"
                                                        id="exampleInputEmail1" aria-describedby="emailHelp"
                                                        value="">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="exampleInputEmail1" class="form-label">Jabatan</label>
                                                    <input type="text" class="form-control" name="jobTitle"
                                                        id="exampleInputEmail1" aria-describedby="emailHelp"
                                                        value="">
                                                </div>

                                            </div>
                                            
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="submit" name="submit"
                                                    class="btn btn-primary">Save</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>

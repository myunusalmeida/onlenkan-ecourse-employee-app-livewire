<div>
    <div class="d-flex align-items-center justify-content-between mb-5">
        <h4 class="fw-semibold mb-0">Data Karyawan</h4>
        <a wire:navigate href="{{ route('karyawan.create') }}" class="btn btn-primary btn-icon">
            <i class="bx bx-plus"></i> Tambah Karyawan
        </a>
    </div>

    <div class="card border-0">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>NIP</th>
                            <th>Nama</th>
                            <th>Tempat/Tanggal Lahir</th>
                            <th>Nomor Telepon</th>
                            <th>Posisi</th>
                            <th>Tanggal Mulai</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($employees as $key => $item)
                            <tr>
                                <td>{{ ++$key }}</td>
                                <td>{{ $item->nip }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->birth_place }}/{{ $item->birth_date }}</td>
                                <td>{{ $item->phone }}</td>
                                <td>{{ $item->position->position_name }}</td>
                                <td>{{ $item->join_date }}</td>
                                <td>
                                    <div class="d-flex gap-2">
                                        <a wire:navigate href="{{ route('karyawan.edit', $item->id) }}"
                                            class="btn btn-warning text-white btn-icon">
                                            <i class="bx bx-edit"></i>
                                        </a>
                                        <button class="btn btn-danger btn-icon"
                                            wire:click="delete({{ $item->id }})" wire:confirm="Kamu yakin?">
                                            <i class="bx bx-trash"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

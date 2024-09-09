<div>
    <div class="d-flex align-items-center justify-content-between mb-5">
        <h4 class="fw-semibold mb-0">Posisi Pekerjaan</h4>
        <a href="{{ route('posisi-pekerjaan.create') }}" class="btn btn-primary btn-icon" wire:navigate>
            <i class="bx bx-plus"></i> Tambah Posisi
        </a>
    </div>

    <div class="card border-0">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Posisi</th>
                            <th>Gaji</th>
                            <th>Jobdesc</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($positions as $key => $item)
                            <tr>
                                <td>{{ ++$key }}</td>
                                <td>{{ $item->position_name }}</td>
                                <td>Rp. {{ number_format($item->salary) }}</td>
                                <td>{{ $item->jobdesc }}</td>
                                <td>
                                    <div class="d-flex gap-2">
                                        <a wire:navigate href="{{ route('posisi-pekerjaan.edit', $item->id) }}"
                                            class="btn btn-warning text-white btn-icon">
                                            <i class="bx bx-edit"></i>
                                        </a>
                                        <button class="btn btn-danger btn-icon" wire:click="delete({{ $item->id }})"
                                            wire:confirm="Kamu yakin ingin menghapusnya?">
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

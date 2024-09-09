<div>
    <div class="d-flex align-items-center justify-content-between mb-5">
        <h4 class="fw-semibold mb-0">Tambah Data Karyawan</h4>
        <a wire:navigate href="{{ route('karyawan') }}" class="btn btn-secondary btn-icon">
            <i class="bx bx-left-arrow-alt"></i> Batal & Kembali
        </a>
    </div>

    <div class="card border-0">
        <div class="card-body">
            <form wire:submit="save({{ $employee_id }})">
                <div class="row">
                    <div class="col-12">
                        <div class="mb-3">
                            <label for="name">Nama Lengkap</label>
                            <input type="text" wire:model="name" id="name" class="form-control" autofocus
                                required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="nip">Nomor Induk Pegawai</label>
                            <input type="text" wire:model="nip" id="nip" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="phone">Nomor Telepon</label>
                            <input type="text" wire:model="phone" name="phone" id="phone" class="form-control"
                                required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="birth_date">Tanggal Lahir</label>
                            <input type="date" wire:model="birth_date" name="birth_date" id="birth_date"
                                class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="birth_place">Tempat Lahir</label>
                            <input type="text" wire:model="birth_place" name="birth_place" id="birth_place"
                                class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="position">Posisi</label>
                            <select wire:model="position_id" id="position" class="form-select">
                                <option value="">Pilih Posisi</option>
                                @foreach ($positions as $position)
                                    <option value="{{ $position->id }}">{{ $position->position_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="join_date">Tanggal Bergabung</label>
                            <input type="date" wire:model="join_date" id="join_date" class="form-control" required>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-icon">
                    <i class="bx bx-save"></i> Simpan Baru
                </button>
            </form>
        </div>
    </div>
</div>

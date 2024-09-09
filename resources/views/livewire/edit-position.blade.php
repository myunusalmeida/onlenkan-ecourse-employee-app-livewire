<div>
    <div class="d-flex align-items-center justify-content-between mb-5">
        <h4 class="fw-semibold mb-0">Edit Posisi Pekerjaan</h4>
        <a wire:navigate href="{{ route('posisi-pekerjaan') }}" class="btn btn-secondary btn-icon">
            <i class="bx bx-left-arrow-alt"></i> Batal & Kembali
        </a>
    </div>

    <div class="card border-0">
        <div class="card-body">
            <form wire:submit="save({{ $position_id }})">
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="position_name">Nama Posisi</label>
                            <input type="text" wire:model="position_name" id="position_name" class="form-control"
                                autofocus required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="salary">Gaji</label>
                            <input type="number" wire:model="salary" id="salary" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mb-3">
                            <label for="jobdesc">Jobdesc</label>
                            <textarea wire:model="jobdesc" id="jobdesc" cols="30" rows="4" class="form-control"></textarea>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-icon">
                    <i class="bx bx-save"></i> Simpan Perubahan
                </button>
            </form>
        </div>
    </div>
</div>

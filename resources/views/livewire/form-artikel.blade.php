<div>
    <form wire:submit.prevent="simpan">
        <div class="form-group">
            <table>Judul</table>
            <input wire:model="judul" type="text" name="" class="form-control" placeholder="Masukan Judul">
        </div>

        <div class="form-group">
            <table>Deskripsi</table>
            <textarea wire:model="deskripsi" name="" rows="10" class="form-control"></textarea>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-info">Submit</button>
        </div>
    </form>
</div>

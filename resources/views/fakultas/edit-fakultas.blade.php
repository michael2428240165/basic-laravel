<x-layout>
    <h1>Edit Fakultas</h1>
    <form action="/fakultas" method="POST">
        @csrf
        @method("PUT")
        <div class ="form-group">
            <input name="nama_fakultas"
            type="text"
            placeholder="Nama Fakultas"
            class="form-control"
            value="{{ $fakultas["nama-fakultas"] }}">
        </div>
        <div class ="form-group">
            <input name="nama_dekan"
            type="text"
            placeholder="Nama Dekan"
            class="form-control"
            value="{{ $fakultas["nama-dekan"] }}">
        </div>
        <button type="submit" class="btn btn-primary">
            Simpan
        </button>
    </form>
</x-layout>

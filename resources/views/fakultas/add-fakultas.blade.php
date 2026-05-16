<x-layout
    <form action="" method="POST">
        @csrf
        <div class = "form-group">
            <input
            nama="nama_fakultas"
            type="text"
            placeholder="Nama Fakultas"
            class="form-control"
            >
        </div>
        <div class="form-group">
            <input
            name="nama_dekan"
            type="text"
            placeholder="Nama Dekan"
            class="form-control"
            >
        </div>
    </form>
<
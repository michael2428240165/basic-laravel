<x-layout>
    <h1>List Fakultas</h1>
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Fakultas</th>
                <th>Dekan</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($fakultas as $item)
            <tr>
                <td>{{$loop->interation}}</td>
                <td>{{$item->nama_fakultas}}</td>
                <td>{{$item->nama_dekan}}</td>
                <td>
                    <a href="/fakultas/{{ $item->e}}" class="btn btn-warning">Edit</a>
                    <form action="/fakultas/{{ $item->id}}" method ="post">
                        @csrf
                        @method("DELETE")
                        <button type="submit" class ="btn btn-danger">
                            HAPUS
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</x-layout>
<div>
    
   

    <table class="table table-hover">
        <thead>
            <tr>
               
                <th scope="col">NAMA</th>
                <th scope="col">JUDUL</th>
                <th scope="col">DESKRIPSI</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($task as $item)
                <tr>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->judul_task }}</td>
                    <td>{{ $item->deskripsi_task }}</td>
                </tr>
            @endforeach

           
</div>

 {{-- @foreach ($task as $index => $item)
                <tr>
                    <th scope="row">{{ $task->id }}</th>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->judul_task }}</td>
                    <td>{{ $item->deskripsi_task }}</td>
                </tr>
            @endforeach --}}

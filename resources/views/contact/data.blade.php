<div class="row">
    <div class="col-md-12 table-responsive">
        <table class="table table-striped table-bordered" id="table" style="width:100%;">
            <thead>
                <tr>
                    <th>Periode Pemilihan</th>
                    <th>Running Text</th>
                    <th>Whatsapp</th>
                    <th>Email</th>
                    <th>Facebook</th>
                    <th>Instagram</th>
                    <th>Twitter</th>
                    <th style="text-align:center">Aksi</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($contacts as $index => $contact)
                @php
                $arrayData = explode(";", $contact->no_tlp);
                @endphp
                <tr>
                    <td>{{ $contact->jadwal->tanggal }}</td>
                    <td>{{ $contact->marquee }}</td>
                    <td>
                        <ul>
                            @foreach($arrayData as $item)
                            <li>{{ $item }}</li>
                            @endforeach
                        </ul>
                    </td>
                    <td>{{ $contact->email }}</td>
                    <td>{{ $contact->facebook }}</td>
                    <td>{{ $contact->instagram }}</td>
                    <td>{{ $contact->twitter }}</td>

                    <td class="text-center">
                        <table>
                            <tr>
                                <td>
                                    <a href="{{ route('contact.edit', $contact->id) }}" class="btn btn-primary btn-sm btn-flat"><i class="fa fa-edit"></i>&nbsp; Edit</a>
                                </td>
                                <td>
                                    <form action="{{ route('contact.destroy', $contact->id) }}" method="POST">
                                        @csrf @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm btn-flat show_confirm"><i class="fa fa-trash"></i>&nbsp; Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

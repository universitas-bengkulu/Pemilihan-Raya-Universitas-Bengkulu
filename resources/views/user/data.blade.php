<div class="row">
    <div class="col-md-12 table-responsive">
        <table class="table table-striped table-bordered" id="table" style="width:100%;">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Lengkap</th>
                    <th>Email</th>
                    <th style="text-align:center">Password</th>
                    <th style="text-align:center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $index => $user)
                    <tr>
                        <td>{{ $index+1 }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td class="text-center">
                            <a class="btn btn-info btn-sm btn-flat" onclick="updatePassword({{ $user->id }})"><i class="fa fa-key"></i></a>
                        </td>
                        <td class="text-center">
                            <table>
                                <tr>
                                    <td>
                                        <a href="{{ route('user.edit', $user->id) }}" class="btn btn-primary btn-sm btn-flat"><i class="fa fa-edit"></i>&nbsp; Edit</a>
                                    </td>
                                    <td>
                                        <form action="{{ route('user.destroy', $user->id) }}" method="POST">
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
        @include('user._form_update_password')
    </div>
</div>

@push('scripts')
    @include('user._js')
    <script>
        function updatePassword(id) {
            $('#updatePassword').modal('show');
            $('#id_password').val(id);
        }
    </script>
@endpush
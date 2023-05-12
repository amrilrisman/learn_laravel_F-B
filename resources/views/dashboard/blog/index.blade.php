@extends('dashboard.layouts.main_dashboard')

@section('titleBody')
    Tulisan Saya
@endsection
@section('body')
    <a class="btn btn-primary mb-3" href="/dashboard/blog/create">
        <span data-feather="plus" class="align-text-bottom"></span>
        Tambah Blog
    </a>

    <!-- Modal -->

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Hapus Tulisan Anda</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Anda yakin untuk menghapus Blog ini ?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Ya, Hapus</button>
                </div>
            </div>
        </div>
    </div>

    {{-- end Modal --}}

    @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session('success') }}
        </div>
    @endif
    <div class="table-responsive col-10">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Category</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->title }}</td>
                        <td>{{ $item->category->name }}</td>
                        <td>
                            <a href="/dashboard/blog/{{ $item->slug }}" class="badge bg-info  d-inline"
                                type="submit"><span data-feather="eye" class="align-text-bottom"></span></a>
                            <a href="/dashboard/blog/{{ $item->slug }}/edit" class="badge bg-warning  d-inline" type="submit" style="color:white"><span
                                    data-feather="edit-3" class="align-text-bottom"></span></a>
                            <Form action="/dashboard/blog/{{ $item->slug }}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="badge bg-danger border-0 " type="submit" {{-- data-bs-toggle="modal" --}}
                                    onclick="return confirm('Anda yakin untuk menghapus Blog ini ?')"
                                    {{-- data-bs-target="#exampleModal" --}}><span data-feather="trash"
                                        class="align-text-bottom"></span></button>
                            </Form>
                            </button>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection

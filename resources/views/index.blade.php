<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Áp dụng CSS cho phần tử h1 */
        h1 {
            color: blue;
            font-size: 24px;
        }

        /* Áp dụng CSS cho phần tử table */
        table {
            width: 100%;
            border-collapse: collapse;
        }

        /* Áp dụng CSS cho phần tử th */
        th {
            background-color: lightgray;
            padding: 8px;
        }

        /* Áp dụng CSS cho phần tử td */
        td {
            padding: 8px;
        }

        /* Áp dụng CSS cho phần tử a */
        a {
            text-decoration: none;
            color: blue;
        }

        /* Áp dụng CSS cho phần tử form */
        form {
            margin-bottom: 16px;
        }

        /* Áp dụng CSS cho phần tử button */
        button {
            padding: 4px 8px;
            background-color: lightblue;
            border: none;
            cursor: pointer;
        }

        /* Áp dụng CSS cho phần tử input */
        input[type="text"] {
            padding: 4px;
            width: 200px;
        }

        /* Áp dụng CSS cho phần tử .pagination */
        .pagination {
            margin-top: 16px;
        }
    </style>
</head>
<body>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <a href="/thuvien/create">Thêm</a>

    <form action="{{ route('search') }}" method="GET">
        <input type="text" name="keyword" placeholder="Enter keyword" value="{{ old('keyword') }}">
        <button type="submit">Search</button>
    </form>

    <table  >
        <h1>Danh mục sách</h1>
        <thead>
            <tr>
                <th>STT</th>
                <th>Tên sách</th>
                <th>Mã ISBN</th>
                <th>Tác giả</th>
                <th>Thể loại</th>
                <th>Số trang</th>
                <th>Năm xuất bản</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($books as $index => $book)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $book->ten_sach }}</td>
                    <td>{{ $book->ISBN }}</td>
                    <td>{{ $book->tac_gia }}</td>
                    <td>{{ $book->the_loai }}</td>
                    <td>{{ $book->so_trang }}</td>
                    <td>{{ $book->nam_xb }}</td>
                    <td>
                        <form action="{{ route('destroy', $book->id) }}" method="POST" id="delete-form">
                            @csrf
                            @method('DELETE')
                            <a href="{{ route('edit', $book->id) }}">Sửa</a>
                            <button type="submit" onclick="return confirmDelete()">Xoá</button>
                        </form>

                        <script>
                            function confirmDelete() {
                                if (confirm("Bạn có chắc chắn muốn xoá sách này?")) {
                                    document.getElementById("delete-form").submit();
                                } else {
                                    return false;
                                }
                            }
                        </script>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $books->links('pagination::bootstrap-4') }}
</body>
</html>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script>
    $(document).ready(function() {
        @if(session('success'))
            Swal.fire({
                icon: 'success',
                title: '{{ session('success') }}',
                showConfirmButton: false,
                timer: 1500
            });
        @endif
    });
</script>

<style>
    form {
        max-width: 400px;
        margin: 0 auto;
    }

    input[type="text"],
    input[type="number"],
    select {
        width: 100%;
        padding: 8px;
        margin-top: 5px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    input[type="submit"] {
        background-color: #4CAF50;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #45a049;
    }
</style>

<form action="{{ route('update', $book->id) }}" method="POST">
    @csrf
    @method('PUT')

    Tên sách: <input type="text" name="ten_sach" value="{{ old('ten_sach', $book->ten_sach) }}"><br>
    Mã ISBN: <input type="text" name="ISBN" value="{{ old('ISBN', $book->ISBN) }}"><br>
    Tác Giả:
    <select name="tac_gia" id="tac_gia">
        <option value="tac_gia_1" {{ $book->tac_gia === 'tac_gia_1' ? 'selected' : '' }}>Tác giả 1</option>
        <option value="tac_gia_2" {{ $book->tac_gia === 'tac_gia_2' ? 'selected' : '' }}>Tác giả 2</option>
        <option value="tac_gia_3" {{ $book->tac_gia === 'tac_gia_3' ? 'selected' : '' }}>Tác giả 3</option>
        <option value="tac_gia_4" {{ $book->tac_gia === 'tac_gia_4' ? 'selected' : '' }}>Tác giả 4</option>
        <option value="tac_gia_5" {{ $book->tac_gia === 'tac_gia_5' ? 'selected' : '' }}>Tác giả 5</option>
    </select><br>
    Thể Loại:
    <select name="the_loai" id="the_loai">
        <option value="the_loai_1" {{ $book->the_loai === 'the_loai_1' ? 'selected' : '' }}>Thể loại 1</option>
        <option value="the_loai_2" {{ $book->the_loai === 'the_loai_2' ? 'selected' : '' }}>Thể loại 2</option>
        <option value="the_loai_3" {{ $book->the_loai === 'the_loai_3' ? 'selected' : '' }}>Thể loại 3</option>
        <option value="the_loai_4" {{ $book->the_loai === 'the_loai_4' ? 'selected' : '' }}>Thể loại 4</option>
        <option value="the_loai_5" {{ $book->the_loai === 'the_loai_5' ? 'selected' : '' }}>Thể loại 5</option>
    </select><br>
    Số trang: <input type="number" name="so_trang" value="{{ old('so_trang', $book->so_trang) }}"><br>
    Năm Xuất bản: <input type="number" name="nam_xb" value="{{ old('nam_xb', $book->nam_xb) }}"><br>

    <input type="submit" value="SUBMIT">
</form>

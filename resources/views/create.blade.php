<style>
    form {
        max-width: 400px;
        margin: 0 auto;
    }

    label {
        display: block;
        margin-top: 10px;
        font-weight: bold;
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

    select {
        height: 34px;
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

<form action="{{ route('store') }}" method="post">
    @csrf

    Tên sách:<input type="text" name="ten_sach" ><br>
    @error('book_name')
    <div style="color: red">{{ $message }}</div>
@enderror

    Mã ISBN :<input type="text" name="ISBN" ><br>
    @error('isbn')
    <div style="color: red">{{ $message }}</div>
@enderror

    <label for="tac_gia">Tác giả:</label>
<select name="tac_gia" id="tac_gia">
    <option value="tac_gia_1">Tác giả 1</option>
    <option value="tac_gia_2">Tác giả 2</option>
    <option value="tac_gia_3">Tác giả 3</option>
    <option value="tac_gia_4">Tác giả 4</option>
    <option value="tac_gia_5">Tác giả 5</option>
</select>
@error('author')
<div style="color: red">{{ $message }}</div>
@enderror
<br>
    <label for="the_loai">Thể loại:</label>
<select name="the_loai" id="the_loai">
    <option value="the_loai_1">Thể loại 1</option>
    <option value="the_loai_2">Thể loại 2</option>
    <option value="the_loai_3">Thể loại 3</option>
    <option value="the_loai_4">Thể loại 4</option>
    <option value="the_loai_5">Thể loại 5</option>
</select>
@error('genre')
<div style="color: red">{{ $message }}</div>
@enderror
<br>
    Số trang:<input type="number" name="so_trang" >
    @error('page_count')
    <div style="color: red">{{ $message }}</div>
@enderror<br>
    <label for="nam_xb">Năm xuất bản:</label>
<input type="number" name="nam_xb" min="0" max="2024">
@error('publication_year')
<div style="color: red">{{ $message }}</div>
@enderror
<br>

    <input type="submit" value="SUBMIT">
</form>

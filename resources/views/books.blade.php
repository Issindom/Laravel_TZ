<form method="GET" action="">
    <select name="author[]">
        <option selected>Выберите автора</option>
        @foreach ($authors as $author)
            <option value="{{$author->id}}">{{$author->fio}}</option>
        @endforeach
    </select>
    <input type="submit" value="Применить">
</form>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Название</th>
        <th>Автор(ы)</th>
        <th>Год</th>
        <th colspan="2">Кнопки</th>
    </tr>
    @foreach ($books as $book)
    <tr>
        <td>{{ $book->id }}</td>
        <td>{{ $book->name }}</td>
        <td>
            {{ $book->authors->implode('fio', ', ') }}
        </td>
        <td>{{ $book->year }}</td>
        <td>
            <a href="/book/{{ $book->id }}/edit">Редактировать</a>
        </td>
        <td>
            <a href="/book/{{ $book->id }}/delete">Удалить</a>
        </td>
    </tr>
    @endforeach
</table>

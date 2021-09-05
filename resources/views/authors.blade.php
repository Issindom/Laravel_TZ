<table border="1">
    <tr>
        <th>ID</th>
        <th>ФИО</th>
        <th>Количество книг</th>
        <th colspan="2">Кнопки</th>
    </tr>
    @foreach ($authors as $author)
    <tr>
        <td>{{ $author->id }}</td>
        <td>{{ $author->fio }}</td>
        <td>
           
        </td>
        <td>
            <a href="/authors/{{ $author->id }}/edit">Редактировать</a>
        </td>
        <td>
            <a href="/authors/{{ $author->id }}/delete">Удалить</a>
        </td>
    </tr>
    @endforeach
</table>

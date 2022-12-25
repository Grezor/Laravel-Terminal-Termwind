    <table>
    <thead>
        <tr>
            <th>Name</th>
            <th>email</th>
            <th>remember_token</th>
        </tr>
    </thead>
    <tbody>
        @foreach($user as $s)
        <tr>
            <td>{{ $s->name }}</td>
            <td>{{ $s->email }}</td>
            <td>
            @if ($s->remember_token == '')
                <div class="px-1 bg-red-600">
                    vide
                </div>
            @else
                <div class="px-1 bg-green-600">
                    {{ $s->remember_token }}
                </div>
            @endif    
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

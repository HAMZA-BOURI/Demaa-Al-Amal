@props(['User'])
<div>
    <tbody class="reverse-rows">
    @foreach($User as $item)
        <tr>
            <td>{{ $item['id'] }}</td>
            <td class="productimgname">
                <a href="javascript:void(0);">{{ $item['name'] }} {{ $item['Prenom'] }}</a>
            </td>
            <td>{{ $item['Phone'] }}</td>
            <td>{{ $item['mail'] }}</td>
            <td>{{ $item['Username'] }}</td>
            <td>{{ $item['Type_Blood'] }}</td>
            <td>{{ $item['CIN'] }}</td>
            <td>{{ $item['Adresse'] }}</td>
            <td>
                <a class="me-3" href="{{route('UserDe',$item['id'])}}">
                    <img src="/assets_dashboard/img/icons/eye.svg" alt="img" />
                </a>
            </td>
        </tr>
    @endforeach
    </tbody>
</div>

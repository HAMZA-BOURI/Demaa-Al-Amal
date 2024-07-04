@props(['Data_D'])
<div>
    <tbody>
    <!--data Blood Donations in database-->
    @foreach($Data_D as $item)
        <tr>
            <td>{{ $item['id'] }}</td>
            <td class="productimgname">
                <a href="javascript:void(0);">{{ $item['name'] }} {{ $item['Prenom'] }}</a>
            </td>
            <td>{{ $item['CIN'] }}</td>
            <td>{{ $item['Type_Blood'] }}</td>
            <td>{{ $item['mail'] }}</td>
            <td>{{ $item['Adresse'] }}</td>
            <td>
                <a class="me-3" href="{{route('DonorDe',$item['id'])}}">
                    <img src="/assets_dashboard/img/icons/eye.svg" alt="img" />
                </a>
            </td>
        </tr>
    @endforeach
    </tbody>
</div>

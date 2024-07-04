@props(['Data_D'])
<div>
    <tbody>
    <!--data Blood Donations in database-->
    @foreach($Data_D as $item)
        <tr>
            <td>{{ $item['done_id'] }}</td>
            <td class="productimgname">
                <a href="javascript:void(0);">{{ $item['name'] }} {{ $item['Prenom'] }}</a>
            </td>
            <td>{{ $item['Nome'] }}</td>
            <td>{{ $item['Type_Blood'] }}</td>
            <td>{{ $item['Date_D'] }}</td>
            <td>
                <a class="me-3" href="{{route('Donor_Show',$item['done_id'])}}">
                    <img src="/assets_dashboard/img/icons/eye.svg" alt="img" />
                </a>
            </td>
        </tr>
    @endforeach
    </tbody>
</div>

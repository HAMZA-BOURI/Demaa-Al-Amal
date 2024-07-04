@props(['B_Dlist_D', 'titre_D'])
<div>
    <tbody>
    @foreach ($B_Dlist_D as $item)
        <tr>
            @if ($titre_D == 'Blood Donations List')
                <td>
                    <label class="checkboxs">
                        <input type="checkbox"/>
                        <span class="checkmarks"></span>
                    </label>
                </td>
            @endif
            <td>{{ $item['done_id'] }}</td>
            <td><a href="javascript:void(0);">{{ $item['CIN'] }}</a></td>
            <td class="productimgname">
                <a href="productlist.html">{{ $item['name'] }} {{ $item['Prenom'] }}</a>
            </td>
            <td>{{ $item['Nome'] }}</td>
            <td>{{ $item['Type_Blood'] }}</td>
            <td>{{ $item['Date_D'] }}</td>
            @if ($titre_D == 'Blood Donations List')
                <td>
                    <a class="me-3" href="product-details.html">
                        <img src="/assets_dashboard/img/icons/eye.svg" alt="img"/>
                    </a>
                    <a class="me-3" href="editproduct.html">
                        <img src="/assets_dashboard/img/icons/edit.svg" alt="img"/>
                    </a>
                    <a class="confirm-text" href="javascript:void(0);">
                        <img src="/assets_dashboard/img/icons/delete.svg" alt="img"/>
                    </a>
                </td>
            @endif
        </tr>
    @endforeach
    </tbody>
</div>

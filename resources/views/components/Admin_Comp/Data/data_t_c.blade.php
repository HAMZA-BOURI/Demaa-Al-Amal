@props(["centers"])
<div>
    <tbody>
    @foreach($centers as $affcher)
    <tr>
        <td>{{$affcher["Nome"]}}</td>
        <td>{{$affcher["Ville"]}}</td>
        <td>{{$affcher["Date_S"]}}</td>
        <td>
            @if($affcher["Status"]=="In Active")
                <span class="badges bg-lightred">{{$affcher["Status"]}}</span>
            @else
                <span class="badges bg-lightgreen">{{$affcher["Status"]}}</span>
            @endif
            <!--Color bg bg-light...-->
        </td>
        <td>
            @if($affcher["Stock"] == 0)
                <span class="badges bg-lightred">Out of Stock</span>
            @elseif($affcher["Stock"] <= 25)
                <span class="badges bg-lightyellow">Critical Low Stock</span>
            @elseif($affcher["Stock"] <= 50)
                <span class="badges bg-lightyellow">Low Stock</span>
            @elseif($affcher["Stock"] <= 100)
                <span class="badges bg-lightgreen">In Stock</span>
            @else
                <span class="badges bg-green">Overstock</span>
            @endif
            <!--Color bg bg-light...-->
        </td>
        <td>{{$affcher["Stock"]}}</td>
        <td>{{$affcher["Donor"]}}</td>
        <td>{{$affcher["Admin"]}}</td>

        <x-Admin_Comp.Data.action :id="$affcher['id']"/>
    </tr>@endforeach
    </tbody>
    <script>
        function checkD(id){
            alert(id);
        }
    </script>
</div>

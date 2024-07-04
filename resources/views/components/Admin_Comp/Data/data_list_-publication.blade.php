@props(['dataAdmin'])
<div>
    <tbody>
    @foreach($dataAdmin as $data)
        <tr>
            <td class="productimgname">
                {{$data['Titre']}}
            </td>
            <td>{{Str::limit($data->Description,70)}}</td>
            <td>{{$data['Type_Blood']}}</td>
            <td>{{$data['Phone']}}</td>
            <td>{{$data['UserName']}}</td>
            <td>{{$data['Ville']}}</td>
            <td>{{$data['Date_Public']}}</td>
            <td>
                @if($data["Status"]=="In Active")
                    <span class="badges bg-lightred">{{$data["Status"]}}</span>
                @else
                    <span class="badges bg-lightgreen">{{$data["Status"]}}</span>
                @endif
            </td>
            <td>
                <a class="me-3" href="{{route('PubDe',$data["id"])}}">
                    <img src="/assets_dashboard/img/icons/edit.svg" alt="img">
                </a>
                <a class="me-3 confirm-text" onclick="return checkD({{$data[" id"]}})" href="{{route('PubDe',$data["id"])}}">
                    <img src="/assets_dashboard/img/icons/delete.svg" alt="img">
                </a>
            </td>
        </tr>
    @endforeach
    </tbody>
    <script>
        function checkD(id){
            let Con =confirm("Are you sure to delete? \n You won't be able to revert this!");
            if(Con){
                return true;
            }else{
                return false;
            }
        }
    </script>
</div>

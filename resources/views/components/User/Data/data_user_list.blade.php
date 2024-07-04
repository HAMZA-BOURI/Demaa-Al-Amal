@props(['Pub'])
<div>
    <tbody>
    @foreach($Pub as $data)
    <tr>
        <td>
            {{$data['Titre']}}
        </td>
        <td>{{Str::limit($data->Description,70)}}</td>
        <td>{{$data['Type_blood']}}</td>
        <td>{{$data['location']}}</td>
        <td>{{$data['UserName']}}</td>
        <td>{{$data['Ville']}}</td>
        <td>
            <a class="me-3" href="">
                <img src="/User_dashboard/img/icons/edit.svg" alt="img">
            </a>
            <a class="me-3 confirm-text" onclick="return checkD()" href="{{route('DeletePub',$data->id)}}">
                <img src="/User_dashboard/img/icons/delete.svg" alt="img">
            </a>
        </td>
    </tr>
    @endforeach
    </tbody>
    <script>
        function checkD(){
            let Con =confirm("Are you sure to delete? \n You won't be able to revert this!");
            if(Con){
                return true;
            }else{
                return false;
            }
        }
    </script>
</div>

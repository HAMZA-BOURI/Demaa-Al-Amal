@props(['Worke'])
<div>
    @foreach($Worke as $Data)
        <tr>
            <td>{{$Data['id']}}</td>
            <td>{{$Data['Nom']}}  {{ $Data['Prenom']}}</td>
            <td>{{$Data['Phone']}}</td>
            <td>{{$Data['mail']}}</td>
            <td>{{$Data['Role']}}</td>
            <td>{{$Data['Date_Start']}}</td>
            <td>{{$Data['CIN']}}</td>
            <td>{{$Data['Center']}}</td>
            <td>
                <a class="me-3" href="#">
                    <img src="/assets_dashboard/img/icons/edit.svg" alt="img">
                </a>
                <a class="me-3 confirm-text" ONCLICK="return checkD()" href="{{route('DeleteW',$Data['id'])}}">
                    <img src="/assets_dashboard/img/icons/delete.svg" alt="img">
                </a>
            </td>
        </tr>
    @endforeach

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

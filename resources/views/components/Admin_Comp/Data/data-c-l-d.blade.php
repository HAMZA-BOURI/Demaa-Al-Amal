@props(["Emp" ,"data"])
<div>
    @foreach($Emp as $Item)
        @if($Item["ID_Center"]===$data["id"])
            <tr class="details" style="border-bottom:1px solid #E9ECEF ;">
                <td
                    style="padding: 10px;vertical-align: top; display: flex;align-items: center;">
                    {{$Item['Nom']}} {{$Item['Prenom']}}
                </td>
                <td style="padding: 10px;vertical-align: top; ">
                    {{$Item['CIN']}}

                </td>
                <td style="padding: 10px;vertical-align: top; ">
                    {{$Item['Date_Start']}}
                </td>
                <td style="padding: 10px;vertical-align: top; ">
                    {{$Item['Role']}}
                </td>
                <td>
                   {{$Item['Center']}}
                    <!--Color bg bg-light...-->
                </td>
                <td style="padding: 10px;vertical-align: top; ">
                    {{$Item['Phone']}}

                </td>
            </tr>
        @endif
    @endforeach
</div>

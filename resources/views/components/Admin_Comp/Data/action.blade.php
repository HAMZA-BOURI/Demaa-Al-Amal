@props(["id"])
<div>
    <td class="text-center">
        <a
            class="action-set"
            href="javascript:void(0);"
            data-bs-toggle="dropdown"
            aria-expanded="true"
        >
            <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
        </a>
        <ul class="dropdown-menu">
            <li>
                <a href="{{route('Show_Center',$id)}}" class="dropdown-item"
                ><img
                        src="/assets_dashboard/img/icons/eye1.svg"
                        class="me-2"
                        alt="img"
                    />Center Detail</a
                >
            </li>
            <li>
                <a href="{{route('FormEditCenter',$id)}}" class="dropdown-item"
                ><img
                        src="/assets_dashboard/img/icons/edit.svg"
                        class="me-2"
                        alt="img"
                    />Edit Center</a
                >
            </li>
            <li name="Request" value="{{$id}}">
                <a
                    href="javascript:void(0);"
                    class="dropdown-item"
                    data-bs-toggle="modal"
                    data-bs-target="#showpayment"
                ><img
                        src="/assets_dashboard/img/icons/request.svg"
                        class="me-2"
                        alt="img"
                        style="width: 21Px;"
                    />Request</a
                >
            </li>
            <li>
                <a
                    href="{{route('Delete_Center',$id)}}" onclick='return checkD({{$id}})'
                    class="dropdown-item confirm-text"
                ><img
                        src="/assets_dashboard/img/icons/delete1.svg"
                        class="me-2"
                        alt="img"
                    />Delete Center</a
                >
            </li>
        </ul>
    </td>
</div>




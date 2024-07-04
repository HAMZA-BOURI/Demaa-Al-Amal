@props(['Worke'])
<div>
    <div class="table-responsive">
        <table class="table  datanew" >
            <thead>
            <tr>
                <th>ID</th>
                <th>Full Name</th>
                <th>Phone</th>
                <th>email</th>
                <th>Role</th>
                <th>Date Start</th>
                <th>CIN</th>
                <th>Center</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody class="reverse-rows">
            <x-Admin_Comp.Data.data_list_-workers :Worke="$Worke"/>
            </tbody>
        </table>
    </div>
</div>

@props(['User'])
<div>
    <div class="table-responsive">
        <table class="table  datanew" >
            <thead>
            <tr>
                <th>ID</th>
                <th>Full Name</th>
                <th>Phone</th>
                <th>email</th>
                <th>UserName</th>
                <th>Type Blood</th>
                <th>CIN</th>
                <th>Adresse</th>
                <th>Action</th>
            </tr>
            </thead>
            <x-Admin_Comp.Data.data-user-list :User="$User"/>
        </table>
    </div>
</div>

@props(['Data_D'])
<div>
    <table class="table datanew">
        <thead>
        <tr>
            <th> ID </th>
            <th>Full Name </th>
            <th>CIN</th>
            <th>Tybe Blood</th>
            <th>Mail</th>
            <th>Address</th>
            <th>Action</th>
        </tr>
        </thead>
        <x-Admin_Comp.Data.data-donor :Data_D="$Data_D"/>
    </table>
</div>

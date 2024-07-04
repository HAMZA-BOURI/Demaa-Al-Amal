@props(['Data_D'])
<div>
    <table class="table datanew">
        <thead>
            <tr>
                <th> ID </th>
                <th>Full Name Donor</th>
                <th>Donation Center</th>
                <th>Tybe Blood</th>
                <th>Date Donation</th>
                <th>Action</th>
            </tr>
        </thead>
        <x-Admin_Comp.Data.data_-t_b_d :Data_D="$Data_D"/>
    </table>
</div>

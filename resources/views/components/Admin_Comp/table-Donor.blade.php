@props(['B_Dlist', 'titre'])
<div >
    <table class="table datatable">
        <thead>
        <tr>
            @if ($titre == 'Blood Donations List')
                <th>
                </th>
            @endif
            <th>ID</th>
            <th>CNI</th>
            <th>Full Name Donor</th>
            <th>Donation Centre</th>
            <th>Blood Type</th>
            <th>Donation Date</th>
            @if ($titre == 'Blood Donations List')
                <th>Action</th>
            @endif
        </tr>
        </thead>
        <x-Admin_Comp.Data.data_t_d :B_Dlist_D="$B_Dlist"  :titre_D="$titre"/>
    </table>
</div>

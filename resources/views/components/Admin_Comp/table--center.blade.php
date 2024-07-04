@props(["centers"])
<div>
    <div class="table-responsive">
        <table class="table datanew">
            <thead>
            <tr>
                <th>Center Name</th>
                <th>Ville</th>
                <th>Date Start</th>
                <th>Status</th>
                <th>Stock Status</th>
                <th>Stock</th>
                <th>Donor number</th>
                <th>Admin Name</th>
                <th class="text-center">Action</th>
            </tr>
            </thead>
            <x-Admin_Comp.Data.data_t_c :centers="$centers"/>
        </table>
    </div>

</div>

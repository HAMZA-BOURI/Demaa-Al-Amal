@props(['request'])
<div>
    <div class="modal fade" id="showpayment" tabindex="-1" aria-labelledby="showpayment" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Show Request</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Request ID</th>
                                <th>Name Center</th>
                                <th>Date</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody id="Request"></tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="editpayment" tabindex="-1" aria-labelledby="editpayment" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Details Request</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form action="{{ route('saveEditRequest') }}" method="post">
                    @csrf
                    <div class="modal-body" id="RequstNote"></div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-submit">Save</button>
                        <button type="button" class="btn btn-cancel" data-bs-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', (event) => {
        const requestLinks = document.getElementsByName('Request');

        requestLinks.forEach(link => {
            link.addEventListener('click', () => {
                let IdCenter = link.getAttribute('value');
                const data = document.getElementById('Request');
                if (data) {
                    let strhtml = '';
                    const requests = @json($request);  // Passing request data as JSON

                    requests.forEach(item => {
                        if (item.ID_Center == IdCenter) {
                            strhtml += `<tr class='bor-b1'>
                                <td>${item.id}</td>
                                <td>${item.Center}</td>
                                <td>${item.Date_ADD}</td>
                                <td>${item.Status}</td>
                                <td>
                                    <a class='me-2' href='javascript:void(0);' onclick="IdRequest(${item.id})" data-bs-target='#editpayment' data-bs-toggle='modal' data-bs-dismiss='modal'>
                                        <img src='/assets_dashboard/img/icons/edit.svg' alt='Edit'/>
                                    </a>
                                    <a class='me-2 confirm-text' href='javascript:void(0);'>
                                        <img src='/assets_dashboard/img/icons/delete.svg' alt='Delete'/>
                                    </a>
                                </td>
                            </tr>`;
                        }
                    });

                    data.innerHTML = strhtml;
                } else {
                    console.error('Element with id "Request" not found.');
                }
            });
        });
    });

    function IdRequest(ID) {
        const NoteRequest = document.getElementById('RequstNote');
        let found = false;
        const requests = @json($request);  // Passing request data as JSON

        requests.forEach(item => {
            if (item.id == ID) {
                NoteRequest.innerHTML = `
                    <div class="row">
                        <div class="col-lg-6 col-sm-12 col-12">
                            <div class="form-group">
                                <label>Date Submitted</label>
                                <div class="input-groupicon">
                                    <input type="text" value="${item.Date_ADD}" class="datetimepicker" disabled/>
                                    <div class="addonset">
                                        <img src="/assets_dashboard/img/icons/datepicker.svg" alt="datepicker"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12 col-12">
                            <div class="form-group">
                                <label>Request ID</label>
                                <input type="hidden" name="idRequests" value="${item.id}" >
                                <input type="text" disabled=""  value="${item.id}"/>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12 col-12">
                            <div class="form-group">
                                <label>Ville</label>
                                <input type="text" disabled value="${item.Ville}"/>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12 col-12">
                            <div class="form-group">
                                <label>Name Center</label>
                                <input type="text" disabled value="${item.Center}"/>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12 col-12">
                            <div class="form-group">
                                <label>Status</label>
                                <select name="Status" class="form-select">
                                    <option ${item.Status == 'Pending' ? 'selected' : ''}>Pending</option>
                                    <option ${item.Status == 'In Progress' ? 'selected' : ''}>In Progress</option>
                                    <option ${item.Status == 'Complete' ? 'selected' : ''}>Complete</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group mb-0">
                                <label>Note</label>
                                <textarea class="form-control" disabled>${item.Note}</textarea>
                            </div>
                        </div>
                    </div>
                `;
                found = true;
            }
        });

        if (!found) {
            NoteRequest.innerHTML = '<p>Request not found</p>';
        }
    }
</script>

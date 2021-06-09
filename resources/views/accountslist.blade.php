
<div class="card mb-3">
    <img src="https://hudauditguide.com/wp-content/uploads/algonquin-accounting.jpg" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">List of items</h5>
        <p class="card-text">You can find here all the informations about items in the system</p>

        <table class="table">
            <thead class="thead-light">
            <tr>
                <th scope="col">TYPE</th>
                <th scope="col">Category</th>
                <th scope="col">Data</th>
                <th scope="col">Amount</th>
                <th scope="col">Comment</th>
                <th scope="col">Operations</th>

            </tr>
            </thead>
            <tbody>
            @foreach($accounts as $account)
                <tr>
                    <td>{{ $account->type }}</td>
                    <td>{{ $account->category }}</td>
                    <td>{{ $account->data }}</td>
                    <td>{{ $account->amount }}</td>
                    <td>{{ $account->comment }}</td>
                    <td>

                        <a href="{{ url('/edit/'.$account->id) }}" class="btn btn-sm btn-warning">Edit</a>

                    </td>


                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>


<x-backend.layouts.master>
    <x-slot name="PageTitle">Users</x-slot>
    <main>
        <div class=" container-fluid px-4">
            <x-backend.layouts.elements.breadcrumb>
                <x-slot name="PageHeader">User Manage</x-slot>
                <li class="breadcrumb-item active">Dashboard</li>
            </x-backend.layouts.elements.breadcrumb>
            <div class="card mb-4">
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email Name</th>
                                <th>Password</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach($users as $user)
                            <tr>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->password}}</td>
                                <td>
                                    <a class="btn btn-secondary" href="#">Edit</a>
                                </td>
                                <td>
                                    <a class="btn btn-danger" href="#">Delete</a>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
</x-backend.layouts.master>
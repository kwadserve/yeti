@extends('admin.layout')
@section('title')
    Users | YIF | Youth Electoral Trained Instructor
@endsection
@section('content')
    <div class="pagetitle">
        <h1>Accepted as YETI</h1>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <!-- Table with stripped rows -->
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Course</th>
                                    <th scope="col">Registered</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $count = 1; ?>
                                @foreach ($users as $user)
                                    <?php $status = App\Models\UserMeta::where('user_id', $user->id)
                                        ->where('meta_key', 'interview_status')
                                        ->first(); ?>
                                    @if ($status && $status->meta_value === 'accepted')
                                        <tr>
                                            <th scope="row">{{ $count }}</th>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>
                                                @if ($user->course_status == 'completed')
                                                    <span
                                                        class="badge rounded-pill bg-success">{{ $user->course_status }}</span>
                                                @else
                                                    <span
                                                        class="badge rounded-pill bg-primary">{{ $user->course_status }}</span>
                                                @endif
                                            </td>
                                            <td>{{ date('d M Y', strtotime($user->created_at)) }}</td>
                                            <td>
                                                <a href="{{ url('admin/users/' . $user->id) }}"
                                                    class="btn btn-sm rounded-pill btn-success">
                                                    <i class="bi bi-eye"></i> View
                                                </a>
                                            </td>
                                        </tr>
                                        <?php $count++; ?>
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                        <!-- End Table with stripped rows -->

                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection

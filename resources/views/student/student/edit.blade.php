<!-- This section will be inserted into the 'content' section of the app layout -->
<div style="padding: 20px;">
    <!-- Content Header (Page header) -->
    <section style="margin-bottom: 20px;">
        <div style="display: flex; justify-content: space-between; align-items: center;">
            <h1>{{ $header_title }}</h1>
            <a href="{{ route('student.index') }}"
                style="background-color: #6c757d; color: white; padding: 10px 20px; text-decoration: none; border-radius: 5px;">Back
                to Student List</a>
        </div>
    </section>

    <!-- Main content -->
    <section>
        <div>
            <div>
                <div style="border: 1px solid #dee2e6; border-radius: 5px;">
                    <div style="background-color: #f8f9fa; padding: 10px; border-bottom: 1px solid #dee2e6;">
                        <h3 style="margin: 0;">Edit Student</h3>
                    </div>
                    <div style="padding: 20px;">
                        <form action="{{ route('student.update', $student->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div style="margin-bottom: 15px;">
                                <label for="name" style="display: block; margin-bottom: 5px;">Name</label>
                                <input type="text"
                                    style="width: 100%; padding: 10px; border: 1px solid #ced4da; border-radius: 5px;"
                                    id="name" name="name" value="{{ $student->name }}" required>
                            </div>
                            <div style="margin-bottom: 15px;">
                                <label for="email" style="display: block; margin-bottom: 5px;">Email</label>
                                <input type="email"
                                    style="width: 100%; padding: 10px; border: 1px solid #ced4da; border-radius: 5px;"
                                    id="email" name="email" value="{{ $student->email }}" required>
                            </div>
                            <div style="margin-bottom: 15px;">
                                <label for="password" style="display: block; margin-bottom: 5px;">Password</label>
                                <input type="password"
                                    style="width: 100%; padding: 10px; border: 1px solid #ced4da; border-radius: 5px;"
                                    id="password" name="password">
                            </div>

                            <div style="text-align: right;">
                                <button type="submit"
                                    style="background-color: #007bff; color: white; padding: 10px 20px; border: none; border-radius: 5px;">Save
                                    Student</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
    </section>
</div>

@extends('includes.template')

@section('content')

<h1>Settings</h1>


<div class="row mt-3">
    {{-- <div class="col-12 col-lg-2 d-none d-lg-block border-lg-end">
        <div class="d-grid gap-2 col-12 mx-auto">
            <a href="#email" class="btn btn-outline-secondary" role="button">Email</a>
            <a href="#password" class="btn btn-outline-secondary" role="button">Password</a>
        </div>
    </div> --}}
    <div class="col-12 col-lg-10 {{--px-lg-5--}}">
        <section id="email" class="mb-3 row">
            <h2>Email</h2>
            <form id="form-update-email" action="" method="post">
                <div class="mb-3 row">
                    <label for="f-ue-currentemail" class="col-sm-6 col-lg-3 col-form-label">Current Email</label>
                    <div class="col-sm-6 col-lg-4">
                        <input type="text" readonly class="form-control-plaintext" id="f-ue-currentemail" name="current_email" value="example@example.com">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="f-ue-newemail" class="col-sm-6 col-lg-3 col-form-label">New Email</label>
                    <div class="col-sm-6 col-lg-4">
                        <input type="email" class="form-control" id="f-ue-newemail" name="new_email">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="f-ue-confirmpassword" class="col-sm-6 col-lg-3 col-form-label">Password</label>
                    <div class="col-sm-6 col-lg-4">
                        <input type="password" class="form-control" id="f-ue-confirmpassword" name="confirm_password">
                    </div>
                </div>
                <div class="mb-3 row">
                    <div class="col-sm-6 col-lg-3"></div>
                    <div class="col-sm-6 col-lg-4">
                        <button type="submit" class="btn btn-primary">Update Email</button>
                        <button type="reset" class="btn btn-outline-secondary">Reset</button>
                    </div>
                </div>
            </form>
        </section>

        <hr>

        <section id="password" class="mb-3 row">
            <h2>Password</h2>
            <form id="form-update-password" action="" method="post">
                <div class="mb-3 row">
                    <label for="f-up-currentpassword" class="col-sm-6 col-lg-3 col-form-label">Current Password</label>
                    <div class="col-sm-6 col-lg-4">
                        <input type="password" class="form-control" id="f-up-currentpassword" name="current_password">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="f-up-newpassword" class="col-sm-6 col-lg-3 col-form-label">New Password</label>
                    <div class="col-sm-6 col-lg-4">
                        <input type="password" class="form-control" id="f-up-newpassword" name="new_password">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="f-up-confirmpassword" class="col-sm-6 col-lg-3 col-form-label">Confirm Password</label>
                    <div class="col-sm-6 col-lg-4">
                        <input type="password" class="form-control" id="f-up-confirmpassword" name="confirm_password">
                    </div>
                </div>
                <div class="mb-3 row">
                    <div class="col-sm-6 col-lg-3"></div>
                    <div class="col-sm-6 col-lg-4">
                        <button type="submit" class="btn btn-primary">Update Password</button>
                        <button type="reset" class="btn btn-outline-secondary">Reset</button>
                    </div>
                </div>
            </form>
        </section>

        <hr>

        <section id="data" class="mb-3 row">
            <h2>Download Data</h2>
            <p>Download your data for use on other applications in the future.</p>
            <form id="form-download-data" action="" method="post">
                <div class="mb-3 row">
                    <label for="f-dd-currentpassword" class="col-sm-6 col-lg-3 col-form-label">Current Password</label>
                    <div class="col-sm-6 col-lg-4">
                        <input type="password" class="form-control" id="f-dd-currentpassword" name="current_password" autocomplete="off">
                    </div>
                </div>
                <div class="mb-3 row">
                    <div class="col-sm-6 col-lg-3"></div>
                    <div class="col-sm-6 col-lg-4">
                        <button type="submit" class="btn btn-primary">Download Account Data</button>
                    </div>
                </div>
            </form>
        </section>

        <hr>

        <section id="delete-account" class="mb-3 row">
            <div class="card border border-danger border-3">
                <div class="card-body">
                    <h2>Delete Account</h2>
                    <p>Deleting your account will immediately delete all your account data. This can't be undone. Be sure you have secured a backup of your data by clicking download data on the section above.</p>

                    <form id="form-delete-account" action="" method="post">
                        <div class="mb-3 row">
                            <label for="f-da-currentemail" class="col-sm-6 col-lg-3 col-form-label">Current Email</label>
                            <div class="col-sm-6 col-lg-4">
                                <input type="text" class="form-control" id="f-da-currentemail" name="current_email" autocomplete="off">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="f-da-currentpassword" class="col-sm-6 col-lg-3 col-form-label">Current Password</label>
                            <div class="col-sm-6 col-lg-4">
                                <input type="password" class="form-control" id="f-da-currentpassword" name="current_password" autocomplete="off">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="f-da-confirmpassword" class="col-sm-6 col-lg-3 col-form-label">Confirm Password</label>
                            <div class="col-sm-6 col-lg-4">
                                <input type="password" class="form-control" id="f-da-confirmpassword" name="confirm_password" autocomplete="off">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <div class="col-sm-6 col-lg-3"></div>
                            <div class="col-sm-6 col-lg-4">
                                <button type="submit" class="btn btn-danger">Delete Your Account</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>

    </div>
</div>

{{-- Delete Account Modal --}}


@endsection

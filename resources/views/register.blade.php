@include('pages.header')

<div class="pt-4 pb-2">
    <h5 class="card-title text-center pb-0 fs-4">Create an Account</h5>
    <p class="text-center small">Please Enter a valid email and phone number we will contact you on this phone/email</p>
</div>

<form class="row g-3 needs-validation" novalidate>
    <div class="col-12">
        <label for="yourName" class="form-label">Organization Name</label>
        <input type="text" name="name" class="form-control" id="yourName" required>
        <div class="invalid-feedback">Please, enter organization name!</div>
    </div>

    <div class="col-12">
        <label for="yourEmail" class="form-label">Valid Email</label>
        <input type="email" name="email" class="form-control" id="yourEmail" required>
        <div class="invalid-feedback">Please enter a valid Email adddress!</div>
    </div>

    <div class="col-12">
        <label for="yourUsername" class="form-label">Phone Number</label>
        <div class="input-group has-validation">
            <input type="text" name="phone_no" class="form-control" id="yourUsername" required>
            <div class="invalid-feedback">Please enter a valid phone number.</div>
        </div>
    </div>

    <div class="col-12">
        <label for="yourPassword" class="form-label">Password</label>
        <input type="password" name="password" class="form-control" id="yourPassword" required>
        <div class="invalid-feedback">Please enter your password!</div>
    </div>

    <div class="col-12">
        <div class="form-check">
            <input class="form-check-input" name="terms" type="checkbox" value="" id="acceptTerms" required>
            <label class="form-check-label" for="acceptTerms">I agree and accept the <a href="#">terms and
                    conditions</a></label>
            <div class="invalid-feedback">You must agree before submitting.</div>
        </div>
    </div>
    <div class="col-12">
        <button class="btn btn-primary w-100" type="submit">Create Account</button>
    </div>
    <div class="col-12">
        <p class="small mb-0">Already have an account? <a href="{{ route('admin.login') }}">Log in</a></p>
    </div>
</form>
@include('pages.footer')

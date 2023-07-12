<div class="careers_form" id="careers_form">
    <form method="POST" action="{{ route('careers-form') }}" enctype="multipart/form-data" id="careersForm">
        @csrf
        @honeypot
        <h4 class="theme_color pb-5">SUBMIT YOUR APPLICATION</h4>

        <div class="row">
            <div class="col-md-4">
                <label for="name">Full Name <span class="required_steric">*</span></label>
            </div>
            <div class="col-md-8">
                <input id="name" name="name" type="text" class="form-control @error('name') border border-danger @enderror" value="{{ old('name') != '' ? old('name'): '' }}" required="">
                @error('name')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <label for="email">Email <span class="required_steric">*</span></label>
            </div>
            <div class="col-md-8">
                <input id="email" name="email" type="email" class="form-control @error('email') border border-danger @enderror" value="{{ old('email') != '' ? old('email'): '' }}" required="">
                @error('email')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <label for="phone">Phone <span class="required_steric">*</span></label>
            </div>
            <div class="col-md-8">
                <input id="phone" name="phone" type="tel" class="form-control @error('phone') border border-danger @enderror" value="{{ old('phone') != '' ? old('phone'): '' }}" required="">
                @error('phone')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <label for="current_company">Current Company</label>
            </div>
            <div class="col-md-8">
                <input id="current_company" name="current_company" type="text" class="form-control @error('current_company') border border-danger @enderror" value="{{ old('current_company') != '' ? old('current_company'): '' }}">
                @error('current_company')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <label for="current_salary">Current Salary</label>
            </div>
            <div class="col-md-8">
                <input id="current_salary" name="current_salary" type="text" class="form-control @error('current_salary') border border-danger @enderror" value="{{ old('current_salary') != '' ? old('current_salary'): '' }}">
                @error('current_salary')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <label for="expected_salary">Expected Salary <span class="required_steric">*</span></label>
            </div>
            <div class="col-md-8">
                <input id="expected_salary" name="expected_salary" type="text" class="form-control @error('expected_salary') border border-danger @enderror" value="{{ old('expected_salary') != '' ? old('expected_salary'): '' }}" required="">
                @error('expected_salary')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
        </div>
   
        <div class="row">
            <div class="col-md-4">
                <label for="linkedin">LinkedIn URL <span class="required_steric">*</span></label>
            </div>
            <div class="col-md-8">
                <input id="linkedin" name="linkedin" type="text" class="form-control @error('linkedin') border border-danger @enderror" value="{{ old('linkedin') != '' ? old('linkedin'): '' }}" required="">
                @error('linkedin')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <label for="hear_about_us">How did you hear about this opportunity? <span class="required_steric">*</span></label>
            </div>
            <div class="col-md-8">
                <input id="hear_about_us" name="hear_about_us" type="text" class="form-control @error('hear_about_us') border border-danger @enderror" value="{{ old('hear_about_us') != '' ? old('hear_about_us'): '' }}" required="">
                @error('hear_about_us')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <label for="resume">Resume/CV <span class="required_steric">*</span></label>
            </div>
            <div class="col-md-8">


                <div class="form-group">
                    <label for="file" class="sr-only">File</label>
                    <div class="input-group">
                        <input type="text" name="file" class="form-control @error('file') border border-danger @enderror" placeholder="No file selected" readonly>
                        <span class="input-group-btn">
                            <div class="btn btn-default  custom-file-uploader">
                                <input type="file" name="resume" onchange="this.form.file.value = this.files.length ? this.files[0].name : ''" />
                                Choose File
                            </div>
                        </span>
                    </div>
                    @error('file')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <label for="cover">Cover Letter <span class="required_steric">*</span></label>
            </div>
            <div class="col-md-8">
                <textarea is="cover" name="cover" class="form-control @error('cover') border border-danger @enderror" rows="8">{{ old('cover') != '' ? old('cover'): '' }}</textarea>
                @error('cover')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 text-center"></div>
            <div class="col-md-8">
                <div class="form-group{{ $errors->has('g-recaptcha-response') ? ' has-error' : '' }}">


                    {!! app('captcha')->display() !!}
                    @if ($errors->has('g-recaptcha-response'))
                    <span class="help-block">
                        <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                    </span>
                    @endif

                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-md-4 text-center"></div>
            <div class="col-md-8">
                <input type="hidden" name="job_title" value="{{ $job_title }}">
                <button type="submit" class="theme_btn dark_btn">Submit now</button>
            </div>
        </div>
    </form>
</div>

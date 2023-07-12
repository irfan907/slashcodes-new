
    <div id="get-quote-form">
        <form action="{{ route('quote-form') }}" method="post">
            @csrf
            @honeypot
            <h2 class="theme_color text-center mt-2">Get Free Quote</h2>
            <div class="row no-gutters">
                <input type="hidden" name="page_source" value="{{ url()->current() }}">
                <div class="form-group col-md-6">
                    <label for="">Name <small class="text-danger">*</small></label>
                    <input type="text" class="form-control @error('name') border border-danger @enderror" name="name" value="{{ old('name') }}" required>
                    @error('name')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="">Email <small class="text-danger">*</small></label>
                    <input type="text" class="form-control @error('email') border border-danger @enderror" name="email" value="{{ old('email') }}" required>
                    @error('email')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="">Phone <small class="text-danger">*</small></label>
                    <input type="text" class="form-control @error('phone') border border-danger @enderror" name="phone" value="{{ old('phone') }}" required>
                    @error('phone')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="">Company <small class="text-danger">*</small></label>
                    <input type="text" class="form-control @error('company') border border-danger @enderror" name="company" value="{{ old('company') }}" required>
                    @error('company')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="">Budget</label>
                    <input type="text" class="form-control @error('budget') border border-danger @enderror" name="budget" value="{{ old('budget') }}">
                    @error('budget')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="">Where you heard about us? <small class="text-danger">*</small></label>
                    <select class="form-control @error('source') border border-danger @enderror" name="source" required>
                        <option value="" selected disabled>Please select</option>
                        <option value="facebook">Facebook</option>
                        <option value="linkedin">Linkedin</option>
                        <option value="google">Google</option>
                        <option value="instagram">Instagram</option>
                        <option value="other">Other</option>
                    </select>
                    @error('source')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group col-md-12">
                    <label for="">Comments</label>
                    <input type="text" class="form-control @error('comments') border border-danger @enderror" name="comments" value="{{ old('comments') }}">
                    @error('comments')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="col-md-12 text-center">
                    <input type="submit" value="Get Free Quote" class="theme_btn" name="" id="">
                </div>
            </div>
        </form>
    </div>

<form action="#" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-md-3">
            <label for="validationCustom04" class="form-label">Country Name</label>
            <select class="form-select form-select-solid form-select-sm @error('country_id') is-invalid @enderror" name="country_id"
                data-control="select2" data-hide-search="false" data-placeholder="Select an Product Type"
                data-allow-clear="true">
                <option></option>
                <option value="1">Option 1</option>
                <option value="1">Option 1</option>
                <option value="1">Option 1</option>
            </select>
            @error('country_id')
                <div class="invalid-feedback"> {{ $message }}</div>
            @enderror
        </div>
        <div class="col-md-3">
            <label for="validationCustom04" class="form-label">Company Name</label>
            <select class="form-select form-select-solid form-select-sm @error('company_id') is-invalid @enderror" name="company_id"
                data-dropdown-parent="#brandAddModal" data-control="select2" data-placeholder="Select an option"
                data-allow-clear="true">
                <option></option>
                <option value="1">Option 1</option>
                <option value="1">Option 1</option>
                <option value="1">Option 1</option>
            </select>
            @error('company_id')
                <div class="invalid-feedback"> {{ $message }}</div>
            @enderror
        </div>
        <div class="col-lg-3">
            <div class="fv-row mb-3">
                <label class="form-label">System Name</label>
                <input name="button_name"
                    class="form-control form-control-sm form-control-solid @error('system_name') is-invalid @enderror"
                    placeholder="Enter system_name" type="text" />
                @error('system_name')
                    <div class="invalid-feedback"> {{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col-lg-3">
            <div class="fv-row mb-3">
                <label class="form-label">Frontend Web site Name</label>
                <input name="button_name"
                    class="form-control form-control-sm form-control-solid @error('frontend_website_name') is-invalid @enderror"
                    placeholder="Enter Frontend ebsite Name" type="text" />
                @error('frontend_website_name')
                    <div class="invalid-feedback"> {{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col-lg-3">
            <div class="fv-row mb-3">
                <label class="form-label">Site Motto</label>
                <input name="system_name"
                    class="form-control form-control-sm form-control-solid @error('site_motto') is-invalid @enderror"
                    placeholder="Enter Site Motto" type="text" />
                @error('site_motto')
                    <div class="invalid-feedback"> {{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col-lg-3">
            <div class="fv-row mb-3">
                <label class="form-label">Site Icon</label>
                <input name="frontend_website_name"
                    class="form-control form-control-sm form-control-solid @error('site_icon') is-invalid @enderror"
                    placeholder="Enter Site Icon" type="file" accept="image/*" />
                @error('site_icon')
                    <div class="invalid-feedback"> {{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col-lg-3">
            <div class="fv-row mb-3">
                <label class="form-label">System Logo White</label>
                <input name="site_motto"
                    class="form-control form-control-sm form-control-solid @error('system_logo_white') is-invalid @enderror"
                    placeholder="Enter System Logo White" type="file" accept="image/*" />
                @error('system_logo_white')
                    <div class="invalid-feedback"> {{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col-lg-3">
            <div class="fv-row mb-3">
                <label class="form-label">System Logo Black</label>
                <input name="site_icon"
                    class="form-control form-control-sm form-control-solid @error('system_logo_black') is-invalid @enderror"
                    placeholder="Enter System Logo Black" type="file" accept="image/*" />
                @error('system_logo_black')
                    <div class="invalid-feedback"> {{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col-lg-3">
            <div class="fv-row mb-3">
                <label class="form-label">System Timezone</label>
                <input name="system_logo_white"
                    class="form-control form-control-sm form-control-solid @error('system_timezone') is-invalid @enderror"
                    placeholder="Enter System Timezone" type="text" />
                @error('system_timezone')
                    <div class="invalid-feedback"> {{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col-lg-3">
            <div class="fv-row mb-3">
                <label class="form-label">Base Color</label>
                <input name="system_logo_black"
                    class="form-control form-control-sm form-control-solid @error('base_color') is-invalid @enderror"
                    placeholder="Enter Base Color" type="text" />
                @error('base_color')
                    <div class="invalid-feedback"> {{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col-lg-3">
            <div class="fv-row mb-3">
                <label class="form-label">Base Hover Color</label>
                <input name="system_timezone"
                    class="form-control form-control-sm form-control-solid @error('base_hover_color') is-invalid @enderror"
                    placeholder="Enter Base Hover Color" type="text" />
                @error('base_hover_color')
                    <div class="invalid-feedback"> {{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col-lg-3">
            <div class="fv-row mb-3">
                <label class="form-label">Secondary Base Color</label>
                <input name="secondary_base_color"
                    class="form-control form-control-sm form-control-solid @error('secondary_base_color') is-invalid @enderror"
                    placeholder="Enter Secondary Base Color" type="text" />
                @error('secondary_base_color')
                    <div class="invalid-feedback"> {{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col-lg-3">
            <div class="fv-row mb-3">
                <label class="form-label">Secondary Base Hover Color</label>
                <input name="secondary_base_hover_color"
                    class="form-control form-control-sm form-control-solid @error('secondary_base_hover_color') is-invalid @enderror"
                    placeholder="Enter Secondary Base Hover Color" type="text" />
                @error('secondary_base_hover_color')
                    <div class="invalid-feedback"> {{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col-lg-3">
            <div class="fv-row mb-3">
                <label class="form-label">Phone One</label>
                <input name="phone_one"
                    class="form-control form-control-sm form-control-solid @error('phone_one') is-invalid @enderror"
                    placeholder="Enter Phone One" type="text" />
                @error('phone_one')
                    <div class="invalid-feedback"> {{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col-lg-3">
            <div class="fv-row mb-3">
                <label class="form-label">Phone Two</label>
                <input name="phone_two"
                    class="form-control form-control-sm form-control-solid @error('phone_two') is-invalid @enderror"
                    placeholder="Enter Phone Two" type="text" />
                @error('phone_two')
                    <div class="invalid-feedback"> {{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col-lg-3">
            <div class="fv-row mb-3">
                <label class="form-label">Whatsapp Number</label>
                <input name="whatsapp_number"
                    class="form-control form-control-sm form-control-solid @error('whatsapp_number') is-invalid @enderror"
                    placeholder="Enter Whatsapp Number" type="text" />
                @error('whatsapp_number')
                    <div class="invalid-feedback"> {{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col-lg-3">
            <div class="fv-row mb-3">
                <label class="form-label">Default Language</label>
                <input name="default_language"
                    class="form-control form-control-sm form-control-solid @error('default_language') is-invalid @enderror"
                    placeholder="Enter Default Language" type="text" />
                @error('default_language')
                    <div class="invalid-feedback"> {{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="col-lg-3">
            <div class="fv-row mb-3">
                <label class="form-label">Contact Email</label>
                <input name="contact_email"
                    class="form-control form-control-sm form-control-solid @error('contact_email') is-invalid @enderror"
                    placeholder="Enter Contact Email" type="text" />
                @error('contact_email')
                    <div class="invalid-feedback"> {{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col-lg-3">
            <div class="fv-row mb-3">
                <label class="form-label">Support Email</label>
                <input name="support_email"
                    class="form-control form-control-sm form-control-solid @error('support_email') is-invalid @enderror"
                    placeholder="Enter Support Email" type="text" />
                @error('support_email')
                    <div class="invalid-feedback"> {{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col-lg-3">
            <div class="fv-row mb-3">
                <label class="form-label">Info Email</label>
                <input name="info_email"
                    class="form-control form-control-sm form-control-solid @error('info_email') is-invalid @enderror"
                    placeholder="Enter Info Email" type="text" />
                @error('info_email')
                    <div class="invalid-feedback"> {{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col-lg-3">
            <div class="fv-row mb-3">
                <label class="form-label">Sales Email</label>
                <input name="sales_email"
                    class="form-control form-control-sm form-control-solid @error('sales_email') is-invalid @enderror"
                    placeholder="Enter Sales Email" type="text" />
                @error('sales_email')
                    <div class="invalid-feedback"> {{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col-lg-3">
            <div class="fv-row mb-3">
                <label class="form-label">Facebook URL</label>
                <input name="facebook_url"
                    class="form-control form-control-sm form-control-solid @error('facebook_url') is-invalid @enderror"
                    placeholder="Enter Facebook URL" type="text" />
                @error('facebook_url')
                    <div class="invalid-feedback"> {{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col-lg-3">
            <div class="fv-row mb-3">
                <label class="form-label">Twitter URL</label>
                <input name="twitter_url"
                    class="form-control form-control-sm form-control-solid @error('twitter_url') is-invalid @enderror"
                    placeholder="Enter Twitter URL" type="text" />
                @error('twitter_url')
                    <div class="invalid-feedback"> {{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col-lg-3">
            <div class="fv-row mb-3">
                <label class="form-label">Instagram URL</label>
                <input name="instagram_url"
                    class="form-control form-control-sm form-control-solid @error('instagram_url') is-invalid @enderror"
                    placeholder="Enter Instagram URL" type="text" />
                @error('instagram_url')
                    <div class="invalid-feedback"> {{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col-lg-3">
            <div class="fv-row mb-3">
                <label class="form-label">Linkedin URL</label>
                <input name="linkedin_url"
                    class="form-control form-control-sm form-control-solid @error('linkedin_url') is-invalid @enderror"
                    placeholder="Enter Linkedin URL" type="text" />
                @error('linkedin_url')
                    <div class="invalid-feedback"> {{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col-lg-3">
            <div class="fv-row mb-3">
                <label class="form-label">Youtube URL</label>
                <input name="youtube_url"
                    class="form-control form-control-sm form-control-solid @error('youtube_url') is-invalid @enderror"
                    placeholder="Enter Youtube URL" type="text" />
                @error('youtube_url')
                    <div class="invalid-feedback"> {{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col-lg-3">
            <div class="fv-row mb-3">
                <label class="form-label">Github URL</label>
                <input name="github_url"
                    class="form-control form-control-sm form-control-solid @error('github_url') is-invalid @enderror"
                    placeholder="Enter Github URL" type="text" />
                @error('github_url')
                    <div class="invalid-feedback"> {{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col-lg-3">
            <div class="fv-row mb-3">
                <label class="form-label">Portfolio URL</label>
                <input name="portfolio_url"
                    class="form-control form-control-sm form-control-solid @error('portfolio_url') is-invalid @enderror"
                    placeholder="Enter Portfolio URL" type="text" />
                @error('portfolio_url')
                    <div class="invalid-feedback"> {{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col-lg-3">
            <div class="fv-row mb-3">
                <label class="form-label">Fiver URL</label>
                <input name="fiver_url"
                    class="form-control form-control-sm form-control-solid @error('fiver_url') is-invalid @enderror"
                    placeholder="Enter fiver_url" type="text" />
                @error('fiver_url')
                    <div class="invalid-feedback"> {{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col-lg-3">
            <div class="fv-row mb-3">
                <label class="form-label">Upwork url</label>
                <input name="upwork_url"
                    class="form-control form-control-sm form-control-solid @error('upwork_url') is-invalid @enderror"
                    placeholder="Enter upwork_url" type="text" />
                @error('upwork_url')
                    <div class="invalid-feedback"> {{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col-lg-3">
            <div class="fv-row mb-3">
                <label class="form-label">Service Days</label>
                <input name="service_days"
                    class="form-control form-control-sm form-control-solid @error('service_days') is-invalid @enderror"
                    placeholder="Enter Service Days" type="text" />
                @error('service_days')
                    <div class="invalid-feedback"> {{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col-lg-3">
            <div class="fv-row mb-3">
                <label class="form-label">Service Time</label>
                <input name="service_time"
                    class="form-control form-control-sm form-control-solid @error('service_time') is-invalid @enderror"
                    placeholder="Enter service_time" type="time" />
                @error('service_time')
                    <div class="invalid-feedback"> {{ $message }}</div>
                @enderror
            </div>
        </div>
    </div>
</form>

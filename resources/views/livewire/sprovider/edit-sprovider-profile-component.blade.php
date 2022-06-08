<div>
    <div class="section-title-01 honmob">
        <div class="bg_parallax image_02_parallax"></div>
        <div class="opacy_bg_02">
            <div class="container">
                <h1>Edit Profile</h1>
                <div class="crumbs">
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li>/</li>
                        <li>Edit Profile</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <section class="content-central">
        <div class="content_info">
            <div class="paddings-mini">
                <div class="container">
                    <div class="row portfolioContainer">
                        <div class="col-md-12 profile1">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-md-6">
                                            Edit Profile
                                        </div>
                                        <div class="col-md-6">
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            @if (Session::has('message'))
                                                <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                                            @endif
                                            <form class="form-horizontal" wire:submit.prevent="updateProfile">
                                                @csrf
                                                <div class="form-group">
                                                    <label for="image" class="control-label col-sm-3">Profile Image: </label>
                                                    <div class="col-sm-9">
                                                        <input type="file" class="form-control-file" name="image" wire:model="newimage"/>
                                                        @error('newimage')
                                                            <div class="text-danger">{{ $message }}</div>
                                                        @enderror
                                                        @if ($newimage)
                                                            <img src="{{ $newimage->temporaryUrl() }}" width="220" />
                                                        @elseif ($image)
                                                            <img src="{{ asset('images/sproviders') }}/{{ $image }}" width="220" />
                                                        @else
                                                            <img src="{{ asset('images/sproviders/default.png') }}" width="220" />
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="about" class="control-label col-sm-3">About: </label>
                                                    <div class="col-sm-9">
                                                        <textarea class="form-control" name="about" wire:model="about"></textarea>
                                                        @error('about')
                                                            <div class="text-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="city" class="control-label col-sm-3">city: </label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" name="city" wire:model="city"/>
                                                        @error('city')
                                                            <div class="text-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="service_category_id" class="control-label col-sm-3">Service Category: </label>
                                                    <div class="col-sm-9">
                                                        <select name="featured" class="form-control" wire:model="service_category_id">
                                                                @foreach ($scategories as $scategory)
                                                                    <option value="{{ $scategory->id }}">{{ $scategory->name }}</option>
                                                                @endforeach
                                                        </select>
                                                        @error('service_category_id')
                                                            <div class="text-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="service_location" class="control-label col-sm-3">Service Locations Zipcode/Pincode: </label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" name="service_location" wire:model="service_location"/>
                                                        @error('service_location')
                                                            <div class="text-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="" class="control-label col-sm-3"></label>
                                                    <div class="col-sm-9">
                                                        <button type="submit" class="btn btn-success pull-right">Update Profile</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
